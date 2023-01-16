/** @type {import('tailwindcss').Config} */

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/protonemedia/laravel-splade/lib/**/*.vue",
        "./vendor/protonemedia/laravel-splade/resources/views/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            textColor: {
                skin: {
                    base: "var(--color-text-base)",
                },
            },
            backgroundColor: {
                skin: {
                    fill: "var(--color-fill)",
                }
            }
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography")
    ],
    darkMode: 'class',
};
