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
    <title>@yield('title') Explore the Best Travel & Transportation Services in mumbai </title>
    {{-- <title> Revolutionising Construction Landscape with Advanced Technology Services in mumbai</title>  --}}
        <meta name="description" content="@yield('description', 'Elevate your travel experience in Mumbai with innovative technology solutions, redefining transportation services for seamless journeys and convenience.')">
        <meta name="keywords" content="@yield('keywords', 'travel and transportation, travel technology solutions, travel service in mumbai')">
<style>
    @media (min-width: 992px) {
  .whatweserve-port-logistics {
    height: 140%;
  }
</style>
</head>
    <main class="container">
      <!-- <section class="breadcrumb">
        <a href="{{url('/')}}" class="breadcrumb__link">Home</a>
        <a href="{{url('/')}}" class="breadcrumb__link">Services</a>
        <a href="{{url('it-consulting')}}" class="breadcrumb__link">IT Consulting</a>
      </section> -->
    
      <section class="service" style="margin-top: 100px;">
        <div class="service__content">
          <span class="text-blue">Empowering Travel</span> and Transportation Through Innovative Technology Solutions
        </div>
        <div class="service__img">
          <lottie-player
            id="animation"
            src="{{('frontend/assets/animations/it-consulting.json')}}"
          ></lottie-player>
        </div>
      </section>
      <section class="whatweserve-port-logistics">
      
        <p>We revolutionize the travel and transportation industry through cutting-edge technology solutions. As experienced professionals in the field, we&#39;re dedicated to enhancing efficiency, improving customer experiences, and driving innovation across the industry.</p>

        <div class="whatweserver__title">Simians Advantage</div>
        <p><strong>Business Analytics:  </strong> Harnessing the power of data intelligence, our analytics solutions provide invaluable insights into travel trends, customer behavior, and operational efficiencies. Make data-driven decisions that optimize services and drive business growth.</p>
        <p><strong>Mobile Applications:</strong> Embrace the mobile era with our custom-built applications. From intuitive travel apps for end-users to operational apps enhancing internal processes, our mobile solutions cater to diverse needs, offering convenience and accessibility.</p>
        <p><strong>IoT Integration:</strong> Embrace the Internet of Things (IoT) for improved fleet management, asset tracking, and passenger safety. Our IoT solutions ensure real-time monitoring, predictive maintenance, and enhanced security protocols.</p>
        <p>Application based approach: Custom applications or platforms built to integrate with your current operations and user-friendly interfaces, simplifying the reservation processes for airlines, railways, cab booking, rental services.</p>

        <div class="whatweserver__title">Why Choose Us?</div>
        <p><strong>Innovation at Core:</strong> We thrive on innovation, constantly exploring new technologies to bring groundbreaking solutions to our clients. Stay ahead in the industry with our innovative tech services.</p>
        <p><strong>Tailored Solutions:</strong> Understanding the unique challenges of the travel and transportation sector, our solutions are customized to address your specific needs, ensuring maximum impact and efficiency.</p>
        <p><strong>Reliable Support:</strong> Our dedicated support team ensures a smooth integration process and offers ongoing assistance, guaranteeing that your tech solutions work seamlessly around the clock.</p>
        <p><strong>Scalability and Adaptability:</strong> As your business evolves, our scalable solutions adapt to your changing needs, ensuring that your tech infrastructure grows alongside your business.</p>
        <div class="whatweserver__title">Let's Transform Together</div>
        <p>Ready to revolutionize your travel and transportation operations? Connect with us today to explore how our tech solutions can elevate your business to new heights. Together, let&#39;s embark on a journey of technological innovation and excellence.</p>
  
         
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