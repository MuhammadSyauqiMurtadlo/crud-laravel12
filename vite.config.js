import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import react from "@vitejs/plugin-react";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.jsx",
                // Tambahkan file CSS/JS lain yang kamu gunakan di sini
            ],
        }),
        react(),
    ],
});
