<nav x-data="{ open: false }" class="bg-white">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-2">
                        <x-application-logo class="block h-5 w-auto rounded-lg fill-current text-beige animate-pulse" />
                        <span class="text-lg font-semibold">Michelle & Liviu</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden sm:flex sm:items-center sm:space-x-6">
                    <x-nav-link :href="route('welcome')" :active="false">
                        {{ __('Welcome') }}
                    </x-nav-link>
                    <x-nav-link href="#ourStory" :active="false">
                        {{ __('Our Story') }}
                    </x-nav-link>
                    <x-nav-link href="#about" :active="false">
                        {{ __('About the Wedding') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('rsvp') }}" :active="false">
                        {{ __('RSVP') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Language Switcher -->
            <div class="hidden sm:flex items-center gap-4">
                <a href="{{ route('locale.switch', ['locale' => 'ro']) }}" class="flex items-center">
                    <span class="flag-icon flag-icon-ro"></span>
                </a>
                <a href="{{ route('locale.switch', ['locale' => 'de']) }}" class="flex items-center">
                    <span class="flag-icon flag-icon-de"></span>
                </a>
            </div>

            <!-- Hamburger Menu -->
            <div class="sm:hidden flex items-center -mr-2">
                <button @click="open = !open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-800 hover:text-gray-600 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="sm:hidden">
        <div class="space-y-1 px-4 pb-3">
            <x-responsive-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
                {{ __('Welcome') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="#ourStory" :active="false">
                {{ __('Our Story') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="#about" :active="false">
                {{ __('About the Wedding') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('rsvp') }}" :active="false">
                {{ __('RSVP') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Language Switcher -->
        <div class="px-4">
            <div class="flex gap-4">
                <a href="{{ route('locale.switch', ['locale' => 'ro']) }}" class="flex items-center">
                    <span class="flag-icon flag-icon-ro"></span>
                    <span class="ml-2">Romanian</span>
                </a>
                <a href="{{ route('locale.switch', ['locale' => 'de']) }}" class="flex items-center">
                    <span class="flag-icon flag-icon-de"></span>
                    <span class="ml-2">German</span>
                </a>
            </div>
        </div>
    </div>
</nav>
