@extends('layouts.master')

    @section('navbar')

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Edit Posts</h1>
                    <form method="POST" action="{{ url('/users/update/'.$single_user->id) }}">
                        @csrf
                        <div class="mb-3">
                          <label for="title" class="form-label">Name</label>
                          <input type="text" class="form-control" id="title" name="name" value="{{ $single_user->name }}">      
                          <label for="title" class="form-label">Email</label>
                          <input type="text" class="form-control" id="title" name="email" value="{{ $single_user->email }}">                         
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
        

@endsection