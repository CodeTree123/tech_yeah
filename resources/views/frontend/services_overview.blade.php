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
        <a href="{{route('services_overview')}}" class="text-decoration-none"> Services Overview
        </a>
      </li>
    </ol>
  </div>
</section>
<section class="technology_deployments_banner d-flex">
  <div class="px-4 py-2 my-auto mx-3 bg-glass text-center" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1000">

    <h1 class="display-5 fw-bold  text-light">
      We break the status quo by utilizing our technologies to install your technologies
    </h1>
    <a href="{{route('contact_us')}}" class="btn btn-dark">Contact Us</a>

  </div>

</section>
<section class="shadow">
  <div class="container my-4 p-4">
    <p>
      Current market conditions make it challenging for multi-site businesses to anticipate demand against rising material and labor costs. Supply chain problems and equipment delays complicate initiatives, putting large-scale projects on hold. What does a revised timeline look like? Companies need to look to partnering with flexible and creative organizations who are willing to add additional services and skillsets to their offerings. Combining and consolidating project and initiatives, has a number of advantages that your partner should be sharing with you.
      <br>
      <br>
      Deploying technology in piecemeal can be clunky and inefficient… Evaluating the pros and cons of problems and solutions on the front end can save time, money and a lot of headaches. Tech Yeah provides end-to-end solutions through evaluation, planning and SOW creation services to installation, deliverables and post-installation support. Our customers have experienced this and couldn’t be happier with the results.


    </p>
  </div>
</section>
<!-- <section>
  <div class="container py-5" id="featured-3">
    <div class="row py-5 ">
 

        <div class="col-lg-4 col-md-4 col-sm-12 col-12  my-4 ">

          <div class="p-2 s_o_card rounded shadow">
            <div class="text-center  fs-4 m-3 p-5">
            <i class="fa-solid fa-hand-holding-hand fa-2xl "></i>
            </div>
            <div>
              <h5>Managed Services</h5>
              <p class="fs-6">Tech Yeah can help you engineer the ideal solution to meet your needs and then handle the everyday maintenance and monitoring of your technologies to free your IT team for more strategic endeavors</p>
            </div>
          </div>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12  my-4 ">

          <div class="p-2  s_o_card rounded shadow">
            <div class="text-center  fs-4 m-3 p-5">
            <i class="fa-solid fa-headset  fa-2xl"></i>
            </div>
            <div>
              <h5>IT Support Services</h5> 
              <p class="fs-6">Minimize downtime with our IT support services focused on proactive maintenance and repair</p>
            </div>
          </div>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-12  my-4 ">

          <div class="p-2  s_o_card rounded shadow">
            <div class="text-center  fs-4 m-3 p-5">
            <i class="fa-solid fa-screwdriver-wrench  fa-2xl"></i>
            </div>
            <div>
              <h5>Integration & Deployment</h5> 
              <p class="fs-6"> From procurement to asset management, our integration and deployment services support you across the entire life of your technologies. </p>
            </div>
          </div>

        </div>
    </div>
</section> -->
<section class="custom_bg_image_one my-2">
  <div class="container py-5 text-white text-center">
    <h3 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="700">
      Our Project Installation & Deployment Services
    </h3>
    <!-- <h6>
        Rely on Techyeah for design and engineering services that pave the most straightforward path to success when it comes to your complex technology projects.
        </h6>
        <a href="" class="text-white text-decoration-none">Discover the benefits <i class="fa-solid fa-chevron-right"></i></a> -->
  </div>
</section>
<!-- <section>
  <div class="container d-flex justify-content-center flex-wrap py-5" id="featured-3">
      <h1>Benefits of Partnering with Techyeah for Support and Service</h1>
    <div class="border border-1 rounded p-3 pb-0 m-2 box_hover" style="width: 12rem;">
      <div class="">
        <h5 class="text-center">01</h5> 
        <p class="">Budget for regular maintenance and repairs, reducing expense and expedite fees</p> 
      </div>
    </div>

    <div class="border border-1 rounded p-3 pb-0 m-2 box_hover" style="width: 12rem;">
      <div class="">
        <h5 class="card-title text-center">02</h5> 
        <p class="">Reduce downtime associated with failed equipment</p> 
      </div>
    </div>

    <div class="border border-1 rounded p-3 pb-0 m-2 box_hover" style="width: 12rem;">
      <div class="">
        <h5 class="card-title text-center">03</h5> 
        <p class="">Outsource administrative tasks to free your team for strategic work</p> 
      </div>
    </div>

    <div class="border border-1 rounded p-3 pb-0 m-2 box_hover" style="width: 12rem;">
      <div class="">
        <h5 class="card-title text-center">04</h5> 
        <p class="">Customize a service program to access the specific support you need</p> 
      </div>
    </div>

    <div class="border border-1 rounded p-3 pb-0 m-2 box_hover" style="width: 12rem;">
      <div class="">
        <h5 class="card-title text-center">05</h5> 
        <p class="">Depend on a single resource for the convenience of single point of contact</p> 
      </div>
    </div>

  </div>
</section> -->
<section class="container my-5">

  <div class="row shadow rounded p-3 mb-5">
    <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
      <div class="  ">
        <img src="{{asset('assets/media/img/services_overview/ethernet.png')}}" alt="" width="150" height="150">
        <h4 class="my-3">Low Voltage Infrastructure</h4>
      </div>
    </div>
    <div class="col-lg-8 col-md-8 col-12 d-flex justify-content-center   flex-column">
      <div class="offset-lg-4 offset-md-4 ">
        <ul class="list-unstyled ">
          <li>
                   <i class="fa-xs fa-solid fa-circle"></i>
            <span class="">
              Ethernet
            </span>
          </li>
          <li>
                   <i class="fa-xs fa-solid fa-circle"></i>
            <span class="">
              Coaxial
            </span>
          </li>
          <li>
                   <i class="fa-xs fa-solid fa-circle"></i>
            <span class="">
              Fiber
            </span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row shadow rounded p-3 mb-5">
    <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
      <div class="  ">
         <img src="{{asset('assets/media/img/services_overview/network_rack.png')}}" alt="" width="150" height="150">
        <h4 class="my-3">Network Rack & Stack</h4>
      </div>
    </div>
    <div class="col-lg-8 col-md-8 col-12 d-flex justify-content-center   flex-column">
      <div class="offset-lg-4 offset-md-4 ">
      <ul class="list-unstyled">
        <li>
                 <i class="fa-xs fa-solid fa-circle"></i>
          <span class="">
            Switches
          </span>
        </li>
        <li>
                 <i class="fa-xs fa-solid fa-circle"></i>
          <span class="">
            Routers
          </span>
        </li>
        <li>
                 <i class="fa-xs fa-solid fa-circle"></i>
          <span class="">
            UPS's
          </span>
        </li>
      </ul>
      </div>
    </div>
  </div>
  <div class="row shadow rounded p-3 mb-5">
    <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
      <div class="  ">
        <img src="{{asset('assets/media/img/services_overview/routers.png')}}" alt="" width="150" height="150">
        <h4 class="my-3">Wireless</h4>
      </div>
    </div>
    <div class="col-lg-8 col-md-8 col-12 d-flex justify-content-center   flex-column">
      <div class="offset-lg-4 offset-md-4 ">
      <ul class="list-unstyled">
          <li>
                   <i class="fa-xs fa-solid fa-circle"></i>
            <span class="">
              Access Points
            </span>
          </li>
          <li>
                   <i class="fa-xs fa-solid fa-circle"></i>
            <span class="">
              Site Assessment
            </span>
          </li>
          <li>
                   <i class="fa-xs fa-solid fa-circle"></i>
            <span class="">
              Heat Mapping (active & predictive)
            </span>
          </li>

        </ul>
      </div>
    </div>
  </div>
  <div class="row shadow rounded p-3 mb-5">
    <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
      <div class="  ">
        <img src="{{asset('assets/media/img/services_overview/cellular_tower.png')}}" alt="" width="150" height="150">
        <h4 class="my-3">Cellular</h4>
      </div>
    </div>
    <div class="col-lg-8 col-md-8 col-12 d-flex justify-content-center   flex-column">
      <div class="offset-lg-4 offset-md-4 ">
      <ul class="list-unstyled">
        <li>
                 <i class="fa-xs fa-solid fa-circle"></i>
          <span class="">
            Primary or Back Up
          </span>
        </li>
        <li>
                 <i class="fa-xs fa-solid fa-circle"></i>
          <span class="">
            Cell Surveys
          </span>
        </li>
        <li>
                 <i class="fa-xs fa-solid fa-circle"></i>
          <span class="">
            Optimization
          </span>
        </li>

      </ul>
      </div>
    </div>
  </div> 
  <div class="row shadow rounded p-3 mb-5">
    <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
      <div class="  ">
        <img src="{{asset('assets/media/img/services_overview/end-point device.svg')}}" alt="" width="150" height="150">
        <h4 class="my-3">End-Point Device Installations</h4>
      </div>
    </div>
    <div class="col-lg-8 col-md-8 col-12 d-flex justify-content-center   flex-column">
      <div class="offset-lg-4 offset-md-4 ">  
        <ul class="list-unstyled">
        <li>
                 <i class="fa-xs fa-solid fa-circle"></i>
          <span class="">
            Any Networked Equipment
          </span>
        </li>
        <li>
                 <i class="fa-xs fa-solid fa-circle"></i>
          <span class="">
            POS Systems, Pin Pads, Scanners
          </span>
        </li>
        <li>
                 <i class="fa-xs fa-solid fa-circle"></i>
          <span class="">
            Phones (VoIP), PC's, Printers
          </span>
        </li>


      </ul>
      </div>
    </div>
  </div>  
  <div class="row shadow rounded p-3 mb-5">
    <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
      <div class="  ">
        <img src="{{asset('assets/media/img/services_overview/interactive_displays.png')}}" alt="" width="150" height="150">
        <h4 class="my-3">Digital Signage</h4>
      </div>
    </div>
    <div class="col-lg-8 col-md-8 col-12 d-flex justify-content-center   flex-column">
      <div class="offset-lg-4 offset-md-4 ">  
        <ul class="list-unstyled">
          <li>
                   <i class="fa-xs fa-solid fa-circle"></i>
            <span class="">
              Interactive Displays
            </span>
          </li>
          <li>
                   <i class="fa-xs fa-solid fa-circle"></i>
            <span class="">
              Kiosks
            </span>
          </li>
          <li>
                   <i class="fa-xs fa-solid fa-circle"></i>
            <span class="">
              Menu Boards
            </span>
          </li>

        </ul>
      </div>
    </div>
  </div>  
  <div class="row shadow rounded p-3 mb-5">
    <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
      <div class="  ">
        <img src="{{asset('assets/media/img/services_overview/horns.png')}}" alt="" width="150" height="150">
        <h4 class="my-3">Sound Systems & Paging</h4>
      </div>
    </div>
    <div class="col-lg-8 col-md-8 col-12 d-flex justify-content-center   flex-column">
      <div class="offset-lg-4 offset-md-4 ">  
      <ul class="list-unstyled ">
        <li>
                 <i class="fa-xs fa-solid fa-circle"></i>
          <span class="">
            Horns
          </span>
        </li>
        <li>
                 <i class="fa-xs fa-solid fa-circle"></i>
          <span class="">
            Speakers
          </span>
        </li>
        <li>
                 <i class="fa-xs fa-solid fa-circle"></i>
          <span class="">
            Amplifiers
          </span>
        </li>
      </ul>
      </div>
    </div>
  </div>  
  <div class="row shadow rounded p-3 mb-5">
    <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
      <div class="  ">
        <img src="{{asset('assets/media/img/services_overview/cameras.webp')}}" alt="" width="150" height="150">
        <h4 class="my-3">Security</h4>
      </div>
    </div>
    <div class="col-lg-8 col-md-8 col-12 d-flex justify-content-center   flex-column">
      <div class="offset-lg-4 offset-md-4 ">  
        <ul class="list-unstyled">
          <li>
                   <i class="fa-xs fa-solid fa-circle"></i>
            <span class="">
              Cameras - NVR/DVR
            </span>
          </li>
          <li>
                   <i class="fa-xs fa-solid fa-circle"></i>
            <span class="">
              Access Control
            </span>
          </li>
          <li>
                   <i class="fa-xs fa-solid fa-circle"></i>
            <span class="">
              Fire & Burglar
            </span>
          </li>

        </ul>
      </div>
    </div>
  </div>  
  <div class="row shadow rounded p-3 mb-5">
    <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
      <div class="  ">
        <img src="{{asset('assets/media/img/services_overview/high_voltage_electrical.png')}}" alt="" width="150" height="150">
        <h4 class="my-3">High Voltage Electrical</h4>
        
      </div>
    </div>
    <div class="col-lg-8 col-md-8 col-12 d-flex justify-content-center   flex-column">
      <div class="offset-lg-4 offset-md-4 ">  
      <ul class="list-unstyled">
        <li>
                 <i class="fa-xs fa-solid fa-circle"></i>
          <span class="">
            Electrical Outlets
          </span>
        </li>
        <li>
                 <i class="fa-xs fa-solid fa-circle"></i>
          <span class="">
            Dedicated Circuits
          </span>
        </li>
        <li>
                 <i class="fa-xs fa-solid fa-circle"></i>
          <span class="">
            Energy Management & Lighting
          </span>
        </li>
      </ul>
      </div>
    </div>
  </div>   


</section>

@endsection