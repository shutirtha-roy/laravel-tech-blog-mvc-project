@extends('layouts.master')
    @section('navbar')

        <header class="w3-container w3-center w3-padding-32"> 
            <h1><b>ALL POSTS</b></h1>
            <p>Welcome to the blog of <span class="w3-tag">Shutirtha</span></p>
        </header>

        @foreach ($all_posts as $post)
            <div class="w3-row" style="text-align:center;">
                <div class="w3-col m2 w3-center"><p></p></div>          
                <div class="w3-col m8 s12">
                    <div class="w3-card-4 w3-margin w3-white">
                        <img src="{{ asset('images/'.$post->image) }}" alt="Nature" style="width:100%; height: 65vh;">
                        <div class="w3-container">
                            <h3><b><a class="display-5" href="/posts/{{ $post->id }}">{{ $post->title }}</a></b></h3>
                            <h5>Created {{ $post->created_at->diffForHumans() }} <span class="w3-opacity">Updated {{ $post->updated_at->diffForHumans() }}</span></h5>
                        </div>
                    
                        <div class="w3-container">
                            <p>{!! substr($post->content, 0, 500) !!}</p>
                            <div class="w3-row">
                                <div class="w3-col m8 s12">
                                    <p><a class="w3-button w3-padding-large w3-white w3-border" href="/posts/{{ $post->id }}"><b>READ MORE »</b></a></p>
                                </div>
                                <div class="w3-col m4 w3-hide-small">
                                    <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-tag">{{ count($post->comments) }}</span></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       @endforeach
@endsection

