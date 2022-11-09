@extends('frontend.master')
@section('content')
<section class="ts_hero">
    <div class="px-4 py-5 my-5 text-center">
       
        <h1 class="display-5 fw-bold text-light">
          Tech Yeah's Technology Solution Center: the heart of our zero defect operation
        </h1> 
      </div>

</section>
<section>
     <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="p_section mx-auto"> 
                  <img src="{{asset('assets/media/img/b1.jpg')}}"   class="img-fluid ts_section"/> 

              </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-12">
              <h2 class="text-primary my-4">
                    Tech Yeah's state-of-the-art Technology Solution Center (TSC) is the location where we organize, stage, configure and repair equipment.
              </h2>
              <p>
                    Our comprehensive asset management services ensure your projects are handled with complete consistency and precision for on time, on budget delivery. We aggregate, configure, kit and ship equipment so that it arrives on site, ready for plug-and-play installation. See how our TSC makes the complex, simple by managing every detail of your technology.
              </p>
          </div>
        </div>
     </div>
</section>
<section>
<div class="container px-4 py-5" id="featured-3"> 
    <div class="row  py-5 "> 

     <div class="col">

        <div class="d-flex flex-lg-row flex-md-row flex-sm-column flex-column justify-content-center align-items-center mx-1 my-4 rounded shadow">

          <div class="text-center  fs-4 m-3 p-5">
            <i class="fa-2xl fa-solid fa-warehouse"></i>
          </div>
          <div class="p-lg-0 p-md-0 p-sm-3 p-3">
            <h5 >Step: 1</h5>
            <h6 >INVENTORY</h6>
            <p class="fs-6">We receive, sort, evaluate and inventory devices to evaluate condition, count devices, note technical details and enable easy selection when needed in the field. We warehouse hundreds of thousands of devices for our clients each year in our warehouse complete with 250,000 ft2 of rackable space.</p>
          </div>
          
        </div>

        <div class="d-flex flex-lg-row flex-md-row flex-sm-column flex-column justify-content-center align-items-center mx-1 my-4 rounded shadow">

          <div class="text-center  fs-4 m-3 p-5">
            <i class="fa-2xl fa-solid fa-wrench"></i>
          </div>
          <div class="p-lg-0 p-md-0 p-sm-3 p-3">
            <h5 >Step: 2</h5>
            <h6 >STAGE & CONFIGURATION</h6>
            <p class="fs-6">We pre-stage and configure your devices in the TSC so they are prepared for plug-and-play installation upon arrival in the field. Our fully automated process can configure 800 devices concurrently for speed and efficiency.</p> 
          </div> 

         </div>

        <div class="d-flex flex-lg-row flex-md-row flex-sm-column flex-column justify-content-center align-items-center mx-1 my-4 rounded shadow">

          <div class="text-center  fs-4 m-3 p-5">
              <i class="fa-2xl fa-sharp fa-solid fa-ship"></i>
          </div>
          <div class="p-lg-0 p-md-0 p-sm-3 p-3">
            <h5 >Step: 3</h5>
            <h6 >KIT & SHIP</h6>
            <p class="fs-6">  For every shipment, we kit, package and ship to the right location on a precision timeline so that deployment is easy. Our precision methodology results in a 98.8% project success rate.</p> 
          </div> 

         </div>

        <div class="d-flex flex-lg-row flex-md-row flex-sm-column flex-column justify-content-center align-items-center mx-1 my-4 rounded shadow">

          <div class="text-center  fs-4 m-3 p-5">
             <i class="fa-2xl fa-solid fa-toolbox"></i>
          </div>
          <div class="p-lg-0 p-md-0 p-sm-3 p-3">
            <h5 >Step: 4</h5>
            <h6 > SUPPORT & REPAIR</h6>
            <p class="fs-6"> The TSC is home to Tech Yeah's Help Desk, which provides 24x7x365 level 1, 2 and 3 support as well as monitoring and administrative support. Our team has a track record of 95% first visit resolution.</p> 
          </div> 

         </div>


    </div>
  </div>
</section>
 
@endsection