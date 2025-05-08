<?php

namespace App\Filament\Resources\EventGuestResource\Pages;

use App\Filament\Resources\EventGuestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEventGuests extends ListRecords
{
    protected static string $resource = EventGuestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
