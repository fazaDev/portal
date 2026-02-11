<?php

namespace App\Filament\Resources\Documents\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class DocumentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('category')
                    ->required(),
                TextInput::make('year')
                    ->numeric(),
                TextInput::make('file')
                    ->required(),
                TextInput::make('file_size')
                    ->numeric(),
                Toggle::make('is_published')
                    ->required(),
            ]);
    }
}
