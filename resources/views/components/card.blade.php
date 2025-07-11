<div
    class="group relative bg-white dark:bg-slate-800 rounded-xl shadow-lg hover:shadow-2xl p-5 sm:p-6 transition-all duration-300">
    {{-- Efek border gradasi saat hover --}}
    <div
        class="absolute -inset-px rounded-xl border border-transparent opacity-0 transition-all duration-300 group-hover:opacity-100 group-hover:border-blue-500">
    </div>

    <div class="relative">
        @if(isset($title))
        <h3 class="text-lg font-bold mb-4 flex items-center gap-3 text-slate-800 dark:text-slate-200">
            @if(isset($icon))
            <i class="w-5 text-center text-gray-400 dark:text-gray-500 {{ $icon }}"></i>
            @endif
            <span>{{ $title }}</span>
        </h3>
        @endif

        <div class="text-base text-slate-700 dark:text-slate-300">
            {{ $slot }}
        </div>
    </div>
</div>