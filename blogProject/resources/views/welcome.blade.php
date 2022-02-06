<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tech Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
            



        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                height: 100%;
                color: #777;
                line-height: 1.8;
            }

            .bgimg-1 {
              background-image: url('{{asset('img/Home/parallax1.jpg')}}');
              height: 100vh;
              width: 100%;
            }

            .bgimg-1 {
              background-attachment: fixed;
              background-position: center;
              background-repeat: no-repeat;
              background-size: cover;
            }

            

            .w3-wide {letter-spacing: 10px;}
            .w3-hover-opacity {cursor: pointer;}

            @media only screen and (max-device-width: 1600px) {
              .bgimg-1, .bgimg-2, .bgimg-3 {
                /* background-attachment: scroll; */
                min-height: 400px;
            }
          }
        </style>
    </head>
    <body class="w3-light-grey">
        @extends('layouts.master')
        @section('navbar')
        

        <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
          <div class="w3-display-middle" style="white-space:nowrap;">
            <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">ROY'S <span class="w3-hide-small">TECH</span> BLOG</span>
          </div>
        </div>
        <div class="w3-content" style="max-width:1400px">

            <!-- Header -->
            


            <header class="w3-container w3-center w3-padding-32"> 
              <h1><b>TECH BLOG</b></h1>
              <p>Welcome to the blog of <span class="w3-tag">Shutirtha Roy</span></p>
            </header>
            
            <!-- Grid -->
            <div class="w3-row">
            
            <!-- Blog entries -->
            <div class="w3-col l8 s12">
              <!-- Blog entry -->
            
              <!-- Blog entry -->
              @foreach ($all_posts as $post)
                <div class="w3-card-4 w3-margin w3-white">
                  <img src="{{ asset('images/'.$post->image) }}" alt="Nature" style="width:100%; height: 65vh;">
                  <div class="w3-container">
                    <h3><b><a class="display-5" href="posts/{{ $post->id }}" style="text-decoration: none;">{{ $post->title }}</a></b></h3>
                    <h5>Created {{ $post->created_at->diffForHumans() }} <span class="w3-opacity">Updated {{ $post->updated_at->diffForHumans() }}</span></h5>
                  </div>
              
                  <div class="w3-container">
                    <p>{!! substr($post->content, 0, 500) !!}</p>
                    <div class="w3-row">
                      <div class="w3-col m8 s12">
                        <p><a class="w3-button w3-padding-large w3-white w3-border" href="posts/{{ $post->id }}"><b>READ MORE »</b></a></p>
                      </div>
                      <div class="w3-col m4 w3-hide-small">
                        <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-tag">{{ count($post->comments) }}</span></span></p>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
                {{ $all_posts->links() }}

            <!-- END BLOG ENTRIES -->
            </div>
            
            
            
            <!-- Introduction menu -->
            <div class="w3-col l4">
              <!-- About Card -->
              <div class="w3-card w3-margin w3-margin-top">
                <img src="{{ asset('img\Home\avatar_g .jpg') }}" style="width:100%;">
                  <div class="w3-container w3-white">
                    <h4><a href="http://127.0.0.1:8000/about-me" style="text-decoration: none;"><b>Shutirtha Roy</b></a></h4>
                    <p>Just me, myself and I, exploring the universe of infinity. Currently I have a goal to improve my problem solving skills along with cloud computing and projects related to full stack.</p>
                  </div>
              </div><hr>
              
              <!-- Posts -->
              <div class="w3-card w3-margin">
                <div class="w3-container w3-padding w3-black">
                  <h4>Categories</h4>
                </div>
                <ul class="w3-ul w3-hoverable w3-white">
                  @foreach ($all_categories as $category)
                      <li class="w3-padding-16">
                          <span class="w3-large"><a href="{{ url("/categories/".$category->id) }}" style="text-decoration:none;" class="w3-margin-bottom">{{ $category->category_type }}</a></span><br>
                      </li>  
                  @endforeach
              </ul>
              </div>
              <hr> 
            
              <!-- Labels / tags -->
              <div class="w3-card w3-margin">
                <div class="w3-container w3-padding w3-black">
                  <h4>Tags</h4>
                </div>
                <div class="w3-container w3-white">
                  @foreach ($all_tags as $tag)
                    <a href="{{ url("/tags/".$tag->id) }}" style="text-decoration:none;" class="w3-tag w3-light-grey w3-small w3-margin-bottom w3-padding w3-margin-top">{{ $tag->tag_name }}</a>
                  @endforeach
                </p>
                </div>
              </div>
              
            <!-- END Introduction Menu -->
            </div>
            
            <!-- END GRID -->
            </div><br>
            <p style="text-align:center;"><a href="http://127.0.0.1:8000/posts" class="w3-button w3-padding-large w3-white w3-border"><b>See MORE</b></a></p>

            <!-- END w3-content -->
        </div>
        
        <!-- Footer -->
        <footer class="w3-container w3-padding-32 w3-margin-top w3-black">
          {{-- <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
          <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Next »</button> --}}
          <p>Made By Shutirtha Roy</p>
        </footer>

          
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        @endsection
    </body>
</html>