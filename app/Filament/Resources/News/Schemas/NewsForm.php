<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DateTimePicker;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Dasar')
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul Berita')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, $state, Set $set) =>
                                $operation === 'create' ? $set('slug', \Str::slug($state)) : null
                            ),

                        TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->maxLength(255)
                            ->readOnly()
                            ->unique(ignoreRecord: true),

                        Textarea::make('excerpt')
                            ->label('Ringkasan (Excerpt)')
                            ->maxLength(500)
                            ->rows(3)
                            ->columnSpanFull(),

                        RichEditor::make('content')
                            ->label('Konten')
                            ->required()
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
                
                Section::make('Gambar')
                    ->schema([
                        FileUpload::make('thumbnail')
                            ->image()
                            ->required()
                            ->columnSpanFull()
                            ->label('Gambar')
                            ->optimize('webp')
                            ->directory('news/images')
                            ->visibility('public')
                            ->disk('public'),
                    ]),
                
                Section::make('Kategori & Penulis')
                    ->schema([
                        Select::make('category_id')
                            ->label('Kategori')
                            ->relationship('category', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        Select::make('user_id')
                            ->label('Penulis')
                            ->relationship('user', 'name')
                            ->searchable()
                            ->preload()
                            ->default(auth()->id())
                            ->required(),
                    ])
                    ->columns(2),



                Section::make('Status & Publikasi')
                    ->schema([
                        Toggle::make('is_published')
                            ->label('Diterbitkan')
                            ->default(false)
                            ->helperText('Tandai sebagai diterbitkan untuk menampilkan di situs web.'),

                        DateTimePicker::make('published_at')
                            ->label('Tanggal Publikasi')
                            ->nullable()
                            ->native(false),
                    ])
                    ->columns(2),
            ]);
    }
}
