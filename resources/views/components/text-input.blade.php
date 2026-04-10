@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-stone-300 dark:border-stone-700 bg-white/50 dark:bg-stone-900/50 dark:text-stone-300 focus:border-amber-500 dark:focus:border-amber-500 focus:ring-amber-500/70 dark:focus:ring-amber-500/70 rounded-xl shadow-[inset_0_2px_4px_rgba(0,0,0,0.02)] transition-all duration-300']) }}>
