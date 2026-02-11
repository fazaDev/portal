<?php

namespace App\Filament\Resources\Agendas\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\RichEditor;

class AgendaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Agenda')
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul Agenda')
                            ->maxLength(255)
                            ->columns(2)
                            ->required(),
                        DatePicker::make('date')
                            ->label('Tanggal')
                            ->columns(2)
                            ->required(),
                        TimePicker::make('time')
                            ->columns(2)
                            ->label('Waktu'),
                        TextInput::make('location')
                            ->columns(2)
                            ->label('Lokasi'),
                        Toggle::make('is_active')
                            ->helperText('Agenda ini akan ditampilkan di halaman agenda jika aktif')
                            ->label('Aktif')
                            ->required(),
                        RichEditor::make('description')
                            ->label('Deskripsi')
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull(),
                ]);
    }
}
