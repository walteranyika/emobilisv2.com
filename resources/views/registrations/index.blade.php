@extends("layouts.master")
@section('extra-css-links')
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
    {!! htmlScriptTagJsApi() !!}
@endsection
@section("content")
    <section class="container-fluid contact-form  gx-0">
        <div class="content py-3">
            <div class="container">
                @if(session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        {{session('message')}}
                    </div>
                @endif
                <div class="row align-items-stretch gx-0 contact-wrap">
                    <div class="col-md-8">
                        <div class="form h-100">
                            <h3>Register With Us</h3>
                            <form class="mb-5" method="post" id="contactForm" name="contactForm" action="{{route('enroll-save')}}">
                                <div class="row">
                                    <div class="col-md-6 form-group mb-5">
                                        <label for="" class="col-form-label">Full Name *</label>
                                        <input type="text" value="{{old('full_names')}}" class="form-control" name="full_names" id="names" placeholder="Your names">
                                        @error('full_names')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-5">
                                        <label for="" class="col-form-label">Email *</label>
                                        <input type="text" class="form-control" value="{{old('email')}}" name="email" id="email" placeholder="Your email">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group mb-5">
                                        <label for="" class="col-form-label">Phone *</label>
                                        <input type="text" class="form-control" value="{{old('phone')}}" name="phone" id="phone" maxlength="10" placeholder="e.g 0728000111">
                                        @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-5">
                                        <label for="" class="col-form-label">Course *</label>
                                        <select name="program" id="program"  class="form-control">
                                            <option selected disabled>Which course are you interested in?</option>
                                            <option {{ ( old("program") == "MIT" ? "selected":"") }} value="MIT">Full Stack Development Course</option>
                                            <option {{ ( old("program") == "Android" ? "selected":"") }} value="Android">Android</option>
                                            <option {{ ( old("program") == "Python" ? "selected":"") }} value="Python">Python</option>
                                            <option {{ ( old("program") == "React Js" ? "selected":"") }} value="React Js">React JS</option>
                                            <option {{ ( old("program") == "HTML5 and CSS3" ? "selected":"") }} value="HTML5 and CSS3">HTML5 and CSS3</option>
                                            <option {{ ( old("program") == "USSD" ? "selected":"") }} value="USSD">USSD</option>
                                            <option {{ ( old("program") == "Laravel" ? "selected":"") }} value="Laravel">Laravel</option>
                                            <option {{ ( old("program") == "Oracle" ? "selected":"") }} value="Oracle">Oracle</option>
                                            <option {{ ( old("program") == "Cyber Security" ? "selected":"") }} value="Cyber Security">Cyber Security</option>
                                            <option {{ ( old("program") == "Other" ? "selected":"") }} value="Other">Other</option>
                                        </select>
                                        @error('program')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group mb-5">
                                        <label for="timing" class="col-form-label">Your preferred time *</label>
                                        <select name="timing" id="timing"  class="form-control">
                                            <option selected disabled>Select your preferred time</option>
                                            <option {{ ( old("timing") == "Morning" ? "selected":"") }} value="MIT">Morning</option>
                                            <option {{ ( old("timing") == "Afternoon" ? "selected":"") }} value="Afternoon">Afternoon</option>
                                            <option {{ ( old("timing") == "Evening" ? "selected":"") }} value="Evening">Evening</option>
                                            <option {{ ( old("timing") == "Saturdays" ? "selected":"") }} value="Saturdays">Saturdays</option>
                                            <option {{ ( old("timing") == "Other" ? "selected":"") }} value="Other">Other</option>
                                        </select>
                                        @error('timing')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <p class="text-black-50">By clicking Register you are agreeing to the <a href="{{route('terms')}}" class="text-black" target="_blank">Terms and Conditions</a>.</p>
                                        <input type="submit" value="Register" class="btn btn-primary rounded-0 py-2 px-4">
                                        <span class="submitting"></span>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group row my-1">
                                            <div class="col-12">
                                                {!! htmlFormSnippet() !!}
                                                @error('g-recaptcha-response')
                                                <span class="invalid-feedback" role="alert">
                                                         <strong>Verify that you are human.</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @csrf
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info h-100">
                            <h3>Get In Touch</h3>
                            <p class="mb-5">Feel free to reach us directly for any questions.</p>
                            <ul class="list-unstyled">
                                <li class="d-flex">
                                    <span class="text"><i class="fa fa-map-marker px-2" aria-hidden="true"></i>  Kipro Center, Sports Road, Westlands, Near Delta, Nairobi</span>
                                </li>
                                <li class="d-flex">
                                    <span class="text"><a href="tel:+254716608066"><i class="fa fa-phone px-2" aria-hidden="true"></i> +254716-608-066</a></span>
                                </li>
                                <li class="d-flex">
                                    <span class="text"><a href="tel:+254732608066"><i class="fa fa-phone px-2" aria-hidden="true"></i> +254732-608-066</a></span>
                                </li>
                                <li class="d-flex">
                                    <span class="text"><a href="mailto:info@emobilis.org"><i class="fa fa-envelope-open px-2" aria-hidden="true"></i> info@emobilis.org</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection