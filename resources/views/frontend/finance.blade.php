@extends('frontend.master')
@section('content')
<section class="finance_banner d-flex">
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
             <i class="fa-solid fa-coins fa-2xl"></i>
            <h5 class="text-start px-5">
            In an era of lightspeed progress, savvy financial service players are leveraging technology to deliver an omnichannel customer experience and personalized service.
            </h5>
        </div>
    </div>
</section>
<section class="container my-5">
    <div class="row">
        <div class="col-lg-5 col-md-4 col-sm-12 col-12 my-auto">
            <div class="">
                <img src="{{asset('assets/media/img/finance_section.jpg')}}" class="img-fluid leaf-shape" alt="">
            </div>
        </div>
        <div class="col-lg-7 col-md-8 col-sm-12 col-12 my-auto p-5">
            <div>
                <h3>
                Financial services are not what they used to be.
                </h3>
                <h5> 
                    Financial services are not what they used to be.
                    As customers look to handle their banking transactions via a myriad of devices, anytime or anyplace, financial service providers win based on speed, convenience and security as opposed to location. Disruptive players are putting pressure on traditional providers to step up their game. In response, many financial service providers are ridding themselves of legacy equipment, with its burdensome maintenance costs, time-consuming management and performance limitations.
                    <br>
                    <br>
                    <br>
                    The good news is that emerging technologies are available that deliver efficiency, security and critical data and can help balance the need to meet customer demands with cost-effective compliance and cost-saving automation.
                </h5>
            </div>
        </div>
    </div>
</section>
<section class="container">
    <div>
        <h2>Tech Yeah knows  financial services</h2>
        <h4>
        From system design and deployment through ongoing service and support, the trusted team at Tech Yeah serves financial services with the solutions they need to successfully leverage cutting-edge technologies for their business. Tech Yeah provides:
        </h4>

        <div>  
            <div class="d-flex  align-items-center py-4">
                <div>
                    <i class="fa-solid fa-2xl px-3 fa-sitemap"></i>
                    
                </div>
                <div>
                    Complex, multi-site rapid deployment services for financial services that keep technology integrations on time and on budget.
                </div>
            </div>
            <div class="d-flex  align-items-center py-4">
                <div>
                <i class="fa-solid fa-2xl px-3 fa-toolbox"></i>
                    
                </div>
                <div>
                Asset lifecycle management including cradle to grave management, optimization, support and repair for all of your technologies.
                </div>
            </div>  
            <div class="d-flex  align-items-center py-4">
                <div>
                <i class="fa-solid fa-2xl px-3 fa-wifi"></i>

                </div>
                <div>
                Infrastructure, routers and switches, structured cabling and spot-on wireless networks that support mission-critical technologies in a secure, fail-safe way.
                </div>
            </div> 
            <div class="d-flex  align-items-center py-4">
                <div>
                <i class="fa-solid fa-2xl px-3 fa-shield-halved"></i>

                </div>
                <div>
                Unified physical security solutions for financial services to protect people, property and assets as well as optimize operations and improve customer service.
                </div>
            </div>
        </div>


    </div>
</section>
  

@endsection