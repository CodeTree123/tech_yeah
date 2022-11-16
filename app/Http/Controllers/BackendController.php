<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactUsMail;
use PDF;
use Storage;

class BackendController extends Controller
{
    public function mail_contact_us(Request $request){
        $mailData = [
            'title' => 'Contact Us',
            'fName' => $request->fName,
            'lName' => $request->lName,
            'jTitle' => $request->jTitle,
            'industry' => $request->industry,
            'email' => $request->email,
            'work_cat' => $request->work_cat,
            'message' => $request->message,
        ];
        // dd($request->all(),$mailData);
         
        Mail::to('info@techyeahinc.com')->send(new ContactUsMail($mailData));
        return back()->with('success','Email is sent successfully.');
    }

    public function labor_partner_add(Request $request){

        $address = $request->fullAddress." ".$request->addressLine2.",".$request->city.",".$request->state_province_region.",".$request->zip_postal_code.",".$request->country.".";

        $shopping_address = $request->shipping_Address." ".$request->shipping_AddressLine2.",".$request->shipping_City.",".$request->shipping_State_province_region.",".$request->shipping_zip_postal_code.",".$request->shipping_country.".";

        // $companyName = $request->companyName;
        // $dba = $request->dba;
        // $address = $address;
        // $shopping_address = $shopping_address;

        $data = [
            'title' =>$request->companyName.'.pdf',
            'companyName' => $request->companyName,
            'dba' => $request->dba,
            'address' => $address,
            'shopping_address' => $shopping_address,
            'company_contact_name' => $request->company_contact_name,
            'company_main_phone' => $request->company_main_phone,
            'emergency_phone' => $request->emergency_phone,
            'mobile_default_phone' => $request->mobile_default_phone,
            'main_email' => $request->main_email,
            'po_email' => $request->po_email,
            'shipping_status_alert_email' => $request->shipping_status_alert_email,
            'shipping_complience_status_alert_email' => $request->shipping_complience_status_alert_email,
            'shipping_portal_notification_email' => $request->shipping_portal_notification_email,
            'shipping_quick_pay_email' => $request->shipping_quick_pay_email,
            'shipping_banking_eft_contact_name' => $request->shipping_banking_eft_contact_name,
            'shipping_banking_eft_contact_phone' => $request->shipping_banking_eft_contact_phone,
            'shipping_banking_eft_contact_email' => $request->shipping_banking_eft_contact_email,
            'is_union_shop' => $request->is_union_shop,
            'union_affiliation' => $request->union_affiliation,
            'hearing_source' => $request->hearing_source,
            'does_not_use_sub_contractors' => $request->does_not_use_sub_contractors,
            'number_of_lead_technician' => $request->number_of_lead_technician,
            'number_of_level_one_technician' => $request->number_of_level_one_technician,
            'techs_go_to_site_with_smartphone' => $request->techs_go_to_site_with_smartphone,
            'four_hour_response' => $request->four_hour_response,
            'two_hour_response' => $request->two_hour_response,
            'night_holiday_weekend_work' => $request->night_holiday_weekend_work,
            'willing_to_travel' => $request->willing_to_travel,
            'store_capacity' => $request->store_capacity,
            'takes_flate_rate_project' => $request->takes_flate_rate_project,
            'shipping_labor_travel_rate' => $request->shipping_labor_travel_rate,
            'security_travel_rate' => $request->security_travel_rate,
            'electrical_travel_rate' => $request->electrical_travel_rate,
            'retail_scale_calibration_travel_rate' => $request->retail_scale_calibration_travel_rate,
            'service_call_payment' => $request->service_call_payment,
            'service_call_rate' => $request->service_call_rate,
            'labor_first_shift' => $request->labor_first_shift,
            'security_first_shift' => $request->security_first_shift,
            'electrical_first_shift' => $request->electrical_first_shift,
            'retail_scale_calibration_first_shift' => $request->retail_scale_calibration_first_shift,
            'facilities_maintenance_first_shift' => $request->facilities_maintenance_first_shift,
            'labor_second_shift' => $request->labor_second_shift,
            'security_second_shift' => $request->security_second_shift,
            'electrical_second_shift' => $request->electrical_second_shift,
            'retail_scale_calibration_second_shift' => $request->retail_scale_calibration_second_shift,
            'facilities_maintenance_second_shift' => $request->facilities_maintenance_second_shift,
            'labor_ot_rate' => $request->labor_ot_rate,
            'security_ot_rate' => $request->security_ot_rate,
            'electrical_ot_rate' => $request->electrical_ot_rate,
            'retail_scale_calibration_ot_rate' => $request->retail_scale_calibration_ot_rate,
            'facilities_maintenance_ot_rate' => $request->facilities_maintenance_ot_rate,
            
            'labor_third_shift' => $request->labor_third_shift,
            'security_third_shift' => $request->security_third_shift,
            'electrical_third_shift' => $request->electrical_third_shift,
            'retail_scale_calibration_third_shift' => $request->retail_scale_calibration_third_shift,
            'facilities_maintenance_third_shift' => $request->facilities_maintenance_third_shift,

            'labor_Saturday' => $request->labor_Saturday,
            'security_Saturday' => $request->security_Saturday,
            'electrical_Saturday' => $request->electrical_Saturday,
            'retail_scale_calibration_Saturday' => $request->retail_scale_calibration_Saturday,
            'facilities_maintenance_Saturday' => $request->facilities_maintenance_Saturday,

            'labor_Sunday' => $request->labor_Sunday,
            'security_Sunday' => $request->security_Sunday,
            'electrical_Sunday' => $request->electrical_Sunday,
            'retail_scale_calibration_Sunday' => $request->retail_scale_calibration_Sunday,
            'facilities_maintenance_Sunday' => $request->facilities_maintenance_Sunday,

            'labor_Holidays' => $request->labor_Holidays,
            'security_Holidays' => $request->security_Holidays,
            'electrical_Holidays' => $request->electrical_Holidays,
            'retail_scale_calibration_Holidays' => $request->retail_scale_calibration_Holidays,
            'facilities_maintenance_Holidays' => $request->facilities_maintenance_Holidays,

            'labor_4hr_Response' => $request->labor_4hr_Response,
            'security_4hr_Response' => $request->security_4hr_Response,
            'electrical_4hr_Response' => $request->electrical_4hr_Response,
            'retail_scale_calibration_4hr_Response' => $request->retail_scale_calibration_4hr_Response,
            'facilities_maintenance_4hr_Response' => $request->facilities_maintenance_4hr_Response,

            'labor_2hr_Response' => $request->labor_2hr_Response,
            'security_2hr_Response' => $request->security_2hr_Response,
            'electrical_2hr_Response' => $request->electrical_2hr_Response,
            'retail_scale_calibration_2hr_Response' => $request->retail_scale_calibration_2hr_Response,
            'facilities_maintenance_2hr_Response' => $request->facilities_maintenance_2hr_Response,

            // Checkbox Skip
            // 'projects' => $request->projects,
            // 'rollouts' => $request->rollouts,
            // 'service' => $request->service,
 

            // ******************
            'structured_cabling' => $request->structured_cabling,
            'test_result_copper' => $request->test_result_copper,
            'copper_testing_equipment_brand' => $request->copper_testing_equipment_brand,
            'rigit_conduit_experience' => $request->rigit_conduit_experience,
            'low_voltage_contractor_licence' => $request->low_voltage_contractor_licence,
            'structured_cabling_license_info' => $request->structured_cabling_license_info,
            'fiber_optics' => $request->fiber_optics,
            'fiber_optics_test_result' => $request->fiber_optics_test_result,
            'fiber_optics_terminate_and_test' => $request->fiber_optics_terminate_and_test,
            'fiber_testing_equipment_brand' => $request->fiber_testing_equipment_brand,
            'fusion_splice' => $request->fusion_splice,
            'fusion_splicer_brand' => $request->fusion_splicer_brand,
            'fiber_optics_license_info' => $request->fiber_optics_license_info,  
            // ***************************

            // ******************
            'voice_voip' => $request->voice_voip,  
            // ***************************

            // ******************
            'can_crew_read_blueprint' => $request->can_crew_read_blueprint,  
            'security_cctv' => $request->security_cctv,  
            // ***************************

            // security_cctv_checkbox_wrapper checkbox

            // ******************
            'state_cctv_license' => $request->state_cctv_license,  
            'cctv_license_info' => $request->cctv_license_info,  
            'fire_alarm' => $request->fire_alarm,  
            'basic_metal_work' => $request->basic_metal_work,  
            'conduit_installation' => $request->conduit_installation,  
            'basic_network_capability_lapto_fire_installs' => $request->basic_network_capability_lapto_fire_installs,  
            'rps_version' => $request->rps_version,  
            'experience_with_conventional_fire_alarm' => $request->experience_with_conventional_fire_alarm,  
            'intrusion_burglar_alarms' => $request->intrusion_burglar_alarms,  
            'network_capability_with_laptop_intrusion_installs' => $request->network_capability_with_laptop_intrusion_installs,  
            'state_burglar_alarm_license' => $request->state_burglar_alarm_license,  
            'intrusion_burglar_alarms_license_info' => $request->intrusion_burglar_alarms_license_info,  
            'access_control' => $request->access_control,  
            'network_capability_with_laptop_access_control_installs' => $request->network_capability_with_laptop_access_control_installs, 
             
            // access_control_wrapper checkbox

            'state_access_control_license' => $request->state_access_control_license,  
            'state_access_control_license_text' => $request->state_access_control_license_text,  
            // ***************************

            'licensed_electrician' => $request->licensed_electrician,  
            'bending_conduit_experience' => $request->bending_conduit_experience,  
            'sainless_steel_conduit_experience' => $request->sainless_steel_conduit_experience,  
            'state_electrical_license' => $request->state_electrical_license,  
            'structured_cabling_license_info' => $request->structured_cabling_license_info,   
            // ***************************
            'wireless_installls' => $request->wireless_installls,  
            'onsite_wireless_site_surveys' => $request->onsite_wireless_site_surveys,  
            'network_hardware_installs' => $request->network_hardware_installs,  
            'experience_installing_mdf_racks' => $request->experience_installing_mdf_racks,  
            // ***************************
            'general_contractor_license' => $request->general_contractor_license,  
            'general_contractor_license_info' => $request->general_contractor_license_info,  
            'mechanical_contractor_license' => $request->mechanical_contractor_license,  
            'mechanical_contractor_license_info' => $request->mechanical_contractor_license_info,  
            // ***************************
            'pull_digital_signage_permits' => $request->pull_digital_signage_permits,  
            'license_for_signage_installs' => $request->license_for_signage_installs,  
            'signage_license_info' => $request->signage_license_info,   
            // ***************************
            'offering_it_services' => $request->offering_it_services,   
            // ***************************
            'retail_scale_calibration_service' => $request->retail_scale_calibration_service,   
            'retail_scale_calibration_service_info' => $request->retail_scale_calibration_service_info,   
            // ***************************
            'sound_masking_system' => $request->sound_masking_system,   
            'engineering_service_for_sound_masking_system' => $request->engineering_service_for_sound_masking_system,   
            'retail_scale_calibration_service_info' => $request->retail_scale_calibration_service_info,   
     


            // retail_scale_calibration_service_info NOT WORKING
        ];
        // dd($request->all(),$data);

        $pdf = PDF::loadView('labour_pdf', $data);
        $pdf_name = $request->companyName."_".date('mdY').'.pdf';
        return $pdf->stream($pdf_name);
        // $content = $pdf->download()->getOriginalContent();
        // Storage::put('labour_PDF/'.$pdf_name,$content);

        return back();

        // return view('labour_pdf',compact('companyName','dba','address','shopping_address'));

        // return $pdf->download($pdf_name);
        // dd($request->all(),$address,$data,$pdf_name);
    }
}

