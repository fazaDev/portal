<?php

namespace App\Filament\Resources\HeroSliders\Schemas;

use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class HeroSliderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Dasar')
                    ->schema([
                        TextInput::make('title'),
                        TextInput::make('subtitle'),
                        TextInput::make('link'),
                        TextInput::make('button_text'),
                    ])
                    ->columns(1),

                Section::make('Gambar dan Status')
                    ->schema([
                        FileUpload::make('image')
                            ->image()
                            ->required()
                            ->directory('hero-sliders/images')
                            ->optimize('webp')
                            ->resize(50)
                            ->imageEditor()
                            ->visibility('public')
                            ->disk('public'),
                        Toggle::make('is_active')
                            ->required(),
                        TextInput::make('order')
                            ->required()
                            ->numeric()
                            ->default(0),
                    ])
                    ->columns(1),
            ]);
    }
}
