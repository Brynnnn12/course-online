import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    server: {
        origin: "https://course-online-production.up.railway.app", // Pakai HTTPS
    },
    build: {
        outDir: "public/build", // Pastikan hasil build ke folder publik
        emptyOutDir: true,
        manifest: true,
    },
});
