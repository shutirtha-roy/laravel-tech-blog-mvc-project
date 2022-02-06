@extends('layouts.master')
    @section('navbar')
    
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center display-4">All Posts</h1>
                    
                    @foreach ($all_posts as $post)

                          <div class="row">
                              <div class="col-2"></div>
                              <div class="col-10">
                                <h1>Posted Comments of {{ $post->title }}</h1>
                              </div>
                          </div>
                          
                          @forelse ($post->comments as $single_comment)
                            
                            

                            <div class="row">
                                <div class="col-2">
                                    
                                </div>
                                
                                
                                <div class="col-10">
                                        
                                        <div class="input-group mb-3" style="width:350px;">
                                            <p class="h1 me-1">{{ $single_comment->id }}</p>
                                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" name="username" value="{{ $single_comment->username }}" disabled>
                                        </div>
                                        <br>
                                        <div class="form-floating">
                                            <textarea class="form-control " placeholder="Leave a comment here" id="floatingTextarea2" style="height: 80px; width: 600px;" name="comment" disabled>{{ $single_comment->comment }}</textarea>
                                            <label for="floatingTextarea2">Comments</label>
                                        </div>
                                        <br>
                                        <a href="{{ url('/comments/delete/'.$single_comment->id) }}" class="btn btn-danger display-5">Delete</a>
                                        <br><br><br><br>
                                </div>
                          @empty
                              <p>No models count</p>
                          @endforelse        
                    @endforeach            
                </div>
            </div>
        </div>
        

        
        

@endsection

