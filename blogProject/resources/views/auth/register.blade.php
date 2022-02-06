@extends('layouts.master')

    @section('navbar')


    <div class="w3-card-4 w3-display-middle" style="width: 30rem;">

        {{-- For medium and large screens --}}
        <div class="w3-container w3-black w3-hide-small">
            <h2>Register</h2>
        </div>
        <form class="w3-container w3-white w3-hide-small"  method="POST" action="{{ route('register') }}">
            @csrf
            <p></p>
            <p>      
            <label class="w3-text-black"><b>Name</b></label>
            <input class="w3-input w3-border w3-hover-black" name="name" type="text">
            </p>          
            <label class="w3-text-black"><b>Email</b></label>
            <input class="w3-input w3-border w3-hover-black" name="email" type="email"></p>
            <p>      
            <label class="w3-text-black"><b>Password</b></label>
            <input class="w3-input w3-border w3-hover-black" name="password" type="password"></p>
            <label class="w3-text-black"><b>Confirm Password</b></label>
            <input class="w3-input w3-border w3-hover-black" name="password_confirmation" type="password"></p>
    
            <a href="{{ route('login') }}" class="w3-btn w3-black">Already Registered</a>
            <button type="submit" class="w3-btn w3-black w3-right">Register</button></p>
        </form>

        
        {{-- For smaller screens --}}
        <div class="w3-container w3-black w3-hide-medium w3-hide-large w3-center">
            <h2>Register</h2>
        </div>
        <form class="w3-container w3-white w3-hide-medium w3-hide-large"  method="POST" action="{{ route('login') }}" style="text-align: center;">
            @csrf
            <p></p>
            <p>      
            <label class="w3-text-black"><b>Name</b></label>
            <input class="w3-input w3-border w3-hover-black" name="name" type="text">
            </p>          
            <label class="w3-text-black"><b>Email</b></label>
            <input class="w3-input w3-border w3-hover-black" name="email" type="email"></p>
            <p>      
            <label class="w3-text-black"><b>Password</b></label>
            <input class="w3-input w3-border w3-hover-black" name="password" type="text"></p>
            <label class="w3-text-black"><b>Confirm Password</b></label>
            <input class="w3-input w3-border w3-hover-black" name="password_confirmation" type="text"></p>
    
            <a href="{{ route('login') }}" class="w3-btn w3-black">Already Registered</a>
            <button type="submit" class="w3-btn w3-black">Register</button></p>
        </form>
    </div>

{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">

        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
@endsection