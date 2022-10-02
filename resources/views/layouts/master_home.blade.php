<!DOCTYPE html>
<html lang="en">

<head>
    <!--google code -->
<meta name="google-site-verification" content="WmjPMR6NgLy-O0POlXrlAlYsykfj17djbDjaduoYl2Y" />
<!--Start of Tawk.to Script-->

<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/614568b1d326717cb68215dd/1ffri1ua3';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--end of Tawk.to Script-->
<!-- Global site tag (gtag.js) - Google Analytics 8 11 21 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-E3R876228G"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-E3R876228G');
</script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title') - Amankhalsa</title>
  <meta name="description" content="This is demo site for testing by admin panel you can manage and insert everything on every page. i can  develop  dynamic any website using php (laravel framework)..">
  <meta name="keywords" content="Amanpreet singh khalsa Mandi Gobindgarh , Amankhalsa, preetkhalsa Amankhalsa mgg  php laravel Developer ">
<!--open graph-->
<meta content="en_US" property="og:locale">
<meta property="og:title" content="AmanKhalsa Laravel Developer" />
<meta property="og:type" content="Website" />
<meta property="og:image"  content="https://amankhalsa.in/image/Multi/1708886748018832.jpg" />
<meta property="og:image:alt" content="Easy Setup Your website in laravel " />
<meta property="og:url" content="https://amankhalsa.in/" />
<meta property="og:description" content="This is demo site for testing by admin panel you can manage and insert everything on every page.." />
<meta property="og:site_name" content="https://amankhalsa.in/" />

<meta content="1200" property="og:image:width">
<meta content="630" property="og:image:height">
<!--end open graph-->

<!--twitter card start  -->
 <meta name="twitter:card" content="AmanKhalsa php Laravel Developer
">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="https://amankhalsa.in/">
<meta name="twitter:creator" content="https://amankhalsa.in/">
<meta name="twitter:title" content="Amanpreet singh Khalsa">
<meta name="twitter:description" content="This is demo site for testing by admin panel you can manage and insert everything on every page..">
<meta name="twitter:image" content="https://amankhalsa.in/public/image/team/1709510178300118.jpg">
<meta name="twitter:image:width" content="800">
<meta name="twitter:image:height" content="418">

  <!-- Favicons -->
<!--   {{asset('frontend/')}} -->
  <link href="  {{asset('frontend/assets/favicon.png')}}" rel="icon">
 <!--apple-touch-icon-->
<link rel="apple-touch-icon" href="https://amankhalsa.in/frontend/assets/favicon.png" />
<!--canonical-->
<link rel="canonical" href="https://amankhalsa.in/" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="  {{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="  {{asset('frontend/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="  {{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="  {{asset('frontend/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="  {{asset('frontend/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="  {{asset('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="  {{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="  {{asset('frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="  {{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
      <!-- Toaster CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
  <!-- =======================================================
  * Template Name: Company - v2.1.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
 <script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "Amankhalsa",
  "url": "https://amankhalsa.in/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://amankhalsa.in/{search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
<!--poptin-->
 <script id='pixel-script-poptin' src='https://cdn.popt.in/pixel.js?id=9314e286c2af9' async='true'></script> 
</head>

<body>

  @include('layouts.body.header')
  @if(Request::is('/'))
  @include('layouts.body.slider')
  @endif

  <main id="main">
<img src="{{asset('frontend/assets/loader.gif')}}" class=" center" alt=" loader" id="loader"  >
   @yield('home_content')

  </main><!-- End #main -->
  @include('layouts.body.footer')

  

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="  {{asset('frontend/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="  {{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="  {{asset('frontend/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="  {{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="  {{asset('frontend/assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="  {{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="  {{asset('frontend/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="  {{asset('frontend/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="  {{asset('frontend/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="  {{asset('frontend/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="  {{asset('frontend/assets/js/main.js')}}"></script>
 <!-- Toaster Javascript cdn -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
 
 
 	document.onreadystatechange = function() {
	if (document.readyState !== "complete") {
	document.querySelector(
	"body").style.visibility = "hidden";
	document.querySelector(
	"#loader").style.visibility = "visible";
	} else {
	document.querySelector(
	"#loader").style.display = "none";
	document.querySelector(
	"body").style.visibility = "visible";
	}
	};
</script>
</body>

</html>