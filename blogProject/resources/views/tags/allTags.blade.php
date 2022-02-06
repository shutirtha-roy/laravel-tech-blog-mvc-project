@extends('layouts.master')

@section('navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @if(session()->has('success'))
                    <div class="alert alert-success">
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

                <h1>Create Tags</h1>
                <form method="POST" action="{{ url("/tags/create") }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Tag Name</label>
                        <input type="text" class="form-control" id="title" name="tag_name">                        
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection