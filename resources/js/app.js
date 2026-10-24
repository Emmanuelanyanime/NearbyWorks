import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const themeQuery = window.matchMedia('(prefers-color-scheme: dark)');
const setTheme = (preference) => {
    document.documentElement.dataset.themePreference = preference;
    document.documentElement.dataset.theme = preference === 'system'
        ? (themeQuery.matches ? 'dark' : 'light')
        : preference;
    document.querySelectorAll('[data-theme-control]').forEach(control => { control.value = preference; });
};

setTheme(document.documentElement.dataset.themePreference || 'system');
document.querySelectorAll('[data-theme-control]').forEach(control => {
    control.addEventListener('change', () => {
        setTheme(control.value);
        try { localStorage.setItem('nearbyworks-theme', control.value); } catch (_) {}
    });
});
themeQuery.addEventListener('change', () => {
    if (document.documentElement.dataset.themePreference === 'system') setTheme('system');
});
