@props(['icon' => 'none','title'=>'none','text'=>'none'])
@php
    switch ($icon) {
        case 'cap':
            $load_icon =
                "<svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='size-10'><path stroke-linecap='round' stroke-linejoin='round' d='M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5' /></svg>";
            break;

        case 'heart':
            $load_icon =
                "<svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='size-10'><path stroke-linecap='round' stroke-linejoin='round' d='M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z' /></svg>";
            break;

        case 'church':
            $load_icon =
                "<svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='size-10'><path d='M10 9h4'/><path d='M12 7v5'/><path d='M14 22v-4a2 2 0 0 0-4 0v4'/><path d='M18 22V5.618a1 1 0 0 0-.553-.894l-4.553-2.277a2 2 0 0 0-1.788 0L6.553 4.724A1 1 0 0 0 6 5.618V22'/><path d='m18 7 3.447 1.724a1 1 0 0 1 .553.894V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V9.618a1 1 0 0 1 .553-.894L6 7'/></svg>";
            break;

        case 'torte':
            $load_icon =
                "<svg xmlns='http://www.w3.org/2000/svg' class='size-10'  viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' ><path d='M20 21v-8a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v8'/><path d='M4 16s.5-1 2-1 2.5 2 4 2 2.5-2 4-2 2.5 2 4 2 2-1 2-1'/><path d='M2 21h20'/><path d='M7 8v3'/><path d='M12 8v3'/><path d='M17 8v3'/><path d='M7 4h.01'/><path d='M12 4h.01'/><path d='M17 4h.01'/></svg>";
            break;

        case 'party':
            $load_icon =
                "<svg xmlns='http://www.w3.org/2000/svg' class='size-10' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><path d='M5.8 11.3 2 22l10.7-3.79'/><path d='M4 3h.01'/><path d='M22 8h.01'/><path d='M15 2h.01'/><path d='M22 20h.01'/><path d='m22 2-2.24.75a2.9 2.9 0 0 0-1.96 3.12c.1.86-.57 1.63-1.45 1.63h-.38c-.86 0-1.6.6-1.76 1.44L14 10'/><path d='m22 13-.82-.33c-.86-.34-1.82.2-1.98 1.11-.11.7-.72 1.22-1.43 1.22H17'/><path d='m11 2 .33.82c.34.86-.2 1.82-1.11 1.98C9.52 4.9 9 5.52 9 6.23V7'/><path d='M11 13c1.93 1.93 2.83 4.17 2 5-.83.83-3.07-.07-5-2-1.93-1.93-2.83-4.17-2-5 .83-.83 3.07.07 5 2Z'/></svg>";
            break;

        default:
            $load_icon = 'no';
            break;
    }
@endphp
<div class="group relative block h-64 sm:h-80 lg:h-96">
    <span class="absolute inset-0 border-2 border-dashed border-black rounded-md"></span>

    <div
        class="relative flex h-full transform items-end rounded-md border-2 border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2">
        <!-- Initial Text -->
        <div class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
            {!! $load_icon !== 'no' ? $load_icon : 'no icon' !!}

            <h2 class="mt-4 text-lg font-medium sm:text-xl lg:text-2xl">{{$title}}</h2>
        </div>

        <!-- Hover Text -->
        <div
            class="absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8">
            <h3 class="mt-4 text-lg font-medium sm:text-xl lg:text-2xl">{{$title}}</h3>

            <p class="mt-4 text-sm sm:text-base lg:text-lg">
                {{$text}}
            </p>
        </div>
    </div>
</div>
