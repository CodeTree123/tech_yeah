<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index'); 
    }
    public function contact_us(){
        return view('frontend.contact_us'); 
    }
    public function labor_partner(){
        return view('frontend.labor_partner'); 
    }
    
    // Why Tech Yeah Section
    public function why_techyeah(){
        return view('frontend.why_techyeah'); 
    }
    public function technology_partners(){
        return view('frontend.technology_partners'); 
    }
    public function people_process_tools (){
        return view('frontend.people_process_tools'); 
    }
    public function technology_solutions_center (){
        return view('frontend.technology_solutions_center'); 
    }
    public function case_studies (){
        return view('frontend.case_studies'); 
    }
    public function resources (){
        return view('frontend.resources'); 
    }

    // Service Section 
    public function services_overview (){
        return view('frontend.services_overview'); 
    }
    public function design_and_engineering (){
        return view('frontend.design_and_engineering'); 
    }
    public function integration_and_deployment (){
        return view('frontend.integration_and_deployment'); 
    }
    public function it_support_services (){
        return view('frontend.it_support_services'); 
    }

    // Industries Section
    public function industries (){
        return view('frontend.industries'); 
    }
    public function retail (){
        return view('frontend.retail'); 
    }
    public function logistics (){
        return view('frontend.logistics'); 
    }
    public function finance (){
        return view('frontend.finance'); 
    }
    public function healthcare (){
        return view('frontend.healthcare'); 
    }
    public function qsr (){
        return view('frontend.qsr'); 
    }
    public function grocery (){
        return view('frontend.grocery'); 
    }
    public function convenience  (){
        return view('frontend.convenience '); 
    }
    
    // Solutions Section
    public function solutions_overview  (){
        return view('frontend.solutions_overview'); 
    }
    public function retail_automation  (){
        return view('frontend.retail_automation'); 
    }
    public function technology_deployments  (){
        return view('frontend.technology_deployments'); 
    }
    public function technology_lifecycle_solutions  (){
        return view('frontend.technology_lifecycle_solutions'); 
    }
    public function physical_security  (){
        return view('frontend.physical_security'); 
    }
    public function wireless  (){
        return view('frontend.wireless'); 
    }
    public function interactive_solutions  (){
        return view('frontend.interactive_solutions'); 
    }
    public function pos  (){
        return view('frontend.pos'); 
    }
    
}
