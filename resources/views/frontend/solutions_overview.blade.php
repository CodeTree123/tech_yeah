@extends('frontend.master')
@section('content')
<section class=" border-bottom py-3 d-flex ">
    <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="  mt-2 container">

    <ol class="breadcrumb container">
      <li class="breadcrumb-item">
          <a href="/" class="text-decoration-none">
          <i class="fa-solid fa-house"></i> Home
          </a>
      </li>  
      <li class="breadcrumb-item">
          <a  href="{{route('solutions_overview')}}" class="text-decoration-none">  Solutions Overview
          </a>
      </li>  
    </ol> 
    </div>
</section>
<section class="solutoins_overview_banner d-flex">
    <div class="px-4 py-2 my-auto mx-3 bg-glass text-center">

        <h1 class="display-5 fw-bold   ">
            Partner with the one integrator that can support all of the technologies that are critical to your business 
        </h1>
        <a href="{{route('contact_us')}}" class="btn btn-dark">Contact Us</a>

    </div>

</section>
<section class="custom_bg_image_one mb-2">
    <div class="container ">
        <div class="py-5 d-flex jusify-content-between align-items-center text-white text-center">
            <h5 class="text-start px-5">
                We pride ourselves on our team's breadth of expertise in technologies across the board. In a world where effective technology integration is more critical than ever, Tech Yeah can deliver. Technology agnostic, we work with any brand or operating system, giving us the flexibility to meet your diverse needs.
            </h5>
        </div>
    </div>
</section>
<section class="container-fluid my-5">
    <div>
        <h1 class="text-center">
            Explore our comprehensive solutions:
        </h1>
    </div>
    <div class=" ">

        <div class="  py-5">
            <div>
                <ul class="nav nav-pills justify-content-center  solutions_overview" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link p-2 rounded-pill active" id="wireless-tab" data-bs-toggle="tab" data-bs-target="#wireless-tab-pane" type="button" role="tab" aria-controls="wireless-tab-pane" aria-selected="true">WIRELESS</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link p-2 rounded-pill" id="pos-tab" data-bs-toggle="tab" data-bs-target="#pos-tab-pane" type="button" role="tab" aria-controls="pos-tab-pane" aria-selected="false">POS</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link p-2 rounded-pill" id="mobility-tab" data-bs-toggle="tab" data-bs-target="#mobility-tab-pane" type="button" role="tab" aria-controls="mobility-tab-pane" aria-selected="false">MOBILITY</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link p-2 rounded-pill" id="telephony-tab" data-bs-toggle="tab" data-bs-target="#telephony-tab-pane" type="button" role="tab" aria-controls="telephony-tab-pane" aria-selected="false">TELEPHONY</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link p-2 rounded-pill" id="audio-tab" data-bs-toggle="tab" data-bs-target="#audio-tab-pane" type="button" role="tab" aria-controls="audio-tab-pane" aria-selected="false">AUDIO</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link p-2 rounded-pill" id="network-tab" data-bs-toggle="tab" data-bs-target="#network-tab-pane" type="button" role="tab" aria-controls="network-tab-pane" aria-selected="false">NETWORK</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link p-2 rounded-pill" id="workstation-tab" data-bs-toggle="tab" data-bs-target="#workstation-tab-pane" type="button" role="tab" aria-controls="workstation-tab-pane" aria-selected="false">WORKSTATION</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link p-2 rounded-pill" id="traffic-tab" data-bs-toggle="tab" data-bs-target="#traffic-tab-pane" type="button" role="tab" aria-controls="traffic-tab-pane" aria-selected="false">TRAFFIC</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link p-2 rounded-pill" id="digital-signs-tab" data-bs-toggle="tab" data-bs-target="#digital-signs-tab-pane" type="button" role="tab" aria-controls="digital-signs-tab-pane" aria-selected="false">DIGITAL SIGNS</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link p-2 rounded-pill" id="security-tab" data-bs-toggle="tab" data-bs-target="#security-tab-pane" type="button" role="tab" aria-controls="security-tab-pane" aria-selected="false">SECURITY</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link p-2 rounded-pill" id="cabling-tab" data-bs-toggle="tab" data-bs-target="#cabling-tab-pane" type="button" role="tab" aria-controls="cabling-tab-pane" aria-selected="false">CABLING</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link p-2 rounded-pill" id="retail-automation-tab" data-bs-toggle="tab" data-bs-target="#retail-automation-tab-pane" type="button" role="tab" aria-controls="retail-automation-tab-pane" aria-selected="false">RETAIL AUTOMATION</button>
                    </li>


                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="wireless-tab-pane" role="tabpanel" aria-labelledby="wireless-tab" tabindex="0">
                        <div class="row p-5">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div>
                                    <img src="{{asset('assets/media/img/b1.jpg')}}" width="400" class="img-fluid" />
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="mx-3">
                                            <i class="fa-solid fa-wifi fa-2xl"></i>
                                        </div>
                                        <div>
                                            <h3>WIRELESS</h3>
                                            <h4 class="fw-bold">
                                                Keep employees and customers connected with top Wi-Fi performance
                                            </h4>
                                        </div>
                                    </div>
                                    <p>
                                        Wireless infrastructure supports a quickly growing number of devices, users and applications. Tech Yeah engineers wireless infrastructure to ensure dependability and performance. Using site surveys and network planning, we design and deploy
                                        <span class="fw-bold">
                                            switches, routers, access points and cabling
                                        </span>
                                        to support your needs today as well as ensuring scalability to meet your needs tomorrow.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pos-tab-pane" role="tabpanel" aria-labelledby="pos-tab" tabindex="0">
                        <div class="row p-5">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div>
                                    <img src="{{asset('assets/media/img/b1.jpg')}}" width="400" class="img-fluid" />
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="mx-3">
                                            <i class="fa-solid fa-2xl fa-cash-register"></i>
                                        </div>
                                        <div>
                                            <h3>POS</h3>
                                            <h4 class="fw-bold">
                                                Streamlined checkout for an exceptional customer experience
                                            </h4>
                                        </div>
                                    </div>
                                    <p>
                                        Point of sale (POS) technology is increasingly critical to delivering an exceptional customer experience. Whether online or in-store, customers expect the final checkout and payment process to be streamlined, quick and easy. Whether installing new POS devices to increase speed and flexibility like
                                        <span class="fw-bold">
                                            contactless payment systems, self-checkout kiosks, or handheld mobile POS
                                        </span>
                                        , Tech Yeah can handle any brand of POS device, ensure sufficient infrastructure, install with security in mind, and deploy on time and on budget.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="mobility-tab-pane" role="tabpanel" aria-labelledby="mobility-tab" tabindex="0">
                        <div class="row p-5">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div>
                                    <img src="{{asset('assets/media/img/b1.jpg')}}" width="400" class="img-fluid" />
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="mx-3">
                                            <i class="fa-solid fa-2xl fa-mobile-screen-button"></i>
                                        </div>
                                        <div>
                                            <h3>MOBILITY</h3>
                                            <h4 class="fw-bold">
                                                Mobile solutions to drive customer engagement
                                            </h4>
                                        </div>
                                    </div>
                                    <p>
                                        Arming store employees with mobile handheld devices empowers them with information and the ability to serve customers from anywhere in the store. Whether tablets, scanners or mobile phones, no matter the brand or operating system, Tech Yeah can help you stage, configure and deploy mobile solutions that drive customer engagement and real-time insight into inventory, sales, and more..
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="telephony-tab-pane" role="tabpanel" aria-labelledby="telephony-tab" tabindex="0">
                        <div class="row p-5">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div>
                                    <img src="{{asset('assets/media/img/b1.jpg')}}" width="400" class="img-fluid" />
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="mx-3">
                                            <i class="fa-solid fa-2xl fa-phone"></i>
                                        </div>
                                        <div>
                                            <h3>TELEPHONY</h3>
                                            <h4 class="fw-bold">
                                                Design, staging and installation of phone systems
                                            </h4>
                                        </div>
                                    </div>
                                    <p>
                                        Whether upgrading from analog to VoIP phone systems or going hybrid, Tech Yeah can help you design, configure, stage, program and deploy phone systems. We offer hosted IP server systems and remote management along with level 1 support so that there's never a worry in case of user questions or if the system experiences problems. We handle the back end so you don't have to.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="audio-tab-pane" role="tabpanel" aria-labelledby="audio-tab" tabindex="0">
                        <div class="row p-5">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div>
                                    <img src="{{asset('assets/media/img/b1.jpg')}}" width="400" class="img-fluid" />
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="mx-3">
                                            <i class="fa-solid fa-file-audio fa-2xl"></i>
                                        </div>
                                        <div>
                                            <h3>AUDIO</h3>
                                            <h4 class="fw-bold">
                                                Professional audio/visual installation and support
                                            </h4>
                                        </div>
                                    </div>
                                    <p>
                                        Audio/visual technologies are essential to sharing information and setting the mood in stores. As part of the immersive customer experience, retailers can now provide personalized, detailed information via
                                        <span class="fw-bold">
                                            kiosks, digital signage and digital shelving
                                        </span>
                                        or massive
                                        <span class="fw-bold">
                                            video wall
                                        </span>
                                        configurations.
                                        <span class="fw-bold">
                                            Overhead music, PA systems and personalized audio
                                        </span>
                                        can further support the customer experience. With our roots in audio installations, Tech Yeah can handle these complex audio/visual deployments, fully integrating technologies and establishing the cost effective infrastructure required to support it.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="network-tab-pane" role="tabpanel" aria-labelledby="network-tab" tabindex="0">
                        <div class="row p-5">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div>
                                    <img src="{{asset('assets/media/img/b1.jpg')}}" width="400" class="img-fluid" />
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="mx-3">
                                          <i class="fa-solid fa-satellite-dish fa-2xl"></i>
                                        </div>
                                        <div>
                                            <h3>NETWORK</h3>
                                            <h4 class="fw-bold">
                                            Full IT network install and support
                                            </h4>
                                        </div>
                                    </div>
                                    <p>
                                    Network infrastructure is the backbone and central nervous system of all of your deployed technologies. From 
                                    <span class="fw-bold">
                                    routers
                                    </span>
                                    and
                                    <span class="fw-bold">
                                    switches
                                    </span>
                                    to
                                    <span class="fw-bold">
                                    low voltage
                                    </span>
                                    and
                                    <span class="fw-bold">
                                    electrical cabling, servers
                                    </span>
                                    and
                                    <span class="fw-bold">
                                    wireless infrastructure
                                    </span>
                                    , getting your infrastructure right is essential to the proper function and optimization of every one of your technologies. Tech Yeah knows infrastructure. From
                                    <span class="fw-bold">
                                    cabling
                                    </span>
                                    to
                                    <span class="fw-bold">
                                    wireless access points
                                    </span>
                                    , and
                                    <span class="fw-bold">

                                    </span>
                                    <span class="fw-bold">
                                    network closet clean-up,
                                    </span>
                                             we ensure your network infrastructure is organized, optimized and securely in place to support your critical technologies.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="workstation-tab-pane" role="tabpanel" aria-labelledby="workstation-tab" tabindex="0">
                        <div class="row p-5">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div>
                                    <img src="{{asset('assets/media/img/b1.jpg')}}" width="400" class="img-fluid" />
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="mx-3">
                                        <i class="fa-solid fa-computer fa-2xl"></i>
                                        </div>
                                        <div>
                                            <h3>WORKSTATION</h3>
                                            <h4 class="fw-bold">
                                            Workstation deployment and support
                                            </h4>
                                        </div>
                                    </div>
                                    <p>
                                    <span class="fw-bold">
                                    Workstations
                                    </span> may be less glamorous than emerging technologies today, but they are still critical to the smooth operation of your business. Whether deploying 
                                    <span class="fw-bold">
                                    servers, workstation, PCs or mobile devices
                                    </span> 
                                    for offices, back-of-the-store or warehousing operations, Tech Yeah can handle staging, configuration, cabling and wireless connectivity for all your devices, regardless of age or brand. Leave the repair and replacement to us, allowing us to maintain your back-up inventory, staging, and shipping to the location in need, ready for plug-and-play installation.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="traffic-tab-pane" role="tabpanel" aria-labelledby="traffic-tab" tabindex="0">
                        <div class="row p-5">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div>
                                    <img src="{{asset('assets/media/img/b1.jpg')}}" width="400" class="img-fluid" />
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="mx-3">
                                        <i class="fa-solid fa-server fa-2xl"></i>
                                        </div>
                                        <div>
                                            <h3>TRAFFIC</h3>
                                            <h4 class="fw-bold">
                                            Drive meaningful customer analytics with traffic technology
                                            </h4>
                                        </div>
                                    </div>
                                    <p>
                                    With emerging technologies, it's now possible to understand how foot traffic in your stores, customer linger times and destinations reveal critical insights about shopping intent, preference, marketing effectiveness and optimal store design. These insights can lead to improved efficiency, reduced cost and increased revenue, but effectively collecting the data requires alignment of 
                                    <span class="fw-bold">
                                    video, analytics, IoT sensors, digital signage and PVMs
                                    </span>
                                    . Tech Yeah handles all of these technologies and can systematically integrate them in your stores for maximum insight.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="digital-signs-tab-pane" role="tabpanel" aria-labelledby="digital-signs-tab" tabindex="0">
                        <div class="row p-5">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div>
                                    <img src="{{asset('assets/media/img/b1.jpg')}}" width="400" class="img-fluid" />
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="mx-3">
                                        <i class="fa-solid fa-tablet-screen-button fa-2xl"></i>
                                        </div>
                                        <div>
                                            <h3>DIGITAL SIGNS</h3>
                                            <h4 class="fw-bold">
                                            Create interactive experiences for your customers
                                            </h4>
                                        </div>
                                    </div>
                                    <p>
                                    Your customers expect an immersive, personalized experience when they enter your store. Interactive technologies such as touchscreens, self-serve kiosks, digital signage, video walls and content management systems (CMS) all combine to offer that immersive customer experience that keeps your customers coming back. From back-end system design to staging, configuration and deployment, to mounting and cabling, Tech Yeah can help you create the interactive experience with end-to-end support for all component technologies.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="security-tab-pane" role="tabpanel" aria-labelledby="security-tab" tabindex="0">
                        <div class="row p-5">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div>
                                    <img src="{{asset('assets/media/img/b1.jpg')}}" width="400" class="img-fluid" />
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="mx-3">
                                        <i class="fa-solid fa-shield-halved fa-2xl"></i>
                                        </div>
                                        <div>
                                            <h3>SECURITY</h3>
                                            <h4 class="fw-bold">
                                            Unified physical security for automation, cost savings
                                            </h4>
                                        </div>
                                    </div>
                                    <p>
                                    Unified security solutions deliver value and savings across the entire enterprise. Whether deploying state-of-the-art physical security solutions in a new location or maximizing analog equipment as you gradually invest in IP technology, Tech Yeah can help you map the path from individual solution to fully unified physical security including technologies like 
                                    <span class="fw-bold">
                                    video, intrusion, access control, RFID and analytics.
                                    </span>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cabling-tab-pane" role="tabpanel" aria-labelledby="cabling-tab" tabindex="0">
                        <div class="row p-5">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div>
                                    <img src="{{asset('assets/media/img/b1.jpg')}}" width="400" class="img-fluid" />
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="mx-3">
                                        <i class="fa-solid fa-plug fa-2xl"></i>
                                        </div>
                                        <div>
                                            <h3>CABLING</h3>
                                            <h4 class="fw-bold">
                                            Your infrastructure is only as good as the cabling behind it
                                            </h4>
                                        </div>
                                    </div>
                                    <p>
                                    Cabling is the most fundamental backbone support for technology of all kinds. That's why Tech Yeah has cabling experts prepared to handle 
                                    <span class="fw-bold">
                                    electrical, low voltage or optical fiber cabling
                                    </span>
                                    to ensure the security and dependability of your physical layer infrastructure.
                                    </span>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="retail-automation-tab-pane" role="tabpanel" aria-labelledby="retail-automation-tab" tabindex="0">
                        <div class="row p-5">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div>
                                    <img src="{{asset('assets/media/img/b1.jpg')}}" width="400" class="img-fluid" />
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="mx-3">
                                        <i class="fa-solid fa-robot fa-2xl"></i>
                                        </div>
                                        <div>
                                            <h3>RETAIL AUTOMATION</h3>
                                            <h4 class="fw-bold">
                                            Achieve the next level of efficiency and cost savings with retail automation
                                            </h4>
                                        </div>
                                    </div>
                                    <p>
                                    As consumers demand increasing levels of self-service and retailers strive to ensure consistency and speed of order processing, retail automation technologies offer ways to increase efficiency, improve accuracy and generate cost savings. Whether you're implementing robotic click-and-collect solutions, smart lockers, or other automation technologies, Tech Yeah can support deployment and ongoing maintenance.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>
    </div>
    </div>
    </div>
</section>


@endsection