<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AppSettingsResource\Pages;
use App\Filament\Resources\AppSettingsResource\RelationManagers;
use App\Models\AppSettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;


class AppSettingsResource extends Resource
{
    protected static ?string $model = AppSettings::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('charge_value')
                    ->required(),
                Forms\Components\TextInput::make('sar_exchange_rate')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('charge_value'),
                Tables\Columns\TextColumn::make('sar_exchange_rate'),
                Tables\Columns\TextColumn::make('created_at')->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
            'index' => Pages\ListAppSettings::route('/'),
            'create' => Pages\CreateAppSettings::route('/create'),
            'edit' => Pages\EditAppSettings::route('/{record}/edit'),
        ];
    }
}
