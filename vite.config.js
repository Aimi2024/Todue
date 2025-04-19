import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',          // Tailwind entry
                'resources/scss/bootstrap.scss',  // Custom Bootstrap
                'resources/js/app.js',            // Bootstrap JS
            ],
            refresh: true,
        }),
    ],
});