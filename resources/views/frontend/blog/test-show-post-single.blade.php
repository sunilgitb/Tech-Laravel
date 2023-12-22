@extends('frontend.layouts.app')
@include('frontend.layouts.header')
<link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<br><br><br><br>
<main>
   

    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog - Tech Simians</title>
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
<section>
    <h1>{{ $blog->title }}</h1><br>
  {{-- <img src="{{asset('frontend/assets/img/it-consult.jpeg')}}" height=300px; width=800px;/><br> --}}
  <img src="{{ asset($blog->image) }}" alt="Category Image"  style="width: 1000px; height:500px;"><br>
  <p><strong>Author: Writer</strong> &nbsp; <strong>/  Techsimians</strong></p>
  {{-- <p class="blognav__content">{{ \Str::limit(strip_tags($post->description), 2000, '...') }}</p> --}}
  <p class="blognav__content" style="font-size:18px!important;">{!! $blog->description !!}</p>
</section>
  <br><br><br>


  

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
<br>




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
        {{-- <div class="shadow-2xl rounded-md pt-2 pr-2 pb-2 pl-2">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, aliquam sint?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, aliquam sint?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, aliquam sint?</p>
        </div> --}}
     <ul class="shadow-2xl rounded-md pt-2 pr-2 pb-2">
    <h3>Latest Posts</h3>

    <p>
        
        <ul>
        @foreach ($blogPost as $post)
            <li><a href="{{ route('post.show-single', ['title' => urlencode($post->title)]) }}"> {{$post->title}}</a></li>
            @endforeach
        </ul>
    </p>
</ul>
  
  <br>

      <ul class="shadow-2xl rounded-md pt-2 pr-2 pb-2 pl-2">
        <h3>Categories</h3>
        <li><a href="#">Home Buying</a></li>
        <li><a href="#">Mortgages</a></li>
        <li><a href="#">Financial Advice</a></li>
      </ul><br>

      <ul class="shadow-2xl rounded-md pt-2 pr-2 pb-2 pl-2">
        <h3>Tags</h3>
        <li><a href="#">Real Estate</a></li>
        <li><a href="#">Finance</a></li>
        <li><a href="#">Homeownership</a></li>
      </ul>
    </aside>
  </main>


</body>
</html>
<div class="container mx-auto px-4 lg:px-8">
  <h3>Related Posts</h3>
  <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
    @foreach ($relatedPosts as $post)
    <div class="bg-white rounded-lg shadow-lg p-4">
      <a href="{{ route('post.show-single', ['title' => urlencode($post->title)]) }}"><img src="{{ asset($post->image) }}" alt="Category Image" height="400" width="400" class="rounded-2xl"></a>
      <h6><a href="{{ route('post.show-single', ['title' => urlencode($post->title)]) }}">{{ \Str::limit($post->title, 20, '...') }}</a></h6>
      <p class="text-xl font-bold mb-2">{{ \Str::limit(strip_tags($post->description), 100, '...') }} <a href="{{ route('post.show-single', ['title' => urlencode($post->title)]) }}"><span style="color:rgb(128, 128, 227)">Read more</span></a></p>
      <!-- Additional content for each post -->
    </div>
    @endforeach
  </div>
</div>
  

<style>
.postsul {
    box-shadow: 0 20px 20px -5px rgba(0, 0, 0, .125);

}
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