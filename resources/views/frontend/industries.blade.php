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
          <a  href="{{route('industries')}}" class="text-decoration-none">  Industries
          </a>
      </li>  
    </ol> 
    </div>
</section>
<section class="industries_banner d-flex justify-content-center">
    <div class="px-4 py-2 my-auto mx-3 bg-glass text-center" data-aos="zoom-in"
     data-aos-easing="linear"
     data-aos-duration="1000">

        <h1 class="display-5 fw-bold   ">
        Tech yeah builds relationships of trust and respect
        </h1>
        <a href="{{route('contact_us')}}" class="btn btn-dark">Contact Us</a>

    </div>

</section>
 
<section class="custom_bg_image_one mb-2">
    <div class="container ">
        <div class="py-5 d-flex jusify-content-between align-items-center text-white text-center">
            <!-- <i class="fa-solid fa-shop fa-2xl"></i> -->
            <h5 class="text-start px-5">
            Tech Yeah becomes an extension of your IT teams which harmonizes communication, quality and execution
            </h5>
        </div>
    </div>
</section>
<section class="container my-5">
    <h3 class="text-center">Industries Served</h3>

    <div class="row justify-content-center align-items-center shadow rounded mb-5 mx-3 "> 
        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-lg-0 mb-md-0 mb-sm-0 mb-5">
            <div class="text-center me-3">
                <img src="{{asset('assets/media/img/industries/RETAIL.svg')}}" alt="" width="150" height="150">
                <h4>Retail</h4>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
            <div class="d-flex justify-content-evenly">
                <div class="text-center mx-3">
                    <img src="{{asset('assets/media/img/industries/big-box.png')}}" alt="" width="80" height="80" class="m-2 img-fluid">
                    <h5>Big Box</h5>
                </div>
                <div class="text-center mx-3">
                    <img src="{{asset('assets/media/img/industries/specialty.png')}}" alt="" width="80" height="80" class="m-2 img-fluid">
                    <h5>Specialty</h5>
                </div>
                <div class="text-center mx-3">
                    <img src="{{asset('assets/media/img/industries/grocery.png')}}" alt="" width="80" height="80" class="m-2 img-fluid">
                    <h5>Grocery</h5>
                </div>
            </div>
        </div>  
    </div>
    <div class="row justify-content-center align-items-center shadow rounded mb-5 mx-3 ">

        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-lg-0 mb-md-0 mb-sm-0 mb-5 ">
            <div class="text-center me-3  ">
                <img src="{{asset('assets/media/img/industries/HEALTHCARE.svg')}}" alt="" width="150" height="150">
                <h4>Healthcare</h4>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
            <div class="d-flex justify-content-evenly">
                <div class="text-center mx-3">
                    <img src="{{asset('assets/media/img/industries/home-health.png')}}" alt="" width="80" height="80" class="m-2 img-fluid">
                    <h5>Home health</h5>
                </div>
                <div class="text-center mx-3">
                    <img src="{{asset('assets/media/img/industries/hospice.png')}}" alt="" width="80" height="80" class="m-2 img-fluid">
                    <h5>Hospice</h5>
                </div>
                <div class="text-center mx-3">
                    <img src="{{asset('assets/media/img/industries/senior-living.png')}}" alt="" width="80" height="80" class="m-2 img-fluid">
                    <h5>Senior Living</h5>
                </div>
            </div>
        </div> 
    </div>
    <div class="row justify-content-center align-items-center shadow rounded mb-5 mx-3 "> 
        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-lg-0 mb-md-0 mb-sm-0 mb-5">
            <div class="text-center me-3">
                <img src="{{asset('assets/media/img/industries/HEALTHCARE.svg')}}" alt="" width="150" height="150">
                <h4>Healthcare II</h4>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
            <div class="d-flex justify-content-evenly">
                <div class="text-center mx-3">
                    <img src="{{asset('assets/media/img/industries/hospitals_a.png')}}" alt="" width="80" height="80" class="m-2 img-fluid">
                    <h5>Hospitals</h5>
                </div>
                <div class="text-center mx-3">
                    <img src="{{asset('assets/media/img/industries/urgent_care.png')}}" alt="" width="80" height="80" class="m-2 img-fluid">
                    <h5>Urgent Care</h5>
                </div>
                <div class="text-center mx-3">
                    <img src="{{asset('assets/media/img/industries/dialysis.png')}}" alt="" width="80" height="80" class="m-2 img-fluid">
                    <h5>Dialysis</h5>
                </div>
            </div>
        </div> 
    </div>
    <div class="row justify-content-center align-items-center shadow rounded mb-5 mx-3 "> 
        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-lg-0 mb-md-0 mb-sm-0 mb-5">
            <div class="text-center me-3">
                <img src="{{asset('assets/media/img/industries/RESTAURANTS.svg')}}" alt="" width="150" height="150">
                <h4>Restaurants</h4>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
            <div class="d-flex justify-content-evenly">
                <div class="text-center mx-3">
                    <img src="{{asset('assets/media/img/industries/dine-in.png')}}" alt="" width="80" height="80" class="m-2 img-fluid">
                    <h5>Dine-in</h5>
                </div>
                <div class="text-center mx-3">
                    <img src="{{asset('assets/media/img/industries/qsr.png')}}" alt="" width="80" height="80" class="m-2 img-fluid">
                    <h5>QSR</h5>
                </div>
                <div class="text-center mx-3">
                    <img src="{{asset('assets/media/img/industries/fast_casual.png')}}" alt="" width="80" height="80" class="m-2 img-fluid">
                    <h5>Fast Casual</h5>
                </div>
            </div>
        </div> 
    </div>
    <div class="row justify-content-center align-items-center shadow rounded mb-5 mx-3 "> 
        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-lg-0 mb-md-0 mb-sm-0 mb-5">
            <div class="text-center me-3">
                <img src="{{asset('assets/media/img/industries/FINANCE.svg')}}" alt="" width="150" height="150">
                <h4>Finance</h4>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
            <div class="d-flex justify-content-evenly">
                <div class="text-center mx-3">
                    <img src="{{asset('assets/media/img/industries/banks.png')}}" alt="" width="80" height="80" class="m-2 img-fluid">
                    <h5>Banks</h5>
                </div>
                <div class="text-center mx-3">
                    <img src="{{asset('assets/media/img/industries/credit_unions.png')}}" alt="" width="80" height="80" class="m-2 img-fluid">
                    <h5>Credit Unions</h5>
                </div>
                <div class="text-center mx-3">
                    <img src="{{asset('assets/media/img/industries/tax.png')}}" alt="" width="80" height="80" class="m-2 img-fluid">
                    <h5>Tax Preparation</h5>
                </div>
            </div>
        </div> 
    </div>
    <div class="row justify-content-center align-items-center shadow rounded mb-5 mx-3 "> 
        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-lg-0 mb-md-0 mb-sm-0 mb-5">
            <div class="text-center me-3">
                <img src="{{asset('assets/media/img/industries/CONVENIENCE.svg')}}" alt="" width="150" height="150">
                <h4>Convenience</h4>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
            <div class="d-flex justify-content-evenly">
                <div class="text-center mx-3">
                    <img src="{{asset('assets/media/img/industries/General_Store.png')}}" alt="" width="80" height="80" class="m-2 img-fluid">
                    <h5>General Store </h5>
                </div>
                <div class="text-center mx-3">
                    <img src="{{asset('assets/media/img/industries/c_store.png')}}" alt="" width="80" height="80" class="m-2 img-fluid">
                    <h5>C-Store</h5>
                </div>
                <div class="text-center mx-3">
                    <img src="{{asset('assets/media/img/industries/gas_stations.png')}}" alt="" width="80" height="80" class="m-2 img-fluid">
                    <h5> Gas Stations</h5>
                </div> 
            </div>
        </div> 
    </div>
    <div class="row justify-content-center align-items-center shadow rounded mb-5 mx-3 "> 
        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-lg-0 mb-md-0 mb-sm-0 mb-5">
            <div class="text-center me-3">
                <img src="{{asset('assets/media/img/industries/manufacture.svg')}}" alt="" width="150" height="150">
                <h4>Manufacturing</h4>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
            <div class="d-flex justify-content-evenly">
                <div class="text-center mx-3">
                    <img src="{{asset('assets/media/img/industries/distribution_centers.png')}}" alt="" width="80" height="80" class="m-2 img-fluid">
                    <h5>Distribution Centers </h5>
                </div>
                <div class="text-center mx-3">
                    <img src="{{asset('assets/media/img/industries/offices.png')}}" alt="" width="80" height="80" class="m-2 img-fluid">
                    <h5>  Offices</h5>
                </div> 
                <div class="text-center mx-3">
                    <img src="{{asset('assets/media/img/industries/warehouse.png')}}" alt="" width="80" height="80" class="m-2 img-fluid">
                    <h5>  Warehouse</h5>
                </div> 
            </div>
        </div> 
    </div>
    <div class="row justify-content-center align-items-center shadow rounded mb-5 mx-3 "> 
        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-lg-0 mb-md-0 mb-sm-0 mb-5">
            <div class="text-center me-3">
                <img src="{{asset('assets/media/img/industries/graduation.svg')}}" alt="" width="150" height="150">
                <h4>Education</h4>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
            <div class="d-flex justify-content-evenly">
                <div class="text-center mx-3">
                    <img src="{{asset('assets/media/img/industries/schools.png')}}" alt="" width="80" height="80" class="m-2 img-fluid">
                    <h5>Schools   </h5>
                </div>
                <div class="text-center mx-3">
                    <img src="{{asset('assets/media/img/industries/districts.png')}}" alt="" width="80" height="80" class="m-2 img-fluid">
                    <h5>  Districts</h5>
                </div> 
                <div class="text-center mx-3">
                    <img src="{{asset('assets/media/img/industries/universities.png')}}" alt="" width="80" height="80" class="m-2 img-fluid">
                    <h5>  Universities </h5>
                </div> 
            </div>
        </div> 
    </div>


</section>
<!-- <section class="container my-5">
    <div class="row">
        <div class="col-lg-5 col-md-4 col-sm-12 col-12 my-auto">
            <div class="">
                <img src="{{asset('assets/media/img/retail_section.png')}}" class="img-fluid leaf-shape" alt="">
            </div>
        </div>
        <div class="col-lg-7 col-md-8 col-sm-12 col-12 my-auto p-5">
            <div>
                <h3>
                    From in-store promotions to the “last mile” of delivery, retailer's success hinges on precision
                    operations and a dependable customer experience.
                </h3>
                <h5>
                    True omnichannel retailing means allowing consumers to shop on their terms, via their preferred
                    channel, and having product delivered to the location of their choice, on their timeframe. Retail
                    technology is essential to providing real-time insight into inventory, complex operations and
                    customer preferences.
                    <br>
                    <br>
                    <br>
                    The complexities associated with managing dozens of technologies over multiple locations, ensuring
                    uptime and keeping track of technology assets can be daunting. Handling new store technology
                    deployments and upgrades calls for meticulous project management, broad technology expertise and
                    precision logistics to keep projects on time and on budget.
                </h5>
            </div>
        </div>
    </div>
</section> -->
<!-- <section class="container">
    <div>
        <h2>Tech Yeah knows retail</h2>
        <h4>Whether deploying technologies to optimize the front-of-the-house or the back-of-the-house, Tech Yeah can
            support your operation with technologies including:</h4>

        <div>
            <div class="d-flex  align-items-center py-4">
                <div>
                    <i class="fa-solid fa-2xl px-3 fa-network-wired"></i>
                </div>
                <div>
                    Complex, multi-site rapid deployment services for retail that keep technology integrations on time
                    and on budget.
                </div>
            </div>
            <div class="d-flex  align-items-center py-4">
                <div>
                    <i class="fa-solid fa-2xl px-3 fa-wifi"></i>

                </div>
                <div class="text-start">
                    Spot-on wireless networks that support mission-critical technologies, essential customer Wi-Fi and
                    secure wireless access.
                </div>
            </div>
            <div class="d-flex  align-items-center py-4">
                <div>
                    <i class="fa-solid fa-2xl px-3 fa-arrows-spin"></i>

                </div>
                <div class="text-start">
                    Asset lifecycle management for retail including cradle-to-grave management, optimization, support
                    and repair for all of your technologies from POS to cutting-edge IoT devices.
                </div>
            </div>
            <div class="d-flex  align-items-center py-4">
                <div>
                    <i class="fa-solid fa-2xl px-3 fa-shield-halved"></i>

                </div>
                <div>
                    Unified physical security solutions for retail to protect people, property and assets as well as
                    optimize operations and improve customer service.
                </div>
            </div>
        </div>


    </div>
</section> -->
  

@endsection