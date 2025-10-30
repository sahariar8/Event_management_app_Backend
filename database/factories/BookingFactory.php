<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->randomElement(range(1, 10)),
            'event_id' => fake()->randomElement(range(11, 20)),
            "ticket_qty" => fake()->randomElement([1, 2, 3, 4, 5]),
            "total_price" => fake()->randomElement([10, 20, 30, 40, 50]),
            "status" => fake()->randomElement(['pending', 'confirmed', 'cancelled']),
        ];
    }
}
