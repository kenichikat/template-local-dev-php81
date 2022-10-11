import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js', 'resources/sass/app.scss',
                'resources/sass/admin.scss',
                'resources/sass/profile.scss'
            ],
            refresh: true,
        }),
    ]
});
