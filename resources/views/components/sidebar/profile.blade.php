<x-card>
    <div class="flex flex-col items-center text-center">
        {{-- Mengubah w-32 h-32 menjadi w-40 h-40 --}}
        <img class="w-40 h-40 rounded-full object-cover shadow-lg ring-4 ring-offset-4 ring-gray-200 dark:ring-slate-700 dark:ring-offset-slate-800 transition-transform duration-300 hover:scale-110"
            src="{{ asset('images/profile.jpg') }}" alt="Foto Profil Ahmad Junaidi">

        <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-4">Ahmad Junaidi</h2>
        <p class="text-md text-gray-500 dark:text-gray-400">Software Engineer</p>
    </div>
</x-card>