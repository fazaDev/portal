<?php

namespace App\Filament\Resources\Announcements\Schemas;

use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class AnnouncementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Pengumuman')
                    ->schema([
                        TextInput::make('title')
                            ->live(onBlur: true)
                            ->afterStateUpdated(function ($state, callable $set) {
                                $set('slug', Str::slug($state));
                            })
                            ->required(),
                        TextInput::make('slug')
                            ->disabled()
                            ->dehydrated()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255)
                            ->required(),
                        DatePicker::make('date')
                            ->required(),
                        DatePicker::make('expiry_date'),
                    ]),
                
                Section::make('Informasi Tambahan')
                    ->schema([
                        FileUpload::make('file')
                            ->required(),
                        Toggle::make('is_active')
                            ->helperText('Aktifkan pengumuman')
                            ->default(true)
                            ->required(),
                        RichEditor::make('description')
                            ->columnSpanFull(),
                    ])
            ]);
    }
}
