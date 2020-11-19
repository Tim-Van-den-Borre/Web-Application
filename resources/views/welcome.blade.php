
<x-app-layout>

            @if (Route::has('login'))
                <div class="fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <x-slot name="header">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Welcome') }}
                        </h2>
                    </x-slot>
                    @endif
                </div>
            @endif
    <livewire:welcome>
</x-app-layout>