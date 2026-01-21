import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css'
            ],
            refresh: true,
            buildDirectory: '', // FORCE le manifest dans public/build
        }),
    ],
    build: {
        manifest: true,
        outDir: 'public/build', // Assure-toi que la sortie est dans le dossier public
        rollupOptions: {
            input: 'resources/css/app.css', // assure-toi que Rollup connaît le point d'entrée
        },
    },
});
