@extends('frontend.master')
@section('content')
<section class="custom_bg_image_two my-2">
    <div class="container py-5 text-white text-center">
        <h1>
        Best-of-breed technology partners help us deliver outstanding results
        </h1>
        <h5>
        At Tech Yeah, we pride ourselves on being technology agnostic, working with whatever technologies you choose or have deployed to accomplish your business objectives. At the same time, we’re dedicated to identifying best-of-breed technology partners that offer cutting-edge, dependable solutions across a range of applications, from physical security to wireless infrastructure and more.
        </h5>
    </div>
</section>

<section class="logo_scroller_section">


        <div class="container">

            <div class="row technology_partners">
                
                <div class="">
                    <div class="d-flex">
                        <img src="{{asset('assets/media/logo/tech_yeah_logo.png')}}" alt="tech_yeah_logo" title="tech_yeah_logo" class="img-fluid logo mx-4" />
                        <div class="vr"></div>
                    </div> 
                </div>

                <div class="">
                    <div class="d-flex">
                        <img src="{{asset('assets/media/logo/tech_yeah_logo.png')}}" alt="tech_yeah_logo" title="tech_yeah_logo" class="img-fluid logo mx-4" />
                        <div class="vr"></div>
                    </div> 
                </div>

                <div class="">
                    <div class="d-flex">
                        <img src="{{asset('assets/media/logo/tech_yeah_logo.png')}}" alt="tech_yeah_logo" title="tech_yeah_logo" class="img-fluid logo mx-4" />
                        <div class="vr"></div>
                    </div> 
                </div>

                <div class="">
                    <div class="d-flex">
                        <img src="{{asset('assets/media/logo/tech_yeah_logo.png')}}" alt="tech_yeah_logo" title="tech_yeah_logo" class="img-fluid logo mx-4" />
                        <div class="vr"></div>
                    </div> 
                </div>

                <div class="">
                    <div class="d-flex">
                        <img src="{{asset('assets/media/logo/tech_yeah_logo.png')}}" alt="tech_yeah_logo" title="tech_yeah_logo" class="img-fluid logo mx-4" />
                        <div class="vr"></div>
                    </div> 
                </div>

                <div class="">
                    <div class="d-flex">
                        <img src="{{asset('assets/media/logo/tech_yeah_logo.png')}}" alt="tech_yeah_logo" title="tech_yeah_logo" class="img-fluid logo mx-4" />
                        <div class="vr"></div>
                    </div> 
                </div>

                <div class="">
                    <div class="d-flex">
                        <img src="{{asset('assets/media/logo/tech_yeah_logo.png')}}" alt="tech_yeah_logo" title="tech_yeah_logo" class="img-fluid logo mx-4" />
                        <div class="vr"></div>
                    </div> 
                </div>

                <div class="">
                    <div class="d-flex ">
                        <img src="{{asset('assets/media/logo/tech_yeah_logo.png')}}" alt="tech_yeah_logo" title="tech_yeah_logo" class="img-fluid logo mx-4" />
                        <div class="vr"></div>
                    </div> 
                </div>
            </div>

            

        </div>
    

</section>
 

@endsection
@push('customJs')
    <script>
            $('.technology_partners').slick({
     
        //   speed: 5000,
        //   autoplay: true,
        //   autoplaySpeed: 0,
        //   variableWidth: true, 
        //   initialSlide: 1,

          cssEase: 'linear',  
          arrows: false,
          buttons: false, 
          speed: 5000,
          autoplay: true,
          autoplaySpeed: 0, 
          dots: false,
          infinite: true, 
          slidesToShow: 4,
          slidesToScroll: 1, 

        responsive: [
            {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1 
            }
            },
            {
            breakpoint: 600,
            settings: { 
                slidesToShow: 2,
                slidesToScroll: 1 
            }
            },
            {
            breakpoint: 480,
            settings: { 
                slidesToShow: 1,
                slidesToScroll: 1 
            }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
        });
    </script>
@endpush