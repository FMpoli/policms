import { defineConfig } from 'vite'
import laravel, { refreshPaths } from 'laravel-vite-plugin'

export default defineConfig({
    logLevel: 'info', // Aggressive logging
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', `resources/css/filament/admin/theme.css`],
            refresh: [
                ...refreshPaths,
                'app/Livewire/**',
            ],
        }),
    ],
})
