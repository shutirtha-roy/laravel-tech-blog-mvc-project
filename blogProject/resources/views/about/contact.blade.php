@extends('layouts.master')

    @section('navbar')

    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
        <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
    </head>

    <div class="w3-row w3-display-middle">
        
        <div class="w3-col m5">
        <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal">Contact Us</span></div>
        <h3>Send us any feedback in regards of this website.</h3>
        <p>Swing by for a knowledge of technology, or latest trends of Software Engineering.</p>
        <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i> Bangladesh, Dhaka</p>
        <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +880171*******</p>
        <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  test@test.com</p>
        </div>
        <div class="w3-col m7">


        <form class="w3-container w3-card-4 w3-padding-16 w3-black" method="POST" action="{{ url("/contact") }}">
            @csrf
            <div class="w3-section">      
                <label>Name</label>
                <input class="w3-input w3-light-grey" type="text" name="name">
            </div>
            <div class="w3-section">      
                <label>Email</label>
                <input class="w3-input w3-light-grey" type="text" name="email">
            </div>
            <div class="w3-section">      
                <label>Message</label>
                <textarea id="mytextarea" class="w3-input" name="message"></textarea> 
            </div>  
            <button type="submit" class="w3-button w3-right w3-theme">Send</button>
        </form>
        </div>
    </div>
        
    <script>
        CKEDITOR.replace('message');
    </script>

@endsection