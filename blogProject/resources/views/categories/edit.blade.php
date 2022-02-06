@extends('layouts.master')

    @section('navbar')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Categories</h1>
                <form method="POST" action="{{ url('/categories/update/'.$single_category->id) }}">
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Category Type</label>
                      <input type="text" class="form-control" id="title" name="title" value="{{ $single_category->category_type }}">                        
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
        

@endsection