import './bootstrap';

window.addEventListener('DOMContentLoaded', function() {
    // Fungsi untuk mengatur tema saat halaman pertama kali dimuat
    const setInitialTheme = () => {
        if (localStorage.getItem('color-theme') === 'dark' || 
           (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    };

    const themeToggleBtn = document.getElementById('theme-toggle');
    const themeToggleIcon = document.getElementById('theme-toggle-icon');
    const themeToggleText = document.getElementById('theme-toggle-text');

    // Fungsi untuk memperbarui tampilan tombol tema
    const updateButtonState = () => {
        if (themeToggleIcon && themeToggleText) {
            if (document.documentElement.classList.contains('dark')) {
                themeToggleIcon.classList.remove('fa-moon');
                themeToggleIcon.classList.add('fa-sun');
                themeToggleText.textContent = 'Light Mode';
            } else {
                themeToggleIcon.classList.remove('fa-sun');
                themeToggleIcon.classList.add('fa-moon');
                themeToggleText.textContent = 'Dark Mode';
            }
        }
    };
    
    // Atur tema awal
    setInitialTheme();
    // Perbarui tombol sesuai tema awal
    updateButtonState();

    // Tambahkan event listener jika tombolnya ada
    if (themeToggleBtn) {
        themeToggleBtn.addEventListener('click', function() {
            // Toggle kelas 'dark' pada <html>
            document.documentElement.classList.toggle('dark');

            // Simpan preferensi tema
            const theme = document.documentElement.classList.contains('dark') ? 'dark' : 'light';
            localStorage.setItem('color-theme', theme);

            // Perbarui tampilan tombol
            updateButtonState();
        });
    }
});