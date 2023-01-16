<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-500 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-2 shadow sm:rounded-lg">
                <div class="max-w-xl" dusk="update-profile-information">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-2 shadow sm:rounded-lg">
                <div class="max-w-xl" dusk="update-password">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-2 shadow sm:rounded-lg">
                <div class="max-w-xl" dusk="delete-user">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
