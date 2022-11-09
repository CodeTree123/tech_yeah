@extends('frontend.master')
@section('content')
<section class="convenience_store_banner d-flex">
    <div class="px-4 py-2 my-auto mx-3 bg-glass text-center">

        <h1 class="display-5 fw-bold  ">
        Transform your c-store to meet the changing needs of convenience shoppers today

        </h1>
        <a href="{{route('contact_us')}}" class="btn btn-dark">Contact Us</a>

    </div>

</section>
<section class="custom_bg_image_one mb-2">
    <div class="container ">
        <div class="py-5 d-flex jusify-content-between align-items-center text-white text-center">
        <i class="fa-solid fa-shop fa-2xl"></i>
            <h5 class="text-start px-5">
            Convenience stores face new challenges and opportunities in a vastly changing landscape where shoppers seek speed and convenience on their terms.
            </h5>
        </div>
    </div>
</section>
<section class="container my-5">
    <div class="row">
        <div class="col-lg-5 col-md-4 col-sm-12 col-12 my-auto">
            <div class="">
                <img src="{{asset('assets/media/img/convenience_section.jpg')}}" class="img-fluid leaf-shape" alt="">
            </div>
        </div>
        <div class="col-lg-7 col-md-8 col-sm-12 col-12 my-auto p-5">
            <div>
                <h3>
                

                Convenience stores are reinventing their value proposition
                </h3>
                <br> 
                <h5>
                Convenience stores are grappling with unprecedented shifts in consumer preferences, shopping behaviors and petroleum prices. As with other segments in retail, c-stores are adapting to a new landscape, causing them to reevaluate merchandise mix, add new delivery formats - including drive-thru, curbside and online ordering - and reinventing their value proposition. This scope of change represents a significant shift for many convenience stores, triggering investments in critical enabling technologies such as POS, interactive, Wi-Fi and AI.
                </h5>
            </div>
        </div>
    </div>
</section>
<section class="container">
    <div>
        <h2>Tech Yeah knows c-stores</h2>
        <h4>
        Tech Yeah can help c-stores through these transitions by providing:
        </h4>

        <div>  
            <div class="d-flex  align-items-center py-4">
                <div>
                    <i class="fa-solid fa-2xl px-3 fa-people-arrows"></i> 
                </div>
                <div>
                Solution design services that identify and vet the technologies required to help c-stores accomplish their business objectives
                </div>
            </div>
            <div class="d-flex  align-items-center py-4">
                <div>
                <i class="fa-solid fa-2xl px-3 fa-sitemap"></i> 
                </div>
                <div>
                Rapid deployment services that ensure consistent, cost effective deployment across broad geographies
                </div>
            </div>  
            <div class="d-flex  align-items-center py-4">
                <div>
                <i class="fa-solid fa-2xl px-3 fa-cash-register"></i> 
                </div>
                <div>
                POS systems that enable frictionless checkout for optimal speed and convenience
                </div>
            </div>  
            <div class="d-flex  align-items-center py-4">
                <div>
                <i class="fa-solid fa-2xl px-3 fa-chart-line"></i> 
                </div>
                <div>
                Interactive solutions to enhance effective communication and optimize the customer experience
                </div>
            </div>  
            <div class="d-flex  align-items-center py-4">
                <div>
                <i class="fa-solid fa-2xl px-3 fa-blender-phone"></i> 
                </div>
                <div>
                Asset lifecycle management services to support and service your technologies throughout their useful life
                </div>
            </div>  
        </div>


    </div>
</section>
  

@endsection