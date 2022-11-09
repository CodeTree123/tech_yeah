@extends('frontend.master')
@section('content')
<section class="retail_automation_banner d-flex">
    <div class="px-4 py-2 my-auto mx-3 bg-glass text-center">

        <h1 class="display-5 fw-bold ">
        Automation technologies that lower labor costs and increase order throughput
        </h1> 

    </div>

</section>
<section class="custom_bg_image_one mb-2">
    <div class="container ">
        <div class="py-5 d-flex jusify-content-between align-items-center text-white text-center"> 
            <h5 class="text-start px-5">
                
            From robotics to AI and analytics, automation technologies pave the way to a successful future for retailers. Tech Yeah understands the complexity of designing, vetting, deploying and maintaining automation solutions and is prepared to support retailers at every step along the way.
            </h5>
        </div>
    </div>
</section>

<section>
    <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom">Experience the power of retail automation</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start ">
                <div class="shadow rounded p-2 mx-1 box_hover h_box_one">
                    <div class="text-center m-2 ">
                    <i class="fa-solid fa-arrows-spin fa-2xl"></i>
                    </div>
                    <div>
                        <h5 class="">
                            Optimize your limited human resources by automating operational tasks.
                        </h5>

                    </div>
                </div>
            </div>
            <div class="col d-flex align-items-start ">
                <div class="shadow rounded p-2 mx-1 box_hover h_box_one">
                    <div class="text-center m-2 ">
                    <i class="fa-solid fa-chart-area fa-2xl"></i>
                    </div>
                    <div>
                        <h5 class="">
                            Leverage automation to increase order throughput required to maximize revenue and optimize the customer experience.
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col d-flex align-items-start ">
                <div class="shadow rounded p-2 mx-1 box_hover h_box_one">
                    <div class="text-center m-2 ">
                    <i class="fa-brands fa-uncharted fa-2xl"></i>
                    </div>
                    <div>
                        <h5 class="">
                            Execute omnichannel retailing with efficiency and precision using automation technologies.
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=" my-2">
    <div class="container py-5  text-center">
        <h1> 
        Automation solutions for a variety of applications
        </h1>
    </div>
</section>
<section>
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 my-4  d-flex align-items-stretch">
                <div class="card shadow text-center py-5" style="width: 18rem;">
                        <img src="{{asset('assets/media/img/RETAIL.svg')}}"  width="100" class="mx-auto"/>
  
                    <div class="card-body">
                        <h5 class="card-title"> RETAIL</h5>
                        <p class="card-text">Enable BOPIS with package lockers, wireless solutions and AI.
                        </p> 
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 my-4  d-flex align-items-stretch">
                <div class="card shadow text-center py-5" style="width: 18rem;">
                    <img src="{{asset('assets/media/img/RESTAURANTS.svg')}}"  width="100" class="mx-auto"/>

                    <div class="card-body">
                        <h5 class="card-title">GROCERY</h5>
                        <p class="card-text">Deploy frictionless checkout that reduces customer frustration and staffing needs.</p> 
                    </div>
                </div>
            </div> 
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 my-4  d-flex align-items-stretch">
                <div class="card shadow text-center py-5" style="width: 18rem;">
                    <img src="{{asset('assets/media/img/GROCERY.svg')}}"  width="100" class="mx-auto"/>

                    <div class="card-body">
                        <h5 class="card-title">QSR</h5>
                        <p class="card-text">Leverage IoT solutions to improve food safety and reduce loss of perishables due to improper handling.</p> 
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 my-4 d-flex align-items-stretch">
                <div class="card shadow text-center py-5" style="width: 18rem;">
                <img src="{{asset('assets/media/img/FINANCE.svg')}}"  width="100" class="mx-auto"/>

                    <div class="card-body">
                        <h5 class="card-title">MICRO-FULFILLMENT</h5>
                        <p class="card-text">Employ robotics automate product distribution.</p> 
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 my-4  d-flex align-items-stretch">
                <div class="card shadow text-center py-5" style="width: 18rem;">               
                 <img src="{{asset('assets/media/img/LOGISTICS.svg')}}"  width="100" class="mx-auto"/> 
                    <div class="card-body">
                        <h5 class="card-title">C-STORE</h5>
                        <p class="card-text">Leverage video analytics to better secure the property and understand shopping patterns.</p> 
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 my-4  d-flex align-items-stretch">
                <div class="card shadow text-center py-5" style="width: 18rem;">    
                 <img src="{{asset('assets/media/img/RETAIL2.svg')}}"  width="100" class="mx-auto"/> 
                    <div class="card-body">
                        <h5 class="card-title">FAST CASUAL</h5>
                        <p class="card-text">Automate order-taking with interactive kiosks for a faster, better customer experience.</p> 
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 my-4  d-flex align-items-stretch">
                <div class="card shadow text-center py-5" style="width: 18rem;">
                 <img src="{{asset('assets/media/img/CONVENIENCE.svg')}}"  width="100" class="mx-auto"/> 
                    <div class="card-body">
                        <h5 class="card-title">BIG BOX</h5>
                        <p class="card-text">Employ IoT and OpsTech to achieve visibility, control and security in facilities management.</p> 
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 my-4  d-flex align-items-stretch">
                <div class="card shadow text-center py-5" style="width: 18rem;">
                 <img src="{{asset('assets/media/img/HEALTHCARE.svg')}}"  width="100" class="mx-auto"/> 
                    <div class="card-body">
                        <h5 class="card-title">PHARMACY</h5>
                        <p class="card-text">Leverage robots to fill prescriptions with efficiency and precision.</p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="custom_bg_image_one my-2">
    <div class="container py-5 text-white text-center">
        <h1>
        Explore some of our best-of-breed automation solutions
        </h1>
    </div>
</section>
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 my-2">
                <div class="card box_hover h_box_two">
                    <div class="card-body cards_height">
                    <i class="fa-solid fa-desktop fa-2xl my-5"></i>

                        <h5 class="card-title text-primary fw-bold"> ComputerVision</h5>
                        <p class="card-text fs-5 fw-bold">Powerful video analytics solution offers instant, actionable insight and complete visibility.</p>
                         
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 my-2">
                <div class="card box_hover h_box_two">
                    <div class="card-body cards_height"> 
                        <i class="fa-regular fa-handshake fa-2xl my-5"></i>

                        <h5 class="card-title text-primary fw-bold"> Remote management platform</h5>
                        <p class="card-text fs-5 fw-bold">Remote IoT and device management solution connects variety of devices and manages data, remote operation at scale.</p>
                         
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 my-2">
                <div class="card box_hover h_box_two">
                    <div class="card-body cards_height">
                        <i class="fa-solid fa-headset fa-2xl my-5"></i>

                        <h5 class="card-title text-primary fw-bold"> Fulfillment automation</h5>
                        <p class="card-text fs-5 fw-bold">
                            Robots, automated conveyor systems, and pick-by-voice accelerate back-end processes and speed picking, packing and shipment of goods.
                        </p> 
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 my-2">
                <div class="card box_hover h_box_two">
                    <div class="card-body cards_height">
                        <i class="fa-solid fa-robot fa-2xl my-5"></i>

                        <h5 class="card-title text-primary fw-bold"> Robotic click-and-collect units</h5>
                        <p class="card-text fs-5 fw-bold">
                        Robotic, temperature-controlled click-and-collect units deliver convenience and safety with contactless order retrieval.
                        </p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="custom_bg_image_two my-2">
    <div class="container py-5 text-white text-center">
        <h1>
            Our performance speaks for itself.
        </h1>
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="d-flex justify-content-center  align-items-center">
                        <div>
                            <i class="fa-solid fa-clock fa-2xl"></i>
                        </div>
                        <div>
                            <h2>98.8%</h2>
                            <p class="px-3">on-time delivery of projects</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <div>
                            <i class="fa-solid fa-thumbs-up fa-2xl"></i>
                        </div>
                        <div>
                            <h2>95%</h2>
                            <p class="px-3">first visit resolution</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <div>
                            <i class="fa-solid fa-certificate fa-2xl"></i>
                        </div>
                        <div>
                            <h2>25</h2>
                            <p class="px-3">Fortune 500 clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary mb-5">
    <div class="row mx-0">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 p-4">
            <div class="text-center"> 
                    <img src="{{asset('assets/media/img/b1.jpg')}}"  width="400" class="img-fluid"/> 
                    <h2 class="link-white my-4"> 
                        
                    </h2>            
            </div>   
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 p-4">
            <div class="text-white">
                <h2>Deploy automation technologies and let Tech Yeah support them for optimal performance, maximum uptime.</h2> 
                
                <a href="#" class="link-light display-5  ">Discover Why Tech Yeah <i class="fa-solid fa-arrow-right"></i></a> 
            </div>
            <div>  

            </div>
        </div>
    </div>
</section>
@endsection