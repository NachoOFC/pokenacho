import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/ruleta.css",
                "resources/js/index.js"
            ],
            refresh: true,
        }),
    ],
});
