<!DOCTYPE HTML>


<head>
    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
                            
</head>

@extends('layouts.master')

    @section('navbar')

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Edit Posts</h1>
                    <form method="POST" action="{{ url('/posts/update/'.$single_post->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="title" class="form-label">Title</label>
                          <input type="text" class="form-control" id="title" name="title" value="{{ $single_post->title }}">                        
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Content</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="content"">{{ $single_post->content }}</textarea>                    
                        </div>
                        <input type="file" name="image"  class="form-control"  value="{{ asset('images/'.$single_post->image) }}">
                        <img id="previewImg" src="{{ asset('images/'.$single_post->image) }}" alt="" class="ms-5 ps-5" width="300px">
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
        
        <script>
            CKEDITOR.replace('content');
        </script>

@endsection