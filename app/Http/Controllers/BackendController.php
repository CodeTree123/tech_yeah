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
        ];
        $pdf = PDF::loadView('labour_pdf', $data);
        $pdf_name = $request->companyName."_".date('mdY').'.pdf';
        // return $pdf->stream($pdf_name);
        $content = $pdf->download()->getOriginalContent();
        Storage::put('labour_PDF/'.$pdf_name,$content);

        return back();

        // return view('labour_pdf',compact('companyName','dba','address','shopping_address'));

        // return $pdf->download($pdf_name);
        // dd($request->all(),$address,$data,$pdf_name);
    }
}

