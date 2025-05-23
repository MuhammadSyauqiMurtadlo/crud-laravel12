import { createInertiaApp } from "@inertiajs/react";
import { createRoot } from "react-dom/client";

createInertiaApp({
    resolve: (name) => require(`./Pages/${name}.jsx`), // Pastikan path benar
    setup({ el, App, props }) {
        createRoot(el).render(<App {...props} />); // Ini mengandung JSX
    },
});
