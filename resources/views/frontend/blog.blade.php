@extends('frontend.layouts.app')
@include('frontend.layouts.header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Tech Simians</title>
</head>
 <body>
    <main class="container">
      <br><br><br><br><br>
        <!-- <section class="breadcrumb">
            <a href="/" class="breadcrumb__link">Home</a>
            <a href="#" class="breadcrumb__link">Blog</a>
            <a href="#" class="breadcrumb__link">How to enhance motivation for better business leads?</a>
        </section> -->
<!-- 
        @foreach ($posts as $key => $post)
            <article class="blog">
                <div class="blog__img">
                    <img src="{{ asset('post/images/' . $post->image) }}" alt="" />
                </div>
                <h1 class="blog__title">{{ $post->title }}</h1>
                <div class="blog__meta">
                    <div class="blog__by"><span>by</span> <strong>{{ $post->author }}</strong></div>
                    <div class="blog__date">
                        @if ($post->created_at)
                            {{ $post->created_at->format('Y-m-d') }}
                        @else
                            Unknown Date
                        @endif
                    </div>
                </div>
                <div class="blog__excerpt">
                    {{ $post->excerpt }}
                </div>
                <div class="blog__content">
                    {!! $post->description !!}
                </div>
              
            </article>

            <div class="blognav">
                <div class="blognav__row">
                    @if ($key > 0)
                        <div class="blognav__item">
                            <a href="{{ route('blog.show', $posts[$key - 1]->id) }}" class="blognav__button">Previous post</a>
                            <h3>{{ $posts[$key - 1]->title }}</h3>
                            <p class="blognav__content">{{ $posts[$key - 1]->excerpt }}</p>
                        </div>
                    @endif

                    @if ($key < count($posts) - 1)
                        <div class="blognav__item">
                            <a href="{{ route('blog.show', $posts[$key + 1]->id) }}" class="blognav__button">Next post</a>
                            <h3>{{ $posts[$key + 1]->title }}</h3>
                            <p class="blognav__content">{{ $posts[$key + 1]->excerpt }}</p>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach -->

        <!-- @foreach ($posts as $key => $post)
    <article class="blog">
        <div class="blog__img">
            <img src="{{ asset('post/images/' . $post->image) }}" alt="" />
        </div>
        <h1 class="blog__title">{{ $post->title }}</h1>
        <div class="blog__meta">
            <div class="blog__by"><span>by</span> <strong>{{ $post->author }}</strong></div>
            <div class="blog__date">
                @if ($post->created_at)
                    {{ $post->created_at->format('Y-m-d') }}
                @else
                    Unknown Date
                @endif
            </div>
        </div>
        <div class="blog__excerpt">
            {{ $post->excerpt }}
        </div>
        <div class="blog__content">
            {!! $post->description !!}
        </div>
    </article>

    @if ($key === 0)
        <div class="blognav">
            <div class="blognav__row">
                @if ($key < count($posts) - 1)
                    <div class="blognav__item">
                        <a href="{{ route('blog.show', $posts[$key + 1]->id) }}" class="blognav__button">Next post</a>
                        <h3>{{ $posts[$key + 1]->title }}</h3>
                        <p class="blognav__content">{{ $posts[$key + 1]->excerpt }}</p>
                    </div>
                @endif
            </div>
        </div>
    @endif
@endforeach -->
<!-- 
@foreach ($posts as $key => $post)
    <article class="blog">
        <div class="blog__img">
            <img src="{{ asset('post/images/' . $post->image) }}" alt="" />
        </div>
        <h1 class="blog__title">{{ $post->title }}</h1>
        <div class="blog__meta">
            <div class="blog__by"><span>by</span> <strong>{{ $post->author }}</strong></div>
            <div class="blog__date">
                @if ($post->created_at)
                    {{ $post->created_at->format('Y-m-d') }}
                @else
                    Unknown Date
                @endif
            </div>
        </div>
        <div class="blog__excerpt">
            {{ $post->excerpt }}
        </div>
        <div class="blog__content">
            {!! $post->description !!}
        </div>
        <div class="blognav__row">
            @if ($key > 0)
                <div class="blognav__item">
                    <a href="{{ route('blog.show', $posts[$key - 1]->id) }}" class="blognav__button">Previous post</a>
                    <h3>{{ $posts[$key - 1]->title }}</h3>
                    <p class="blognav__content">{{ $posts[$key - 1]->excerpt }}</p>
                </div>
            @endif

            @if ($key < count($posts) - 1)
                <div class="blognav__item">
                    <a href="{{ route('blog.show', $posts[$key + 1]->id) }}" class="blognav__button">Next post</a>
                    <h3>{{ $posts[$key + 1]->title }}</h3>
                    <p class="blognav__content">{{ $posts[$key + 1]->excerpt }}</p>
                </div>
            @endif
        </div>
    </article> -->

    <!-- <div class="blognav">
        <div class="blognav__row">
            @if ($key > 0)
                <div class="blognav__item">
                    <a href="{{ route('blog.show', $posts[$key - 1]->id) }}" class="blognav__button">Previous post</a>
                    <h3>{{ $posts[$key - 1]->title }}</h3>
                    <p class="blognav__content">{{ $posts[$key - 1]->excerpt }}</p>
                </div>
            @endif

            @if ($key < count($posts) - 1)
                <div class="blognav__item">
                    <a href="{{ route('blog.show', $posts[$key + 1]->id) }}" class="blognav__button">Next post</a>
                    <h3>{{ $posts[$key + 1]->title }}</h3>
                    <p class="blognav__content">{{ $posts[$key + 1]->excerpt }}</p>
                </div>
            @endif
        </div>
    </div> -->
<!-- @endforeach -->

@foreach ($posts as $key => $post)
    <article class="blog">
        <div class="blog__img">
            <img src="{{ asset('post/images/' . $post->image) }}" alt="" />
        </div>
        <h1 class="blog__title">{{ $post->title }}</h1>
        <div class="blog__content">
            {!! $post->description !!}
        </div>
    </article>
@endforeach

@if (count($posts) > 2)
<div class="blognav__row">
{{-- @foreach ($posts as $key => $post)
    @if ($key > 1)
        <div class="blognav__item">
            <a href="{{ route('blog.show', $post->id) }}" class="blognav__button">Next post</a>
            <h3 style="color: white;">{{ \Str::limit($post->title, 20, '...') }}</h3>
                        <p class="blognav__content">{{ \Str::limit(strip_tags($post->description), 300, '...') }}</p>

        </div>
    @endif

    @if ($key < count($posts) - 2)
        <div class="blognav__item">
            <a href="{{ route('blog.show', $post->id) }}" class="blognav__button">Previous post</a>
            <h3 style="color: white;">{{ \Str::limit($post->title, 20, '...') }}</h3>
                        <p class="blognav__content">{{ \Str::limit(strip_tags($post->description), 300, '...') }}</p>

        </div>
    @endif
@endforeach --}}

@foreach ($posts as $key => $post)
    @if ($key > 1)
        <div class="blognav__item">
            <a href="{{ route('post.showtitle', $post->title) }}" class="blognav__button">Next post</a>
            <h3 style="color: white;">{{ \Str::limit($post->title, 20, '...') }}</h3>
            <p class="blognav__content">{{ \Str::limit(strip_tags($post->description), 300, '...') }}</p>
        </div>
    @endif
    @if ($key < count($posts) - 2)
        <div class="blognav__item">
            <a href="{{ route('post.showtitle', $post->title) }}" class="blognav__button">Previous post</a>
            <h3 style="color: white;">{{ \Str::limit($post->title, 20, '...') }}</h3>
            <p class="blognav__content">{{ \Str::limit(strip_tags($post->description), 300, '...') }}</p>
        </div>
    @endif
@endforeach

</div>

@endif


<!-- @if (count($posts) > 0)
    @foreach ($posts as $key => $post)
        <article class="blog">
            <div class="blog__img">
                <img src="{{ asset('post/images/' . $post->image) }}" alt="" />
            </div>
            <h1 class="blog__title">{{ $post->title }}</h1>
            <div class="blog__content">
                {!! $post->description !!}
            </div>
        </article>

        @if ($key > 0)
            <div class="blognav__row">
                <div class="blognav__item">
                    <a href="{{ route('blog.show', $posts[$key - 1]->id) }}" class="blognav__button">Previous post</a>
                    <h3>{{ $posts[$key - 1]->title }}</h3>
                    <p class="blognav__content">{{ $posts[$key - 1]->excerpt }}</p>
                </div>
            </div>
        @endif

        @if ($key < count($posts) - 1)
            <div class="blognav__row">
                <div class="blognav__item">
                    <a href="{{ route('blog.show', $posts[$key + 1]->id) }}" class="blognav__button">Next post</a>
                    <h3>{{ $posts[$key + 1]->title }}</h3>
                    <p class="blognav__content">{{ $posts[$key + 1]->excerpt }}</p>
                </div>
            </div>
        @endif
        
        {{-- Break out of the loop after showing one post --}}
        @break
    @endforeach
@else
    <p>No posts available.</p>
@endif -->


<!-- @if (count($posts) > 0)
    @foreach ($posts as $key => $post)
        <article class="blog">
            <div class="blog__img">
                <img src="{{ asset('post/images/' . $post->image) }}" alt="" />
            </div>
            <h1 class="blog__title">{{ $post->title }}</h1>
            <div class="blog__content">
                {!! $post->description !!}
            </div>
        </article>

        @if ($key < count($posts) - 1)
            <div class="blognav__row">
                <div class="blognav__item">
                    <a href="{{ route('blog.show', $posts[$key + 1]->id) }}" class="blognav__button">Next post</a>
                    <h3>{{ $posts[$key + 1]->title }}</h3>
                    <p class="blognav__content">{{ $posts[$key + 1]->excerpt }}</p>
                </div>
            </div>
        @endif
        @if ($key > 0)
            <div class="blognav__row">
                <div class="blognav__item">
                    <a href="{{ route('blog.show', $posts[$key - 1]->id) }}" class="blognav__button">Previous post</a>
                    <h3>{{ $posts[$key - 1]->title }}</h3>
                    <p class="blognav__content">{{ $posts[$key - 1]->excerpt }}</p>
                </div>
            </div>
        @endif


        {{-- Break out of the loop after showing the first post --}}
        @break
    @endforeach
@else
    <p>No posts available.</p>
@endif -->

    </main>
</body>
</html> 

<!-- <body>
   
    <main class="container">
   
      <article class="blog">
        <div class="blog__img">
          <img src="img/blog-top.png" alt="" />
        </div>
        <h1 class="blog__title">
          How to Enhance Motivation for Better Business Leads?
        </h1>
        <div class="blog__meta">
          <div class="blog__by"><span>by</span> <strong>Admin</strong></div>
          <div class="blog__date">February 2021</div>
        </div>
        <div class="blog__excerpt">
          Read how businessmen must use UX design and enhancement of motivation
          for better business leads. Reveal the secret now!
        </div>
        <h2>
          Secrets About UX Design For Generating Business Leads Only A Handful
          Of People Know
        </h2>
        <p>
          Good UX design is all about captivating and joyful experiences,
          satisfaction, engagement with a touch of empathy towards the ‘user.’
          In a nutshell, a great UX should be user-centric. But the reason why
          UX design is important is that businesses don’t just seek satisfied
          users but ones that can be captured, retained, and compelled to stay
          loyal. To design an effective UX that influences users’ behaviour and
          offers business value, one must understand its psychology. The
          critical factor which works in this scenario is motivation.
        </p>
        <h2>Motivation</h2>
        <p>
          Good UX design is all about captivating and joyful experiences,
          satisfaction, engagement with a touch of empathy towards the ‘user.’
          In a nutshell, a great UX should be user-centric. But the reason why
          UX design is important is that businesses don’t just seek satisfied
          users but ones that can be captured, retained, and compelled to stay
          loyal. To design an effective UX that influences users’ behaviour and
          offers business value, one must understand its psychology. The
          critical factor which works in this scenario is motivation.
        </p>
        <p>
          1. Extrinsic motivation comes from the outside world and how our mind
          behaves to stimuli we receive from our peers, environment, or
          rewarding actions. For instance, appreciable comments and likes on a
          user’s social media post.
        </p>
        <p>
          2. Intrinsic motivation arises out of our own nature, emotions,
          intelligence, or wishes. For example: curiosity to learn and try new
          recipes, satisfaction from playing a game, accepting a challenge to
          solve a puzzle, etc.
        </p>
        <p>
          Decoding ‘how’ and ‘what’ motivates a user’s brain can be of great
          help for UX designers. The substance responsible for the brain’s
          motives is dopamine. Dopamine is a neurotransmitter produced in
          several brain regions responsible for reward inducing behaviour and
          motivation for setting goals and achieving them.
        </p>
        <div class="blog__img">
          <img src="img/blog-bottom.png" alt="" />
        </div>
      </article>
      <div class="blognav">
        <div class="blognav__row">
          <div class="blognav__item">
            <a href="{{url('7-ways-neuromarketing-impact-marketing')}}" class="blognav__button">Previous post</a>
            <h3 class="blognav__title">
              7 Ways Neuromarketing Impact Marketing Camp...
            </h3>
            <p class="blognav__content">
              In publishing and graphic design, Lorem ipsum is a placeholder
              text commonly used to demonstrate the visual form of a document or
              a typeface without relying on meaningful content.
            </p>
          </div>
          <div class="blognav__item">
            <a href="{{url('can-good-design-grow-your-business-and-customers')}}" class="blognav__button">Next post</a>
            <h3 class="blognav__title">
              Can Good Design Grow Your Business And Customers?
            </h3>
            <p class="blognav__content">
              In publishing and graphic design, Lorem ipsum is a placeholder
              text commonly used to demonstrate the visual form of a document or
              a typeface without relying on meaningful content.
            </p>
          </div>
        </div>
      </div>
    </main>



  
   
    <!DOCTYPE html>
<html>
<head>
 
</head> -->
  
  

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

@include('frontend.layouts.footer')
