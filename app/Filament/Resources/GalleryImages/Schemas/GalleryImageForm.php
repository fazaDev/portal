<?php

namespace App\Filament\Resources\GalleryImages\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class GalleryImageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('gallery_id')
                    ->relationship('gallery', 'title')
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    // ->multiple()
                    ->directory('gallery-images/images')
                    ->optimize('webp')
                    ->resize(50)
                    ->required(),
                TextInput::make('caption'),
                TextInput::make('order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
