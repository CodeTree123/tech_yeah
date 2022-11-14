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
         
     


    </ul>
  
</body>
</html>