<?php

namespace App\Providers\Filament\Pages\Tenancy;

use App\Models\Workspace;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Tenancy\RegisterTenant;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class RegisterWorkspace extends RegisterTenant
{
    public static function getLabel(): string
    {
        return 'Create Workspace';
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name'),
            ]);
    }

    protected function handleRegistration(array $data): Workspace
    {
        $user = Auth::user();

        $workspace = Workspace::create([
            'user_id' => $user->id,
            'name'    => $data['name'],
            'current' => true,
        ]);

        return $workspace;
    }
}
