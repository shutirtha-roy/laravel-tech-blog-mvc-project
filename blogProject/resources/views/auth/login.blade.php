@extends('layouts.master')

    @section('navbar')

        {{-- For medium and large screens --}}
        <div class="w3-card-4 w3-display-middle w3-hide-small" style="width: 30rem;">
            <div class="w3-container w3-black">
            <h2>Login</h2>
            <p></p>
            </div>
            <form class="w3-container w3-white"  method="POST" action="{{ route('login') }}">
                @csrf
                <p></p>
                <p>      
                <label class="w3-text-black"><b>Email</b></label>
                <input class="w3-input w3-border w3-hover-black" name="email" type="email"></p>
                <p>      
                <label class="w3-text-black"><b>Password</b></label>
                <input class="w3-input w3-border w3-hover-black" name="password" type="password"></p>
                <p>
                <button type="submit" class="w3-btn w3-black">Log in</button></p>
            </form>
        </div>



        {{-- For smaller screens --}}
        <div class="w3-card-4 w3-display-middle w3-hide-medium w3-hide-large w3-center" style="width: 30rem;">
            <div class="w3-container w3-black">
            <h2>Login</h2>
            <p></p>
            </div>
            <form class="w3-container w3-white"  method="POST" action="{{ route('login') }}">
                @csrf
                <p></p>
                <p>      
                <label class="w3-text-black"><b>Email</b></label>
                <input class="w3-input w3-border w3-hover-black" name="email" type="text"></p>
                <p>      
                <label class="w3-text-black"><b>Password</b></label>
                <input class="w3-input w3-border w3-hover-black" name="password" type="text"></p>
                <p>
                <button type="submit" class="w3-btn w3-black">Log in</button></p>
            </form>
        </div>



@endsection