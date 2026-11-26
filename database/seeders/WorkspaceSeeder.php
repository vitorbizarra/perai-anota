<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Workspace;
use Illuminate\Database\Seeder;

class WorkspaceSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();

        if (!$user) {
            return;
        }

        Workspace::factory()->create([
            'user_id' => $user->id,
            'name'    => 'Default Workspace',
            'current' => true,
        ]);
    }
}
