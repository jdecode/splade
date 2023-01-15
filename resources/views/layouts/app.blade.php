<div class="min-h-screen">
    @include('layouts.navigation')

    <!-- Page Heading -->
    <header class="border-b border-gray-200 dark:border-gray-700/0">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>
