@extends('layouts.master')

    @section('navbar')
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center display-4">All Edit</h1>
                    
                    @foreach ($all_tags as $tag)

                        <header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
                            <div class="container position-relative px-4 px-lg-5">
                                <div class="row gx-4 gx-lg-5 justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-7">
                                        <div class="post-heading d-flex">
                                            <p class="d-inline m-3 h-3">{{ $loop->iteration }}</p>
                                            <p class="display-5">{{ $tag->tag_name }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>

                        <article class="mb-4">
                            <div class="container px-4 px-lg-5">
                                <div class="row gx-4 gx-lg-5 justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-7 ms-5 ps-5">
                                        <a href="{{ url('/tags/edit/'.$tag->id) }}" class="btn btn-danger display-5">Edit</a>
                                        <a href="{{ url('/tags/delete/'.$tag->id) }}" class="btn btn-danger display-5">Delete</a>
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