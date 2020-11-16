<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:greeting>
                <div class="ml-12">
                    <div class="mt-12 text-gray-600 dark:text-gray-400 text-lg" style="text-align: left">
                        Please visit your profile to change, get or delete your personal data.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <span class="ml-2 text-sm text-gray-600"><a href="{{ route('privacy-policy')}}" target="_blank"><u>Our Privacy Policy</u></a></span>
        </div>
    </div>
</x-app-layout>
