@extends('frontend.layouts.app')
@include('frontend.layouts.header')
<body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction - Tech Simians</title>
    
    @section('title') Construction - Top Travel & Transportation Services in Mumbai - Quality for Seamless Journe
    @endsection
        <meta name="description" content="@yield('description', 'Explore the world seamlessly with our top-tier travel and transportation services in mumbai. Your gateway to convenient, reliable, and exceptional journeys awaits.')">
        <meta name="keywords" content="@yield('keywords', 'transportation service, travel and transportation, transportation industry')">
</head>
    <main class="container">
      <!-- <section class="breadcrumb">
        <a href="{{url('/')}}" class="breadcrumb__link">Home</a>
        <a href="{{url('/')}}" class="breadcrumb__link">Services</a>
        <a href="{{url('it-consulting')}}" class="breadcrumb__link">IT Consulting</a>
      </section> -->
      <h1 style="margin-top:100px;">Travel & Transportation</h1>
      <section class="service" style="margin-top: 100px;">
        <div class="service__content">
          <span class="text-blue">IT Consulting</span> is a field of activity
          which focuses on advising organizations on how best to use information
          technology in achieving their business objectives.
        </div>
        <div class="service__img">
          <lottie-player
            id="animation"
            src="{{('frontend/assets/animations/it-consulting.json')}}"
          ></lottie-player>
        </div>
      </section>
      <section class="whatweserve">
        <div class="whatweserver__title">What we Serve:</div>
        <div class="whatweserve__row">
          <div class="whatweserve__item open">
            <div class="whatweserve__item-title">
              Business Process Consulting
            </div>
            <div class="whatweserve__item-content">
            Business Process Consulting application software that runs on a web server, unlike
              computer-based software programs that are run locally on the
              operating system (OS) of the device. Web applications are accessed
              by the user through a web browser with an active network
              connection.
            </div>
          </div>
          <div class="whatweserve__item">
            <div class="whatweserve__item-title">Digital Marketing</div>
            <div class="whatweserve__item-content">
            Digital Marketing application software that runs on a web server, unlike
              computer-based software programs that are run locally on the
              operating system (OS) of the device. Web applications are accessed
              by the user through a web browser with an active network
              connection.
            </div>
          </div>
        </div>
      </section>
    </main>
    @include('frontend.layouts.footer')

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".whatweserve__item-title").forEach((e) => {
          e.addEventListener("click", (item) => {
            if (window.innerWidth >= 992) {
              document.querySelectorAll(".whatweserve__item").forEach((it) => {
                it.classList.remove("open");
              });
            }

            item.currentTarget
              .closest(".whatweserve__item")
              .classList.toggle("open");
          });
        });

        LottieInteractivity.create({
          player: "#animation",
          mode: "chain",

          actions: [
            {
              speed: 0.5,
              state: "autoplay"
            }
          ]
        });
      });
    </script>
  </body>