<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-hydro-green rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:bg-green-700 active:bg-green-800 focus:outline-none transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
