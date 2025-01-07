import { defineConfig } from 'vite';
import laravel from 'vite-plugin-laravel';

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
    }),
  ],
  build: {
    manifest: true,
    outDir: 'public/build', // Assure-toi que la sortie est dans le dossier public
  },
});
