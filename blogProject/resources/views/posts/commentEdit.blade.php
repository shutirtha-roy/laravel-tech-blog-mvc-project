@extends('layouts.master')

    @section('navbar')

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Edit Comments</h1>
                    <form method="POST" action="{{ url('/comments/update/'.$single_comment->id) }}">
                        @csrf
                        <div class="mb-3">
                          <label for="title" class="form-label">{{ $single_comment->username }}</label>
                          <input type="text" class="form-control" id="title" name="comment" value="{{ $single_comment->comment }}">                        
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
        

@endsection