<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
   <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
   <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
   <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome.min.css')}}">
   <link rel="stylesheet" href="{{ asset('css.css')}}">

    <title>Document</title>
</head>
<body>
 @yield('navbar')

 @yield('main')
 
    @yield('sign-in')
    @yield('sign-up')
    @yield('send-email')

  <script src="{{asset('frontend/js/jquery-min.js')}}"></script>

 

<script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.js')}}"></script>
<script src="{{asset('frontend/js/all.js')}}"></script>
<script src="{{asset('frontend/js/wow.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#datepicker').datepicker();
     
    });
</script>           
<script>
  new WOW().init();
 </script>
<script type="text/javascript">
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:5000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

   </script>
   {{-- <script type="text/javascript">
   var click =document.getElementById("click-signin");
   function clickSignIn(){
    document.getElementById("overlay").style.display = "block";
   }
   click.addEventListener("click",function(){
  clickSignIn();
   });
   </script> --}}

</body>
</html>