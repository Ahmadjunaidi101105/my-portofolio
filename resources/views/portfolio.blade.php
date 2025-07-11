<x-layouts.app>
    {{-- Slot untuk Sidebar Kiri --}}
    <x-slot name="sidebar">
        <x-sidebar.profile />
        <x-sidebar.theme-switcher />
        <x-sidebar.languages />
        <x-sidebar.trophies />
        <x-sidebar.tech-stack />
    </x-slot>

    {{-- Slot Default untuk Konten Utama Kanan --}}
    <x-main.about />
    <x-main.github-stats />

    {{-- GANTI BAGIAN INI --}}
    <x-main.web-projects /> {{-- <-- Komponen baru 1 --}}
    <x-main.mobile-projects /> {{-- <-- Komponen baru 2 --}}

    <x-main.contact />
    <x-main.support />
</x-layouts.app>