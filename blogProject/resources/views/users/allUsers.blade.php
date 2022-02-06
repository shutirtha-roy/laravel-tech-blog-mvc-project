@extends('layouts.master')

@section('navbar')




    <div class="w3-row">
    
        <div class="w3-col l3"><p></p></div>
        <div class="w3-col l6">
            
            <header class="w3-container w3-center w3-padding-32"> 
                <h1><b>ALL Users</b></h1>
            </header>

            <table class="w3-table-all w3-large w3-mobile">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Edit</th>
                  <th>Delete</th
                </tr>
                @foreach ($all_users as $users)
                    @if ($users->id >= 1)
                        <tr>
                            <td>{{ $users->id }}</td>
                            <td>{{ $users->name }}</td>
                            <td>{{ $users->email }}</td>
                            <td><a href="{{ url('/users/edit/'.$users->id) }}" class="btn btn-danger display-5 w3-left w3-margin-right w3-large">Edit</a></td>
                            <td><a href="{{ url('/users/delete/'.$users->id) }}" class="btn btn-danger display-5 w3-left w3-large">Delete</a></td>
                        </tr>
                    @endif
                @endforeach
              </table>
        </div>
    </div>


















@endsection