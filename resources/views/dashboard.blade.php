<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <ul class="flex items-center space-x-4 h-8">
                <li class="h-full w-8 rounded-full border border-gray-500 bg-gray-900" onclick="setTheme('dark')"></li>
                <li class="h-full w-8 rounded-full border border-gray-500 bg-red-500" onclick="setTheme('red')"></li>
                <li class="h-full w-8 rounded-full border border-gray-500 bg-blue-500 " onclick="setTheme('blue')"></li>
                <li class="h-full w-8 rounded-full border border-gray-500 bg-green-500" onclick="setTheme('green')"></li>
                <li class="h-full w-8 rounded-full border border-gray-500 bg-gray-50" onclick="setTheme('light')"></li>
            </ul>
        </div>
    </x-slot>


    <div class=" p-2">
        <div
            class="
                p-6
                border-4 border border-dashed dark:border-gray-700
            ">
            Dashboard content
        </div>
    </div>
</x-app-layout>
