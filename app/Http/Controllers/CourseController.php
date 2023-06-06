<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class CourseController extends Controller
{
    public function android()
    {
        SEOTools::setTitle('Android');
        SEOTools::setDescription('Android is the mobile operating system used on more devices around the world than any other platform. Learn how to create Android apps using Java and the powerful development tools available from Google.');
        SEOTools::opengraph()->setUrl(URL::current());
        SEOTools::setCanonical(URL::current());
        SEOTools::opengraph()->addProperty('type', 'webpage');
        SEOTools::twitter()->setSite('@eMobilis');
        SEOTools::jsonLd()->addImage('https://www.emobilis.ac.ke/images/gallery/x2.jpg');

        SEOMeta::setKeywords(["android development schools in kenya", "mobile development", "game development courses in kenya", "app development training in nairobi", "software development courses in kenya", "mobile programming", "Android courses Kenya", "Learn Android development in Nairobi", "Mobile App programming schools in Nairobi"
        ]);
        $course = [
            "icon" => "programming.svg",
            "icon-2" => "tech-2.svg",
            "title" => "Android Development",
            "description" => "Our complete app development courses teaches you how to code using Kotlin and build beautiful Android apps for phones and tablets. Even if you have ZERO programming experience. The course is instructor led and builds your programming knowledge through making real world apps. By the end of this course, you will be fluently programming in Java and be ready to make your very own apps or start a freelancing job as an Android developer.",
            "why" => [
                "title" => "Why should you learn Android App Development",
                "points" => [
                    "Numerous & Variety of Job Opportunities to Choose from",
                    "A career in Android Development gives you all the flexibility and the ability to work from anywhere you want.",
                    "Easy to Learn",
                ]
            ],
            "cost" => [
                "title" => "Cost, Duration, Intake",
                "points" => [
                    "This course costs Ksh 35,000",
                    "It will take two months to complete",
                    "Registrations are Ongoing.",
                ]
            ],
            "benefits" => [
                "title" => "What Will You Learn",
                "points" => [
                    "Build any Android app you want",
                    "Build apps for your business",
                    "Learn how to use databases to store data from android applications",
                    "Understand the concepts and techniques used in creating applications.",
                    "Submit your apps to Google Play and generate revenue with Google Pay and Google Ads",
                    "Have a good overview of the Java programming language",
                    "Debug an Android Application",
                    "Use Explicit and Implicit Intents",
                    "Create a Custom List View",
                    "Make use of Fragments",
                    "You will learn to debug (fix your code)",
                    "You will learn to use an API to bring data from a database to a graphical interface",
                    "You’ll have EXPERT LEVEL knowledge of the Java programming language and know exactly how each process of Android development works.",
                    "Make pretty much any Android app you like (your only limit is your imagination)",
                    "Use Shared Preferences, Files and SQLite",
                    "Become a professional app developer, take freelance gigs and work from anywhere in the world",
                    "Work with New Firebase from Google and Web services (RESTful API calls)",
                    "Work with user location and map(Like Uber)",
                    "Work with camera and other phone hardwares",
                ]
            ],
            "requirements" => [
                "title" => "Requirements",
                "points" => [
                    "You only need to Know how to click, copy and paste",
                    "No programming experience required for this course",
                    "Be ready to learn an insane amount of awesome stuff",
                    "Prepare to build world class mobile apps!",
                ]
            ],
        ];
        return view('courses.index', compact("course"));
    }

    public function python()
    {
        SEOTools::setTitle('Python');
        SEOTools::setDescription('Python is a widespread, general purpose, open source programming language used for many different purposes. Focusing on a clean syntax and ease of use, it’s great for beginners and professionals alike.');
        SEOTools::opengraph()->setUrl(URL::current());
        SEOTools::setCanonical(URL::current());
        SEOTools::opengraph()->addProperty('type', 'webpage');
        SEOTools::twitter()->setSite('@eMobilis');
        SEOTools::jsonLd()->addImage('https://www.emobilis.ac.ke/images/gallery/x2.jpg');
        SEOMeta::setKeywords(["python courses in kenya", "python kenya", "Machine Learning courses in Kenya", "Data Analysis", "python for data",  "Data visualisation", "Data analytics", "software development schools in kenya", "programming schools in kenya", "python programming in kenya", "learn how to code in python in kenya", "Schools offering python programming"]);
        $course = [
            "icon" => "programming.svg",
            "icon-2" => "tech-2.svg",
            "title" => "Python App Development",
            "description" => "The Python Course is a carefully designed course where you will learn how to build real life applications in Python ranging from database web apps, to web scraping and many more.
                              Through a combination of instructor led sessions, videos, code examples, quizzes, exercises, and projects, this course will teach you how to think Python and you will design and build your own real world applications.",
            "why" => [
                "title" => "Why should you choose this particular course",
                "points" => [
                    "Python can be used for everything from web development to software development and data science applications.",
                    "Super easy to learn"
                ]
            ],
            "cost" => [
                "title" => "Cost, Duration, Intake",
                "points" => [
                    "This course costs Ksh 35,000",
                    "It will take two months to complete",
                    "Registrations are Ongoing.",
                ]
            ],
            "benefits" => [
                "title" => "What Will You Learn",
                "points" => [
                    "Learn to use Python professionally, learning latest Python 3!",
                    "Understand complex topics, like decorators.",
                    "Learn to use Object Oriented Programming with classes!",
                    "Build a complete understanding of Python from the ground up!",
                    "UNDERSTAND data structures and how to access the web with Python",
                    "The skills to get a JOB with Python under your belt as taught by the best",
                    "Use Python for building interactive web apps with Flask.",
                    "Use Python for scraping data from websites with Beautiful Soup.",
                    "Use Python to analyze and visualize stock market data.",
                    "Use Python for database applications.",
                    "Use and fully understand object-oriented design.",
                    "Implement a full Models-Views-Templates structure for your site",
                    "Create data visualizations using matplotlib and the seaborn modules with python.",
                    "Learn how to work with various data formats within python, including: JSON,HTML, and MS Excel Worksheets.",
                    "Use the numpy library to create and manipulate arrays.",
                ]
            ],
            "requirements" => [
                "title" => "Requirements",
                "points" => [
                    "You only need to Know how to click, copy and paste",
                    "No programming experience required for this course",
                    "Be ready to learn an insane amount of awesome stuff",
                    "Prepare to build world class web apps!",
                ]
            ],
        ];
        return view('courses.index', compact("course"));

    }

    public function full_stack()
    {
        SEOTools::setTitle('Fullstack');
        SEOTools::setDescription('Full stack developers are highly in-demand. They know how to work with the frontend, backend, and server side of a web application');
        SEOTools::opengraph()->setUrl(URL::current());
        SEOTools::setCanonical(URL::current());
        SEOTools::opengraph()->addProperty('type', 'webpage');
        SEOTools::twitter()->setSite('@eMobilis');
        SEOTools::jsonLd()->addImage('https://www.emobilis.ac.ke/images/gallery/x2.jpg');
        SEOMeta::setKeywords(["software development courses in kenya",
            "Coding Schools in Kenya",
            "learn Object Oriented Programming",
            "Web Design training in kenya",
            "Bootstrap",
            "HTML and CSS",
            "Bootstrap", "Custom Software Development course",
            "software development schools in kenya",
            "coding bootcamp in Nairobi kenya",
            "emobilis software development courses"]);
        $course = [
            "icon" => "programming.svg",
            "icon-2" => "tech-2.svg",
            "title" => "Full Stack Developer Course(HTML, CSS, PHP, MySQL, Kotlin and Android)",
            "description" => "The only course you need to learn web development, Backend Development and Android App Development.In this course, you will discover the power of Android app development,Web Development and obtain the skills to dramatically increase your career prospects as a software developer.",
            "why" => [
                "title" => "Why should you choose this particular course",
                "points" => [
                    "This course includes projects in which we will make real life applications from scratch , where we learn how to build features like signing up the user, logging in the user and signing him out.",
                    "Learn how programming logic works rather than just watching someone code. We explain each and every line of code by providing logical reasoning for everything which we do.",
                    "With this course, you can build any kind of application. Almost all the concepts are included in the course which ensures that once you have completed the course you can build your very own applications.",
                ]
            ],
            "cost" => [
                "title" => "Cost, Duration, Intake",
                "points" => [
                    "This course costs Ksh 70,500",
                    "It will take four months to complete",
                    "Registrations are Ongoing."
                ]
            ],
            "benefits" => [
                "title" => "What Will You Learn",
                "points" => [
                    "Make REAL web applications using cutting-edge technologies",
                    "Think like a developer. Become an expert at Googling code questions!",
                    "Implement responsive navigation bars on websites",
                    "Create a beautiful, responsive landing page for a startup",
                    "Create a beautiful animated todo list application",
                    "Understand the ins and outs of HTTP requests",
                    "Make a beautiful, responsive photographer's portfolio page",
                    "Implement user authentication",
                    "You will learn MySQL",
                    "You will learn how to launch your application online(Hosting on VPS)",
                    "You will learn to debug (fix your code)",
                    "You will learn to use an API to bring data from a database to a graphical interface",
                    "You’ll have EXPERT LEVEL knowledge of the Java programming language and know exactly how each process of Android development works.",
                    "Make pretty much any Android app you like (your only limit is your imagination)",
                    "Submit your apps to Google Play and generate revenue with Google Pay and Google Ads",
                    "Become a professional app developer, take freelance gigs and work from anywhere in the world",
                    "Work with New Firebase from Google and Web services (RESTful API calls)",
                    "Work with user location and map(Like Uber)",
                    "Work with camera and other phone hardwares",
                ]
            ],
            "requirements" => [
                "title" => "Requirements",
                "points" => [
                    "You only need to Know how to click, copy and paste",
                    "No programming experience required for this course",
                    "Be ready to learn an insane amount of awesome stuff",
                    "Prepared to build real web apps and build mobile apps!",
                ]
            ],
        ];
        return view('courses.index', compact("course"));
    }

    public function data_science()
    {
        SEOTools::setTitle('Fullstack');

        SEOMeta::setKeywords([
            "universities offering data science in kenya", "bsc data science kenya", "data science jobs in kenya", "learn data science Kenya", "Machine Learning", "Data Analysing courses in kenya", "Data Analysis", "Data visualisation", "Data analytics", "best data science schools in kenya", "data science fees structure", "diploma in data science"
        ]);

        $course = [
            "icon" => "programming.svg",
            "icon-2" => "tech-2.svg",
            "title" => "Data Science and Machine Learning",
            "description" => "Build a recommendation system and learn the science behind one of the most popular and successful data science techniques. You will learn about training data, and how to use a set of data to discover potentially predictive relationships.",
            "why" => [
                "title" => "Why should you learn Data Science",
                "points" => [
                    "Data Science is a rewarding career that allows you to solve some of the world's most interesting problems!",
                    "Data Science Jobs are among the most sought-after roles according to Linkedin reports.",
                    "Build an expertise in the most widely-used analytics tools and technologies.",
                    "Develop the ability to independently solve business problems using analytics and data science.",
                    "Understand the applications and implications of data science in different industries.",
                    "Build models to predict future trends and use them to inform business strategy."
                ]
            ],
            "cost" => [
                "title" => "Cost, Duration, Intake",
                "points" => [
                    "This course costs Ksh 60,000",
                    "It will take three months to complete",
                    "Registrations are Ongoing.",
                ]
            ],
            "benefits" => [
                "title" => "What Will You Learn",
                "points" => [
                    "The course provides the entire toolbox you need to become a data scientist",
                    "Be able to create Machine Learning algorithms in Python, using NumPy, statsmodels and scikit-learn",
                    "Improve Machine Learning algorithms by studying underfitting, overfitting, training, validation, n-fold cross validation, testing, and how hyperparameters could improve performance",
                    "Understand the concepts and techniques used in creating applications",
                    "Successfully perform all steps in a complex Data Science project",
                ]
            ],
            "requirements" => [
                "title" => "Who is Eligible?",
                "points" => [
                    "Good grasp one or more of the programming languages, preferably R or Python",
                    "Be ready to learn an insane amount of awesome stuff",
                    "Intermediate level understanding of databases.",
                    "A good grade and understanding of Statistics and Probability"
                ]
            ],
        ];
        return view('courses.index', compact("course"));

    }

    public function html5()
    {
        SEOTools::setTitle('HTML5 and CSS3');
        SEOTools::setDescription('Learn modern HTML5, CSS3 and web design by building a stunning websites. The course includes in depth training on how to use flexbox and CSS Grid');
        SEOTools::opengraph()->setUrl(URL::current());
        SEOTools::setCanonical(URL::current());
        SEOTools::opengraph()->addProperty('type', 'webpage');
        SEOTools::twitter()->setSite('@eMobilis');
        SEOTools::jsonLd()->addImage('https://www.emobilis.ac.ke/images/gallery/x2.jpg');

        SEOMeta::setKeywords(["Software development schools in kenya", "HTML development training", "learn web development", "HTML and CSS", "Bootstrap", "Web development courses in nairobi kenya", "app development training in nairobi", "development courses in kenya"]);
        $course = [
            "icon" => "programming.svg",
            "icon-2" => "tech-2.svg",
            "title" => "HTML 5 and CSS3",
            "description" => "Learn modern HTML5, CSS3 and web design by building stunning websites",
            "why" => [
                "title" => "Why HTML 5 and CSS3",
                "points" => [
                    "If you want to make web pages, start a career in web design, web development or even web journalism, the basic knowledge of HTML and CSS is a must have.",
                    "HTML is the foundation of all web pages. It defines the structure of a page, while CSS defines its style. HTML and CSS are the beginning of everything you need to know to make your first web page!"
                ]
            ],
            "cost" => [
                "title" => "Cost, Duration, Intake",
                "points" => [
                    "This course costs Ksh 18,000",
                    "It will take one month to complete",
                    "Registrations are Ongoing.",
                ]
            ],
            "benefits" => [
                "title" => "What Will You Learn",
                "points" => [
                    "Build Multiple High Quality Website & UI Projects",
                    "Flexbox & CSS Grid",
                    "Advanced positioning of elements with CSS",
                    "Website Hosting & Deployment With FTP & Git",
                    "Become fluent in the toolchain supporting React, including NPM, Webpack, Babel, and ES6/ES2015 Javascript syntax",
                    "HTML5 Semantic Layout & CSS Fundamentals",
                    "CSS Variables, Transitions, Dropdowns, Overlays & More",
                    "Explore the newest HTML5 techniques for mobile-devices",
                    "Create your own mobile web apps with hardware and offline access.",
                    "Important CSS concepts such as the box model, positioning schemes, inheritance, solving selector conflicts, etc..",
                    "How to make websites work on every possible mobile device (responsive design).",
                    "Developer skills such as reading documentation, debugging, and using professional tools",
                    "Git and Github.",
                ]
            ],
            "requirements" => [
                "title" => "Requirements",
                "points" => [
                    "No technical background requirements, we will take you step-by-step to expert level.",
                    "Desire to learn",
                    "Be ready to learn an insane amount of awesome stuff",
                ]
            ],
        ];
        return view('courses.index', compact("course"));
    }

    public function laravel()
    {
        SEOTools::setTitle('Laravel');
        SEOTools::setDescription('Learn how to develop with Laravel from our top-rated web development instructors. Whether you’re interested in developing web apps in the Laravel PHP framework, or building a RESTful API with Laravel,this course is designed  to help you become a better web developer.');
        SEOTools::opengraph()->setUrl(URL::current());
        SEOTools::setCanonical(URL::current());
        SEOTools::opengraph()->addProperty('type', 'webpage');
        SEOTools::twitter()->setSite('@eMobilis');
        SEOTools::jsonLd()->addImage('https://www.emobilis.ac.ke/images/gallery/x2.jpg');

        SEOMeta::setKeywords(["Software development schools in kenya", "learn laravel development", "laravel programming in kenya", "Backend API development", "top development courses", "Web development courses in kenya", "app development training in nairobi", "full stack developer course in Kenya", "software development courses in kenya"]);
        $course = [
            "icon" => "programming.svg",
            "icon-2" => "tech-2.svg",
            "title" => "Laravel App Development",
            "description" => "Become a master in Laravel and make advanced applications like taxi application's backend. Laravel is a beginner-friendly, expressive web application framework. This course will teach you the fundamentals of how to use Laravel to quickly start building web applications.",
            "why" => [
                "title" => "Why should you choose this particular course",
                "points" => [
                    "Learn to develop scalable and maintainable apps",
                    "Laravel is responsive and straightforward to use.",
                    "Laravel provides developers with an inbuilt library of tools that reduce the amount of coding they need to do.",
                    "Laravel allows the developer to focus on their web application’s design, architecture, and functionality.",
                    "Laravel has inbuilt security features that protect Laravel websites from SQL injection, cross-site scripting, and forgery.",
                    "Naturally, learning to use Laravel is a fantastic investment for your career."
                ]
            ],
            "cost" => [
                "title" => "Cost, Duration, Intake",
                "points" => [
                    "This course costs Ksh 50,000",
                    "It will take two months to complete",
                    "Registrations are Ongoing."
                ]
            ],
            "benefits" => [
                "title" => "What Will You Learn",
                "points" => [
                    "Learn to build applications using laravel",
                    "You will learn how to create and use Controllers and what they are.",
                    "You will learn to use the templating engine Blade",
                    "How to create migrations and what they are",
                    "How to use Laravel Tinker - Command line program to play around with Laravel without persisting data",
                    "How to use Eloquent to create one to many and many to many relations",
                    "You will learn about Middleware and security",
                    "Authorization (Policies and Gates).",
                    "Files and file uploads.",
                    "Observers, Events, Listeners and Subscribers.",
                    "Services, Service Container, Contracts and Facades.",
                    "Advanced features like Queues, Polymorphic relationships, Service Container.",
                    "Using Traits in Laravel - SoftDeletes and creating your own!.",
                    "You will learn about Laravel ORM (Object Relational Mapper) and Raw SQL queries. Database stuff.",
                    "You will learn about sending emails.",
                ]
            ],
            "requirements" => [
                "title" => "Requirements",
                "points" => [
                    "Be ready to learn an insane amount of awesome stuff",
                    "Prepare to build world class apps!",
                    "PHP knowledge",
                ]
            ],
        ];
        return view('courses.index', compact("course"));
    }

    public function oracle()
    {
        SEOTools::setTitle('Oracle');
        SEOTools::setDescription('Don\'t Just Learn the SQL Language, Become Job-Ready and Launch Your Career as a Certified Oracle SQL Developer!');
        SEOTools::opengraph()->setUrl(URL::current());
        SEOTools::setCanonical(URL::current());
        SEOTools::opengraph()->addProperty('type', 'webpage');
        SEOTools::twitter()->setSite('@eMobilis');
        SEOTools::jsonLd()->addImage('https://www.emobilis.ac.ke/images/gallery/x2.jpg');

        SEOMeta::setKeywords(["Oracle Database Training in kenya","SQL Programming course", "learn SQL nairobi kenya", "game development courses in kenya,Database Administration training in Nairobi,software development courses in kenya"]);
        $course = [
            "icon" => "programming.svg",
            "icon-2" => "tech-2.svg",
            "title" => "Oracle Database",
            "description" => "Don't Just Learn the SQL Language, Become Job-Ready and Launch Your Career as a Certified Oracle SQL Developer!",
            "why" => [
                "title" => "Why should you learn Oracle DBMS",
                "points" => [
                    "Increase your database and also confirm your skills to interest possible employers.",
                    "Improve your possible earning power to command a higher income.",
                    "Gain exposure to a wide range of crucial attributes, functions, and tasks to make use of on duty."
                ]
            ],
            "cost" => [
                "title" => "Cost, Duration, Intake",
                "points" => [
                    "This course costs Ksh 60,000",
                    "It will take four months to complete",
                    "Registrations are Ongoing.",
                ]
            ],
            "benefits" => [
                "title" => "What Will You Learn",
                "points" => [
                    "Oracle Database Administration",
                    "How to install Oracle Database Software on the server without GUI.",
                    "Managing Database Instance: Starting and Shutting down DB, working with initialization parameters, Diagnosing problems, working with Data Dictionary",
                    "Administering User Access, Privileges & Roles, Resource Limitation",
                    "Oracle Database Architecture, Physical files of the DB, Memory Structures, Memory Management, Background Processes",
                    "How to access Oracle Database via sqlplus, sqlcl and SQL Developer",
                    "Practicing different Backup and Recovery scenarious via RMAN",
                    "Data Guard configuration.",
                    "Program in the SQL Language to Solve a Variety of Database Problems.",
                    "Obtain the Skills that are Necessary to Land a Job as a SQL Developer.",
                ]
            ],
            "requirements" => [
                "title" => "Requirements",
                "points" => [
                    "Absolutely no programming experience is required to master the content in this course .",
                    "Desire to learn",
                ]
            ],
        ];
        return view('courses.index', compact("course"));
    }

    public function ussd()
    {
        SEOTools::setTitle('USSD');
        SEOTools::setDescription('The USSD (Unstructured Supplementary Service Data) Course is designed to help you learn how to create USSD applications used my many organizations and businesses to build real time interactive experiences for your users that is accessible on both feature and smartphones.');
        SEOTools::opengraph()->setUrl(URL::current());
        SEOTools::setCanonical(URL::current());
        SEOTools::opengraph()->addProperty('type', 'webpage');
        SEOTools::twitter()->setSite('@eMobilis');
        SEOTools::jsonLd()->addImage('https://www.emobilis.ac.ke/images/gallery/x2.jpg');

        SEOMeta::setKeywords(["software development schools in kenya", "USSD development in Kenya", "USSD App development in nairobi", "USSD Course Kenya", "USSD and SMS development training in nairobi", "USSD development courses in kenya"]);
        $course = [
            "icon" => "programming.svg",
            "icon-2" => "tech-2.svg",
            "title" => "USSD Course",
            "description" => "The USSD (Unstructured Supplementary Service Data) Course is designed to help you learn how to create USSD applications used my many organizations and businesses to build real time interactive experiences for your users that is accessible on both feature and smartphones. You will build reliable USSD apps and start delivering scalable solutions to your users!.",
            "why" => [
                "title" => "Why should you learn USSD",
                "points" => [
                    "Learn to create applications that can be used by any phone, even if there is no internet"
                ]
            ],
            "cost" => [
                "title" => "Cost, Duration, Intake",
                "points" => [
                    "This course costs Ksh 25,000",
                    "It will take one month to complete",
                    "Registrations are Ongoing.",
                ]
            ],
            "benefits" => [
                "title" => "What Will You Learn",
                "points" => [
                    "Uses of USSD applications",
                    "Types of SMS - Two-way SMS (shortcode), Premium SMS (selling content to users using SMS) and branded SMS (sender ID/alphanumeric)",
                    "USSD menus navigation - Going forward, going back and going back to main menu",
                    "Testing USSD menus using postman and ngrok",
                    "Connecting USSD application to MySQL database",
                    "Testing USSD application using simulator/sandbox",
                    "Designing USSD menus.",
                    "Handling Invalid entries in USSD menus.",
                    "Adding SMS functionality to USSD application.",
                    "Moving USSD application from sandbox to live environment.",
                    "Monetizing USSD and SMS application.",
                ]
            ],
            "requirements" => [
                "title" => "Requirements",
                "points" => [
                    "Knowledge of any backend programming language e.g PHP, Javascript or Python.",
                    "Prepare to build world class web apps!.",
                ]
            ],
        ];
        return view('courses.index', compact("course"));
    }

    public function digital_skills()
    {
        SEOTools::setTitle('Digital Skills');
        SEOTools::setDescription('Start Your Online Digital Career & Master Skills Like Content Marketing, SEO, Facebook Ads & Google Ads');
        SEOTools::opengraph()->setUrl(URL::current());
        SEOTools::setCanonical(URL::current());
        SEOTools::opengraph()->addProperty('type', 'webpage');
        SEOTools::twitter()->setSite('@eMobilis');
        SEOTools::jsonLd()->addImage('https://www.emobilis.ac.ke/images/gallery/x2.jpg');

        SEOMeta::setKeywords(["software development schools in kenya", "Search Engine Optimization courses in Nairobi Kenya", "Google SEO Development", "Digital Marketing courses kenya", "Youth Empowerment,Future of work,Transcription,game development courses in kenya,Paid Advertising Concepts,top courses in software development"]);
        $course = [
            "icon" => "programming.svg",
            "icon-2" => "tech-2.svg",
            "title" => "",
            "description" => "",
            "why" => [
                "title" => "Why should you choose this particular course",
                "points" => [

                ]
            ],
            "cost" => [
                "title" => "Cost, Duration, Intake",
                "points" => [

                ]
            ],
            "benefits" => [
                "title" => "What Will You Learn",
                "points" => [

                ]
            ],
            "requirements" => [
                "title" => "Requirements",
                "points" => [

                ]
            ],
        ];
        return view('courses.index', compact("course"));
    }

    public function cyber_security()
    {
        SEOTools::setTitle('Cyber Security');
        SEOTools::setDescription('Become a Cyber Security Specialist, Learn How to Stop Hackers, Prevent Hacking.');
        SEOTools::opengraph()->setUrl(URL::current());
        SEOTools::setCanonical(URL::current());
        SEOTools::opengraph()->addProperty('type', 'webpage');
        SEOTools::twitter()->setSite('@eMobilis');
        SEOTools::jsonLd()->addImage('https://www.emobilis.ac.ke/images/gallery/x2.jpg');

        SEOMeta::setKeywords(["software development schools in kenya", "Cyber Security Courses in Nairobi Kenya", "Ethical Hacking Course", "Information Systems", "System Administration", "Certified ethical hacking", "Data protection", "Careers in ICT Training", "Hacking courses in kenya", "app development training in nairobi", "development skill"]);
        $course = [
            "icon" => "programming.svg",
            "icon-2" => "tech-2.svg",
            "title" => "Cyber Security",
            "description" => "Become a Cyber Security Specialist, Learn How to Stop Hackers, Prevent Hacking, Learn IT Security & INFOSEC",
            "why" => [
                "title" => "Why should you choose this particular course",
                "points" => [
                    "Cyber Security Jobs Are in High Demand",
                    "Cyber Security Salaries Are High",
                    "It’s a Stimulating Job"
                ]
            ],
            "cost" => [
                "title" => "Cost, Duration, Intake",
                "points" => [
                    "This course costs Ksh 54,000",
                    "It will take three months to complete",
                    "Registrations are Ongoing.",
                ]
            ],
            "benefits" => [
                "title" => "What Will You Learn",
                "points" => [
                    "An advanced practical skill set in defeating all online threats - advanced hackers, trackers, malware and all Internet nastiness including mitigating government spying and mass surveillance. Start a career in cyber security. Become a cyber security specialist.",
                    "Explore the threat landscape - Darknets, dark markets, zero day vulnerabilities, exploit kits, malware, phishing and much more..",
                    "Go in-depth into security through physical and virtual isolation and compartmentalization. Covering sandboxes, application isolation, virtual machines",
                    "Start a career in cyber security. Become a cyber security specialist.",
                    "Practical Cyber Security skills through hands on labs",
                    "Differentiate between the various forms of malware and how they affect computers and networks",
                    "Understand how hackers actually hack",
                ]
            ],
            "requirements" => [
                "title" => "Requirements",
                "points" => [
                    "This course costs Ksh 18,000",
                    "It will take two months to complete",
                    "Registrations are Ongoing.",
                ]
            ],
        ];
        return view('courses.index', compact("course"));
    }

    public function react()
    {
        SEOTools::setTitle('React');
        SEOTools::setDescription('Dive in and learn React.js from scratch! Learn Reactjs, Hooks, Redux, React Routing, Animations and way more!. React is the most popular Javascript library of the last five years.');
        SEOTools::opengraph()->setUrl(URL::current());
        SEOTools::setCanonical(URL::current());
        SEOTools::opengraph()->addProperty('type', 'webpage');
        SEOTools::twitter()->setSite('@eMobilis');
        SEOTools::jsonLd()->addImage('https://www.emobilis.ac.ke/images/gallery/x2.jpg');
        SEOMeta::setKeywords(["software development schools in kenya", "React course", "learn React programming", "React Hooks Course Course", "Web courses in kenya", "app development training in nairobi", "software development courses in kenya"]);

        $course = [
            "icon" => "programming.svg",
            "icon-2" => "tech-2.svg",
            "title" => "React JS",
            "description" => "If you're exploring front-end development as a career, then you've probably heard that React is a must-have skill. React is a JavaScript library used to build user interfaces (UIs) for websites and applications.",
            "why" => [
                "title" => "Why React JS",
                "points" => [
                    "React development has emerged as the future of web creation with its extra versatility and ease.",
                    "ReactJS is very easy to learn and more focused than some other JavaScript frameworks.",
                    "React developers are in demand. Since most of the world went digital in 2020, employers around the globe have been looking for talented React developers.",
                ]
            ],
            "cost" => [
                "title" => "Cost, Duration, Intake",
                "points" => [
                    "This course costs Ksh 35,000",
                    "It will take two months to complete",
                    "Registrations are Ongoing.",
                ]
            ],
            "benefits" => [
                "title" => "What Will You Learn",
                "points" => [
                    "Build enterprise level React applications and deploy to production (using React 18!)",
                    "Learn the latest features in React including Hooks, Context API, Suspense, React Lazy + more.",
                    "Use Redux, Redux Thunk and Redux Saga in your applications",
                    "Become fluent in the toolchain supporting React, including NPM, Webpack, Babel, and ES6/ES2015 Javascript syntax",
                    "Learn CSS in JS with styled-components",
                    "Converting apps to Progressive Web Apps",
                    "Learn to build reactive, performant, large scale applications like",
                    "Use Firebase to build full stack applications.",
                    "Using the latest ES6/ES7/ES8/ES9/ES10/ES11 JavaScript to write clean code.",
                    "Provide amazing user experiences by leveraging the power of JavaScript with ease.",
                    "Learn all about React Hooks and React Components.",
                    "Acquire the programming skills needed to obtain a software engineering job.",
                ]
            ],
            "requirements" => [
                "title" => "Requirements",
                "points" => [
                    "Basic grasp of Javascript",
                    "ES6+ JavaScript knowledge is beneficial but not a must-have.",
                    "Knowledge of HTML, CSS",
                    "Desire to learn React"
                ]
            ],
        ];
        return view('courses.index', compact("course"));
    }
}
