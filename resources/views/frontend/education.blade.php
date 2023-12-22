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
    <title>@yield('title') Best educational website solutions in mumbai</title>
    {{-- <title> Revolutionising Construction Landscape with Advanced Technology Services in mumbai</title>  --}}
        <meta name="description" content="@yield('description', 'Unlock the best educational website solutions in Mumbai for a transformative learning experience. Explore innovative tools and resources for academic success.')">
        <meta name="keywords" content="@yield('keywords', 'educational technology, e learning solutions, educational apps ')">
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
          <span class="text-blue">At Tech Simians,</span> we extend our commitment to innovation and efficiency.
        </div>
        <div class="service__img">
          <lottie-player
            id="animation"
            src="{{('frontend/assets/animations/it-consulting.json')}}"
          ></lottie-player>
        </div>
      </section>
      <section class="whatweserve-port-logistics">
      
        <p> Leveraging our expertise in technology solutions, we bring forth tailored applications and strategies designed to enhance educational processes and empower institutions.</p>

        <div class="whatweserver__title">Simians in Education</div>
        <p><strong>Digital Learning Platforms:</strong> Embrace the future of education with our digital learning platforms, providing institutions with comprehensive tools for remote learning, course management, and student engagement. Our solutions cater to the evolving needs of modern education, ensuring seamless and interactive online experiences.</p>
        <p><strong>Data-Driven Insights:</strong>  Harness the power of data in education with our analytics solutions. Gain valuable insights into student performance, learning trends, and institutional effectiveness. Make informed decisions that optimize educational outcomes and support strategic planning.</p>
        <p><strong>Mobile Learning Applications:</strong>Extend education beyond the classroom with our mobile learning applications. Whether it's delivering course content on-the-go or facilitating communication between students and educators, our mobile solutions enhance accessibility and foster continuous learning.</p>
        <p><strong>IoT in Education:</strong> Embrace the Internet of Things (IoT) for smart campuses and enhanced security. Our IoT integration ensures real-time monitoring of educational spaces, efficient resource management, and advanced security protocols to create a safe and conducive learning environment.</p>
        

        <div class="whatweserver__title">Why Choose Tech Simians for Education?</div>
        <p><strong>Innovative Pedagogy:</strong>  Infuse innovation into your educational approach with our cutting-edge solutions. Stay at the forefront of the education sector by integrating technology that transforms traditional learning methods.</p>
        <p><strong>Customized Learning Solutions:</strong> Recognizing the diverse needs of educational institutions, our solutions are tailored to address specific challenges. Maximize impact and efficiency with technology designed to meet the unique requirements of your educational environment.</p>
        <p><strong>Dedicated Support:</strong> Our committed support team is with you every step of the way, ensuring a seamless integration process and providing ongoing assistance. Trust in our support for a technology-driven education that works reliably around the clock.</p>
        <p><strong>Scalability and Adaptability:</strong>As educational landscapes evolve, our scalable solutions adapt to changing needs. Ensure that your technological infrastructure grows alongside your institution, supporting the dynamic nature of education in the digital age.</p>
        
  
         
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