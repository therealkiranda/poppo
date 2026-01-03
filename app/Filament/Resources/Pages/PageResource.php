<?php

namespace App\Filament\Resources\Pages;

use App\Filament\Resources\Pages\Pages\CreatePage;
use App\Filament\Resources\Pages\Pages\EditPage;
use App\Filament\Resources\Pages\Pages\ListPages;
use App\Filament\Resources\Pages\Schemas\PageForm;
use App\Filament\Resources\Pages\Tables\PagesTable;
use App\Models\Page;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms; // <--- Make sure this is imported

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PageForm::configure($schema)
            ->schema([
                Forms\Components\TextInput::make('hero_title')->required()->label('Hero Title'),
                Forms\Components\TextInput::make('hero_subtitle')->required()->label('Hero Subtitle'),
                Forms\Components\TextInput::make('host_cta_text')->required()->label('Host Button Text'),
                Forms\Components\TextInput::make('host_cta_link')->required()->label('Host Button Link'),
                Forms\Components\TextInput::make('agent_cta_text')->required()->label('Agent Button Text'),
                Forms\Components\TextInput::make('agent_cta_link')->required()->label('Agent Button Link'),
                Forms\Components\FileUpload::make('hero_background')
                    ->image()
                    ->directory('homepage')
                    ->label('Hero Background'),
                Forms\Components\TextInput::make('host_earnings_text')->label('Host Earnings Text'),
                Forms\Components\TextInput::make('agent_commission_text')->label('Agent Commission Text'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return PagesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPages::route('/'),
            'create' => CreatePage::route('/create'),
            'edit' => EditPage::route('/{record}/edit'),
        ];
    }
}
