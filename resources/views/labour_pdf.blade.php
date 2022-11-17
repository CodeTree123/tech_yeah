<!DOCTYPE html>
<html>
<head>
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Labour Patner Information</h1>
    <hr>
    <ul>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">Company Name</span>: {{ $companyName }}.</li>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">DBA</span>: {{ $dba }}.</li>
        <br>
        <br>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">Full Company Address</span>: {{ $address }}.</li>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">Shipping Address</span>: {{ $shopping_address }}.</li>
        <br>
        <br>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">Company Contact Name  </span>: {{ $company_contact_name }}.</li>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">Main Phone  </span>: {{ $company_main_phone }}.</li>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">Emergency Phone  </span>: {{ $emergency_phone }}.</li>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">Mobile Default Phone </span>: {{ $mobile_default_phone }}.</li>
        <br>
        <br>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">Main Email  </span>: {{ $main_email }}.</li>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">PO Email  </span>: {{ $po_email }}.</li>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">Status Alert Email  </span>: {{ $shipping_status_alert_email }}.</li>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">Compliance Alert Email   </span>: {{ $shipping_complience_status_alert_email }}.</li>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">Portal Notification Email  </span>: {{ $shipping_portal_notification_email }}.</li>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">QuickPay Email  </span>: {{ $shipping_quick_pay_email }}.</li>
        <br>
        <br>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">Banking (EFT) Contact Name  </span>: {{ $shipping_banking_eft_contact_name }}.</li>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">Banking (EFT) Contact Phone  </span>: {{ $shipping_banking_eft_contact_phone }}.</li>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">Banking (EFT) Contact Email  </span>: {{ $shipping_banking_eft_contact_email }}.</li>
        <br>
        <br>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Are you a union shop?  </span>: {{ $is_union_shop }}.</li>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">Provide your company union affiliation(s):  </span>: {{ $union_affiliation }}.</li>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">How did you hear about Telaid?  </span>: {{ $hearing_source }}.</li>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">I confirm, my company does not use any Sub-Contractors (only W2 employees) on our projects  </span>: 
        @if($does_not_use_sub_contractors === "Yes")
            Yes
        @else
            No
        @endif
        .</li>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">How many Lead Technicians (W2 employees) do you employ?  </span>: {{ $number_of_lead_technician }}.</li>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">How many Level 1 Technicians (W2 employees) do you employ?  </span>: {{ $number_of_level_one_technician }}.</li>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">Do your techs go to site with smartphones/tablets?  </span>: {{ $techs_go_to_site_with_smartphone }}.</li>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">Can you support a 4 HR Response Time?  </span>: {{ $four_hour_response }}.</li>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">Can you support a 2 HR Response Time?  </span>: {{ $two_hour_response }}.</li>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">Can you support night/holidays/weekend work?  </span>: {{ $night_holiday_weekend_work }}.</li>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">Are you willing to travel (routes)?  </span>: {{ $willing_to_travel }}.</li>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">Do you have capacity to store assets for Techyeah?  </span>: {{ $store_capacity }}.</li>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">Will you take Flat Rate Projects?  </span>: {{ $takes_flate_rate_project }}.</li>

        <h1>Travel Rates</h1>
        <hr>

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Labor Travel Rate </span>:
            {{ $shipping_labor_travel_rate }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Security Travel Rate </span>:
            {{ $security_travel_rate }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Electrical Travel Rate </span>:
            {{ $electrical_travel_rate }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Retail Scale Calibration Travel Rate</span>:
            {{ $retail_scale_calibration_travel_rate }}.
        </li>

        <h1>CAD</h1>
        <hr>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Do you charge a minimum dollar or hourly fee for service calls?</span>:
            {{ $service_call_payment }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Service Call Minimum Hour Amount</span>:
            {{ $service_call_rate }}.
        </li>
        
        <h1>Labor Rate (1st Shift)</h1>
        <hr>

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Labor - 1st Shift </span>:
            {{ $labor_first_shift }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Security - 1st Shift </span>:
            {{ $security_first_shift }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Electrical - 1st Shift </span>:
            {{ $electrical_first_shift }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Retail Scale Calibration - 1st Shift</span>:
            {{ $retail_scale_calibration_first_shift }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Facilities Maintenance - 1st Shift</span>:
            {{ $facilities_maintenance_first_shift }}.
        </li>
        
        <h1>Labor Rate (2nd Shift)</h1>
        <hr>

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Labor - 2nd Shift </span>:
            {{ $labor_second_shift }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Security - 2nd Shift </span>:
            {{ $security_second_shift }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Electrical - 2nd Shift </span>:
            {{ $electrical_second_shift }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Retail Scale Calibration - 2nd Shift</span>:
            {{ $retail_scale_calibration_second_shift }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Facilities Maintenance - 2nd Shift</span>:
            {{ $facilities_maintenance_second_shift }}.
        </li>
        
        <h1>Overtime (OT)</h1>
        <hr>

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Labor - OT Rate </span>:
            {{ $labor_ot_rate }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Security - OT Rate </span>:
            {{ $security_ot_rate }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Electrical - OT Rate </span>:
            {{ $electrical_ot_rate }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Retail Scale Calibration - OT Rate</span>:
            {{ $retail_scale_calibration_ot_rate }}.
        </li>
        
        <h1>Night Work (3rd Shift)</h1>
        <hr>

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Labor - 3rd Shift </span>:
            {{ $labor_third_shift }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Security - 3rd Shift </span>:
            {{ $security_third_shift }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Electrical - 3rd Shift </span>:
            {{ $electrical_third_shift }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Retail Scale Calibration - 3rd Shift</span>:
            {{ $retail_scale_calibration_third_shift }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Facilities Maintenance - 3rd Shift</span>:
            {{ $facilities_maintenance_third_shift }}.
        </li>
        
        <h1>Weekend Work (Saturday)</h1>
        <hr>

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Labor - Saturday </span>:
            {{ $labor_Saturday }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Security - Saturday </span>:
            {{ $security_Saturday }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Electrical - Saturday </span>:
            {{ $electrical_Saturday }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Retail Scale Calibration - Saturday</span>:
            {{ $retail_scale_calibration_Saturday }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Facilities Maintenance - Saturday</span>:
            {{ $facilities_maintenance_Saturday }}.
        </li>
        
        <h1>Weekend Work (Sunday)</h1>
        <hr>

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Labor - Sunday </span>:
            {{ $labor_Sunday }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Security - Sunday </span>:
            {{ $security_Sunday }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Electrical - Sunday </span>:
            {{ $electrical_Sunday }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Retail Scale Calibration - Sunday</span>:
            {{ $retail_scale_calibration_Sunday }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Facilities Maintenance - Sunday</span>:
            {{ $facilities_maintenance_Sunday }}.
        </li>
        
        <h1>  Holidays</h1>
        <hr>

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Labor - Holidays </span>:
            {{ $labor_Holidays }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Security - Holidays </span>:
            {{ $security_Holidays }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Electrical - Holidays </span>:
            {{ $electrical_Holidays }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Retail Scale Calibration - Holidays</span>:
            {{ $retail_scale_calibration_Holidays }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Facilities Maintenance - Holidays</span>:
            {{ $facilities_maintenance_Holidays }}.
        </li>
        
        <h1>  Emergency (4hr Response)</h1>
        <hr>

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Labor - 4hr Response </span>:
            {{ $labor_4hr_Response }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Security - 4hr Response </span>:
            {{ $security_4hr_Response }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Electrical - 4hr Response </span>:
            {{ $electrical_4hr_Response }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Retail Scale Calibration - 4hr Response</span>:
            {{ $retail_scale_calibration_4hr_Response }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Facilities Maintenance - 4hr Response</span>:
            {{ $facilities_maintenance_4hr_Response }}.
        </li>
        
        <h1>  Emergency (2hr Response)</h1>
        <hr>

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Labor - 2hr Response </span>:
            {{ $labor_2hr_Response }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Security - 2hr Response </span>:
            {{ $security_2hr_Response }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Electrical - 2hr Response </span>:
            {{ $electrical_2hr_Response }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Retail Scale Calibration - 2hr Response</span>:
            {{ $retail_scale_calibration_2hr_Response }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Facilities Maintenance - 2hr Response</span>:
            {{ $facilities_maintenance_2hr_Response }}.
        </li>
        
        <h1>  What Type of Work Are You Looking For?</h1>
        <hr>
        <div>
                <span style="font-weight:bold;">Projects:   

                </span> 
                <span style="font-weight:bold;">Rollouts:
            
                </span>
                </span>  
                <span style="font-weight:bold;">Service:    
               
                </span>
        </div>
        
        <h1> Check what experience you have:</h1>
        <hr>
        <div> 
                <span style="font-weight:bold;">New Installs:    

                </span> 
                <span style="font-weight:bold;">Remodels:
            
                </span>
                </span>  
                <span style="font-weight:bold;">Distribution Centers/Warehouse Environments:    
               
                </span> 
                <span style="font-weight:bold;">Clean Room Environments:    
               
                </span> 
                <span style="font-weight:bold;">Sterile Environments:    
               
                </span> 
                <span style="font-weight:bold;">None:    
               
                </span> 
        </div>
        
        <h1>Please describe what type of environment you are most comfortable in:</h1>
        <hr>
        <div> 
                <span style="font-weight:bold;"> Large Big Box Retail (e.g. Walmart, Target, etc):    

                </span> 
                <span style="font-weight:bold;">Office Environments (e.g. Morgan Stanley, UBS, etc):
            
                </span>
                </span>  
                <span style="font-weight:bold;">QSR - Quick Serve Restaurant (e.g. Wendy's, Subway, etc):    
               
                </span> 
                <span style="font-weight:bold;">Small Retail (e.g. Claire's, etc):    
               
                </span> 
                <span style="font-weight:bold;">Supermarkets (e.g. ALDI, LIDL, Weiss, etc):    
               
                </span>  
        </div>
        
        <h1>Does the following equipment go with your techs to site?</h1>
        <hr>
        <div> 
                <span style="font-weight:bold;">1000 ft of Cat6 Cable:    

                </span> 
                <span style="font-weight:bold;">6ft Ladder:
            
                </span>
                </span>  
                <span style="font-weight:bold;">Butt Set:    
               
                </span> 
                <span style="font-weight:bold;">Copper Tester:    
               
                </span> 
                <span style="font-weight:bold;">Crimper:    
               
                </span>  
                <span style="font-weight:bold;">Fiber Termination Kit:    
               
                </span>  
                <span style="font-weight:bold;">Fiber Anaerobic Term Kit (Puck & Polish):    
               
                </span>  
                <span style="font-weight:bold;">Fiber Corning Term Kit (Unicam):    
               
                </span>  
                <span style="font-weight:bold;">Fiber Tester:    
               
                </span>  
                <span style="font-weight:bold;">Fusion Splicer:    
               
                </span>  
                <span style="font-weight:bold;">Fusion Singlemode Splicer:    
               
                </span>  
                <span style="font-weight:bold;">Fusion Multimode Splicer:    
               
                </span>  
                <span style="font-weight:bold;">Hammer Drill (18” long bits -bits to have on hand - ½”, ¾”, 1”, 1 ¼”):    
               
                </span>  
                <span style="font-weight:bold;">Label Maker:    
               
                </span>  
                <span style="font-weight:bold;">½” or 3/8” white tape with black font:    
               
                </span>  
                <span style="font-weight:bold;">Personal Protective Equipment (PPE):    
               
                </span>  
                <span style="font-weight:bold;">Punch Tool:    
               
                </span>  
                <span style="font-weight:bold;">RJ11:    
               
                </span>  
                <span style="font-weight:bold;">RJ45:    
               
                </span>  
                <span style="font-weight:bold;">Small Hand Tools (e.g. Screwdriver):    
               
                </span>  
                <span style="font-weight:bold;">Toner:    
               
                </span>  
 
        </div>


        
        <h1>Do you own any of following types of heavy equipment?</h1>
        <hr>
        <div> 
                <span style="font-weight:bold;">Forklift:    

                </span> 
                <span style="font-weight:bold;">Boom Lift:
            
                </span>
                </span>  
                <span style="font-weight:bold;">Crane:    
               
                </span> 
                <span style="font-weight:bold;">Heavy Equipment Rigging :    
               
                </span>
                <span style="font-weight:bold;">Scissor Lift :    
               
                </span>
                <span style="font-weight:bold;">Heavy  :    
               
                </span>
                <span style="font-weight:bold;">Ladder  :    
               
                </span>
                <span style="font-weight:bold;">Lift Harness (Safety)  :    
               
                </span>
        </div>
        
        
        <h1>CABLING</h1>
        <hr>
       <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Structured Cabling</span>:
            {{ $structured_cabling }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Can you provide verifiable test results for copper?</span>:
            {{ $test_result_copper }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Copper Testing Equipment Brand</span>:
            {{ $copper_testing_equipment_brand }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Do you have experience installing rigid conduit?</span>:
            {{ $rigit_conduit_experience }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Do you hold any State Low-Voltage Contractor License(s)? </span>:
            {{ $low_voltage_contractor_licence }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Structured Cabling License Info* </span>:
            {{ $structured_cabling_license_info }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Fiber Optics </span>:
            {{ $fiber_optics }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Can you provide verifiable test results? </span>:
            {{ $fiber_optics_test_result }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Can you terminate and test? </span>:
            {{ $fiber_optics_terminate_and_test }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Fiber Testing Equipment Brand </span>:
            {{ $fiber_testing_equipment_brand }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Do you fusion splice? </span>:
            {{ $fusion_splice }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Do you own fusion splice? </span>:
            {{ $fusion_splicer_brand }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Fusion Splicer Brand </span>:
            {{ $fiber_optics_license_info }}.
        </li>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Fiber Optics License Info </span>:
            {{ $structured_cabling }}.
        </li> 


        <h1>VOICE</h1>
        <hr>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">VOIP </span>:
            {{ $voice_voip }}.
        </li>  

        <h1>SECURITY</h1>
        <hr>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Can you and your crews read blueprints? </span>:
            {{ $can_crew_read_blueprint }}.
        </li> 
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">CCTV </span>:
            {{ $security_cctv }}.
        </li> 
           
        <h1> Please check your experience in the following</h1>
        <hr>
        <div>
                <span style="font-weight:bold;">COAX:   

                </span> 
                <span style="font-weight:bold;">DVR:
            
                </span>
                </span>  
                <span style="font-weight:bold;">IP Cameras:    
               
                </span>
                <span style="font-weight:bold;">Heavy Equipment Rigging:    
               
                </span>
                <span style="font-weight:bold;">NVR:    
               
                </span>
                <span style="font-weight:bold;">Verint Software Platforms:    
               
                </span>
                <span style="font-weight:bold;">March Software Platforms:    
               
                </span>
                <span style="font-weight:bold;">Other VMS Platforms:    
               
                </span> 
        </div>
           
        <h1> Please check if you have the following:</h1>
        <hr>
        <div>
                <span style="font-weight:bold;">Spot Monitor:   

                </span> 
                <span style="font-weight:bold;">Laptop (Capable of Downloading Software):
            
                </span>
                </span>  
                <span style="font-weight:bold;">Basic network capability with a laptop:    
               
                </span> 
        </div>
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Do you hold State CCTV License(s)? </span>:
            {{ $state_cctv_license }}.
        </li> 
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">CCTV License Info* </span>:
            {{ $cctv_license_info }}.
        </li> 
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Fire Alarm  </span>:
            {{ $fire_alarm }}.
        </li> 
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Can you install basic metal work?  </span>:
            {{ $basic_metal_work }}.
        </li> 
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Can you install conduit?  </span>:
            {{ $conduit_installation }}.
        </li> 
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Do you have basic network capability with a laptop for your fire installs?  </span>:
            {{ $basic_network_capability_lapto_fire_installs }}.
        </li> 
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">What version of Remote Programing Software (RPS) do you have?  </span>:
            {{ $rps_version }}.
        </li> 
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Please confirm how you connect to a panel?  </span>:
            {{ $experience_with_conventional_fire_alarm }}.
        </li> 
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Do you have experience with conventional fire alarm systems?  </span>:
            {{ $intrusion_burglar_alarms }}.
        </li> 
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Intrusion (IDS) / Burglar Alarms  </span>:
            {{ $network_capability_with_laptop_intrusion_installs }}.
        </li> 
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Do you have basic network capability with a laptop for your intrusion installs?  </span>:
            {{ $state_burglar_alarm_license }}.
        </li> 
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Do you hold State Burglar Alarm/IDS license(s)?  </span>:
            {{ $intrusion_burglar_alarms_license_info }}.
        </li> 
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Intrusion (IDS) / Burglar Alarms License Info*  </span>:
            {{ $access_control }}.
        </li> 
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Access Control  </span>:
            {{ $network_capability_with_laptop_access_control_installs }}.
        </li>  

        <h1> ELECTRICIAN</h1>
        <hr>
        <!-- --------------------------------------------- --> 
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Licensed Electrician</span>:
            {{ $licensed_electrician }}.
        </li>  
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Do you have experience bending conduit?</span>:
            {{ $bending_conduit_experience }}.
        </li>  
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Do you have experience installing stainless steel conduit?</span>:
            {{ $sainless_steel_conduit_experience }}.
        </li>  
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Do you hold a State Electrical license(s)?</span>:
            {{ $state_electrical_license }}.
        </li>  
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Electrician License Info*</span>:
            {{ $structured_cabling_license_info }}.
        </li>  

        <h1> WIRELESS</h1>
        <hr>
        <!-- --------------------------------------------- --> 
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Do you perform wireless installs?</span>:
            {{ $wireless_installls }}.
        </li>  
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Do you perform onsite Wireless Site Surveys?</span>:
            {{ $onsite_wireless_site_surveys }}.
        </li>  

        
        <h4>Do you hold software licenses for::</h4> 
        <div>
                <span style="font-weight:bold;">AirMagnet:   

                </span> 
                <span style="font-weight:bold;">Aironet:  
            
                </span> 
                <span style="font-weight:bold;">Ekahau: 
               
                </span> 
                <span style="font-weight:bold;">Meraki: 
               
                </span> 
                <span style="font-weight:bold;">Other: 
               
                </span> 
        </div>

        <h3>Do you own one of the following?</h3> 
        <div>
                <span style="font-weight:bold;">Wilson Pro Meter :   

                </span> 
                <span style="font-weight:bold;">Surecall Meter:  
            
                </span>
               
        </div>

        <h1> NETWORK HARDWARE</h1>
        <hr>
        <!-- --------------------------------------------- --> 
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Do you perform network hardware installs?</span>:
            {{ $network_hardware_installs }}.
        </li>  

        
        <h4>Please check what experience you have:</h4> 
        <div>
                <span style="font-weight:bold;">Switch Add:   

                </span> 
                <span style="font-weight:bold;">Switch Upgrade:  
            
                </span> 
                <span style="font-weight:bold;">Switch Refresh: 
               
                </span> 
                <span style="font-weight:bold;">MAC (Move Add Change): 
               
                </span>  
        </div>

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Do you have experience installing MDF Racks?</span>:
            {{ $experience_installing_mdf_racks }}.
        </li>  

        <h1> AUTOMATION, ROBOTICS AND FACILITIES MAINTENANCE</h1>
        <hr>
        <!-- --------------------------------------------- -->   
        
        <h4>Do you have experience in:</h4> 
        <div>
                <span style="font-weight:bold;">Automation:   

                </span> 
                <span style="font-weight:bold;"> Robotics:  
            
                </span> 
                <span style="font-weight:bold;"> Facilities Maintenace: 
               
                </span>  
        </div>
        
        <h4>Further explain your experience and skill set in Automation and Robotics:</h4> 
        <div>
                <span style="font-weight:bold;">Conveyors (assembly of drive components such as Drive, Servo, Motor, Belt, or Chain):   

                </span> 
                <span style="font-weight:bold;"> Electrical (Power Units, Cabling, Bus ways, etc):  
            
                </span> 
                <span style="font-weight:bold;"> Facilities  : 
               
                </span>  
                <span style="font-weight:bold;"> General Construction  : 
               
                </span>  
                <span style="font-weight:bold;"> Maintenance  : 
               
                </span>  
                <span style="font-weight:bold;"> Material Handling  : 
               
                </span>  
                <span style="font-weight:bold;"> Mechanical Construction (general mechanical labor - putting parts together with bolts, rivets, etc., anchoring)  : 
               
                </span>  
                <span style="font-weight:bold;"> Software Turn up & Connectivity  : 
               
                </span>  
                <span style="font-weight:bold;"> Weights and Measures/Scale Calibration  : 
               
                </span>   
        </div>
        
        <h4>Do you have experience with installing:</h4> 
        <div>
                <span style="font-weight:bold;">Automated Storage and Retrieval Systems (ASRS) :

                </span> 
                <span style="font-weight:bold;">Robotic Storage and Retrieval Systems (RSR):  
            
                </span>  
        </div>
        
        <h4>Do you have experience with servicing:</h4> 
        <div>
                <span style="font-weight:bold;">Automated Storage and Retrieval Systems (ASRS) :

                </span> 
                <span style="font-weight:bold;">Robotic Storage and Retrieval Systems (RSR):  
            
                </span>  
        </div>
        
        <h4>Can you do the following in supporting Automation, Robotics and Facilities Maintenance?</h4> 
        <div>
                <span style="font-weight:bold;">ASi Modules:

                </span> 
                <span style="font-weight:bold;">Belt and Chain Drives:  
            
                </span>  
                <span style="font-weight:bold;">Belt Tensioning  
            
                </span>  
                <span style="font-weight:bold;">HVAC  
            
                </span>  
                <span style="font-weight:bold;">Instrumentation  
            
                </span>  
                <span style="font-weight:bold;">Magnetic Field - Gauss  
            
                </span>  
                <span style="font-weight:bold;">Noise Level - Decibel  
            
                </span>  
                <span style="font-weight:bold;">Pneumatic  
            
                </span>  
                <span style="font-weight:bold;">Racks  
            
                </span>  
                <span style="font-weight:bold;">RFID  
            
                </span>  
                <span style="font-weight:bold;">Servo Drives  
            
                </span>  
                <span style="font-weight:bold;">Torque  
            
                </span>  
                <span style="font-weight:bold;">Variable Frequency Drives (VFD)  
            
                </span>  
                <span style="font-weight:bold;">Weights and Measures/Scale Calibration  
            
                </span>  
                <span style="font-weight:bold;">Wire Crafter  
            
                </span>    
        </div>
        
        <h4>Type of HVAC Work:</h4> 
        <div>
                <span style="font-weight:bold;">Control Repair/Replacement Experience:   

                </span> 
                <span style="font-weight:bold;">Troubleshooting and Repair of RTUs and Associated Controls:  
            
                </span>  
        </div>

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Do you hold a General Contractor License?</span>:
            {{ $general_contractor_license }}.
        </li>  

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">  Structured Cabling License Info*</span>:
            {{ $general_contractor_license_info }}.
        </li>  

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Do you hold a Mechanical Contractor License?</span>:
            {{ $mechanical_contractor_license }}.
        </li>  

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Structured Cabling License Info*</span>:
            {{ $mechanical_contractor_license_info }}.
        </li>  

        <h1>DIGITAL SIGNAGE:</h1> 

        <h4>Type of HVAC Work:</h4> 
        <div>
                <span style="font-weight:bold;">Indoor Digital Signage Installs (e.g. Kiosks, Single Boards, Menu Boards, KDS, Media Players, etc) 

                </span> 
                <span style="font-weight:bold;">Outdoor Signage Installs (e.g. Pedestals at Drive-Throughs, Ring Notifications, Large Digital Signs on Poles higher than 6') 
            
                </span>  
        </div>

        <h4>List your specific experience with Digital Signage work:</h4> 
        <div>
                <span style="font-weight:bold;">Connectivity of Outdoor Digital Signs (e.g. hard wire, cellular, WIFI) 

                </span> 
                <span style="font-weight:bold;">Mall Kiosk Screens (e.g. mall directories and advertising)  
            
                </span>  
                <span style="font-weight:bold;">Media Player Installs  
            
                </span>  
                <span style="font-weight:bold;">Outdoor Digital Signs on Poles (e.g. heights of 6'+)  
            
                </span>  
                <span style="font-weight:bold;">Pedestal Signage Installs  
            
                </span>  
                <span style="font-weight:bold;">Power Source Internal (installing electrical outlets)  
            
                </span>  
                <span style="font-weight:bold;">Power Source External (trenching to a sign for electrical conduit)  
            
                </span>  
                <span style="font-weight:bold;">Perform site surveys for existing signs placement  
            
                </span>  
                <span style="font-weight:bold;">Perform site surveys for new sign placement  
            
                </span>  
                <span style="font-weight:bold;">Perform site surveys for existing power and circuit space  
            
                </span>  
        </div>
        
        <h1>IT SERVICES, AUDIO/VIDEO, PAGING, SATELLITE, POS AND OUTSIDE PLANT WORK:</h1> 
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Do you offer IT services?  </span>:
            {{ $offering_it_services }}.
        </li>  

        <h4>Do you offer the following services?</h4>
        <div>
           <span style="font-weight:bold;">Audio/Video    </span>   
           <span style="font-weight:bold;">Paging Systems    </span>   
           <span style="font-weight:bold;">Aerial    </span>    
           <span style="font-weight:bold;">Underground Work    </span>  
        </div>

        <h4>Type of Outside Plant Work</h4>
        <div>
           <span style="font-weight:bold;">Trenching    </span>  
           <span style="font-weight:bold;">Directional Boring    </span>  
           <span style="font-weight:bold;">Satellite    </span>  
           <span style="font-weight:bold;">POS    </span>  
        </div>

        <h1>RETAIL SCALE CALIBRATION:</h1> 
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Are you certified to offer Retail Scale Calibration services?  </span>:
            {{ $retail_scale_calibration_service }}.
        </li>  
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">States Certified </span>:
            {{ $retail_scale_calibration_service_info }}.
        </li>  

        <h1>SOUND MASKING:</h1> 
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Do you install Sound Masking System?  </span>:
            {{ $sound_masking_system }}.
        </li>  
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Do you provide engineering services for Sound Masking? </span>:
            {{ $engineering_service_for_sound_masking_system }}.
        </li>  
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Sound Masking Systems </span>:
            {{ $retail_scale_calibration_service_info }}.
        </li>  

        <h1>CAD</h1> 
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Do you provide CAD services? </span>:
            {{ $sound_masking_system }}.
        </li>   
         
        <h4>What software systems do you have experience operating?</h4>
        <div>
           <span style="font-weight:bold;">Bluebeam    </span>  
           <span style="font-weight:bold;">AutoCAD    </span>  
           <span style="font-weight:bold;">Revit    </span>  
           <span style="font-weight:bold;">BIM 360    </span>  
           <span style="font-weight:bold;">MS Excel    </span>  
           <span style="font-weight:bold;">Smart Sheets    </span>  
           <span style="font-weight:bold;">Service Now    </span>   
        </div>
         
        <h4>List the areas of scope you have provided CAD services for.</h4>
        <div>
           <span style="font-weight:bold;">Telecom    </span>  
           <span style="font-weight:bold;">Video Surveillance System (Video/Camera/CCTV)    </span>  
           <span style="font-weight:bold;">Wireless    </span>  
           <span style="font-weight:bold;">Security & Intrusion    </span>  
           <span style="font-weight:bold;">Low Voltage    </span>  
           <span style="font-weight:bold;">Data    </span>  
           <span style="font-weight:bold;">RFID    </span>   
           <span style="font-weight:bold;">Audio/Paging    </span>   
           <span style="font-weight:bold;">Access Control    </span>   
           <span style="font-weight:bold;">Fire Alarm    </span>   
           <span style="font-weight:bold;">Life Safety    </span>   
        </div>
         
        <h4>List the different stages you have experience performing.</h4>
        <div>
           <span style="font-weight:bold;">Design    </span>   
           <span style="font-weight:bold;">Conceptual  </span>   
           <span style="font-weight:bold;">Prototype    </span>   
           <span style="font-weight:bold;">Pilot    </span>   
           <span style="font-weight:bold;">Pre-Construction    </span>   
           <span style="font-weight:bold;">Construction    </span>   
           <span style="font-weight:bold;">Start-Up    </span>   
           <span style="font-weight:bold;">Composite   </span>   
           <span style="font-weight:bold;">Permit Set    </span>   
           <span style="font-weight:bold;">Revision 1    </span>   
           <span style="font-weight:bold;">Revision 2    </span>   
           <span style="font-weight:bold;">As-Built    </span>    
        </div>
         
        <h4>List the different stages you have experience performing.</h4>
        <div>
           <span style="font-weight:bold;">Intern    </span>   
           <span style="font-weight:bold;">Drafter  </span>   
           <span style="font-weight:bold;">Designer    </span>    
           <span style="font-weight:bold;">Engineer    </span>    
        </div>
        <hr>

        
        <h1>CERTIFICATIONS</h1> 
        <h3>GENERAL BUSINESS</h3> 
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Background Checks  </span>:
            {{ $background_check }}.
        </li>  
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Background Checks - Last Date Taken   </span>:
            {{ $background_check_last_check }}.
        </li>  
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Drug Tests   </span>:
            {{ $drug_test }}.
        </li>  
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Drug Test - Last Date Taken   </span>:
            {{ $drug_test_last_check }}.
        </li>  
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">HIPAA Certified   </span>:
            {{ $hipaa_certified }}.
        </li>  
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">HIPAA - Last Date Taken   </span>:
            {{ $hipaa_certified_last_check }}.
        </li>  

        <h3>INDUSTRY </h3> 
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">A+ Certified   </span>:
            {{ $a_plus_certified }}.
        </li>  
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">ADT   </span>:
            {{ $adt }}.
        </li>  
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Avaya   </span>:
            {{ $avaya }}.
        </li>  
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Axis   </span>:
            {{ $axis }}.
        </li>  
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Belden   </span>:
            {{ $belden }}.
        </li>  
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">BICSI Copper 1   </span>:
            {{ $bicsi_copper_one }}.
        </li>  
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">BICSI Copper 2   </span>:
            {{ $bicsi_copper_two }}.
        </li>  
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">BICSI Installer    </span>:
            {{ $bicsi_installer }}.
        </li>  
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">BICSI RCDD    </span>:
            {{ $bicsi_rcdd }}.
        </li>  
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">BICSI Technician   </span>:
            {{ $bicsi_technician }}.
        </li>  
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">BOSCH - CCTV   </span>:
            {{ $bosch_cctv }}.
        </li>  
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">BOSCH - Fire    </span>:
            {{ $bosch_fire }}.
        </li>  
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">BOSCH - Intrusion   </span>:
            {{ $bosch_intrusion }}.
        </li>  
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">BOSCH - IP Paging    </span>:
            {{ $bosch_ip_paging }}.
        </li>  
        
        <hr>
        
        <h3>CISCO Certifications </h3> 
        <div>
           <span style="font-weight:bold;">CCENT    </span>   
           <span style="font-weight:bold;">Boom Lift  </span>   
           <span style="font-weight:bold;">CCT    </span>   
           <span style="font-weight:bold;">Heavy Equipment Rigging    </span>   
           <span style="font-weight:bold;">CCNA    </span>   
           <span style="font-weight:bold;">CCDA    </span>   
           <span style="font-weight:bold;">CCNP    </span>   
           <span style="font-weight:bold;">CCIE    </span>  
        </div>
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;"> CommScope Systimax   </span>:
            {{ $commScope_systimax }}.
        </li>  
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;"> CommScope Uniprise   </span>:
            {{ $commScope_Uniprise }}.
        </li>  
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;"> Corning   </span>:
            {{ $corning }}.
        </li>  
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;"> DMP   </span>:
            {{ $DMP }}.
        </li>  
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;"> DSX   </span>:
            {{ $DSX }}.
        </li>  
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;"> ESA  </span>:
            {{ $ESA }}.
        </li>  
         
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;"> Fiber Certifications   </span>:
            {{ $fiber_cirtification_info }}.
        </li>  
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;"> Fire-Lite   </span>:
            {{ $fire_lite }}.
        </li>  
        
        <hr>
        
        <h3>Genetec   Certifications </h3> 
        <div>
           <span style="font-weight:bold;">Stratocast    </span>   
           <span style="font-weight:bold;">Omnicast    </span>    
        </div>
        
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;"> Hanwha     </span>:
            {{ $Hanwha }}.
        </li> 
        <hr>
        
        <h3>Honeywell Certifications </h3> 
        <div>
           <span style="font-weight:bold;"> Access Control    </span>   
           <span style="font-weight:bold;">CCTV    </span>    
           <span style="font-weight:bold;">Fire    </span>    
           <span style="font-weight:bold;">Intrusion    </span>    
        </div>  

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;"> Leviton     </span>:
            {{ $Leviton }}.
        </li>

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;"> March Networks

</span>:
            {{ $March_Networks }}.
        </li>

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;"> NICET Fire Protection

</span>:
            {{ $NICET_fire_protection }}.
        </li>

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;"> NICET Security Systems     </span>:
            {{ $NICET_Security_Systems }}.
        </li>

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;"> Nortel     </span>:
            {{ $Nortel }}.
        </li>

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;"> Ortronics     </span>:
            {{ $Ortronics }}.
        </li>

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;"> Panduit     </span>:
            {{ $Panduit }}.
        </li>

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;"> SilentKnight     </span>:
            {{ $SilentKnight }}.
        </li>

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;"> Verint     </span>:
            {{ $Verint }}.
        </li>

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;"> Do you hold any other industry standard certificatoins that are not listed above? If so, please list:     </span>:
            {{ $industry_standard_certifications_not_listed }}.
        </li>
        
        <h3>Heavy Equipment Certification Section </h3> 
        <div>
           <span style="font-weight:bold;"> Fork Lift    </span>   
           <span style="font-weight:bold;">Scissor Lift    </span>    
           <span style="font-weight:bold;">Boom Lift        </span>    
           <span style="font-weight:bold;">Crane    </span>    
           <span style="font-weight:bold;">Heavy Rigging        </span>    
        </div> 

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">OSHA 10   </span>:
            {{ $osha_10 }}.
        </li> 
        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;"> OSHA 30   </span>:
            {{ $osha_30 }}.
        </li> 
        
        <h1>EXPERIENCE & COMMENTS </h1> 
        <h3>Customer Experience </h3>  

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Customer Experience   </span>:
            {{ $customer_experience }}.
        </li>  
        <h3 class="fw-bold">Additional Comments   </h3>   

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Any additional information you'd like Telaid to know about your company?   </span>:
            {{ $additional_comments }}.
        </li>   

        <li style="margin-bottom:10px;">
            <span style="font-weight:bold;">Did someone from Telaid refer you? If so, please let us know who.?    </span>:
            {{ $refer_information }}.
        </li>  
        
        <h1>        Partner Master Service Agreement Consent * </h1> 
        <h3>I have read and agree to the terms and conditions above. </h3>  

        <div>
           <span style="font-weight:bold;"> Partner Master Service Agreement Consent  </span>      
        </div> 



 
        

       
 
         
     


    </ul>
  
</body>
</html>