@extends('layouts.master')

    @section('navbar')

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Edit Posts</h1>
                    <form method="POST" action="{{ url('/tags/update/'.$single_tag->id) }}">
                        @csrf
                        <div class="mb-3">
                          <label for="title" class="form-label">Tag Name</label>
                          <input type="text" class="form-control" id="title" name="title" value="{{ $single_tag->tag_name }}">                        
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
        

@endsection