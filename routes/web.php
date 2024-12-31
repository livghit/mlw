<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RsvpController;
use App\Http\Middleware\Location;
use App\Models\Event;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome')->middleware(Location::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/rsvp', function () {
    $events = Event::all();

    return view('rsvp')->with('events', $events);
})->name('rsvp')->middleware(Location::class);

Route::post('/rsvp-accept', [RsvpController::class, 'store'])->name('rsvp.accept');


Route::get('locale/{locale}', function ($locale) {
    session(['locale' => $locale]);

    return redirect()->back();
})->name('locale.switch');

require __DIR__ . '/auth.php';
