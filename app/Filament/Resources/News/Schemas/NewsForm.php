<?php

namespace App\Filament\Resources\News\Schemas;

use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Group;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DateTimePicker;
use Filament\Schemas\Components\Utilities\Set;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(['default' => 1, 'lg' => 3]) // Set 3 columns for desktop
            ->components([
                // Group 1: Main Content (Left, 2/3 width)
                Group::make()
                    ->columnSpan(['default' => 1, 'lg' => 2])
                    ->schema([
                        Section::make('Konten Berita')
                            ->schema([
                                TextInput::make('title')
                                    ->label('Judul Berita')
                                    ->required()
                                    ->live()
                                    ->maxLength(100)
                                    ->rules(['max:100'])
                                    ->afterStateUpdated(
                                        fn(string $operation, $state, Set $set) =>
                                        $operation === 'create'
                                        ? $set('slug', Str::slug($state))
                                        : null
                                    )
                                    ->helperText(function ($state) {
                                        $length = strlen($state ?? '');

                                        if ($length <= 60) {
                                            return "🟢 $length karakter — Panjang judul SEO optimal";
                                        }

                                        if ($length <= 100) {
                                            return "🟡 $length karakter — Masih aman, tapi bisa dipersingkat";
                                        }

                                        return "🔴 $length karakter — Terlalu panjang untuk SEO";
                                    }),

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
                                    ->label('Konten Lengkap')
                                    ->required()
                                    ->columnSpanFull()
                                    ->fileAttachmentsDirectory('news/content-images')
                                    ->fileAttachmentsVisibility('public'),
                            ])
                            ->columns(2),

                        Section::make('SEO & Metadata')
                            ->description('Optimasi untuk mesin pencari dan media sosial')
                            ->schema([
                                TextInput::make('meta_title')
                                    ->label('Meta Title')
                                    ->placeholder('Judul khusus untuk hasil pencarian')
                                    ->maxLength(255),

                                Textarea::make('meta_description')
                                    ->label('Meta Description')
                                    ->placeholder('Deskripsi singkat untuk hasil pencarian')
                                    ->rows(3),

                                TextInput::make('meta_keywords')
                                    ->label('Meta Keywords')
                                    ->placeholder('Kata kunci dipisahkan koma'),

                                FileUpload::make('og_image')
                                    ->label('Social Share Image (OG Image)')
                                    ->image()
                                    ->disk('public')
                                    ->optimize('webp')
                                    ->directory('news/og-images')
                                    ->visibility('public'),
                            ])
                            ->collapsible(),
                    ]),

                // Group 2: Sidebar (Right, 1/3 width)
                Group::make()
                    ->columnSpan(['default' => 1, 'lg' => 1])
                    ->schema([
                        Section::make('Status & Publikasi')
                            ->schema([
                                Toggle::make('is_published')
                                    ->label('Publikasikan')
                                    ->default(false)
                                    ->onColor('success')
                                    ->offColor('danger')
                                    ->helperText('Tampilkan berita ini di website publik?'),

                                DateTimePicker::make('published_at')
                                    ->label('Waktu Publikasi')
                                    ->default(now())
                                    ->nullable()
                                    ->native(false),
                            ]),

                        Section::make('Atribut')
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
                            ]),

                        Section::make('Gambar Utama')
                            ->schema([
                                FileUpload::make('thumbnail')
                                    ->image()
                                    ->required()
                                    ->label('Thumbnail')
                                    ->optimize('webp')
                                    ->directory('news/thumbnails')
                                    ->visibility('public')
                                    ->disk('public')
                                    ->imageEditor(),
                            ]),
                    ]),
            ]);
    }
}
