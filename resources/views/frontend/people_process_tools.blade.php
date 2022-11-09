@extends('frontend.master')
@section('content')
<section class="p_hero"> 
    <div class="px-4 py-5 my-5 text-center">
       
       <h1 class="display-5 fw-bold text-dark-300   bg-glass">Tech Yeah's People, Process and Tools deliver unparalleled results</h1> 
     </div> 

</section>
<section>
     <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="p_section mx-auto">
                  <img src="{{asset('assets/media/img/p_section_img.png')}}"  alt="" class="img-fluid p_section">
              </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-12">
              <h2 class="text-primary my-4">
                Successful technology management depends on smart, dependable, well-trained people, flawless processes and access to tools and facilities that provide complete support.
              </h2>
              <p>
                 At Tech Yeah, we invest in our people, processes and tools to ensure they are second-to-none. Explore what makes us different and how everything we do is centered on you: the client.
              </p>
          </div>
        </div>
     </div>
</section>
<section>
<div class="container px-4 py-5" id="featured-3"> 
    <div class="row  py-5 ">
      <div class="feature col mt-4 mx-1 box_hover rounded shadow">
        <div class="text-center  fs-4 m-3 p-5">
            <i class="fa-solid fa-users-line fa-2xl"></i>
        </div>
        <h5 >OUR PEOPLE</h5>
        <p>Our people are passionate, experienced professionals who are empowered by our unique organizational structure for success. You can depend on our people to know what's happening during every step of the process, to take action to ensure things are done well, and to proactively communicate with you throughout the entire process.</p>
         
      </div>
      <div class="feature col mt-4  mx-1 box_hover_yellow rounded shadow">
        <div class="text-center  fs-4 m-3 p-5">
        <i class="fa-solid fa-chalkboard-user fa-2xl"></i>
        </div>
        <h5 >OUR PROCESS</h5>
        <p>Our Proven Process has been developed based on work with dozens of customers over hundreds of projects. The best practices embedded in our Proven Process ensure consistent delivery on time, on budget, while offering flexibility to accommodate a variety of project types and scopes.</p>
        
      </div>
      <div class="feature col mt-4  mx-1 box_hover_violet rounded shadow">
        <div class="text-center  fs-4 m-3 p-5">
        <i class="fa-solid fa-screwdriver-wrench fa-2xl"></i>
        </div>
        <h5 >TECHNOLOGY SOLUTIONS CENTER</h5>
        <p>Our state-of-the-art Technology Solutions Center (TSC) and Customer Experience Center allow us to deliver scalable, repeatable success to the tune of 98.8% on-time project completion rate. A technology company, we use some of the same cutting-edge technologies we help you deploy to manage your projects from our facility.</p>
    
      </div>
    </div>
  </div>
</section>
 
@endsection