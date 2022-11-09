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
      <li class="breadcrumb-item">
          <a   href="{{route('why_techyeah')}}" class="text-decoration-none">  Why Tech Yeah
          </a>
      </li>  
    </ol> 
    </div>
</section>
<section class="why_tech_yeah_banner d-flex">
    <div class="px-4 py-2 my-auto mx-3 bg-glass text-center" data-aos="zoom-in"
     data-aos-easing="linear"
     data-aos-duration="1000">

    <h1 class="display-5 fw-bold  text-light">
    Tech Yeah’s mission, vision, and values reflect continued commitment to our customer's interests. 
    </h1>
    <a href="{{route('contact_us')}}" class="btn btn-dark">Contact Us</a>

  </div>

</section>

<section> 
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse  justify-content-center align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6"  data-aos="fade-down"
     data-aos-duration="3000">
            <img src="{{asset('assets/media/img/Mission.png')}}"  class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6" data-aos="fade-up"
     data-aos-duration="3000">
            <h1 class="display-5 fw-bold lh-1 mb-3">Mission</h1>
            <p class="lead">With honesty, integrity and accountability we strive to be the leading provider of onsite IT installations. We do this with operational excellence by incessantly focusing on the most impactful activities. We are laser focused on our customers and partnering with America's businesses… we give our customers what they want, not what we think they want.</p>
          
          </div>
        </div>
      </div>
</section>

<section> 
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row d-flex justify-content-center align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6" data-aos="fade-up"
     data-aos-duration="3000">
            <img src="{{asset('assets/media/img/Vision.png')}}"  class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
        <div class="col-lg-6" data-aos="fade-down"
     data-aos-duration="3000">
            <h1 class="display-5 fw-bold lh-1 mb-3">Vision</h1>
            <p class="lead">By leveraging technology, innovation and automation, we aim to enable companies with the ability to rapidly execute project initiatives, with clear communication, quality workmanship while providing foresight into future projects.</p>
          </div>
      
        
        </div>
      </div>
</section>
<style>
  
</style>
<section> 
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse  justify-content-center align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="{{asset('assets/media/img/Values.png')}}"  class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy"   data-aos="fade-left">
          </div>
          <div class="col-lg-6"  >
            <div class=""   data-aos="fade-right">

              <h1 class="display-5 fw-bold lh-1 mb-3">Values</h1>
              <h6 class=" fw-bold lh-1 mb-3">Tech Yeah’s core values are to: </h6>
            </div>
            <p class="lead">
            <div class="list-group list-group-flush" >
                <div class="list-group-item  "    >
                <i class="fa-solid fa-certificate text-primary"></i>
                Demonstrate honesty & humility everywhere
              </div>
              
                <div class="list-group-item"   >
                <i class="fa-solid fa-certificate text-primary"></i>
                Continually learn, adapt, and grow.
              </div>
                <div class="list-group-item"    >
                <i class="fa-solid fa-certificate text-primary"></i>
                Keep our word
              </div> 
              </div>
            </p>
          
          </div>
        </div>
      </div>
</section>
 
@endsection