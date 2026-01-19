import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css'],
            refresh: true,
        }),
    ],
    build: {
        manifest: true,
        outDir: 'public/build', // Assure-toi que la sortie est dans le dossier public
    },
});
