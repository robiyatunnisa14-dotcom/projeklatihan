<?php

namespace App\Filament\Resources\Ppdbs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PpdbForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->label('Nama Lengkap')
                    ->required(),

                TextInput::make('nisn')
                    ->label('NISN'),

                Select::make('jenis_kelamin')
                    ->options([
                    'L' => 'Laki-laki',
                    'P' => 'Perempuan',
                ]),

                DatePicker::make('tanggal_lahir')
                    ->label('Tanggal Lahir'),

                TextInput::make('asal_sekolah')
                    ->label('Asal Sekolah'),

                TextInput::make('jurusan')
                    ->label('Jurusan'),

                TextInput::make('kelas')
                    ->label('Kelas'),

                TextInput::make('no_hp')
                    ->label('No HP'),

                Textarea::make('alamat')
                    ->label('Alamat'),

                //
            ]);
    }
}
