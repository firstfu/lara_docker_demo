import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";

console.log(process.env?.APP_NAME);

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    server: {
        host: "0.0.0.0",
        port: "5178",
        hmr: {
            host: "159.223.74.248",
            port: "5178",
        },
    },
    resolve: {
        alias: {
            "~bootstrap": path.resolve(__dirname, "node_modules/bootstrap"),
        },
    },
});
