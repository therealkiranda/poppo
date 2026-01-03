<?php

namespace App\Filament\Resources\Pages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;

class PageForm
{
    public static function configure($schema)
    {
        return $schema
            ->schema([
                TextInput::make('title')->required(),
                TextInput::make('slug')->required(),
                FileUpload::make('featured_image')->label('Page Image'),

                // Homepage fields
                TextInput::make('hero_title')->label('Hero Title'),
                Textarea::make('hero_subtitle')->label('Hero Subtitle'),
                FileUpload::make('hero_video')->label('Hero Video')->directory('homepage_videos'),
                TextInput::make('host_cta_link')->label('Host CTA Link'),
                TextInput::make('agent_cta_link')->label('Agent CTA Link'),
                Textarea::make('earnings_text')->label('Earnings Section')->helperText('Supports HTML for styling.'),
            ]);
    }
}