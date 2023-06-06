@extends("layouts.master")
@section("content")
    <div class="container">
        <div class="row courses-section py-3 gy-4">
            <div class="col-sm-6 col-md-4">
                <div class="card shadow   h-100">
                    <div class="card-header">
                        <img src="images/logos/full-stack.png" class="img-fluid" alt="Full Stack">
                    </div>
                    <div class="card-body">
                        <h4>Full Stack Software Development</h4>
                        <p>This course introduces students to a variety of coding languages like HTML5, Java, PHP, Python, so they may learn how to develop software and content for websites and mobile applications that use databases. Students produce a final project at the conclusion of the course, which is then presented to an audience of business executives. You'll gain knowledge of JAVA, Android, PHP, MySQL, HTML5, and the Bootstrap framework. All trainings take place at our Nairobi, Kenya, offices. Become a full stack software developer today.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('full-stack')}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card shadow   h-100">
                    <div class="card-header">
                        <img alt="eMobilis" src="{{asset('images/logos/data-science-components.png')}}" class="img-fluid"/>
                    </div>
                    <div class="card-body">
                        <h4>Data Science</h4>
                        <p>Discover your data analytics potential at one of Kenya's top coding schools. Develop career-ready skills for a data analyst. This Data Analysis course will help you develop the necessary abilities for an entry-level data analyst position.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route("data-science")}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card shadow   h-100">
                    <div class="card-header text-center">
                        <i class="fa fa-android" style="color:green; font-size: 160px;"></i>
                    </div>
                    <div class="card-body">
                        <h4>Android</h4>
                        <p>The course teaches students how to use Android, an OS from Google, to develop content and applications for mobile devices. Java, PHP, MySQL, an introduction to Android and Android architecture, user interface design, database connection, APIs, accessing Android platform capabilities, Android background services, and other modules are among the topics covered. Our Nairobi office has the course available.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route("android")}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card slideanim shadow   h-100">
                    <div class="card-header">
                        <img src="images/logos/digital-skills.png" class="img-fluid" alt="Digital Skills Fo Africa">
                    </div>
                    <div class="card-body">
                        <h4>Digital Skills For Africa</h4>
                        <p>Google offers a free training course with the goal of giving young people and small businesses the digital skills they need to compete and flourish in the contemporary economy: Come gain the digital skills you need to advance your profession, build your business, or simply boost your confidence. Start learning at eMobilis, one of Kenya's top coding schools.</p>
                    </div>
                    <div class="card-footer">
                        <a href="https://digitalskills.withgoogle.com/?gpid=52838" target="_blank" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card slideanim shadow   h-100">
                    <div class="card-header">
                        <img src="images/logos/python.png" class="img-fluid" alt="Python">
                    </div>
                    <div class="card-body">
                        <h4>Python</h4>
                        <p>Whether you have never programmed before, already know basic syntax, or want to learn about the
                            advanced features of Python, this course is for you! In this course we will teach you both
                            versions of Python (2 and 3) so you can easily adapt your skill set to either version!. You will
                            build data analysis tools and learn frameworks like Flask and Django. Visit eMobilis, one of Nairobi's top coding schools, to learn Python.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route("python")}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card slideanim shadow   h-100">
                    <div class="card-header">
                        <img alt="eMobilis" src="images/logos/ussd_icon.png" class="img-fluid"/>
                    </div>
                    <div class="card-body">
                        <h4>USSD</h4>
                        <p>This short specialized course offers participants with the skills to develop USSD based mobile
                            applications that allow fast, secure communication between the user and the application without
                            requiring an app that is downloaded. This technology works on all existing GSM mobile phones.
                            USSD is a protocol used by GSM cellular telephones to communicate with the service provider&#39;s
                            computers. You want to learn the course in Kenya? Check out the courses that eMobilis has to offer.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route("ussd")}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card slideanim shadow   h-100">
                    <div class="card-header">
                        <img alt="eMobilis" src="{{asset('images/logos/laravel.png')}}" class="img-fluid"/>
                    </div>
                    <div class="card-body">
                        <h4>Laravel</h4>
                        <p> This course is for PHP developers who wish to take their web development skills to the world stage. At eMobilis Kenya, we teach you how to use the world standard Laravel PHP framework for building advanced and interesting web applications. Hundreds of thousands of web developers and teams around the world use Laravel.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route("laravel")}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card slideanim shadow   h-100">
                    <div class="card-header">
                        <img alt="eMobilis" src="{{asset('images/logos/html-5.png')}}" class="img-fluid"/>
                    </div>
                    <div class="card-body">
                        <h4>HTML 5</h4>
                        <p>HTML5 is the latest version of the HTML coding languages and by far the best version. Not only is it more secure, faster and more responsive, but it also introduces a wide array of cutting-edge features that allow you to create some stunning interactions and animations on a range of devices in application development. Students will learn how to incorporate the HTML5 course features in the development of web pages and applications.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route("html-5")}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card slideanim shadow   h-100">
                    <div class="card-header">
                        <img alt="eMobilis" src="{{asset('images/logos/oracle.png')}}" class="img-fluid"/>
                    </div>
                    <div class="card-body">
                        <h4>Oracle DBMS</h4>
                        <p>Get a well-paying job as a Junior Oracle Database Administrator (DBA) by completing a 6-week free certification course to become a Database. Administrator (DBA). The ideas and Demos in the Oracle 11g/12c DBA course are introduced to the students in a step-by-step process so they may learn quickly. This course is perfect for you if you want to become an Oracle Database Administrator (Oracle DBA)!</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route("oracle")}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card slideanim shadow   h-100">
                    <div class="card-header">
                        <img alt="eMobilis" src="{{asset('images/logos/cyber-security.png')}}" class="img-fluid"/>
                    </div>
                    <div class="card-body">
                        <h4>Cyber Security</h4>
                        <p>If you are looking to upskill and learn about Cyber Security Expert, you can become one with the help of this professional course from being a beginner to a certified professional. The Cyber Security Course covers Windows 7, Windows 8, Windows 10, Mac OS, and Linux. It also covers the essential building blocks of your necessary skill set; you will comprehend the threat and vulnerability landscape through threat modelling and risk assessments.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route("cyber-security")}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card slideanim shadow h-100">
                    <div class="card-header">
                        <img alt="eMobilis" src="{{asset('images/logos/react.png')}}" class="img-fluid"/>
                    </div>
                    <div class="card-body">
                        <h4>React Js</h4>
                        <p>This best react course is apt for anyone who wishes to learn and program using React. It is a developer program with hooks included. It teaches programming in JavaScript using React and the Redux library. It also teaches the development of applications for app stores and web apps.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route("react")}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="{{route('enroll')}}" class="btn btn-danger btn-sm" style="position: fixed; bottom: 2em; left: 1em">Enroll Now</a>
@endsection