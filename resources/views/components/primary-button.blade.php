<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-beige border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-beige/70 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
