<!DOCTYPE HTML>


<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.select-toggle').each(function(){    
                var select = $(this), values = {};    
                $('option',select).each(function(i, option){
                    values[option.value] = option.selected;        
                }).click(function(event){        
                    values[this.value] = !values[this.value];
                    $('option',select).each(function(i, option){            
                        option.selected = values[option.value];        
                    });    
                });
            });
        });
    </script>


    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
                            
</head>


@extends('layouts.master')

    @section('navbar')

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    @if(session()->has('success'))
                        <div class="alert alert-success w3-margin" style="z-index: 1;">
                            {{ session()->get('success') }}
                        </div>
                    @endif


                    @if ($errors->any())
                    <div class="w3-panel w3-pale-red w3-border w3-padding-16">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li style="list-style: none;">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @else
                        <div>
                            <ul>
                                <br><br><br>
                            </ul>
                        </div>
                    @endif

                    <h1>Create Posts</h1>
                    <form method="POST" action="{{ url("/posts/create") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="title" class="form-label">Title</label>
                          <input type="text" class="form-control" id="title" name="title">                        
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Content</label>
                            <textarea id="mytextarea" name="content"></textarea>                    
                            <input class="form-control" type="file" name="image">
                        </div>
                        
                        <p></p>
                        <select name="tags[]" class="w3-select select-toggle" multiple="multiple" >
                            <option value="" disabled selected>Choose your option for tags</option>
                            @foreach ($all_tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->tag_name }}</option>
                            @endforeach
                        </select>
                        <p></p>
                        <select name="categories[]" class="w3-select select-toggle" multiple="multiple">
                            <option value="" disabled selected>Choose your option for categories</option>
                            @foreach ($all_categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_type }}</option>
                            @endforeach
                        </select>

                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>


                    

                </div>
            </div>
        </div>

        
        
        <script>
            CKEDITOR.replace('content');
        </script>
        
@endsection