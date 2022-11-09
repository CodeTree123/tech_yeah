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
          <a  href="{{route('contact_us')}}" class="text-decoration-none">  Contact Us
          </a>
      </li>  
    </ol> 
    </div>
</section>
    <section class="container ">
        <div class="row rounded shadow p-0 my-4">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 ps-0 pe-lg-3 pe-md-3 pe-sm-0 pe-0" >
                <div class="contact_form_image">   
                     <img src="{{asset('assets/media/img/contact_form3.jpg')}}" class="img-fluid rounded-start" style="height: 100%;width: 100%;" > 
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 py-3">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            <form action="{{route('contact')}}" method="post" class="row g-3">
                @csrf
                    <div class="form-title">
                        <h2>Tell us a little about yourself, and we'll be in touch right away.</h2>
                    </div>
                    <div class="col-12"> 
                        <input type="text" class="form-control" id="fName" placeholder="First Name*" name="fName" required>
                    </div>    
                    <div class="col-12"> 
                        <input type="text" class="form-control" id="lName" placeholder="Last Name*" name="lName" required>
                    </div>    
                    <div class="col-12"> 
                        <input type="text" class="form-control" id="jTitle" placeholder="Job Title*" name="jTitle" required>
                    </div>    
                      
                    <div class="col-12"> 
                        <select id="inputState" class="form-select" name="industry">
                        <option selected class="text-muted">- Please Select Your Industry -</option>
                        <option>Retail</option>
                        <option>Specialty Retail</option>
                        <option>Healthcare</option>
                        <option>Logistics</option>
                        <option>Financial</option>
                        <option>Grocery</option>
                        <option>QSR</option>
                        <option>Restaurant</option>
                        <option>Entertainment</option>
                        <option>Other</option>
                        </select>
                    </div> 
                    <div class="col-12"> 
                        <input type="text" class="form-control" id="email" placeholder="Email (required - business email address only)*" name="email" required>
                    </div>  
                    <div class="col-12">
                        <label for="inputState" class="form-label">State</label>
                        <select id="inputState" class="form-select" name="work_cat">
                            <option selected>How will we work together?*</option>
                            <option>New Client / Current Client </option>
                            <option>Technology Provider</option>
                            <option>Labor / Technician Partner</option>
                            <option>Job Seeker</option>
                            <option>Other</option>
                        </select>
                    </div>  
                    
                    <div class="col-12"> 
                         <textarea class="form-control" id="message" placeholder="Message" name="message" required></textarea>
                    </div>   

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Contact Me</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
 
@endsection