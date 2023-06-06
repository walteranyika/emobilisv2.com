<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! SEO::generate(true) !!}
    <link rel="shortcut icon" type="image/png" href="{{asset('icons/favicon.png')}}"/>
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('icons/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('icons/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('icons/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('icons/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('icons/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('icons/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('icons/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('icons/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('icons/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('icons/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('icons/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('icons/favicon-16x16.png')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('icons/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    @yield('extra-css-links')
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window,document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2241729519407814');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" alt="facebook emobilis" src="https://www.facebook.com/tr?id=2241729519407814&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
    <!-- Global site tag (gtag.js) - Google Ads: 10861532691 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10861532691"></script>
    <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-10861532691');
    </script>
    <!-- Global site tag (gtag.js) - Google Ads: 10861532691 -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-N50053PVZT"></script>
    <script>
        window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'G-N50053PVZT');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
</head>
<body>
<header class="container-fluid  top-header">
    <div class="row">
        <div class="col-sm-4 d-flex align-items-center justify-content-center">
            <img src="{{asset('images/logo.jpg')}}" alt="emobilis" style="width: 150px">
        </div>
        <div class="col-sm-4 d-flex align-items-center justify-content-center">
            <p class="text-center p-0 mb-0"><span class="mobile-txt">Technology </span><span class="innovation-txt">Innovation </span><span
                        class="entre-txt">Entrepreneurship </span><span class="emobilis-txt">@eMobilis</span>
            </p>
        </div>
        <div class="col-sm-4 d-flex align-items-center justify-content-center">
            <a href="{{route('enroll')}}"><img src="{{asset('images/enroll_button.jpg')}}" alt="Enroll Now" style="width: 100px"></a>
        </div>
    </div>
</header>
<nav class="navbar navbar-expand-lg  navbar-light bg-light sticky-top py-1">
    <div class="container-fluid">
        <a class="navbar-brand d-lg-none" href="#">
            <img src="{{asset('images/logo.jpg')}}" alt="emobilis" style="width: 80px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
             aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 py-2">
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="{{route('home-page')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ (request()->is('about')) ? 'active' : '' }}" href="{{route('about')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ (request()->is('activities')) ? 'active' : '' }}" href="{{route('activities')}}">Activities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('courses')) ? 'active' : '' }}" href="{{route('courses')}}">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('intakes')) ? 'active' : '' }}" href="{{route('intakes')}}">Intakes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('mobigirlz')) ? 'active' : '' }}" href="{{route('mobigirlz')}}">MobiGirlz</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('ajira')) ? 'active' : '' }}" href="{{route('ajira')}}">Ajira Digital</a>
                    </li>
                    <li class="nav-item d-none">
                        <a class="nav-link {{ (request()->is('scholarships')) ? 'active' : '' }}" href="{{route('scholarships')}}">Scholarships</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('contact')) ? 'active' : '' }}" href="{{route('contact')}}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>


    @yield('content')

<footer>
    <div class="container py-3">
        <div class="row">
            <div class="col-12 col-md-4 py-2 get-in-touch">
                <h4 class="footer-title">Get In Touch</h4>
                 <p>Join our mailing list and get up to date with latest on news, scholarships and free bootcamps</p>
                <form  method="post" action="{{route('join-mailing-list')}}">
                    @csrf
                    <div class="input-group mb-3 mt-4">
                        <input type="email" name="email" class="form-control" placeholder="Enter email" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-success border-rad" type="button" id="button-addon2">Subscribe</button>
                    </div>
                </form>


                <div class="row py-4 socialize-mobile text-md-left">
                    <div class="col-4">
                        <a target="_blank" href="https://www.facebook.com/eMobilisMobileTech"> <i class="fa fa-facebook"></i></a>
                    </div>
                    <div class="col-4">
                        <a target="_blank" href="https://twitter.com/eMobilis"> <i class="fa fa-twitter"></i></a>
                    </div>
                    <div class="col-4">
                        <a target="_blank" href="https://www.instagram.com/emobilis_tech"> <i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 py-2">
                <h4 class="footer-title">Resources and Info</h4>
                <p><a href="{{route('about')}}">About Us</a></p>
                <p><a href="{{route('bootcamps')}}">Boot Camps</a></p>
                <p><a href="{{route('news')}}">News</a></p>
                <p><a href="{{route('activities')}}">Events</a></p>
                <p><a href="{{route('faq')}}">FAQ</a></p>
                <p><a href="{{route('scholarships')}}">Scholarships</a></p>
            </div>
            <div class="col-6 col-md-4 py-2">
                <h4 class="footer-title">Support</h4>
                <p><a href="tel:+254716608066"><i class="fa fa-phone"></i>  0716608066</a></p>
                <p><a href="tel:+254732608066"><i class="fa fa-phone"></i>  0732608066</a></p>
                <p><a href="mailto:info@emobilis.org?Subject=Inquiry" target="_top"><i class="fa fa-envelope"></i>  info@emobilis.org</a></p>
            </div>
        </div>
        <div class="row">
            <p class="text-center" style="color: white; font-size: 10px">Copyright © {{date("Y")}}  eMobilis Technology Training Institute. All rights reserved.</p>
        </div>
    </div>
</footer>

{{--TODO fix this jquery --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>--}}
{{--<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>--}}
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>


@yield('extra-js-links')
<!-- GetButton.io widget -->
<script type="text/javascript">
    $(document).ready(function(){
        $("#testimonial-slider").owlCarousel({
            items:3,
            itemsDesktop:[1000,3],
            itemsDesktopSmall:[979,2],
            itemsTablet:[768,2],
            itemsMobile:[650,1],
            pagination:true,
            autoPlay:true
        });
    });

    $(document).ready(function () {
        var silder = $(".owl-carousel");
        silder.owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: false,
            items: 1,
            stagePadding: 20,
            center: true,
            nav: false,
            margin: 50,
            dots: true,
            loop: true,
            responsive: {
                0: { items: 1 },
                480: { items: 2 },
                575: { items: 2 },
                768: { items: 2 },
                991: { items: 3 },
                1200: { items: 4 }
            }
        });
    });


    (function () {
        var options = {
            whatsapp: "+254716608066", // WhatsApp number
            call_to_action: "Message us", // Call to action
            button_color: "#FF6550", // Color of button
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = 'https:', host = "getbutton.io", url = proto + '//static.' + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name" : "eMobilis Mobile Technology Institute",
    "url": "https://emobilis.ac.ke",
    "sameAs" : [
            "https://www.facebook.com/groups/emobilis/"
        ]
}

</script>
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name" : "eMobilis Mobile Technology Institute",
    "url": "https://emobilis.ac.ke",
    "logo": "https://emobilis.ac.ke/images/logo.jpg",
    "image": "https://emobilis.ac.ke/images/gallery/two.jpg",
    "description": "We are a technology training institute that trains on technologies such as Android, HTML, PHP, MYSQL, Python, Data Science amongst other courses.",
    "telephone": "0716608066",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Nairobi",
        "addressRegion": "Kenya",
        "streetAddress": "Kipro Center, Sports Road, Westlands, Near Delta, Nairobi",
        "postalCode": "P.O Box 939-00600 Sarit Center Nairobi"
    },
    "openingHours": [
      "Mon-Fri 8.00am-5.00pm"
    ]
}
</script>
</body>
</html>