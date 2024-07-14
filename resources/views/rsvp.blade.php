<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css'])
</head>

<body>

    <div>
        <section class="bg-white">
            <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
                <aside class="relative block h-16 lg:order-last lg:col-span-5 lg:h-full xl:col-span-6">
                    <img alt="Wedding Image"
                        src="https://cdn.dribbble.com/userupload/2409550/file/original-922e918a79f17b3af269e796488bfb54.jpg?resize=1024x1008"
                        class="absolute inset-0 h-full w-full object-cover" />
                </aside>

                <main
                    class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6">
                    <div class="max-w-xl lg:max-w-3xl">
                        <a class="block text-blue-600 text-6xl" href="{{ route('welcome') }}">
                            👰‍♀️ 🤵
                        </a>
                        <h1 class="mt-6 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl">
                            {{ __('RSVP Michelle and Liviu 2025') }} 💍
                        </h1>

                        <p class="mt-4 leading-relaxed text-gray-500">
                            {{ __('Thank you for decinding to attend our wedding!') }}
                            <br>
                            <br>
                            {{ __("Please take 1 Minute out of you're time to respond to our invitation. With the amout of Pepple that can attend out you're invitation !") }}
                        </p>

                        <form action="#" class="mt-8 grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first_name" class="block text-sm font-medium text-gray-700">
                                    {{ __('First Name') }}
                                </label>

                                <input type="text" id="first_name" name="first_name"
                                    class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="last_name" class="block text-sm font-medium text-gray-700">
                                    {{ __('Last Name') }}
                                </label>

                                <input type="text" id="last_name" name="last_name"
                                    class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
                            </div>

                            <div class="col-span-6">
                                <label for="email" class="block text-sm font-medium text-gray-700"> E-Mail </label>

                                <input type="email" id="email" name="email"
                                    class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <div>
                                    <label for="number_ppl" class="block text-sm font-medium text-gray-700">
                                        {{ __('How many persons will attend ?') }}
                                    </label>

                                    <input type="number" id="number_ppl" name="number_ppl"
                                        class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
                                </div>

                                <div>
                                    <label for="event" class="block text-sm font-medium text-gray-700 mt-5">
                                        {{ __('For what event ?') }}
                                    </label>

                                    <select name="cars" id="cars" class="rounded-lg border-gray-200">
                                        @foreach ($events as $event)
                                            <option value="{{ $event->name }}">{{ $event->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="col-span-6 sm:flex sm:items-center sm:gap-4 justify-center text-center w-full">
                                <x-primary-button class="text-center w-full justify-center">
                                    {{ __('Respond RSVP') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </main>
            </div>
        </section>

    </div>
</body>

</html>
