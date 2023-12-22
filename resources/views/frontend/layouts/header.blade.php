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
    
<!-- <style>

#neonShadow{
  height:45px;
  width:140px;
  border:none;
  border-radius:50px;
  transition:0.3s;
  background-color:rgba(156, 161, 160,0.3);
  animation: glow 3s infinite ;
  transition:0.5s;
}
span{
    /* display: block; */
    width: 100%;
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 700;
    padding-top: 15%;
    padding-right: 2.5%;
    margin-right: 0px;
    font-size: 1.2rem;
    transition: 0.3s;
    opacity: 0;
    }
span:hover{
    transition: 0.3s;
    opacity: 1;
    font-weight: 700;
    }

#neonShadow:hover{
  transform:translateX(-20px)rotate(0deg);
  border-radius:5px;
  background-color:#c3bacc;
  transition:0.5s;
}

@keyframes glow{
  0%{
  box-shadow: 5px 5px 20px rgb(93, 52, 168),-5px -5px 20px rgb(93, 52, 168);}
  
  50%{
  box-shadow: 5px 5px 20px rgb(81, 224, 210),-5px -5px 20px rgb(81, 224, 210)
  }
  100%{
  box-shadow: 5px 5px 20px rgb(93, 52, 168),-5px -5px 20px rgb(93, 52, 168)
  }
}


</style> -->
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
      
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
      
      

