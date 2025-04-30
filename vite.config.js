import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    base: '/build/', // 🔧 ✅ เพิ่มบรรทัดนี้
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/about.css',
                'resources/js/about.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    build: {
        manifest: true,
        outDir: 'public/build',
    },
});
