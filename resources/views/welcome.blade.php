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
    <x-welcome-navigation />
    <div class="sm:h-screen grid sm:grid-cols-4 mx-14 mt-0 gap-10">
        <div class="hidden sm:absolute top-20 left-0 right-0 text-center bg-beige text-white  p-4 sm:flex flex-col">
            <p class="text-5xl">
                We are getting Married
            </p>
            <livewire:countdown />
        </div>
        <div class="flex flex-col justify-center text-center text-9xl gap-10 mt-20">
            <p>Save</p>
            <p>The</p>
            <p>Dates</p>
        </div>
        <div class="flex flex-col justify-center align-middle divide-x mt-14">
            <div>
                <img src="https://cdn.dribbble.com/userupload/8800412/file/original-44d326d83b1d37ef8a30fad023bd5b91.jpg?resize=1024x676"
                    alt="img" class="rounded-lg">
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
                <img src="https://cdn.dribbble.com/userupload/8800412/file/original-44d326d83b1d37ef8a30fad023bd5b91.jpg?resize=1024x676"
                    alt="img" class="rounded-lg">
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
                <img src="https://cdn.dribbble.com/userupload/8800412/file/original-44d326d83b1d37ef8a30fad023bd5b91.jpg?resize=1024x676"
                    alt="img" class="rounded-lg">
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
</body>

</html>
