<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'user_id' => User::inRandomOrder()->first()->id,
            'amount' => $this->faker->randomFloat(2, 10, 100), 
            'status' => $this->faker->randomElement(['Draft', 'Paid', 'Outstanding', 'Past-due']),
            'invoice_number' => $this->faker->unique()->regexify('[A-Z0-9]{8}-[0-9]{4}'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
