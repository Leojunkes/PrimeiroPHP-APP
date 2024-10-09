<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Cria 200 usuários
        User::factory()->count(200)->create();

        // Cria 50 projetos aleatoriamente (não associando diretamente aos usuários)
        Project::factory()->count(50)->create();
        
        // Seleciona 50 usuários aleatórios e cria um projeto para cada um
        User::query()->inRandomOrder()->limit(50)->get()
            ->each(function (User $u) {
                Project::factory()->create(['created_by' => $u->id]);
            });
    }
}
