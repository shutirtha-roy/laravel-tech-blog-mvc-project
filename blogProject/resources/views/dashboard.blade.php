<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <p class="display-3">This is user {{ Auth::user()->name }}</p>
            
            @if (Auth::user()->name=="Admin")
                <a href="{{ route('postsCreate') }}" class="btn btn-danger display-5">Create Posts</a>
                <a href="{{ route('postsPreEdit') }}" class="btn btn-danger display-5">Click to Edit or Delete Posts</a>
                <a href="{{ route('allComments') }}" class="btn btn-danger display-5">Click to Delete Comments</a>
            @else
                <h1>Check out all posts or Post Contents</h1>
                <a href="{{ route('postsCreate') }}" class="btn btn-danger display-5">Create Posts</a>
            @endif

        </div>
    </div>
</x-app-layout>



