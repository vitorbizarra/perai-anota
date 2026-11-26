<?php

namespace App\Providers\Filament\Pages\Tenancy;

use Filament\Forms\Components;
use Filament\Pages\Tenancy\EditTenantProfile;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class EditWorkspaceProfile extends EditTenantProfile
{
    public static function getLabel(): string
    {
        return 'Workspace Profile';
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Details')
                    ->components([
                        Components\TextInput::make('name')
                            ->required()
                            ->maxLength(64),
                    ]),
            ]);
    }
}
