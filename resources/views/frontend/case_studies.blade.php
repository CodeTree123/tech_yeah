@extends('frontend.master')
@section('content') 
<section class="custom_bg_image_three my-2">
    <div class="container py-5 text-white text-center">
        <h1>
            One resource. Complete technology lifecycle solutions.
        </h1>
    </div>
</section>
<div class="section">

<div class="container row justify-content-center mx-auto mb-2"> 
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static"> 
                <h3 class="mb-0">Tech Yeah Speeds Through Pilot of AI, Computer Vision in QSR Drive-thru to Advance Operations, Customer Experience</h3> 
                <p class="card-text mb-auto my-3">In an effort to drive efficiency and improve the customer experience, one international food and beverage provider sped to pilot an AI solution. </p>
                <a href="#" class="stretched-link badge rounded-pill text-bg-primary text-decoration-none py-1">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{asset('assets/media/img/b1.jpg')}}"  width="200" class="img-fluid"/>  
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static"> 
                <h3 class="mb-0">Tech Yeah Supports Iconic Food and Beverage Retailer With Line-Busting Solutions for Drive-thru</h3> 
                <p class="mb-auto my-3">A leading QSR was under pressure to provide expedited drive-thru service as demand surged for contactless order retrieval during the pandemic. </p>
                <a href="#" class="stretched-link badge rounded-pill text-bg-primary text-decoration-none py-1">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                <img src="{{asset('assets/media/img/b1.jpg')}}"  width="200" class="img-fluid"/>   
                </div>
            </div>
        </div>
  </div>
</div>
 
@endsection