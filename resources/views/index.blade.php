@extends('layouts.master')

@section('content')

    <div id="carouselId" class="container carousel slide mt-2 py-3" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="3" aria-label="Fourth slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="4" aria-label="Fifth slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="5" aria-label="Sixth slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="6" aria-label="Seventh slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="images/sliders/slide_7.jpg" class="w-100 d-block img-carousel"
                     alt="First slide">
            </div>
            <div class="carousel-item">
                <img src="images/sliders/slidera3.jpg" class="w-100 d-block img-carousel"
                     alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="images/sliders/slidera2.jpg" class="w-100 d-block img-carousel"
                     alt="Third slide">
            </div>
            <div class="carousel-item">
                <img src="images/sliders/slide_4.jpg" class="w-100 d-block img-carousel"
                     alt="Third slide">
            </div>
            <div class="carousel-item">
                <img src="images/sliders/slide_5.jpg" class="w-100 d-block img-carousel"
                     alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="images/sliders/slide_6.jpg" class="w-100 d-block img-carousel"
                     alt="Third slide">
            </div>
            <div class="carousel-item">
                <img src="images/sliders/slidera1.jpg" class="w-100 d-block img-carousel"
                     alt="Third slide">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="container-fluid bg-light companies">
        <div class="container py-5">
            <div class="row text-center">
                <h1 class="my-3">
                    Welcome to eMobilis Technology Training Institute
                </h1>
                <h3 class="my-2">
                    WE HAVE TRAINED THE BEST AND FOR COMPANIES LIKE
                </h3>
            </div>
            <div class="row text-center my-4">
                <div class="col-sm-3">
                    <img src="{{asset('images/logos/google.png')}}" alt="eMobilis" class="img-fluid" width="200px">
                </div>
                <div class="col-sm-3">
                    <img src="{{asset('images/logos/safaricom.png')}}" alt="eMobilis" width="200px">
                </div>
                <div class="col-sm-3">
                    <img src="{{asset('images/logos/microsoft.png')}}" alt="eMobilis" width="200px">
                </div>
                <div class="col-sm-3">
                    <img src="{{asset('images/logos/knatcom.png')}}" alt="eMobilis" width="200px">
                </div>
            </div>
            <div class="row justify-content-center">
               <div class="col-sm-11 col-md-9">
                   <p class="text-center">
                       No matter what your background is, you can learn digital skills that employers and clients need. Web and App
                       developers earn $64,000 per year on average*, making it one of the highest-paying jobs that does not
                       require a college degree. Come to eMobilis, the best software development school in Nairobi and learn web and mobile app development.
                   </p>
               </div>
            </div>
        </div>
    </section>

    <section class="container-fluid courses py-4">

        <div class="row">
            <div class="col-12 text-center my-4">
                <h2 class="animate__animated animate__backInUp">
                    POPULAR COURSES
                </h2>
            </div>
        </div>

        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                    <div class="card border-0 rounded-0 shadow h-100 animate__animated animate__backInUp ">
                        <div class="card-header border-0">
                            <i class="fa fa-android text-success" aria-hidden="true"></i>
                        </div>
                        <div class="card-body text-center border-0">
                            <h4 class="card-title">Android</h4>
                            <p class="card-text">You can be the next Zuckerburg and create revolutionary applications like Uber or Facebook?At eMobilis training school you’ll learn how to develop Apps using Android devices. The course will take you from a novice android programmer with hardworking and dedication.</p>
                        </div>
                        <div class="card-footer border-0">
                            <a class="btn btn-success rounded-0 d-block w-100" href="{{route('android')}}">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                    <div class="card border-0 rounded-0 shadow h-100 animate__animated animate__backInUp ">
                        <div class="card-header border-0" style="color: #FF5721">
                            <i class="fa fa-html5" aria-hidden="true"></i>
                        </div>
                        <div class="card-body text-center border-0">
                            <h4 class="card-title">Full Stack</h4>
                            <p class="card-text">At eMobilis Institute in Nairobi you will learn the whole stack, from creating stunning websites to building awesome mobile applications and developing powerful backends to power web applications .</p>
                        </div>
                        <div class="card-footer border-0">
                            <a class="btn btn-success rounded-0 d-block w-100" href="{{route('full-stack')}}">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                    <div class="card border-0 rounded-0 shadow h-100 animate__animated animate__backInUp ">
                        <div class="card-header border-0 text-center">
                            <img src="images/logos/python.png"  style="max-height: 8.5em" alt="Python">
                        </div>
                        <div class="card-body text-center border-0">
                            <h4 class="card-title">Python</h4>
                            <p class="card-text">Explore what it means to store and manipulate data, make decisions with your program, and leverage the
                                power of Python.</p>
                        </div>
                        <div class="card-footer border-0">
                            <a class="btn btn-success rounded-0 d-block w-100" href="{{route('python')}}">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                    <div class="card border-0 rounded-0 shadow h-100 animate__animated animate__backInUp ">
                        <div class="card-header border-0"  style="color: #365ff3">
                            <i class="fa fa-database card-img-top" aria-hidden="true"></i>
                        </div>
                        <div class="card-body text-center border-0">
                            <h4 class="card-title">Data Science</h4>
                            <p class="card-text">Do you want to learn Data Science in Kenya? Then our course is perfect for you. It was developed by experts to deliver hands-on skills in Data Analysis, Modelling, Visualization and Machine Learning concepts .</p>
                        </div>
                        <div class="card-footer border-0">
                            <a class="btn btn-success rounded-0 d-block w-100" href="{{route('data-science')}}">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="demo">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-12">
                    <div id="testimonial-slider" class="owl-carousel">
                        @foreach($testimonials as $testimonial)
                            <div class="testimonial">
                                <span class="icon fa fa-quote-left"></span>
                                <p class="description">
                                    {{$testimonial['message']}}
                                </p>
                                <div class="testimonial-content">
                                    <div class="pic"><img src="{{asset('images/testimonials/'.$testimonial['image'])}}" width="100px"  alt=""></div>
                                    <h3 class="title">{{$testimonial['name']}}</h3>
                                    <span class="post">{{$testimonial['role']}}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
