@extends('frontend.layouts.app')
@include('frontend.layouts.header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Work Detail - Tech Simians</title>
</head>
<!-- <body>
    <main class="container">
        <section class="breadcrumb">
            <a href="/" class="breadcrumb__link">Home</a>
            <a href="#" class="breadcrumb__link">Blog</a>
            <a href="#" class="breadcrumb__link">How to enhance motivation for better business leads?</a>
        </section>

    </main>
</body>
</html> -->

<body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Work Detail - Tech Simians</title>
</head>
  
      <section class="project" style="margin-top: 80px;">
        <div class="container">
          <h2 class="project__title" style="color:black">Student Scoop</h2>
          <div class="project__text" style="color:black">
            The Student Scoop is an educational institution that is dedicated to providing young minds with opportunities that go beyond traditional boundaries. Their meticulously designed programs include the International Baccalaureate Diploma Programme (IBDP), Middle Years Programme (MYP), and International General Certificate of Secondary Education (IGCSE) courses, as well as a robust selection of technology-focused programs. These offerings are carefully curated to empower students for a dynamic future, fostering holistic growth and fostering a commitment to academic excellence.
          </div>
        </div>
        <section class="project__section">

    <section style="margin-top:-50px;">
      <img src="{{asset('frontend/assets/img/desktop-4.png')}}" alt="" width= 100%; height=100%; style="margin-top: 0px;" class="project-1" />
    </section>
    <!-- <div class="project__grid-item">
      <img src="{{asset('frontend/assets/img/project-1_2.png')}}" alt="" />
    </div>
    <div class="project__grid-item">
      <img src="{{asset('frontend/assets/img/project-1_3.png')}}" alt="" />
    </div>
  </div> -->
</section>
<section class="project-details js-animated-details" data-parallax-animation="animatedDetails">
   <div class="image-cover" style="background-image: url('{{asset('frontend/assets/img/atlanta.jpg')}}'); transform: translate3d(0px, -250.873px, 0px); height:100%"></div>

  <div class="container is-wide row">
    <div class="location client">
      <img src="{{asset('frontend/assets/img/icon-city.svg')}}" alt="City icon" class="city-icon">
      <h5 class="client-location">Client’s Location</h5>
      <div class="city">Andheri East</div>
      <div class="region">Mumbai</div>
    </div>
    <div class="team">
      <img src="{{asset('frontend/assets/img/icon-team.svg')}}" alt="Team icon"  class="icon-team team-ico team-ico-ipad">
      <h5 style="margin-bottom:-5px;" class="tech-team">Tech Simians Team</h5>
     <div style="margin-bottom:20px">
     <div class="title" style="color:white;">17 Engineers</div>
      <!-- <div class="title" style="color:white;">2 Designers</div> -->
      <!-- <div class="title" style="color:white;">1 Product Manager</div>
      <div class="title" style="color:white;">1 Engineering Manager</div> -->
      <div class="title" style="color:white;">1 QA Engineer</div>
     </div>
    </div>
    <div class="timeline time">
      <img src="{{asset('frontend/assets/img/icon-timeline.svg')}}"  style="margin-top:-159px" alt="Timeline icon">
      <h5 class="time-line">Timeline</h5>
      <div class="start-date">January 2014</div>
      <div class="arrow">
        <img src="{{asset('frontend/assets/img/arrow.svg')}}" alt="Arrow">
      </div>
      <div class="end-date">Now</div>
    </div>
  </div>
</section>

<style>

  /* Media query for tablet-sized screens */
  @media (min-width: 768px) and (max-width: 991px) {
    .team-ico-ipad {
      margin-top: -154px;
    }
  }
</style>
<style>
  /* Responsive CSS for mobile devices */
@media screen and (max-width: 767px) {
  /* Define a class for the container that wraps the three columns */
  .container.is-wide.row {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: flex-start;
  }

  /* Adjust the column width for mobile devices */
  .container.is-wide.row > div {
    width: 100%; /* Take the full width on mobile */
    margin: 10px 0; /* Add some vertical spacing between columns */
  }

  /* Center the text inside each column */
  .container.is-wide.row h5,
  .container.is-wide.row .title {
    text-align: center;
  }

  /* Optional: Adjust icon size on mobile for better display */
  .container.is-wide.row img {
    width: 80px;
    height: 80px;
    margin-left: 130px;
  }

  /* Optional: Reduce the bottom margin of the 'Timeline' column to align better */
  .timeline {
    margin-bottom: 0;
  }
}

</style>
<style>
  @media (max-width: 767px) {
    .city-icon {
      margin-top: -30px;
    }
    .client {
      margin-top: 170px!important;
    }
    .team-ico {
      margin-left: 113px!important;
      margin-top: -168px!important;
    }
    .time {
      margin-left:20px!important;
    }
    .project-1 {
      margin-top: 12px!important;
    }

  }
  @media (min-width: 820px) {
    .city-icon {
      margin-top: -160px;
      /* margin-left: 136px; */
    }

    .team-ico {
      margin-top: -272px!important;
    }

    .tech-team {
      margin-top: 30px;
    }

    .time-line {
      margin-top: 32px;
    }

  }

 
</style>
<style>
  @media (min-width: 767px) {
    .client-location {
      margin-top: 25px;
    }

    .icon-team {
      margin-top: -66px;
    }
  }

  @media (min-width: 768px) {
    .icon-team {
      /* Add your desired margin-top value for desktop here */
      margin-top: -225px;
      margin-left: 26px;
    }
  }
</style>
<section class="testimonials-list">
  <div class="container is-wide"> 
    <div class="project-testimonial">
      <div class="customer">
        <img src="{{asset('frontend/assets/img/dummy.png')}}" srcset="{{asset('frontend/assets/img/dummy.png 2x')}}" class="avatar" alt="Tope Awotona">
        <div class="info">
          <div class="reviews-block-author-title" style="color: #000">Aditya Darooka</div>
          <div class="reviews-block-author-label">Darwin Travel Tech Pvt. Ltd.</div>
        </div>
      </div>
      <div class="description">
        <p class="testimonial-text"><q>Hi, my name is Aditya, and we've been working with Tech Simians for almost five years now, and I think the team is very knowledgeable. More importantly, they would understand your requirement properly and accordingly suggest the right solution for your need. I would highly recommend Tech Simians to any company.</q></p>
      </div>
    </div>
  </div>
</section>




<!-- <section class="project__section">
  <div class="project__grid">
 
    <div class="project__grid-item">
      <img src="{{asset('frontend/assets/img/project-1_2.png')}}" alt="" />
    </div>
    <div class="project__grid-item">
      <img src="{{asset('frontend/assets/img/project-1_3.png')}}" alt="" />
    </div>
  </div>
</section>  -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project Section</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Custom CSS to make images 100% width of their columns */
    .project__grid-item img {
      width: 1500px!important;
      height: 50%!impoertant;
      display:block!important;
    }


  </style>
</head>
<body>

  <section class="">
   
      <div class="row container image-row" >
        <div class="col-lg-6">
          <div class="project__grid-item">
            <img src="{{asset('frontend/assets/img/work-7.png')}}" alt="" width= 100%!important; height=100%;  />
          </div>
        </div>
        <div class="col-lg-6">
          <div class="project__grid-item">
            <img src="{{asset('frontend/assets/img/work-8.png')}}" alt="" width= 100%!important; height=100%; />
          </div>
        </div>
      </div>
    
  </section>
<!-- 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</body>
</html>



<style>
  .project__section {
  display: flex;
  justify-content: center;
}

.project__grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
}

.project__grid-item {
  display: flex;
  justify-content: center;
  align-items: center;
}

.project__grid-item img {
  max-width: 100%;
}

</style>

      <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Card Layout</title>
  <!-- <style>
    .project-technologies .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .project-technologies .column {
      flex: 0 0 calc(50% - 20px);
      margin-bottom: 20px;
    }

    .project-technologies .item {
      background-color: #f2f2f2;
      border-radius: 5px;
      padding: 20px;
    }

    .project-technologies .section-title {
      color: black;
      font-size: 18px;
      margin-left: 20px;
    }

    .project-technologies .card-list {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      margin-top: 20px;
    }

    .project-technologies .card {
      background-color: white;
      border-radius: 2px;
      /* padding: 20px; */
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .project-technologies .card-image {
      width: 50px;
      height: 50px;
      background-position: center;
      background-repeat: no-repeat;
      background-size: contain;
    }

    .project-technologies .card-title {
      margin-top: 10px;
      color:black;
      font-weight: bold;
    }

    h1 {
      color: black!important;
    }
  </style> -->

  <style>
  .project-technologies .container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  .project-technologies .column {
    flex: 0 0 calc(50% - 20px);
    margin-bottom: 20px;
  }

  .project-technologies .item {
    background-color: #fff!important;
    border-radius: 5px;
    padding: 20px;
  }

  
        
  .project-technologies .section-title {
    color: black;
    font-size: 20px;
    margin-left: 40px;
  }

  .project-technologies .card-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 5px;
    margin-top: 4px;
  }

  

  .project-technologies .card-image {
    width: 50px;
    height: 60px;
    background-size: 50% auto !important;
    background-position: center;
    background-repeat: no-repeat;
    background-size: contain;
  }

  .project-technologies .card-title {
    margin-top: 10px;
    margin-left: 15px;
    color: black;
    font-size: 12px;
    font-weight: bold;
  }

  h1 {
    color: black !important;
  }

  /* Media query for mobile devices (max-width: 767px) */
  @media (max-width: 767px) {
    .project-technologies .column {
      flex: 0 0 calc(100% - 20px); /* Show one card in a single column for mobile */
    }
  }

  @media (min-width: 892px) {
    .card {
            width: 50%;
            height: 80%;
          
        }

        
  }
</style>

</head>


<!DOCTYPE html>
<html>
<head>
    <!-- Your head content goes here -->
</head>
<body>
    <section class="project-technologies">
        <div class="container">
        <div class="item is-technologies">
  <h3 class="technologies" style="color:black;font-size:46px!important; text-align:center;">Technologies</h3>
  <div class="tech-list">
                    <!-- Technologies images -->
                    <!-- <div class="tech-item" style="background-image: url(/frontend/assets/img/rails.svg)"> <span class="tech-text">React</span> </div> -->
                    <div class="tech-item">
                    <div class="tech-item" style="background-image: url(/frontend/assets/img/rails.svg);"></div>
                    <p class="tech-title">Rails</p>
                   </div>
                    <div class="tech-item">
                    <div class="tech-item" style="background-image: url(/frontend/assets/img/ruby.svg); margin-top:25px;"></div>
                    <h3 class="tech-title" style="margin-top:30px!important;">Ruby</h3>
                   </div>
                    <div class="tech-item">
                    <div class="tech-item" style="background-image: url(/frontend/assets/img/javascript.svg);"></div>
                    <h3 class="tech-title">JavaScript</h3>
                   </div>
                    <div class="tech-item">
                    <div class="tech-item" style="background-image: url(/frontend/assets/img/html.svg);"></div>
                    <h3 class="tech-title">HTML5</h3>
                   </div>
                    <div class="tech-item">
                    <div class="tech-item" style="background-image: url(/frontend/assets/img/css3.svg);"></div>
                    <h3 class="tech-title">CSS3</h3>
                   </div>
                    <div class="tech-item">
                    <div class="tech-item" style="background-image: url(/frontend/assets/img/psql.svg);"></div>
                    <h3 class="tech-title">PostgreSQL</h3>
                   </div>
                    <div class="tech-item">
                    <div class="tech-item" style="background-image: url(/frontend/assets/img/redis.svg);"></div>
                    <h3 class="tech-title">Redis</h3>
                   </div>
                    <div class="tech-item">
                    <div class="tech-item" style="background-image: url(/frontend/assets/img/react.svg);"></div>
                    <h3 class="tech-title">React</h3>
                   </div>
                    <div class="tech-item">
                    <div class="tech-item" style="background-image: url(/frontend/assets/img/sidekiq.svg);"></div>
                    <h3 class="tech-title">Sidekiq</h3>
                   </div>
                    <div class="tech-item">
                    <div class="tech-item" style="background-image: url(/frontend/assets/img/googl-cloud.svg);"></div>
                    <h3 class="tech-title">Cloud Platform</h3>
                   </div>
                    <div class="tech-item">
                    <div class="tech-item" style="background-image: url(/frontend/assets/img/kubernet.svg);"></div>
                    <h3 class="tech-title">Kubernetes</h3>
                   </div>
                    <div class="tech-item">
                    <div class="tech-item" style="background-image: url(/frontend/assets/img/jira.svg);"></div>
                    <h3 class="tech-title">Jira</h3>
                   </div>
                    <!-- <div class="tech-item">
                    <div class="tech-item" style="background-image: url(/frontend/assets/img/mysql2.png);"></div>
                    <h3 class="tech-title">MySQL</h3>
                   </div> -->
                 
                  
                </div>
 
</div>
            <div class="item is-integrations">
                <h3 class="integration" style="color:black;font-size:46px!important; text-align:center;">Integrations</h3>
                <div class="tech-list">
                <div class="tech-item">
                    <div class="tech-item" style="background-image: url(/frontend/assets/img/google-auth.svg);"></div>
                    <p class="tech-title">Google Auth</p>
                   </div>
                    <div class="tech-item">
                    <div class="tech-item" style="background-image: url(/frontend/assets/img/google-calendar.svg);"></div>
                    <h3 class="tech-title">Google Calendar</h3>
                   </div>
                    <div class="tech-item">
                    <div class="tech-item" style="background-image: url(/frontend/assets/img/stripe.svg);"></div>
                    <h3 class="tech-title">Stripe</h3>
                   </div>
                    <div class="tech-item">
                    <div class="tech-item" style="background-image: url(/frontend/assets/img/send-grid.svg);"></div>
                    <h3 class="tech-title">SendGrid</h3>
                   </div>
                    <div class="tech-item">
                    <div class="tech-item" style="background-image: url(/frontend/assets/img/mail-trap.svg);"></div>
                    <h3 class="tech-title">Mailtrap</h3>
                   </div>
                    <div class="tech-item">
                    <div class="tech-item" style="background-image: url(/frontend/assets/img/air-brake.svg);"></div>
                    <h3 class="tech-title">Airbrake</h3>
                   </div>
                    <div class="tech-item">
                    <div class="tech-item" style="background-image: url(/frontend/assets/img/new-relic.svg);"></div>
                    <h3 class="tech-title">New Relic</h3>
                   </div>
                    <div class="tech-item">
                    <div class="tech-item" style="background-image: url(/frontend/assets/img/segment.svg);"></div>
                    <h3 class="tech-title">Segment</h3>
                   </div>
                    <div class="tech-item">
                    <div class="tech-item" style="background-image: url(/frontend/assets/img/office-auth.svg);"></div>
                    <h3 class="tech-title">Office365 Auth</h3>
                   </div>
                    <div class="tech-item">
                    <div class="tech-item" style="background-image: url(/frontend/assets/img/office-calendar.svg);"></div>
                    <h3 class="tech-title">Office365 Calendar</h3>
                   </div>
                    <div class="tech-item">
                    <div class="tech-item" style="background-image: url(/frontend/assets/img/optimize.svg);"></div>
                    <h3 class="tech-title">Optimizely</h3>
                   </div>
                    <div class="tech-item">
                    <div class="tech-item" style="background-image: url(/frontend/assets/img/mode-analytics.svg);"></div>
                    <h3 class="tech-title">Mode analytics</h3>
                   </div>
            </div>
        </div>
    </section>

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
        /* margin-left: -1px!important; */
      }
      }
      @media (max-width: 768px){
      .technologies {
        /* margin-left: 72px!important; */
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
            background-color: #ffffff!important;
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
              margin-top: 12px;
                width: 100%; /* On smaller screens, make each item occupy the full width */
            }
        }

        .tech-item {
    height: 60px; /* Set the height of the image div */
    width: 60px; /* Set the width of the image div */
    margin: 35 auto 20px; /* Add bottom margin to create spacing between the image and title */
}

.tech-title {
    margin-top: -20px; /* Remove default margin of h3 to create spacing between the image and title */
    font-size: 18px;
    font-family: "Poppins Regular",Helvetica,sans-serif;
    color: #343639;
}

@media (max-width: 768px) {
  .tech-title {
    margin-top: -20px; /* Remove default margin of h3 to create spacing between the image and title */
    font-size: 14px;
    font-family: "Poppins Regular",Helvetica,sans-serif;
    color: #343639;
}
}
    </style>
</body>
</html>

  </body>


      <section class="alsolike">
        <div class="workgrid container">
          <h2 class="alsolike__title">You may also like this</h2>

          <div class="workgrid__row">
            <a href="{{url('our-work-detail')}}" class="workgrid__item">
              <div class="workgrid__img">
                <img src="{{asset('frontend/assets/img/work-2-1.png')}}" alt="" />
              </div>
              <div class="workgrid__item-title">Document Management Systems</div>
              <div class="workgrid__item-text">
                It is all about Document Management Systems
              </div>
              <div class="workgrid__item-cta">See More</div>
            </a>
            <a href="{{url('our-work-detail-2')}}" class="workgrid__item">
              <div class="workgrid__img">
                <img src="{{asset('frontend/assets/img/work-3-1.png')}}" alt="" />
              </div>
              <div class="workgrid__item-title">TripDarwin</div>
              <div class="workgrid__item-text">Tripdarwin is a comprehensive platform designed to cater to all your travel needs</div>
              <div class="workgrid__item-cta">See More</div>
            </a>
          </div>
        </div>
      </section>
    </main>








<style>
    .container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.column {
  flex-basis: calc(50% - 20px);
}

.item {
  margin-bottom: 40px;
}

.tech-list {
  display: flex;
  flex-wrap: wrap;
  /* margin: -10px; */
}

/* .tech-item {
  width: calc(33.33% - 20px);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin: 10px;
  color: black;
  text-align: center;
} */

.tech-image {
  background-repeat: no-repeat;
  background-position: center center;
  background-size: contain;
  width: 60px;
  height: 60px;
}

.tech-title {
  margin-top: 12px;
}

h3 {
  margin-bottom: 20px;
  font-size: 44px;
}

.project-technologies {
  background-color: #f5f5f5;
  padding: 40px 0;
}

</style>
<style>
  .project-details {
  position: relative;
  overflow: hidden;
  padding: 50px 0;
}

.image-cover {
  position: absolute;
  top: 273px;
  left: 0;
  width: 100%;
  height: 60%;
  background-size: cover;
  background-position: center;
}

.container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  color: #fff;
  font-family: Arial, sans-serif;
}

.container h5,
.container .title {
  color: #000;
}

.location,
.team,
.timeline {
  text-align: center;
  opacity: 0;
  transform: translateY(30px);
  transition: opacity 0.5s ease, transform 0.5s ease;
}

.js-animated-details .location,
.js-animated-details .team,
.js-animated-details .timeline {
  opacity: 1;
  transform: translateY(0);
}

.location img,
.team img,
.timeline img {
  width: 100px;
  height: 100px;
}

h5 {
  margin-top: 20px;
  font-size: 18px;
}

.city,
.region,
.title {
  margin-top: 10px;
}

.arrow img {
  width: 30px;
  height: 30px;
  transform: rotate(360deg);
}

.timeline .arrow {
  display: flex;
  align-items: center;
}

.start-date,
.end-date {
  font-weight: bold;
}

</style>



<style>
   .testimonials-list {
  background-color: #f8f8f8;
  padding: 50px 0;
  margin-top: -24px;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.project-testimonial {
  background-color: #fff;
  border-radius: 8px;
  padding: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.customer {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
}

.avatar {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  margin-right: 15px;
}

.info {
  font-family: Arial, sans-serif;
}

.reviews-block-author-title {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 5px;
}

.reviews-block-author-label {
  color: #777;
}

.description {
  font-family: Arial, sans-serif;
  line-height: 1.6;
  color:#000;
}

.testimonial-text {
  margin-bottom: 10px;
}

/* Animation */
.js-animated-testimonials .project-testimonial {
  opacity: 0;
  transform: translateY(30px);
  transition: opacity 0.5s ease, transform 0.5s ease;
}

.js-animated-testimonials.animatedTestimonials .project-testimonial {
  opacity: 1;
  transform: translateY(0);
}

</style>


  </body>
</html>

@include('frontend.layouts.footer')
