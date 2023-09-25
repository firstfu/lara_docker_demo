import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    server: {
        // host: "0.0.0.0",
        // port: "5178",
        host: true,
        // 這上這個配置，才可以在外部訪問server上的css和js+hmr
        hmr: {
            host: "159.223.74.248",
        },
    },
    resolve: {
        alias: {
            "~bootstrap": path.resolve(__dirname, "node_modules/bootstrap"),
        },
    },
});
