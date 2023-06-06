@extends("layouts.master")

@section("content")
    <section class="container-fluid course-details-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 d-flex flex-column justify-content-center">
                   <div class="content">
                       <h2 class="course-title">{{$course['title']}}</h2>
                       <p class="py-5">{{$course['description']}}</p>
                       <a class="btn btn-outline-danger" href="{{route('enroll')}}">Enrol Now</a>
                   </div>
                </div>
                <div class="col-sm-7">
                    <img src="{{asset('icons/'.$course['icon'])}}" width="100%" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid  course-details">
       <div class="container">
           <div class="row justify-content-center py-5">
               <div class="col-12 course-details-title py-5">
                   <h1 class="text-center">Course Details</h1>
               </div>
               <div class="col-sm-4">
                   <img src="{{asset('icons/'.$course['icon-2'])}}" width="100%" class="img-fluid" alt="">
               </div>
               <div class="col-sm-8">
                   <div class="accordion" id="myAccordion">
                           <div class="accordion-item card shadow mb-3">
                               <h2 class="accordion-header py-3 " id="heading-1">
                                   <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-1">
                                       {{$course["why"]["title"]}}
                                   </button>
                               </h2>
                               <div id="collapse-1" class="accordion-collapse collapse card-body" data-bs-parent="#myAccordion">
                                   <div class="card-body px-4 py-2">
                                       @foreach($course["why"]["points"] as $point)
                                         <p>{{$point}}</p>
                                       @endforeach
                                   </div>
                               </div>
                           </div>

                           <div class="accordion-item card shadow mb-3">
                               <h2 class="accordion-header py-3" id="heading-4">
                                   <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-4">
                                       {{$course["cost"]["title"]}}
                                   </button>
                               </h2>
                               <div id="collapse-4" class="accordion-collapse collapse card-body" data-bs-parent="#myAccordion">
                                   <div class="card-body px-4 py-2">
                                       @foreach($course["cost"]["points"] as $point)
                                           <p>{{$point}}</p>
                                       @endforeach
                                   </div>
                               </div>
                           </div>

                           <div class="accordion-item card shadow mb-3">
                               <h2 class="accordion-header py-3" id="heading-2">
                                   <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-2">
                                       {{$course["benefits"]["title"]}}
                                   </button>
                               </h2>
                               <div id="collapse-2" class="accordion-collapse collapse card-body" data-bs-parent="#myAccordion">
                                   <div class="card-body px-4 py-2">
                                       @foreach($course["benefits"]["points"] as $point)
                                           <p>{{$point}}</p>
                                       @endforeach
                                   </div>
                               </div>
                           </div>

                           <div class="accordion-item card shadow mb-3">
                               <h2 class="accordion-header py-3" id="heading-3">
                                   <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-3">
                                       {{$course["requirements"]["title"]}}
                                   </button>
                               </h2>
                               <div id="collapse-3" class="accordion-collapse collapse card-body" data-bs-parent="#myAccordion">
                                   <div class="card-body px-4 py-2">
                                       @foreach($course["requirements"]["points"] as $point)
                                           <p>{{$point}}</p>
                                       @endforeach
                                   </div>
                               </div>
                           </div>


                   </div>
               </div>
           </div>
       </div>
    </section>

    <a href="{{route('enroll')}}" class="btn btn-danger btn-sm  d-none" style="position: fixed; bottom: 2em; left: 1em; z-index:1000">Enroll Now</a>

@endsection