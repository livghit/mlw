<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-sans bg-beige/5 scroll-smooth">
    <div class="hidden text-center bg-beige text-white  p-4 sm:flex flex-col">
        <p class="text-5xl">
            We are getting Married
        </p>
        <livewire:countdown />
    </div>
    <x-welcome-navigation />
    <div class="sm:h-screen grid sm:grid-cols-4 mx-10 mt-0 gap-10">

        <div class="flex flex-col justify-center text-center text-9xl gap-10 mt-20">
            <p>Save</p>
            <p>The</p>
            <p>Dates</p>
        </div>
        <div class="flex flex-col justify-center align-middle divide-x mt-14">
            <div>
                <img src="{{ asset('images/Michelle&Liviu-1.jpg') }}" alt="img"
                    class="rounded-lg opacity-0 animate-fadeInUp">
            </div>
            <p class="m-5 text-center text-2xl flex flex-col ">
                <span class="text-center  font-light text-beige/90">
                    31.12.2018
                </span>
                {{ __('THE DAY WE MET') }}
            </p>
        </div>
        <div class="flex flex-col justify-center align-middle divide-x mt-14">
            <div>
                <img src="{{ asset('images/Michelle&Liviu-74.jpg') }}" alt="img"
                    class="rounded-lg opacity-0 animate-fadeInDown">
            </div>
            <p class="m-5 text-center text-2xl flex flex-col ">
                <span class="text-center font-light text-beige/90">
                    31.12.2023
                </span>
                {{ __('THE DAY WE GOT ENGAGED') }}
            </p>
        </div>
        <div class="flex flex-col justify-center align-middle divide-x mt-14">
            <div>
                <img src="{{ asset('images/Michelle&Liviu-119.jpg') }}" alt="img"
                    class="rounded-lg opacity-0 animate-fadeInUp">
            </div>
            <p class="m-5 text-center text-2xl flex flex-col">
                <span class="text-center font-light text-beige/90">
                    25.05.2025
                </span>
                {{ __('THE DAY WE MARRY') }}
            </p>
        </div>
    </div>
    <div id="ourStory" class="sm:h-screen grid sm:grid-cols-3">
        <div></div>
        <div class="flex flex-col gap-5 text-center">
            <p class="text-7xl">
                {{ __('OUR STORY') }}
            </p>
            <p>hello</p>
        </div>
        <div></div>
    </div>
    <div id="aboutTheWedding" class="sm:h-screen grid sm:grid-cols-3">
        <div></div>
        <div class="flex flex-col gap-5 text-center">
            <p class="text-7xl">
                {{ __('ABOUT THE WEDDING') }}
            </p>
            <p>bye !</p>
        </div>
        <div></div>
    </div>

    <footer class="bg-gray-50">
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center justify-center">
                <p class="mt-4 text-center text-sm text-gray-500 lg:mt-0 lg:text-right">
                    Copyright &copy; 2025. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</body>

</html>
