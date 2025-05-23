import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import react from "@vitejs/plugin-react";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.jsx"],
            refresh: true,
        }),
        react({
            // Tambahkan ini untuk handle JSX di file .js
            include: ["**/*.jsx", "**/*.js"], // Izinkan JSX di file .js
            babel: {
                plugins: ["@babel/plugin-transform-react-jsx"],
            },
        }),
    ],
    // Tambahkan resolve untuk ekstensi .jsx & .js
    resolve: {
        extensions: [".jsx", ".js", ".json"],
    },
});
