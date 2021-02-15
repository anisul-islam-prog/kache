@extends('layouts.guest')
@section('content')
<div>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="{{ URL::asset('images/logo_sample.png') }}" alt="logo" class="logo-dark logo-welcome-size" />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('নাম') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('ইমেল') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('পাসওয়ার্ড') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('কনফার্ম পাসওয়ার্ড') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <div class="mt-4">
                <x-jet-label for="location" value="{{ __('ঠিকানা') }}" />
                <x-jet-input id="location" class="block mt-1 w-full" type="text" name="location" required autocomplete="location" />
            </div>
            <x-jet-input id="role" name="role" type="hidden" value="1" />

            <div class="flex items-center justify-end mt-5 ">
                <div class="flex items-center justify-end ">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register-business.view') }}">
                        {{ __('Register as a Business') }}
                    </a>
                </div>
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already Registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</div>
@endsection