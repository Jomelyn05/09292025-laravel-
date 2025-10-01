<?php
namespace Database\Factories;
use App\Models\Employer;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    protected $model = \App\Models\Job::class;

    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'employer_id'=> Employer::factory(),
            'about' => '$100,000,000',
        ];
    }
}
