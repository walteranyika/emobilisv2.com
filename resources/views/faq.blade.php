@extends("layouts.master")

@section("content")
  <section class="container-fluid faq">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h3 class="text-center py-3">Frequently Asked Questions</h3>
                </div>
                <div class="col-sm-10  col-lg-8">
                    <div class="my-2">
                        <div class="accordion" id="myAccordion">
                            @foreach($faqs as $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-{{$loop->iteration}}">
                                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-{{$loop->iteration}}">
                                            <img src="{{asset("icons/question.svg")}}" width="20px" alt="">&nbsp;&nbsp; {{$faq['question']}}
                                        </button>
                                    </h2>
                                    <div id="collapse-{{$loop->iteration}}" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                        <div class="card-body px-4 py-2">
                                            <p>{{$faq['answer']}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection