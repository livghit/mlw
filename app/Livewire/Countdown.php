<?php

namespace App\Livewire;

use Illuminate\Support\Carbon;
use Livewire\Component;

class Countdown extends Component
{
    private $wedding_date;

    public $year = 0;

    public $months = 0;

    public $days = 0;

    public $hours = 0;

    public $minutes = 0;

    public $seconds = 0;

    public function mount()
    {

    }

    public function render()
    {
        $this->wedding_date = Carbon::create(2025, 7, 25);
        $this->year = floor(now()->diffInMonths($this->wedding_date, false) / 12);
        // Calculate the remaining days, hours, and minutes
        $diff = now()->diff($this->wedding_date);
        $this->months = $diff->m;
        $this->days = $diff->d;
        $this->hours = $diff->h;
        $this->minutes = $diff->i;
        $this->seconds = $diff->s;

        return view('livewire.countdown');
    }
}
