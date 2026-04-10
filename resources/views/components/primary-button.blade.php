<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-8 py-3 bg-gradient-to-r from-stone-800 to-stone-900 dark:from-stone-200 dark:to-white border border-transparent rounded-full font-semibold text-sm text-white dark:text-stone-900 tracking-wide shadow-md hover:shadow-lg hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 dark:focus:ring-offset-stone-900 transition-all duration-300']) }}>
    {{ $slot }}
</button>
