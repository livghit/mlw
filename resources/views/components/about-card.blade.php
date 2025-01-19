@props(['icon' => 'none', 'title' => 'none', 'text' => 'none'])
@php
    switch ($icon) {
        case 'drink':
            $load_icon =
                "<svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='2' stroke='currentColor' class='size-10'><path stroke-linecap='round' stroke-linejoin='round' d='M8 22h8M7 10h10M12 15v7M12 15a5 5 0 0 0 5-5c0-2-.5-4-2-8H9c-1.5 4-2 6-2 8a5 5 0 0 0 5 5Z'/></svg>";
            break;

        case 'people':
            $load_icon =
                "<svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='2' stroke='currentColor' class='size-10'><path stroke-linecap='round' stroke-linejoin='round' d='M18 21a8 8 0 0 0-16 0M10 13a5 5 0 1 0 0-10 5 5 0 0 0 0 10ZM22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3'/></svg>";
            break;

        case 'games':
            $load_icon =
                "<svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='2' stroke='currentColor' class='size-10'><path stroke-linecap='round' stroke-linejoin='round' d='M2 10a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-8ZM17.92 14l3.5-3.5a2.24 2.24 0 0 0 0-3l-5-4.92a2.24 2.24 0 0 0-3 0L10 6M6 18h.01M10 14h.01M15 6h.01M18 9h.01'/></svg>";
            break;

        case 'dinner':
            $load_icon =
                "<svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='2' stroke='currentColor' class='size-10'><path stroke-linecap='round' stroke-linejoin='round' d='M12 3V2M15.4 17.4l3.2-2.8a2 2 0 1 1 2.8 2.9l-3.6 3.3c-.7.8-1.7 1.2-2.8 1.2h-4c-1.1 0-2.1-.4-2.8-1.2l-1.3-1.5A1 1 0 0 0 6.2 19H5M2 14h12a2 2 0 0 1 0 4h-2M4 10h16M5 10a7 7 0 0 1 14 0M5 14v6a1 1 0 0 1-1 1H2'/></svg>";
            break;

        case 'dance':
            $load_icon =
                "<svg xmlns='http://www.w3.org/2000/svg' stoke-width='2' fill='none' viewBox='0 0 24 24' class='size-10' stroke='currentColor'><path d='M14 3.5C14 4.33 13.33 5 12.5 5S11 4.33 11 3.5 11.67 2 12.5 2 14 2.67 14 3.5M8.5 5C7.67 5 7 5.67 7 6.5S7.67 8 8.5 8 10 7.33 10 6.5 9.33 5 8.5 5M14 12L13.22 9.75H16.18L18.34 8.67C18.71 8.5 18.86 8.04 18.67 7.67C18.5 7.3 18.04 7.14 17.67 7.33L16.85 7.74L16.36 6.9C16.07 6.25 15.36 5.88 14.66 6.04L12.19 6.57C11.5 6.72 11 7.35 11 8.07V8.77L8.57 10.39H8.58C8.5 10.46 8.39 10.55 8.33 10.67L7.44 12.44L5.66 13.33C5.29 13.5 5.14 13.97 5.33 14.34C5.46 14.6 5.73 14.75 6 14.75C6.11 14.75 6.23 14.73 6.34 14.67L8.56 13.56L9.6 11.5L11 13C10 16 3 20 3 20S7 22 12 22 21 20 21 20 16 16 14 12M16.85 11.09L16.53 11.25H15.33L15.39 11.41C15.91 12.44 16.67 13.5 17.5 14.44L16.97 11.03L16.85 11.09Z'/></svg>";
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

    <div class="relative flex h-full transform items-end rounded-md border-2 border-black bg-white ">
        <!-- Initial Text -->
        <div class="p-4 !pt-0  sm:p-6 lg:p-8">
            {!! $load_icon !== 'no' ? $load_icon : 'no icon' !!}

            <h2 class="mt-4 text-lg font-medium sm:text-xl lg:text-2xl">{{ $title }}</h2>
        </div>
    </div>
</div>
