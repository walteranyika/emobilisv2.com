@extends("layouts.master")
@section("content")
    <section class="container-fluid bootcamps-main-header d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 text-center">
                    <h1 class="pt-3 animate__animated  animate__slideInLeft">What is Coding Bootcamps</h1>
                    <p class="animate__animated  animate__zoomIn">Coding bootcamps are immersive training programs that help students from all backgrounds transition into a tech career. </p>
                    <p  class="animate__animated  animate__zoomIn">No previous coding experience is required. Students use hands-on projects to build  applications and learn the ins-and-outs of  development in a completely immersive environment. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid">
        <div class="container">
            <div class="row py-4 gy-5 justify-content-center">
                <div class="col-md-4">
                    <div class="card card-custom bg-white border-white border-0">
                        <div class="card-custom-img" style="background-color: #4158D0;background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);"></div>
                        <div class="card-custom-avatar">
                            <img class="img-fluid" src="{{asset('images/android.svg')}}" alt="Android" />
                        </div>
                        <div class="card-body text-center" style="overflow-y: auto">
                            <h4 class="card-title">Android Bootcamps</h4>
                            <p class="card-text">Android development bootcamps teach students the technologies and languages required to build apps for Android smartphones. These technologies include Android Studio, Java, and XML, plus students learn how to launch their apps on the Google Play store.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-custom bg-white border-white border-0">
                        <div class="card-custom-img" style="background-color: #0093E9;background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);"></div>
                        <div class="card-custom-avatar">
                            <img class="img-fluid" src="{{asset('images/full-stack.svg')}}" alt="Android" />
                        </div>
                        <div class="card-body text-center" style="overflow-y: auto">
                            <h4 class="card-title">Full Stack Development</h4>
                            <p class="card-text">When you're fully immersed in our three full stack curriculum, you'll master the fundamental building blocks of web and software development, making you a highly valuable, desirable asset throughout your career.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-custom bg-white border-white border-0">
                        <div class="card-custom-img" style="background-color: #FBAB7E;background-image: linear-gradient(62deg, #FBAB7E 0%, #F7CE68 100%);"></div>
                        <div class="card-custom-avatar">
                            <img class="img-fluid" src="{{asset('images/logos/python.png')}}" alt="Android" />
                        </div>
                        <div class="card-body text-center" style="overflow-y: auto">
                            <h4 class="card-title">Django Framework</h4>
                            <p class="card-text">We will teach you the latest technologies for building great web applications with Python 3 and Django. But we don't just teach that, we also teach the Front End technologies you need to know, including HTML, CSS, and Javascript.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-custom bg-white border-white border-0">
                        <div class="card-custom-img" style="background-color: #8BC6EC;background-image: linear-gradient(135deg, #8BC6EC 0%, #9599E2 100%);"></div>
                        <div class="card-custom-avatar">
                            <img class="img-fluid" src="{{asset('images/logos/laravel.png')}}" alt="Android" />
                        </div>
                        <div class="card-body text-center" style="overflow-y: auto">
                            <h4 class="card-title">Laravel Framework</h4>
                            <p class="card-text">PHP is still the most commonly used backend language on the internet. Laravel is its most popular framework. These bootcamps teach it.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection