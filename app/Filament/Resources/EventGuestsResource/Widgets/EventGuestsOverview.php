<?php

namespace App\Filament\Resources\EventGuestsResource\Widgets;

use App\Models\Event;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class EventGuestsOverview extends BaseWidget
{
    public function table(Table $table): Table
    {
        /** @var Event $event */
        $event = Event::find(2);

        return $table
            ->query($event->guests()->getQuery())
            ->columns([
                TextColumn::make('first_name'),
                TextColumn::make('second_name'),
                TextColumn::make('email')->searchable(),
            ]);

    }
}
