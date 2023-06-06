@extends("layouts.master")
@section("content")
    <div class="container-fluid py-5 image-grid">
        <div class="container">
            <h2 class="text-center py-3">Meet eMobilis Through Photos</h2>
            <div class="row gy-4">

                <a href="{{asset('images/gallery/girls.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery"
                   class="col-sm-4">
                    <img src="{{asset('images/gallery/girls.jpg')}}" class="img-fluid h-100"/>
                </a>


                <a href="{{asset('images/gallery/10402374_273383332844825_301377105096986399_n.jpg')}}"
                   data-toggle="lightbox" data-gallery="example-gallery"
                   class="col-sm-4">
                    <img src="{{asset('images/gallery/10402374_273383332844825_301377105096986399_n.jpg')}}"
                         class="img-fluid h-100" alt="eMobilis">
                </a>


                <a href="{{asset('images/gallery/new_1.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery"
                   class="col-sm-4">
                    <img src="{{asset('images/gallery/new_1.jpg')}}" class="img-fluid h-100" alt="eMobilis">
                </a>

                <a href="{{asset('images/gallery/12650809_490817297768093_413126563207613230_n.jpg')}}"
                   data-toggle="lightbox" data-gallery="example-gallery"
                   class="col-sm-4">
                    <img src="{{asset('images/gallery/12650809_490817297768093_413126563207613230_n.jpg')}}"
                         class="img-fluid h-100" alt="eMobilis">
                </a>

                <a href="{{asset('images/gallery/new_4.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery"
                   class="col-sm-4">
                    <img src="{{asset('images/gallery/new_4.jpg')}}" class="img-fluid h-100" alt="eMobilis">
                </a>


                <a href="{{asset('images/gallery/DSC_0008.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery"
                   class="col-sm-4">
                    <img src="{{asset('images/gallery/DSC_0008.jpg')}}" class="img-fluid h-100" alt="eMobilis">
                </a>

                <a href="{{asset('images/gallery/img_1.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery"
                   class="col-sm-4">
                    <img src="{{asset('images/gallery/img_1.jpg')}}" class="img-fluid h-100" alt="eMobilis">
                </a>

                <a href="{{asset('images/gallery/img_2.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery"
                   class="col-sm-4">
                    <img src="{{asset('images/gallery/img_2.jpg')}}" class="img-fluid h-100" alt="eMobilis">
                </a>


                <a href="{{asset('images/gallery/img_3.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery"
                   class="col-sm-4">
                    <img src="{{asset('images/gallery/img_3.jpg')}}" class="img-fluid h-100" alt="eMobilis">
                </a>

                <a href="{{asset('images/gallery/new_7.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery"
                   class="col-sm-4">
                    <img src="{{asset('images/gallery/new_7.jpg')}}" class="img-fluid h-100" alt="eMobilis">
                </a>

                <a href="{{asset('images/gallery/img_5.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery"
                   class="col-sm-4">
                    <img src="{{asset('images/gallery/img_5.jpg')}}" class="img-fluid h-100" alt="eMobilis">
                </a>

                <a href="{{asset('images/gallery/new_2.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery"
                   class="col-sm-4">
                    <img src="{{asset('images/gallery/new_2.jpg')}}" class="img-fluid h-100" alt="eMobilis">
                </a>

                <a href="{{asset('images/gallery/img_7.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery"
                   class="col-sm-4">
                    <img src="{{asset('images/gallery/img_7.jpg')}}" class="img-fluid h-100" alt="eMobilis">
                </a>

                <a href="{{asset('images/gallery/new_3.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery"
                   class="col-sm-4">
                    <img src="{{asset('images/gallery/new_3.jpg')}}" class="img-fluid h-100" alt="eMobilis">
                </a>

                <a href="{{asset('images/gallery/two.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery"
                   class="col-sm-4">
                    <img src="{{asset('images/gallery/two.jpg')}}" class="img-fluid h-100" alt="eMobilis">
                </a>

                <a href="{{asset('images/gallery/new_5.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery"
                   class="col-sm-4">
                    <img src="{{asset('images/gallery/new_5.jpg')}}" class="img-fluid h-100" alt="eMobilis">
                </a>

                <a href="{{asset('images/gallery/x2.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery"
                   class="col-sm-4">
                    <img src="{{asset('images/gallery/x2.jpg')}}" class="img-fluid h-100" alt="eMobilis">
                </a>

                <a href="{{asset('images/gallery/x3.JPG')}}" data-toggle="lightbox" data-gallery="example-gallery"
                   class="col-sm-4">
                    <img src="{{asset('images/gallery/x3.JPG')}}" class="img-fluid h-100" alt="eMobilis">
                </a>

                <a href="{{asset('images/gallery/eMobilis 1.JPG')}}" data-toggle="lightbox" data-gallery="example-gallery"
                   class="col-sm-4">
                    <img src="{{asset('images/gallery/eMobilis 1.JPG')}}" class="img-fluid h-100" alt="eMobilis">
                </a>

                <a href="{{asset('images/gallery/new_6.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery"
                   class="col-sm-4">
                    <img src="{{asset('images/gallery/new_6.jpg')}}" class="img-fluid h-100" alt="eMobilis">
                </a>


            </div>
        </div>
    </div>
@endsection

@section("extra-js-links")
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.2/dist/index.bundle.min.js"></script>
@endsection