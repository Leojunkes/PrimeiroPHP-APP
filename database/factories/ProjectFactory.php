<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
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
    return [
        'title' => implode(' ', fake()->words(5)), // Corrigido para transformar as palavras em uma string
        'description' => fake()->randomHtml(),
        'ends_at' => fake()->dateTimeBetween('now', '+3 days'),
        'status' => fake()->randomElement(['open', 'closed']),
        'tech_stack' => fake()->randomElement(['React', 'php', 'Laravel', 'Vue', 'Angular', 'tailwindcss', 'javascript']), // Corrigido para usar um array
        'created_by' => User::factory(),
    ];
}

}
