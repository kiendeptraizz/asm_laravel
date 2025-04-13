<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = fake()->randomElement(['pending', 'processing', 'shipping', 'completed', 'cancelled']);
        $paymentStatus = $status === 'completed' ? 'paid' : fake()->randomElement(['pending', 'paid', 'failed']);
        $totalPrice = fake()->randomFloat(2, 100000, 10000000);
        $shippingCost = fake()->randomFloat(2, 20000, 50000);
        $discount = fake()->boolean(30) ? fake()->randomFloat(2, 10000, 100000) : 0;

        return [
            'order_number' => strtoupper(Str::random(10)),
            'user_id' => User::factory(),
            'status' => $status,
            'total_price' => $totalPrice,
            'shipping_cost' => $shippingCost,
            'discount' => $discount,
            'payment_method' => fake()->randomElement(['cod', 'bank_transfer', 'credit_card', 'momo', 'zalopay']),
            'payment_status' => $paymentStatus,
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->email(),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->streetAddress(),
            'province' => fake()->city(),
            'district' => fake()->word(),
            'ward' => fake()->word(),
            'note' => fake()->boolean(30) ? fake()->sentence() : null,
        ];
    }
}
