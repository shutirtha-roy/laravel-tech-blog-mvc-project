@extends('layouts.master')
@section('navbar')


<div class="w3-content" style="max-width:1400px">
    <!-- Header -->
    <!-- Grid -->
    <header class="w3-container w3-center w3-padding-32"> 
        <h1><b>ALL POSTS</b></h1>
        <p>Welcome to the blog of <span class="w3-tag">Shutirtha</span></p>
    </header>


    <div class="w3-container w3-center w3-padding-32" >
        <form method="GET" action="{{ route('Search') }}" class="w3-mobile w3-center">
            @csrf
            <div>
                <input type="text" class="w3-input typeahead w3-round" placeholder="Search..." name="title" style="width:30%; margin:0 auto; display:inline-block;">
                <input type="submit" class="w3-button w3-black w3-round" value="Search" style="display:inline-block;">
            </div>
            
        </form>
    </div>



    {{-- <div class="w3-row" style="width: 90%; margin: 0 auto;">
    
        <!-- Blog entries -->
        <div class="w3-col l8 s12">
            <!-- Blog entry -->        
            <!-- Blog entry -->
            @foreach ($all_posts as $post)
                <div class="w3-card-4 w3-margin w3-white">
                    <img src="{{ asset('images/'.$post->image) }}" alt="Nature" style="width:100%; height: 65vh;">
                    <div class="w3-container">
                        <h3><b><a class="display-5" href="posts/{{ $post->id }}" style="text-decoration: none;">{{ $post->title }}</a></b></h3>
                        <h5>Created {{ $post->created_at->diffForHumans() }} <span class="w3-opacity">Updated {{ $post->updated_at->diffForHumans() }}</span></h5>
                    </div>
                
                    <div class="w3-container">
                        <p>{{ substr($post->content, 0, 500) }}</p>
                        <div class="w3-row">
                            <div class="w3-col m8 s12">
                                <p><a class="w3-button w3-padding-large w3-white w3-border" href="posts/{{ $post->id }}"><b>READ MORE »</b></a></p>
                            </div>
                            <div class="w3-col m4 w3-hide-small">
                                <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-tag">{{ count($post->comments) }}</span></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $all_posts->links() }}
            <!-- END BLOG ENTRIES -->
        </div>
        
        <!-- Introduction menu -->
        <div class="w3-col l4">
            <!-- About Card -->
            <!-- Posts -->
            <div class="w3-card w3-margin">
                <div class="w3-container w3-padding">
                <h4>Categories</h4>
                </div>
                <ul class="w3-ul w3-hoverable w3-white">
                    @foreach ($all_categories as $category)
                      <li class="w3-padding-16">
                          <span class="w3-large"><a href="{{ url("/categories/".$category->id) }}" style="text-decoration:none;" class="w3-margin-bottom">{{ $category->category_type }}</a></span><br>
                      </li>  
                    @endforeach
                </ul>
            </div>
            <!-- END Introduction Menu -->
        </div>
    <!-- END GRID -->
    </div><br> --}}




    <div class="w3-content" style="max-width:1400px">
        <div class="w3-row">

            
            <div class="w3-col l10">
                <div class="w3-row-padding w3-padding-16" id="food">
                    @foreach ($all_posts as $post)
                        <div class="w3-quarter" style="margin-bottom: 30px;">
                            <img src="{{ asset('images/'.$post->image) }}" alt="Nature" style="width:100%; height: 35vh;">
                            <div class="w3-container w3-white" style="height: 10rem;">
                                <h3><b><a class="h4" href="/posts/{{ $post->id }}" style="text-decoration: none; color:#333;">{{ $post->title }}</a></b></h3>
                                <p >{!! substr($post->content, 0, 80) !!}</p>
                            </div>
                            <div class="w3-row w3-white">
                                <div class="w3-col m4 s12">
                                    <p style="font-size: 0.75rem;"><a class="w3-button w3-padding-medium w3-white w3-border" style="margin-left: 0.6rem;" href="/posts/{{ $post->id }}"><b>READ MORE »</b></a></p>
                                </div>
                                <div class="w3-col m8 w3-hide-small">
                                    <p style="font-size: 0.8rem;"><span class="w3-padding-large w3-right"><b>Comments</b> <span class="w3-tag">{{ count($post->comments) }}</span></span></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="w3-col l2">
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding w3-black">
                    <h4>Categories</h4>
                    </div>
                    <ul class="w3-ul w3-hoverable w3-white">
                        @foreach ($all_categories as $category)
                            <li class="w3-padding-16">
                                <span class="w3-medium"><a href="{{ url("/categories/".$category->id) }}" style="text-decoration:none;" class="w3-margin-bottom">{{ $category->category_type }}</a></span><br>
                            </li>  
                        @endforeach
                    </ul>
                </div>
            </div>
        
            
        </div>

        {{ $all_posts->links() }}
        
    </div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var path = "{{ route('autocomplete')  }}";
        $('input.typeahead').typeahead({
            source:  function (term, process) {
            return $.get(path, { term: term }, function (data) {
                    return process(data);
                });
            }
        });
    </script>
@endsection

</html>
