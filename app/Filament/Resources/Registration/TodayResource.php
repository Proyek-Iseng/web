<?php

namespace App\Filament\Resources\Registration;

use App\Filament\Resources\Registration\TodayResource\Pages;
use App\Filament\Resources\Registration\TodayResource\RelationManagers;
use App\Models\Registration;
use App\Models\Registration\Today;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TodayResource extends Resource
{
    protected static ?string $model = Registration::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Today';
    protected static ?string $navigationGroup = 'Registration';

    // public static function form(Form $form): Form
    // {
    //     return $form
    //         ->schema([
    //             //
    //         ]);
    // }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn (Builder $query) => $query->where([
                ['registration_date', '=', now()],
                ['status', '=', true]
            ]))
            ->columns([
                TextColumn::make('no')
                    ->rowIndex(),
                TextColumn::make('registration_number')
                    ->translateLabel()
                    ->numeric(),
                TextColumn::make('patient.medical_record'),
                TextColumn::make('timetable.polyclinic')
                    ->sortable(true),
                TextColumn::make('timetable.doctor.name'),
            ])
            ->defaultSort('registration_number')
            ->persistSortInSession()
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageTodays::route('/'),
        ];
    }
}
