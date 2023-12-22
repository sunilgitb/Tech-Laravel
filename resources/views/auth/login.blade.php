<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Simians</title>
<style>
  @media (max-width: 768px){
    .mobile-device{
      width:70%!important;
      margin-left: 55px;
    }
    .container-fluid{
      /* margin-left: 290px!important; */
    }
    .logo-image {
      margin-left: 125px;
      margin-top: 25px;
    }

    
  }

  @media (min-width: 992px){
    .multi-device{
    margin-left: 450px!important;
    width: 50%;
    }

    .logo-image {
    margin-left: 550px; 
      margin-top:50px
    }
  }


</style>

<link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css?v=3.2.0')}}">

<body style="background-color: #f0f2f5;">
<img src="{{asset('frontend/assets/img/logo-update.png')}}" class="logo-image" height="70px" width="130px" >



<section class="content mobile-device" style=" width: 30%; margin-top: 30px;">
<div class="container-fluid multi-device">
<div class="row">

<div class="col-md-12">

<div class="card card-primary">
<!-- <div class="card-header">
<h3 class="card-title">Login <small>with email and password</small></h3>
</div> -->


<form method="POST" action="{{ route('admin.login') }}" novalidate="novalidate"  id="quickForm">
 @csrf
<div class="card-body">
<div class="form-group">
<label for="exampleInputEmail1">Email address</label>
<input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ old('email') }}" placeholder="Enter email" required>
@error('email')
<span class="error">{{ $message }}</span>
@enderror

</div>

<div class="form-group">
<label for="exampleInputPassword1">Password</label>
<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
@error('password')
<span class="error">{{ $message }}</span>
@enderror

</div>
<div class="form-group mb-0">
<div class="form-group">
<button type="submit" class="btn" style="width:100%; background-color: #007bff; color: #fff;">Log In</button>
</div>
</div>
</div>


</form>
</div>
<div class="footer__copyright hide-on-desktop">©<script>document.write(new Date().getFullYear())</script> Tech Simians. All Rights Reserved</div>


<div class="col-md-6">
</div>

</div>

</div>
</section>
<style>
    .error {
        color: red;
    }
</style>
</body>
