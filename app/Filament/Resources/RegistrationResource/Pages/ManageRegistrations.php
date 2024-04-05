<?php

namespace App\Filament\Resources\RegistrationResource\Pages;

use App\Filament\Resources\RegistrationResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Database\Eloquent\Builder;

class ManageRegistrations extends ManageRecords
{
    protected static string $resource = RegistrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'today' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where([
                    ['registration_date', '=', now()],
                    ['status', '=', 1]
                ])),
            'unconfirmed' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 0))

        ];
    }
}
