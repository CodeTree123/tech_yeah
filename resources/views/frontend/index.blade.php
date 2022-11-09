@extends('frontend.master')

@section('content')
<section class=" border-bottom py-3 d-flex ">
    <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="  mt-2 container">

    <ol class="breadcrumb container">
    <li class="breadcrumb-item">
        <a href="/" class="text-decoration-none">
        <i class="fa-solid fa-house"></i> Home
        </a>
    </li>  
    </ol> 
    </div>
</section>
<section>
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12  ">

                <div class="d-flex flex-column align-items-center">
                    <img src="{{asset('assets/media/img/h_banner_1.png')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy" data-aos="zoom-in" data-aos-duration="1000">
                    
                    <img src="{{asset('assets/media/logo/tech_yeah_logo.png')}}" alt="tech_yeah_logo" title="tech_yeah_logo" class="img-fluid   " width="250" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <h1 class="display-5 fw-bold lh-1 mb-3">Tech Yeah removes the headaches
                    that come with technology project
                    deployments.
                    </p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="{{route('services_overview')}}" class="btn btn-outline-primary btn-lg px-4 me-md-2">
                            Explore Our Solutions
                        </a>
                    </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom" data-aos="fade-up" data-aos-duration="500">3 ways we achieve results for you.</h2>
        <div class="row text-center g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex justify-content-center align-items-start pt-2"  data-aos="zoom-in"
     data-aos-duration="900">
                <div class="shadow rounded  p-2 mx-1 box_hover h_box_one" style="width: 18rem; height:8rem">
                    <div class=" m-4 ">
                        <i class="fa-solid fa-coins  fa-2xl"></i>
                    </div>
                    <div class="">
                        <h5 class="">40 years of technology deployment experience</h5>

                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center align-items-start " data-aos="zoom-in"
     data-aos-duration="1300">
                <div class="shadow rounded p-2 mx-1 box_hover h_box_one" style="width: 18rem; height:8rem">
                    <div class=" m-4 ">
                        <i class="fa-solid fa-business-time fa-2xl"></i>
                    </div>
                    <div>
                        <h5 class="">Delivery of project on time and within budget.</h5>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center align-items-start " data-aos="zoom-in"
     data-aos-duration="1600">
                <div class="shadow rounded p-2 mx-1 box_hover h_box_one" style="width: 18rem; height:8rem">
                    <div class=" m-4 ">
                        <i class="fa-solid fa-thumbs-up  fa-2xl"></i>
                    </div>
                    <div>
                        <h5 class="">	Real Customer value</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 
<section class="custom_bg_image_two my-2"  data-aos="fade-up" data-aos-duration="2200">
    <div class="container py-5 text-white text-center">
        <div class="bg-glass">
            <h1>
                Our performance speaks for itself.
            </h1>
            <!-- <div class="container my-5 text-danger">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 my-3">
                        <div class="d-flex justify-content-center  align-items-center">
                            <div>
                                <i class="fa-solid fa-clock fa-2xl"></i>
                            </div>
                            <div>
                                <h2>98.8%</h2>
                                <p class="px-3 mb-0">on-time delivery of projects</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 my-3">
                        <div class="d-flex justify-content-center align-items-center">
                            <div>
                                <i class="fa-solid fa-thumbs-up fa-2xl"></i>
                            </div>
                            <div>
                                <h2>98.8%</h2>
                                <p class="px-3 mb-0">on-time delivery of projects</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 my-3">
                        <div class="d-flex justify-content-center align-items-center">
                            <div>
                                <i class="fa-solid fa-certificate fa-2xl"></i>
                            </div>
                            <div>
                                <h2>98.8%</h2>
                                <p class="px-3 mb-0">on-time delivery of projects</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
<section>
    <div class="container my-5">
            <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            Tired of return trips and budget overages?
            </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
            Tech Yeah combines 40 years of technology deployment experience to ensure you stay on budget
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            Tired of hunting down updates and getting timely answers?


            </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
            Tech Yeah becomes an extension of your IT teams which harmonizes communication, quality and execution
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Tired of taking it to the wire in order to complete on time?


            </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
            All projects are thrown curve-balls, Planning and milestones are key. Tech Yeah’s proactive, Project Managers are great curve-ball hitters
        </div>
            </div>
        </div>
        </div>
    </div>
</section>
<section class="custom_bg_image_one my-2">
    <div class="container py-5 text-white text-center">
        <h1   data-aos="fade-up"
     data-aos-easing="linear"
     data-aos-duration="700">
        We break the status quo by utilizing our technologies to install your technologies.
        </h1>
    </div>
</section>
<!-- <section class="">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 my-2">
                <div class="card box_hover h_box_two">
                    <div class="card-body cards_height">
                        <i class="fa-solid fa-gears fa-2xl my-5"></i>

                        <h5 class="card-title text-primary fw-bold"> Integration & Deployment</h5>
                        <p class="card-text fs-5 fw-bold">We can help you vet and select technologies, manage procurement and handle asset management.</p>
                        <p class="card-text"> 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 my-2">
                <div class="card box_hover h_box_two">
                    <div class="card-body cards_height">
                        <i class="fa-solid fa-hand-holding-hand fa-2xl my-5"></i>

                        <h5 class="card-title text-primary fw-bold"> Managed Services</h5>
                        <p class="card-text fs-5 fw-bold">We can help you engineer a unique solution to accomplish your business objectives and then support your IT team with ongoing maintenance and monitoring.</p>
                        <p class="card-text"> 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 my-2">
                <div class="card box_hover h_box_two">
                    <div class="card-body cards_height">
                        <i class="fa-solid fa-headset fa-2xl my-5"></i>

                        <h5 class="card-title text-primary fw-bold"> Integration & Deployment</h5>
                        <p class="card-text fs-5 fw-bold">Our IT support services minimize downtime and focus on proactive maintenance and repair.</p>
                        <p class="card-text"> 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->



<section class=" my-2">
    <div class="container py-5  text-center">
        <h1>Industries we serve
        </h1>
    </div>
</section>
<section>
    <div class="container">
        <div class="row align-items-stretch justify-content-center">
            <a href="{{route('industries')}}"  class="col-lg-3 col-md-3 col-sm-12 col-12 my-4  d-flex  justify-content-center align-items-stretch "> 
                <div class="card shadow text-center py-5 " style="width: 18rem;">
                    <img src="{{asset('assets/media/img/RETAIL.svg')}}" width="100" class="mx-auto" />

                    <div class="card-body">
                        <h5 class="card-title"> Retail</h5>
                        <!-- <p class="card-text">Supporting a new era of retailing</p> -->
                        <!-- <a href="{{route('retail')}}" class="btn btn-outline-primary">MORE ON BIG BOX</a> -->
                    </div>
                </div> 
            </a>
            <a href="{{route('industries')}}"  class="col-lg-3 col-md-3 col-sm-12 col-12 my-4 d-flex justify-content-center align-items-stretch  "> 
            <div class="card shadow text-center py-5" style="width: 18rem;">
                    <img src="{{asset('assets/media/img/HEALTHCARE.svg')}}" width="100" class="mx-auto" />
                    <div class="card-body">
                        <h5 class="card-title">Healthcare</h5>
                        <!-- <p class="card-text">Automating operations for efficiency</p> -->
                        <!-- <a href="{{route('healthcare')}}" class="btn btn-outline-primary">MORE ON HEALTHCARE</a> -->
                    </div>
                </div>
            </a>
                 
            <a href="{{route('industries')}}" class="col-lg-3 col-md-3 col-sm-12 col-12 my-4 d-flex justify-content-center align-items-stretch  ">
                 
                <div class="card shadow text-center py-5" style="width: 18rem;">
                        <img src="{{asset('assets/media/img/HEALTHCARE.svg')}}" width="100" class="mx-auto" />
                        <div class="card-body">
                            <h5 class="card-title">	Healthcare II</h5>
                            <!-- <p class="card-text">Automating operations for efficiency</p> -->
                            <!-- <a href="{{route('healthcare')}}" class="btn btn-outline-primary">MORE ON HEALTHCARE</a> -->
                        </div>
                    </div>   
            </a>
            <a href="{{route('industries')}}" class="col-lg-3 col-md-3 col-sm-12 col-12 my-4  d-flex  justify-content-center align-items-stretch " > 
            <div class="card shadow text-center py-5" style="width: 18rem;">
                    <img src="{{asset('assets/media/img/RESTAURANTS.svg')}}" width="100" class="mx-auto" />

                    <div class="card-body">
                        <h5 class="card-title">Restaurants</h5>
                        <!-- <p class="card-text">Introducing technologies that deliver dining choices</p> -->
                        <!-- <a href="{{route('qsr')}}" class="btn btn-outline-primary">MORE ON QSR</a> -->
                    </div>
                </div> 
               
            </a>
            <a href="{{route('industries')}}"  class="col-lg-3 col-md-3 col-sm-12 col-12 my-4 d-flex  justify-content-center align-items-stretch"> 
            <div class="card shadow text-center py-5" style="width: 18rem;">
                    <img src="{{asset('assets/media/img/FINANCE.svg')}}" width="100" class="mx-auto" />

                    <div class="card-body">
                        <h5 class="card-title">Finance</h5>
                        <!-- <p class="card-text">Managing assets for efficiency and cost savings</p> -->
                        <!-- <a href="{{route('finance')}}" class="btn btn-outline-primary">MORE ON FINANCE</a> -->
                    </div>
                </div> 
   
              
            </a>
            <a  href="{{route('industries')}}"  class="col-lg-3 col-md-3 col-sm-12 col-12 my-4  d-flex  justify-content-center align-items-stretch">
          
            <div class="card shadow text-center py-5" style="width: 18rem;">
                    <img src="{{asset('assets/media/img/CONVENIENCE.svg')}}" width="100" class="mx-auto" />
                    <div class="card-body">
                        <h5 class="card-title">Convenience</h5>
                        <!-- <p class="card-text">Optimizing convenience and safety in c-stores</p> -->
                        <!-- <a href="{{route('convenience')}}" class="btn btn-outline-primary">MORE ON C-STORES</a> -->
                    </div>
                </div> 
       
               
            </a>
            <a href="{{route('industries')}}" class="col-lg-3 col-md-3 col-sm-12 col-12 my-4  d-flex  justify-content-center align-items-stretch">
      
                <div class="card shadow text-center py-5" style="width: 18rem;">
                    <img src="{{asset('assets/media/img/manufacture.svg')}}" width="100" class="mx-auto" />

                    <div class="card-body">
                        <h5 class="card-title">Manufacturing</h5>
                        <!-- <p class="card-text">Enabling omnichannel grocery retailing with innovative technology</p> -->
                        <!-- <a href="{{route('grocery')}}" class="btn btn-outline-primary">MORE ON GROCERY</a> -->
                    </div>
                </div>
            </a>
         
            <a  href="{{route('industries')}}" class="col-lg-3 col-md-3 col-sm-12 col-12 my-4  d-flex  justify-content-center align-items-stretch">
                <div class="card shadow text-center py-5" style="width: 18rem;">
                    <img src="{{asset('assets/media/img/graduation.svg')}}" width="100" class="mx-auto" />
                    <div class="card-body">
                        <h5 class="card-title">Education</h5>
                        <!-- <p class="card-text">Driving efficiency and accuracy in logistics</p> -->
                        <!-- <a href="{{route('logistics')}}" class="btn btn-outline-primary">MORE ON LOGISTICS</a> -->
                    </div>
                </div>
            </a> 
        </div>
    </div>
</section>
<!-- <section class="bg-primary mb-5">
    <div class="row mx-0">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 p-4">
            <div class="text-center">
                <img src="{{asset('assets/media/img/b1.jpg')}}" width="400" class="img-fluid" />
                <h2 class="link-white my-4">

                    <a href="{{route('contact_us')}}" class="link-light">Discover Why Tech Yeah <i class="fa-solid fa-arrow-right"></i></a>
                </h2>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 p-4">
            <div class="text-white">
                <h2>Proven Process: The secret to your success</h2>
                <h4>Our 7-step Proven Process is the result of thousands of successful client projects.</h4>
            </div>
            <div> 
            <ul class="fa-ul text-white custom_ul">
                <li><span class="fa-li"><i class="fa-solid fa-magnifying-glass"></i></span>
                    Evaluate project
                </li>
                <li><span class="fa-li"><i class="fa-solid fa-paperclip"></i></span>
                  Assign best resources
                </li>
                <li><span class="fa-li"><i class="fa-solid fa-check-double"></i></span>
                  Execute with precision and effectiveness
                </li>
                <li><span class="fa-li"><i class="fa-solid fa-file"></i></span>
                  Maintain projects on time, on budget
                </li>
            </ul>

            </div>
        </div>
    </div>
</section> -->
<section class="logo_scroller_section my-5  ">

        <div class="container">

            <div class="row technology_partners ">
                
                <div class="">
                    <div class="d-flex justify-content-evenly ">
                        <img src="{{asset('assets/media/logo/tech_yeah_logo.png')}}" alt="tech_yeah_logo" title="tech_yeah_logo" class="img-fluid logo mx-4" />
                        <div class="vr"></div>
                    </div> 
                </div>

                <div class="">
                    <div class="d-flex justify-content-evenly">
                        <img src="{{asset('assets/media/logo/tech_yeah_logo.png')}}" alt="tech_yeah_logo" title="tech_yeah_logo" class="img-fluid logo mx-4" />
                        <div class="vr"></div>
                    </div> 
                </div>

                <div class="">
                    <div class="d-flex justify-content-evenly">
                        <img src="{{asset('assets/media/logo/tech_yeah_logo.png')}}" alt="tech_yeah_logo" title="tech_yeah_logo" class="img-fluid logo mx-4" />
                        <div class="vr"></div>
                    </div> 
                </div>

                <div class="">
                    <div class="d-flex justify-content-evenly">
                        <img src="{{asset('assets/media/logo/tech_yeah_logo.png')}}" alt="tech_yeah_logo" title="tech_yeah_logo" class="img-fluid logo mx-4" />
                        <div class="vr"></div>
                    </div> 
                </div>

                <div class="">
                    <div class="d-flex justify-content-evenly">
                        <img src="{{asset('assets/media/logo/tech_yeah_logo.png')}}" alt="tech_yeah_logo" title="tech_yeah_logo" class="img-fluid logo mx-4" />
                        <div class="vr"></div>
                    </div> 
                </div>

                <div class="">
                    <div class="d-flex justify-content-evenly">
                        <img src="{{asset('assets/media/logo/tech_yeah_logo.png')}}" alt="tech_yeah_logo" title="tech_yeah_logo" class="img-fluid logo mx-4" />
                        <div class="vr"></div>
                    </div> 
                </div>

                <div class="">
                    <div class="d-flex justify-content-evenly">
                        <img src="{{asset('assets/media/logo/tech_yeah_logo.png')}}" alt="tech_yeah_logo" title="tech_yeah_logo" class="img-fluid logo mx-4" />
                        <div class="vr"></div>
                    </div> 
                </div>

                <div class="">
                    <div class="d-flex justify-content-evenly ">
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