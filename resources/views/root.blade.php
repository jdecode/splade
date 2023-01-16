<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/js/app.js', 'resources/css/app.css'])
        @spladeHead
        <script>
            function setTheme(theme) {
                let theme_element = document.getElementsByTagName('html')[0];
                theme_element.removeAttribute('class');
                theme_element.classList.add(theme);
                localStorage.theme = theme;
            }

            if (localStorage.theme === 'undefined') {
                setTheme('dark');
            }
            if (localStorage.theme !== 'undefined') {
                setTheme(localStorage.theme);
            }
        </script>
    </head>
    <body
        class="
            font-sans antialiased
            container mx-auto
            bg-skin-fill text-skin-base
        ">
        @splade
    </body>
</html>
