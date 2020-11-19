<style>
    .card {
    overflow-y: hidden;
    overflow-x: hidden;
    }
</style>

<x-app-layout class="card">

            @if (Route::has('login'))
                <div class="fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <x-slot name="header">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('VerifyEmail') }}
                        </h2>
                    </x-slot>
                    @endif
                </div>
            @endif
        <x-jet-authentication-card class="card">
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        <div class="mb-4 text-sm text-gray-600">
            <span class="ml-2 text-sm text-gray-600"><a href="{{ route('privacy-policy')}}" target="_blank"><u>Our Privacy Policy</u></a></span>
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('Resend Verification Email') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Logout') }}
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
           
</x-app-layout>
