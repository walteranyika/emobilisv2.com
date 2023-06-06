@extends("layouts.master")
@section('extra-css-links')
    <link rel="stylesheet" href="{{asset('css/testimonials.css')}}">
@endsection

@section("content")
    <section class="container-fluid mobigirlz-intro d-flex align-items-center py-5">
          <div class="container">
             <div class="row justify-content-center">
                 <div class="col-sm-8 text-center">
                     <h1 class="text-pink">MobiGirlz</h1>
                     <p class="long-text text-white p-3 rounded">MobiGirlz is a female only initiative launched in 2016 by eMobilis Mobile Technology Academy to advance, train and mentor young women and girls who have a passion in technology to access opportunities in the tech industry through exposure and by acquiring marketable technology skills. The program aims at empowering girls and young women in order to help them improve their livelihoods and those of their families, reduce poverty, help young women to innovate by applying their new technology skills like Android, Python development to promote sustainable development in Africa through use of technology and promote growth of the tech ecosystem through hiring more women into the tech industry.</p>
                 </div>
             </div>
          </div>
    </section>
    <section class="container-fluid achievements d-flex align-items-center py-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 d-flex align-items-center justify-content-center text-center">
                    <img src="{{asset('images/icons/achievement.svg')}}" style="height: 70%" class="img-fluid" alt="Achievement">
                </div>
                <div class="col-sm-7 d-flex align-items-center">
                  <div class="text-center">
                      <h2 class="text-pink">Our Accomplishments</h2>
                      <p>We have so far trained over 220 young women and girls in Mobile Software Development through grant and self-sponsoring. Grant funding and sponsorship has enabled us to take young women through trainings in Android Development, Python Development, Cyber Security, Graphic Design and Digital Literacy at the institution or different partner locations.</p>
                  </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid py-5 d-flex align-items-center mobigirlz-programs">
        <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <h2 class="text-pink"><img height="43px" src="{{asset('images/icons/vectorpaint_5.svg')}}" alt="eMobilis"> Scholarships</h2>
                    </div>
                    <div class="col-sm-4">
                        <h2 class="text-pink"><img height="43px" src="{{asset('images/icons/vectorpaint_5.svg')}}" alt="eMobilis"> Mentorship</h2>
                    </div>
                    <div class="col-sm-4">
                        <h2 class="text-pink"><img height="43px" src="{{asset('images/icons/vectorpaint_5.svg')}}" alt="eMobilis"> Programs</h2>
                    </div>
                    <div class="col-sm-4">
                        <h2 class="text-pink"><img height="43px" src="{{asset('images/icons/vectorpaint_5.svg')}}" alt="eMobilis"> Talks</h2>
                    </div>
                    <div class="col-sm-4">
                        <h2 class="text-pink"><img height="43px" src="{{asset('images/icons/vectorpaint_5.svg')}}" alt="eMobilis"> Events</h2>
                    </div>
                    <div class="col-sm-4">
                        <h2 class="text-pink"><img height="43px" src="{{asset('images/icons/vectorpaint_5.svg')}}" alt="eMobilis"> Community Activities</h2>
                    </div>
            </div>
        </div>
    </section>

    <section class="container-fluid py-5 d-flex align-items-center mobigirlz-program-details">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center text-pink">PROGRAMS</h2>
                </div>
                <div class="col-sm-4 quote d-flex align-items-center">
                    <h4 style="font-weight: lighter">&ldquo;A woman is a full circle. Within her is the power to create, nurture and transform&rdquo;<br><br> <b class="text-pink">~Diana Mariechild</b></h4>
                </div>
                <div class="col-sm-8 program-list d-flex align-items-center">
                    <ul class="courses-list">
                        <li>DotConnectAfrica – Miss Seed Inaugural Grant 2017 – Scholarships for an All female Coding Class.</li>
                        <li>International Girls in ICT Day – Events and Webinars.</li>
                        <li>Global Editathon – selected by Wikipedia to host the Kenya Node to feature notable women in tech.</li>
                        <li>Technovation Challenge ( by Safaricom Women in Technology)- On the Judging Panel to select Top Apps/ High School Teams.</li>
                        <li>Boot Camps at Universities.</li>
                        <li>Digital Literacy Courses in Kibera and Kangemi Resource Centers.</li>
                    </ul>

                </div>
            </div>
        </div>

    </section>

    <div class="container-fluid mobigirlz-workshops d-flex align-items-center pt-5">
        <div class="container">
            <div class="row">
                <h2 class="text-center text-pink mb-3">Some of Our Workshops</h2>
            </div>
            <div class="row gy-1 text-center">
                <a href="{{asset('images/girls/poster_1.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                    <img src="{{asset('images/girls/poster_1.jpg')}}" class="img-fluid h-75" alt="eMobilis">
                </a>
                <a href="{{asset('images/girls/poster_3.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                    <img src="{{asset('images/girls/poster_3.jpg')}}" class="img-fluid h-75" alt="eMobilis">
                </a>
                <a href="{{asset('images/girls/poster_2.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                    <img src="{{asset('images/girls/poster_2.jpg')}}" class="img-fluid h-75" alt="eMobilis">
                </a>
            </div>
        </div>
    </div>

    <section class="container-fluid mobigirlz-testimonials py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center text-pink">Testimonials</h2>
                </div>
                <div class="col-md-12">
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="testimonial">
                            <div class="content">
                                <p class="description">
                                    eMobilis was an amazing genesis in my tech journey. Am always grateful for the opportunity I had to learn and become a better person in this ever-growing field.
                                </p>
                            </div>
                            <div class="testimonial-pic">
                                <img src="{{asset('images/girls/meg_profile.jpg')}}" alt="eMobilis">
                            </div>
                            <div class="testimonial-review">
                                <h3 class="testimonial-title"><a href="{{route('profiles',['name'=>'margeret'])}}">Margeret Onyango</a></h3>
                                <span>Web Developer</span>
                            </div>
                        </div>

                        <div class="testimonial">
                            <div class="content">
                                <p class="description">
                                    I have always believed people who can write and read code control the world. It is a
                                    fundamental skill in today’s digital world.
                                </p>
                            </div>
                            <div class="testimonial-pic">
                                <img  src="{{asset('images/girls/Aagnes_profile.jpg')}}" alt="eMobilis">
                            </div>
                            <div class="testimonial-review">
                                <h3 class="testimonial-title"><a href="{{route('profiles',['name'=>'agnes'])}}">Agnes Talai</a></h3>
                                <span>Web Designer</span>
                            </div>
                        </div>

                        <div class="testimonial">
                            <div class="content">
                                <p class="description">
                                    I started with no knowledge in coding and using eMobilis as my starting point, I learnt how to code.  Now I work as a Software Engineer and couldn't be happier.
                                </p>
                            </div>
                            <div class="testimonial-pic">
                                <img  src="{{asset('images/girls/lydia_profile.jpg')}}" alt="eMobilis">
                            </div>
                            <div class="testimonial-review">
                                <h3 class="testimonial-title"><a href="{{route('profiles',['name'=>'lydia'])}}">Lydia Gathoni</a></h3>
                                <span>Web Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid support-objectives py-5 d-flex align-items-center" style="background: #e7e7e7">
        <div class="container">
            <h2 class="text-center text-pink" style="color: deeppink">Objectives</h2>
            <div class="row">
                <div class="col-sm-4 text-center">
                    <img src="{{asset('images/icons/service.svg')}}" alt="eMobilis" height="50px">
                    <h5  class="text-center mt-3">Support Young Women</h5>
                </div>

                <div class="col-sm-4 text-center">
                    <img src="{{asset('images/icons/bar-chart.svg')}}" alt="eMobilis"  height="50px">
                    <h5  class="text-center mt-3">Grow the tech industry through talented women</h5>
                </div>

                <div class="col-sm-4  text-center">
                    <img src="{{asset('images/icons/customers.svg')}}" alt="eMobilis"  height="50px">
                    <h5  class="text-center mt-3">Improve Livelihoods of Women</h5>
                </div>
            </div>
        </div>
    </div>

    <section class="container-fluid social-media py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-5 d-flex justify-content-around">
                    <a href="https://www.facebook.com/mobigirlz" target="_blank" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/mobigirlz/" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/MobbiGirlz" class="fa fa-twitter"></a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section("extra-js-links")
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.2/dist/index.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#testimonial-slider").owlCarousel({
                items:2,
                itemsDesktop:[1000,3],
                itemsDesktopSmall:[990,2],
                itemsTablet:[767,1],
                pagination:true,
                navigation:false,
                autoPlay:true
            });
        });
    </script>
@endsection