<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});


Route::get('/index',[FrontendController::class, 'index'])->name('index'); 
Route::get('/contact_us',[FrontendController::class, 'contact_us'])->name('contact_us'); 
Route::get('/labor_partner',[FrontendController::class, 'labor_partner'])->name('labor_partner'); 

// Why Tech Yeah Section
Route::get('Why_Tech_Yeah!/why_techyeah',[FrontendController::class, 'why_techyeah'])->name('why_techyeah'); 
Route::get('Why_Tech_Yeah!/technology_partners',[FrontendController::class, 'technology_partners'])->name('technology_partners'); 
Route::get('Why_Tech_Yeah!/people_process_tools',[FrontendController::class, 'people_process_tools'])->name('people_process_tools'); 
Route::get('Why_Tech_Yeah!/technology_solutions_center',[FrontendController::class, 'technology_solutions_center'])->name('technology_solutions_center'); 
Route::get('Why_Tech_Yeah!/case_studies',[FrontendController::class, 'case_studies'])->name('case_studies'); 
Route::get('Why_Tech_Yeah!/resources',[FrontendController::class, 'resources'])->name('resources'); 

// Service Section
Route::get('Service/services_overview',[FrontendController::class, 'services_overview'])->name('services_overview'); 
Route::get('Service/design_and_engineering',[FrontendController::class, 'design_and_engineering'])->name('design_and_engineering'); 
Route::get('Service/integration_and_deployment',[FrontendController::class, 'integration_and_deployment'])->name('integration_and_deployment'); 
Route::get('Service/it_support_services',[FrontendController::class, 'it_support_services'])->name('it_support_services'); 

// Industries Section
Route::get('industries',[FrontendController::class, 'industries'])->name('industries'); 
Route::get('Industries/retail',[FrontendController::class, 'retail'])->name('retail'); 
Route::get('Industries/logistics',[FrontendController::class, 'logistics'])->name('logistics'); 
Route::get('Industries/finance',[FrontendController::class, 'finance'])->name('finance'); 
Route::get('Industries/healthcare',[FrontendController::class, 'healthcare'])->name('healthcare'); 
Route::get('Industries/qsr',[FrontendController::class, 'qsr'])->name('qsr'); 
Route::get('Industries/grocery',[FrontendController::class, 'grocery'])->name('grocery'); 
Route::get('Industries/convenience',[FrontendController::class, 'convenience'])->name('convenience'); 

// Solutions Section
Route::get('Solutions/solutions_overview',[FrontendController::class, 'solutions_overview'])->name('solutions_overview'); 
Route::get('Solutions/retail_automation',[FrontendController::class, 'retail_automation'])->name('retail_automation'); 
Route::get('Solutions/technology_deployments',[FrontendController::class, 'technology_deployments'])->name('technology_deployments'); 
Route::get('Solutions/technology_lifecycle_solutions',[FrontendController::class, 'technology_lifecycle_solutions'])->name('technology_lifecycle_solutions'); 
Route::get('Solutions/physical_security',[FrontendController::class, 'physical_security'])->name('physical_security'); 
Route::get('Solutions/wireless',[FrontendController::class, 'wireless'])->name('wireless'); 
Route::get('Solutions/interactive_solutions',[FrontendController::class, 'interactive_solutions'])->name('interactive_solutions'); 
Route::get('Solutions/pos',[FrontendController::class, 'pos'])->name('pos');

Route::post('/contact_us/mail',[BackendController::class, 'mail_contact_us'])->name('contact');
Route::post('/labor_partner/add',[BackendController::class, 'labor_partner_add'])->name('labor_partner_add');





