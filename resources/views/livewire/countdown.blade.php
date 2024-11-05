<div class="flex gap-5 justify-center mt-10 text-xl" wire:poll.1s>
    <div class="border border-white rounded-lg p-5">
        <p class="text-3xl">{{ $year }}</p>
        <p>Years</p>
    </div>

    <div class="border border-white rounded-lg p-5">
        <p class="text-3xl">{{ $months }}</p>
        <p>Months</p>
    </div>
    <div class="border border-white rounded-lg p-5">
        <p class="text-3xl">{{ $days }}</p>
        <p>Days</p>
    </div>
    <div class="border border-white rounded-lg p-5">
        <p class="text-3xl">{{ $hours }}</p>
        <p>Hours</p>
    </div>
    <div class="border border-white rounded-lg p-5">
        <p class="text-3xl">{{ $minutes }}</p>
        <p>Minutes</p>
    </div>
    <div class="border border-white rounded-lg p-5">
        <p class="text-3xl">{{ $seconds }}</p>
        <p>Seconds</p>
    </div>

</div>
