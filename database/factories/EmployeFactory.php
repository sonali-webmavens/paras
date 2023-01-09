<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Employe;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employe>
 */
class EmployeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstname'     => $this->faker->word(),
            'lastname'      => $this->faker->word(),
            'company_id'=> function() {
                return Company::factory()->create()->id;
            },
            'email'         => $this->faker->unique()->safeEmail(),
            'phone'         => '7778888999',
        ];
    }
}

