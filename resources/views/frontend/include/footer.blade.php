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
<div class="custom-footer-contianer  text-white  rounded mx-auto m-4">
  <footer class=" ">

    <div class="row py-5  justify-content-center">

      <!-- <div class="col-lg-3 col-md-12 col-sm-12 col-12 text-center my-3">
        <a href="" class="btn btn-outline-light labor_btn">Become a Labor Partner</a>
      </div> -->
      <!-- <div class=" mt-lg-0 mt-md-0 mt-sm-4 mt-4">
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
      </div> -->
      <div class="col-lg-9 col-md-12 col-sm-12 col-12">
      <ul class="d-flex flex-lg-row flex-md-row flex-sm-column flex-column justify-content-lg-between justify-content-md-between ">
          <li class=" mb-2"><a href="/" class="nav-link p-0 text-white">Why Tech Yeah</a></li>
          <li class=" mb-2"><a href="{{route('services_overview')}}" class="nav-link p-0 text-white">Services Overview</a></li>
          <li class=" mb-2"><a href="{{route('industries')}}" class="nav-link p-0 text-white">Industries</a></li>
          <!-- <li class=" mb-2"><a href="{{route('solutions_overview')}}" class="nav-link p-0 text-white">Solutions Overview</a></li> -->
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
//    const main_breadcrumb = document.querySelector(".breadcrumb");
//         const page_links = document.querySelectorAll("a");
//         var d_breadcrumb = ``;

//         for (var i = 0; i < page_links.length; i++) { 
//           page_links[i].addEventListener('click', function() { 
//             var page_href = this.href; 
//             var page_href_removed = this.href.split('_').join(' '); 

//             var myArray = page_href_removed.split("/");  
//             var link_center_part = myArray[3];
//             var link_last_part = myArray[4]; 
//             if (myArray.length ==5) {
              
//               d_breadcrumb += `
//                               <li class="breadcrumb-item">
//                                     <a href="${page_href}" class="text-decoration-none">
//                                       <i class="fa-solid fa-house"></i> Home
//                                     </a>
//                                   </li>
//                                 <li class="breadcrumb-item  breadcrumb-center" aria-current="page"> 
//                                       ${link_center_part}
//                                 </li>
                                                
//                                 <li class="breadcrumb-item  breadcrumb-last" aria-current="page">
//                                     <a href="${page_href}" class="text-decoration-none">
//                                       ${link_last_part}
//                                     </a>
//                               </li>
//                     `
//             }else if(myArray.length ==4){
                 
//               d_breadcrumb += `
//                               <li class="breadcrumb-item">
//                                     <a href="${page_href}" class="text-decoration-none">
//                                       <i class="fa-solid fa-house"></i> Home
//                                     </a>
//                                   </li>
                               
//                     `
//             }else{
//               d_breadcrumb += `
//                      <li class="breadcrumb-item">
//                                      <a href="${page_href}" class="text-decoration-none">
//                                       <i class="fa-solid fa-house"></i> Home
//                                     </a>
//                                   </li> 
                                                
//                                 <li class="breadcrumb-item  breadcrumb-last" aria-current="page">
//                                     <a href="${page_href}" class="text-decoration-none">
//                                       ${link_last_part}
//                                     </a>
//                               </li>
                               
//                     `
//             }
//                  localStorage.setItem("breadcrumb_cookie", d_breadcrumb); 
//                   main_breadcrumb.innerHTML= localStorage.getItem("breadcrumb_cookie"); 

//            }
           
//            );
           
//           }
//           if (localStorage.hasOwnProperty('breadcrumb_cookie')) {
//       main_breadcrumb.innerHTML = localStorage.getItem("breadcrumb_cookie");
// }  
</script>
 