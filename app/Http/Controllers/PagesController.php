<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class PagesController extends Controller
{
    public function home()
    {
        SEOTools::setTitle('Home');
        SEOTools::setDescription('Best and Most affordable software development school. Sign up for expert-led live courses to start your journey into coding in Kenya. Perfect for beginners, intermediate, and advanced learners');
        SEOTools::opengraph()->setUrl(URL::current());
        SEOTools::setCanonical(URL::current());
        SEOTools::opengraph()->addProperty('type', 'webpage');
        SEOTools::twitter()->setSite('@eMobilis');
        SEOTools::jsonLd()->addImage('https://www.emobilis.ac.ke/images/gallery/x2.jpg');
        SEOMeta::setKeywords([
            "Tech Training Nairobi",
            "Coding Schools Kenya",
            "Software Courses nairobi kenya",
            "ICT Courses Nairobi Kenya",
            "Website Development Course nairobi kenya",
            "Android Development Nairobi kenya",
            "Python Development",
            "programming training school in Nairobi Kenya",
            "Software Development School in Nairobi Kenya",
            "Software courses in Nairobi Kenya"
        ]);
        $testimonials = [
            [
                "image" => "deniseallela.jpg",
                "name" => "Eunice Allela",
                "role" => "Community Manager at Google",
                "message" => "I was able to get equipped with skills and resources that would later on aid me in my career as a Software Engineer, and winning the Innovate Counties Challenge Kisumu in 2017. "
            ],
            [
                "image" => "victor_muchiri.jpg",
                "name" => "Victor muchiri",
                "role" => "Developer",
                "message" => "As a UoN Med student I opted to find medical solutions through tech which led me to eMobilis after a friend recommended them. My training in Python and Data Science has enabled me to develop Panacea: a system that diagnoses Pneumonia."
            ],
            [
                "image" => "carol_kariuki.png",
                "name" => "Carol Kariuki",
                "role" => "Developer at Facebook",
                "message" => " My passion in technology saw me earn a partial scholarship at eMobilis straight after Kenya High School. I put in the work and learned to Code well within knowledgeable lectures there. I am now living my dream as a senior software developer at Vitu Mob and Lead for the Facebook Developer Circles program in Kenya."
            ],
            [
                "image" => "fidelis_omwenga.jpg",
                "name" => "Videlis Omwenga",
                "role" => "Developer",
                "message" => "I am a trained Accountant from University of Nairobi and I choose to train at eMobilis on Software Development and this has helped me create a software for the company I work for"
            ],
            [
                "image" => "nixon_korir.jpg",
                "name" => "Nixon Korir",
                "role" => "Developer at Safaricom",
                "message" => " Through the help of eMobilis Administration, I got my first job at Mobitech a week after I completed my course."
            ],
            [
                "image" => "joseph_mbote.jpeg",
                "name" => "Joseph Mbote Mbogo",
                "role" => "Developer",
                "message" => "I became interested in technology back in 2018. I found the eMobilis Web Development Scholarship Program through a friend's WhatsApp status. With the skills I learned, I created a document generator and worked on other projects such as a voting application, an e-commerce site, and an online book library. The program made my dreams come true, and I recommend it to others. The program gave me the opportunity to apply my programming skills to solve real-life problems."
            ],
             [
                "image" => "nelson_ njuguna.jpg",
                "name" => "Nelson Njuguna",
                "role" => "Software Engineer",
                "message" => "I am a Twitter enthusiast, as I was perusing through tweets I came across a post by eMobilis where they had shared a detailed post pertaining the Fully Sponsored Web Development Scholarship, took a chance and applied and I was successfully shortlisted. Thank you eMobilis. I will take this opportunity to thank eMobilis for the Fully paid Web Development Scholarship where I got to learn from the mentors."
            ],
            [
                "image" => "roy_ombasa.jpg",
                "name" => "Roy Brian Ombasa ",
                "role" => "Developer",
                "message" => " I'm an alumni of Moi University where I pursued an Undergraduate Degree in Computer Science. I am currently an ICT Officer. A close friend sent me a poster on WhatsApp about the Web Development Program offered by eMobilis. The program has carved a path for me to become a Software Developer."
            ],
            [
                "image" => "peter_thindi.jpg",
                "name" => "Ng'ethe Peter Thindi",
                "role" => "Developer",
                "message" => "After completing the Full Stack Software Development Course, I have been freelancing and assisting on our family business. Thanks to eMobilis I have received two job offers from different hospitals to work at their I.T. departments. I would recommend people to eMobilis because it is an exceptional institution surrounded by members of staff who have very good etiquette, friendly, hardworking, organized, social and always want to see you triumph. The lecturer ensures that everyone is at per and takes their time in ensuring each individual understands the unit of the day. You are also given ample time to do your research and assignments. I also got the opportunity to meet ambitious and amazing classmates whom we are still in communication with."
            ],
            [
                "image" => "monica_adhiambo.jpg",
                "name" => "Monica Adhiambo",
                "role" => "Developer",
                "message" => "I found out about eMobilis through a mentor. I enrolled in 2019 and pursued the Graphic Design course. Some of the interesting projects I created include, Creating a calendar, Business card, logo, and banner for a certain institution. I designed a food delivering and ordering app as my final project and used a new design tool called Figma and did the prototype and made it responsive. I would recommend others to join eMobilis, as it is a place for open learning for tech, it also helps in setting a good foundation thus opening opportunities for students to work in the tech field. To keep the pace, always keep following your dreams and take challenges as a short term season."
            ],
            [
                "image" => "olivia _wangari.jpg",
                "name" => "Olivia Wangari",
                "role" => "Developer",
                "message" => "Yes, I would recommend others to join eMobilis, reason being, the learning experience is wonderful. The lecturers guide you step by step and assist you whenever you are stuck, there are also additional seminars and Tech talks which help you learn more about opportunities in the Tech field. Lastly, once you successfully complete the course through the project presentation, you earn a certificate which is legitimate and that could assist you land a Developer job."
            ]
        ];
        return view('index', compact('testimonials'));
    }

    public function courses()
    {

        SEOMeta::setTitle("Our Courses");
        SEOMeta::setDescription('We provide exclusive IT training in Kenya and abroad - specializing in programming ,web, sql, graphic design, mobile, ussd and so much more!');
        SEOMeta::setCanonical(URL::current());
        SEOMeta::setKeywords([
            "Tech Training Nairobi",
            "Coding Schools Kenya",
            "Software Courses nairobi kenya",
            "ICT Courses Nairobi Kenya",
            "Website Development Course nairobi kenya",
            "Android Development Nairobi kenya",
            "Python Development",
            "programming training school in Nairobi Kenya",
            "Software Development School in Nairobi Kenya",
            "Software courses in Nairobi Kenya"

        ]);
        OpenGraph::setDescription('We provide exclusive IT training in Kenya and abroad - specializing in programming ,web, sql, graphic design, mobile, ussd and so much more!');
        OpenGraph::setTitle('Web Development | ICT | Android | Python | Cyber Security | Graphic Design | USSD | Courses in Kenya');
        OpenGraph::setUrl(URL::current());
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Web Development | ICT | Android | Python | Cyber Security | Graphic Design, | USSD | Courses in Kenya');
        TwitterCard::setSite('@eMobilis');
        TwitterCard::setDescription('Our courses are a launchpad for a career in tech.Our graduates are employed in some of the most exciting tech companies in the industry. In just three months, someone can go from zero knowledge of coding, to walking with confidence into their first job as a developer. ');

        JsonLd::setTitle('Web Development | ICT | Android | Python | Cyber Security | Graphic Design | USSD | Courses in Kenya');
        JsonLd::setDescription('We provide exclusive IT training in Kenya and abroad - specializing in programming ,web, sql, graphic design, mobile, ussd and so much more!');
        JsonLd::addImage('https://www.emobilis.ac.ke/images/gallery/x2.jpg');
        return view('courses');
    }

    public function faq()
    {
        SEOMeta::setTitle('FAQs');
        SEOMeta::setDescription('We provide exclusive IT training in Kenya and abroad - specializing in programming ,web, sql, graphic design, mobile, ussd and so much more!');
        SEOMeta::setCanonical(URL::current());

        OpenGraph::setDescription('We provide exclusive IT training in Kenya and abroad - specializing in programming ,web, sql, graphic design, mobile, ussd and so much more!');
        OpenGraph::setTitle('Web Development | ICT | Android | Python | Cyber Security | Graphic Design | USSD | Courses in Kenya');
        OpenGraph::setUrl(URL::current());
        OpenGraph::addProperty('type', 'articles');

        SEOMeta::setKeywords(["best programming schools in nairobi", "coding bootcamps in kenya", "programming in kenya", "diploma in computer programming in kenya", "online coding classes in kenya"]);

        $faqs = [
            [
                'question' => 'When can I start the course?',
                'answer' => 'We do have monthly intakes for most courses.',
            ],
            [
                'question' => 'Courses that you offer?',
                'answer' => 'We offer Web and Mobile Development, Android, Laravel, Data Science, Cyber security, Graphic Design Java Script, USSD etc.',
            ],
            [
                'question' => 'Requirements needed to pursue the courses?',
                'answer' => 'High School Diploma/Certificate',
            ],
            [
                'question' => 'Class size?',
                'answer' => 'We have 4 fully equipped labs with Internet and Computers. which hold between 15 to 30
                                    Students',
            ],
            [
                'question' => 'How many hours does the class take?',
                'answer' => 'The classes take 3 hours per day in all sessions.',
            ],
            [
                'question' => 'Class Scheduling?',
                'answer' => 'Morning Classes, Afternoon Classes, Evening Classes and Saturday Classes. We also offer
                                    customized trainings for Corporates.',
            ],
            [
                'question' => 'Do you offer a payment plan?',
                'answer' => 'Yes, we allow the students to complete their school fees at most three installments of equal
                                    dividends.',
            ],
            [
                'question' => 'Is it possible to learn all of this in this short period of time?',
                'answer' => 'Yes, it is, but you have to put in the work come prepared to work hard and to put maximum
                                    effort. eMobilis will provide all the learning materials, teachers and support along every step of
                                    the way.',
            ],
            [
                'question' => 'Do you have exams?',
                'answer' => 'Yes, we have hands-on project that are to be completed within the stipulated incubation
                                    period assessed by a panel of professionals.',
            ],
            [
                'question' => 'Do you offer any scholarships?',
                'answer' => 'Yes, we do offer Scholarships on a partial basis.',
            ],
            [
                'question' => 'Does eMobilis help me get a job?',
                'answer' => 'We equip you with hands-on skills that make you market-ready and employable.',
            ],
            [
                'question' => 'Is eMobilis an accredited institution?',
                'answer' => 'Yes, we are duly registered Ministry of Education, Science and Technology; Accreditation
                                    Cert No: MOHEST/PC/1909/012',
            ],
            [
                'question' => 'Do I get a certificate after the course?',
                'answer' => 'Yes, all courses will be awarded a certificate upon completion.',
            ],
            [
                'question' => 'What does my tuition cover?',
                'answer' => 'The tuition fee covers classes and exam. There are no other hidden charges.',
            ],
            [
                'question' => 'Do you offer Part-time classes?',
                'answer' => 'Yes, we do.',
            ],
            [
                'question' => 'What Certifications do you offer?',
                'answer' => 'Certificate that is recognized by the Ministry of Education.',
            ],
            [
                'question' => 'I am an international student can I apply?',
                'answer' => 'Currently, we are just located in Westlands, Nairobi',
            ],
            [
                'question' => 'How much is the tuition fee?',
                'answer' => 'It is dependent on the course but ranges from Ksh 14,000 to Ksh 69,500 which is payable in
                                    instalments',
            ],
            [
                'question' => 'What should I expect at the end of the course?',
                'answer' => 'To gain Hands-on skills that enable you be market ready and compete with other.',
            ],
            [
                'question' => 'Where are you located?',
                'answer' => '3rd Floor, Kipro Center, off Rhapta Road. Westlands, Nairobi.',
            ],
        ];
        return view('faq', compact('faqs'));
    }

    public function about()
    {

        SEOMeta::setTitle('About');
        SEOMeta::setDescription('about us, school of software development, java programming, python programming, short courses in IT, short courses in programming, java courses, php courses, programming short courses, android courses');
        SEOMeta::setCanonical(URL::current());
        SEOMeta::setKeywords([
            "ICT School in Nairobi Kenya",
            "Tech colleges in Kenya",
            "Colleges offering Certificate in Web Design",
            "best school for software development",
            "Best Computer training schools",
            "Affordable Tech courses",
            "Best Coding Schools in Kenya",
            "Coding courses in Kenya",
            "programming schools in nairobi",
            "best programming schools in nairobi",
            "Coding schools in nairobi"
        ]);

        OpenGraph::setDescription('about us, school of software development, java programming, python programming, short courses in IT, short courses in programming, java courses, php courses, programming short courses, android courses, ussd, laravel');
        OpenGraph::setTitle('About Us | Programming | Web Design | Graphic Design | School of IT');
        OpenGraph::setUrl(URL::current());
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('About | eMobilis');
        TwitterCard::setSite('@eMobilis');

        JsonLd::setTitle('About  eMobilis');
        JsonLd::setDescription('about us, school of software development, java programming, python programming, short courses in IT, short courses in programming, java courses, php courses, programming short courses, android courses, ussd, laravel');
        JsonLd::addImage('https://www.emobilis.ac.ke/images/gallery/x2.jpg');
        return view('about');
    }

    public function activities()
    {
        SEOMeta::setTitle('Events');
        SEOMeta::setDescription('Get to meet and hear from industry leaders in the tech world, Former students who are working at big companies like Safaricom,  Google and Microsoft and build your networks at eMobilis events');
        SEOMeta::setCanonical(URL::current());

        SEOMeta::setKeywords([
            "ICT School in Nairobi Kenya",
            "Tech colleges in Kenya",
            "Colleges offering Certificate in Web Design",
            "best school for software development",
            "Best Computer training schools",
            "Affordable Tech courses", "Best Coding Schools in Kenya",
            "Coding courses in Kenya", "programming schools in nairobi", "best programming schools in nairobi", "Coding schools in nairobi"
        ]);

        OpenGraph::setDescription('Get to meet and hear from industry leaders in the tech world, Former students who are working at big companies like Safaricom,  Google and Microsoft and build your networks at eMobilis events');
        OpenGraph::setTitle('Events | eMobilis');
        OpenGraph::setUrl(URL::current());
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Events | eMobilis');
        TwitterCard::setSite('@eMobilis');
        TwitterCard::setDescription('Get to meet and hear from industry leaders in the tech world, Former students who are working at big companies like Safaricom,  Google and Microsoft and build your networks at eMobilis events');

        JsonLd::setTitle('Events | eMobilis');
        JsonLd::setDescription('Get to meet and hear from industry leaders in the tech world, Former students who are working at big companies like Safaricom,  Google and Microsoft and build your networks at eMobilis events');
        JsonLd::addImage('https://www.emobilis.ac.ke/images/gallery/x2.jpg');
        return view('activities');
    }

    public function contact()
    {
        SEOTools::setTitle('Mobile Development/Web Development/USSD/Cyber Security');
        SEOTools::setDescription('Are you looking for the most affordable Mobile/Web/Computer programming school/training/institute/course in Kenya? 0716608066');
        SEOTools::opengraph()->setUrl(URL::current());
        SEOMeta::setKeywords([
            "eMobilis Contacts",
            "programming training school",
            "Tech Training",
            "Coding Schools Nairobi Kenya",
            "Software Courses",
            "ICT Courses",
            "Website Development Course",
            "Android Development",
            "Python Development",
            "learn python coding",
        ]);
        SEOTools::setCanonical(URL::current());
        SEOTools::opengraph()->addProperty('type', 'webpage');
        SEOTools::twitter()->setSite('@eMobilis');
        SEOTools::jsonLd()->addImage('https://www.emobilis.ac.ke/images/gallery/x2.jpg');
        return view('contact');
    }

    public function contact_post(Request $request)
    {
        $request->validate([
            'names' => 'required|string|min:3',
            'email' => 'required|email',
            'phone' => 'required|min:6',
            'message' => 'nullable|string',
            'course' => 'required',
            'g-recaptcha-response' => 'recaptcha',
        ]);
        $name = $request->get("names");
        Contact::create($request->all());
        return back()->with("message", "Thank you $name for contacting us. We will get back to you soon.");
    }

    public function intakes()
    {
        SEOTools::setTitle('Android Development/Fullstack Development/Mobile Apps/CyberSecurity');
        SEOTools::setDescription('Come and advance/start your career by building a code portfolio with the help of our experienced expert code coaches/lecturers');
        SEOTools::opengraph()->setUrl(URL::current());
        SEOMeta::setKeywords([
            "Tech Training", "learn IT", "IT courses", "ICT Skills", "Coding Schools Kenya", "Software Courses", "ICT Courses", "Website Development Course", "Android Development", "Python Development", "Learn Django"
        ]);
        SEOTools::setCanonical(URL::current());
        SEOTools::opengraph()->addProperty('type', 'webpage');
        SEOTools::twitter()->setSite('@eMobilis');
        SEOTools::jsonLd()->addImage('https://www.emobilis.ac.ke/images/gallery/x2.jpg');
        return view('intakes');
    }

    public function mobigirlz()
    {
        SEOTools::setTitle('Android Development/Fullstack Development/Mobile Apps/CyberSecurity');
        SEOTools::setDescription('MobiGirlz is a program designed to empower and inspire young girls from allover Africa to pursue careers in programming.');
        SEOTools::opengraph()->setUrl(URL::current());
        SEOMeta::setKeywords([
            "Mobigirls", "Full Stack Development in Nairobi", "Programming Scholarships in Nairobi", "Girls in ICT Day", "programming testimonials", "Coding courses in Kenya", "programming schools in nairobi", "best programming schools in nairobi", "Coding schools in nairobi"
        ]);
        SEOTools::setCanonical(URL::current());
        SEOTools::opengraph()->addProperty('type', 'webpage');
        SEOTools::twitter()->setSite('@eMobilis');
        SEOTools::jsonLd()->addImage('https://www.emobilis.ac.ke/images/backgrounds/Woman%20Code.png');
        return view('mobigirlz');
    }

    public function ajira()
    {
        SEOTools::setTitle('Ajira Digital');
        SEOMeta::setKeywords([
            "ICT School in Nairobi Kenya", "Tech colleges in Kenya", "Colleges offering Certificate in Web Design", "best school for software development", "Best Computer training schools", "Affordable Tech courses", "Best Coding Schools in Kenya", "Coding courses in Kenya", "programming schools in nairobi", "best programming schools in nairobi", "Coding schools in nairobi"
        ]);
        return view('ajira');
    }
    public function scholarships()
    {
        SEOTools::setTitle('Scholarships');
        SEOMeta::setKeywords(["Programming Scholarships in Nairobi", "Full Stack Development scholarships in Nairobi", "Coding scholarships in Kenya", "programming sponsorship in nairobi", "programming schools in nairobi", "Coding schools in nairobi"         ]);
        return view('scholarships');
    }

    public function bootcamps()
    {
        SEOMeta::setTitle('Coding bootcamps');
        SEOMeta::setDescription('Learn to code or start your career in programming with our coding bootcamps and programming courses from best instructors at eMobilis.');
        SEOMeta::setCanonical(URL::current());
        SEOMeta::setKeywords([
            "Dev bootcamps in Kenya",
            "Coding bootcamps in Nairobi",
            "Coding bootcamps in Kenya",
        ]);

        OpenGraph::setDescription('Learn to code or start your career in programming with our coding bootcamps and programming courses from best instructors at eMobilis.');
        OpenGraph::setTitle('Learn Coding and Programming with our bootcamps - eMobilis');
        OpenGraph::setUrl(URL::current());
        OpenGraph::addProperty('type', 'articles');


        TwitterCard::setTitle('Learn Coding and Programming with our bootcamps - eMobilis');
        TwitterCard::setDescription('Learn to code or start your career in programming with our coding bootcamps and programming courses from best instructors at eMobilis.');
        TwitterCard::setSite('@eMobilis');

        JsonLd::setTitle('Learn Coding and Programming with our bootcamps - eMobilis');
        JsonLd::setDescription('Learn to code or start your career in programming with our coding bootcamps and programming courses from best instructors at eMobilis.');
        JsonLd::addImage('https://www.emobilis.ac.ke/images/gallery/x2.jpg');
        return view('bootcamps');
    }

    public function articles()
    {
        return view('articles');
    }

}
