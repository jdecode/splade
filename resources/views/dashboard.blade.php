<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <div class="flex items-center space-x-4 h-8">
                <div class="h-full w-8 rounded-full border-4 border-gray-500"></div>
                <div class="h-full w-8 rounded-full border border-gray-500 bg-red-500"></div>
                <div class="h-full w-8 rounded-full border border-gray-500 bg-blue-500 "></div>
                <div class="h-full w-8 rounded-full border border-gray-500 bg-green-500"></div>
                <div class="h-full w-8 rounded-full border border-gray-500 bg-gray-50"></div>
            </div>
        </div>
    </x-slot>


    <div class="p-2">
        <div class="p-6 max-w-7xl border-4 border border-dashed dark:border-gray-700">
            Dashboard content
        </div>
    </div>
</x-app-layout>
