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
                            <h3>Send us a message</h3>
                            <form class="mb-5" method="post" id="contactForm" name="contactForm"
                                  action="{{route('contact-post')}}">
                                <div class="row">
                                    <div class="col-md-6 form-group mb-5">
                                        <label for="" class="col-form-label">Name *</label>
                                        <input type="text" value="{{old('names')}}" class="form-control" name="names"
                                               id="names" placeholder="Your name">
                                        @error('names')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-5">
                                        <label for="" class="col-form-label">Email *</label>
                                        <input type="text" class="form-control" value="{{old('email')}}" name="email"
                                               id="email" placeholder="Your email">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group mb-5">
                                        <label for="" class="col-form-label">Phone *</label>
                                        <input type="text" class="form-control" value="{{old('phone')}}" name="phone"
                                               id="phone" placeholder="Phone #">
                                        @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-5">
                                        <label for="" class="col-form-label">Course *</label>
                                        <select name="course" id="course" class="form-control">
                                            <option selected disabled>What are you interested in?</option>
                                            <option {{ ( old("course") == "MIT" ? "selected":"") }} value="MIT">Full
                                                Stack Development Course
                                            </option>
                                            <option {{ ( old("course") == "Android" ? "selected":"") }} value="Android">
                                                Android
                                            </option>
                                            <option {{ ( old("course") == "Python" ? "selected":"") }} value="Python">
                                                Python
                                            </option>
                                            <option {{ ( old("course") == "React Js" ? "selected":"") }} value="React Js">
                                                React JS
                                            </option>
                                            <option {{ ( old("course") == "HTML5 and CSS3" ? "selected":"") }} value="HTML5 and CSS3">
                                                HTML5 and CSS3
                                            </option>
                                            <option {{ ( old("course") == "USSD" ? "selected":"") }} value="USSD">USSD
                                            </option>
                                            <option {{ ( old("course") == "Laravel" ? "selected":"") }} value="Laravel">
                                                Laravel
                                            </option>
                                            <option {{ ( old("course") == "Oracle" ? "selected":"") }} value="Oracle">
                                                Oracle
                                            </option>
                                            <option {{ ( old("course") == "Cyber Security" ? "selected":"") }} value="Cyber Security">
                                                Cyber Security
                                            </option>
                                            <option {{ ( old("course") == "Other" ? "selected":"") }} value="Other">
                                                Other
                                            </option>
                                        </select>
                                        @error('course')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group mb-5">
                                        <label for="message" class="col-form-label">Message *</label>
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="4"
                                                  placeholder="Write your message">{{ old('message') }}</textarea>
                                        @error('message')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="submit" value="Send Message"
                                               class="btn btn-primary rounded-0 py-2 px-4">
                                        <span class="submitting"></span>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
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
                            <p class="mb-5">We value your feedback, comments and any questions.</p>
                            <ul class="list-unstyled">
                                <li>
                                    <span class="text"><i class="fa fa-address-card px-2" aria-hidden="true"></i>P.O Box 939-00606, Sarit Center, Nairobi</span>
                                </li>

                                <li class="d-flex">
                                    <span class="text"><i class="fa fa-map-marker px-2" aria-hidden="true"></i>  Kipro Center, Sports Road, Westlands, Near Delta, Nairobi</span>
                                </li>
                                <li class="d-flex">
                                    <span class="text"><a href="tel:+254716608066"><i class="fa fa-phone px-2"
                                                                                      aria-hidden="true"></i> +254716-608-066</a></span>
                                </li>
                                <li class="d-flex">
                                    <span class="text"><a href="tel:+254732608066"><i class="fa fa-phone px-2"
                                                                                      aria-hidden="true"></i> +254732-608-066</a></span>
                                </li>
                                <li class="d-flex">
                                    <span class="text"><a href="mailto:info@emobilis.org"><i
                                                    class="fa fa-envelope-open px-2" aria-hidden="true"></i> info@emobilis.org</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid gx-0" style="background: #F0F3F4">
        <div class="row-map">
            <iframe style="width:100%" height="400" frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJY8Yk00EXLxgRVJHm2czn038&key=AIzaSyAXNljcostDgbXDsJHXnW4bH79Lrz3quqk"
                    allowfullscreen></iframe>
        </div>
    </section>
@endsection