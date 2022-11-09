@extends('frontend.master')
@section('content')
<section class="healthcare_banner  d-flex">
    <div class="px-4 py-2 my-auto mx-3 bg-glass text-center">

        <h1 class="display-5 fw-bold  ">
        Tech Yeah keeps vital healthcare technology systems operating and your bottom line healthy
        </h1>
        <a href="{{route('contact_us')}}" class="btn btn-dark">Contact Us</a>

    </div>

</section>
<section class="custom_bg_image_one mb-2">
    <div class="container ">
        <div class="py-5 d-flex jusify-content-between align-items-center text-white text-center">
        <i class="fa-solid fa-hospital fa-2xl"></i>
            <h5 class="text-start px-5">
            Healthcare environments demand exacting technology systems that support security, privacy and uptime.
            </h5>
        </div>
    </div>
</section>
<section class="container my-5">
    <div class="row">
        <div class="col-lg-5 col-md-4 col-sm-12 col-12 my-auto">
            <div class="">
                <img src="{{asset('assets/media/img/healthcare_section.jpg')}}" class="img-fluid leaf-shape" alt="">
            </div>
        </div>
        <div class="col-lg-7 col-md-8 col-sm-12 col-12 my-auto p-5">
            <div>
                <h3>
                
The healthcare industry is unlike any other.
                </h3>
                <h5> 
                Delivery of excellent care, compliance with HIPAA and patient convenience create a trifecta of concerns that must be supported with each and every system deployment. A variety of technology solutions, from physical security to secure wireless, to physical layer infrastructure and artificial intelligence combine to deliver secure health records, streamlined operational processes, and a preferred patient experience in healthcare.
                </h5>
            </div>
        </div>
    </div>
</section>
<section class="container">
    <div>
        <h2>Tech Yeah knows  healthcare</h2>
        <h4>
        Tech Yeah's extensive knowledge of technology as well as physical and IT security allows us to deploy solutions that help healthcare clinics achieve security and compliance. With one eye constantly on system security and integrity, Tech Yeah can support your healthcare operation with:
        </h4>

        <div>  
            <div class="d-flex  align-items-center py-4">
                <div>
                    <i class="fa-brands fa-2xl px-3 fa-cloudversify"></i>
                    
                </div>
                <div>
                IT asset lifecycle management solutions that help you extend asset life and maximize your investment in technologies.
                </div>
            </div>
            <div class="d-flex  align-items-center py-4">
                <div>
                <i class="fa-solid fa-2xl px-3 fa-wifi"></i>

                    
                </div>
                <div>
                Secure, dependable infrastructure designed to support technologies today as well as those you will invest in tomorrow.
                </div>
            </div>  
            <div class="d-flex  align-items-center py-4">
                <div>
                <i class="fa-solid fa-2xl px-3 fa-hard-drive"></i> 
                </div>
                <div>
                Dependable wireless networks for mission-critical technologies as well as patient use.
                </div>
            </div> 
            <div class="d-flex  align-items-center py-4">
                <div>
                <i class="fa-solid fa-2xl px-3 fa-shield-halved"></i>

                </div>
                <div>
                Unified physical security solutions that help protect people, property and assets and ensure security of personal information.
                </div>
            </div>
        </div>


    </div>
</section>
  

@endsection