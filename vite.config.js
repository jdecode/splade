import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

const host = "23.114.1.6";

export default defineConfig({
    "server": {
        host,
        "hmr": { host },
        "watch": {
            "ignored": [
                "!**/vendor/**"
            ]
        },
        "port": 2115
    },
    "plugins": [
        laravel({
            input: ["resources/js/app.js", "resources/css/app.css"],
            refresh: true,
        }),
    ],
});
