<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'phone' => $this->faker->phoneNumber(),
            'street' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'zip' => rand(0000, 99999),
            'dob' => $this->faker->date(),
            'ssn' => "AAA-GG-SSSS",
            'driver_license' => "849339 ",
            'dl_issue_date' => $this->faker->date(),
            'dl_exp_date' => $this->faker->date(),
            'anual_gross_income' => \rand(10000, 100000),
            'additional_income' => rand(4000, 20000),
            'status' => 'pending',
            'created_at' => \now(),
        ];
    }
}