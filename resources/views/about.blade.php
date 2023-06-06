@extends("layouts.master")

@section("content")

    <section class="container-fluid mission-section">
        <div class="container">
            <div class="row  justify-content-center">
                <div class="col-sm-8 text-center">
                    <h1>Our Mission</h1>
                    <p>The mission of eMobilis Training Institute is to create opportunities for African youth by training them on digital, software and technological skits. This prepares them for the future of work by equipping them with marketable, industry driven skills.</p>
                    <p>Our goal is to ensure that our talented youth are available and trained in order to meet the growing opportunities and needs of the ICT Industry in Africa.</p>
                    <p>We also envision an explosion of technology innovation and the creation of successful tech ventures by local developers from across the country with a zeal for changing the world through harnessing the power of their technology training for social good.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="courses-offered container-fluid">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 text-center">
                     <h2>Our Courses</h2>
                </div>
                <div class="col-sm-6 d-flex align-items-center">
                    <ul class="courses-list">
                        <li>Full Stack Software Development courses i.e python, android, react, javascript</li>
                        <li>Web Development</li>
                        <li>Android App Development</li>
                        <li>Data Science</li>
                        <li>Laravel</li>
                        <li>React and JavaScript</li>
                        <li>Python and Django Framework</li>
                        <li>Cyber Security</li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <img src="{{asset("icons/courses.svg")}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="our-programs container-fluid bg-light">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 text-center">
                    <h2>Programs</h2>
                </div>
                <div class="col-sm-6">
                    <img src="{{asset("icons/collaboration.svg")}}" class="img-fluid" alt="">
                </div>
                <div class="col-sm-6 d-flex align-items-center">
                    <ul class="courses-list">
                        <li>Digital Skills on Google</li>
                        <li>Work at Ajira Digital Online</li>
                        <li>Coding Bootcamps at Mobigirlz Digital Literacy University</li>
                        <li>University Coding Bootcamps</li>
                        <li>Hackathons</li>
                        <li>Development of software using JavaScript and Animate for KICD projects</li>
                        <li>Python and Django Framework</li>
                        <li> Africa Code Week</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid mission-section">
        <div class="container">
            <div class="row  justify-content-center">
                <div class="col-sm-8 text-center">
                    <h1>Our Vision</h1>
                    <p>Our vision at eMobilis is to empower Kenyan youth to tap into the myriad opportunities that the mobile, technology and software development industry offers so that they can innovate, create and improve their situation in life through use of digital tools.</p>
                    <p>Given the global predictions that the digital economy will continue to grow exponentially throughout Africa, and especially in Kenya, eMobilis Technology Training Institute is a catalyst to enable Africans from all walks of life to benefit from this social/economic revolution—not just in greater access of information, but also in leading design and content development. We hope our efforts will stimulate economic growth and empower African youth.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid timeline-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 text-center">
                    <img src="{{asset('images/icons/milestones-header.png')}}" alt="eMobilis" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 py-4">
                    <div style="display:inline-block;width:100%;overflow-y:auto;">
                        <ul class="timeline timeline-horizontal">
                            <li class="timeline-item">
                                <div class="timeline-badge primary"><i class="glyphicon glyphicon-check"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Licensed</h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> 2010</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Licensed by MOHEST and accredited as a TVET Institution after rigorous inspection, Quality assurance checks.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-badge success"><i class="glyphicon glyphicon-check"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Nokia Symbian Training</h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> 2011</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Selected by Nokia to deploy Symbian Training programs and scholarships for competitively selected University students.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-badge info"><i class="glyphicon glyphicon-check"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Safaricom Incubation Program</h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> 2012</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Engaged by Safaricom to design and implement the Incubation program for students of the Safaricom Academy Masters class at Strathmore University.</p>
                                    </div>
                                </div>
                            </li>

                            <li class="timeline-item">
                                <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Mlab Formation</h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> 2014</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Formed Mlab Est Africa in consortium with iHub and UoN based on winning a World Bank Bid to host Africa’s first ever Regional Mobile Laboratory for incubating tech startup’s, Training Developers, research and Pivot East.</p>
                                    </div>
                                </div>
                            </li>

                            <li class="timeline-item">
                                <div class="timeline-badge warning"><i class="glyphicon glyphicon-check"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">KEMRI Training</h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> 2015</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>KEMRI IT Staff custom Android training for data collection tools and Apps.</p>
                                    </div>
                                </div>
                            </li>



                            <!--Second-->
                            <li class="timeline-item">
                                <div class="timeline-badge primary"><i class="glyphicon glyphicon-check"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <p><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> 2015</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Global Entrepreneurship Summit hosted by President Obama at the UNEP headquarters- eMobilis was invited and attended as a leading tech training/ youth development player in Kenya .</p>
                                    </div>
                                </div>
                            </li>

                            <li class="timeline-item">
                                <div class="timeline-badge info"><i class="glyphicon glyphicon-check"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Award</h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> 2015</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Won the ICT Association of Kenya's Excellence Award for “Best Use of ICT in Education” at a Gala Dinner at Hilton Hotel.</p>
                                    </div>
                                </div>
                            </li>

                            <li class="timeline-item">
                                <div class="timeline-badge success"><i class="glyphicon glyphicon-check"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <p><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> 2016</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Multilingual SHG App and Content Management System Developed for Code Innovation USA (Funded by Bill and Melinda Gates Foundation) to support over 3k groups in Ethiopia, Malawi, Kenya and India to create and effectively manage their groups through curriculum training on a device.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-badge info"><i class="glyphicon glyphicon-check"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">MobiGirlz Initiative</h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> 2016</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>MobiGirlz initiative launched to support, mentor, train and advance young women in tech in order to address the very low number of young women benefiting from the ICT industry.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-badge danger"><i class="glyphicon glyphicon-check"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Facebook Conference</h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> 2016</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Facebook F8 Developer Conference in Fort Mason, San Francisco-  eMobilis was invited and attended the Social for Good and main conference as an Applications Developer with a social impact App.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-badge warning"><i class="glyphicon glyphicon-check"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Bootcamp</h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> 2016</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Microsoft Windows Phone Software Bootcamp at JKUAT with a mini Grad and Award Ceremony.</p>
                                    </div>
                                </div>
                            </li>

                            <li class="timeline-item">
                                <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">App Development</h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> 2016</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>eKit App- Client Software Development Division- designed and created a Dynamic, Custom video based Mobile Learning App for Financial Sector Deepening to enable rural citizens in Kenya to form, manage and successfully operate Savings Groups.</p>
                                    </div>
                                </div>
                            </li>


                            <!-- Third row -->

                            <li class="timeline-item">
                                <div class="timeline-badge primary"><i class="glyphicon glyphicon-check"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">DotConnect Program</h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> 2016</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>DotConnect program- eMobilis won the inaugural Miss Africa Seed competition and offered full scholarships for 28 young women to undertake a 4 month All Female Software Development Class.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-badge success"><i class="glyphicon glyphicon-check"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <p><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> 2016</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Google Digital Skills Program- eMobilis selected as a key partner of 16 in Africa by Google and engaged to Train youth in Universities, TVET’S, Youth Groups, NYS across Kenya, Rwanda and Uganda to empower them on using social media, YouTube, Search Engine Optimization etc to access economic opportunities.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-badge info"><i class="glyphicon glyphicon-check"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Africa Code Week</h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> 2017</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Africa Code Week planned and conducted by eMobilis in Kibera and Kangemi Resource Centers for young learners.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-badge danger"><i class="glyphicon glyphicon-check"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">KNATCOM Training</h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> 2017</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>KNATCOM contracted eMobilis to conduct several Coding Bootcamps for youth themed “Mobile Apps for Sustainable Development.</p>
                                    </div>
                                </div>
                            </li>

                            <li class="timeline-item">
                                <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Tech Talk</h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> 2018</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Tech Talk Speaker series launched at Kenya National Theatre.</p>
                                    </div>
                                </div>
                            </li>

                            <!--Second-->
                            <li class="timeline-item">
                                <div class="timeline-badge primary"><i class="glyphicon glyphicon-check"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Cyber Security</h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> 2019</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>eMobilis launches new courses on Data Science and Cyber Security.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-badge success"><i class="glyphicon glyphicon-check"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Graduation</h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> 2019</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>7th Annual Graduation for over 150 Students held in August with Keynote speakers including senior staff from Microsoft, Andela, IBM and Safeboda.</p>
                                    </div>
                                </div>
                            </li>


                            <li class="timeline-item">
                                <div class="timeline-badge danger"><i class="glyphicon glyphicon-check"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Ajira Program</h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> 2020</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Ajira Digital program phase 2 launched with the Ministry of ICT, Innovation and Youth through funding from the Mastercard Foundation’s Young Africa Works strategy.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-badge warning"><i class="glyphicon glyphicon-check"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Award</h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> 2020</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Nominated for DIAR National Award in the category of Diversity and Inclusion Opportunities for youth employment.</p>
                                    </div>
                                </div>
                            </li>

                            <li class="timeline-item">
                                <div class="timeline-badge info"><i class="glyphicon glyphicon-check"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Award</h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> 2020</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Presidential Digi-Talent Program Cohort IV Winners for the Best Private Company Sectors  on the <b>Category of Training and Certification,Mentorship,Attachment,Employment</b>.</p>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="container-fluid our-partners py-5">
        <div class="container">
            <h1 class="text-center">Our Partners</h1>
            <div class="row text-center">
                <div class="col-6 col-sm-4 col-md-3 py-3" >
                    <img src="{{asset('images/logos/google.jpg')}}" alt="eMobilis" class="img-fluid">
                </div>
                
                <div class="col-6 col-sm-4 col-md-3  py-3 ">
                    <img src="{{asset('images/logos/microsoft.png')}}" alt="eMobilis" class="img-fluid">
                </div>

                <div class="col-6 col-sm-4 col-md-3  py-3 ">
                    <img src="{{asset('images/logos-new/safaricom-twaweza.png')}}" alt="eMobilis" class="img-fluid">
                </div>
                <div class="col-6 col-sm-4 col-md-3  py-3 ">
                    <img src="{{asset('images/logos-new/ihub-logo.jpg')}}" alt="eMobilis" class="img-fluid">
                </div>
                
                <div class="col-6 col-sm-4 col-md-3  py-3 ">
                    <img src="{{asset('images/logos-new/ministry_edu-logo.jpg')}}" alt="eMobilis" class="img-fluid">
                </div>
                <div class="col-6 col-sm-4 col-md-3  py-3 ">
                    <img src="{{asset('images/logos-new/kepsa-logo.jpg')}}" alt="eMobilis" class="img-fluid">
                </div>
                
                <div class="col-6 col-sm-4 col-md-3  py-3 text-center" >
                    <img style="margin: 0 auto" src="{{asset('images/logos-new/ministry_edu-logo.svg')}}" alt="eMobilis" width="70%" class="img-fluid">
                </div>
                
                <div class="col-6 col-sm-4 col-md-3  py-3 ">
                    <img src="{{asset('images/logos-new/kicd-logo.jpg')}}" alt="eMobilis" class="img-fluid">
                </div>
          
                <div class="col-6 col-sm-4 col-md-3  py-3 ">
                    <img src="{{asset('images/logos-new/knchr-logo.jpg')}}" alt="eMobilis" class="img-fluid">
                </div>
                <div class="col-6 col-sm-4 col-md-3  py-3 ">
                    <img src="{{asset('images/logos-new/knatcom-logo.jpg')}}" alt="eMobilis" class="img-fluid">
                </div>

                <div class="col-6 col-sm-4 col-md-3  py-3 ">
                    <img src="{{'images/logos-new/NBSSI-Mastercard-Foundation.jpg'}}" alt="eMobilis" class="img-fluid top-padding">
                </div>
                <div class="col-6 col-sm-4 col-md-3  py-3 ">
                    <img src="{{'images/logos-new/FSD-Logo.jpg'}}" alt="eMobilis" class="img-fluid top-padding">
                </div>
            
                <div class="col-6 col-sm-4 col-md-3  py-3 ">
                    <img src="{{asset('images/logos-new/giz-avatar.jpeg')}}" alt="eMobilis" class="img-fluid">
                </div>
                <div class="col-6 col-sm-4 col-md-3  py-3 ">
                    <img src="{{asset('images/logos-new/eac-secreteriat.png')}}" alt="eMobilis" class="img-fluid">
                </div>

            </div>
        </div>
    </section>

    <section class="container-fluid why-choose-us py-5">
        <div class="container text-center">
            <h1>Why Choose Us</h1>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3 py-4">
                   <div class="card h-100 border-0 shadow">
                       <div class="card-body">
                           <h1 class="text-success mb-3"> <i class="fa fa-users" aria-hidden="true"></i></h1>
                           <h5 class="text-danger mb-3">World Class Training</h5>
                           <p>Get trained by seasoned Software Developers <br> as developers.</p>
                       </div>
                   </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 py-4">
                   <div class="card h-100 border-0 shadow">
                       <div class="card-body ">
                          <h1 class="text-success mb-3"> <i class="fa fa-free-code-camp" aria-hidden="true"></i></h1>
                           <h5 class="text-danger mb-3">Accredited</h5>
                           <p>Registered as a MOHEST institution to<br> offer certification</p>
                       </div>
                   </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 py-4">
                   <div class="card h-100 border-0 shadow">
                       <div class="card-body ">
                          <h1 class="text-success mb-3"> <i class="fa fa-cogs" aria-hidden="true"></i></h1>
                           <h5 class="text-danger mb-3">Marketable Skills</h5>
                           <p>Hands on practical technology training  <br>taught in well equipped labs.</p>
                       </div>
                   </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 py-4">
                    <div class="card h-100 border-0 shadow">
                        <div class="card-body ">
                            <h1 class="text-success mb-3"><i class="fa fa-trophy" aria-hidden="true"></i> </h1>
                            <h5 class="text-danger mb-3">Award Winning</h5>
                            <p class="pl-3 pr-3">Winner of several awards over the years from the ICT Association of Kenya (Best use of ICT in Education), iHub ( Top 100 Contributors to Kenya's Tech Ecosystem) DIAR, PDTP etc</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 py-4">
                    <div class="card h-100 border-0 shadow">
                        <div class="card-body ">
                            <h1 class="text-success mb-3"> <i class="fa fa-graduation-cap" aria-hidden="true"></i></h1>
                            <h5 class="text-danger mb-3">Experienced</h5>
                            <p>Over 10 years of experience in training youth across East Africa, conducting custom Corporate Training's and co-designing Hackathons, Youth up-skilling programs and University Boot Camps.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 py-4">
                    <div class="card h-100 border-0 shadow">
                        <div class="card-body ">
                            <h1 class="text-success mb-3"><i class="fa fa-university" aria-hidden="true"></i> </h1>
                            <h5 class="text-danger mb-3">Affordable and Practical</h5>
                            <p>Our courses involve coding daily in our computer Labs and we endeavour to keep our Tuition Fees accessible so most youth can learn IT.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection