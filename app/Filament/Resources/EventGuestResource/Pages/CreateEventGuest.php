<?php

namespace App\Filament\Resources\EventGuestResource\Pages;

use App\Filament\Resources\EventGuestResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEventGuest extends CreateRecord
{
    protected static string $resource = EventGuestResource::class;
}
