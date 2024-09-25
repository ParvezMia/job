import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import { ViteImageOptimizer } from "vite-plugin-image-optimizer";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/tailwind.css",
                "resources/css/fontawesome.all.min.css",
                "resources/js/app.js",
                "resources/js/alpine.js",
            ],
            refresh: true,
        }),
        ViteImageOptimizer({
            jpeg: {
                quality: 40,
            },
        }),
    ],
});
