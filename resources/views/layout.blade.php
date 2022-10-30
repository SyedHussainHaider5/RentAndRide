<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    <!-- <script src="{{asset('layout.js')}}"></script> -->
</head>

<body>
  
<div id = "body">
</div>
<nav class="navbar navbar-expand-lg py-3 bg-transparent ng-muted" id = "navbar">
  <div class="container">
    <a href="{{url("/home")}} " class="navbar-brand">   
      <img src="images/logo_3.png" width="120" height = "40" alt="" class="d-inline-block align-middle mr-2">   
      <span class="" id = "logo">Rent And Ride</span>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" id = "hamburger">
    <span class="" role="button" ><i class="fa fa-bars" aria-hidden="true" style="color:#e6e6ff"></i></span>
    </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="{{url("/home")}}" class="nav-item nav-link active">Home</a>
                    <a href="{{url("/browse_cars")}}" class="nav-item nav-link">Browse Cars</a>
                    <a href="{{url("/signup")}}" class="nav-item nav-link">Register</a>
                    <a href="{{url("/login")}}" class="nav-item nav-link" tabindex="-1">Contact Us</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="{{url('/login')}}"id = "Logintag" class="nav-item nav-link">Login</a>                    
                </div>
            </div>
</nav>




<div id = "rest_of_the_content">  
 @yield('content')
</div>
<!-- Php code for changing the functionality of login tag  -->
  <?php
      if(session()->has('admin_username')){
        echo "
                <script type='text/javascript'>
                document.getElementById('Logintag').innerHTML = 'Admin Profile';
                document.getElementById('Logintag').href = '/admin_profile';
                </script>
            ";
      }
      else if(!session()->has('admin_username') && !session()->has('user')){
        echo "
                <script type='text/javascript'>
                document.getElementById('Logintag').innerHTML = 'Login';
                document.getElementById('Logintag').href = '/login';
                </script>
            ";
      }
      else if(session()->has('user')){
        $name = session('user')->first_name;
        echo "
                <script type='text/javascript'>
                document.getElementById('Logintag').innerHTML = '$name'+' Profile';
                document.getElementById('Logintag').href = '/user_profile';
                </script>
            ";
      }                    
  ?>
<!-- ---------------------------------------------------- -->
<div>
@yield('script')
</div>
<script>

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

function myFunction2() {
  var x = document.getElementById("options");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
  <!-- Site footer -->
  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">You can choose to pick up your car from our showroom, or you can choose to have your Supercar/ Luxury car delivered to whichever location you want, in Pakistan. One of our most popular locations for supercar hire is in Islamabad. Hiring a supercar in Islamabad truly lets you experience the city in a different light, as you will notice the appreciation the city has for such prestigious vehicles</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6> Car Categories</h6>
            <ul class="footer-links">
              <li><a href="{{url("/showallcars")}}">All Cars</a></li>
              <li><a href="{{url("/showsedan")}}">Sedan</a></li>
              <li><a href="{{url("/showsuv")}}">Suv</a></li>
              <li><a href="{{url("/showhatchback")}}">HatchBack</a></li>
              <li><a href="{{url("/showsports")}}">Sports</a></li>
              
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              
                    <li><a href="{{url("/home")}}">Home</a></li>
                    <li><a href="{{url("/browse_cars")}}">Browse Cars</a></li>
                    <li><a href="{{url("/signup")}}">Register</a></li>
                    <li><a href="{{url("/login")}}">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by 
         <a href="#">Rent And Ride</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
</body>
</html>
