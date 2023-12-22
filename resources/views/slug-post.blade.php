@extends('frontend.layouts.app')
@include('frontend.layouts.header')
@section('title') {{ $post->meta_title }} @endsection
@section('description') {{ $post->meta_description }} @endsection
@section('keywords') {{ $post->meta_keywords}} @endsection
<link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<br><br><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog - Tech Simians</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- FOOTER BRAND LOGOS -->
<!-- last updated 09/16/15 -->

<!-- When slicing images: -->
<!-- * logo image height must be 56px -->
<!-- * logo image width can be whatever, but should be visually centered -->
<!-- Otherwise, when you add/remove an image wrapped in an anchor tag, all images in the row will space evenly and automatically :) -->

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Blog Template</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>
<body class="bg-white font-family-karla"> --}}

    <!-- Top Bar Nav -->
 

  



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
                    {{-- <img src="https://source.unsplash.com/collection/1346951/1000x500?sig=1"> --}}
                    <img src="{{ asset($post->image) }}" alt="Category Image" class="w-full h-auto">
                </a>
                <div class="bg-white flex flex-col justify-start p-6">
                    <a href="#" class="text-blue-700  font-bold uppercase pb-4">Technology</a>
                    <h4 class="text-3xl font-bold pb-4">{{ $post->title }}</h4>
                    <p href="#" class=" pb-3">
                        <a href="#" class="font-semibold hover:text-gray-800"><i class="fa-regular fa-user"></i>&nbsp;{{$post->user->name}}</a>, Published on  @if ($post->created_at)
                        {{$post->created_at->format('Y-m-d')}}
                    @endif | <i class="fa-regular fa-comment-dots"></i> {{count($post->comments)}} Comments
                    </p>
                    {!! $post->description !!}
                    {{-- <a href="#" class="uppercase text-gray-800 hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a> --}}
                </div>
            </article>

           

            <div class="w-full shadow-md pl-5 pr-5">
              <h1> Leave a comment </h1>
                <form action="{{ route('comments.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
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
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:bg-blue-600 focus:outline-none">Submit Comment</button>
                </form>
            </div>
            
              
            <br>
        <div class="w-full shadow-md pl-5 pr-5">
            <h5>Comments</h5>
            @if(count($post->comments))
            @foreach($post->comments as $comment)
            <p class="font-semibold hover:text-gray-800"><i class="fa-regular fa-user"></i>&nbsp;: {{$comment->name}}</p>
            
            <p><i class="fa-regular fa-comment-dots"></i>&nbsp;Comment: {{ $comment->content }}</p>
            <p class="text-indigo-400">Date: {{$comment->created_at->format('Y-m-d')}}</p>
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
    
        {{-- <div class="blognav__container ">
          @if ($previousPost)
          <div class="pr-5">
            <button class="btn btn-primary">
              <a href="{{ route('post.showtitle', $previousPost->title) }}" class=""><i class="fa-solid fa-angles-left"></i>Previous Post</a></button>
              <p style="color: white;">{{ \Str::limit($previousPost->title, 20, '...') }}</p>
            
          </div>
          @endif
          
          
          @if ($nextPost)
          <div class="pl-5">
            <button class="btn btn-primary">
              <a href="{{ route('post.showtitle', $nextPost->title) }}" class="">Next Post <i class="fa-solid fa-angles-right"></i></a></button>
              <p style="color: white;">{{ \Str::limit($nextPost->title, 20, '...') }}</p>
             
          </div>
              </div>
          @endif --}}
  
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

          {{-- <div class="w-full bg-white shadow-md flex flex-col my-4 p-6">
            <p class="text-xl font-semibold pb-5">Search</p>

          
<form class="flex items-center">   
  <label for="simple-search" class="sr-only">Search</label>
  <div class="relative w-full">
      <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
          
      </div>
      <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search branch name..." required>
  </div>
  <button type="submit" class="p-2.5 ms-2  font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
      <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
      </svg>
      <span class="sr-only">Search</span>
  </button>
</form>

          
          </div> --}}
            <div class="w-full bg-white shadow-md flex flex-col my-4 p-6">
              <h2 class="text-xl pb-5 font-weight: 900  pl-2">Latest Posts</h2>
        
                {{-- @foreach ($blogPost as $post)
            <u><a href="{{ route('post.show-single', ['title' => urlencode($post->title)]) }}"><img src="{{ asset($post->image) }}" alt="Category Image" class="w-10 h-10"></a><a href="{{ route('post.show-single', ['title' => urlencode($post->title)]) }}">{{ \Str::limit($post->title, 30, '...') }}</a></u>
            @endforeach --}}

<ul>
  {{-- @foreach ($blogPost as $post)
    <li class="flex items-center mb-4">
      <a href="{{ route('post.show-single', ['title' => urlencode($post->title)]) }}">
        <img src="{{ asset($post->image) }}" alt="Category Image" class="w-20 h-20 mr-2">
      </a>&nbsp;&nbsp;
      <a href="{{ route('post.show-single', ['title' => urlencode($post->title)]) }}" class="text-blue-500 hover:underline">{{ \Str::limit($post->title, 30, '...') }}</a>
    </li>
  @endforeach
</ul> --}}
  
        
                <a href="{{url('blog')}}" class="w-full bg-blue-500 text-white font-bold  uppercase rounded hover:bg-blue-500 flex items-center justify-center px-2 py-2 mt-4">
                    Get more posts
                </a>

                
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

          
          <div class="w-full bg-white shadow-md flex flex-col my-4 p-6">
              <h2 class="text-xl pb-2 font-weight: 600 pl-2">Follow Us</h2>
          <a href="{{url('https://www.instagram.com/techsimians/')}}" class="w-full bg-blue-500 text-white font-bold  uppercase rounded hover:bg-blue-500 flex items-center justify-center px-2 py-2 mt-6">
              <i class="fab fa-instagram mr-2"></i> Follow @Techsimians
          </a>
          <a href="{{url('https://www.facebook.com/profile.php?id=100067748465412')}}" class="w-full bg-blue-500 text-white font-bold  uppercase rounded hover:bg-blue-500 flex items-center justify-center px-2 py-2 mt-6">
              <i class="fab fa-facebook mr-2"></i> Follow @Techsimians
          </a>
          <a href="{{url('https://www.linkedin.com/company/13608548/admin/feed/posts/')}}" class="w-full bg-blue-500 text-white font-bold  uppercase rounded hover:bg-blue-500 flex items-center justify-center px-2 py-2 mt-6">
              <i class="fab fa-linkedin mr-2"></i> Follow @Techsimians
          </a>
      </div>


        </aside>

    </div>

    {{-- <aside aria-label="Related articles" class="py-8 lg:py-24 bg-gray-50 dark:bg-gray-800 shadow-md">
        <div class="px-4 mx-auto max-w-screen-xl ">
            <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Related articles</h2>
            <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($relatedPosts as $post)
                <article class="max-w-xs">
                  
                    <a href="{{ route('post.show-single', ['title' => urlencode($post->title)]) }}"><img src="{{ asset($post->image) }}" alt="Category Image" class="mb-5 rounded-lg"></a>
                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                        <a href="{{ route('post.show-single', ['title' => urlencode($post->title)]) }}">{{ \Str::limit($post->title, 20, '...') }}</a>
                    </h2>
                    <p class="mb-4 text-gray-500 dark:text-gray-400"><a href="{{ route('post.show-single', ['title' => urlencode($post->title)]) }}">{{ \Str::limit(strip_tags($post->description), 50, '...') }}</a> </p>
                    <a href="{{ route('post.show-single', ['title' => urlencode($post->title)]) }}" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                        Read in 2 minutes
                    </a>
                </article>
                @endforeach
              
            </div>
        </div>
      </aside> --}}
      
      {{-- <div class="container mx-auto px-4 lg:px-8">
        <h3>Related Posts</h3>
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
          @foreach ($relatedPosts as $post)
          <div class="bg-white rounded-md shadow-md p-4">
            <a href="{{ route('post.show-single', ['title' => urlencode($post->title)]) }}"><img src="{{ asset($post->image) }}" alt="Category Image" height="400" width="400" class="rounded-2xl"></a>
            <h6 class="mt-2"><a href="{{ route('post.show-single', ['title' => urlencode($post->title)]) }}">{{ \Str::limit($post->title, 20, '...') }}</a></h6>
            <p class=" mt-2"><a href="{{ route('post.show-single', ['title' => urlencode($post->title)]) }}">{{ \Str::limit(strip_tags($post->description), 50, '...') }}</a> <a href="{{ route('post.show-single', ['title' => urlencode($post->title)]) }}"><span style="color:rgb(128, 128, 227)">Read more</span></a></p>
            <!-- Additional content for each post -->
          </div>
          @endforeach
        </div>
      </div> --}}

    <script>
        function getCarouselData() {
            return {
                currentIndex: 0,
                images: [
                    'https://source.unsplash.com/collection/1346951/800x800?sig=1',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=2',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=3',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=4',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=5',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=6',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=7',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=8',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=9',
                ],
                increment() {
                    this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex + 1;
                },
                decrement() {
                    this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex - 1;
                },
            }
        }
    </script>

</body>
</html>
  
@include('frontend.layouts.footer')