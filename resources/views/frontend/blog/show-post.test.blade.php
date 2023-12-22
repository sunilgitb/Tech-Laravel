@extends('frontend.layouts.app')
@include('frontend.layouts.header')
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<br><br><br><br>

<main>
   

    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Page - Tech Simians</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  

  
    <div id="heading">
     
      {{-- <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/575957/rss-icon.png" /> --}}
    </div>
<style>
    @media(min-width:991px){
       .blog-new-post{
            margin-left:20px!important;
        }
    }
    @media(max-width:768px){
       .blog-new-post{
            margin:37px!important;
            margin-left:-5px!important;
        }
    }
</style>
<section class="blog-new-post">

  @if(session('success'))
  <div id="success-message" class="alert alert-success" style="margin-left:250px;">
      {{ session('success') }}
  </div>
@endif
  <h3>{{ $post->title }}</h3><br>
  {{-- <img src="{{asset('frontend/assets/img/it-consult.jpeg')}}" height=300px; width=800px;/><br> --}}
 <img src="{{ asset($post->image) }}" alt="Category Image" class="w-full h-auto">
  
 <p><i class="fa-regular fa-user"></i>&nbsp;&nbsp;{{$post->user->name}}&nbsp;| <i class="fa-regular fa-comment-dots"></i> {{count($post->comments)}} Comments</p>
  {{-- <p class="blognav__content">{{ \Str::limit(strip_tags($post->description), 2000, '...') }}</p> --}}
  <p class="blognav__content" style="font-size:18px!important;">{!! $post->description !!}</p>

  <br><br><br>


  <h4> Leave a comment </h4>

<div class=" mx-auto">
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
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:bg-blue-600 focus:outline-none">Submit</button>
    </form>
</div>

  
<br>
<h5>Comments</h5>
@if(count($post->comments) > 0)
@foreach($post->comments as $comment)
<p><i class="fa-regular fa-user"></i>&nbsp;By: {{$comment->name}}</p>

<p><i class="fa-regular fa-comment-dots"></i>&nbsp;Comments: {{ $comment->content }}</p>
<hr>
@endforeach
@else
    <p>No comments yet.</p>
@endif


  {{-- <div class="blognav__row"> --}}


{{-- 
    <div class="blognav__container">
@if ($previousPost)
<div class="blognav__item">
    <a href="{{ route('post.showtitle', $previousPost->title) }}" class="blognav__button">Previous post</a>
    <p style="color: white;">{{ \Str::limit($previousPost->title, 20, '...') }}</p>
  
</div>
@endif


@if ($nextPost)
<div class="blognav__item">
    <a href="{{ route('post.showtitle', $nextPost->title) }}" class="blognav__button">Next post</a>
    <p style="color: white;">{{ \Str::limit($nextPost->title, 20, '...') }}</p>
   
</div>
@endif --}}


<div class="blognav__container">
  @if ($previousPost)
  <div class="">
    <button class="btn btn-primary">
      <a href="{{ route('post.showtitle', $previousPost->title) }}" class="">Previous post</a></button>
      <p style="color: white;">{{ \Str::limit($previousPost->title, 20, '...') }}</p>
    
  </div>
  @endif
  
  
  @if ($nextPost)
  <div class="">
    <button class="btn btn-primary">
      <a href="{{ route('post.showtitle', $nextPost->title) }}" class="">Next post</a></button>
      <p style="color: white;">{{ \Str::limit($nextPost->title, 20, '...') }}</p>
     
  </div>
      </div>
  @endif

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
        margin-right:10px

    }
}
/* .blognav__container {
    /* margin-left:25px; */
    display: flex;
    justify-content: space-between;
} */

.blognav__item {
    flex-basis: 48%; /* Adjust the width as needed */
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




  



  

    <style>

.tech-list {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.tech-item {
  flex-basis: calc(33.33% - 20px); /* Adjust the width as needed and consider margin */
  margin-bottom: 20px; /* Add some margin between items */
  text-align: center;
}

.tech-item-image {
  width: 60px; /* Adjust the image size as needed */
  height: 60px;
  background-size: cover;
  background-position: center;
  margin: 0 auto 10px; /* Center the image horizontally */
}

      @media (max-width: 768px){
      .integration {
        margin-top: 105px!important;
        margin-left: 72px!important;
      }
      }
      @media (max-width: 768px){
      .technologies {
        margin-left: 72px!important;
      }
      }

      /* .tech-item {
    flex-basis: calc(50% - 20px);
    margin: 10px;
    padding: 20px;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    text-align: center;
    margin-top: 30px!important;
} */


/* .tech-list {
    display: flex;
    flex-wrap: wrap; /* Allow items to wrap to the next line */
    justify-content: space-between; /* Distribute items evenly in two columns */
} */

        .tech-item {
            flex-basis: calc(50% - 20px);
            margin: 10px;
            padding: 20px;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            text-align: center;
        }

        .project-technologies {
            overflow: hidden;
            padding: 115px 0;
            background-color: #fff;
            font-size: 17px;
            font-family: "Poppins Regular", Helvetica, sans-serif;
        }

        .container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap; /* Allow items to wrap to the next line */
        }

        .item {
            width: 48%; /* Set the width of each item to occupy approximately half of the container */
        }

        /* Add media queries if necessary to handle responsiveness */
        @media screen and (max-width: 768px) {
            .item {
                width: 100%; /* On smaller screens, make each item occupy the full width */
            }
        }

        .tech-item {
    height: 60px; /* Set the height of the image div */
    width: 60px; /* Set the width of the image div */
    margin: 0 auto 20px; /* Add bottom margin to create spacing between the image and title */
}

.tech-title {
    margin-top: -20px; /* Remove default margin of h3 to create spacing between the image and title */
    font-size: 17px;
    font-family: "Poppins Regular",Helvetica,sans-serif;
    color: #343639;
}
    </style>
</body>
</html>

  </body>



    <aside class="sidebar">
      <ul class="shadow-md rounded-md pt-2 pr-2 pb-2 pl-2">
        <h3>Latest Posts</h3>
      @foreach ($blogPost as $post)
       
         <li>&#x2022;<u><a href="{{ route('post.show-single', ['title' => urlencode($post->title)]) }}"> {{ \Str::limit($post->title, 20, '...') }}</a></u></li>
         @endforeach
      </ul><br>

      <ul class="shadow-md rounded-md pt-2 pr-2 pb-2 pl-2">
        <h3>Categories</h3>
        <li><a href="#">Website Design</a></li>
        <li><a href="#">App Development</a></li>
        <li><a href="#">Digital Marketing</a></li>
      </ul><br>

      <ul class="shadow-md rounded-md pt-2 pr-2 pb-2 pl-2">
        <h3>Tags</h3>
        <li><a href="#">IT Sector</a></li>
        <li><a href="#">SEO</a></li>
        <li><a href="#">Backlinks</a></li>
      </ul>
    </aside>
  </main>

  <div class="container mx-auto px-4 lg:px-8">
    <h3>Related Posts</h3>
    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
      @foreach ($relatedPosts as $post)
      <div class="bg-white rounded-lg shadow-lg p-4">
        <h6>
        <a href="{{ route('post.show-single', ['title' => urlencode($post->title)]) }}"><img src="{{ asset($post->image) }}" alt="Category Image" height="400" width="400" class="rounded-2xl"></a></h6>
        <h6 class="mt-2"><a href="{{ route('post.show-single', ['title' => urlencode($post->title)]) }}">{{ \Str::limit($post->title, 20, '...') }}</a></h6>
        <p class=" mb-2"> <a href="{{ route('post.show-single', ['title' => urlencode($post->title)]) }}">{{ \Str::limit(strip_tags($post->description), 50, '...') }}</a> <a href="{{ route('post.show-single', ['title' => urlencode($post->title)]) }}"><span style="color:rgb(128, 128, 227)">Read more</span></a></p>
        <!-- Additional content for each post -->
      </div>
      @endforeach
    </div>
  </div>
</body>
</html>


<style>

@media (min-width: 780px) {
  aside.sidebar {
    margin-top:110px;
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
    height:25%;
    width: 25%;
    line-height: 2.5;
    background-color: #fff;
    padding: 20px;
    /* overflow-y: auto; */
  }

  /* main {
    margin-right:110%;
  } */
}

    /* Layout */

main{
    display: flex;
    flex-direction: column;
    max-width: 790px;
    /* margin: 0 auto; */
    margin-left:0px;
    margin-right:5px!important;
}
article{
    display: flex;
    align-items: flex-start;
}
#heading{
    display: flex;
    justify-content: space-between;
    align-items: center; 
}


/* Styling */

#heading h1 span{
    font-size: 1em;
    color: #71BC2F;
}
article{
    border-bottom: 1px solid #e1e1e1;
    margin-bottom: 20px;
    padding-bottom:20px;
}
article img{
    margin-right: 15px;
}
span{
    font-size: 11px;
}
p{
    font-size: 13px;
}
h2{
    margin: 0;
    padding: 0;
    line-height:1em;
}

@media (max-width: 779px){
    main{
        max-width: 90%;
        margin: 0 auto;
    }
    article{
        flex-direction: column;
    }
    article img{
        width: 100%;
        margin-bottom: 20px;
    }
}
</style>

@include('frontend.layouts.footer')