<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('নাম') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('ইমেল') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <div class="mt-4">
                <x-jet-label for="phone" value="{{ __('মোবাইল নাম্বার') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="tel" name="tel" :value="old('tel')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('পাসওয়ার্ড') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('কনফার্ম পাসওয়ার্ড') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>
            <div class="mt-4">
                <x-jet-label for="location" value="{{ __('ঠিকানা') }}" />
                <x-jet-input id="location" class="block mt-1 w-full" type="text" name="location" required
                    autocomplete="location" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('ইতিমধ্যে নিবন্ধভুক্ত?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('নিবন্ধন করুন') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>