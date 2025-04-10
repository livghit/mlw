<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-sans bg-beige/5 scroll-smooth">
<div class="hidden text-center bg-beige text-white  p-4 sm:flex flex-col">
    <p class="text-5xl">
        {{ __('We are getting Married') }}
    </p>
    <livewire:countdown/>
</div>
<x-welcome-navigation/>
<div class="sm:h-screen grid sm:grid-cols-4 mx-10 mt-0 gap-10">

    <div class="flex flex-col justify-center text-center text-9xl gap-10 mt-20">
        <p>Us</p>
        <p>And</p>
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
                    25.07.2025
                </span>
            {{ __('THE DAY WE MARRY') }}
        </p>
    </div>
</div>
<div id="ourStory" class="pt-44">
    <p class="text-6xl md:text-7xl text-center">
        {{ __('OUR STORY') }}
    </p>
    <div>
        <x-story-card/>
    </div>
</div>
<div id="aboutTheWedding" class="pt-44">
    <p class="text-6xl md:text-7xl text-center">
        {{ __('ABOUT THE WEDDING') }}
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 p-10">
        <x-about-card icon="church" title="{{ __('Ceremony') }}" text=""/>
        <x-about-card icon="drink" title="{{ __('Acompany the Guests') }}" text=""/>
        <x-about-card icon="heart" title="{{ __('First Pictures') }}" text=""/>
        <x-about-card icon="people" title="{{ __('Guest finding place') }}" text=""/>
        <x-about-card icon="games" title="{{ __('Games') }}" text=""/>
        <x-about-card icon="dinner" title="{{ __('Dinner') }}" text=""/>
        <x-about-card icon="dance" title="{{ __('Dance') }}" text=""/>
        <x-about-card icon="torte" title="{{ __('Cuting the Cake') }}" text=""/>
        <x-about-card icon="party" title="{{ __('Party Time') }}" text=""/>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 p-10">
    </div>
</div>
<div id="aboutTheWedding" class="pt-44">
    <p class="text-6xl md:text-4xl text-center">
        {{ __('ABOUT THE HOTEL') }}
    </p>
    <div class="p-20 lg:p-52">
        <img
            alt=""
            src="https://assets.hotel.check24.de/size=0x450/nfc=404/source=aHR0cHM6Ly9pLnRyYXZlbGFwaS5jb20vbG9kZ2luZy80MzAwMDAwMC80MjcyMDAwMC80MjcxNzMwMC80MjcxNzI1Mi85ZGVjM2EzMl96LmpwZw==!0a486c/picture.jpg"
            class="h-56 w-full rounded-tr-3xl rounded-bl-3xl sm:h-64 lg:h-full object-cover"
        />
        <p class="mt-4 sm:flex sm:flex-col sm:items-center sm:justify-center sm:gap-4 text-justify leading-relaxed space-y-4">
            Für unsere Hochzeit haben wir ein Zimmerkontingent im Drexels Parkhotel reserviert. Ihr könnt diese
            Zimmer zu vergünstigten Preisen direkt selbst buchen:

            <strong>Zimmerpreise (inkl. Frühstück & 10 % Rabatt):</strong>
            • Einzelzimmer: 78,50 €
            • Doppelzimmer: 115,00 €
            • 3-Bett-Zimmer: 140,00 €
            • Familienzimmer: 158,00 €


            <strong>So funktioniert’s:</strong>
            Bitte bucht euer Zimmer bis spätestens 2 Monate vor der Hochzeit per E-Mail an:
            📧 das.drexels@parkhotel-krumbach.de

            Gebt bei der Buchung unbedingt unseren Nachnamen und euren Aufenthaltszeitraum als Stichwort an, damit
            ihr unserer Hochzeitsgesellschaft zugeordnet werden könnt.

            Falls ihr später bucht, sind Zimmer ggf. noch nach Verfügbarkeit erhältlich.
        </p>
        <a href="mailto:das.drexels@parkhotel-krumbach.de?subject=Kontingen Ghita Buchung" class="block">
            <div class="mt-4 sm:flex sm:items-center sm:justify-center sm:gap-4">
                <strong class="font-medium">Drexels Parkhotel Krumbach</strong>

                <span class="hidden sm:block sm:h-px sm:w-8 sm:bg-beige"></span>

                <p class="mt-0.5 opacity-50 sm:mt-0">Anfragen</p>
            </div>
        </a>
    </div>
    <p class="text-6xl md:text-4xl text-center">
        {{ __('ABOUT THE DRESSCODE') }}
    </p>
    <div id="dresscode" class="p-20 flex flex-col sm:flex-row gap-5">
        <div class="group relative block h-80 lg:h-96 w-full">
            <span class="absolute inset-0 border-2 border-dashed border-black rounded-md"></span>

            <div
                class="relative flex h-full transform items-end rounded-md border-2 border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2">
                <div class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-shirt-icon lucide-shirt size-10 sm:size-12">
                        <path
                            d="M20.38 3.46 16 2a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-1.34 2.23l.58 3.47a1 1 0 0 0 .99.84H6v10c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2V10h2.15a1 1 0 0 0 .99-.84l.58-3.47a2 2 0 0 0-1.34-2.23z"/>
                    </svg>


                    <h2 class="mt-4 text-xl font-medium sm:text-2xl">{{ __('Dresscode') }}</h2>
                </div>

                <div
                    class="max-h-[20rem] overflow-y-auto absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8">
                    <h3 class="mt-4 text-xl font-medium sm:text-2xl">{{ __('Important be you') }}
                    </h3>

                    <p class="mt-4 text-sm sm:text-base">
                        {{ __('dresscode new') }}
                    </p>

                </div>
            </div>
        </div>
        <div class="group relative block h-80 lg:h-96 w-full">
            <span class="absolute inset-0 border-2 border-dashed border-black rounded-md"></span>

            <div
                class="relative flex h-full transform items-end rounded-md border-2 border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2">
                <div class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-10 sm:size-12 " fill="none"
                         viewBox="0 0 24 24" stroke-width="1" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z"/>
                    </svg>

                    <h2 class="mt-4 text-xl font-medium sm:text-2xl">{{ __('Presents') }}</h2>
                </div>

                <div
                    class="max-h-[20rem] overflow-y-auto absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8">
                    <h3 class="mt-4 text-xl font-medium sm:text-2xl">{{ __('When it is suppoused to happen it happens') }}
                    </h3>

                    <p class="mt-4 text-sm sm:text-base">
                        {!! __('Presents new') !!}
                    </p>

                </div>
            </div>
        </div>


    </div>


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
