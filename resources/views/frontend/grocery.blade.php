@extends('frontend.master')
@section('content')
<section class="grocery_banner d-flex">
    <div class="px-4 py-2 my-auto mx-3 bg-glass text-center">

        <h1 class="display-5 fw-bold  ">
        Keep things fresh, protect margin with retail technology for the grocery segment
        </h1>
        <a href="{{route('contact_us')}}" class="btn btn-dark">Contact Us</a>

    </div>

</section>
<section class="custom_bg_image_one mb-2">
    <div class="container ">
        <div class="py-5 d-flex jusify-content-between align-items-center text-white text-center">
        <i class="fa-solid fa-shop fa-2xl"></i>
            <h5 class="text-start px-5">
            Grocers operating with the slimmest of margins must leverage technology to automate operations and offer shoppers a super-personalized shopping experience.
 
            </h5>
        </div>
    </div>
</section>
<section class="container my-5">
    <div class="row">
        <div class="col-lg-5 col-md-4 col-sm-12 col-12 my-auto">
            <div class="">
                <img src="{{asset('assets/media/img/grocery_section.jpg')}}" class="img-fluid leaf-shape" alt="">
            </div>
        </div>
        <div class="col-lg-7 col-md-8 col-sm-12 col-12 my-auto p-5">
            <div>
                <h3>
                
Like the rest of retail, the grocery business is experiencing significant changes in a short timeframe.
                </h3>
                <br> 
                <h5>
                Under continued pressure to survive with super-slim margins, grocers must adapt to the changing demands of a new generation of shoppers and seek fresh opportunities to drive revenue. As a result, grocers are extending their offerings to feature services like in-store dining, more pre-prepared foods and delivery options including curb-side pick-up and home delivery.
                <br>
                <br> 
To maintain revenues, grocers must deliver an extremely personalized shopping experience that drives relevant information to the customer at the shelf, where they are driven to select products that meet their unique needs and preferences. Impeccable operations are required in grocery to safely handle perishable, cooked foods and ensure product integrity at every step of the process.
                </h5>
            </div>
        </div>
    </div>
</section>
<section class="container">
    <div>
        <h2>Tech Yeah knows  grocery</h2>
        <h4>
        Choosing a dependable, cost effective partner is critical. Tech Yeah serves many of the top grocers, helping them deploy and maintain the technologies that are critical to their business. Tech Yeah can provide:
        </h4>

        <div>  
            <div class="d-flex  align-items-center py-4">
                <div>
                    <i class="fa-brands fa-2xl px-3 fa-cloudversify"></i>
                    
                </div>
                <div>
                IoT deployments that streamline and automate various operations and ensure product handling integrity. (e.g. - temperature monitors, etc.)
                </div>
            </div>
            <div class="d-flex  align-items-center py-4">
                <div>
                <i class="fa-solid fa-2xl px-3 fa-wifi"></i>

                    
                </div>
                <div>
                Wireless networks and infrastructure to support in-store customer Wi-Fi as well as wireless devices across the store.
                </div>
            </div>  
            <div class="d-flex  align-items-center py-4">
                <div>
                <i class="fa-solid fa-2xl px-3 fa-hard-drive"></i> 
                </div>
                <div>
                Asset lifecycle management services designed to extend your IT team.
                </div>
            </div>  
            <div class="d-flex  align-items-center py-4">
                <div>
                <i class="fa-solid fa-2xl px-3 fa-shield-halved"></i> 
                </div>
                <div>
                Unified security solutions that simultaneously reduce shrink and optimize operations.
                </div>
            </div>  
        </div>


    </div>
</section>
  

@endsection