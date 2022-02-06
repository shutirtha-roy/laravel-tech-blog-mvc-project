@extends('layouts.master')
    @section('navbar')
    
    <nav class="w3-sidebar w3-bar-block w3-black w3-collapse w3-large w3-padding w3-top w3-card" style="width:15%;right:0;"><br>
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
        <div class="w3-container w3-padding-64">
            <h3 class=""><b>{{ Auth::user()->name }}</b></h3>
            <p style="text-decoration:none;" class="w3-opacity">{{ Auth::user()->email }}</p>
        </div>
        <div class="w3-bar-block">   
            <a href="{{ route('changeUsers') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Change Password</a>     

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                this.closest('form').submit();" style="text-decoration: none;" class="w3-bar-item w3-button w3-hover-white">
                    Log Out
                </a>
            </form>
        </div>
    </nav>
    

    
    {{-- <div class="w3-container w3-display-middle">
        <div class="py-12">
                @if (Auth::user()->name=="Admin")
                    <h1 class="display-1 w3-margin-left">Panel</h1>  
                    <a style="display: block;" href="{{ route('postsCreate') }}" class="btn btn-dark display-5 w3-margin">Create Posts</a>
                    <a style="display: block;" href="{{ route('postsPreEdit') }}" class="btn btn-dark display-5 w3-margin">Click to Edit or Delete Posts</a>
                    <a style="display: block;" href="{{ route('allComments') }}" class="btn btn-dark display-5 w3-margin">Click to Delete Comments</a>
                    <a style="display: block;" href="{{ route('tagsCreate') }}" class="btn btn-dark display-5 w3-margin	">Click to Add Tags</a>
                    <a style="display: block;" href="{{ route('categoriesCreate') }}" class="btn btn-dark display-5 w3-margin	">Click to Add Categories</a>
                    <a style="display: block;" href="{{ route('messages') }}" class="btn btn-dark display-5 w3-margin	">Click to See Inbox Messages</a>
                    <a style="display: block;" href="{{ route('tagsPreEdit') }}" class="btn btn-dark display-5 w3-margin	">Click to Edit or Delete Tags</a>
                    <a style="display: block;" href="{{ route('categoriesPreEdit') }}" class="btn btn-dark display-5 w3-margin	">Click to Edit or Delete Categories</a>
                    <a style="display: block;" href="{{ route('allUsers') }}" class="btn btn-dark display-5 w3-margin	">Click to Edit or Delete Users</a>
                @else
                    <h1>Panel</h1>  
                    <h1>Check out all posts or Post Contents</h1>
                    <a style="display: block;" href="{{ route('postsCreate') }}" class="btn btn-dark display-5 w3-margin">Create Posts</a>
                    <a style="display: block;" href="{{ route('postsPreEdit') }}" class="btn btn-dark display-5 w3-margin">Click to Edit or Delete Posts</a>
                    <a style="display: block;" href="{{ route('allUsers') }}" class="btn btn-dark display-5 w3-margin	">Click to Change Your Profile Details</a>

                @endif
        </div>
    </div> --}}



    <div class="w3-content" style="max-width:1400px">
        <p></p><br><br>
        @if (Auth::user()->name=="Admin")

            <div class="w3-row">
                <h1 class="display-1 w3-margin-left w3-center l12 w3-hide-small" style="margin-right: 15rem;">Admin Panel</h1>  <p></p>
                <h1 class="display-1 w3-center s12 w3-hide-medium w3-hide-large">Admin Panel</h1>  <p></p>
            </div>
            

            <br>
            <div class="w3-row w3-margin-bottom w3-margin-top" >
                <div class="w3-col l2 w3-black" style="height:13vh">
                        <a style="display: block;" href="{{ route('postsCreate') }}" class="btn w3-black display-5 w3-margin">Create Posts</a>
                </div>
                <div class="w3-col l2 w3-black" style="height:13vh">
                    <a style="display: block;" href="{{ route('postsPreEdit') }}" class="btn w3-black display-5 w3-margin">Click to Edit or Delete Posts</a>
                </div>
                <div class="w3-col l2 w3-black" style="height:13vh">
                    <a style="display: block;" href="{{ route('allComments') }}" class="btn w3-black display-5 w3-margin">Click to Delete Comments</a>
                </div>
                <div class="w3-col l2 w3-black" style="height:13vh">
                    <a style="display: block;" href="{{ route('tagsCreate') }}" class="btn w3-black display-5 w3-margin	">Click to Add Tags</a>
                </div>
                <div class="w3-col l2 w3-black" style="height:13vh">
                    <a style="display: block;" href="{{ route('categoriesCreate') }}" class="btn w3-black display-5 w3-margin	">Click to Add Categories</a>
                </div>
            </div>
            <div class="w3-row w3-margin-bottom w3-margin-top">
                <div class="w3-col l2 w3-black" style="height:13vh">
                    <a style="display: block;" href="{{ route('messages') }}" class="btn w3-black display-5 w3-margin">Click to See Inbox Messages</a>
                </div>
                <div class="w3-col l2 w3-black" style="height:13vh">
                    <a style="display: block;" href="{{ route('tagsPreEdit') }}" class="btn w3-black display-5 w3-margin	">Click to Edit or Delete Tags</a>
                </div>
                <div class="w3-col l2 w3-black" style="height:13vh">
                    <a style="display: block;" href="{{ route('categoriesPreEdit') }}" class="btn w3-black display-5 w3-margin	">Click to Edit or Delete Categories</a>
                </div>
                <div class="w3-col l2 w3-black" style="height:13vh">
                    <a style="display: block;" href="{{ route('allUsers') }}" class="btn w3-black display-5 w3-margin">Click to Edit or Delete Users</a>
                </div>
                <div class="w3-col l2 w3-black" style="height:13vh">
                    <a href="{{ route('changeUsers') }}" style="display: block;" onclick="w3_close()" class="btn w3-black display-5 w3-margin">Click to Change Password</a>     
                </div>
            </div>
    
        @else
            <div class="w3-row">
                <h1 class="display-1 w3-margin-left w3-center l12 w3-hide-small" style="margin-right: 15rem;">Panel</h1>  <p></p>
                <h1 class="display-1 w3-center s12 w3-hide-medium w3-hide-large">Check out all posts or Post Contents</h1>  <p></p>
            </div>
            <br><br>
            <div class="w3-row">
                <div class="w3-col l2 w3-black" style="height:15vh">
                    <a style="display: block;" href="{{ route('postsCreate') }}" class="btn w3-black display-5 w3-margin">Create Posts</a>
                </div>
                <div class="w3-col l2 w3-black" style="height:15vh">
                    <a style="display: block;" href="{{ route('allPosts') }}" class="btn w3-black display-5 w3-margin">Click Here to See Posts</a>
                </div>
                <div class="w3-col l2 w3-black" style="height:15vh">
                    <a style="display: block;" href="{{ route('postsPreEdit') }}" class="btn w3-black display-5 w3-margin">Click to Edit or Delete Posts</a>
                </div>
                <div class="w3-col l2 w3-black" style="height:15vh">
                    <a style="display: block;" href="{{ route('allUsers') }}" class="btn w3-black display-5 w3-margin">Click to Change Your Profile Details</a>
                </div>
                <div class="w3-col l2 w3-black" style="height:15vh">
                    <a style="display: block;" href="{{ route('changeUsers') }}" class="btn w3-black display-5 w3-margin">Click to Change Password</a>     
                </div>
            </div>

            <div class="w3-row">
                <div class="w3-col l2 w3-black" style="height:15vh">
                    <a style="display: block;" href="{{ route('contactMe') }}" class="btn w3-black display-5 w3-margin">Click Here To Send A Feedback</a>     
                </div>
                <div class="w3-col l2 w3-black" style="height:15vh">
                    <a style="display: block;" href="{{ route('individualPost') }}" class="btn w3-black display-5 w3-margin">Click Here To See Your Post</a>     
                </div>
            </div>
        @endif
    </div>

    
    @endsection

    