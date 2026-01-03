<?php

namespace App\Filament\Resources\Homepages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class HomepageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('hero_title'),
                TextInput::make('hero_subtitle'),
                TextInput::make('host_cta_text'),
                TextInput::make('host_cta_link'),
                TextInput::make('agent_cta_text'),
                TextInput::make('agent_cta_link'),
                TextInput::make('hero_background'),
            ]);
    }
}
