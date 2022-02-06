@extends('layouts.master')

    @section('navbar')

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p></p>
                    <h1>Change Password</h1>
                    <form method="POST" action="{{ url('/users/updatePassword/'.$single_user->id) }}">
                        @csrf
                        <div class="mb-3">
                            
                          <h1 for="title" class="form-label">Name: {{ $single_user->name }}</h1>
                              
                          <h1 for="title" class="form-label">Email: {{ $single_user->email }}</h1>

                          <label class="w3-text-black"><b>Change Password</b></label>
                          <input class="w3-input w3-border w3-hover-black" name="password_change" type="password"></p>
                          <label class="w3-text-black"><b>Confirm Password</b></label>
                          <input class="w3-input w3-border w3-hover-black" name="password_confirm" type="password"></p>
                          {{-- <input type="text" class="form-control" id="title" name="email" value="{{ $single_user->email }}">  --}}                        
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
        

@endsection