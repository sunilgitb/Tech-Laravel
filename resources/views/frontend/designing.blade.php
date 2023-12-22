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
    <title>@yield('title') Leading UI/UX Design Company in Mumbai | Tech simians</title>
    {{-- <title> Revolutionising Construction Landscape with Advanced Technology Services in mumbai</title>  --}}
        <meta name="description" content="@yield('description', 'Elevate user experiences with Mumbai top UI/UX design company, Tech Simians. Innovative solutions for impactful digital design. Explore our expertise today!')">
        <meta name="keywords" content="@yield('keywords', 'graphic design services, ui ux design agency in mumbai')">
    <main class="container">
      <!-- <section class="breadcrumb">
        <a href="{{url('/')}}" class="breadcrumb__link">Home</a>
        <a href="{{url('/')}}" class="breadcrumb__link">Services</a>
        <a href="{{url('designing')}}" class="breadcrumb__link">Designing</a>
      </section> -->
      <section class="service" style="margin-top: 80px;">
        <div class="service__content">
          <span class="">Designing</span> is a plan for the
          construction of an object or system or specification in the form of a
          prototype, product or process.
        </div>
        <div class="service__img">
          <lottie-player
            id="animation"
            src="{{('frontend/assets/animations/designing.json')}}"
          ></lottie-player>
        </div>
      </section>
      <section class="whatweserve">
        <div class="whatweserver__title">What we Serve:</div>
        <div class="whatweserve__row">
          <div class="whatweserve__item open">
            <div class="whatweserve__item-title">UI/UX Design</div>
            <div class="whatweserve__item-content">
            UI/UX Design application software that runs on a web server, unlike
              computer-based software programs that are run locally on the
              operating system (OS) of the device. Web applications are accessed
              by the user through a web browser with an active network
              connection.
            </div>
          </div>
          <div class="whatweserve__item">
            <div class="whatweserve__item-title">Graphic Design</div>
            <div class="whatweserve__item-content">
            Graphic Design  application software that runs on a web server, unlike
              computer-based software programs that are run locally on the
              operating system (OS) of the device. Web applications are accessed
              by the user through a web browser with an active network
              connection.
            </div>
          </div>
          <div class="whatweserve__item">
            <div class="whatweserve__item-title">
              Printables
            </div>
            <div class="whatweserve__item-content">
            Printables  application software that runs on a web server, unlike
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