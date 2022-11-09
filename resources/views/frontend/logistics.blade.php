@extends('frontend.master')
@section('content')
<section class="logistics_banner d-flex">
    <div class="px-4 py-2 my-auto mx-3 bg-glass text-center">

        <h1 class="display-5 fw-bold  ">
        From order placement to the last mile, technologies that enable precision logistics
        </h1>
        <a href="{{route('contact_us')}}" class="btn btn-dark">Contact Us</a>

    </div>

</section>
<section class="custom_bg_image_one mb-2">
    <div class="container ">
        <div class="py-5 d-flex jusify-content-between align-items-center text-white text-center">
                <i class="fa-solid fa-truck-fast fa-2xl"></i>
            <h5 class="text-start px-5">
            Speed, precision and complexity in fulfillment logistics require advanced technologies.
            </h5>
        </div>
    </div>
</section>
<section class="container my-5">
    <div class="row">
        <div class="col-lg-5 col-md-4 col-sm-12 col-12 my-auto">
            <div class="">
                <img src="{{asset('assets/media/img/logistics_section.jpg')}}" class="img-fluid leaf-shape" alt="">
            </div>
        </div>
        <div class="col-lg-7 col-md-8 col-sm-12 col-12 my-auto p-5">
            <div>
                <h3>
                In a world of e-commerce and consumers who demand speed and flexibility, fulfillment logistics go beyond pick, pack and ship.
                </h3>
                <h5>
                Today, the complexity associated with delivering precision logistics out of distribution centers and micro-fulfillment centers continues to rise. The process may require shipment of single orders to multiple destinations, secure delivery to lockers, cars, or other specified locations or even verification of conditions during transit. This kind of rigorous, exacting information requires the very latest technologies at every point along the supply chain.
                </h5>
            </div>
        </div>
    </div>
</section>
<section class="container">
    <div>
        <h2>Tech Yeah knows logistics</h2>
        <h4>
        The trusted team at Tech Yeah has 40 year's experience providing technology deployments, dependable infrastructure and cradle-to-grave technology services and support. With an understanding of how the latest automation technologies empower logistics operations, Tech Yeah offers:
        </h4>

        <div>
            <div class="d-flex  align-items-center py-4">
                <div>
                <i class="fa-solid fa-2xl px-3 fa-people-arrows"></i>
                </div>
                <div>
                Solution design to architect automation and robotics solutions for your specific space and business need.
                </div>
            </div>
            <div class="d-flex  align-items-center py-4">
                <div>
                <i class="fa-brands fa-2xl px-3 fa-cloudversify"></i>

                </div>
                <div class="text-start">
                Complex, IoT and RFID deployments to provide critical information in real time as items move across the distribution chain.
                </div>
            </div>
            <div class="d-flex  align-items-center py-4">
                <div>
                <i class="fa-solid fa-2xl px-3 fa-hard-drive"></i>

                </div>
                <div class="text-start">
                    Robust, dependable physical layer infrastructure that can support mission-critical technologies now and in the future.
                </div>
            </div>
            <div class="d-flex  align-items-center py-4">
                <div>
                <i class="fa-solid fa-2xl px-3 fa-sitemap"></i>

                </div>
                <div>
                Rapid deployments to transform spaces into micro-fulfillment centers outfitted with critical technologies to support omnichannel logistics
                </div>
            </div>
            <div class="d-flex  align-items-center py-4">
                <div>
                <i class="fa-solid fa-2xl px-3 fa-wifi"></i>

                </div>
                <div>
                Spot-on wireless networks that support a connected warehouse.
                </div>
            </div>
            <div class="d-flex  align-items-center py-4">
                <div>
                <i class="fa-solid fa-2xl px-3 fa-blender-phone"></i>

                </div>
                <div>
                Hardware as a service options to access the latest automation and robotics technologies without capital expenditures
                </div>
            </div>  
            <div class="d-flex  align-items-center py-4">
                <div>
                <i class="fa-solid fa-2xl px-3 fa-chart-line"></i>

                </div>
                <div>
                Ongoing support and service options to prevent failures before they occur and address outages with speed and efficiency
                </div>
            </div>
            <div class="d-flex  align-items-center py-4">
                <div>
                <i class="fa-solid fa-2xl px-3 fa-shield-halved"></i>

                </div>
                <div>
                Unified physical security systems that combine video, access control and intrusion alarms to provide complete information and enable investigations in case of losses in the warehouse or distribution center.
                </div>
            </div>
        </div>


    </div>
</section>
  

@endsection