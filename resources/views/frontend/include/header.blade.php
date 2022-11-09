<style>
  .navbar .navbar-nav .nav-link {
    color: #000000;
    font-size: 1.1em;
  }

  .navbar .navbar-nav .nav-link:hover {
    color: #808080;
  }

  @media only screen and (min-width: 960px) {
    .dropdown:hover .dropdown-menu {
      display: block;
      margin-top: 0;
    }

    .dropdown .dropdown-menu {
      display: none;
    }

    .dropdown:hover .dropdown-toggle::after {
      border-bottom: 0.3em solid;
      border-top: 0;
    }

    .dropdown-menu-arrow {
      top: -25px;
      left: 50%;
      width: 0;
      height: 0;
      position: relative;
    }

    .dropdown-menu-arrow:before,
    .dropdown-menu-arrow:after {
      content: "";
      position: absolute;
      display: block;
      width: 0;
      height: 0;
      border-width: 7px 8px;
      border-style: solid;
      border-color: transparent;
      z-index: 1001;
    }

    .dropdown-menu-arrow:after {
      bottom: -18px;
      right: -8px;
      border-bottom-color: #fff;
    }

    .dropdown-menu-arrow:before {
      bottom: -17px;
      right: -8px;
      border-bottom-color: rgba(0, 0, 0, .15);
    }
  }

  @media screen and (max-width: 991px) {
    .dropdown-toggle.show::after {
      border-top: 0;
      border-bottom: 0.3em solid;
    }

  }

  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }


  .nav-scroller {
    position: relative;
    z-index: 2;
    height: 2.75rem;
    overflow-y: hidden;
  }

  .nav-scroller .nav {
    display: flex;
    flex-wrap: nowrap;
    padding-bottom: 1rem;
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
  }
</style>
<header class="border-bottom shadow">
  <nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="Fifth navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="{{asset('assets/media/logo/tech_yeah_logo.png')}}" alt="tech_yeah_logo" title="tech_yeah_logo" class="img-fluid logo " />
      </a>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample05">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link "  href="{{route('why_techyeah')}}">Why Tech Yeah</a>
            <!-- <ul class="dropdown-menu shadow border border-0">
              <li><a class="dropdown-item link-danger" href="{{route('why_techyeah')}}">Why Tech Yeah!</a></li> 
              <li><a class="dropdown-item" href="{{route('technology_partners')}}">Technology Partners </a></li>
              <li><a class="dropdown-item" href="{{route('people_process_tools')}}">People, Process and Tools  </a></li>
              <li><a class="dropdown-item" href="{{route('technology_solutions_center')}}">Technology Solution Center  </a></li>
              <li><a class="dropdown-item" href="{{route('case_studies')}}">Case Studies  </a></li>
              <li><a class="dropdown-item" href="{{route('resources')}}">Resources  </a></li>
            </ul> -->
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link  " href="{{route('services_overview')}}"> Services Overview</a>
            <!-- <ul class="dropdown-menu shadow border border-0">
              <li><a class="dropdown-item" href="{{route('services_overview')}}">Services Overview</a></li> 
              <li><a class="dropdown-item" href="{{route('design_and_engineering')}}">Design and Engineering </a></li>
              <li><a class="dropdown-item" href="{{route('integration_and_deployment')}}">Integration and Deployment  </a></li>
              <li><a class="dropdown-item" href="{{route('it_support_services')}}">IT Support Services  </a></li> 
            </ul> -->
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link  " href="{{route('industries')}}"> Industries</a>
            <!-- <ul class="dropdown-menu shadow border border-0">
              <li><a class="dropdown-item" href="{{route('retail')}}">Retail</a></li> 
              <li><a class="dropdown-item" href="{{route('logistics')}}">Logistics</a></li> 
              <li><a class="dropdown-item" href="{{route('finance')}}">Finance</a></li> 
              <li><a class="dropdown-item" href="{{route('healthcare')}}">Healthcare</a></li> 
              <li><a class="dropdown-item" href="{{route('qsr')}}">QSR</a></li> 
              <li><a class="dropdown-item" href="{{route('grocery')}}">Grocery</a></li> 
              <li><a class="dropdown-item" href="{{route('convenience')}}">Convenience</a></li> 
              <li><a class="dropdown-item link-danger" href="#">Cellular Optimization</a></li> 
            </ul> -->
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link " href="{{route('solutions_overview')}}"> Solutions Overvew</a>
            <ul class="dropdown-menu shadow border border-0">
              <li><a class="dropdown-item" href="{{route('solutions_overview')}}">Solutions Overview</a></li> 
              <li><a class="dropdown-item " href="{{route('retail_automation')}}">Retail Automation</a></li> 
              <li><a class="dropdown-item" href="{{route('technology_deployments')}}">Technology Deployments</a></li> 
              <li><a class="dropdown-item" href="{{route('technology_lifecycle_solutions')}}">Technology Lifecycle Solutions</a></li> 
              <li><a class="dropdown-item " href="{{route('physical_security')}}">Physical Security</a></li> 
              <li><a class="dropdown-item " href="{{route('wireless')}}">Wireless</a></li> 
              <li><a class="dropdown-item " href="{{route('interactive_solutions')}}">Interactive Solutions</a></li> 
              <li><a class="dropdown-item " href="{{route('pos')}}">Point of Sale (POS)</a></li> 
            </ul>
          </li> -->
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">		Company</a>
            <ul class="dropdown-menu shadow border border-0">
              <li><a class="dropdown-item link-danger" href="#">Company Overview</a></li> 
              <li><a class="dropdown-item link-danger" href="#">Labor Partners</a></li> 
              <li><a class="dropdown-item link-danger" href="#">Careers </a></li>  
              <li><a class="dropdown-item " href="{{route('contact_us')}}">Contact Us </a></li>  
            </ul>
          </li> -->
        </ul>
        <div>
          <a href="{{route('contact_us')}}" class="btn btn-outline-primary">Contact Us</a>
          <!-- <a href="{{route('labor_partner')}}" class="btn btn-outline-primary">Become a Labor</a> -->
        </div>
      </div>
    </div>
  </nav>
  

</header>