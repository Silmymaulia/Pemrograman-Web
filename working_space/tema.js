//cek tema di localstorage
const theme = localStorage.getItem('theme');

//apply tema
if (theme === 'dark') {
    document.body.classList.add('dark-theme');
}

function toggleTheme() {
    //dark mode
    document.body.classList.toggle('dark-theme');

    if (document.body.classList.contains('dark-theme')) {
        localStorage.setItem('theme', 'dark');
    } else {
        localStorage.setItem('theme', 'light');
    }
}

//button
const themeToggleBtn = document.getElementById('theme-toggle-btn');
themeToggleBtn.addEventListener('click', toggleTheme);
