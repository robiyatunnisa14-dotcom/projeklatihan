<?php

namespace App\Filament\Resources\Ppdbs;

use App\Filament\Resources\Ppdbs\Pages\CreatePpdb;
use App\Filament\Resources\Ppdbs\Pages\EditPpdb;
use App\Filament\Resources\Ppdbs\Pages\ListPpdbs;
use App\Filament\Resources\Ppdbs\Schemas\PpdbForm;
use App\Filament\Resources\Ppdbs\Tables\PpdbsTable;
use App\Models\Ppdb;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PpdbResource extends Resource
{
    protected static ?string $model = Ppdb::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nama';

    public static function form(Schema $schema): Schema
    {
        return PpdbForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PpdbsTable::configure($table);
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
            'index' => ListPpdbs::route('/'),
            'create' => CreatePpdb::route('/create'),
            'edit' => EditPpdb::route('/{record}/edit'),
        ];
    }
}
