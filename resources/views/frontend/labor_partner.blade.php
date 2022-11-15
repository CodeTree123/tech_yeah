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
                <a href="{{route('labor_partner')}}" class="text-decoration-none"> Labor Partner
                </a>
            </li>
        </ol>
    </div>
</section>
<section class="labor_partner_banner d-flex justify-content-center">
    <div class="px-4 py-2 my-auto mx-3 bg-glass text-center">

        <h1 class="display-5 fw-bold   ">
            Join our Dynamic Team of Innovators
        </h1>

    </div>

</section>
<section class="custom_bg_image_one mb-2">
    <div class="container ">
        <div class="py-5 d-flex flex-lg-row flex-md-row flex-sm-column flex-column jusify-content-between align-items-center text-white text-center">
            <i class="fa-solid fa-handshake-angle fa-2xl m-lg-0 m-md-0 m-sm-5 m-5   "></i>
            <h5 class="text-start px-5">
                Empowerment. Collaboration. Innovation.
                Telaid offers highly skilled and talented individuals an opportunity to work in a dynamic environment with an industry-leading technology deployment company. We employ dedicated, innovative individuals who deliver world-class customer service, project management, and implementation services for the OEM, distributor, VAR and end-user channels. We are proud to be recognized as a Great Place to Work.
            </h5>
        </div>
    </div>
</section>
<!-- <section class="container my-5">
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
</section> -->
<!-- <section class="container">
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
</section> -->

<section>
    <form action="{{route('labor_partner_add')}}" method="post">
        @csrf
        <div class="container flex-grow-1 flex-shrink-0 py-5">
            <div class="mb-5 p-4 bg-white shadow-sm">
                <h3>Linear stepper</h3>
                <div id="stepper1" class="bs-stepper linear">
                    <div class="bs-stepper-header" role="tablist">
                        <div class="step active" data-target="#test-l-1">
                            <button type="button" class="step-trigger" role="tab" id="stepper1trigger1" aria-controls="test-l-1" aria-selected="true">
                                <span class="btn btn-primary">Step 1</span>
                            </button>
                        </div>
                        <div class="bs-stepper-line"></div>
                        <div class="step" data-target="#test-l-2">
                            <button type="button" class="step-trigger" role="tab" id="stepper1trigger2" aria-controls="test-l-2" aria-selected="false" disabled="disabled">
                                <span class="btn btn-primary">Step 2</span>
                            </button>
                        </div>
                        <div class="bs-stepper-line"></div>
                        <div class="step" data-target="#test-l-3">
                            <button type="button" class="step-trigger" role="tab" id="stepper1trigger3" aria-controls="test-l-3" aria-selected="false" disabled="disabled">
                                <span class="btn btn-primary">Step 3</span>
                            </button>
                        </div>
                        <div class="bs-stepper-line"></div>
                        <div class="step" data-target="#test-l-4">
                            <button type="button" class="step-trigger" role="tab" id="stepper1trigger4" aria-controls="test-l-4" aria-selected="false" disabled="disabled">
                                <span class="btn btn-primary">Step 4</span>
                            </button>
                        </div>
                        <div class="bs-stepper-line"></div>
                        <div class="step" data-target="#test-l-5">
                            <button type="button" class="step-trigger" role="tab" id="stepper1trigger5" aria-controls="test-l-5" aria-selected="false" disabled="disabled">
                                <span class="btn btn-primary">Step 5</span>
                            </button>
                        </div>
                        <div class="bs-stepper-line"></div>
                        <div class="step" data-target="#test-l-6">
                            <button type="button" class="step-trigger" role="tab" id="stepper1trigger6" aria-controls="test-l-6" aria-selected="false" disabled="disabled">
                                <span class="btn btn-primary">Step 6</span>
                            </button>
                        </div>
                    </div>
                    <div class="bs-stepper-content">
                        <form onsubmit="return false">
                            <div id="test-l-1" role="tabpanel" class="bs-stepper-pane active dstepper-block" aria-labelledby="stepper1trigger1">

                                <div class="mb-3">
                                    <label for="companyName" class="form-label">Company Name (Legal Name Per W-9, Line 1)*</label>
                                    <input type="text" class="form-control" id="companyName" name="companyName">
                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                </div>
                                <div class="mb-3">
                                    <label for="dba" class="form-label">DBA</label>
                                    <input type="text" class="form-control" id="dba" name="dba">
                                </div>
                                <div class="mb-3">
                                    <p class="form-label ">Full Company Address*</p>

                                    <input type="text" class="form-control" id="fullAddress" name="fullAddress">
                                    <label for="fullAddress" class="form-text mb-3">Street Address</label>

                                    <input type="text" class="form-control" id="addressLine2" name="addressLine2">
                                    <label for="addressLine2" class="form-text mb-3">Address Line 2</label>

                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" id="city" name="city">
                                            <label for="city" class="form-text mb-3">City</label>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" id="state_province_region" name="state_province_region">
                                            <label for="state_province_region" class="form-text mb-3">State / Province / Region</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" id="zip_postal_code" name="zip_postal_code">
                                            <label for="zip_postal_code" class="form-text mb-3">ZIP / Postal Code</label>
                                        </div>
                                        <div class="col">
                                            <select class="form-select" aria-label="Default select example" name="country" id="country">
                                                <option selected>Select Country</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Peru">Peru</option>
                                                <option value="United States">United States</option>
                                            </select>
                                            <label for="country" class="form-text mb-3">Country</label>
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <div class="mb-3">
                                    <p class="form-label ">Shipping Address*</p>
                                    <p class="form-text ">(If different from the main company address)</p>

                                    <input type="text" class="form-control" id="shipping_Address" name="shipping_Address">
                                    <label for="shipping_Address" class="form-text mb-3">Street Address</label>

                                    <input type="text" class="form-control" id="shipping_AddressLine2" name="shipping_AddressLine2">
                                    <label for="shipping_AddressLine2" class="form-text mb-3">Address Line 2</label>

                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" id="shipping_City" name="shipping_City">
                                            <label for="shipping_City" class="form-text mb-3">City</label>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" id="shipping_State_province_region" name="shipping_State_province_region">
                                            <label for="shipping_State_province_region" class="form-text mb-3">State / Province / Region</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" id="shipping_zip_postal_code" name="shipping_zip_postal_code">
                                            <label for="shipping_zip_postal_code" class="form-text mb-3">ZIP / Postal Code</label>
                                        </div>
                                        <div class="col">
                                            <select class="form-select" aria-label="Default select example" name="shipping_country" id="shipping_country">
                                                <option selected>Select Country</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Peru">Peru</option>
                                                <option value="United States">United States</option>
                                            </select>
                                            <label for="shipping_country" class="form-text mb-3">Country</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row g-3">
                                    <div class="col">
                                        <p class="form-label ">Company Contact Name*</p>
                                        <input type="text" class="form-control" id="company_contact_name" name="company_contact_name">
                                        <label for="company_contact_name" class="form-text mb-3">Name of person who is your main contact for company (e.g. owner, etc).</label>
                                    </div>
                                    <div class="col">
                                        <p class="form-label ">Main Phone*</p>
                                        <input type="tel" class="form-control" id="company_main_phone" name="company_main_phone">
                                        <label for="company_main_phone" class="form-text mb-3">Main phone number Telaid should call (e.g. dispatch phone if you have different numbers).</label>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col">
                                        <p class="form-label ">Emergency Phone*</p>
                                        <input type="tel" class="form-control" id="emergency_phone" name="emergency_phone">
                                        <label for="emergency_phone" class="form-text mb-3">Phone number to be called for urgent situations that Telaid needs to get in contact with someone immediately.</label>
                                    </div>
                                    <div class="col">
                                        <p class="form-label ">Mobile Default Phone</p>
                                        <input type="tel" class="form-control" id="mobile_default_phone" name="mobile_default_phone">
                                        <label for="mobile_default_phone" class="form-text mb-3">This cell number will receive cc text notifications from our text notification system.</label>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col">
                                        <p class="form-label ">Main Email*</p>
                                        <input type="email" class="form-control" id="main_email" name="main_email">
                                        <label for="main_email" class="form-text mb-3">Note: If none of the emails below are populated, the main email will receive all notifications from Telaid's online work order and payment system.</label>
                                    </div>
                                    <div class="col">
                                        <p class="form-label ">PO Email</p>
                                        <input type="email" class="form-control" id="po_email" name="po_email">
                                        <label for="po_email" class="form-text mb-3">This email will receive all work order/dispatch notifications from Telaid (usually designed for your Dispatch Contact)</label>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col">
                                        <p class="form-label ">Status Alert Email</p>
                                        <input type="email" class="form-control" id="shipping_status_alert_email" name="shipping_status_alert_email">
                                        <label for="shipping_status_alert_email" class="form-text mb-3">This email will receive any status alert notifications emails from Telaid (usually designed for your Dispatch Contact)</label>
                                    </div>
                                    <div class="col">
                                        <p class="form-label ">Compliance Alert Email</p>
                                        <input type="email" class="form-control" id="shipping_complience_status_alert_email" name="shipping_complience_status_alert_email">
                                        <label for="shipping_complience_status_alert_email" class="form-text mb-3">This email will receive our automatic notifications when your COIs are coming up for renewal or have expired (usually design for the owner/office manager)</label>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col">
                                        <p class="form-label ">Portal Notification Email</p>
                                        <input type="email" class="form-control" id="shipping_portal_notification_email" name="shipping_portal_notification_email">
                                        <label for="shipping_portal_notification_email" class="form-text mb-3">This email will receive and email with any notes/docs that have been uploaded to your vendor portal</label>
                                    </div>
                                    <div class="col">
                                        <p class="form-label ">QuickPay Email</p>
                                        <input type="email" class="form-control" id="shipping_quick_pay_email" name="shipping_quick_pay_email">
                                        <label for="shipping_quick_pay_email" class="form-text mb-3">This email will receive any daily/weekly QuickPay emails (usually designed for your Accounts Receivable contact, if applicable)</label>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col">
                                        <p class="form-label ">Banking (EFT) Contact Name*</p>
                                        <input type="email" class="form-control" id="shipping_banking_eft_contact_name" name="shipping_banking_eft_contact_name">
                                        <label for="shipping_banking_eft_contact_name" class="form-text mb-3">This is the owner or person within your company who owns the EFT information for your company profile.</label>
                                    </div>
                                    <div class="col">
                                        <p class="form-label ">Banking (EFT) Contact Phone*</p>
                                        <input type="email" class="form-control" id="shipping_banking_eft_contact_phone" name="shipping_banking_eft_contact_phone">
                                        <label for="shipping_banking_eft_contact_phone" class="form-text mb-3">Please provide the phone number for the person who is managing your company EFT information.</label>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col">
                                        <p class="form-label ">Banking (EFT) Contact Email*</p>
                                        <input type="email" class="form-control" id="shipping_banking_eft_contact_email" name="shipping_banking_eft_contact_email">
                                        <label for="shipping_banking_eft_contact_email" class="form-text mb-3">Please provide the email address for the person who is managing your company EFT information.</label>
                                    </div>
                                    <div class="col">
                                        <p class="form-label ">Are you a union shop?</p>
                                        <select class="form-select" aria-label="Default select example" id="is_union_shop" name="is_union_shop">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row g-3 union_affiliation_wrapper">
                                    <div class="col-6">
                                        <label for="union_affiliation" class="form-label mb-3">Provide your company union affiliation(s):</label>
                                        <input type="text" class="form-control" id="union_affiliation" name="union_affiliation">
                                    </div>
                                </div>
                                <div class="my-3">
                                    <p class="form-label ">How did you hear about Telaid?*</p>
                                    <select class="form-select" aria-label="Default select example" id="hearing_source" name="hearing_source">
                                        <option value="Telaid Employee Referral">Telaid Employee Referral</option>
                                        <option value="Existing Partner Referral">Existing Partner Referral</option>
                                        <option value="Job Board Posting">Job Board Posting</option>
                                        <option value="Regional Fliers">Regional Fliers</option>
                                        <option value="Online Advertising">Online Advertising</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <div class="my-5">
                                    <h2 class="text-primary">EMPLOYEE & SERVICES</h2>
                                    <h6 class="text-secondary">Telaid does not allow sub-contractors (1099s) to be used on our projects. Only W2 Employees.</h6>
                                    <hr>
                                    <p class="form-label ">I confirm, my company does not use any Sub-Contractors (only W2 employees) on our projects*</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Yes" id="does_not_use_sub_contractors" name="does_not_use_sub_contractors">
                                        <label class="form-check-label" for="does_not_use_sub_contractors">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="w2_employee_info my-4">
                                        <div class="my-4">
                                            <p class="form-label ">How many Lead Technicians (W2 employees) do you employ? </p>
                                            <p class="form-text ">This should be a numeric value. </p>
                                            <input type="number" class="form-control" id="number_of_lead_technician" name="number_of_lead_technician">
                                        </div>
                                        <div class="my-4">
                                            <p class="form-label "> How many Level 1 Technicians (W2 employees) do you employ?</p>
                                            <p class="form-text ">This should be a numeric value. </p>
                                            <input type="number" class="form-control" id="number_of_level_one_technician" name="number_of_level_one_technician">

                                        </div>
                                        <div class="my-4">
                                            <p class="form-label">Do your techs go to site with smartphones/tablets? </p>
                                            <p class="form-text  ">e.g. Have the ability to check in/out electronically as well as upload deliverables on site.</p>
                                            <select class="form-select" aria-label="Default select example" id="techs_go_to_site_with_smartphone" name="techs_go_to_site_with_smartphone">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="my-4">
                                            <p class="form-label ">Can you support a 4 HR Response Time?</p>
                                            <p class="form-text ">Within an hour radius</p>
                                            <select class="form-select" aria-label="Default select example" id="four_hour_response" name="four_hour_response">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="my-4">
                                            <p class="form-label ">Can you support a 2 HR Response Time?</p>
                                            <p class="form-text ">Within an hour radius</p>
                                            <select class="form-select" aria-label="Default select example" id="two_hour_response" name="two_hour_response">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="my-4">
                                            <p class="form-label ">Can you support night/holidays/weekend work?</p>
                                            <select class="form-select" aria-label="Default select example" id="night_holiday_weekend_work" name="night_holiday_weekend_work">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="my-4">
                                            <p class="form-label ">Are you willing to travel (routes)?</p>
                                            <select class="form-select" aria-label="Default select example" id="willing_to_travel" name="willing_to_travel">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="my-4">
                                            <p class="form-label ">Do you have capacity to store assets for Techyeah?</p>
                                            <select class="form-select" aria-label="Default select example" id="store_capacity" name="store_capacity">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                                <option value="interested">Interested, Need More Info</option>
                                            </select>
                                        </div>
                                    </div>
                                    <p class="form-label ">Will you take Flat Rate Projects?</p>
                                    <p class="form-text ">Most of our project and rollout work is a flat rate project rate.</p>
                                    <select class="form-select" aria-label="Default select example" id="takes_flate_rate_project" name="takes_flate_rate_project">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>


                                </div>

                                <a class="btn btn-primary" onclick="stepper1.next()">Next</a>
                            </div>
                            <div id="test-l-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger2">
                                <div class="my-4">
                                    <p class="form-label ">TRAVEL RATES</p>
                                    <p class="form-text ">Dollar Amount Per Hour Only. Only populate an hourly rate for the services you provide.</p>
                                    <hr>

                                    <div class="row g-3">
                                        <div class="col-3">
                                            <label for="labor_travel_rate" class="form-label mb-3">Labor Travel Rate</label>
                                            <input type="number" class="form-control" id="shipping_labor_travel_rate" name="shipping_labor_travel_rate">
                                        </div>
                                        <div class="col-3">
                                            <label for="security_travel_rate" class="form-label mb-3">Security Travel Rate</label>
                                            <input type="number" class="form-control" id="security_travel_rate" name="security_travel_rate">
                                        </div>
                                        <div class="col-3">
                                            <label for="electrical_travel_rate" class="form-label mb-3">Electrical Travel Rate</label>
                                            <input type="number" class="form-control" id="electrical_travel_rate" name="electrical_travel_rate">
                                        </div>
                                        <div class="col-3">
                                            <label for="retail_scale_calibration_travel_rate" class="form-label mb-3">Retail Scale Calibration Travel Rate</label>
                                            <input type="number" class="form-control" id="retail_scale_calibration_travel_rate" name="retail_scale_calibration_travel_rate">
                                        </div>
                                    </div>
                                    <div>
                                        <h2 class="text-primary">RATE INFORMATION</h2>
                                        <p> Upon your acceptance of any Telaid work assignment, it will be your responsibility to obtain any required local and state permits. All pricing is negotiated at the time we approach you for work.</p>
                                        <p><span class="fw-bold"> Labor:</span> (Cabling/Fiber, CCTV, Voice, Wireless) </p>
                                        <p><span class="fw-bold"> Security: </span> (Fire/Intrusion Detective Systems (Burg)/Access Control) </p>
                                        <p><span class="fw-bold"> Electrical (High Voltage)</span> </p>
                                        <p><span class="fw-bold">Scale Calibration </span> </p>
                                        <p><span class="fw-bold">Facility Maintenance (Automation, Robotics, HVAC) </span> </p>
                                        <p><span class="fw-bold">CAD </span> </p>
                                        <hr>
                                    </div>
                                    <div>
                                        <p class="form-label ">Service Call Minimum</p>
                                        <p class="form-text ">Do you charge a minimum dollar or hourly fee for service calls?</p>
                                        <select class="form-select" aria-label="Default select example" id="service_call_payment" name="service_call_payment">
                                            <option value="No">No</option>
                                            <option value="yes,hourly">Yes,Hourly</option>
                                            <option value="yes,fixed doller amount">Yes,Fixed Doller Amount</option>
                                        </select>
                                        <div class="service_call_rate_wrapper my-3">
                                            <label for=" service_call_rate" class="form-label mb-3">Service Call Minimum Hour Amount</label>
                                            <input type="number" class="form-control" id="service_call_rate" name="service_call_rate">
                                        </div>
                                    </div>

                                    <h3>CAD Rate</h3>
                                    <p class="form-text ">Do you charge a minimum dollar or hourly fee for service calls?</p>
                                    <hr>
                                    <p class="form-label ">CAD Hourly Rate</p>
                                    <div class="service_call_rate_wrapper my-3">
                                        <label for=" service_call_rate" class="form-label mb-3">Service Call Minimum Dollar Amount</label>
                                        <input type="number" class="form-control" id="service_call_rate_hourly " name="">
                                    </div>

                                    <div>
                                        <h2>Labor Rate (1st Shift)</h2>
                                        <p class="form-text ">Dollar Amount Per Hour Only. Only populate a rate for the services you provide.</p>
                                        <div class="row g-3 my-2">
                                            <div class="col-3">
                                                <label for="labor_first_shift" class="form-label mb-3">Labor - 1st Shift</label>
                                                <input type="number" class="form-control" id="labor_first_shift" name="labor_first_shift">
                                            </div>
                                            <div class="col-3">
                                                <label for="security_first_shift" class="form-label mb-3">Security - 1st Shift</label>
                                                <input type="number" class="form-control" id="security_first_shift" name="security_first_shift">
                                            </div>
                                            <div class="col-3">
                                                <label for="electrical_first_shift" class="form-label mb-3">Electrical - 1st Shift</label>
                                                <input type="number" class="form-control" id="electrical_first_shift" name="electrical_first_shift">
                                            </div>
                                            <div class="col-3">
                                                <label for="retail_scale_calibration_first_shift" class="form-label mb-3">Retail Scale Calibration - 1st Shift</label>
                                                <input type="number" class="form-control" id="retail_scale_calibration_first_shift" name="retail_scale_calibration_first_shift">
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-3">
                                                <label for="facilities_maintenance_first_shift" class="form-label mb-3">Facilities Maintenance - 1st Shift</label>
                                                <input type="number" class="form-control" id="facilities_maintenance_first_shift" name="facilities_maintenance_first_shift">
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <h2>Labor Rate (2nd Shift)</h2>
                                        <p class="form-text ">Dollar Amount Per Hour Only. Only populate a rate for the services you provide.</p>
                                        <div class="row g-3 my-2">
                                            <div class="col-3">
                                                <label for="labor_second_shift" class="form-label mb-3">Labor - 2nd Shift</label>
                                                <input type="number" class="form-control" id="labor_second_shift" name="labor_second_shift">
                                            </div>
                                            <div class="col-3">
                                                <label for="security_second_shift" class="form-label mb-3">Security - 2nd Shift</label>
                                                <input type="number" class="form-control" id="security_second_shift" name="security_second_shift">
                                            </div>
                                            <div class="col-3">
                                                <label for="electrical_second_shift" class="form-label mb-3">Electrical - 2nd Shift</label>
                                                <input type="number" class="form-control" id="electrical_second_shift" name="electrical_second_shift">
                                            </div>
                                            <div class="col-3">
                                                <label for="retail_scale_calibration_second_shift" class="form-label mb-3" style="font-size: 15px;">Retail Scale Calibration - 2nd Shift</label>
                                                <input type="number" class="form-control" id="retail_scale_calibration_second_shift" name="retail_scale_calibration_second_shift">
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-3">
                                                <label for="facilities_maintenance_second_shift" class="form-label mb-3">Facilities Maintenance - 2nd Shift</label>
                                                <input type="number" class="form-control" id="facilities_maintenance_second_shift" name="facilities_maintenance_second_shift">
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <h2>Overtime (OT)</h2>
                                        <p class="form-text ">Dollar Amount Per Hour Only. Only populate a rate for the services you provide.</p>
                                        <div class="row g-3 my-2">
                                            <div class="col-3">
                                                <label for="labor_ot_rate" class="form-label mb-3">Labor - OT Rate</label>
                                                <input type="number" class="form-control" id="labor_ot_rate" name="labor_ot_rate">
                                            </div>
                                            <div class="col-3">
                                                <label for="security_ot_rate" class="form-label mb-3">Security - OT Rate</label>
                                                <input type="number" class="form-control" id="security_ot_rate" name="security_ot_rate">
                                            </div>
                                            <div class="col-3">
                                                <label for="electrical_ot_rate" class="form-label mb-3">Electrical - OT Rate</label>
                                                <input type="number" class="form-control" id="electrical_ot_rate" name="electrical_ot_rate">
                                            </div>
                                            <div class="col-3">
                                                <label for="retail_scale_calibration_ot_rate" class="form-label mb-3" style="font-size: 15px;">Retail Scale Calibration - OT Rate</label>
                                                <input type="number" class="form-control" id="retail_scale_calibration_ot_rate" name="retail_scale_calibration_ot_rate">
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-3">
                                                <label for="facilities_maintenance_ot_rate" class="form-label mb-3">Facilities Maintenance - OT Rate</label>
                                                <input type="number" class="form-control" id="facilities_maintenance_ot_rate" name="">
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <h2>Night Work (3rd Shift)</h2>
                                        <p class="form-text ">Dollar Amount Per Hour Only. Only populate a rate for the services you provide.</p>
                                        <div class="row g-3 my-2">
                                            <div class="col-3">
                                                <label for="labor_third_shift" class="form-label mb-3">Labor - 3rd Shift</label>
                                                <input type="number" class="form-control" id="labor_third_shift" name="labor_third_shift">
                                            </div>
                                            <div class="col-3">
                                                <label for="security_third_shift" class="form-label mb-3">Security - 3rd Shift</label>
                                                <input type="number" class="form-control" id="security_third_shift" name="security_third_shift">
                                            </div>
                                            <div class="col-3">
                                                <label for="electrical_third_shift" class="form-label mb-3">Electrical - 3rd Shift</label>
                                                <input type="number" class="form-control" id="electrical_third_shift" name="electrical_third_shift">
                                            </div>
                                            <div class="col-3">
                                                <label for="retail_scale_calibration_third_shift" class="form-label mb-3" style="font-size: 15px;">Retail Scale Calibration - 3rd Shift</label>
                                                <input type="number" class="form-control" id="retail_scale_calibration_third_shift" name="retail_scale_calibration_third_shift">
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-3">
                                                <label for="facilities_maintenance_third_shift" class="form-label mb-3">Facilities Maintenance - 3rd Shift</label>
                                                <input type="number" class="form-control" id="facilities_maintenance_third_shift" name="facilities_maintenance_third_shift">
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <h2>Weekend Work (Saturday)</h2>
                                        <p class="form-text ">Dollar Amount Per Hour Only. Only populate a rate for the services you provide.</p>
                                        <div class="row g-3 my-2">
                                            <div class="col-3">
                                                <label for="labor_Saturday" class="form-label mb-3">Labor - Saturday</label>
                                                <input type="number" class="form-control" id="labor_Saturday" name="labor_Saturday">
                                            </div>
                                            <div class="col-3">
                                                <label for="security_Saturday" class="form-label mb-3">Security - Saturday</label>
                                                <input type="number" class="form-control" id="security_Saturday" name="security_Saturday">
                                            </div>
                                            <div class="col-3">
                                                <label for="electrical_Saturday" class="form-label mb-3">Electrical - Saturday</label>
                                                <input type="number" class="form-control" id="electrical_Saturday" name="electrical_Saturday">
                                            </div>
                                            <div class="col-3">
                                                <label for="retail_scale_calibration_Saturday" class="form-label mb-3" style="font-size: 15px;">Retail Scale Calibration - Saturday</label>
                                                <input type="number" class="form-control" id="retail_scale_calibration_Saturday" name="retail_scale_calibration_Saturday">
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-3">
                                                <label for="facilities_maintenance_Saturday" class="form-label mb-3">Facilities Maintenance - Saturday</label>
                                                <input type="number" class="form-control" id="facilities_maintenance_Saturday" name="facilities_maintenance_Saturday">
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <h2>Weekend Work (Sunday)</h2>
                                        <p class="form-text ">Dollar Amount Per Hour Only. Only populate a rate for the services you provide.</p>
                                        <div class="row g-3 my-2">
                                            <div class="col-3">
                                                <label for="labor_Sunday" class="form-label mb-3">Labor - Sunday</label>
                                                <input type="number" class="form-control" id="labor_Sunday" name="labor_Sunday">
                                            </div>
                                            <div class="col-3">
                                                <label for="security_Sunday" class="form-label mb-3">Security - Sunday</label>
                                                <input type="number" class="form-control" id="security_Sunday" name="security_Sunday">
                                            </div>
                                            <div class="col-3">
                                                <label for="electrical_Sunday" class="form-label mb-3">Electrical - Sunday</label>
                                                <input type="number" class="form-control" id="electrical_Sunday" name="electrical_Sunday">
                                            </div>
                                            <div class="col-3">
                                                <label for="retail_scale_calibration_Sunday" class="form-label mb-3" style="font-size: 15px;">Retail Scale Calibration - Sunday</label>
                                                <input type="number" class="form-control" id="retail_scale_calibration_Sunday" name="retail_scale_calibration_Sunday">
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-3">
                                                <label for="facilities_maintenance_Sunday" class="form-label mb-3">Facilities Maintenance - Sunday</label>
                                                <input type="number" class="form-control" id="facilities_maintenance_Sunday" name="facilities_maintenance_Sunday">
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <h2>Holidays</h2>
                                        <p class="form-text ">Dollar Amount Per Hour Only. Only populate a rate for the services you provide.</p>
                                        <div class="row g-3 my-2">
                                            <div class="col-3">
                                                <label for="labor_Holidays" class="form-label mb-3">Labor - Holidays</label>
                                                <input type="number" class="form-control" id="labor_Holidays" name="labor_Holidays">
                                            </div>
                                            <div class="col-3">
                                                <label for="security_Holidays" class="form-label mb-3">Security - Holidays</label>
                                                <input type="number" class="form-control" id="security_Holidays" name="security_Holidays">
                                            </div>
                                            <div class="col-3">
                                                <label for="electrical_Holidays" class="form-label mb-3">Electrical - Holidays</label>
                                                <input type="number" class="form-control" id="electrical_Holidays" name="electrical_Holidays">
                                            </div>
                                            <div class="col-3">
                                                <label for="retail_scale_calibration_Holidays" class="form-label mb-3" style="font-size: 15px;">Retail Scale Calibration - Holidays</label>
                                                <input type="number" class="form-control" id="retail_scale_calibration_Holidays" name="retail_scale_calibration_Holidays">
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-3">
                                                <label for="facilities_maintenance_Holidays" class="form-label mb-3">Facilities Maintenance - Holidays</label>
                                                <input type="number" class="form-control" id="facilities_maintenance_Holidays" name="facilities_maintenance_Holidays">
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <h2>Emergency (4hr Response)</h2>
                                        <p class="form-text ">Dollar Amount Per Hour Only. Only populate a rate for the services you provide.</p>
                                        <div class="row g-3 my-2">
                                            <div class="col-3">
                                                <label for="labor_4hr_Response" class="form-label mb-3">Labor - 4hr Response</label>
                                                <input type="number" class="form-control" id="labor_4hr_Response" name="labor_4hr_Response">
                                            </div>
                                            <div class="col-3">
                                                <label for="security_4hr_Response" class="form-label mb-3">Security - 4hr Response</label>
                                                <input type="number" class="form-control" id="security_4hr_Response" name="security_4hr_Response">
                                            </div>
                                            <div class="col-3">
                                                <label for="electrical_4hr_Response" class="form-label mb-3">Electrical - 4hr Response</label>
                                                <input type="number" class="form-control" id="electrical_4hr_Response" name="electrical_4hr_Response">
                                            </div>
                                            <div class="col-3">
                                                <label for="retail_scale_calibration_4hr_Response" class="form-label mb-3" style="font-size: 15px;">Retail Scale Calibration - 4hr Response</label>
                                                <input type="number" class="form-control" id="retail_scale_calibration_4hr_Response" name="retail_scale_calibration_4hr_Response">
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-3">
                                                <label for="facilities_maintenance_4hr_Response" class="form-label mb-3">Facilities Maintenance - 4hr Response</label>
                                                <input type="number" class="form-control" id="facilities_maintenance_4hr_Response" name="facilities_maintenance_4hr_Response">
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <h2>Emergency (2hr Response)</h2>
                                        <p class="form-text ">Dollar Amount Per Hour Only. Only populate a rate for the services you provide.</p>
                                        <div class="row g-3 my-2">
                                            <div class="col-3">
                                                <label for="labor_2hr_Response" class="form-label mb-3">Labor - 2hr Response</label>
                                                <input type="number" class="form-control" id="labor_2hr_Response" name="labor_2hr_Response">
                                            </div>
                                            <div class="col-3">
                                                <label for="security_2hr_Response" class="form-label mb-3">Security - 2hr Response</label>
                                                <input type="number" class="form-control" id="security_2hr_Response" name="security_2hr_Response">
                                            </div>
                                            <div class="col-3">
                                                <label for="electrical_2hr_Response" class="form-label mb-3">Electrical - 2hr Response</label>
                                                <input type="number" class="form-control" id="electrical_2hr_Response" name="electrical_2hr_Response">
                                            </div>
                                            <div class="col-3">
                                                <label for="retail_scale_calibration_2hr_Response" class="form-label mb-3" style="font-size: 15px;">Retail Scale Calibration - 2hr Response</label>
                                                <input type="number" class="form-control" id="retail_scale_calibration_2hr_Response" name="retail_scale_calibration_2hr_Response">
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-3">
                                                <label for="facilities_maintenance_2hr_Response" class="form-label mb-3">Facilities Maintenance - 2hr Response</label>
                                                <input type="number" class="form-control" id="facilities_maintenance_2hr_Response" name="facilities_maintenance_2hr_Response">
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <a class="btn btn-primary" onclick="stepper1.previous()">Previous</a>
                                <a class="btn btn-primary" onclick="stepper1.next()">Next</a>
                            </div>
                            <div id="test-l-3" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger3">
                                <h2 class="text-primary">COMPANY SKILL SET & EQUIPMENT INFORMATION</h2>
                                <hr>
                                <div class="row">
                                    <div class="col my-4">
                                        <h5 class="fw-bold" >What Type of Work Are You Looking For?</h5>
                                        <p class="form-text">(Check all that apply)</p>

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox" value="projects" id="projects" name="what_work_looking_for[]">
                                            <label class="form-check-label" for="projects">
                                                Projects
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="rollouts" id="rollouts" name="what_work_looking_for[]">
                                            <label class="form-check-label" for="rollouts">
                                                Rollouts
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="service" id="service"  name="what_work_looking_for[]">
                                            <label class="form-check-label" for="service">
                                                Service
                                            </label>
                                        </div>

                                    </div>
                                    <div class="col my-4">
                                        <h5 class="fw-bold">Check what experience you have:</h5>
                                        <p class="form-text">(Check all that apply)</p>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="new_installs" id="new_installs">
                                            <label class="form-check-label" for="new_installs">
                                                New Installs
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="remodels" id="remodels">
                                            <label class="form-check-label" for="remodels">
                                                Remodels
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="distribution_centers_warehouse_environments" id=" distribution_centers_warehouse_environments">
                                            <label class="form-check-label" for=" distribution_centers_warehouse_environments">
                                                Distribution Centers/Warehouse Environments
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="clean_room_envoirnments" id="clean_room_envoirnments">
                                            <label class="form-check-label" for="clean_room_envoirnments">
                                                Clean Room Environments
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="sterile_enviornments" id="sterile_enviornments">
                                            <label class="form-check-label" for="sterile_enviornments">
                                                Sterile Environments
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="none" id="none">
                                            <label class="form-check-label" for="none">
                                                None
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col my-4">
                                        <h5 class="fw-bold">Please describe what type of environment you are most comfortable in:</h5>
                                        <p class="form-text">(Check all that apply)</p>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="large_big_box_retail" id="large_big_box_retail">
                                            <label class="form-check-label" for="large_big_box_retail">
                                                Large Big Box Retail (e.g. Walmart, Target, etc)
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="office_enviornments" id="office_enviornments">
                                            <label class="form-check-label" for="office_enviornments">
                                                Office Environments (e.g. Morgan Stanley, UBS, etc)
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="qsr" id="qsr">
                                            <label class="form-check-label" for="qsr">
                                                QSR - Quick Serve Restaurant (e.g. Wendy's, Subway, etc)
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="small_retail" id="small_retail">
                                            <label class="form-check-label" for="small_retail">
                                                Small Retail (e.g. Claire's, etc)
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="supermarkets" id="supermarkets">
                                            <label class="form-check-label" for="supermarkets">
                                                Supermarkets (e.g. ALDI, LIDL, Weiss, etc)
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div class="row my-3">
                                    <h5 class="fw-bold">Does the following equipment go with your techs to site?</h5>
                                    <p class="form-text">(Check all that apply)</p>
                                    <div class="col my-4">

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="1000_ft_cat6_cable" id="1000_ft_cat6_cable">
                                            <label class="form-check-label" for="1000_ft_cat6_cable">
                                                1000 ft of Cat6 Cable
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="6_ft_ladder" id="6_ft_ladder">
                                            <label class="form-check-label" for="6_ft_ladder">
                                                6ft Ladder
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="butt_set" id="butt_set">
                                            <label class="form-check-label" for="butt_set">
                                                Butt Set
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="copper_tester" id="copper_tester">
                                            <label class="form-check-label" for="copper_tester">
                                                Copper Tester
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="crimper" id="crimper">
                                            <label class="form-check-label" for="crimper">
                                                Crimper
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="fiber_termination_kit" id="fiber_termination_kit">
                                            <label class="form-check-label" for="fiber_termination_kit">
                                                Fiber Termination Kit
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="fiber_anaerobic_term_kit" id="fiber_anaerobic_term_kit">
                                            <label class="form-check-label" for="fiber_anaerobic_term_kit">
                                                Fiber Anaerobic Term Kit (Puck & Polish)
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="fiber_corning_term_kit" id="fiber_corning_term_kit">
                                            <label class="form-check-label" for="fiber_corning_term_kit">
                                                Fiber Corning Term Kit (Unicam)
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="fiber_tester" id="fiber_tester">
                                            <label class="form-check-label" for="fiber_tester">
                                                Fiber Tester
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="fusion_splicer" id="fusion_splicer">
                                            <label class="form-check-label" for="fusion_splicer">
                                                Fusion Splicer
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="fusion_singlemode_splicer" id="fusion_singlemode_splicer">
                                            <label class="form-check-label" for="fusion_singlemode_splicer">
                                                Fusion Singlemode Splicer
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="fusion_multimode_splicer" id="fusion_multimode_splicer">
                                            <label class="form-check-label" for="fusion_multimode_splicer">
                                                Fusion Multimode Splicer
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="hammer_drill" id="hammer_drill">
                                            <label class="form-check-label" for="hammer_drill">
                                                Hammer Drill (18” long bits -bits to have on hand - ½”, ¾”, 1”, 1 ¼”)
                                            </label>
                                        </div>



                                    </div>
                                    <div class="col my-4">


                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="label_maker" id="label_maker">
                                            <label class="form-check-label" for="label_maker">
                                                Label Maker
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="white_tape_with_black" id="white_tape_with_black">
                                            <label class="form-check-label" for="white_tape_with_black">
                                                ½” or 3/8” white tape with black font
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="personal_protective_equipment" id="personal_protective_equipment">
                                            <label class="form-check-label" for="personal_protective_equipment">
                                                Personal Protective Equipment (PPE)
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="punch_tool" id="punch_tool">
                                            <label class="form-check-label" for="punch_tool">
                                                Punch Tool
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="RJ11" id="RJ11">
                                            <label class="form-check-label" for="RJ11">
                                                RJ11
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="RJ45" id="RJ45">
                                            <label class="form-check-label" for="RJ45">
                                                RJ45
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="small_hand_tools" id="small_hand_tools">
                                            <label class="form-check-label" for="small_hand_tools">
                                                Small Hand Tools (e.g. Screwdriver)
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="toner" id="toner">
                                            <label class="form-check-label" for="toner">
                                                Toner
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <h5 class="fw-bold">Do you own any of following types of heavy equipment?</h5>
                                    <p class="form-text">Crane Operators should be qualified under OSHA and ANSI Standards to meet the compliance levels needed within the industry. (Check all that apply)</p>
                                    <div class="col my-4">


                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="forklift" id="forklift">
                                            <label class="form-check-label" for="forklift">
                                                Forklift
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="boom_lift" id="boom_lift">
                                            <label class="form-check-label" for="boom_lift">
                                                Boom Lift
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="crane" id="crane">
                                            <label class="form-check-label" for="crane">
                                                Crane
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="heavy_equipment_rigging" id="heavy_equipment_rigging">
                                            <label class="form-check-label" for="heavy_equipment_rigging">
                                                Heavy Equipment Rigging
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="scissor_lift" id=" scissor_lift">
                                            <label class="form-check-label" for=" scissor_lift">
                                                Scissor Lift
                                            </label>
                                        </div>



                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="ladder" id=" ladder">
                                            <label class="form-check-label" for=" ladder">
                                                Ladder
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="lift_harness" id=" lift_harness">
                                            <label class="form-check-label" for=" lift_harness">
                                                Lift Harness (Safety)
                                            </label>
                                        </div>


                                    </div>
                                </div>
                                <div>
                                    <h2>CABLING</h2>
                                    <hr>
                                </div>
                                <div class="my-4 row">
                                    <div class="col-6">
                                        <p class="form-label ">Structured Cabling</p>
                                        <select class="form-select" aria-label="Default select example" id="structured_cabling" name="structured_cabling">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                        </select>
                                        <div class="structured_cabling_wrapper  ">
                                            <div class="my-4">
                                                <p class="form-label ">Can you provide verifiable test results for copper?</p>
                                                <select class="form-select" aria-label="Default select example" id="test_result_copper" name="test_result_copper">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>
                                                </select>
                                            </div>

                                            <div class="copper_testing_equipment_brand_wrapper my-3">
                                                <label for="copper_testing_equipment_brand" class="form-label ">Copper Testing Equipment Brand</label>
                                                <input type="text" class="form-control " id="copper_testing_equipment_brand" name="copper_testing_equipment_brand" autocomplete="off">
                                            </div>

                                            <div class="my-4">
                                                <p class="form-label ">Do you have experience installing rigid conduit?</p>
                                                <select class="form-select" aria-label="Default select example" id="rigit_conduit_experience" name="rigit_conduit_experience">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>
                                                </select>
                                            </div>
                                            <div class="my-4">
                                                <p class="form-label ">Do you hold any State Low-Voltage Contractor License(s)?</p>
                                                <select class="form-select" aria-label="Default select example" id="low_voltage_contractor_licence" name="low_voltage_contractor_licence">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>
                                                </select>
                                                <div class="structured_cabling_license_info_wrapper">
                                                    <p class="form-label ">Structured Cabling License Info*</p>
                                                    <p class="form-text ">List License Type and Name, State & License Number. Upon approval, you will be required to provide a copy of the above license you have listed to be listed on your company profile with Telaid.</p>

                                                    <textarea class="form-control" id="floatingTextarea" name="structured_cabling_license_info"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-4 row">
                                    <div class="col-6">
                                        <p class="form-label "> Fiber Optics</p>
                                        <select class="form-select" aria-label="Default select example" id="fiber_optics" name="fiber_optics">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                        </select>

                                    </div>
                                    <div class="fiber_optics_wrapper  ">
                                        <div class="col-6">
                                            <div class="my-4">
                                                <p class="form-label ">Can you provide verifiable test results?</p>
                                                <select class="form-select" aria-label="Default select example" id="fiber_optics_test_result" name="fiber_optics_test_result">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <div class="my-4">
                                                <p class="form-label ">Can you terminate and test?</p>
                                                <select class="form-select" aria-label="Default select example" id="fiber_optics_terminate_and_test" name="fiber_optics_terminate_and_test">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>
                                                </select>
                                            </div>
                                            <div class="fiber_optics_terminate_and_test_wrapper">
                                                <div class="mb-3">
                                                    <label for="fiber_testing_equipment_brand" class="form-label">Fiber Testing Equipment Brand</label>
                                                    <input type="text" class="form-control" id="fiber_testing_equipment_brand" name="fiber_testing_equipment_brand" autocomplete="off">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="fiber_termination_kit_equipment_brand" class="form-label">Fiber Termination Kit Equipment Brand</label>
                                                    <input type="text" class="form-control" id="fiber_termination_kit_equipment_brand" name="fiber_termination_kit_equipment_brand" autocomplete="off">
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-6">

                                            <div class="my-4">
                                                <p class="form-label ">Do you fusion splice?</p>
                                                <select class="form-select" aria-label="Default select example" id="fusion_splice" name="fusion_splice">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>
                                                </select>
                                            </div>
                                            <div class="fusion_splice_wrapper">
                                                <div class="my-4">
                                                    <p class="form-label ">Do you own fusion splice?</p>
                                                    <select class="form-select" aria-label="Default select example" id="own_a_fusion_splice" name="own_a_fusion_splice">
                                                        <option value="No">No</option>
                                                        <option value="Yes">Yes</option>
                                                    </select>
                                                </div>
                                                <div class="fusion_splicer_brand_wrapper">
                                                    <div class="mb-3">
                                                        <label for="fusion_splicer_brand" class="form-label">Fusion Splicer Brand</label>
                                                        <input type="text" class="form-control" id="fusion_splicer_brand" name="fusion_splicer_brand" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="my-4">
                                            <div class="form-floating">
                                                <p class="form-label mb-0">Fiber Optics License Info</p>
                                                <p class="form-text">
                                                    Type, State & License Number. Upon approval, you will be required to provide a copy of the above license you have listed to be listed on your company profile with Telaid.

                                                </p>
                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="fiber_optics_license_info" style="height: 200px"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="my-3">
                                        <h2>VOICE</h2>
                                        <hr>
                                        <div class="my-4">
                                            <p class="form-label ">VOIP</p>
                                            <select class="form-select" aria-label="Default select example" id="voice_voip" name="voice_voip">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div>
                                        <h2>SECURITY</h2>
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="my-4">
                                                <p class="form-label ">Can you and your crews read blueprints?</p>
                                                <select class="form-select" aria-label="Default select example" id="can_crew_read_blueprint" name="can_crew_read_blueprint">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="my-4">
                                                <p class="form-label ">CCTV</p>
                                                <select class="form-select" aria-label="Default select example" id="security_cctv" name="security_cctv">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="security_cctv_checkbox_wrapper">
                                        <div class=" my-4">
                                            <h5 class="fw-bold">Please check your experience in the following</h5>
                                            <p class="form-text">(Check all that apply)</p>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="COAX">
                                                <label class="form-check-label" for="COAX">
                                                    COAX
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="DVR">
                                                <label class="form-check-label" for="DVR">
                                                    DVR
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id=" IP_Cameras">
                                                <label class="form-check-label" for=" IP_Cameras">
                                                    IP Cameras
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="heavy_equipment_rigging">
                                                <label class="form-check-label" for="heavy_equipment_rigging">
                                                    Heavy Equipment Rigging
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id=" NVR">
                                                <label class="form-check-label" for=" NVR">
                                                    NVR
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id=" Verint_Software_Platforms">
                                                <label class="form-check-label" for=" Verint_Software_Platforms">
                                                    Verint Software Platforms
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="  March_Software_Platforms">
                                                <label class="form-check-label" for="  March_Software_Platforms">
                                                    March Software Platforms
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="  Other_VMS_Platforms">
                                                <label class="form-check-label" for="  Other_VMS_Platforms">
                                                    Other VMS Platforms
                                                </label>
                                            </div>

                                        </div>
                                        <div class=" my-4">
                                            <h5 class="fw-bold">Please check if you have the following:</h5>
                                            <p class="form-text">(Check all that apply)</p>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="Spot_Monitor">
                                                <label class="form-check-label" for="Spot_Monitor">
                                                    Spot Monitor
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="Laptop_capable_of_downloading_software">
                                                <label class="form-check-label" for="Laptop_capable_of_downloading_software">
                                                    Laptop (Capable of Downloading Software)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id=" Basic_network_capability_with_a_laptop">
                                                <label class="form-check-label" for=" Basic_network_capability_with_a_laptop">
                                                    Basic network capability with a laptop
                                                </label>
                                            </div>
                                        </div>
                                        <div class="my-4">
                                            <p class="form-label ">Do you hold State CCTV License(s)?</p>
                                            <select class="form-select" aria-label="Default select example" id="state_cctv_license" name="state_cctv_license">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                                <option value="Willing to Add for additional Opportunities">Willing to Add for additional Opportunities</option>
                                            </select>
                                        </div>
                                        <div class="state_cctv_license_wrapper">
                                            <div class="my-4">
                                                <p class="form-label mb-0">CCTV License Info*</p>
                                                <p class="form-text mb-0">Type, State & License Number. Upon approval, you will be required to provide a copy of the above license you have listed to be listed on your company profile with Telaid.</p>
                                                <div class="form-floating">
                                                    <textarea class="form-control" placeholder="Leave a comment here" name="cctv_license_info" id="floatingTextarea3" style="height: 100px" autocomplete="off"></textarea>
                                                    <label for="floatingTextarea3"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="my-4">
                                                <p class="form-label ">Fire Alarm</p>
                                                <select class="form-select" aria-label="Default select example" id="fire_alarm" name="fire_alarm">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="fire_alarm_wrapper">
                                        <div class="my-4">
                                            <p class="form-label ">Can you install basic metal work?</p>
                                            <select class="form-select" aria-label="Default select example" id="basic_metal_work" name="basic_metal_work">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                        <div class="my-4">
                                            <p class="form-label ">Can you install conduit?</p>
                                            <select class="form-select" aria-label="Default select example" id="conduit_installation" name="conduit_installation">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                        <div class="my-4">
                                            <p class="form-label ">Do you have basic network capability with a laptop for your fire installs?</p>
                                            <select class="form-select" aria-label="Default select example" id="basic_network_capability_lapto_fire_installs" name="basic_network_capability_lapto_fire_installs">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                        <div class="my-4">
                                            <label for="companyName" class="form-label">What version of Remote Programing Software (RPS) do you have?</label>
                                            <input type="text" class="form-control" id="rps_version" name="rps_version" autocomplete="off">
                                        </div>
                                        <div class="my-4">
                                            <p class="form-label ">Please confirm how you connect to a panel?</p>
                                            <select class="form-select" aria-label="Default select example" id="basic_network_capability_lapto_fire_installs" name="basic_network_capability_lapto_fire_installs">
                                                <option value="Security Dongle with Laptop">Security Dongle with Laptop</option>
                                                <option value="Remote Login">Remote Login</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="my-4">
                                                <p class="form-label ">Do you have experience with conventional fire alarm systems?</p>
                                                <select class="form-select" aria-label="Default select example" id="experience_with_conventional_fire_alarm" name="experience_with_conventional_fire_alarm">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="my-4">
                                                <p class="form-label ">Intrusion (IDS) / Burglar Alarms</p>
                                                <select class="form-select" aria-label="Default select example" id="intrusion_burglar_alarms" name="intrusion_burglar_alarms">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <p class="form-label ">Do you have basic network capability with a laptop for your intrusion installs?</p>
                                        <select class="form-select" aria-label="Default select example" id="network_capability_with_laptop_intrusion_installs" name="network_capability_with_laptop_intrusion_installs">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                        </select>
                                    </div>
                                    <div class="my-4">
                                        <p class="form-label ">Do you hold State Burglar Alarm/IDS license(s)?</p>
                                        <select class="form-select" aria-label="Default select example" id="state_burglar_alarm_license" name="state_burglar_alarm_license">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="Willing to Add for additional Opportunities">Willing to Add for additional Opportunities</option>
                                        </select>
                                    </div>
                                    <div class="state_burglar_alarm_license_wrapper">
                                        <p class="form-label mb-0">Intrusion (IDS) / Burglar Alarms License Info*</p>
                                        <p class="form-text mb-0">Type, State & License Number. Upon approval, you will be required to provide a copy of the above license you have listed to be listed on your company profile with Telaid.</p>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea3" name="intrusion_burglar_alarms_license_info" style="height: 100px" autocomplete="off"></textarea>
                                            <label for="floatingTextarea3"></label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="my-4">
                                                <p class="form-label ">Access Control</p>
                                                <select class="form-select" aria-label="Default select example" id="access_control" name="access_control">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="access_control_wrapper">
                                        <div class="my-4">
                                            <p class="form-label ">Do you have basic network capability with a laptop for your access control installs?</p>
                                            <select class="form-select" aria-label="Default select example" id="network_capability_with_laptop_access_control_installs" name="network_capability_with_laptop_access_control_installs">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                        <div class="row my-3">
                                            <h5 class="fw-bold">Please confirm if you can install the following:</h5>
                                            <div class="col my-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id=" Door_Strike">
                                                    <label class="form-check-label" for="Door_Strike">
                                                        Door Strike
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Mag_Locks">
                                                    <label class="form-check-label" for="Mag_Locks">
                                                        Mag Locks
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Readers">
                                                    <label class="form-check-label" for="Readers">
                                                        Readers
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Crash_Bars">
                                                    <label class="form-check-label" for="Crash_Bars">
                                                        Crash Bars
                                                    </label>
                                                </div>

                                                <div class="my-4">
                                                    <p class="form-label ">Do you hold State Access Control license(s)?</p>
                                                    <select class="form-select" aria-label="Default select example" id="state_access_control_license" name="state_access_control_license">
                                                        <option value="No">No</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="Willing to Add for additional Opportunities">Willing to Add for additional Opportunities</option>
                                                    </select>
                                                </div>
                                                <div class="state_access_control_license_wrapper">
                                                    <p class="form-label mb-0">Intrusion (IDS) / Burglar Alarms License Info*</p>
                                                    <p class="form-text mb-0">Type, State & License Number. Upon approval, you will be required to provide a copy of the above license you have listed to be listed on your company profile with Telaid.</p>
                                                    <div class="form-floating">
                                                        <textarea class="form-control" placeholder="Leave a comment here" id="state_access_control_license_text" name="state_access_control_license_text" style="height: 100px" autocomplete="off"></textarea>
                                                        <label for="floatingTextarea3"></label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <div>
                                        <h2>ELECTRICIAN</h2>
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="my-4">
                                                <p class="form-label ">Licensed Electrician</p>
                                                <select class="form-select" aria-label="Default select example" id="licensed_electrician" name="">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="licensed_electrician_wrapper">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="my-4">
                                                    <p class="form-label ">Do you have experience bending conduit?</p>
                                                    <select class="form-select" aria-label="Default select example" id="bending_conduit_experience" name="">
                                                        <option value="No">No</option>
                                                        <option value="Yes">Yes</option>
                                                    </select>
                                                </div>
                                                <div class="my-4">
                                                    <p class="form-label ">Do you have experience installing stainless steel conduit?</p>
                                                    <select class="form-select" aria-label="Default select example" id="sainless_steel_conduit_experience" name="">
                                                        <option value="No">No</option>
                                                        <option value="Yes">Yes</option>
                                                    </select>
                                                </div>
                                                <div class="my-4">
                                                    <p class="form-label ">Do you hold a State Electrical license(s)?</p>
                                                    <select class="form-select" aria-label="Default select example" id="state_electrical_license" name="">
                                                        <option value="No">No</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="Willing to Add for additional Opportunities">Willing to Add for additional Opportunities</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="my-4 state_electrical_license_wrapper">
                                                <p class="form-label ">Electrician License Info*</p>
                                                <p class="form-text ">Type, State & License Number. Upon approval, you will be required to provide a copy of the above license you have listed to be listed on your company profile with Telaid.</p>
                                                <textarea class="form-control" id="floatingTextarea" name="structured_cabling_license_info" autocomplete="off"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div>
                                        <h2>WIRELESS</h2>
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="my-4">
                                                <p class="form-label ">Do you perform wireless installs?</p>
                                                <select class="form-select" aria-label="Default select example" id="wireless_installls" name="">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wireless_installls_wrapper">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="my-4">
                                                    <p class="form-label ">Do you perform onsite Wireless Site Surveys?</p>
                                                    <select class="form-select" aria-label="Default select example" id="onsite_wireless_site_surveys" name="">
                                                        <option value="No">No</option>
                                                        <option value="Yes">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="my-4">
                                                    <p class="form-label ">Do you hold software licenses for:</p>
                                                    <p class="form-text ">(Check all that apply)</p>
                                                    <div class="col my-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="AirMagnet">
                                                            <label class="form-check-label" for="AirMagnet">
                                                                AirMagnet
                                                            </label>
                                                        </div>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="Aironet">
                                                            <label class="form-check-label" for="Aironet">
                                                                Aironet
                                                            </label>
                                                        </div>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="Ekahau">
                                                            <label class="form-check-label" for="Ekahau">
                                                                Ekahau
                                                            </label>
                                                        </div>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="Meraki">
                                                            <label class="form-check-label" for="Meraki">
                                                                Meraki
                                                            </label>
                                                        </div>

                                                        <div class="form-check " id="other_software_license_checkbox_wrapper">
                                                            <input class="form-check-input" type="checkbox" value="" id="other_software_license">
                                                            <label class="form-check-label" for=" other_software_license ">
                                                                Other
                                                            </label>
                                                        </div>
                                                        <div class="other_software_license_wrapper">
                                                            <label for="other_software_license_list" class="form-label ">Other (please list)</label>
                                                            <input type="text" class="form-control " id="other_software_license_list" name="" autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="my-4">
                                                <p class="form-label ">Do you own one of the following?</p>
                                                <p class="form-text ">(Check all that apply)</p>
                                                <div class="col my-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="Wilson_Pro_Meter">
                                                        <label class="form-check-label" for="Wilson_Pro_Meter">
                                                            Wilson Pro Meter
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="Surecall_Meter">
                                                        <label class="form-check-label" for="Surecall_Meter">
                                                            Surecall Meter
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h2>NETWORK HARDWARE</h2>
                                        <hr>
                                    </div>
                                    <div class="my-4">
                                        <p class="form-label ">Do you perform network hardware installs?</p>
                                        <select class="form-select" aria-label="Default select example" id="network_hardware_installs" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="Willing to Add for additional Opportunities">Willing to Add for additional Opportunities</option>
                                        </select>
                                    </div>
                                    <div class="network_hardware_installs_wrapper">
                                        <h5 class="fw-bold">Please check what experience you have:</h5>
                                        <p class="form-text"> (Check all that apply)</p>
                                        <div class="col my-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="forklift">
                                                <label class="form-check-label" for="forklift">
                                                    Forklift
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="boom_lift">
                                                <label class="form-check-label" for="boom_lift">
                                                    Boom Lift
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="crane">
                                                <label class="form-check-label" for="crane">
                                                    Crane
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="heavy_equipment_rigging">
                                                <label class="form-check-label" for="heavy_equipment_rigging">
                                                    Heavy Equipment Rigging
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id=" scissor_lift">
                                                <label class="form-check-label" for=" scissor_lift">
                                                    Scissor Lift
                                                </label>
                                            </div>



                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id=" ladder">
                                                <label class="form-check-label" for=" ladder">
                                                    Ladder
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id=" lift_harness">
                                                <label class="form-check-label" for=" lift_harness">
                                                    Lift Harness (Safety)
                                                </label>
                                            </div>


                                        </div>
                                        <div class="my-4">
                                            <p class="form-label ">Do you have experience installing MDF Racks?</p>
                                            <select class="form-select" aria-label="Default select example" id="experience_installing_mdf_racks" name="">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <h2>AUTOMATION, ROBOTICS AND FACILITIES MAINTENANCE</h2>
                                        <hr>
                                        <p class="form-text fw-bold"> Do you have experience in:</p>
                                        <div class="col my-4">
                                            <div class="form-check">
                                                <input class="form-check-input automation_robotics_facilities" type="checkbox" value="" id="automation">
                                                <label class="form-check-label" for="automation">
                                                    Automation
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input automation_robotics_facilities" type="checkbox" value="" id="robotics">
                                                <label class="form-check-label" for="robotics">
                                                    Robotics
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input automation_robotics_facilities" type="checkbox" value="" id="facilities_maintenace">
                                                <label class="form-check-label" for="facilities_maintenace">
                                                    Facilities Maintenace
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col my-4 automation_robotics_facilities_maintenance_wrapper  ">
                                            <p class="form-label">Further explain your experience and skill set in Automation and Robotics:</p>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="Conveyors">
                                                <label class="form-check-label" for="Conveyors">
                                                    Conveyors (assembly of drive components such as Drive, Servo, Motor, Belt, or Chain)
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="Electrical">
                                                <label class="form-check-label" for="Electrical">
                                                    Electrical (Power Units, Cabling, Bus ways, etc)
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="Facilities">
                                                <label class="form-check-label" for="Facilities">
                                                    Facilities
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="General_Construction">
                                                <label class="form-check-label" for="General_Construction">
                                                    General Construction
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="Maintenance">
                                                <label class="form-check-label" for="Maintenance">
                                                    Maintenance
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="Material_Handling">
                                                <label class="form-check-label" for="Material_Handling">
                                                    Material Handling
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="Mechanical_Construction">
                                                <label class="form-check-label" for="Mechanical_Construction">
                                                    Mechanical Construction (general mechanical labor - putting parts together with bolts, rivets, etc., anchoring)
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="Refrigeration">
                                                <label class="form-check-label" for="Refrigeration">
                                                    Refrigeration
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="Software_Turn_up_Connectivity">
                                                <label class="form-check-label" for="Software_Turn_up_Connectivity">
                                                    Software Turn up & Connectivity
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="Weights_and_Measures_Scale_Calibration">
                                                <label class="form-check-label" for="Weights_and_Measures_Scale_Calibration">
                                                    Weights and Measures/Scale Calibration
                                                </label>
                                            </div>
                                            <p class="form-text">Check all that apply.</p>

                                            <p class="form-label">Type of HVAC Work</p>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="Control_Repair_Replacement_Experience">
                                                <label class="form-check-label" for="Control_Repair_Replacement_Experience">
                                                    Control Repair/Replacement Experience
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="Troubleshooting_and_Repair_of RTUs_and_Associated_Controls">
                                                <label class="form-check-label" for="Troubleshooting_and_Repair_of RTUs_and_Associated_Controls">
                                                    Troubleshooting and Repair of RTUs and Associated Controls
                                                </label>
                                            </div>
                                            <p class="form-text">Check all that apply.</p>

                                            <div class="my-4">
                                                <p class="form-label ">Do you hold a General Contractor License?</p>
                                                <select class="form-select" aria-label="Default select example" id="general_contractor_license" name="">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>
                                                </select>
                                                <div class="general_contractor_license_wrapper">
                                                    <p class="form-label ">Structured Cabling License Info*</p>
                                                    <p class="form-text ">List License Type and Name, State &amp; License Number. Upon approval, you will be required to provide a copy of the above license you have listed to be listed on your company profile with Telaid.</p>

                                                    <textarea class="form-control" id="floatingTextarea" name="general_contractor_license_info"></textarea>
                                                </div>
                                            </div>

                                            <div class="my-4">
                                                <p class="form-label ">Do you hold a Mechanical Contractor License?</p>
                                                <select class="form-select" aria-label="Default select example" id="mechanical_contractor_license" name="">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>
                                                </select>
                                                <div class="mechanical_contractor_license_wrapper">
                                                    <p class="form-label ">Structured Cabling License Info*</p>
                                                    <p class="form-text ">List License Type and Name, State &amp; License Number. Upon approval, you will be required to provide a copy of the above license you have listed to be listed on your company profile with Telaid.</p>

                                                    <textarea class="form-control" id="floatingTextarea" name="mechanical_contractor_license_info"></textarea>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div>
                                        <h2>AUTOMATION, ROBOTICS AND FACILITIES MAINTENANCE</h2>
                                        <hr>
                                        <p class="form-text fw-bold"> Do you have experience performing:</p>
                                        <div class="col my-4">
                                            <div class="form-check">
                                                <input class="form-check-input digital_signage_installs" type="checkbox" value="" id="indoor_digital_signage_installs">
                                                <label class="form-check-label" for="indoor_digital_signage_installs">
                                                    Indoor Digital Signage Installs (e.g. Kiosks, Single Boards, Menu Boards, KDS, Media Players, etc)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input digital_signage_installs" type="checkbox" value="" id="outdoor_digital_signage_installs">
                                                <label class="form-check-label" for="outdoor_digital_signage_installs">
                                                    Outdoor Signage Installs (e.g. Pedestals at Drive-Throughs, Ring Notifications, Large Digital Signs on Poles higher than 6’)
                                                </label>
                                            </div>
                                        </div>
                                        <div class="digital_signage_installs_wrapper">
                                            <p class="form-text fw-bold">List your specific experience with Digital Signage work:</p>
                                            <div class="col my-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="connectivity_of_outdoor_digital_signs">
                                                    <label class="form-check-label" for="connectivity_of_outdoor_digital_signs">
                                                        Connectivity of Outdoor Digital Signs (e.g. hard wire, cellular, WIFI)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="mall_kiosk_screens">
                                                    <label class="form-check-label" for="mall_kiosk_screens">
                                                        Mall Kiosk Screens (e.g. mall directories and advertising)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="media_player_installs">
                                                    <label class="form-check-label" for="media_player_installs">
                                                        Media Player Installs
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="outdoor_digital_signs">
                                                    <label class="form-check-label" for="outdoor_digital_signs">
                                                        Outdoor Digital Signs on Poles (e.g. heights of 6’+)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="pedestal_signage_installs">
                                                    <label class="form-check-label" for="pedestal_signage_installs">
                                                        Pedestal Signage Installs
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="power_source_internal">
                                                    <label class="form-check-label" for="power_source_internal">
                                                        Power Source Internal (installing electrical outlets)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="power_source_external">
                                                    <label class="form-check-label" for="power_source_external">
                                                        Power Source External (trenching to a sign for electrical conduit)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="perform_site_surveys_existing_signs_placement">
                                                    <label class="form-check-label" for="perform_site_surveys_existing_signs_placement">
                                                        Perform site surveys for existing signs placement
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="perform_site_surveys_new_signs_placement">
                                                    <label class="form-check-label" for="perform_site_surveys_new_signs_placement">
                                                        Perform site surveys for new sign placement
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="perform_site_surveys_existing_power_and_circuit_space">
                                                    <label class="form-check-label" for="perform_site_surveys_existing_power_and_circuit_space">
                                                        Perform site surveys for existing power and circuit space
                                                    </label>
                                                </div>
                                                <p class="form-text">Check all that apply.</p>

                                                <div class="my-4 row">
                                                    <div class="col-6">
                                                        <p class="form-label ">Are you able to pull your own Digital Signage Permits?</p>
                                                        <select class="form-select" aria-label="Default select example" id="pull_digital_signage_permits" name="">
                                                            <option value="No">No</option>
                                                            <option value="Yes">Yes</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="my-4 row">
                                                    <div class="col-6">
                                                        <p class="form-label ">Do you have a license for signage installs?</p>
                                                        <select class="form-select" aria-label="Default select example" id="license_for_signage_installs" name="">
                                                            <option value="No">No</option>
                                                            <option value="Yes">Yes</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="license_for_signage_installs_wrapper">
                                                    <div class="my-4 row">
                                                        <div class="col-6">
                                                            <p class="form-label ">Signage License Info*</p>
                                                            <p class="form-text ">Type, State & License Number. Upon approval, you will be required to provide a copy of the above license you have listed to be listed on your company profile with Telaid.</p>
                                                            <textarea class="form-control" id="floatingTextarea" name="signage_license_info"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h2>IT SERVICES, AUDIO/VIDEO, PAGING, SATELLITE, POS AND OUTSIDE PLANT WORK</h2>
                                        <hr>
                                        <div class="my-4 row">
                                            <div class="col-6">
                                                <p class="form-label ">Do you offer IT services?</p>
                                                <select class="form-select" aria-label="Default select example" id="offering_it_services" name="">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="my-4 row">
                                            <div class="col-6">
                                                <p class="form-label ">Do you offer the following services?</p>
                                                <div class="col my-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="audio_video">
                                                        <label class="form-check-label" for="audio_video">
                                                            Audio/Video
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="  Paging_Systems">
                                                        <label class="form-check-label" for="  Paging_Systems">
                                                            Paging Systems
                                                        </label>
                                                    </div>



                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id=" Aerial">
                                                        <label class="form-check-label" for=" Aerial">
                                                            Aerial
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id=" Underground_Work">
                                                        <label class="form-check-label" for=" Underground_Work">
                                                            Underground Work
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="my-4 row">
                                            <div class="col-6">
                                                <p class="form-label ">Type of Outside Plant Work</p>
                                                <div class="col my-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="Trenching">
                                                        <label class="form-check-label" for="Trenching">
                                                            Trenching
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="  Directional_Boring">
                                                        <label class="form-check-label" for="  Directional_Boring">
                                                            Directional Boring
                                                        </label>
                                                    </div>



                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id=" Satellite">
                                                        <label class="form-check-label" for=" Satellite">
                                                            Satellite
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id=" offering_POS">
                                                        <label class="form-check-label" for=" offering_POS">
                                                            POS
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h2>RETAIL SCALE CALIBRATION</h2>
                                        <p class="form-label">(Weights & Measures)</p>
                                        <hr>

                                    </div>
                                    <div class="my-4 row">
                                        <div class="col-6">
                                            <p class="form-label ">Are you certified to offer Retail Scale Calibration services?</p>
                                            <select class="form-select" aria-label="Default select example" id="retail_scale_calibration_service" name="">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                                <option value="I am interested in information on how to get certified">I am interested in information on how to get certified</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="retail_scale_calibration_service_wrapper ">
                                        <p class="form-label ">States Certified</p>
                                        <p class="form-text ">List States</p>

                                        <textarea class="form-control" id="floatingTextarea" name="retail_scale_calibration_service_info" autocomplete="off"></textarea>
                                    </div>
                                    <div>
                                        <h2>SOUND MASKING</h2>
                                        <p class="form-label">(Weights &amp; Measures)</p>
                                        <hr>
                                    </div>
                                    <div class="my-4 row">
                                        <div class="col-6">
                                            <p class="form-label ">Do you install Sound Masking System?</p>
                                            <select class="form-select" aria-label="Default select example" id="sound_masking_system" name="">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="sound_masking_system_wrapper">
                                        <div class="my-4 row">
                                            <div class="col-6">
                                                <p class="form-label ">Do you provide engineering services for Sound Masking?</p>
                                                <select class="form-select" aria-label="Default select example" id="engineering_service_for_sound_masking_system" name="">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="">
                                            <p class="form-label ">Sound Masking Systems</p>
                                            <p class="form-text ">Please list what systems you have worked on.</p>

                                            <textarea class="form-control" id="floatingTextarea" name="retail_scale_calibration_service_info" autocomplete="off"></textarea>
                                        </div>
                                    </div>
                                    <div>
                                        <h2>CAD</h2>
                                        <hr>
                                    </div>
                                    <div class="my-4 row">
                                        <div class="col-6">
                                            <p class="form-label ">Do you provide CAD services </p>
                                            <select class="form-select" aria-label="Default select example" id="cad_service" name="">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="cad_service_wrapper">
                                        <div class="row my-3">
                                            <p class="form-label">What software systems do you have experience operating?</p>
                                            <div class="col my-4">

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Bluebeam">
                                                    <label class="form-check-label" for="Bluebeam">
                                                        Bluebeam
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="AutoCAD">
                                                    <label class="form-check-label" for="AutoCAD">
                                                        AutoCAD
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Revit">
                                                    <label class="form-check-label" for="Revit">
                                                        Revit
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="BIM_360">
                                                    <label class="form-check-label" for="BIM_360">
                                                        BIM 360
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="MS_Excel">
                                                    <label class="form-check-label" for="MS_Excel">
                                                        MS Excel
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Smart_Sheets">
                                                    <label class="form-check-label" for="Smart_Sheets">
                                                        Smart Sheets
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Service_Now">
                                                    <label class="form-check-label" for="Service_Now">
                                                        ServiceNow
                                                    </label>
                                                </div>
                                                <p class="form-text">(Check all that apply)</p>
                                            </div>
                                        </div>
                                        <div class="row my-3">
                                            <p class="form-label">List the areas of scope you have provided CAD services for.</p>
                                            <div class="col my-4">

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Telecom">
                                                    <label class="form-check-label" for="Telecom">
                                                        Telecom
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="video_surveillance_system">
                                                    <label class="form-check-label" for="video_surveillance_system">
                                                        Video Surveillance System (Video/Camera/CCTV)
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="cad_Wireless">
                                                    <label class="form-check-label" for="cad_Wireless">
                                                        Wireless
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="cad_Security_Intrusion">
                                                    <label class="form-check-label" for="cad_Security_Intrusion">
                                                        Security & Intrusion
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Low_Voltage">
                                                    <label class="form-check-label" for="Low_Voltage">
                                                        Low Voltage
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Data">
                                                    <label class="form-check-label" for="Data">
                                                        Data
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="RFID">
                                                    <label class="form-check-label" for="RFID">
                                                        RFID
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Access Control">
                                                    <label class="form-check-label" for="Audio_Paging">
                                                        Audio/Paging
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="cad_Access_Control">
                                                    <label class="form-check-label" for="cad_Access_Control">
                                                        Access Control
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="cad_Fire_Alarm">
                                                    <label class="form-check-label" for="cad_Fire_Alarm">
                                                        Fire Alarm
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="cad_Life Safety">
                                                    <label class="form-check-label" for="cad_Life Safety">
                                                        Life Safety
                                                    </label>
                                                </div>


                                                <p class="form-text">(Check all that apply)</p>
                                            </div>
                                        </div>
                                        <div class="row my-3">
                                            <p class="form-label">List the different stages you have experience performing.</p>
                                            <div class="col my-4">

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Design">
                                                    <label class="form-check-label" for="Design">
                                                        Design
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Conceptual">
                                                    <label class="form-check-label" for="Conceptual">
                                                        Conceptual
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Prototype">
                                                    <label class="form-check-label" for="Prototype">
                                                        Prototype
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Pilot">
                                                    <label class="form-check-label" for="Pilot">
                                                        Pilot
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Pre_Construction">
                                                    <label class="form-check-label" for="Pre_Construction">
                                                        Pre-Construction
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Construction">
                                                    <label class="form-check-label" for="Construction">
                                                        Construction
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Start_Up">
                                                    <label class="form-check-label" for="Start_Up">
                                                        Start-Up
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Composite">
                                                    <label class="form-check-label" for="Composite">
                                                        Composite
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Permit_Set">
                                                    <label class="form-check-label" for="Permit_Set">
                                                        Permit Set
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Permit_Set">
                                                    <label class="form-check-label" for="Permit_Set">
                                                        Permit Set
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Revision_">
                                                    <label class="form-check-label" for="2">
                                                        Revision 1
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Revision_2">
                                                    <label class="form-check-label" for="Revision_2">
                                                        Revision 2
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="As_Built">
                                                    <label class="form-check-label" for="As_Built">
                                                        As-Built
                                                    </label>
                                                </div>

                                                <p class="form-text">(Check all that apply)</p>
                                            </div>
                                        </div>
                                        <div class="row my-3">
                                            <p class="form-label">Designate what level of experience you have:</p>
                                            <div class="col my-4">

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Intern">
                                                    <label class="form-check-label" for="Intern">
                                                        Intern
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Drafter">
                                                    <label class="form-check-label" for="Drafter">
                                                        Drafter
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Designer">
                                                    <label class="form-check-label" for="Designer">
                                                        Designer
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Engineer">
                                                    <label class="form-check-label" for="Engineer">
                                                        Engineer
                                                    </label>
                                                </div>



                                                <p class="form-text">(Check all that apply)</p>
                                            </div>
                                        </div>
                                    </div>



                                </div>

                                <a class="btn btn-primary" onclick="stepper1.previous()">Previous</a>
                                <a class="btn btn-primary" onclick="stepper1.next()">Next</a>
                            </div> 
                            <div id="test-l-4" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger4">
                                <h2 class="text-primary">CERTIFICATIONS</h2>
                                <hr>
                                <h3 class="text-dark">GENERAL BUSINESS</h3>
                                <hr>
                                <div class="my-4 row">

                                    <div class="col-12">
                                        <p class="form-label ">Background Checks</p>
                                        <select class="form-select" aria-label="Default select example" id="background_check" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>

                                        <div class="background_check_last_check_wrapper">
                                            <p class="form-label ">Background Checks - Last Date Taken</p>
                                            <input type="text" class="form-control" id="background_check_last_check">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <p class="form-label ">Drug Tests </p>
                                        <select class="form-select" aria-label="Default select example" id="drug_test" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>

                                        <div class="drug_test_last_check_wrapper">
                                            <p class="form-label ">Drug Test - Last Date Taken</p>
                                            <input type="text" class="form-control" id="drug_test_last_check">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <p class="form-label ">HIPAA Certified </p>
                                        <select class="form-select" aria-label="Default select example" id="hipaa_certified" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>

                                        <div class="hipaa_certified_last_check_wrapper">
                                            <p class="form-label ">HIPAA - Last Date Taken</p>
                                            <input type="text" class="form-control" id="hipaa_certified_last_check">
                                        </div>
                                    </div>

                                    <h3 class="text-dark mt-3">INDUSTRY</h3>
                                    <hr>
                                    <div class="col-12 my-2">
                                        <p class="form-label ">A+ Certified </p>
                                        <select class="form-select" aria-label="Default select example" id="a_plus_certified" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">ADT </p>
                                        <select class="form-select" aria-label="Default select example" id="adt" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">Avaya </p>
                                        <select class="form-select" aria-label="Default select example" id="avaya" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">Axis </p>
                                        <select class="form-select" aria-label="Default select example" id="axis" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">Belden </p>
                                        <select class="form-select" aria-label="Default select example" id="belden" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">BICSI Copper 1 </p>
                                        <select class="form-select" aria-label="Default select example" id="bicsi_copper_one" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">BICSI Copper 2 </p>
                                        <select class="form-select" aria-label="Default select example" id="bicsi_copper_two" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">BICSI Installer </p>
                                        <select class="form-select" aria-label="Default select example" id="bicsi_installer" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">BICSI RCDD </p>
                                        <select class="form-select" aria-label="Default select example" id="bicsi_rcdd" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">BICSI Technician </p>
                                        <select class="form-select" aria-label="Default select example" id="bicsi_technician" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">BOSCH - CCTV </p>
                                        <select class="form-select" aria-label="Default select example" id="bosch_cctv" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">BOSCH - Fire </p>
                                        <select class="form-select" aria-label="Default select example" id="bosch_fire" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">BOSCH - Intrusion </p>
                                        <select class="form-select" aria-label="Default select example" id="bosch_intrusion" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">BOSCH - IP Paging </p>
                                        <select class="form-select" aria-label="Default select example" id="bosch_ip_paging" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="row my-3">
                                        <h5 class="fw-bold">CISCO Certifications</h5>
                                        <p class="form-text"> (Check all that apply)</p>
                                        <div class="col my-4">


                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id=" CCENT">
                                                <label class="form-check-label" for="CCENT">
                                                    CCENT
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cisco_boom_lift">
                                                <label class="form-check-label" for="cisco_boom_lift">
                                                    Boom Lift
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="CCT">
                                                <label class="form-check-label" for="CCT">
                                                    CCT
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cisco_heavy_equipment_rigging">
                                                <label class="form-check-label" for="cisco_heavy_equipment_rigging">
                                                    Heavy Equipment Rigging
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id=" CCNA">
                                                <label class="form-check-label" for=" CCNA">
                                                    CCNA
                                                </label>
                                            </div>



                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id=" CCDA">
                                                <label class="form-check-label" for=" CCDA">
                                                    CCDA
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id=" CCNP">
                                                <label class="form-check-label" for=" CCNP">
                                                    CCNP
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id=" CCIE">
                                                <label class="form-check-label" for=" CCIE">
                                                    CCIE
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">CommScope Systimax</p>
                                        <select class="form-select" aria-label="Default select example" id="commScope_systimax" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">CommScope Uniprise</p>
                                        <select class="form-select" aria-label="Default select example" id="commScope_Uniprise" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">Corning </p>
                                        <select class="form-select" aria-label="Default select example" id="corning" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">DMP </p>
                                        <select class="form-select" aria-label="Default select example" id="DMP" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">DSX </p>
                                        <select class="form-select" aria-label="Default select example" id="DSX" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">ESA </p>
                                        <select class="form-select" aria-label="Default select example" id="ESA" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>

                                    <p class="form-label mb-0">Fiber Certifications</p>
                                    <p class="form-text mb-0">Please list any Fiber Certifications - Name of Certification/Type; ID #; Date Completed; Expiration Date</p>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea3" style="height: 100px"></textarea>
                                        <label for="floatingTextarea3"></label>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">Fire-Lite </p>
                                        <select class="form-select" aria-label="Default select example" id="fire_lite" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="row my-3">
                                        <h5 class="fw-bold">Genetec Certifications</h5>
                                        <p class="form-text"> (Check all that apply)</p>
                                        <div class="col my-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id=" Stratocast">
                                                <label class="form-check-label" for=" Stratocast">
                                                    Stratocast
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id=" Omnicast">
                                                <label class="form-check-label" for=" Omnicast">
                                                    Omnicast
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">Hanwha </p>
                                        <select class="form-select" aria-label="Default select example" id="hanwha" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="row my-3">
                                        <h5 class="fw-bold">Honeywell Certifications</h5>
                                        <p class="form-text"> (Check all that apply)</p>
                                        <div class="col my-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id=" Access_Control">
                                                <label class="form-check-label" for=" Access_Control">
                                                    Access Control
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id=" CCTV">
                                                <label class="form-check-label" for=" CCTV">
                                                    CCTV
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id=" Fire">
                                                <label class="form-check-label" for=" Fire">
                                                    Fire
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id=" Intrusion">
                                                <label class="form-check-label" for=" Intrusion">
                                                    Intrusion
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">Leviton </p>
                                        <select class="form-select" aria-label="Default select example" id="Leviton" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">March Networks </p>
                                        <select class="form-select" aria-label="Default select example" id="March_Networks" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">NICET Fire Protection</p>
                                        <select class="form-select" aria-label="Default select example" id="NICET_fire_protection" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">NICET Security Systems</p>
                                        <select class="form-select" aria-label="Default select example" id="NICET_Security_Systems" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">Nortel</p>
                                        <select class="form-select" aria-label="Default select example" id="Nortel" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">Ortronics</p>
                                        <select class="form-select" aria-label="Default select example" id="Ortronics" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">Panduit</p>
                                        <select class="form-select" aria-label="Default select example" id="Panduit" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">SilentKnight</p>
                                        <select class="form-select" aria-label="Default select example" id="SilentKnight" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>
                                    <div class="col-6 my-2">
                                        <p class="form-label ">Verint</p>
                                        <select class="form-select" aria-label="Default select example" id="Verint" name="">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="willing_to_obtain">Willing to Obtain</option>
                                        </select>
                                    </div>

                                    <p class="form-label mb-0">Do you hold any other industry standard certificatoins that are not listed above? If so, please list:</p>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 400px"></textarea>
                                        <label for="floatingTextarea2"></label>
                                    </div>
                                    <div class="row my-3">
                                        <h5 class="fw-bold">Heavy Equipment Certification Section</h5>
                                        <div class="col my-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="  fork_Lift">
                                                <label class="form-check-label" for="  fork_Lift">
                                                    Fork Lift
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="  Scissor_Lift">
                                                <label class="form-check-label" for="  Scissor_Lift">
                                                    Scissor Lift
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="h_boom_Lift">
                                                <label class="form-check-label" for="h_boom_Lift">
                                                    Boom Lift
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="h_crane">
                                                <label class="form-check-label" for="  h_crane">
                                                    Crane
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="heavy_rigging">
                                                <label class="form-check-label" for="heavy_rigging">
                                                    Heavy Rigging
                                                </label>
                                            </div>


                                        </div>
                                        <p class="form-label">Please check which certifications you hold for the following heavy equipment areas.</p>
                                        <div class="col-6 my-2">
                                            <p class="form-label ">OSHA 10</p>
                                            <select class="form-select" aria-label="Default select example" id="osha_10" name="">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                                <option value="willing_to_obtain">Willing to Obtain</option>
                                            </select>
                                        </div>

                                        <div class="col-6 my-2">
                                            <p class="form-label ">OSHA 30</p>
                                            <select class="form-select" aria-label="Default select example" id="osha_30" name="">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                                <option value="willing_to_obtain">Willing to Obtain</option>
                                            </select>
                                        </div>
                                    </div>


                                </div>
                                <a class="btn btn-primary" onclick="stepper1.previous()">Previous</a>
                                <a class="btn btn-primary" onclick="stepper1.next()">Next</a>
                            </div>
                            <div id="test-l-5" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger5">
                                <div class="my-5">
                                    <h2 class="text-primary">EXPERIENCE & COMMENTS</h2>
                                    <hr>

                                    <h6 class="text-secondary fw-bold">Customer Experience</h6>
                                    <p class="form-label ">We want to know what specific customers you have experience working on in the retail, financial and pharmacy industries. Please list customer experience by type of work experience (e.g. new install, remodels, distribution center/warehouse, clean room, sterile environment)</p>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="customer_experience" name="customer_experience" style="height: 200px"></textarea>
                                        <label for="customer_experience"></label>
                                    </div>

                                    <h6 class="text-secondary fw-bold">Additional Comments</h6>
                                    <p class="form-label ">Any additional information you'd like Telaid to know about your company?</p>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="additional_comments" name="additional_comments" style="height: 200px"></textarea>
                                        <label for="additional_comments"></label>
                                    </div>

                                    <h6 class="text-secondary fw-bold">Did someone from Telaid refer you? If so, please let us know who.</h6>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="refer_information" name="refer_information" style="height: 200px"></textarea>
                                        <label for="refer_information"></label>
                                    </div>



                                </div>
                                <a class="btn btn-primary" onclick="stepper1.previous()">Previous</a>
                                <a class="btn btn-primary" onclick="stepper1.next()">Next</a>
                            </div>
                            <div id="test-l-6" role="tabpanel" class="bs-stepper-pane  " aria-labelledby="stepper1trigger6">
                                <div>
                                    <div class="terms_and_conditions p-4 border  border-dark">
                                        <div>
                                            <p class="fw-bold">MASTER SERVICES AGREEMENT</p>
                                            This Master Services Agreement (the "Agreement") is between Telaid Industries, Inc. (the "COMPANY" ); and the undersigned service provider ("VENDOR"). The COMPANY and VENDOR are each referred to herein as a "Party" and collectively as the "Parties."
                                            <br>
                                            <br>
                                            <p class="fw-bold">1. RECITALS</p>
                                            <br>
                                            <br>
                                            <span class="fw-bold">1.1.</span> WHEREAS, the COMPANY designs, engineers, sells and deploys communications infrastructure to its clients.
                                            <br>
                                            <span class="fw-bold">1.2.</span> WHEREAS, VENDOR has an independent preexisting business that specializes in the installation and servicing of communications hardware and infrastructure within the market.
                                            <br>
                                            <span class="fw-bold">1.3.</span> WHEREAS, VENDOR represents and warrants that it posesses the equipment, vehicles, personnel, and tools of the trade to competently perform the obligations established by this Agreement.
                                            <br>
                                            <span class="fw-bold">1.4.</span> WHEREAS, the COMPANY intends to engage VENDOR, on a project basis, to install, repair, or otherwise service the communications infrastructure that COMPANY designs and engineers for, and deploys to, its customers, and VENDOR desires to be engaged to perform those technical services ("ENGAGED SERVICES").
                                            <br>
                                            <span class="fw-bold">1.5. </span> WHEREAS, in exchange for providing the ENGAGED SERVICES, the COMPANY agrees to compensate VENDOR according to this Agreement, and pursuant to the terms of each project completed by VENDOR.
                                            <br>
                                            <span class="fw-bold">1.6.</span> WHEREAS, this Agreement sets forth the general terms on which the COMPANY will engage VENDOR to provide efficient and timely installation, repair and other services to the COMPANY's customers.

                                            In consideration of the mutual promises, covenants and agreements set forth below, the sufficiency of which is acknowledged and agreed, the Parties agree as follows:
                                            <br>
                                            <br>
                                            <p class="fw-bold">2. SERVICES</p>
                                            <br>
                                            <br>
                                            <span class="fw-bold"> 2.1.</span> General. During the term of this Agreement, COMPANY may offer opportunities to VENDOR to perform ENGAGED SERVICES.
                                            <br>
                                            <span class="fw-bold">2.2.</span> Statements of Work. As the need arises, COMPANY may notify VENDOR of opportunities to perform ENGAGED SERVICES. To do so, COMPANY may offer to VENDOR a Work Order containing a Statement of Work that specifies the requested services. VENDOR will consider whether to accept or decline the offer and will communicate that decision to COMPANY. VENDOR is not required to accept any Work Order offered to it and VENDOR expressly acknowledges that it may decline any offer to perform ENGAGED SERVICES.
                                            <br>
                                            <span class="fw-bold"> 2.2.1.</span> VENDOR agrees and acknowledges that COMPANY has made no representation or other guarantee that it will offer any particular Work Order to VENDOR, and that COMPANY has not promised to use the services of VENDOR for each and every instance in which VENDOR is available to perform ENGAGED SERVICES.
                                            <br>
                                            <span class="fw-bold">2.3.</span> Scope of ENGAGED SERVICES. The scope of ENGAGED SERVICES is established in each Work Order offered to and accepted by VENDOR. The Statement of Work within a Work Order provides the detailed specifications of each project and VENDOR is required to adhere to the design and build specifications unless COMPANY and VENDOR otherwise agree to amend or revise the Statement of Work. Each Work Order will generally contain information concerning the service location, service description, technical and system requirements for the equipment that will be installed or repaired, electrical and hardware requirements, and other parameters that have been established by the COMPANY's solutions design and engineering team. Additionally, the Work Order will include project objectives and any special instructions for completing the Work Order in the form of deliverables. The Work Order may also include information about what materials, equipment and tools VENDOR may need to complete the project.
                                            <br>
                                            <span class="fw-bold">2.4. </span>Time Frames. VENDOR shall plan, develop, supervise, control, and coordinate the performance of the Statement of Work so that its progress and sequence and timing of the necessary activities will permit completion within the time frame mutually agreed by the Parties.
                                            <br>
                                            <span class="fw-bold">2.5.</span> Failure to Complete Statement of Work. VENDOR's failure to complete the work specified in a Work Order that VENDOR accepts may be deemed a material breach of this Agreement that may lead to termination of this Agreement, the Work Order or COMPANY's refusal to offer additional Work Orders to VENDOR.
                                            <br>
                                            <br>
                                            <p class="fw-bold">3. PAYMENT</p>
                                            <br>
                                            <br>

                                            <span class="fw-bold">3.1.</span> Settlement. In exchange for services to be rendered by VENDOR pursuant to this Agreement, and any Engaged Services, the COMPANY agrees to pay VENDOR an amount that is determined and agreed in connection with each Work Order.
                                            <span class="fw-bold">3.2.</span>
                                            <br> Invoicing for Payment. VENDOR agrees that, within seventy-two (72) hours of completing all objectives within a Statement of Work, or as otherwise agreed in writing by the Parties, VENDOR shall provide all deliverables identified in the Statement of Work, submit to COMPANY an invoice for the completed Work Order, and close out the Statement of Work in the Company's work order system.
                                            <br>
                                            <span class="fw-bold">3.3.</span>Late Invoicing. Invoices that are submitted later than 72 hours following the completion of a Statement of Work are considered late. VENDOR agrees and acknwoledges that late invoices will incur an administrative fee in the amount of ten percent (10%) of the balance due to VENDOR for the Work Order, to be paid to COMPANY to offset the cost of non-compliance as a result of VENDOR's failure to timely invoice COMPANY. VENDOR acknowledges and agrees that COMPANY, in its sole discretion, may collect an administrative fee from any payment due to VENDOR.
                                            <br>
                                            <span class="fw-bold">3.4.</span> Reconcilliation. COMPANY will calculate amounts due and owed to VENDOR following receipt of a signed Statement of Work and deliverables defined within the Statement of Work, and remit such amount to VENDOR via ACH within sixty (60) days following VENDOR's submission of an invoice for payment and completing the approvable deliverables identified in a Statement of Work.
                                            <br>
                                            <span class="fw-bold">3.5.</span> Accelerated Payment Program. VENDOR may also receive expedited payments through COMPANY's accellerated payment program. COMPANY may offer early payment terms under its accelerated payment program in exchange for discounted ENGAGED SERVICES rendered pursuant to a Statement of Work. VENDOR may elect to receive accelerated payment upon request made in advance according to the following terms.
                                            <br>
                                            <span class="fw-bold">3.5.1.</span> VENDOR agrees to accept a seven percent (7%) discount applied to its invoice in exchange for payment within three (3) days of VENDOR's submission of an invoice for payment and completion of approvable deliverables identified in a Statement of Work.
                                            <br>
                                            <span class="fw-bold"> 3.6.</span> Payment Disputes. Any and all disputes arising out of payments allegedly due and owed under this Agreement or any other amount alleged to be due to VENDOR must be made within thirty (30) days of the event or occurrence giving rise to such dispute. Written notice of the dispute shall be delivered to partnersupport@techyeah.com and will be deemed made upon receipt of such notice. Any and all such disputes will be evaluated by the COMPANY, and a response will be provided to VENDOR within a reasonable period of time.
                                            <br>
                                            <br>
                                            <p class="fw-bold"> 4. INDEPENDENT RELATIONSHIP</p>
                                            <br>
                                            <br>

                                            <span class="fw-bold">4.1.</span>
                                            Independent Relationship. By entering into this Agreement, the Parties expressly intend to create a business relationship between independent businesses. VENDOR expressly warrants, represents, and agrees, that VENDOR and COMPANY are independent entities having their own established businesses. As an independent contractor engaged by COMPANY, VENDOR shall have exclusive control over the manner and means of performing the ENGAGED SERVICES and any other obligations arising under this Agreement and any Statement of Work. VENDOR is not and will not be an employee of the COMPANY for any purpose. Consequently, VENDOR, its employees, agents, representatives, or subcontractors, are not entitled to the rights and privileges of employment by COMPANY.
                                            <span class="fw-bold">4.2. </span>
                                            <br>
                                            Vendor Discretion. The Parties expressly agree that VENDOR is responsible for exercising independent discretion and judgment to achieve the business objectives and obligations established between the Parties. No officer, agent, representative, or employee of COMPANY has the authority to direct VENDOR as to the manner and means used to provide the ENGAGED SERVICES, and may not prescribe VENDORS' workers hours of work, details of services provided, or otherwise direct VENDOR or its employees, agents or representatives, in the performance of its obligations under this Agreement. The ultimate determination regarding the methods by which VENDOR provides services is entirely committed to the VENDOR's discretion and judgment.
                                            <span class="fw-bold"> 4.3.</span>
                                            <br>
                                            Maintaining Independence. VENDOR warrants, represents and agrees that, except as specifically agreed by the Parties, neither VENDOR nor its agents, employees or representatives shall advertise or otherwise represent that VENDOR is associated or affiliated with the COMPANY or its customers. COMPANY agrees that, except as specifically agreed by the Parties, neither COMPANY nor its agents, employees or representatives shall advertise or otherwise represent that COMPANY is associated or affiliated with the VENDOR or its customers.
                                            <span class="fw-bold">4.4. </span>
                                            <br>
                                            Compliance with Laws. VENDOR does and will pay all contributions, taxes, and other payments or charges required to be paid by an employer in accordance with the provisions of all applicable state unemployment insurance, workers' compensation, disability benefits, and withholding tax laws, the Federal Insurance Contributions Act, and Federal Unemployment Tax Act and Federal Internal Revenue Code, and does and will comply with all other local, state, and federal laws, regulations, and requirements applicable to its workers or affecting their compensation or conditions of employment applicable to the VENDOR or the performance of ENGAGED SERVICES.
                                            <span class="fw-bold"> 4.5.</span>
                                            <br>
                                            Non-Exclusive Relationship. Nothing in this Agreement restricts VENDOR from performing services for others.
                                            <br>
                                            <br>
                                            <p class="fw-bold">5. SERVICE LEVEL</p>
                                            <br>
                                            <br>
                                            <span class="fw-bold">5.1.</span> Service Expectations. COMPANY expects the highest level of service. This means timely completion of work called for in the Statement of Work, effective communication with COMPANY and its customers concerning on site start and finish times, adherence to those times, and completing all deliverables identified in a Statement of Work.
                                            <br>
                                            <span class="fw-bold">5.2.</span> VENDOR's Warranty. VENDOR expressly warrants that (a) all materials and equipment used in or incorporated into ENGAGED SERVICES, or (b) work performed pursuant to a Statement of Work, will be of good quality, new, and free of liens, claims, and security interests of third parties; will be of good quality and free from defects; and will conform to requirements of the Statement of Work. If required by COMPANY, VENDOR shall furnish satisfactory evidence as to the kind and quality of materials and equipment used to complete any Statement of Work.
                                            <br>
                                            <span class="fw-bold">5.2.1.</span> Code Requirements. VENDOR shall perform the ENGAGED SERVICES in accordance with code requirements, which include but are not limited to all applicable laws, statutes, current building codes, ordinances, rules, regulations and lawful orders of any public authority having jurisdiciton over the work performed by VENDOR.

                                            <br>
                                            <span class="fw-bold"> 5.3.</span> Licenses, Permits, Fees, and Notices. Except for the permits and approvals otherwise obtained by COMPANY, VENDOR shall secure and pay for all permits, approvals, government fees, licenses, and inspections necessary for the proper execution, performance, and close-out of the Statement of Work. VENDOR shall deliver to COMPANY a copy of licenses, permits, and approvals obtained by VENDOR in connection with any Statement of Work prior to payment or upon completion of the Statement of Work, whichever is earlier.
                                            <br>
                                            <span class="fw-bold">5.4.</span> Assignment & Subcontracting. COMPANY selects VENDOR based on its qualifications to perform the types of work offered in the Statement of Work, and VENDOR may not assign this Agreement or subcontract ENGAGED SERVICES to another entity or person, without prior written approval from Partner Support. Unapproved assignment or subcontracting ENGAGED SERVICES will result in the forfeiture of payment otherwise due in connection with any Statement of Work completed in whole or part by an entity or person other than VENDOR. VENDOR is liable to COMPANY, and shall defend and hold COMPANY harmless for any and all damages incurred by COMPANY as a result of VENDOR's assignment or subcontracting of ENGAGED SERVICES to another entity or person, without prior written approval from Partner Support.
                                            <br>
                                            <br>
                                            <p class="fw-bold"> 6. LABOR & MATERIALS </p>
                                            <br>
                                            <br>
                                            <span class="fw-bold">6.1.</span> Provision of Labor & Materials. Unless otherwise provided in the Agreement or applicable Statement of Work, VENDOR shall provide and pay for all labor, materials, equipment, tools, construction equipment and machinery, transportation, and any other materials or services necessary to perform the ENGAGED SERVICES described in any Statement of Work.
                                            Vendor Employees. VENDOR agrees and acknowledges that it retains complete and exclusive direction and control over its employees and all those working for it in any capacity. Consequently, VENDOR may employ qualified person(s) to perform ENGAGED SERVICES. VENDOR is responsible for training, supervising, and otherwise managing its employees. VENDOR agrees and acknowledges that its employees shall not be considered employees of COMPANY, and that it is VENDOR's responsibility: (a) to bear all expenses associated with the employment of such persons, including, without limitation, wages, salaries, employment taxes, workers' compensation coverage, health care, retirement benefits and insurance coverages and any other benefits offered by VENDOR; (b) to assume sole responsibility for complying with all applicable laws, rules, and regulations, including but not limited to wage and hour laws, discrimination law, immigration laws and all laws relating to employment of VENDOR's employees; (c) to hold COMPANY and its customers harmless from, and waive any right of subrogation in connection with, any liability and claims by others or by government agencies arising from VENDOR's relationship with VENDOR's employees, agents, workers or substitutes whether irrespective of the type or nature of the claim asserted.
                                            <br>
                                            <span class="fw-bold">6.1.1.</span> Background Checks. VENDOR agrees that before an employee provides any part of the ENGAGED SERVICES, VENDOR will direct a reputable and qualified third-party background check service, to perform a lawful background check that includes a review of criminal court records in the counties of employee's known residence(s). VENDOR is solely responsible for the costs of performing these background checks, and shall maintain a file consisting of the results of the criminal background checks for all individuals subject to these requirements. VENDOR shall provide proof of compliance with this provision upon COMPANY's request. VENDOR shall also obtain permission to share the results of any background check with COMPANY and its customers upon reasonable request and notice of the same.
                                            <br>
                                            <span class="fw-bold"> 6.1.2.</span> Additional Qualifications. VENDOR agrees to abide by specific staffing qualifications that are set forth in any Statement of Work, including but not limited to client requirements for drug testing and Health Insurance Portability and Accountability Act (HIPAA) certifications for VENDOR's employees. VENDOR is solely responsible for the costs of performing or satisfying any such additional qualifications, and shall maintain a file demonstrating VENDOR's satisfaction of any such additional qualifications. VENDOR shall also obtain permission from its employees to share this information with COMPANY and its customers upon reasonable request and notice of the same.
                                            <span class="fw-bold">6.2. </span>
                                            <br>
                                            Tools of the Trade. VENDOR warrants that it posesses or will aquire at its own expense the tools and equipment necessary to competently perform the ENGAGED SERVICES.
                                            <br>
                                            <br>
                                            <p class="fw-bold"> 7. INSURANCE</p>
                                            <br>
                                            <br>
                                            <span class="fw-bold">7.1. </span>Insurance. VENDOR shall maintain insurance coverages of the type and in the amounts specified below while performing ENGAGED SERVICES for COMPANY.
                                            <br>
                                            <span class="fw-bold">7.1.1. </span>Coverages & Limits.

                                            <div class="my-3">
                                                <span class="fw-bold me-4">Coverage</span><span class="fw-bold">Minimum Limits</span>
                                                <br>

                                                <span class="fw-bold me-4"> General Liability:</span><span class="fw-bold">$1,000,000</span>
                                                <br>

                                                <span class="fw-bold me-4">Products/Completed Operations:</span><span class="fw-bold">$1,000,000</span>
                                                <br>

                                                <span class="fw-bold me-4">Personal & Advertising Liability:</span><span class="fw-bold"> $1,000,000</span>
                                                <br>

                                                <span class="fw-bold me-4"> Workers Compensation:</span><span class="fw-bold">State-required Limits (Sole Proprietor or Single Member LLC not rquired unless 2 or more techs)</span>
                                                <br>

                                                <span class="fw-bold me-4">Automobile Liability:</span><span class="fw-bold">$1,000,000 (Sole proprietory or Single Member LLC reduced limit of $300,000)</span>
                                            </div>
                                            <br>
                                            <br>

                                            Policies containing a self-insured retention will not be accepted. Umbrella amounts may be used to cover the identified limits. Auto Coverage must be "Any Auto" or include coverage for "Non-Owned and Hired Autos". Auto Liability Coverage shall be Primary and Non-Contributory. General Liability coverage shall be Primary and Non-Contributory. Workers' compensation coverage shall include a waiver of subrogation in favor of the certificate holder. The expiration date for all Coverages should expire no less than 30 days from date of submission to COMPANY.
                                            <br>
                                            <span class="fw-bold">7.1.2.</span> Certificate of Insurance. VENDOR shall provide a current Certificate of Insurance for each of the coverages above. Telaid Industries, Inc. 13 West Main Street, Niantic, CT 06357, shall be an additional insured. The Cancellation section of the insurance certificate shall be revised to read, "Should any of the above described policies be cancelled before the expiration date thereof, the issuing company will mail 30-day written notice to the certificate holder named."
                                            <br>
                                            <span class="fw-bold">7.1.3.</span> Failure to Maintain Insurance. Failure to maintain the coverages above, or identify COMPANY as a named insured, is a material breach of this agreement. Failure to maintain insurance will result in a work stoppage, and upon ten (10) days' notice and an opportunity to cure, COMPANY may pursue its remedies for breach of contract as provided for herein and by law.


                                            <br>
                                            <br>
                                            <p class="fw-bold"> 8. LIABILITY & INDEMNIFICATION</p>
                                            <br>
                                            <br>
                                            <span class="fw-bold"> 8.1.</span> Liability for and Repair of Damaged Project Work. VENDOR shall be liable for any and all damages and losses that are/were caused in whole or in part by the acts or omissions of VENDOR, its officers, agents or employees (including all subcontractors and suppliers) while completing a Statement of Work. VENDOR shall promptly repair and replace any work or materials for which the VENDOR is liable up to and including any and all equipment or materials provided by COMPANY.
                                            <br>
                                            <span class="fw-bold"> 8.2.</span> Indemnification. The COMPANY shall not be liable or responsible for any accidents, loss, injury (including death) or damages to persons or property happening or accruing during the term of the performance of any ENGAGED SERVICES. VENDOR is liable for covering the cost of any such losses resulting from VENDOR's acts or omissions. VENDOR shall fully indemnify, defend and hold harmless COMPANY and protect COMPANY from and against the same. In addition to the liability imposed by law upon VENDOR for damage or injury (including death) to persons or property by reason of the negligence of VENDOR, its officers, agents, employees or Subcontractors, which liability is not impaired or otherwise affected hereby, VENDOR shall defend, indemnify, hold harmless, release and forever discharge the COMPANY, its officers, employees, and agents from and against and waive any and all responsibility of same for every expense, liability, or payment by reason of any damage or injury (including death) to persons or property suffered or claimed to have been suffered through any negligent act, omission, or willful misconduct of VENDOR, its officers, agents, employees, or any of its Subcontractors, or anyone directly or indirectly employed by either of them or from the condition of the premises or any part of the premises while in control of VENDOR, its officers, agents, employees, or any of its Subcontractors or anyone directly or indirectly employed by either of them, arising out of the performance of the ENGAGED SERVICES. VENDOR agrees that this indemnity and hold harmless provision shall apply even in the event of negligence of the COMPANY, its officers, agents, or employees, regardless of whether such negligence is contributory to any claim, demand, loss, damage, injury, expense, and/or liability; but such indemnity and hold harmless obligation shall not apply (i) in the event of the sole negligence of COMPANY, its officers, agents, or employees. VENDOR shall also indenify COMPANY from and against each and every loss arising out of the negligent acts, omissions, unlawful conduct, willful misconduct, of anyone directly or indirectly employed by VENDOR.
                                            <br>
                                            <span class="fw-bold"> 8.3.</span>VENDOR agrees to indemnify and hold the COMPANY harmless for any and all claims, costs, damages, fees, penalties, interest, or any other losses arising from VENDOR's failure to comply with local/state/federal tax and regulatory obligations, including but not limited to those laws and obligations set forth in Section 4.4 ("Compliance with Laws").
                                            <br>
                                            <br>
                                            <p class="fw-bold"> 9. TERM & TERMINATION</p>
                                            <br>
                                            <br>
                                            <span class="fw-bold">9.1.</span> Term. This Agreement becomes effective the date on which VENDOR acknowledges its acceptance of its terms, whether through written or electronic signatures, and remains in effect for a period of one year from the effective date. The Agreement will automatically renew thereafter in one-year increments until terminated by either party.
                                            <br>
                                            <span class="fw-bold">9.2.</span> Termination. Either party may terminate this agreement upon 30 days written notice to partnersupport@techyeah.com. In the event of termination by either party, VENDOR remains obligated to complete any oustanding or unfinished Statements of Work in a manner consistent with this Agreement and the Statement of Work, and COMPANY remains obligated to process and pay VENDOR according to the terms of this Agreement.
                                            <br>
                                            <br>
                                            <p class="fw-bold">10. NON-DISCLOSURE & NON-SOLICITATION.</p>
                                            <br>
                                            <br>
                                            <span class="fw-bold">10.1.</span>Non-Disclosure, Preservation of Confidential Information. "Confidential Information" means information that (a) relates to COMPANY's business, (b) is disclosed to VENDOR or about which VENDOR become aware through VENDOR's engagement by COMPANY, (c) is not generally known outside of COMPANY, and (d) has value to COMPANY and includes, but is not limited to, data and information with regard to COMPANY's method for the provision of services, business plans, finances, records, personnel, designs, marketing, customers and customer lists, customer requirements, sales, products, systems, processes, trade secrets, methods, know-how, sales methodologies, sales channels, pricing, and/or data and plans. Throughout VENDOR's engagement with COMPANY and at all times thereafter: (a) VENDOR will hold all Confidential Information in the strictest confidence, take all reasonable precautions to prevent its inadvertent disclosure to any unauthorized person; (b) VENDOR will not, directly or indirectly, utilize, disclose or make available to any other person or entity, any of the Confidential Information, other than in the proper performance of VENDOR's obligations established in a Statement of Work; (c) VENDOR will not use the COMPANY's Confidential Information or trade secrets to attempt to solicit, induce, recruit, or take away clients or COMPANY's customers; and (d) if VENDOR learns any person or entity is taking or threatening to take any actions which would compromise any Confidential Information, VENDOR will promptly advise COMPANY of all facts concerning such action or threatened action. VENDOR agrees that the unauthorized use by a partner, shareholder, member, officer, spouse or family member of such Confidential Information shall be deemed a violation by VENDOR of this provision. VENDOR further acknowledges that it would be an unfair method of competition for VENDOR or such partner, shareholder, member, officer, spouse or family member to use or duplicate any Confidential Information from COMPANY for any use other than performing according to an accepted Work Order and Statement of Work. This paragraph does not apply to information which VENDOR can demonstrate came to VENDOR's attention prior to disclosure thereof by COMPANY or which, at or after the time of disclosure by COMPANY, had become or becomes part of the public domain through publication or communication by others. Nothing contained in this Agreement is intended to prohibit or prevent VENDOR from filing a charge with or participating, testifying, or assisting in any investigation, hearing, whistleblowing proceeding or other proceeding before any federal, state, or local government agency, e.g. the EEOC, NLRB, SEC, etc., or in any legislative or judicial proceeding nor does anything in this Agreement preclude, prohibit or otherwise limit, in any way, VENDOR's rights and abilities to contact, communicate with or report unlawful conduct to federal, state, or local officials for investigation or participate in any whistleblower program administered by any such agencies. COMPANY further acknowledges VENDOR's rights to make truthful statements or disclosures required by law, regulation, or legal process and to request or receive confidential legal advice, and nothing in this Agreement shall be deemed to impair those rights. Under the Federal Defend Trade Secrets Act of 2016, VENDOR shall not be held criminally or civilly liable under any federal or state trade secret law for the disclosure of a trade secret that: (a) is made (i) in confidence to a federal, state, or local government official, either directly or indirectly, or to an attorney; and (ii) solely for the purpose of reporting or investigating a suspected violation of law; or (b) is made to VENDOR's attorney in relation to a lawsuit for retaliation against the COMPANY for reporting a suspected violation of law; or (c) is made in a complaint or other document filed in a lawsuit or other proceeding, if such filing is made under seal.
                                            <br>
                                            <span class="fw-bold">10.2.</span> Non-Solicitation. VENDOR, including all partners, shareholders, members, officers, spouses or family members, employees, agents, and representatives agrees that VENDOR will not, directly or indirectly without first obtaining COMPANY's prior consent:
                                            <br>
                                            <span class="fw-bold">10.2.1.</span> at any time during the term of this Agreement, and for six (6) months following expiration or termination of this Agreement, provide any of the ENGAGED SERVICES or services that are competitive with the services offered by VENDOR to COMPANY for any COMPANY customer to which VENDOR provided ENGAGED SERVICES during the term of this Agreement;
                                            <br>
                                            <span class="fw-bold">10.2.2</span> at any time during the term of this Agreement, and for six (6) months following expiration or termination of this Agreement, solicit any COMPANY customer to whom VENDOR provided services during the term of this Agreement, to provide ENGAGED SERVICES or similar services or services that are competitive with the services offered by VENDOR to COMPANY;
                                            <br>
                                            <br>
                                            <p class="fw-bold">11. ACKNOWLEDGEMENT</p>
                                            <br>
                                            <br>
                                            <span class="fw-bold">11.1.</span>VENDOR acknowledges that it is both the COMPANY and VENDOR's shared intentions to engage VENDOR as an independent contractor and not an employee. VENDOR understands and acknowledges that the ENGAGED SERVICES will be provided to COMPANY as an independent contractor, and that VENDOR, its agents, employees and representatives, will not, for the purposes of unemployment compensation, workers' compensation, human rights law, wage payment and collection, and related employment purposes be treated as an employee of COMPANY. VENDOR acknowledges that VENDOR will not be provided unemployment compensation or workers' compensation benefits by COMPANY. VENDOR acknowledges VENDOR will not be eligible for the benefits and protections of human rights or wage payment and collection laws. VENDOR acknowledges VENDOR's independent obligation to pay all applicable federal, state, and local income and other taxes, if any, on any contractual remuneration received pursuant to this Agreement. VENDOR acknowledges that VENDOR is contractually required to file a business or self-employment income tax return with the appropriate federal, state, and local agencies regarding the fees for services obtained through offering services. VENDOR acknowledges that VENDOR is providing services through a business entity, including but not limited to, a partnership, a limited liability company or corporation, or through a sole proprietorship registered as required under state or local law. VENDOR acknowledges that, with the exception of the exercise of control necessary to ensure compliance with statutory, regulatory, licensing, permitting, or other similar obligations required by a governmental or regulatory entity, or to protect persons or property, VENDOR actually and directly controls the manner and means by which the work is to be accomplished, even though VENDOR may provide orientation, information, guidance, or suggestions about the COMPANY's products and services, customers and operating systems, and training otherwise required by law.
                                            <br>
                                            <br>
                                            <p class="fw-bold">12. MISCELLANEOUS</p>
                                            <br>
                                            <br>
                                            <span class="fw-bold">12.1.</span>Integration. This Agreement constitutes the entire agreement between the parties with reference to the subject matter hereof and supersedes all prior negotiations, understandings, representations and agreements, if any. No representations not contained in this Agreement shall be of any force or effect, or binding on the parties. This agreement supersedes any and all previous agreements of the parties.
                                            <br>
                                            <span class="fw-bold">12.2.</span>Incorporation. This Agreement is incorporated into each Statement of Work accepted by VENDOR.
                                            <br>

                                            <span class="fw-bold">12.3.</span> Notices. All notices, requests, demands and other communications hereunder shall be in writing and shall be personally delivered or sent by registered or certified mail, postage prepaid, or overnight courier, to the address set forth in each Party's signature block hereto. Either Party may change its address for receiving notice by giving written notice to the other Party.
                                            Questions about this Agreement or any of its terms may be directed to Telaid, Attn: Partner Support, 13 West Main Street, Niantic, CT 06357 or e-mail partnersupport@techyeah.com. 12.4. Successors & Assigns. VENDOR may not assign any or all of its rights under this Agreement without the prior written consent of the COMPANY. Any attempted assignment or assumption without such written consent shall be null and void and without legal effect. Nothing expressed or referred to in this Agreement shall be construed to give any Person other than the Parties any legal or equitable right, remedy or claim under or with respect to this Agreement or any provision of this Agreement.
                                            <br>
                                            <span class="fw-bold">12.4.</span> Governing Law. This Agreement shall be interpreted and construed under the laws of the State of Connecticut.
                                            <br>
                                            <span class="fw-bold">12.5.</span> Jury Waiver. VENDOR EXPRESSLY AND KNOWINGLY WAIVES ANY RIGHT TO A JURY TRIAL IN THE EVENT THAT ANY ACTION ARISING OUT OF THIS AGREEMENT OR ANY OTHER DISPUTE ARISING BETWEEN THE PARTIES IS LITIGATED OR HEARD IN ANY COURT.
                                            <br>
                                            <span class="fw-bold">12.6.</span>Construction. The headings in this Agreement are for convenience only, do not constitute a part of this Agreement and shall not be deemed to limit or affect any of the provisions within. The language used in this Agreement shall be deemed to be the language chosen by the Parties to express their mutual intent, and no rules of strict construction will be applied against any Party.
                                            <br>
                                            <span class="fw-bold">12.7.</span> Survival. The expiration or termination of this Agreement will not affect the provisions, rights and obligations set forth therein.
                                            <br>
                                            <span class="fw-bold">12.8.</span> Severability. If any term, clause or provision of this Agreement shall be adjudged to be invalid, the validity of the remainder shall not be affected thereby, and all remaining terms, clauses, and provisions shall be valid and enforceable to the fullest extent of the law.
                                            <br>
                                            <span class="fw-bold">12.9.</span> Statute of Limitations. Unless legally prohibited, the Parties agree that the statute of limitations for any alleged breach of contract or any other claim arising out of this Agreement or the relationship of the parties shall be one (1) year from the earliest alleged breach or other accrual of the alleged cause of action.
                                            <br>
                                            <span class="fw-bold">12.10.</span> Duty to Mitigate. Each Party must make reasonable efforts to mitigate any loss resulting from breach of this agreement or arising in connection with the Parties' legal relationship.
                                            <br>
                                            <span class="fw-bold">12.11.</span> Enforcement. In the event either Party commences a lawsuit or another proceeding to enforce any provision of this Agreement, the prevailing party shall be entitled to recover from the losing party the fees (including attorneys' and any other professional's fees), costs and expenses reasonably incurred in enforcing the Agreement.

                                            <br>
                                            <br>
                                            IMPORTANT MESSAGE: PLEASE READ THIS MASTER SERVICES AGREEMENT CAREFULLY BEFORE CLICKING "ACCEPT," AS IT SETS FORTH THE LEGAL TERMS AND CONDITIONS GOVERNING THE PARTIES' RELATIONSHIP.
                                            <br>
                                            <br>
                                            BY CLICKING "ACCEPT," YOU ARE INDICATING YOUR ACCEPTANCE THAT YOU:
                                            (A) AGREE TO THESE LEGAL TERMS AND CONDITIONS ON BEHALF OF YOUR COMPANY OR OTHER LEGAL ENTITY IDENTIFIED IN THIS AGREEMENT,
                                            <br>
                                            (B) REPRESENT THAT YOU HAVE THE AUTHORITY TO DO BIND YOUR COMPANY TO AGREEMENT, AND
                                            <br>
                                            (C) AGREE TO USE ELECTRONIC SIGNATURES, AND BE SUBJECT TO THE PROVISIONS OF THE U.S. E-SIGN ACT (THE ELECTRONIC SIGNATURES IN GLOBAL AND NATIONAL COMMERCE ACT (ESIGN, PUB.L. 106-299, 14 STAT. 464, ENACTED JUNE 30, 2000, 15 U.S.C. CH. 96)).
                                            <br>
                                            <br>

                                            IF THESE STEPS ARE NOT WHAT YOU INTEND, OR IF YOU DO NOT AGREE WITH THESE TERMS AND CONDITIONS, THEN DO NOT CLICK ACCEPT. ANY QUESTIONS YOU HAVE ABOUT THIS AGREEMENT MAY BE DIRECTED TO: partnersupport@techyeah.com
                                            <br>
                                            <br>
                                            DECLARATION OF INDEPENDENT BUSINESS
                                            <br>
                                            <br>
                                            STATUS PURSUANT TO A.R.S. § 23-1601
                                            <br>
                                            <br>
                                            This declaration of independent business status is made by VENDOR in relation to services performed by the VENDOR for or in connection with COMPANY. VENDOR states and declares the following:
                                            <br>
                                            (a) VENDOR acknowledges that VENDOR operates VENDOR's own independent business and is providing services for or in connection with COMPANY as an independent contractor.
                                            <br>
                                            (b) VENDOR acknowledges that VENDOR is not an employee of COMPANY and the services rendered for or in connection with COMPANY do not establish any right to unemployment benefits or any other right arising from an employment relationship.
                                            <br>
                                            (c) VENDOR is responsible for all tax liability associated with payments received from or through COMPANY and COMPANY will not withhold any taxes from payments to VENDOR.
                                            <br>
                                            (d) VENDOR is responsible for obtaining and maintaining any required registration, licenses or other authorization necessary for the services rendered by VENDOR.
                                            <br>
                                            (e) VENDOR is not insured under COMPANY's health insurance coverage or workers' compensation insurance coverage.
                                            <br>
                                            (f) COMPANY does not restrict VENDOR's ability to perform services for or through other parties and VENDOR is authorized to accept work from and perform work for other businesses and individuals besides COMPANY.
                                            <br>
                                            (g) VENDOR has the right to accept or decline requests for services by or through COMPANY.
                                            <br>
                                            (h) COMPANY expects that VENDOR provides services for other parties.
                                            <br>
                                            (i) VENDOR is not economically dependent on the services performed for or in connection with COMPANY.
                                            <br>
                                            (j) COMPANY does not dictate the performance, methods or process VENDOR uses to perform services.
                                            <br>
                                            (k) COMPANY has the right to impose quality standards or a deadline for completion of services performed, or both, but VENDOR is authorized to determine the days worked and the time periods of work.
                                            <br>
                                            (l) VENDOR will be paid by or through COMPANY based on the work VENDOR is contracted to perform and that COMPANY is not providing VENDOR with a regular salary or any minimum, regular payment.
                                            <br>
                                            (m) VENDOR is responsible for providing and maintaining all tools and equipment required to perform the services performed.
                                            <br>
                                            (n) VENDOR is responsible for all expenses incurred by VENDOR in performing the services.
                                            <br>
                                            (o) VENDOR acknowledges that the terms set forth in this declaration apply to VENDOR, VENDOR's employees, and VENDOR's independent contractors.
                                            <br>
                                        </div>
                                    </div>
                                    <div class="form-check my-4">
                                        <p class="fw-bold">Partner Master Service Agreement Consent *</p>
                                        <input class="form-check-input" type="checkbox" value="" id="  partner_master_service_agreement_consent">
                                        <label class="form-check-label" for="  partner_master_service_agreement_consent">
                                            I have read and agree to the terms and conditions above.
                                        </label>
                                    </div>

                                </div>

                                <a class="btn btn-primary mt-5" onclick="stepper1.previous()">Previous</a>
                                <button type="submit" class="btn btn-primary mt-5">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>


<script>
    // is_union_shop if yes then show union_affiliation div 
    // no_sub_contactor_agreement if yes then show w2_employee_info_wrapper  div  
    //  service_call_payment if yes,hourly and yes,fixed doller amount then show service_call_rate_wrapper  div  
    const is_union_shop = document.querySelector("#is_union_shop");
    const does_not_use_sub_contractors = document.querySelector("#does_not_use_sub_contractors");
    const service_call_payment = document.querySelector("#service_call_payment");
    const structured_cabling = document.querySelector("#structured_cabling");
    const test_result_copper = document.querySelector("#test_result_copper");
    const fiber_optics = document.querySelector("#fiber_optics");
    const fiber_optics_terminate_and_test = document.querySelector("#fiber_optics_terminate_and_test");
    const low_voltage_contractor_licence = document.querySelector("#low_voltage_contractor_licence");
    const background_check = document.querySelector("#background_check");
    const drug_test = document.querySelector("#drug_test");
    const hipaa_certified = document.querySelector("#hipaa_certified");
    const fusion_splice = document.querySelector("#fusion_splice");
    const own_a_fusion_splice = document.querySelector("#own_a_fusion_splice");
    const security_cctv = document.querySelector("#security_cctv");
    const state_cctv_license = document.querySelector("#state_cctv_license");
    const fire_alarm = document.querySelector("#fire_alarm");
    const state_burglar_alarm_license = document.querySelector("#state_burglar_alarm_license");
    const access_control = document.querySelector("#access_control");
    const state_access_control_license = document.querySelector("#state_access_control_license");
    const licensed_electrician = document.querySelector("#licensed_electrician");
    const state_electrical_license = document.querySelector("#state_electrical_license");
    const wireless_installls = document.querySelector("#wireless_installls");
    const other_software_license_checkbox_wrapper = document.querySelector("#other_software_license_checkbox_wrapper");
    const network_hardware_installs = document.querySelector("#network_hardware_installs");
    const retail_scale_calibration_service = document.querySelector("#retail_scale_calibration_service");
    const sound_masking_system = document.querySelector("#sound_masking_system");
    const cad_service = document.querySelector("#cad_service");
    const license_for_signage_installs = document.querySelector("#license_for_signage_installs");

    const automation_robotics_facilities = document.querySelectorAll(".automation_robotics_facilities");
    const automation = document.querySelector("#automation");
    const robotics = document.querySelector("#robotics");
    const facilities_maintenace = document.querySelector("#facilities_maintenace");

    const digital_signage_installs = document.querySelectorAll(".digital_signage_installs");
    const indoor_digital_signage_installs = document.querySelector("#indoor_digital_signage_installs");
    const outdoor_digital_signage_installs = document.querySelector("#outdoor_digital_signage_installs");

    const general_contractor_license = document.querySelector("#general_contractor_license");
    const mechanical_contractor_license = document.querySelector("#mechanical_contractor_license");

    const union_affiliation_wrapper = document.querySelector(".union_affiliation_wrapper");
    const w2_employee_info = document.querySelector(".w2_employee_info");
    const service_call_rate_wrapper = document.querySelector(".service_call_rate_wrapper");
    const structured_cabling_wrapper = document.querySelector(".structured_cabling_wrapper");
    const copper_testing_equipment_brand_wrapper = document.querySelector(".copper_testing_equipment_brand_wrapper");
    const fiber_optics_wrapper = document.querySelector(".fiber_optics_wrapper");
    const fiber_optics_terminate_and_test_wrapper = document.querySelector(".fiber_optics_terminate_and_test_wrapper");
    const structured_cabling_license_info_wrapper = document.querySelector(".structured_cabling_license_info_wrapper");
    const background_check_last_check_wrapper = document.querySelector(".background_check_last_check_wrapper");
    const drug_test_last_check_wrapper = document.querySelector(".drug_test_last_check_wrapper");
    const hipaa_certified_last_check_wrapper = document.querySelector(".hipaa_certified_last_check_wrapper");
    const fusion_splice_wrapper = document.querySelector(".fusion_splice_wrapper");
    const fusion_splicer_brand_wrapper = document.querySelector(".fusion_splicer_brand_wrapper");
    const security_cctv_checkbox_wrapper = document.querySelector(".security_cctv_checkbox_wrapper");
    const state_cctv_license_wrapper = document.querySelector(".state_cctv_license_wrapper");
    const fire_alarm_wrapper = document.querySelector(".fire_alarm_wrapper");
    const state_burglar_alarm_license_wrapper = document.querySelector(".state_burglar_alarm_license_wrapper");
    const access_control_wrapper = document.querySelector(".access_control_wrapper");
    const state_access_control_license_wrapper = document.querySelector(".state_access_control_license_wrapper");
    const licensed_electrician_wrapper = document.querySelector(".licensed_electrician_wrapper");
    const state_electrical_license_wrapper = document.querySelector(".state_electrical_license_wrapper");
    const wireless_installls_wrapper = document.querySelector(".wireless_installls_wrapper");
    const other_software_license_wrapper = document.querySelector(".other_software_license_wrapper");
    const network_hardware_installs_wrapper = document.querySelector(".network_hardware_installs_wrapper");
    const retail_scale_calibration_service_wrapper = document.querySelector(".retail_scale_calibration_service_wrapper");
    const sound_masking_system_wrapper = document.querySelector(".sound_masking_system_wrapper");
    const cad_service_wrapper = document.querySelector(".cad_service_wrapper");
    const automation_robotics_facilities_maintenance_wrapper = document.querySelector(".automation_robotics_facilities_maintenance_wrapper");
    const general_contractor_license_wrapper = document.querySelector(".general_contractor_license_wrapper");
    const mechanical_contractor_license_wrapper = document.querySelector(".mechanical_contractor_license_wrapper");
    const digital_signage_installs_wrapper = document.querySelector(".digital_signage_installs_wrapper");
    const license_for_signage_installs_wrapper = document.querySelector(".license_for_signage_installs_wrapper");

    union_affiliation_wrapper.style.display = "none";
    w2_employee_info.style.display = "none";
    service_call_rate_wrapper.style.display = "none";
    structured_cabling_wrapper.style.display = "none";
    copper_testing_equipment_brand_wrapper.style.display = "none";
    fiber_optics_wrapper.style.display = "none";
    fiber_optics_terminate_and_test_wrapper.style.display = "none";
    structured_cabling_license_info_wrapper.style.display = "none";
    background_check_last_check_wrapper.style.display = "none";
    drug_test_last_check_wrapper.style.display = "none";
    hipaa_certified_last_check_wrapper.style.display = "none";
    fusion_splice_wrapper.style.display = "none";
    fusion_splicer_brand_wrapper.style.display = "none";
    security_cctv_checkbox_wrapper.style.display = "none";
    state_cctv_license_wrapper.style.display = "none";
    fire_alarm_wrapper.style.display = "none";
    state_burglar_alarm_license_wrapper.style.display = "none";
    access_control_wrapper.style.display = "none";
    state_access_control_license_wrapper.style.display = "none";
    licensed_electrician_wrapper.style.display = "none";
    state_electrical_license_wrapper.style.display = "none";
    wireless_installls_wrapper.style.display = "none";
    other_software_license_wrapper.style.display = "none";
    network_hardware_installs_wrapper.style.display = "none";
    retail_scale_calibration_service_wrapper.style.display = "none";
    sound_masking_system_wrapper.style.display = "none";
    cad_service_wrapper.style.display = "none";
    automation_robotics_facilities_maintenance_wrapper.style.display = "none";
    general_contractor_license_wrapper.style.display = "none";
    mechanical_contractor_license_wrapper.style.display = "none";
    digital_signage_installs_wrapper.style.display = "none";
    license_for_signage_installs_wrapper.style.display = "none";


    is_union_shop.addEventListener('change', function() {
        if (this.value === "Yes") {
            union_affiliation_wrapper.style.display = "block";

        }
        if (this.value === "No") {
            union_affiliation_wrapper.style.display = "none";
        }
    });
    does_not_use_sub_contractors.addEventListener('change', function() {
        if (this.checked === true) {
            w2_employee_info.style.display = "block";
        }
        if (this.checked === false) {
            w2_employee_info.style.display = "none";
        }
    });

    service_call_payment.addEventListener('change', function() {
        if (this.value === "No") {
            service_call_rate_wrapper.style.display = "none";
        }
        if (this.value === "yes,hourly") {
            service_call_rate_wrapper.style.display = "block";

        }
        if (this.value === "yes,fixed doller amount") {
            service_call_rate_wrapper.style.display = "block";

        }
    });

    structured_cabling.addEventListener('change', function() {
        if (this.value === "No") {
            structured_cabling_wrapper.style.display = "none";
        }
        if (this.value === "Yes") {
            structured_cabling_wrapper.style.display = "block";

        }

    });

    test_result_copper.addEventListener('change', function() {
        if (this.value === "No") {
            copper_testing_equipment_brand_wrapper.style.display = "none";
        }
        if (this.value === "Yes") {
            copper_testing_equipment_brand_wrapper.style.display = "block";

        }

    });
    fiber_optics.addEventListener('change', function() {
        if (this.value === "No") {
            fiber_optics_wrapper.style.display = "none";
        }
        if (this.value === "Yes") {
            fiber_optics_wrapper.style.display = "block";

        }

    });
    fiber_optics_terminate_and_test.addEventListener('change', function() {
        if (this.value === "No") {
            fiber_optics_terminate_and_test_wrapper.style.display = "none";
        }
        if (this.value === "Yes") {
            fiber_optics_terminate_and_test_wrapper.style.display = "block";

        }

    });
    fusion_splice.addEventListener('change', function() {
        if (this.value === "No") {
            fusion_splice_wrapper.style.display = "none";
        }
        if (this.value === "Yes") {
            fusion_splice_wrapper.style.display = "block";

        }

    });
    security_cctv.addEventListener('change', function() {
        if (this.value === "No") {
            security_cctv_checkbox_wrapper.style.display = "none";
        }
        if (this.value === "Yes") {
            security_cctv_checkbox_wrapper.style.display = "block";

        }

    });
    state_cctv_license.addEventListener('change', function() {
        if (this.value === "No") {
            state_cctv_license_wrapper.style.display = "none";
        }
        if (this.value === "Yes") {
            state_cctv_license_wrapper.style.display = "block";

        }

    });
    state_burglar_alarm_license.addEventListener('change', function() {
        if (this.value === "No") {
            state_burglar_alarm_license_wrapper.style.display = "none";
        }
        if (this.value === "Yes") {
            state_burglar_alarm_license_wrapper.style.display = "block";

        }

    });
    fire_alarm.addEventListener('change', function() {
        if (this.value === "No") {
            fire_alarm_wrapper.style.display = "none";
        }
        if (this.value === "Yes") {
            fire_alarm_wrapper.style.display = "block";

        }

    });
    access_control.addEventListener('change', function() {
        if (this.value === "No") {
            access_control_wrapper.style.display = "none";
        }
        if (this.value === "Yes") {
            access_control_wrapper.style.display = "block";

        }

    });
    state_access_control_license.addEventListener('change', function() {
        if (this.value === "No") {
            state_access_control_license_wrapper.style.display = "none";
        }
        if (this.value === "Yes") {
            state_access_control_license_wrapper.style.display = "block";

        }

    });
    licensed_electrician.addEventListener('change', function() {
        if (this.value === "No") {
            licensed_electrician_wrapper.style.display = "none";
        }
        if (this.value === "Yes") {
            licensed_electrician_wrapper.style.display = "block";

        }

    });


    state_electrical_license.addEventListener('change', function() {
        if (this.value === "No") {
            state_electrical_license_wrapper.style.display = "none";
        }
        if (this.value === "Yes") {
            state_electrical_license_wrapper.style.display = "block";

        }

    });
    wireless_installls.addEventListener('change', function() {
        if (this.value === "No") {
            wireless_installls_wrapper.style.display = "none";
        }
        if (this.value === "Yes") {
            wireless_installls_wrapper.style.display = "block";
        }

    });
    other_software_license_checkbox_wrapper.addEventListener('click', function() {

        if (other_software_license.checked == true) {
            other_software_license_wrapper.style.display = "block";
        } else {
            other_software_license_wrapper.style.display = "none";
        }
    });

    automation_robotics_facilities.forEach(function(automation_robotics_facilitiesElement) {
        automation_robotics_facilitiesElement.addEventListener('click', function() {
            if (automation.checked == true) {
                automation_robotics_facilities_maintenance_wrapper.style.display = "block";
            } else if (robotics.checked == true) {
                automation_robotics_facilities_maintenance_wrapper.style.display = "block";
            } else if (facilities_maintenace.checked == true) {
                automation_robotics_facilities_maintenance_wrapper.style.display = "block";
            } else {
                automation_robotics_facilities_maintenance_wrapper.style.display = "none";

            }
        });
    });
    digital_signage_installs.forEach(function(digital_signage_installsElement) {
        digital_signage_installsElement.addEventListener('click', function() {
            if (indoor_digital_signage_installs.checked == true) {
                digital_signage_installs_wrapper.style.display = "block";
            } else if (outdoor_digital_signage_installs.checked == true) {
                digital_signage_installs_wrapper.style.display = "block";
            } else {
                digital_signage_installs_wrapper.style.display = "none";

            }
        });
    });



    general_contractor_license.addEventListener('change', function() {
        if (this.value === "No") {
            general_contractor_license_wrapper.style.display = "none";
        }
        if (this.value === "Yes") {
            general_contractor_license_wrapper.style.display = "block";

        }

    });
    license_for_signage_installs.addEventListener('change', function() {
        if (this.value === "No") {
            license_for_signage_installs_wrapper.style.display = "none";
        }
        if (this.value === "Yes") {
            license_for_signage_installs_wrapper.style.display = "block";

        }

    });
    mechanical_contractor_license.addEventListener('change', function() {
        if (this.value === "No") {
            mechanical_contractor_license_wrapper.style.display = "none";
        }
        if (this.value === "Yes") {
            mechanical_contractor_license_wrapper.style.display = "block";

        }

    });
    network_hardware_installs.addEventListener('change', function() {
        if (this.value === "No") {
            network_hardware_installs_wrapper.style.display = "none";
        }
        if (this.value === "Yes") {
            network_hardware_installs_wrapper.style.display = "block";

        }

    });

    retail_scale_calibration_service.addEventListener('change', function() {
        if (this.value === "No") {
            retail_scale_calibration_service_wrapper.style.display = "none";
        }
        if (this.value === "Yes") {
            retail_scale_calibration_service_wrapper.style.display = "block";

        }

    });
    sound_masking_system.addEventListener('change', function() {
        if (this.value === "No") {
            sound_masking_system_wrapper.style.display = "none";
        }
        if (this.value === "Yes") {
            sound_masking_system_wrapper.style.display = "block";

        }

    });
    cad_service.addEventListener('change', function() {
        if (this.value === "No") {
            cad_service_wrapper.style.display = "none";
        }
        if (this.value === "Yes") {
            cad_service_wrapper.style.display = "block";

        }

    });
    own_a_fusion_splice.addEventListener('change', function() {
        if (this.value === "No") {
            fusion_splicer_brand_wrapper.style.display = "none";
        }
        if (this.value === "Yes") {
            fusion_splicer_brand_wrapper.style.display = "block";

        }

    });

    low_voltage_contractor_licence.addEventListener('change', function() {
        if (this.value === "No") {
            structured_cabling_license_info_wrapper.style.display = "none";
        }
        if (this.value === "Yes") {
            structured_cabling_license_info_wrapper.style.display = "block";

        }

    });
    background_check.addEventListener('change', function() {
        if (this.value === "No") {
            background_check_last_check_wrapper.style.display = "none";
        }
        if (this.value === "Yes") {
            background_check_last_check_wrapper.style.display = "block";

        }

    });
    drug_test.addEventListener('change', function() {
        if (this.value === "No") {
            drug_test_last_check_wrapper.style.display = "none";
        }
        if (this.value === "Yes") {
            drug_test_last_check_wrapper.style.display = "block";

        }

    });
    hipaa_certified.addEventListener('change', function() {
        if (this.value === "No") {
            hipaa_certified_last_check_wrapper.style.display = "none";
        }
        if (this.value === "Yes") {
            hipaa_certified_last_check_wrapper.style.display = "block";

        }

    });
</script>

</script>

@endsection