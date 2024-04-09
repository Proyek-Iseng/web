<?php

namespace App\Filament\Resources\Registration\UnconfirmedResource\Pages;

use App\Filament\Resources\Registration\UnconfirmedResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageUnconfirmeds extends ManageRecords
{
    protected static string $resource = UnconfirmedResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
