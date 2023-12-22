
@extends('frontend.layouts.app')
@include('frontend.layouts.header')

<script src="https://cdn.tailwindcss.com"></script>

<!-- component -->
<link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog - Tech Simians</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- ====== Blog Section Start -->
<section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20">
   <div class="container">
    <div class="flex flex-wrap justify-center -mx-4">
        <div class="w-full px-4">
           <div class="text-center mx-auto mb-[60px] lg:mb-10 max-w-[800px]">
             
              <h1
                 class="heading
                
                 sm:text-4xl
                 md:text-[40px]
                 
                 "
                 >
                Blogs
              </h1>
              {{-- <p class="subheading">
                Welcome to the Tech Simians Blog, where innovation meets insight. Dive into the latest tech trends, cutting-edge solutions.
              </p> --}}
           </div>
        </div>
     </div>


      
      
      <div class=" flex flex-wrap -mx-4">
          @foreach ($posts as $key => $post)
<div class="w-full md:w-1/2 lg:w-1/3 ">


            <div class="max-w-[370px] mx-auto mb-10">
               <div class="rounded overflow-hidden mb-8">
                
                <a href="{{ route('post.show-single', ['slug' => $post->slug]) }}" class="
                    font-semibold
                    text-xl
                    sm:text-base
                    lg:text-xl
                    xl:text-2xl
                    mb-4
                    inline-block
                    text-dark
                    hover:text-primary
                    "> 
          
                     <img src="{{ asset($post->image) }}" alt="Image"  height="400" width="400" class=" rounded-md mt-5">

                    </a>
                     <p><i class="fa-regular fa-user"></i>&nbsp;&nbsp;{{$post->user->name}}&nbsp;| <i class="fa-regular fa-comment-dots"></i> {{count($post->comments)}} Comments </p>
                  
                    



               </div>
               <div>
                  <span
                     class="
                     bg-primary
                     rounded
                     inline-block
                     text-center
                     py-1
                     px-4
                     text-xs
                     leading-loose
                     font-semibold
                     text-white
                     mb-2
                     "
                     >
                  @if ($post->created_at)
    {{$post->created_at->format('Y-m-d')}}
@endif
  
                  </span>
                  <h4>
                    
                    <a href="{{ route('post.show-single', ['slug' => $post->slug]) }}" class="
                            font-semibold
                        
                            sm:text-2xl
                            lg:text-xl
                            xl:text-2xl
                            mb-4
                            inline-block
                            
                            hover:text-primary
                            ">
                           <h2 class="blog_title"> {{ \Str::limit($post->title, 40, '...') }}</h2>
                     </a>
                  </h4>
                  
                  <p class="project__text_blog">
                    <a href="{{ route('post.show-single', ['slug' => $post->slug]) }}"> {{ \Str::limit(strip_tags($post->description), 100, '...') }}</a>  <a href="{{ route('post.show-single', ['slug' => $post->slug]) }}"><span style="color:rgb(128, 128, 227)">Read more</span></a>
                  </p>
               </div>
            </div>
        </div>
        
        @endforeach
    </div>
    {{ $posts->links() }}
   </div>
   <br><br><br>
{{-- 
<nav aria-label="Page navigation example">
    <ul class="inline-flex -space-x-px text-base h-10">
     @if ($posts->previousPageUrl())
            <li class="hidden md:block">
                <a href="{{ $posts->previousPageUrl() }}" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-blue-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous Post</a>
            </li>
        @endif 
        {{ $paginator->links() }}
        
         @if ($posts->nextPageUrl())
            <li class="hidden md:block">
                <a href="{{ $posts->nextPageUrl() }}" class="flex items-center justify-center px-4 h-10 leading-tight text-blue-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next Post</a>
            </li>
        @endif 
    </ul>
</nav> --}}
<div class="class="w-full pl-5 pr-5">
{{-- {{ $posts->links() }} --}}
</div>


  
{{-- @if (count($posts) > 4)
    <div class="blognav__container pl-5">
        @foreach ($posts as $key => $post)
            @if ($key >= 4)
                <div class="blognav__ite">
                    <button class="btn btn-primary ">
                        <a href="{{ route('post.show-single', ['slug' => $post->slug]) }}"><i class="fa-solid fa-angles-left"></i>Previous Post</a>
                    </button>
                  
                </div>
                @break
            @endif
        @endforeach

        @foreach ($posts->reverse() as $key => $post)
            @if ($key >= 4)
                <div class="blognav__ite pr-5">
                    <button class="btn btn-primary ">
                        <a href="{{ route('post.show-single', ['slug' => $post->slug]) }}">Next Post<i class="fa-solid fa-angles-right"></i></a>
                    </button>
                   
                </div>
                @break
            @endif
        @endforeach
    </div>
@endif
   --}}
<style>


@media(min-width: 991px){
    .post-gap{
        padding-left:11px!important;
    }
    .blognav__item {
    flex-basis: 48%; /* Adjust the width as needed */
    max-height: 100px; /* Adjust the height as needed */
    overflow: hidden;
    gap:300px!important;
    padding:10px!important;
    max-width:22%!important;
}
}
@media(min-width:992px){
    .blognav__container{
     display: flex;
    gap:300px!important;
    justify-content: space-between;
    }
}
@media(max-width:768px){
    
    .blognav__container{
    justify-content: space-between;
    display: flex;
    gap:136px!important;
    }
}

.blognav__item {
    flex-basis: 48%; /* Adjust the width as needed */
    max-height: 100px; /* Adjust the height as needed */
    overflow: hidden;
    padding:10px!important;
    width:40%;
}

.blognav__button {
    display: block;
    /* padding: 10px 20px; */
    background-color: #71BC2F;
    color: #fff;

    text-decoration: none;
    border-radius: 5px;
    margin-bottom: 10px;
}

.blognav__item p {
    margin: 0;
}
</style>
</section>
<!-- ====== Blog Section End -->
@include('frontend.layouts.footer')