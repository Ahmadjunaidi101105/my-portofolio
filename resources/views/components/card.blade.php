<div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6">
    @if(isset($title))
    <h3 class="text-xl font-bold mb-4 flex items-center gap-2">
        @if(isset($icon))
        <i class="{{ $icon }}"></i>
        @endif
        {{ $title }}
    </h3>
    @endif

    <div>
        {{ $slot }}
    </div>
</div>