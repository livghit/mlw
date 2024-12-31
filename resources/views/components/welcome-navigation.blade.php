<nav x-data="{ open: false }" class="">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex gap-2">
                        <x-application-logo class="block h-5 rounded-lg w-auto fill-current text-beige animate-pulse" />
                        Michelle & Liviu
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('welcome')" :active="false">
                        {{ __('Welcome') }}
                    </x-nav-link>
                    <x-nav-link href="#ourStory" :active="false">
                        {{ __('Our Story') }}
                    </x-nav-link>
                    <x-nav-link href="#ourStory" :active="false">
                        {{ __('About the Wedding') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('rsvp') }}" :active="false">
                        {{ __('RSVP') }}
                    </x-nav-link>


                </div>

                <div class="mt-5 ms-96">
                    <ul class="flex flex-row gap-5 justify-end" aria-labelledby="dropdownMenuButton">
                        <li>
                            <a class="dropdown-item" href="{{ route('locale.switch', ['locale' => 'ro']) }}">
                                <span class="flag-icon flag-icon-ro"></span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('locale.switch', ['locale' => 'de']) }}">
                                <span class="flag-icon flag-icon-de"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-beige hover:text-beige/70 hover:bg-beige/20 transition duration-150 ease-in-out">
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
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
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

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="flag-icon flag-icon-{{ app()->getLocale() == 'ro' ? 'ro' : 'us' }}"></span>
                    {{ strtoupper(app()->getLocale()) }}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li>
                        <a class="dropdown-item" href="{{ route('locale.switch', ['locale' => 'ro']) }}">
                            <span class="flag-icon flag-icon-ro"></span> Romanian
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('locale.switch', ['locale' => 'en']) }}">
                            <span class="flag-icon flag-icon-us"></span> English
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
