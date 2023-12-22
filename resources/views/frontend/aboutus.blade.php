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
    <title>@yield('title') Best website & app development service agency in mumbai </title>
    {{-- <title> Revolutionising Construction Landscape with Advanced Technology Services in mumbai</title>  --}}
        <meta name="description" content="@yield('description', 'Dynamic corporate web agency inspiring excellence in Website & App Development, Digital Marketing. Creative team fostering growth and happiness.')">
        <meta name="keywords" content="@yield('keywords', 'website development in mumbai, digital marketing in mumbai, website development in andheri ')">

    <main class="container">
      <!-- <section class="breadcrumb">
        <a href="{{url('/')}}" class="breadcrumb__link">Home</a>
        <a href="{{url('about-us')}}" class="breadcrumb__link">About</a>
      </section> -->
      <section class="whoweare about" style="margin-top: 80px;">
        <h2 class="heading">We are corporate web agency</h2>
        <p class="subheading">
        We are a corporate web agency with a dynamic team of creative, intelligent, and enthusiastic individuals. We foster an environment of continuous inspiration and growth, encouraging each other to strive for excellence and happiness in all that we do.
        </p>
        <div class="whoweare__item">
          <div class="whoweare__animation">
            <div class="whoweare__circle">
              <img src="{{asset('frontend/assets/img/circle.svg')}}" alt="" />
            </div>
            <div class="whoweare__line">
              <img src="{{asset('frontend/assets/img/line-with-right-curve.svg')}}" alt="" />
            </div>
            <div class="whoweare__icon">
              <lottie-player
                id="firstLottie"
                src="https://assets9.lottiefiles.com/packages/lf20_kzmlad7s.json"
              ></lottie-player>
            </div>
          </div>
          <div class="whoweare__content">
            <h3 class="whoweare__item-title">
              We understand the pressure of work
            </h3>
            <div class="whoweare__item-text">
            We comprehend the challenges of working under tight time constraints. Rest assured, we have you covered with our commitment to timely project delivery. Your projects are in safe hands with us.
            </div>
          </div>
        </div>
        <div class="whoweare__item whoweare__item-right">
          <div class="whoweare__animation">
            <div class="whoweare__circle">
              <img src="{{('frontend/assets/img/circle.svg')}}" alt="" />
            </div>
            <div class="whoweare__line">
              <img src="{{asset('frontend/assets/img/line-with-left-curve.svg')}}" alt="" />
            </div>
            <div class="whoweare__icon">
              <lottie-player
                id="secondLottie"
                src="https://assets6.lottiefiles.com/packages/lf20_ndbw9wpl.json"
              ></lottie-player>
            </div>
          </div>
          <div class="whoweare__content">
            <h3 class="whoweare__item-title">
              Innovative ideas and designing,
            </h3>
            <div class="whoweare__item-text">
            We deliver innovative ideas and designs tailored to your specific requirements, enhanced with cutting-edge technologies, ensuring the highest quality of service.
            </div>
          </div>
        </div>
        <div class="whoweare__item">
          <div class="whoweare__animation">
            <div class="whoweare__circle">
              <img src="{{asset('frontend/assets/img/circle.svg')}}" alt="" />
            </div>
            <div class="whoweare__line">
              <img src="{{asset('frontend/assets/img/line-with-right-curve.svg')}}" alt="" />
            </div>
            <div class="whoweare__icon">
              <lottie-player
                id="thirdLottie"
                src="https://assets1.lottiefiles.com/packages/lf20_0sl0y1f4.json"
              ></lottie-player>
            </div>
          </div>
          <div class="whoweare__content">
            <h3 class="whoweare__item-title">
              Our top notch content writing service
            </h3>
            <div class="whoweare__item-text">
            Our exceptional content writing service guarantees improved search engine optimization and delivers satisfying results.
            </div>
          </div>
        </div>
        <div class="whoweare__item whoweare__item-right whoweare__item-last">
          <div class="whoweare__animation">
            <div class="whoweare__circle">
              <img src="{{('frontend/assets/img/circle.svg')}}" alt="" />
            </div>

            <div class="whoweare__icon">
              <lottie-player
                id="fourthLottie"
                src="https://assets8.lottiefiles.com/packages/lf20_frcf3wjo.json"
              ></lottie-player>
            </div>
          </div>
          <div class="whoweare__content">
            <h3 class="whoweare__item-title">
              Offering best customer support
            </h3>
            <div class="whoweare__item-text">
            We provide top-notch customer support after product delivery to ensure the seamless operation of your projects. Whether it's development, hosting, or product publishing, we have all aspects covered.
            </div>
          </div>
        </div>
      </section>
      <style>
  .bordered-image {
    border: 1px solid #0047ff;
    height: 150px;
    width: 150px;
    border-radius: 50%;
  }

  @media (max-width: 768px) {
    .bordered-image {
    border: 1px solid #0047ff;
    height: 100px;
    width: 100px;
    margin-left: 50px;
    border-radius: 50%;
  }
  }
  .team__member-name{
    margin-right:10px!mportant;
  }
</style>


  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
  <style>
    .team__member {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Box shadow effect */
      text-align: center;
      padding: 20px;
      transition: background-color 0.3s, color 0.3s; /* Transition effect */
    }

    .team__member:hover {
      background-color: #3490dc; /* Blue background color on hover */
      color: white; /* White text color on hover */
    }
  </style>
</head>
<section>
<body class="bg-gray-100">
  <div class="container mx-auto py-10">
    <h1 class="text-3xl font-semibold text-center mb-8">Our Team</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="team__member">
        <div class="team__member-img">
          <img src="https://www.techsimians.com/frontend/assets/img/sid.jpg" alt="sid" class="bordered-image">
        </div>
        <div class="team__member-name">Siddharth Jain</div>
        <div class="team__member-designation">Managing Partner</div>
      </div>
      <div class="team__member">
        <div class="team__member-img">
          <img src="https://www.techsimians.com/frontend/assets/img/varun.png" alt="Leon" class="bordered-image">
        </div>
        <div class="team__member-name">Varun Sudulagunta</div>
        <div class="team__member-designation">Head-Business Delivery</div>
      </div>
      <div class="team__member">
        <div class="team__member-img">
          <img src="https://www.techsimians.com/frontend/assets/img/aaron.jpg" alt="Maxime" class="bordered-image">
        </div>
        <div class="team__member-name">Aaron Sam</div>
        <div class="team__member-designation">Head-Mobile Technologies</div>
      </div>
      <div class="team__member">
        <div class="team__member-img">
          <img src="https://www.techsimians.com/frontend/assets/img/donovan.png" alt="Donovan" class="bordered-image">
        </div>
        <div class="team__member-name">Akshat Kanchan</div>
        <div class="team__member-designation">Head - Emerging Technologies</div>
      </div>
    </div>
  </div>
</body>
</html>
  </section>

      <!-- <section class="team about-team">
        <h2 class="heading">Meet The Team</h2>
        <div class="subheading">
        Our team is brimming with creative, intelligent, and enthusiastic individuals. We motivate and uplift each other every day, striving to be the best versions of ourselves and fostering a positive and happy environment.
        </div>
        <div class="team__row">
          <div class="team__member">
            <div class="team__member-img">

        <img src="{{asset('frontend/assets/img/sid.jpg')}}" alt="sid" class="bordered-image" />

            </div>
            <div class="team__member-name">Siddharth Jain</div>
            <div class="team__member-designation">Managing Partner</div>
          </div>
          <div class="team__member">
            <div class="team__member-img">
           <img src="{{asset('frontend/assets/img/varun.png')}}" alt="Leon" class="bordered-image" />

            </div>
            <div class="team__member-name">Varun  Sudulagunta</div>
            <div class="team__member-designation">Head-Business <br>Delivery</div>
          </div>
          <div class="team__member">
            <div class="team__member-img">
=
           <img src="{{asset('frontend/assets/img/aaron.jpg')}}" alt="Maxime" class="bordered-image"/>
            </div>
            <div class="team__member-name">Aaron Sam</div>
            <div class="team__member-designation">Head-Mobile <br>Technologies</div>
          </div>
          <div class="team__member">
            <div class="team__member-img">

           <img src="{{asset('frontend/assets/img/donovan.png')}}" alt="Donovan"class="bordered-image" />
            </div>
            <div class="team__member-name">Akshat Kanchan</div>
            <div class="team__member-designation">Head - Emerging <br>Technologies</div>
          </div>
        
      </section> -->
      <section class="jointeam">
        <h2 class="jointeam__title">Join Our Team</h2>
        <div class="jointeam__text">
          We could talk all day about how much fun it is being part of the
          TECHSimians team. But really there's only one way to find out...
        </div>
        <a href="{{url('careers')}}" class="jointeam__cta button button--white"
          >Go to careers</a
        >
      </section>
      <!-- <section class="openings">
        <div class="opening__title">Job Openings</div>
        <a class="opening__item" href="{{url('job-openings')}}">
          <div class="opening__item-title">Visual Designer Intern</div>
          <div class="opening__item-content">
            Grow as a designer in a way school can’t teach
          </div>
        </a>
      </section> -->
    </main>
    
  </body>
@include('frontend.layouts.footer')
