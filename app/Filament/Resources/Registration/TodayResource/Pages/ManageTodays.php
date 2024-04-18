<?php

namespace App\Filament\Resources\Registration\TodayResource\Pages;

use App\Filament\Resources\Registration\TodayResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTodays extends ManageRecords
{
    protected static string $resource = TodayResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
