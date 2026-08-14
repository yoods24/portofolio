<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence();

        return [
            'title' => $title,
            'user_id' => 1,
            'description' => fake()->text(100),
            'url' => fake()->url(),
            'github_url' => fake()->url(),
            'slug' => Str::slug($title),
        ];
    }
}
