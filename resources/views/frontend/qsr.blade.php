@extends('frontend.master')
@section('content')
<section class="qsr_banner d-flex">
    <div class="px-4 py-2 my-auto mx-3 bg-glass text-center">

        <h1 class="display-5 fw-bold  ">
        Now serving technology solutions for QSR that feed profitability
        </h1>
        <a href="{{route('contact_us')}}" class="btn btn-dark">Contact Us</a>

    </div>

</section>
<section class="custom_bg_image_one mb-2">
    <div class="container ">
        <div class="py-5 d-flex jusify-content-between align-items-center text-white text-center">
        <i class="fa-solid fa-shop fa-2xl"></i>
            <h5 class="text-start px-5">
            Quick service restaurants are leveraging technology to explore new diner engagement strategies while streamlining food safety and automating operations.
            </h5>
        </div>
    </div>
</section>
<section class="container my-5">
    <div class="row">
        <div class="col-lg-5 col-md-4 col-sm-12 col-12 my-auto">
            <div class="">
                <img src="{{asset('assets/media/img/qsr_section.jpg')}}" class="img-fluid leaf-shape" alt="">
            </div>
        </div>
        <div class="col-lg-7 col-md-8 col-sm-12 col-12 my-auto p-5">
            <div>
                <h3>
                With no tried-and-true blueprint for success, savvy leaders in QSR are leveraging technology to offer new delivery platforms, better understand their diners’ preferences and ensure food safety.
                </h3>
                <br> 
                <h5>
                New initiatives in QSR require dependable technologies, from secure Wi-Fi networks, to complex IoT deployments, to unified physical security solutions that deliver operational and customer service benefits.
                </h5>
            </div>
        </div>
    </div>
</section>
<section class="container">
    <div>
        <h2>Tech Yeah knows  QSR</h2>
        <h4>
        A full-service integrator partner trusted by retailers for 40 years, Tech Yeah offers comprehensive technology solutions for QSR including: 
        </h4>

        <div>  
            <div class="d-flex  align-items-center py-4">
                <div>
                    <i class="fa-solid fa-2xl px-3 fa-sitemap"></i>
                    
                </div>
                <div>
                Large-scale deployments of technologies that support critical operations and food safety including IoT devices, POS systems, PVMs, and unified physical security solutions.
                </div>
            </div>
            <div class="d-flex  align-items-center py-4">
                <div>
                <i class="fa-solid fa-2xl px-3 fa-wifi"></i>

                    
                </div>
                <div>
                Spot-on wireless networks that deliver the dependable, robust customer experience demanded by a new generation of diners.
                </div>
            </div>  
            <div class="d-flex  align-items-center py-4">
                <div>
                <i class="fa-solid fa-2xl px-3 fa-hard-drive"></i> 
                </div>
                <div>
                Asset lifecycle management services that handle organization, staging, configuration, repair and on-time delivery of devices to ensure uptime.
                </div>
            </div>  
        </div>


    </div>
</section>
  

@endsection