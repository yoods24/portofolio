<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\User;
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
        $user = User::first();
        return [
            'title' => $title,
            'user_id' => $user->id,
            'description' => fake()->text(100),
            'url' => fake()->url(),
            'github_url' => fake()->url(),
            'slug' => Str::slug($title),
        ];
    }
}
