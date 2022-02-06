@extends('layouts.master')
    @section('navbar')

    @if(session()->has('liked'))
        <div class="alert alert-success w3-margin" style="z-index: 1;">
            {{ session()->get('liked') }}
        </div>
    @endif

    @if(session()->has('disliked'))
        <div class="alert alert-danger w3-margin" style="z-index: 1;">
            {{ session()->get('disliked') }}
        </div>
    @endif
    

    <div class="w3-row" style="text-align:center;">
        <div class="w3-col m2 w3-center"><p></p></div> 
            <div class="w3-col m8 s12">
                <!-- Blog entry -->
                <div class="w3-margin w3-white">
                <img src="{{ asset('images/'.$single_post->image) }}" alt="" style="width:60rem; max-width: 90%;">
                <div class="w3-container">
                    <h3><b><a class="display-5" href="#">{{ $single_post->title }}</a></b></h3>
                    <h5>Created {{ $single_post->created_at->diffForHumans() }} <span class="w3-opacity">Updated {{ $single_post->updated_at->diffForHumans() }} by {{ $single_post->user->name }}</span></h5>
                </div>

                <p style="display: inline;" class="w3-tag w3-round w3-green w3-border w3-border-white">TAGS: </p>
                @foreach ($single_post->tag as $tag)
                        <a class="w3-tag w3-blue" style="text-decoration: none;" href="{{ url("/tags/".$tag->id) }}">{{ $tag->tag_name }}</a> 
                @endforeach
                <br>
                <p style="display: inline;" class="w3-tag w3-round w3-green w3-border w3-border-white"> CATEGORY: </p>
                @foreach ($single_post->category as $category)
                        <a class="w3-tag w3-teal" style="text-decoration: none;" href="{{ url("/categories/".$category->id) }}">{{ $category->category_type }}</a>
                @endforeach
                <br>


                @if (Auth::guest())
                    <button type="button" class="btn btn-primary position-relative disabled">
                        Like
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{ App\Models\Like::where('post_id', '=', $single_post->id)->where('liked','=', 1)->count() }}
                        </span>
                    </button>

                    <button type="button" class="btn btn-primary position-relative disabled">
                        DisLike
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{ App\Models\Like::where('post_id', '=', $single_post->id)->where('liked','=', 0)->count() }}
                        </span>
                    </button>
                @else
                    <br>

                    {{-- LIKE BUTTON --}}
                    {{-- If user clicked on like again to unselect it --}}
                    <br>
                    @if (App\Models\Like::select('user_id')->where('user_id', '=', Auth::user()->id)->where('liked', '=', 1)->where('post_id', '=', $single_post->id)->count() == 2)
                        {{ empty(App\Models\Like::find(App\Models\Like::orderBy('id', 'desc')->where('user_id', '=', Auth::user()->id)->first()->id)->delete()) }}
                        {{ empty(App\Models\Like::find(App\Models\Like::orderBy('id', 'desc')->where('user_id', '=', Auth::user()->id)->first()->id)->delete()) }}
                    @endif

                    
                    {{-- If user already has liked --}}
                    @if (App\Models\Like::select('user_id')->where('user_id', '=', Auth::user()->id)->where('liked', '=', 1)->where('post_id', '=', $single_post->id)->count() == 1)
                        <a href="{{ url('liked/'.$single_post->id.'/') }}" type="button" class="btn btn-primary position-relative w3-black">
                            Like
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                {{ App\Models\Like::where('post_id', '=', $single_post->id)->where('liked','=', 1)->count() }}
                            </span>
                        </a>

                        {{-- If the user clicked on dislike after click like --}}
                        @if (App\Models\Like::select('user_id')->where('user_id', '=', Auth::user()->id)->where('liked', '=', 0)->where('post_id', '=', $single_post->id)->count() == 1)
                            {{ empty(App\Models\Like::find(App\Models\Like::orderBy('id', 'desc')->where('user_id', '=', Auth::user()->id)->skip(1)->first()->id)->delete()) }}
                        @endif
                    @else
                        <a href="{{ url('liked/'.$single_post->id.'/') }}" type="button" class="btn btn-primary position-relative">
                            Like
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                {{ App\Models\Like::where('post_id', '=', $single_post->id)->where('liked','=', 1)->count() }}
                            </span>
                        </a>
                    @endif

                    <span></span>

                
                {{-- DISLIKE BUTTON --}}

                @if (App\Models\Like::select('user_id')->where('user_id', '=', Auth::user()->id)->where('liked', '=', 0)->where('post_id', '=', $single_post->id)->count() == 2)
                    {{ empty(App\Models\Like::find(App\Models\Like::orderBy('id', 'desc')->where('user_id', '=', Auth::user()->id)->first()->id)->delete()) }}
                    {{ empty(App\Models\Like::find(App\Models\Like::orderBy('id', 'desc')->where('user_id', '=', Auth::user()->id)->first()->id)->delete()) }}
                @endif



                @if (App\Models\Like::select('liked')->where('liked', 0)->count() == 0)
                    <a href="{{ url('disliked/'.$single_post->id.'/') }}" type="button" class="btn btn-primary position-relative">
                        DisLike
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{ App\Models\Like::where('post_id', '=', $single_post->id)->where('liked','=', 0)->count() }}
                        </span>
                    </a>
                @else
                    @if (App\Models\Like::select('user_id')->where('user_id', '=', Auth::user()->id)->where('liked', '=', 0)->where('post_id', '=', $single_post->id)->count() == 1)
                        <a href="{{ url('disliked/'.$single_post->id.'/') }}" class="btn btn-primary position-relative w3-red">
                            DisLike
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                {{ App\Models\Like::where('post_id', '=', $single_post->id)->where('liked','=', 0)->count() }}
                            </span>
                        </a>
                        @if (App\Models\Like::select('user_id')->where('user_id', '=', Auth::user()->id)->where('liked', '=', 1)->where('post_id', '=', $single_post->id)->count() == 1)
                            {{ empty(App\Models\Like::find(App\Models\Like::orderBy('id', 'desc')->where('user_id', '=', Auth::user()->id)->skip(1)->first()->id)->delete()) }}
                        @endif
                    @else
                        <a href="{{ url('disliked/'.$single_post->id.'/') }} type="button" class="btn btn-primary position-relative">
                            DisLike
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                {{ App\Models\Like::where('post_id', '=', $single_post->id)->where('liked','=', 0)->count() }}
                            </span>
                        </a>
                    @endif
                @endif

                

                <br><br>                

                @if (App\Models\Like::select('user_id')->where('user_id', '=', Auth::user()->id)->where('liked', '=', 1)->where('post_id', '=', $single_post->id)->count() == 1)
                    <p style="opacity: 0.5;">You have liked the post.</p>
                @elseif (App\Models\Like::select('user_id')->where('user_id', '=', Auth::user()->id)->where('liked', '=', 0)->where('post_id', '=', $single_post->id)->count() == 1)
                    <p style="opacity: 0.5;">You have disliked the post.</p>
                @endif
                <p></p>
            @endif



                





                <div class="w3-container">
                    <p style="font-size:1.25rem;">{!! $single_post->content !!}</p>
                   
                </div>

            </div>   



            @if (Auth::guest())

            @elseif(Auth::user()->id == 1)
                <a href="{{ url('/posts/delete/'.$single_post->id) }}" class="btn btn-danger display-5 w3-right">Delete</a>
                <a href="{{ url('/posts/edit/'.$single_post->id) }}" class="btn btn-dark display-5 w3-right w3-margin-right">Edit</a>
            @elseif(Auth::user()->id == $single_post->user_id)
                <a href="{{ url('/posts/delete/'.$single_post->id) }}" class="btn btn-danger display-5 w3-right">Delete</a>
                <a href="{{ url('/posts/edit/'.$single_post->id) }}" class="btn btn-dark display-5 w3-right w3-margin-right">Edit</a>
            @endif


       </div>

    </div>

    <div class="row">
        <div class="w3-col s12">
            <form  method="POST" action="{{ url('/comments/create/'.$single_post->id) }}" class="w3-container " style="text-align: center; margin: 0 auto;">
                @csrf
                <h2 class="w3-center">Please post your comments here</h2>
                
                <p><input class="w3-input w3-hover-white" name="username" type="text" placeholder="Enter Your Name" 
                    value= "@auth{{ Auth::user()->name }}@endauth">
                </p>
                <p></p><textarea class="w3-input w3-hover-white" name="comment" id="" cols="30" rows="5" placeholder="Write Comments"></textarea></p>
                <button type="submit" class="w3-btn w3-padding-large w3-black">Submit</button>
            </form>
        </div>
        
    </div>
    
    

    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px; color: rgb(219, 219, 219);">COMMENTS</h1>

    
    @forelse ($single_post->comments as $single_comment)
        <div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu">
            <div class="w3-content">
                <div id="Pizza" class="w3-container menu w3-padding-32 w3-white">
                    <h1><b>{{ $single_comment->username }}</b> <span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
                    <p class="w3-text-grey" style="word-wrap: break-word;">{{ $single_comment->comment }}</p>
                </div>
                @if (Auth::guest())

                @elseif(Auth::user()->id == 1)
                    
                    {{-- <a onclick="document.getElementById('id01').style.display='block'" class="btn btn-danger display-5 w3-left">Edit</a> --}}
                    <a href="{{ url('/comments/delete/'.$single_comment->id) }}" class="btn btn-danger display-5 w3-right w3-margin">Delete</a>
                    @if(Auth::user()->id == $single_comment->user_id)
                        <a href="{{ url('/comments/edit/'.$single_comment->id) }}" class="btn btn-danger display-5 w3-right w3-margin">Edit</a>
                    @endif
                @elseif(Auth::user()->id == $single_comment->user_id)
                    {{-- <a onclick="document.getElementById('id01').style.display='block'" class="btn btn-danger display-5 w3-left">Edit</a> --}}
                    <a href="{{ url('/comments/delete/'.$single_comment->id) }}" class="btn btn-danger display-5 w3-right w3-margin">Delete</a>
                    <a href="{{ url('/comments/edit/'.$single_comment->id) }}" class="btn btn-danger display-5 w3-right w3-margin">Edit</a>

                @endif
            </div>
            
        </div>

        
    @empty
            <p style="visibility: hidden;">No comments</p>
    @endforelse

@endsection