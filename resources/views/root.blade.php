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
    </head>
    <body
        class="
            font-sans antialiased
            text-gray-500
            bg-gray-100 dark:bg-gray-900
            container mx-auto
        ">
        <script>
            function setTheme(theme) {
                let theme_element = document.getElementById('theme');
                theme_element.removeAttribute('class');
                theme_element.classList.add(theme);
            }
        </script>
        <div id="theme">
            <div class="bg-skin-fill text-skin-base">@splade</div>
        </div>
    </body>
</html>
