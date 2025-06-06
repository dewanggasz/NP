import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    
    plugins: [
        laravel({

            input: ['resources/css/style.css', 'resources/scss/style.scss', 'resources/js/app.js', 'resources/js/loading.js', 'resources/js/header.js', 'resources/js/headerIndex.js', 'resources/js/footer.js', 'resources/js/client.js', 'resources/js/swiper.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
