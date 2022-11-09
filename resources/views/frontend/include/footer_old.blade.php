<style>
  .custom-footer-contianer {
    max-width: 1450px;
    padding: 50px;
  }

  /* @media only screen and (max-width: 400px) {
    .labor_btn{
      width: 100px;
    }
    .social_icon{
      font-size: 25px;
    }
  } */
</style>
<div class="custom-footer-contianer  bg-success text-white  rounded mx-auto m-4">
  <footer class=" ">

    <div class="d-flex flex-lg-row flex-md-row flex-sm-column flex-column justify-content-between align-items-center  py-5  ">

      <div class="">
        <a href="" class="btn btn-outline-light labor_btn">Become a Labor</a>
      </div>
      <div class=" mt-lg-0 mt-md-0 mt-sm-4 mt-4">
        <ul class="nav   list-unstyled d-flex">

          <li class="ms-3">
            <a class="link-light text-decoration-none  d-flex align-items-center justify-content-center  " href="#">
              <i class="fa-brands fa-facebook fa-2xl social_icon"></i>
            </a>
          </li>

          <li class="ms-3">
            <a class="link-light text-decoration-none d-flex align-items-center justify-content-center " href="#">
              <i class="fa-brands fa-twitter fa-2xl social_icon"></i>
            </a>
          </li>

          <li class="ms-3">
            <a class="link-light text-decoration-none d-flex align-items-center justify-content-center " href="#">
              <i class="fa-brands fa-instagram fa-2xl social_icon"></i>
            </a>
          </li>

        </ul>
      </div>

    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 mb-5 border-top border-bottom">

      <div class="col mb-3">
        <h5>Why Tech yeah!</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="{{route('why_techyeah')}}" class="nav-link p-0 text-white">Why Tech yeah!</a></li>
          <li class="nav-item mb-2"><a href="{{route('technology_partners')}}" class="nav-link p-0 text-white">Technology Partners</a></li>
          <li class="nav-item mb-2"><a href="{{route('people_process_tools')}}" class="nav-link p-0 text-white">People, Process and Tools</a></li>
          <li class="nav-item mb-2"><a href="{{route('technology_solutions_center')}}" class="nav-link p-0 text-white">Technology Solution Center</a></li>
          <li class="nav-item mb-2"><a href="{{route('case_studies')}}" class="nav-link p-0 text-white">Case Studies</a></li>
          <li class="nav-item mb-2"><a href="{{route('resources')}}" class="nav-link p-0 text-white">Resources</a></li>
        </ul>
      </div>

      <div class="col mb-3">
        <h5>Services</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="{{route('services_overview')}}" class="nav-link p-0 text-white">Services Overview</a></li>
          <li class="nav-item mb-2"><a href="{{route('design_and_engineering')}}" class="nav-link p-0 text-white">Design and Engineering</a></li>
          <li class="nav-item mb-2"><a href="{{route('integration_and_deployment')}}" class="nav-link p-0 text-white">Integration and Deployment</a></li>
          <li class="nav-item mb-2"><a href="{{route('it_support_services')}}" class="nav-link p-0 text-white">IT Support Services</a></li>
        </ul>
      </div>

      <div class="col mb-3">
        <h5>Industries</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="{{route('retail')}}" class="nav-link p-0 text-white">Retail</a></li>
          <li class="nav-item mb-2"><a href="{{route('logistics')}}" class="nav-link p-0 text-white">Logistics</a></li>
          <li class="nav-item mb-2"><a href="{{route('finance')}}" class="nav-link p-0 text-white">Finance</a></li>
          <li class="nav-item mb-2"><a href="{{route('healthcare')}}" class="nav-link p-0 text-white">Healthcare</a></li>
          <li class="nav-item mb-2"><a href="{{route('qsr')}}" class="nav-link p-0 text-white">QSR</a></li>
          <li class="nav-item mb-2"><a href="{{route('grocery')}}" class="nav-link p-0 text-white">Grocery</a></li>
          <li class="nav-item mb-2"><a href="{{route('convenience')}}" class="nav-link p-0 text-white">Convenience</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Cellular Optimization</a></li>
        </ul>
      </div>

      <div class="col mb-3">
        <h5>Solutions</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="{{route('solutions_overview')}}" class="nav-link p-0 text-white">Solutions Overview</a></li>
          <li class="nav-item mb-2"><a href="{{route('retail_automation')}}"" class=" nav-link p-0 text-white">Retail Automation</a></li>
          <li class="nav-item mb-2"><a href="{{route('technology_deployments')}}" class="nav-link p-0 text-white">Technology Deployments</a></li>
          <li class="nav-item mb-2"><a href="{{route('technology_deployments')}}" class="nav-link p-0 text-white">Technology Lifecycle Solutions</a></li>
          <li class="nav-item mb-2"><a href="{{route('physical_security')}}" class="nav-link p-0 text-white">Physical Security</a></li>
          <li class="nav-item mb-2"><a href="{{route('wireless')}}" class="nav-link p-0 text-white">Wireless</a></li>
          <li class="nav-item mb-2"><a href="{{route('interactive_solutions')}}" class="nav-link p-0 text-white">Interactive Solutions</a></li>
          <li class="nav-item mb-2"><a href="{{route('pos')}}" class="nav-link p-0 text-white">Point of Sale (POS)</a></li>
        </ul>
      </div>

      <div class="col mb-3">
        <h5>Company</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Company Overview</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Labor Partners</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Careers</a></li>
          <li class="nav-item mb-2"><a href="{{route('contact_us')}}" class="nav-link p-0 text-white">Contact Us</a></li>
        </ul>
      </div>
    </div>

    <div class="  mb-3">
      <p class="text-center">Developed BY <a class="link-light text-decoration-none" href="https://codetreebd.com/" target="_blank">CODETREEBD</a></p>
    </div>

  </footer>
</div>

<script> 
//   const page_links = document.querySelectorAll(".dropdown-item")
//   const breadcrumb_center = document.querySelectorAll(".breadcrumb-center")
//   const breadcrumb_last = document.querySelectorAll(".breadcrumb-last")
//   const main_breadcrumb = document.querySelector(".breadcrumb");
//   var d_breadcrumb = ``;

//   for (var i = 0; i < page_links.length; i++) {
//     page_links[i].addEventListener('click', function() {

//       let page_links_parent_innerText = this.parentElement.parentElement.parentElement.children[0].innerText;
//       let page_links_innerText = this.innerText;
//       let page_links_href = this.href;



//       console.log("Parent InnerText = " + page_links_parent_innerText);
//       console.log("page_links_innerText  = " + page_links_innerText);
//       console.log("page_links_href  = " + page_links_href);


//       d_breadcrumb += `
//                   <li class="breadcrumb-item">
//                         <a href="/" class="text-decoration-none">
//                           <i class="fa-solid fa-house"></i> Home
//                         </a>
//                       </li>
//                     <li class="breadcrumb-item  breadcrumb-center" aria-current="page"> 
//                           ${page_links_parent_innerText}
//                      </li>
       
//                  <li class="breadcrumb-item  breadcrumb-last" aria-current="page">
//                    <a href="${page_links_href}" class="text-decoration-none">
//                    ${page_links_innerText}
//                    </a>
//                  </li>` 

//       localStorage.setItem("breadcrumb_cookie", d_breadcrumb);

//       main_breadcrumb.innerHTML= localStorage.getItem("breadcrumb_cookie");

//     }, false);
   
   
//     if (localStorage.hasOwnProperty('breadcrumb_cookie')) {
//       main_breadcrumb.innerHTML = localStorage.getItem("breadcrumb_cookie");
// } 
//   }
</script>

<script>
   const main_breadcrumb = document.querySelector(".breadcrumb");
        const page_links = document.querySelectorAll("a");
        var d_breadcrumb = ``;

        for (var i = 0; i < page_links.length; i++) { 
          page_links[i].addEventListener('click', function() { 
            var page_href = this.href; 
            var page_href_removed = this.href.split('_').join(' '); 

            var myArray = page_href_removed.split("/");  
            var link_center_part = myArray[3];
            var link_last_part = myArray[4]; 
            if (myArray.length ==5) {
              
              d_breadcrumb += `
                              <li class="breadcrumb-item">
                                    <a href="${page_href}" class="text-decoration-none">
                                      <i class="fa-solid fa-house"></i> Home
                                    </a>
                                  </li>
                                <li class="breadcrumb-item  breadcrumb-center" aria-current="page"> 
                                      ${link_center_part}
                                </li>
                                                
                                <li class="breadcrumb-item  breadcrumb-last" aria-current="page">
                                    <a href="${page_href}" class="text-decoration-none">
                                      ${link_last_part}
                                    </a>
                              </li>
                    `
            }else if(myArray.length ==4){
                 
              d_breadcrumb += `
                              <li class="breadcrumb-item">
                                    <a href="${page_href}" class="text-decoration-none">
                                      <i class="fa-solid fa-house"></i> Home
                                    </a>
                                  </li>
                               
                    `
            }else{
              d_breadcrumb += `
                     <li class="breadcrumb-item">
                                     <a href="${page_href}" class="text-decoration-none">
                                      <i class="fa-solid fa-house"></i> Home
                                    </a>
                                  </li> 
                                                
                                <li class="breadcrumb-item  breadcrumb-last" aria-current="page">
                                    <a href="${page_href}" class="text-decoration-none">
                                      ${link_last_part}
                                    </a>
                              </li>
                               
                    `
            }
                 localStorage.setItem("breadcrumb_cookie", d_breadcrumb); 
                  main_breadcrumb.innerHTML= localStorage.getItem("breadcrumb_cookie"); 

           }
           
           );
           
          }
          if (localStorage.hasOwnProperty('breadcrumb_cookie')) {
      main_breadcrumb.innerHTML = localStorage.getItem("breadcrumb_cookie");
} 
          
     

</script>
 