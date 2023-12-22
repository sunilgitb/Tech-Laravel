@extends('frontend.layouts.app')
{{-- @include('frontend.layouts.header') --}}
<style>
  /* Center the loader */
  #loader {
    position: absolute;
    left: 50%;
    top: 50%;
    z-index: 1;
    width: 120px;
    height: 120px;
    margin: -76px 0 0 -76px;
    border: 2px solid #f3f3f3;
    border-radius: 50%;
    border-top: 2px solid #3498db;
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
  }
  
  @-webkit-keyframes spin {
    0% { -webkit-transform: rotate(0deg); }
    100% { -webkit-transform: rotate(360deg); }
  }
  
  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
  
  /* Add animation to "page content" */
  .animate-bottom {
    position: relative;
    -webkit-animation-name: animatebottom;
    -webkit-animation-duration: 1s;
    animation-name: animatebottom;
    animation-duration: 1s
  }
  
  @-webkit-keyframes animatebottom {
    from { bottom:-100px; opacity:0 } 
    to { bottom:0px; opacity:1 }
  }
  
  @keyframes animatebottom { 
    from{ bottom:-100px; opacity:0 } 
    to{ bottom:0; opacity:1 }
  }
  
  /* #myDiv {
    display: none;
    text-align: center;
  } */
  </style>
  <script>
  var myVar;
  
  function myFunction() {
    myVar = setTimeout(showPage,500);
  }
  
  function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("myDiv").style.display = "block";
  }
  </script>
    <body onload="myFunction()" style="margin:0;">
    <div id="loader"></div>
    <div style="display:none;" id="myDiv" class="animate-bottom">
      
<header class="header">
  <nav class="navigation">
    <a href="{{url('/')}}" class="logo">
      <img src="{{asset('frontend/assets/img/logo-update.png')}}" height="40px" width="90px" alt="Tech Simians" />
    </a>
    <button class="navigation__button">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <div class="navigation__menu closed">
      <div class="navigation__title">Menu</div>
      <ul>
        <li class="navigation__item"><a href="/">Home</a></li>
        
        <li class="navigation__item navigation__item--with-dropdown">
          <a href="#">Industries</a>
          <ul class="navigation__dropdown">
            <li><a href="{{url('healthcare')}}">Healthcare</a></li>
            <li><a href="{{url('travel-transportation')}}">Travel & Transportion</a></li>
            <li><a href="{{url('construction')}}">Construction</a></li>
            <li>
              <a href="{{('education')}}">Education</a>
            </li>
            <li><a href="{{url('port-logistics')}}">Port Logistics</a></li>
           
          </ul>
        </li>
        <li class="navigation__item"><a href="{{url('about-us')}}">About </a></li>
       
        <li class="navigation__item navigation__item--with-dropdown">
          <a href="{{('#')}}">Services </a>
          <ul class="navigation__dropdown">
            <li><a href="{{url('development')}}">Development</a></li>
            <li><a href="{{url('designing')}}">Designing</a></li>
            <li>
              <a href="{{('enterprise-solution')}}">Enterprise Solutions</a>
            </li>
            <li><a href="{{url('cloud-solutions')}}">Cloud Solutions</a></li>
            <li><a href="{{('it-consulting')}}">IT Consulting</a></li>
          </ul>
      
        </li>
        <li class="navigation__item"><a href="{{url('our-work')}}">Work</a></li>
        <li class="navigation__item"><a href="{{url('careers')}}">Careers</a></li>
        <li class="navigation__item"><a href="{{url('blog')}}">Blog</a></li>
      </ul>
      <div class="navigation__contact">
        <a href="mailto:info@techsimians.com">info@techsimians.com</a>
        <a href="tel:+918080425120">+91 808 042 5120</a>
      </div>
    
      <div>
        <a class="navigation__cta" href="{{url('contact-us')}}" id="neonShadow">Contact</a>
      </div>
    </div>
  </nav>
</header>
<body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>Construction - Tech Simians</title> --}}
    <title>@yield('title') {{$blog->meta_title}}</title>
   
<title>@yield('title') {{$blog->meta_title}}</title>
@section('description') {{ $blog->meta_description }} @endsection
@section('keywords') {{ $blog->meta_keywords}} @endsection




<link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<br><br><br><br>
<!DOCTYPE html>
{{-- <html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog - Tech Simians</title>
  <link rel="stylesheet" href="style.css">
</head> --}}
<body>


  
    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Posts Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">
          @if(session('success'))
          <div id="success-message" class="alert alert-success">
              {{ session('success') }}
          </div>
        @endif
            <article class="flex flex-col my-4">
                <!-- Article Image -->
                <a href="#" class="hover:opacity-75">
                  
                    <img src="{{ asset($blog->image) }}" alt="Image" class="w-full h-auto">
                </a>
                <div class="bg-white flex flex-col justify-start p-6">
                    <a href="#" class="text-blue-700  font-bold uppercase pb-4">Technology</a>
                    <h2 class="blog_title">{{ $blog->title }}</h2>
                    {{-- <h4 class="text-3xl font-bold pb-4">{{ $blog->title }}</h4> --}}
                    <p href="#" class=" pb-3">
                        <a href="#" class="font-semibold hover:text-gray-800"><i class="fa-regular fa-user"></i>&nbsp;{{$blog->user->name}}</a>, Published on  @if ($blog->created_at)
                        {{$blog->created_at->format('Y-m-d')}}
                    @endif | <i class="fa-regular fa-comment-dots"></i> {{count($blog->comments)}} Comments
                    </p>
                   <p class="project__text_blog"> {!! $blog->description !!}</p>
                   <p class="text-blue-700 text-3xl font-bold uppercas">Tags: <strong class="text-base font-light  bg-green-100 pl-2 pr-2">{{$blog->meta_keywords}}</strong></p>
                    {{-- <a href="#" class="uppercase text-gray-800 hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a> --}}
                </div>
            </article>



            <div class="w-full shadow-md pl-5 pr-5">
                <h1> Leave a comment </h1>
                <form action="{{ route('comments.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $blog->id }}">
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                        <input type="text" name="name" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                        <input type="email" name="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="content" class="block text-gray-700 font-medium mb-2">Comments</label>
                        <textarea name="content" id="content" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" required></textarea>
                    </div>
                    <button type="submit" class="navigation__cta mt-5">Submit Comment</button>
                    {{-- <button type="submit" class="my-class text-white px-4 py-2 rounded-3xl hover:bg-blue-600 focus:bg-blue-600 focus:outline-none">Submit Comment</button> --}}
                </form>
            </div>
            
              
            <br>
        <div class="w-full shadow-md pl-5 pr-5">
            <h5>Comments</h5>
            @if(count($blog->comments))
            @foreach($blog->comments as $comment)
           <p class="font-semibold hover:text-gray-800"><i class="fa-regular fa-user"></i>&nbsp;: {{ $comment->name }}</p>
  
            
            <p><i class="fa-regular fa-comment-dots"></i>&nbsp;Comment: {{ $comment->content }}</p>
            <p class="text-indigo-400">Date: {{$comment->created_at->format('Y-m-d')}}</p>
          {{-- <p class="text-indigo-400">
            Date: {{ date('jS M Y H:i:s', strtotime($comment->created_at)) }} --}}

</p>
  
            {{-- <p class="text-indigo-400">{{ $comment->created_at->format('F j, Y \a\t h:i a') }}</p> --}}
            {{-- <p class="text-indigo-400">
                @php
        $time = \Carbon\Carbon::now()->timezone('Asia/Kolkata')->format('F j, Y \a\t h:i a');
        echo $time;
        @endphp
              </p> --}}
            <hr>
            @endforeach
            
            @else 
            <p>No comments yet</p>
            @endif
        </div>
        <br><br><br>
    
<div class="blognav__container">
    @if ($previousPost)
    <div class="pr-5">
      <button class="btn btn-primary">
        <a href="{{ route('post.show-single', $previousPost->slug) }}" class=""><i class="fa-solid fa-angles-left"></i>Previous Post</a></button>
        <p style="color: white;">{{ \Str::limit($previousPost->title, 20, '...') }}</p>
      
    </div>
    @endif
    
    
    @if ($nextPost)
    <div class="pl-5">
      <button class="btn btn-primary">
        <a href="{{ route('post.show-single', $nextPost->slug) }}" class="">Next Post<i class="fa-solid fa-angles-right"></i></a></button>
        <p style="color: white;">{{ \Str::limit($nextPost->title, 20, '...') }}</p>
       
    </div>
        </div>
    @endif 
        </section>


        <style>
            @media(max-width:768px){
                .blognav__container{
                    display:inline;
                }
            }
            @media(min-width: 991px){
            
                .blognav__container{
                    margin-left:10px;
                     display: flex;
                }
            
            }
            .blognav__container {
                /* margin-left:25px; */
                /* display: flex; */
                justify-content: space-between;
            }
            
            .blognav__item {
                flex-basis: 48%; /* Adjust the width as needed */
                margin:5px;
            }
            
            .blognav__button {
                display: block;
                padding: 10px 20px;
                background-color: #71BC2F;
                color: #fff;
                text-decoration: none;
                border-radius: 5px;
            }
            </style>

        <!-- Sidebar Section -->
<aside class="w-full md:w-1/3 flex flex-col items-center px-3">
    <div class="w-full bg-white shadow-md flex flex-col my-4 p-6">
        <h2 class="text-xl pb-2 font-weight: 900  pl-2">Search Posts</h2>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <form class="flex items-center" action="{{ route('post.search') }}" method="GET" id="searchForm">
            @csrf
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none"></div>
                <input type="text" name="title" id="searchInput" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search post name..." autocomplete="off" required>
            </div>
            
        </form>
        <div id="searchResults" class="mt-2"></div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    
    <script>
      $(document).ready(function() {
        var selectedSuggestion = -1;
    
        $('#searchForm').on('submit', function(event) {
          event.preventDefault();
        });
    
        $('#searchInput').on('input', function() {
          var query = $(this).val().trim();
    
          if (query.length === 0) {
            $('#searchResults').empty();
            return;
          }
    
          $.ajax({
            url: "{{ route('post.search') }}",
            method: 'GET',
            data: { query: query },
            success: function(response) {
              var results = $('#searchResults');
              results.empty();
    
              if (response.length > 0) {
                $.each(response, function(index, post) {
                  var url = "{{ route('post.search-show', ':slug') }}";
                  url = url.replace(':slug', post.slug);
                  results.append('<u><a href="' + url + '" class="block w-full py-2 px-4 text-gray-800 hover:bg-gray-100">' + post.title.substr(0, 30) +  '</a></u>');
                });
                selectedSuggestion = -1;
              } else {
                results.append('<p>No results found</p>');
              }
            }
          });
        });
    
        $('#searchInput').keydown(function(e) {
          var key = e.keyCode;
          var $listItems = $('#searchResults a');
    
          if (key === 40) { // Down arrow key
            e.preventDefault();
            selectedSuggestion = Math.min(selectedSuggestion + 1, $listItems.length - 1);
          } else if (key === 38) { // Up arrow key
            e.preventDefault();
            selectedSuggestion = Math.max(selectedSuggestion - 1, -1);
          } else if (key === 13) { // Enter key
            e.preventDefault();
            var url = $listItems.eq(selectedSuggestion).attr('href');
            if (url) {
              window.location.href = url;
            }
          }
    
          $listItems.removeClass('selected');
          if (selectedSuggestion !== -1) {
            $listItems.eq(selectedSuggestion).addClass('selected');
          }
        });
      });
    </script>
    
    
{{-- 
    <script>
      $(document).ready(function() {

        $('#searchForm').on('submit', function(event) {
      event.preventDefault(); // Prevent the default form submission behavior
        });

        $('#searchInput').keyup(function(event) {
          var query = $(this).val().trim(); // Trim whitespace from the input
          if ((event.keyCode === 32 || event.keyCode === 8) && query.length === 0) {
            $('#searchResults').empty(); // If spacebar or backspace is pressed after clearing suggestions, do not show autosuggestions
            return;
            
          }
    
          if (query.length >= 1) {
            $.ajax({
              url: "{{ route('post.search') }}",
              method: 'GET',
              data: { query: query },
              success: function(response) {
                var results = $('#searchResults');
                results.empty();
                if (response.length > 0) {
                  $.each(response, function(index, post) {
                    var url = "{{ route('post.search-show', ':slug') }}";
                    url = url.replace(':slug', post.slug);
                    results.append('<u><a href="' + url + '" class="block w-full py-2 px-4 text-gray-800 hover:bg-gray-100">' + post.title.substr(0, 30) +  '</a></u>' );
                  });
                } else {
                  results.append('<p>No results found</p>');
                }
              }
            });
          } else {
            $('#searchResults').empty();
          }
        });
      });
    </script> --}}
    

          
    
            <div class="w-full bg-white shadow-md flex flex-col my-4 p-6">
                <h2 class="text-xl pb-2 font-weight: 900  pl-2">Latest Posts</h2>

<ul>
  @foreach ($latestPosts as $post)
    <li class="flex items-center mb-4">
      <a href="{{ route('post.show-single', ['slug' => urlencode($post->slug)]) }}">
        <img src="{{ asset($post->image) }}" alt="Category Image" class="w-20 h-20 mr-2">
      </a>&nbsp;&nbsp;
      <a href="{{ route('post.show-single', ['slug' => urlencode($post->slug)]) }}" class="text-black hover:underline">{{ \Str::limit($post->title, 30, '...') }}</a>
    </li>
  @endforeach
</ul> 
  <style>
.my-class {
  background-color: #007bff;
}
  </style>
        
                <a href="{{url('blog')}}" class="navigation__cta pl-5">
                    Get more posts
                </a>
                {{-- <a href="{{url('blog')}}" class="w-full text-white font-bold  uppercase rounded-3xl hover:bg-blue-500 flex items-center justify-center px-2 py-2 mt-4  my-class">
                    Get more posts
                </a> --}}

                
            </div>
            

            <div class="w-full bg-white shadow-md flex flex-col my-4 p-6">
                <h2 class="text-xl pb-2 font-weight: 900  pl-2">Categories</h2>
                
                  <h5 class="text-base font-light pl-2">&#x2022; Website Development</5>
                  <h5 class="text-base font-light pl-2">&#x2022; App Development</5>
                  <h5 class="text-base font-light pl-2">&#x2022; iOS Development </h5>
                  <h5 class="text-base font-light pl-2">&#x2022; SEO</h5>
               
               
            </div>


            <div class="w-full bg-white shadow-md flex flex-col my-4 p-6">
                <h2 class="text-xl pb-2 font-weight: 900 pl-2">Tags</h2>
                  <h5 class="text-base font-light pl-2">&#x2022; Backlink</h5>
                  <h5 class="text-base font-light pl-2">&#x2022; IT Sector</h5>
                  <h5 class="text-base font-light pl-2">&#x2022; Artificial Intelligence</h5>
               
                
              
            </div>

            
            <div class="w-full bg-white shadow-md flex flex-col my-4 p-2">
              <h2 class="text-xl pb-2 font-weight: 600 pl-2">Follow Us</h2>
          <a href="{{url('https://www.instagram.com/techsimians/')}}" class="navigation__cta mb-2">
              <i class="fab fa-instagram mr-4"></i> Follow @Techsimians
          </a>
          <a href="{{url('https://www.facebook.com/profile.php?id=100067748465412')}}" class="navigation__cta mb-2">
              <i class="fab fa-facebook mr-4"></i> Follow @Techsimians
          </a>
          <a href="{{url('https://www.linkedin.com/company/13608548/admin/feed/posts/')}}" class="navigation__cta mb-2">
              <i class="fab fa-linkedin mr-4"></i> Follow @Techsimians
          </a>
        </div>
            {{-- <div class="w-full bg-white shadow-md flex flex-col my-4 p-6">
                <h2 class="text-xl pb-2 font-weight: 600 pl-2">Follow Us</h2>
            <a href="{{url('https://www.instagram.com/techsimians/')}}" class="w-full my-class text-white font-bold  uppercase rounded-3xl  flex items-center justify-center px-2 py-2 mt-6">
                <i class="fab fa-instagram mr-2"></i> Follow @Techsimians
            </a>
            <a href="{{url('https://www.facebook.com/profile.php?id=100067748465412')}}" class="w-full my-class text-white font-bold  uppercase rounded-3xl  flex items-center justify-center px-2 py-2 mt-6">
                <i class="fab fa-facebook mr-2"></i> Follow @Techsimians
            </a>
            <a href="{{url('https://www.linkedin.com/company/13608548/admin/feed/posts/')}}" class="w-full my-class text-white font-bold  uppercase rounded-3xl flex items-center justify-center px-2 py-2 mt-6 my-class">
                <i class="fab fa-linkedin mr-2"></i> Follow @Techsimians
            </a>
        </div> --}}


        </aside>

    </div>


    
      
      <div class="container mx-auto px-4 lg:px-8 pb-5">
        <h3>Related Posts</h3>
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
          @foreach ($relatedPosts as $post)
          <div class="bg-white rounded-md shadow-md p-4">
            <a href="{{ route('post.show-single', ['slug' => urlencode($post->slug)]) }}"><img src="{{ asset($post->image) }}" alt="Category Image" height="400" width="400" class="rounded-2xl"></a>
            <h4 class="mt-2  "><a href="{{ route('post.show-single', ['slug' => urlencode($post->slug)]) }}">{{ \Str::limit($post->title, 20, '...') }}</a></h4>
            <p class=" mt-2"><a href="{{ route('post.show-single', ['slug' => urlencode($post->slug)]) }}">{{ \Str::limit(strip_tags($post->description), 50, '...') }}</a> <a href="{{ route('post.show-single', ['slug' => urlencode($post->slug)]) }}"><span style="color:rgb(128, 128, 227)">Read more</a></p>
            <!-- Additional content for each post -->
          </div>
          @endforeach
        </div>
      </div>



</body>
</html>
  
@include('frontend.layouts.footer')