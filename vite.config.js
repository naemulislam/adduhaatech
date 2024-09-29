import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'; // Import the path module

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/js'),
            '@json': path.resolve(__dirname, 'resources/json'),
        },
    },
});
