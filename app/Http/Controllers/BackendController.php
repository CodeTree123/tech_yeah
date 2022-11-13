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

