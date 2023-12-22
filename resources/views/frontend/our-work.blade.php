@extends('frontend.layouts.app')
@include('frontend.layouts.header')
<body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Work - Tech Simians</title>
</head>
    <main class="container">
      <!-- <section class="breadcrumb">
        <a href="{{url('/')}}" class="breadcrumb__link">Home</a>
        <a class="breadcrumb__link">Work</a> -->
      </section>

      <div class="workgrid" style="margin-top: 80px;">
        <h1 class="heading">Our Work</h1>
        <div class="subheading">
          Our product development is entirely driven by user experience, ensuring that we address only the user's essential requirements.
        </div>
        <div class="workgrid__row">
          <a href="{{url('our-work-detail')}}" class="workgrid__item">
            <div class="workgrid__img">
              <img src="{{asset('frontend/assets/img/work-2-1.png')}}" alt="" />
            </div>
            <div class="workgrid__item-title">Document Management Systems</div>
            <div class="workgrid__item-text">It is all about Document Management Systems</div>
            <div class="workgrid__item-cta">See More</div>
          </a>
          <a href="{{url('our-work-detail-2')}}" class="workgrid__item">
            <div class="workgrid__img">
              <img src="{{('frontend/assets/img/work-3-1.png')}}" alt="" />
            </div>
            <div class="workgrid__item-title">TripDarwin</div>
            <div class="workgrid__item-text">Tripdarwin is a comprehensive platform designed to cater to all your travel needs.</div>
            <div class="workgrid__item-cta">See More</div>
          </a>
          <a href="{{url('our-work-detail-3')}}" class="workgrid__item">
            <div class="workgrid__img">
              <img src="{{asset('frontend/assets/img/work-6.png')}}" alt="" />
            </div>
            <div class="workgrid__item-title">Cash Management System</div>
            <div class="workgrid__item-text">Cash Management Systems is a robust and secure solution</div>
            <div class="workgrid__item-cta">See More</div>
          </a>
          <a href="{{url('our-work-detail-4')}}" class="workgrid__item">
            <div class="workgrid__img">
              <img src="{{asset('frontend/assets/img/work-8-1.png')}}" alt="" />
            </div>
            <div class="workgrid__item-title">Student Scoop</div>
            <div class="workgrid__item-text">The Student Scoop is an educational institution</div>
            <div class="workgrid__item-cta">See More</div>
          </a>
          <a href="{{url('our-work-detail-5')}}" class="workgrid__item">
            <div class="workgrid__img">
              <img src="{{asset('frontend/assets/img/work-9-1.png')}}" alt="" />
            </div>
            <div class="workgrid__item-title">Human Resources Management</div>
            <div class="workgrid__item-text">Human Resources Management System (HRMS) is a versatile software solution</div>
            <div class="workgrid__item-cta">See More</div>
          </a>
        </div>
      </div>
    </main>
    
  </body>
  @include('frontend.layouts.footer')
