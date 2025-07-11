import './bootstrap';
// Cek tema yang tersimpan di localStorage atau preferensi sistem
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
} else {
    document.documentElement.classList.remove('dark');
}

const themeToggleBtn = document.getElementById('theme-toggle');
const themeToggleIcon = document.getElementById('theme-toggle-icon');
const themeToggleText = document.getElementById('theme-toggle-text');

// Fungsi untuk memperbarui ikon dan teks tombol
const updateButtonState = () => {
    if (document.documentElement.classList.contains('dark')) {
        themeToggleIcon.classList.remove('fa-moon');
        themeToggleIcon.classList.add('fa-sun');
        themeToggleText.textContent = 'Light Mode';
    } else {
        themeToggleIcon.classList.remove('fa-sun');
        themeToggleIcon.classList.add('fa-moon');
        themeToggleText.textContent = 'Dark Mode';
    }
};

// Panggil sekali saat load untuk set state awal
updateButtonState();

themeToggleBtn.addEventListener('click', function() {
    // Toggle class 'dark' pada elemen <html>
    document.documentElement.classList.toggle('dark');

    // Simpan preferensi tema di localStorage
    if (document.documentElement.classList.contains('dark')) {
        localStorage.setItem('color-theme', 'dark');
    } else {
        localStorage.setItem('color-theme', 'light');
    }

    // Perbarui state tombol
    updateButtonState();
});