<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventGuest;
use Illuminate\Http\Request;

class RsvpController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'second_name' => 'required',
            'email' => 'required|email',
            'persons' => 'required',
            'event' => 'required',
        ]);
        $event = Event::find($validated['event']);

        /**@var $guest EventGuest */
        $guest = EventGuest::firstOrNew(
            ['email' => $validated['email']],
        );

        $guest->first_name = $validated['first_name'];
        $guest->second_name = $validated['second_name'];
        $guest->persons = $validated['persons'];
        $guest->event()->associate($event->id);
        $guest->save();

        return back()->with('success', 'Thank You!');

    }
}
