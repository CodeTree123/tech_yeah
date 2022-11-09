@extends('frontend.master')
@section('content')
<section class="retail_banner d-flex">
    <div class="px-4 py-2 my-auto mx-3 bg-glass text-center">

        <h1 class="display-5 fw-bold   ">
            From proactive maintenance to speedy repair, Tech Yeah's IT support services keep your technologies up and
            running
        </h1>
        <a href="{{route('contact_us')}}" class="btn btn-dark">Contact Us</a>

    </div>

</section>
<section class="custom_bg_image_one mb-2">
    <div class="container ">
        <div class="py-5 d-flex jusify-content-between align-items-center text-white text-center">
            <i class="fa-solid fa-shop fa-2xl"></i>
            <h5 class="text-start px-5">
                When it comes to delivering the modern shopping experience, retailers are the fearless pioneers who are
                investing in new technologies, experimenting with new concepts, and reshaping the industry.
            </h5>
        </div>
    </div>
</section>
<section class="container my-5">
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
</section>
<section class="container">
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
</section>
  

@endsection