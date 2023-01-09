<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cnm'            => $this->faker->name(),
            'email'          => $this->faker->unique()->safeemail(),
            'logo'           => $this->faker->imageUrl(100,100),
            'website'        => $this->faker->url()
        ];
    }
}


