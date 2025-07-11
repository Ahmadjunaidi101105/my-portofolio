<x-card>
    {{-- Judul Kartu --}}
    <x-slot name="title">
        <div class="flex justify-between items-center">
            <div class="flex items-center gap-3">
                <i class="w-5 text-center text-gray-400 dark:text-gray-500 fa-brands fa-github"></i>
                <span>Github Statistics</span>
            </div>
            <a href="https://github.com/Ahmadjunaidi101105" target="_blank" class="text-gray-400 hover:text-blue-500"
                aria-label="Buka profil GitHub di tab baru">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
            </a>
        </div>
    </x-slot>

    {{-- Isi Kartu --}}
    <div class="space-y-4">
        {{-- 1. Gambar Statistik (Tetap ditampilkan) --}}
        <a href="https://github.com/Ahmadjunaidi101105" target="_blank" rel="noopener noreferrer">
            <img class="w-full"
                src="https://github-readme-stats.vercel.app/api?username=Ahmadjunaidi101105&show_icons=true&theme=vision-friendly-dark&hide_border=true&bg_color=00000000&title_color=9f9f9f&text_color=c9c9c9"
                alt="GitHub Stats">
        </a>

        {{-- 2. Gambar Grafik Kontribusi (DISEMBUNYIKAN SEMENTARA) --}}
        {{--
        <a href="https://github.com/Ahmadjunaidi101105" target="_blank" rel="noopener noreferrer">
            <img class="w-full" src="https://github-readme-contribution-graph.vercel.app/api?username=Ahmadjunaidi101105&theme=vision-friendly-dark&hide_border=true&bg_color=00000000&color=69b6e4&line=69b6e4&point=ffffff" alt="GitHub Contribution Graph">
        </a>
        --}}
    </div>
</x-card>