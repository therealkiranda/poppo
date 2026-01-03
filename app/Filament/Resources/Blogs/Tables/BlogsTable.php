<?php

namespace App\Filament\Resources\Blogs\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class BlogsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('slug'),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ]);
    }
}