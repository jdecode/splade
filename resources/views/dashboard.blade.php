<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="p-2">
        <div class="p-6 max-w-7xl border-4 border border-dashed dark:border-gray-700">
            Dashboard content
        </div>
    </div>
</x-app-layout>
