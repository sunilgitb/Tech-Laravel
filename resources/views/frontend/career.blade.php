@extends('frontend.layouts.app')
@include('frontend.layouts.header')

<body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers - Tech Simians</title>
</head>
  <main class="">
    <section class="">
      <a href="{{url('/')}}" class="breadcrumb__link"></a>
      <a href="{{url('careers')}}" class=""></a>
    </section>
    


<section>
  <img class="full-width-img" src="{{asset('frontend/assets/img/techsimians_2.jpg')}}">
</section>
<!-- 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 10p;
  width: 100%;
}

.bg {
  /* The image used */
  background-image: url("frontend/assets/img/techsimians.jpg");

  /* Full height */
  height: 50%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body>

<div class="bg"></div>


</body>
</html> -->


<style>
  section {
    /* Your existing styles for the 'section' element go here */
  }

  /* Define the CSS class to stretch the image to full width */
  .full-width-img {
    width: 100%;
    margin-left: auto;
    /* Common styles for all devices go here */

    /* Mobile-specific styles using media query */
    @media (max-width: 767px) {
      /* Target devices with a screen width of 767px or smaller (typical mobile devices) */
      margin-top: 50px; /* Add a margin-top of 50px for mobile devices only */
    }

    /* Large screen PC-specific styles using media query */
    @media (min-width: 992px) {
      /* Target devices with a screen width of 1200px or larger (large screen PCs) */
      margin-top: 70px; /* Apply margin-top of -10px for large screen PCs */
    }
  } 
</style>





      <section class="openings">
      @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
        </ul>
      </div>
      @endif
      @if(session('success'))
      <div id="success-message" class="alert alert-success" style="float:right;">
        {{ session('success') }}
      </div>
     
      @endif
        {{-- <div class="opening__title" style="text-align:center; margin-top:50px">Job Openings</div>
        <!-- <a class="opening__item" href="{{url('job-openings')}}">
          <div class="opening__item-title">Visual Designer Intern</div>
          <div class="opening__item-content">
            Grow as a designer in a way school can’t teach
          </div> -->
        </a>
      </section>
      
      <section class="jobs-list-tags js-filter" style="margin-top:-80px">
    <div class="container">
      <div class="job-tags-toggle js-filter-group">
        <label class="job-tag-toggle">
          <input checked class="job-tag-toggle__input" name="job-tag-toggle" type="radio" value="[data-filter]">
          <div class="job-tag-toggle__content all-teams">
           All Teamss
          </div>
        </label>
        
        <label class="job-tag-toggle">
          <input class="job-title-input" name="job-tag-toggle" type="radio" value="[data-filter~=support]">
          <div class="job-title job-tag-toggle__content" data-job-id="engineering" job-tag-toggle__content">
          <div class="job-tag-toggle__dot--engineering job-tag-toggle"></div>Quality Analyst
        </div>
        
      </label>
      <label class="job-tag-toggle">
        <input class="job-title-input" name="job-tag-toggle" type="radio" value="[data-filter~=product]">
        <div class="job-title job-tag-toggle__content" data-job-id="product">
          <div class="job-tag-toggle__dot--product job-tag-toggle"></div> Product
        </div>
      </label>
      <label class="job-tag-toggle">
        <input class="job-title-input" name="job-tag-toggle" type="radio" value="[data-filter~=support]">
        <div class="job-title job-tag-toggle__content" data-job-id="support">
          <div class="job-tag-toggle__dot--support"></div> Support
        </div>
      </label>
    
      </div>
    </div>
  </section>
  
  
</body>
</html> --}}


  <!-- Example job content sections -->
 <!-- <div class="container"> -->
 {{-- <section id="engineering" class="job-content" style="background-color:#f3f6fc;margin-top: 31px;">
    <div class="card card-animation">
      <div class="card-body">
        <!-- <h3 class="card-title">PositionQuality </h3> -->
        <p class="card-text"><b>Position Vacant: </b> Quality Analyst</p>
        <p class="card-text"><b>Organization Name: </b> Tech Simians  </p>
        <p class="card-text"><b>Min. Exp.</b>	1 Year </p>
        <p class="card-text"><b>Max. Exp.</b>	3 Years </p>
        <p class="card-text"><b>Qualifications:</b>	Bachelor’s Degree in Computer Science, Software Engineering or any related field</p>
        <p class="card-text"><b>Location of posting:</b> Worli, Mumbai</p>
        <p class="card-text"><b>Candidate's Location:</b> Mumbai</p>
        <!-- <p class="card-text"><b>Job Type:</b> Full-Time</p> -->
        
        <p class="card-text"><b>Company Profile:</b> Welcome to our IT service-based company, where technology meets excellence! We are a team of highly skilled and motivated IT professionals dedicated to providing top-notch technology solutions to businesses of all sizes Our mission is to help our clients achieve their technology goals by delivering personalized and innovative solutions that enhance their operations, increase productivity and drive growth.<br>
        With years of experience in the industry, we have built a reputation for delivering exceptional service and support.
        Our team stays up-to-date with the latest technologies, trends and methodologies to ensure that we are always providing the most current and effective solutions to our clients. Whether you need help with network security, cloud computing, data backup and recovery, or any other IT-related service, we have the expertise and resources to get the job done right.</p>
        <p class="">
          <b>Required Skill Set:</b>
          
          <li>Strong knowledge and experience in BFSI domain.</li>
          <li>Proficiency in LOS (Loan Origination System) and LMS (Loan Management System) software.</li>
          <li>Excellent analytical and problem-solving skills.</li>
          <li>Attention to detail and ability to identify errors or inconsistencies.</li>
          <li>Strong communication skills, both verbal and written.</li>
        <li>Ability to work independently and collaboratively within a team.</li>
        <li>Proficiency in using quality assurance tools and methodologies.</li>
        </>
      </p>
      
      
      <p class="card-text"><b>Relevant Industry:</b> Banking Financial Service and Insurance Industry 
      Job Description / Responsibilities</p>
      <p class="card-text"><b>Job Description / Responsibilities:</b> <li>Conduct thorough quality checks and audits of loan origination and management processes within the BFSI domain.</li>
      <li>Identify errors, discrepancies, and areas for improvement in loan processing workflows.</li>
      <li>Develop and implement quality assurance strategies and procedures to enhance overall process efficiency and accuracy.</li>
      <li>Collaborate with cross-functional teams to address identified issues and implement corrective actions.</li>
      <li>Generate detailed reports and provide insights on quality metrics and trends.</li>
    </p>
    
    <p class="card-text"><b>Desired profile of the candidate: </b>
    <li>Minimum 1 years of experience in quality assurance or a similar role within the BFSI domain.</li>
    <li>Proven experience in working with LOS and LMS software.</li>
    <li>Strong understanding of loan origination and management processes.</li>
    <li>Knowledge of regulatory guidelines and compliance requirements in the BFSI sector.</li>
    <li>Ability to analyse complex data and provide actionable recommendations.</li>
    <li>Excellent organizational skills and ability to manage multiple tasks simultaneously.</li>
    <li>Attention to detail and commitment to delivering high-quality work.</li>
    <li>Team player with excellent interpersonal and communication skills.</li>
  </p>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="float: right; background-color: #0047ff;">
    Apply Now
  </button>
</div>
</div>
</section> --}}



{{-- <section id="product" class="job-content"  style="margin-top: 31px;">
  <div class="card card-animation">
    <div class="card-body">
      <h3 class="card-title">Product</h3>
     
      <h4 class="card-subtitle">Job Summary:</h4>
      <p class="card-text">We are seeking a highly organized and experienced Human Resources Specialist to join our team. As a Human Resources Specialist, you will be responsible for managing various HR functions, including recruitment, employee onboarding and offboarding, benefits administration, performance management, employee relations, and compliance with employment laws and regulations. Your role will be critical in maintaining a positive work environment and supporting the company's overall strategic objectives.</p>
      <p class="card-text">Location: Andheri East</p>
      <p class="card-text">Job Type: Full-Time</p>
      <h4 class="card-subtitle">Responsibilities:</h4><br>
      <h5 class="card-subtitle">Recruitment and Selection:</h5>
      <p class="card-text">Collaborate with hiring managers to identify staffing needs and develop job descriptions.</p>
      <p class="card-text">Source, screen, and interview candidates using various recruitment methods.</p>
            <p class="card-text">Conduct reference checks and coordinate background checks.</p>
            <p class="card-text">Assist in making final hiring decisions and extending job offers.</p>
            <h5 class="card-subtitle">Onboarding and Offboarding:</h5>
            <p class="card-text">Facilitate new employee orientation programs, ensuring a smooth transition for new hires.</p>
            <p class="card-text">Coordinate the necessary paperwork, including employment contracts, benefits enrollment, and other required documents.</p>
            <p class="card-text">Conduct exit interviews and ensure appropriate offboarding procedures are followed.</p>
            <h5 class="card-subtitle">Benefits Administration:</h5>
            <p class="card-text">Administer employee benefits programs, including health insurance, retirement plans, and other employee perks.</p>
            <p class="card-text">Educate employees on benefits options and assist with inquiries and issue resolution.</p>
            <p class="card-text">Collaborate with benefit providers to ensure accurate and timely administration.</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="float: right; background-color: #0047ff;">
              Apply Now
            </button>
          </div>
        </div>
      </section>
  
    <section id="support" class="job-content" style="margin-top: 31px;">
      <div class="card card-animation">
        <div class="card-body">
          <h3 class="card-title">Support</h3>
          <p class="card-text">We're looking for a curious Software Engineer to join our team! The position will include building great products, tackling interesting challenges, and contributing to our engineering culture. We expect you to work in pairs, use test-driven development, be experienced in building complex web applications, and write both clean and maintainable code.</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="float: right; background-color: #0047ff;">
            Apply Now
          </button>
        </div>
      </div>
    </section> --}}

<style>
  * {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float three columns side by side */
.column {
  float: left;
  width: 12%;
  padding: 10px 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 1000px) {
  .column {
    width: 50%;
    display: block;
    margin-bottom: 20px;
  }
}

@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}


/* Style the counter cards */
.card {
  /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); */
  /* box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px; */
  /* box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset; */
  /* box-shadow: 6px 6px 25px 10px #0a0af57a; */

  padding: 12px;
  text-align: center;
  background-color: #f1f1f1;
  transition: 0.3s;
  border-radius: 10px;
}

.card:hover {
  box-shadow: 0 4px 30px 0 rgba(0,0,0,0.4);
}

/* img {
  border-radius: 10px 10px 10px 10px;
} */
</style>
    <!-- <div class="row">
<a href="#" target="_blank">
<div class="column">
<div class="card">
<img src="https://www.iliketowastemytime.com/sites/default/files/imagecache/blog_image/space-wallpapers-1920x1200.jpg" style="width:100%">
<h2>Title</h2>
  <p>Text</p>
</div>
</div>
</div> -->

<div class="opening__title" style="text-align:center; margin-top:50px">Job Openings</div>

      <p class="opening__title"  style="text-align:center; margin-top:50px">Kindly mail us at: hr@techsimians.com</p>
    <title>Benefits and Perks</title>
    
</head>
<body>
  
  <br><br>
  <section class="list-box list-box--careers">
    <div class="wrapper">
      <div class="list-box__inner">
        <h2 class="list-box__title" style="color:#007bff;">
          Benefits <br> and Perks
        </h2>
        <div class="list-box__subtitle">Our team is jam packed with creative, smart and bubbly people. We inspire each other to improve daily, and be the best and happiest we can be.</div>
        <!-- <a class="enlarged-link download-link" href="/downloads/
        Bonuses &amp; Benefits.pdf" target="_blank">
        Download for more details
      </a> -->
    </div>
    <div class=""></div>
    <div class="list-box__content">
        <div class="column">
          <ul class="list-box__list">
            <li class="list-box__item">
              <div class="list-box__item-title"><h3>Growth opportunities</h3></div>
              <div class="list-box__item-text">Outline your growth and development plan, expand your skills, knowledge, and career horizons in a supportive and innovative environment.</div>
            </li>
            <li class="list-box__item">
              <div class="list-box__item-title"><h3>Remote and flexible schedule</h3></div>
              <div class="list-box__item-text">Techsimians live in more than 25 countries with different time zones. All of them are free to choose their most productive work time and place.</div>
            </li>
            <li class="list-box__item">
              <div class="list-box__item-title"><h3>Smart Expense policy</h3></div>
              <div class="list-box__item-text">There's an additional sum allocated to help you set up your workstation, improve your health, and learn whatever you want and how you want. No. Questions. Asked.</div>
            </li>
            <li class="list-box__item">
              <div class="list-box__item-title"><h3>Secure hardware and equipment</h3></div>
              <div class="list-box__item-text">Your productivity is our priority. Once you join Techsimians, you’ll get secure equipment of your choice.</div>
            </li>
          </ul>
        </div>
        <div class="column">
          <ul class="list-box__list">
            <li class="list-box__item">
              <div class="list-box__item-title"><h3>Competitive compensation</h3></div>
              <div class="list-box__item-text">Let's face it: in a late capitalistic world, getting paid well certainly doesn't hurt.</div>
            </li>
            <li class="list-box__item">
              <div class="list-box__item-title"><h3>23 Paid days off</div>
              <div class="list-box__item-text">Tech Simians rest 16 days per year + 10 days to cover your national holidays.</div>
            </li>
            <li class="list-box__item">
              <div class="list-box__item-title"><h3>Regular online and offline gatherings</h3></div>
              <div class="list-box__item-text">We frequently meet online and offline to get acquainted, collaborate, build a network, and have fun together.</div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</body>
</html>

<style>
  .list-box {
    /* Add your styles for the list box section here */
  }
  .list-box__content {
    display: flex;
    position: relative;
  }
  
  .column {
    flex: 1;
  }
  .list-box__separator {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 90%;
    height: 1px;
    background-color: #ccc;
    border: none;
  }
.list-box__inner {
  /* Add your styles for the list box inner content here */
}

.list-box__aside {
  /* Add your styles for the aside content here */
}

.list-box__title {
  /* Add your styles for the section title here */
}

.list-box__subtitle {
  /* Add your styles for the section subtitle here */
}

.list-box__content {
  display: flex;
}

.column {
  flex: 1;
}

.list-box__list {
  /* Add your styles for the list items here */
}

.list-box__item {
  /* Add your styles for each list item here */
}

.list-box__item-title {
  /* Add your styles for the list item title here */
}

.list-box__item-text {
  /* Add your styles for the list item text here */
}

/* Add any additional custom CSS styles as needed */

</style>

    <style>
      /* Reset default styles */
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }
      
      body {
        font-family: Arial, sans-serif;
        line-height: 1.5;
        color: #333;
        background-color: #f5f5f5;
      }
      
      /* Links Section */
      .links {
        padding: 40px 0;
        /* background-color: #fff; */
      }
      
      .links-box {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: center;
      }
      
      .links-box__wrap {
        display: flex;
        justify-content: space-between;
        max-width: 1200px;
      }
      
      .links-box__item {
        flex-basis: calc(50% - 10px);
        display: flex;
        flex-direction: column;
      align-items: center;
      text-decoration: none;
      color: #333;
      background-color: #fff;
      border-radius: 6px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    @media (max-width: 768px) {
      .links-box__item{
        margin-top:10px;
      }
    }
    
    .links-box__item:hover {
      transform: translateY(-5px);
    }
    
    .links-box__bg {
      position: relative;
      overflow: hidden;
      width: 100%;
      height: 0;
      padding-bottom: 60%;
    }
    
    .links-box__img {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    
    }
    .links-box__content {
      padding: 20px;
      text-align: center;
    }
    
    .links-box__title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    
    .links-box__subtitle {
      font-size: 16px;
      color: #666;
      text-align: left;
    }
    </style>
</head>


  <style>
    /* Custom CSS for responsive layout */
    .links-box__wrap {
      display: flex;
      flex-wrap: wrap;
      margin: -10px; /* Add negative margin to create a gap between items */
    }

    .links-box__item {
      flex: 0 0 49%;
      padding: 10px; /* Add padding to offset the negative margin */
    }

    /* Media Query for mobile devices */
    @media (max-width: 767px) {
      .links-box__item {
        flex: 0 0 100%;
      }
    }
  </style>

<style>
  .links-box__item:hover {
    text-decoration: none; /* Remove the underline */
  }

  @media (min-width: 992px) {
    .no-desktop {
      display: none;
    }
  }

  @media (max-width: 768px) {
    .no-mobile {
      display:none;
    }
  }
</style>
  <div class="container no-desktop">
  <section class="links">
    <div class="links-box">
      <div class="links-box__wrap">
        <a class="links-box__item links-box__item_services" href="{{url('about-us')}}">
          <div class="links-box__bg">
            <picture>
              <source srcset="{{asset('frontend/assets/img/about.jpg')}}" type="image/webp">
              <source srcset="{{asset('frontend/assets/img/about.jpg')}}" type="image/jpg">
              <img alt="" class="links-box__img" src="{{asset('frontend/assets/img/about.jpg')}}">
            </picture>
          </div>
          <div class="links-box__content">
            <h3 class="links-box__title">About Us</h3>
            <div class="links-box__subtitle">Our team is jam packed with creative, smart and bubbly people. We inspire each other to improve daily, and be the best and happiest we can be.</div>
          </div>
        </a>
        <a class="links-box__item links-box__item_team" href="{{url('about-us')}}">
          <div class="links-box__bg">
            <picture>
              <source srcset="{{asset('frontend/assets/img/team-tech.png')}}" type="image/webp">
              <source srcset="{{asset('frontend/assets/img/team-tech.png')}}" type="image/jpg">
              <img alt="" class="links-box__img" src="{{asset('frontend/assets/img/team-tech.png')}}" width=100%;>
            </picture>
          </div>
          <div class="links-box__content">
            <h3 class="links-box__title">Team</h3>
            <div class="links-box__subtitle">We have a team of professionals and experts that ensure every project is in sync with the client requirements in terms of timeliness, quality, consistency and flexibility. With its pool of quality and skilled resources.</div>
          </div>
        </a>
      </div>
    </div>
  </section>
</div>


  <section class="links no-mobile">
    <div class="links-box">
      <div class="links-box__wrap">
        <a class="links-box__item links-box__item_services" href="{{url('about-us')}}">
          <div class="links-box__bg">
            <picture>
              <source srcset="{{asset('frontend/assets/img/about.jpg')}}" type="image/webp">
              <source srcset="{{asset('frontend/assets/img/about.jpg')}}" type="image/jpg">
              <img alt="" class="links-box__img" src="{{asset('frontend/assets/img/about.jpg')}}">
            </picture>
          </div>
          <div class="links-box__content">
            <h3 class="links-box__title">About Us</h3>
            <div class="links-box__subtitle">Our team is jam packed with creative, smart and bubbly people. We inspire each other to improve daily, and be the best and happiest we can be.</div>
          </div>
        </a>
        <a class="links-box__item links-box__item_team" href="{{url('about-us')}}">
          <div class="links-box__bg">
            <picture>
              <source srcset="{{asset('frontend/assets/img/team-tech.png')}}" type="image/webp">
              <source srcset="{{asset('frontend/assets/img/team-tech.png')}}" type="image/jpg">
              <img alt="" class="links-box__img" src="{{asset('frontend/assets/img/team-tech.png')}}" width=100%;>
            </picture>
          </div>
          <div class="links-box__content">
            <h3 class="links-box__title">Team</h3>
            <div class="links-box__subtitle">We have a team of professionals and experts that ensure every project is in sync with the client requirements in terms of timeliness, quality, consistency and flexibility. With its pool of quality and skilled resources.</div>
          </div>
        </a>
      </div>
    </div>
  </section>






    <style>
      /* Custom CSS to style the "Choose File" button */
      input[type="file"] {
        display: none;
      }

      .custom-file-upload {
        border: 1px solid #0047ff;
        color: white;
        background-color: #0047ff;
        padding: 6px 12px;
        cursor: pointer;
        margin-left: 100px;
        border-radius: 4px;
      }
      
      /* Style for error messages */
      .text-danger {
        color: red;
      }
      </style>

  
  <!-- Your modal code goes here -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Kindly fill the form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('apply') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" value="{{ old('name') }}" required>
              @error('name')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="name">Job Title</label>
              <input type="text" name="job_title" class="form-control" id="job_title" placeholder="Enter your job title" value="{{ old('job_title') }}" required>
              @error('job_title')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" value="{{ old('email') }}" required>
              @error('email')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter your phone number" maxlength="10" value="{{ old('phone') }}" required>
              @error('phone')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
            <label for="file">File</label>
            <label for="file" class="custom-file-upload">Choose File</label>
            <input type="file" name="file" id="file" accept=".pdf, .doc, .docx, .jpeg, .jpg, .png" required>
            <div id="file-name"></div>
            @error('file')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
        
          <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" id="message" rows="2" cols="2" placeholder="Enter your message" required>{{ old('message') }}</textarea>
            @error('message')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary submit" style="background-color: #0047ff;    ">Submit</button>
        </form>
      </div>
      
    </div>
  </div>
</div>

</body>
</html>


<script>
  // $("#exampleModal").modal("show");
$('#exampleModal').on('hidden.bs.modal', function () {
    $('#exampleModal form')[0].reset();
    });
</script>

<style>
  @media (max-width: 768px){
    .submit {
      margin-left: 138px;
    }
    
  }

  @media (min-width: 992px){
   .submit {
    margin-left: 173px!important;
   }
  }
</style>



<style>
  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
  }
  
  .job-tag-toggle {
    display: inline-flex;
    align-items: center;
    margin-right: 15px;
    cursor: pointer;
  }
  
  .job-tag-toggle__input {
    display: none;
  }
  
  .job-tag-toggle__content {
    display: flex;
    align-items: center;
    padding: 8px;
    border-radius: 20px;
    background-color: #f0f0f0;
    transition: background-color 0.3s ease;
  }
  
  .job-tag-toggle__input:checked ~ .job-tag-toggle__content {
    background-color: #333;
  color: #fff;
}

.job-tag-toggle__ico {
  width: 16px;
  /* height: 16px; */
  margin-right: 8px;
}

.job-tag-toggle__dot {
  width: 10px;
  height: 10px;
  margin-right: 8px;
  border-radius: 50%;
}

.job-tag-toggle__dot--engineering {
  background-color: #ff6d00;
}

.job-tag-toggle__dot--product {
  background-color: #2e7d32;
}

.job-tag-toggle__dot--support {
  background-color: #01579b;
}

.job-tag-toggle__dot--finance {
  background-color: #fdd835;
}

.job-tag-toggle__dot--security {
  background-color: #6d4c41;
}

.job-tag-toggle__dot--operations {
  background-color: #5e35b1;
}

.job-tag-toggle__dot--marketing {
  background-color: #e53935;
}

.job-tag-toggle__dot--data {
  background-color: #4caf50;
}

.job-tag-toggle__dot--design {
  background-color: #00acc1;
}

.job-tag-toggle__dot--legal {
  background-color: #f48fb1;
}

.job-tag-toggle__dot--sales {
  background-color: #8e24aa;
}

.mixitup-controls {
  margin-bottom: 20px;
}

.filter {
  display: inline-block;
  margin-right: 10px;
  padding: 10px 20px;
  background-color: #f0f0f0;
  color: #333;
  border: none;
  border-radius: 20px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.filter:hover {
  background-color: #333;
  color: #fff;
}

.jobs-container .mix {
  display: none;
}

.jobs-container .mix.show {
  display: block;
}

.job-title {
  margin-top: 0;
}

.job-description {
  margin-bottom: 10px;
}

.job-title-input {
  display: none;
}

.job-tags {
  font-style: italic;
  color: #777;
}

.list-box__heading {
  margin-top: 0;
}

.benefits-list {
  list-style: disc;
  padding-left: 20px;
}

.all-teams {
  margin-top: 10px;
}

</style>

<!-- <style>
  /* Hide all job content sections initially */
  .job-content {
    display: none;
  }
  </style> -->

  <style>
  .card-animation {
    animation: cardFadeIn 0.7s ease-in-out forwards;
    opacity: 0;
  }
  
  @keyframes cardFadeIn {
    from {
      opacity: 0;
      transform: translateY(50px);
    }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    </style>
 

  <style>
    .card  {
      background-color: #f3f6fc;
      text-align: left;
      margin: 5px;
    }
    @media (min-width: 992px) {
      .card  {
      background-color: #f3f6fc;
      text-align: left;
      margin: 25px;
    }
    }
  </style>

<style>
      /* Reset default styles */
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }
      
      body {
        font-family: Arial, sans-serif;
        line-height: 1.5;
        color: #333;
        background-color: #f5f5f5;
      }
      
      /* Wrapper */
      .wrapper {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }
    
    /* List Box */
    .list-box {
      background-color: #fff;
      border-radius: 6px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }
    
    /* Inner Content */
    .list-box__inner {
      padding: 40px 20px;
    }
    
    /* Title */
    .list-box__title {
      font-size: 36px;
      font-weight: bold;
      margin-bottom: 20px;
      margin-left: -18px;
    }
    
    /* Subtitle */
    .list-box__subtitle {
      font-size: 18px;
      margin-bottom: 30px;
      color: #666;
      margin-left: -18px;
    }
    
    /* Download Link */
    .download-link {
      display: inline-block;
      margin-top: 20px;
      color: #f8646a;
      text-decoration: none;
      font-weight: bold;
    }
    
    /* Separator Line */
    .list-box__separator {
      height: 1px;
      background-color: #eee;
      margin: 40px 0;
    }
    
    /* Column Layout */
    .list-box__content {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .column {
      flex-basis: calc(50% - 10px);
      margin-bottom: 20px;
    }
    
    /* List Items */
    .list-box__list {
      list-style: none;
      padding: 0;
    }
    
    .list-box__item {
      margin-bottom: 20px;
    }
    
    .list-box__item-title {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 5px;
    }
    
    .list-box__item-text {
      font-size: 16px;
      color: #666;
    }
    </style>
@include('frontend.layouts.footer')