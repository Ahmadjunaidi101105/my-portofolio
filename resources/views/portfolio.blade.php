<x-layouts.app>
    {{-- Slot untuk Sidebar Kiri --}}
    <x-slot name="sidebar">
        <x-sidebar.profile />
        <x-sidebar.theme-switcher />
        <x-sidebar.languages />
        <x-sidebar.tech-stack />
    </x-slot>

    {{-- Slot Default untuk Konten Utama Kanan --}}
    <x-main.banner />
    <x-main.github-stats />
    <x-main.websites />
    <x-main.contact />
    <x-main.support />
</x-layouts.app>