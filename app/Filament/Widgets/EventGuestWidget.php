<?php

namespace App\Filament\Widgets;

use App\Models\Event;
use Filament\Tables\Table;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class EventGuestWidget extends StatsOverviewWidget
{
    protected static ?string $heading = 'Chart';

    private static function getTotalGuestsForEvent(Event $event): int
    {
        $totalPersons = 0;
        $guests = $event->guests;
        foreach ($guests as $guest) {
            $totalPersons += $guest->persons;
        }

        return $totalPersons;
    }

    protected function getStats(): array
    {
        return [
            Stat::make('Guests at '.Event::find(1)->name, $this->getTotalGuestsForEvent(Event::find(1)))
                ->description('Guests that accepted the event'),
            Stat::make('Guests at '.Event::find(2)->name, $this->getTotalGuestsForEvent(Event::find(2)))
                ->description('Guests that accepted the event'),
            Stat::make('Event Location Costs', \Illuminate\Support\Number::currency($this->getTotalGuestsForEvent(Event::find(2)) * 150, 'EUR'))
                ->description('Total location costs in €')
                ->icon('heroicon-s-currency-dollar'),
        ];
    }
}
