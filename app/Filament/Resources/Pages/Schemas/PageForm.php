<?php

namespace App\Filament\Resources\Pages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;
use Filament\Forms\Form;

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255),

                TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->unique(ignoreRecord: true),

                Textarea::make('content')
                    ->label('Content')
                    ->rows(10)
                    ->required(),

                TextInput::make('seo_title')
                    ->label('SEO Title'),

                Textarea::make('seo_description')
                    ->label('SEO Description'),

                FileUpload::make('featured_image')
                    ->label('Featured Image')
                    ->image()
                    ->directory('pages')
                    ->nullable(),
            ]);
    }
}