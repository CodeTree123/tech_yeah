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
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">Are you a union shop?  </span>: {{ $is_union_shop }}.</li>
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
    </ul>
  
</body>
</html>