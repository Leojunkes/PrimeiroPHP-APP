<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use App\Models\Proposal;
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

        // Cria 50 projetos aleatórios (não associando diretamente aos usuários)
        Project::factory()->count(50)->create();
        
        // Chama a função para criar projetos associados a usuários
        $this->createProjectsForRandomUsers();
    }

    /**
     * Função para criar projetos para usuários aleatórios e criar propostas para esses projetos.
     */
    private function createProjectsForRandomUsers(): void
    {
        // Seleciona 50 usuários aleatórios e cria um projeto para cada um
        User::query()->inRandomOrder()->limit(50)->get()
            ->each(function (User $u) {
                // Cria um projeto associado ao usuário
                $project = Project::factory()->create(['created_by' => $u->id]);

                // Cria propostas para o projeto recém-criado
                Proposal::factory()->count(random_int(4, 45))->create([
                    'project_id' => $project->id,
                ]);
            });
    }
}
