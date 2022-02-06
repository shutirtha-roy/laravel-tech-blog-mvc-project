@extends('layouts.master')

    @section('navbar')
        <div class="container">
            <div class="row">
                <div class="col-md-12 w3-white">
                    <h1 class="text-center display-4">All Posts</h1>
                    
                    @foreach ($all_posts as $post)

                        <header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
                            <div class="container position-relative px-4 px-lg-5">
                                <div class="row gx-4 gx-lg-5 justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-7">
                                        <div class="post-heading d-flex">
                                            <p class="d-inline m-3 h-3">{{ $loop->iteration }}</p>
                                            <p class="display-5">{{ $post->title }}</p>
                                        </div>
                                        <img src="{{ asset('images/'.$post->image) }}" alt="" class="ms-5 ps-5" width="300px">

                                    </div>
                                </div>
                            </div>
                        </header>

                        <article class="mb-4">
                            <div class="container px-4 px-lg-5">
                                <div class="row gx-4 gx-lg-5 justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-7 ms-5 ps-5">
                                        <p>{!! substr($post->content, 0, 500) !!}</p>
                                        <a href="{{ url('/posts/edit/'.$post->id) }}" class="btn btn-danger display-5">Edit</a>
                                        <a href="{{ url('/posts/delete/'.$post->id) }}" class="btn btn-danger display-5">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <br><br>
                    @endforeach



                </div>
            </div>
        </div>
        

@endsection