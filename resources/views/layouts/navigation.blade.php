<nav class="navbar fixed-top navbar-expand-lg navbar-light justify-content-center bg-turqoise">
    <div class="container">
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
        <div class="header d-flex justify-content-between">
            <div>
                <button class="navbar-toggler text-sm" type="button" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <i class="fas fa-bars" style="color:#fff; font-size:22px;"></i>
                </button>
            </div>
            <div class="custom-toggler">
                <a class="navbar-toggler navbar-brand" href="{{route('home')}}"><img src="https://www.homage.com.my/wp-content/themes/homage/img/logo-full.svg" alt="Logo" class="img-fluid logo-image"></a>
            </div>
            <div class="custom-toggler navbar-content">
                <a class="navbar-toggler btn rounded text-light me-2 "><i class="uil uil-phone px-2 text-light text-end text-lg rounded-circle"
                    style="
                    background-color: #f8b63c;
                    padding: 5px;"></i></a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="row w-100 mt-2">
                <div class="col-12">
                    <div class="d-flex flex-row navbar-content" style="
                    border-bottom: solid 0.1px #6dcbd2;
                    padding-bottom: 10px;">
                        <a class="p-1 flex-grow-1" href="{{route('home')}}"><img src="https://www.homage.com.my/wp-content/themes/homage/img/logo-full.svg" alt="Logo" class="img-fluid logo-image"></a>
                        <strong class="p-2 text-underline me-2 text-sm"><a href="https://www.homage.com.my/borneo/">We've just launched in Borneo! Find out more</a></strong>
                        <a type="submit" class="btn rounded-pill text-light me-2 text-sm"><i class="uil uil-phone px-2 text-light"></i>{{__('016 299 2188') }}</a>
                        <a type="submit" class="btn btn-light rounded-pill text-turqouise me-2 text-sm">{{__('Get Care Now') }}</a>
                        <div class="dropdown p-2">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownFlag" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="flag-lang" src="https://www.homage.com.my/wp-content/themes/homage/img/flag-my.svg" alt="my">
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownFlag">
                                <li>
                                    <a class="dropdown-item" href="#"><img src="https://www.homage.com.my/wp-content/themes/homage/img/flag-sg.svg" alt=""> <span>Malaysia</span></a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><img src="https://www.homage.com.my/wp-content/themes/homage/img/flag-my.svg" alt=""> <span>Malaysia</span></a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><img src="https://www.homage.com.my/wp-content/themes/homage/img/flag-au.svg" alt=""> <span>Malaysia</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
          <div class="container d-flex flex-grow-1 text-center navbar-content lower-navbar">
            <div class="row flex-grow-1">
                <div class="col-12">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-evenly" style="width:90%">
                        <li class="nav-item dropdown"  id="navbarDropdown1">
                          <a class="nav-link" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">About Us <span class="menu-arrow"></span></a>
                          <div class="mainNav__dropdown">
                                <div class="dropdownInner">
                                    <div class="dropdownGroup">
                                        <div class="d-flex flex-column justify-content-start align-items-start text-start">
                                            <span class="icon icon-about"></span>
                                            <span class="mainNav__childHeading">About</span>
                                        </div>
                                        <ul class="menu">
                                            <li><a href="https://www.homage.com.my/about/">Our Story</a></li>
                                            <li ><a href="https://www.homage.com.my/about/carepros/">Our Care Pros</a></li>
                                            <li ><a href="https://www.homage.com.my/about/app/">Homage App</a></li>
                                            <li ><a href="https://www.homage.com.my/reviews/">Reviews</a></li>
                                        </ul>
                                    </div>
                                    <div class="dropdownGroup">
                                        <div class="d-flex flex-column justify-content-start align-items-start text-start">
                                            <span class="icon icon-connect"></span>
                                            <span class="mainNav__childHeading">Connect</span>
                                        </div>
                                        <ul class="menu">
                                            <li ><a href="https://support.homage.com.my/en/">Support</a></li>
                                            <li ><a href="https://www.homage.com.my/resources/category/pressroom/">Pressroom</a></li>
                                            <li ><a href="/careers/">Careers</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown"  id="navbarDropdown2">
                          <a class="nav-link" aria-current="page" href="#">Our Services <span class="menu-arrow"></span></a>
                            <div class="mainNav__dropdown">
                                <div class="dropdownInner">
                                    <div class="dropdownGroup">
                                        <div class="d-flex flex-column justify-content-start align-items-start text-start">
                                            <span class="icon icon-personal-care"></span>
                                            <span class="mainNav__childHeading">Home Care & Nursing</span>
                                        </div>
                                        <ul class="menu">
                                            <li><a href="#">Home Care</a></li>
                                            <li><a href="#">Home Nursing</a></li>
                                            <li><a href="#">Nursing Procedures</a></li>
                                            <li><a href="#">Medical Escort</a></li>
                                            <li><a href="#">COVID-19 Swab Test</a></li>
                                            <li><a href="#">Vaccination Escort</a></li>
                                            <li><a href="#">Elderly Care</a></li>
                                            <li><a href="#">Respite Care</a></li>
                                            <li><a href="#">Caregivers</a></li>
                                            <li><a href="#">Part-time Caregivers</a></li>
                                            <li><a href="#">Private Nurse</a></li>
                                        </ul>
                                    </div>
                                    <div class="dropdownGroup">
                                        <div class="d-flex flex-column justify-content-start align-items-start text-start">
                                            <span class="icon icon-therapy"></span>
                                            <span class="mainNav__childHeading">Home Therapy</span>
                                        </div>
                                        <ul class="menu">
                                            <li><a href="#">Home Therapy</a></li>
                                            <li><a href="#">Physiotherapy</a></li>
                                            <li><a href="#">Occupational Therapy</a></li>
                                            <li><a href="#">Speech Therapy</a></li>
                                            <li><a href="#">For Back Pain</a></li>
                                            <li><a href="#">For Neck Pain</a></li>
                                            <li><a href="#">For Knee Pain</a></li>
                                            <li><a href="#">For Muscle Strains</a></li>
                                            <li><a href="#">For Sports Injury Rehabilitation</a></li>
                                        </ul>
                                    </div>
                                    <div class="dropdownGroup">
                                        <div class="d-flex flex-column justify-content-start align-items-start text-start">
                                            <span class="icon icon-spec"></span>
                                            <span class="mainNav__childHeading">Specialised Care</span>
                                        </div>
                                        <ul class="menu">
                                            <li><a href="#">Dementia Care</a></li>
                                            <li><a href="#">Stroke Care</a></li>
                                            <li><a href="#">Diabetes Care</a></li>
                                            <li><a href="#">Parkinson's Care</a></li>
                                            <li><a href="#">Cancer Care</a></li>
                                            <li><a href="#">Post-Surgery Care</a></li>
                                            <li><a href="#">Hypertension Care</a></li>
                                            <li><a href="#">Arthritis Care</a></li>
                                            <li><a href="#">Palliative Care</a></li>
                                            <li><a href="#">End-of-life Care</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="viewAll__container">
                                    <a href="https://www.homage.com.my/services/" class="viewAll">View All Services</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item" id="navbarDropdown3">
                            <a class="nav-link" aria-current="page" href="#">Care Pro Careers<span class="menu-arrow"></span></a>
                            <div class="mainNav__dropdown">
                                <div class="dropdownInner">
                                    <div class="dropdownGroup dropdownGroup--large">
                                        <a href="{{route('home')}}">
                                            <img src="https://www.homage.com.my/wp-content/themes/homage/img/nav-nurse.svg" alt="Nurse">
                                            <span class="menuItemContent">
                                                <span class="menuItemName">Nurse</span>
                                                <span class="menuItemDescription">Nurses in Malaysia love us for our flexible schedule</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="dropdownGroup dropdownGroup--large">
                                        <a href="https://www.homage.com.my/jobs/nurse/">
                                            <img src="https://www.homage.com.my/wp-content/themes/homage/img/nav-caregiver.svg" alt="Nurse">
                                            <span class="menuItemContent">
                                                <span class="menuItemName">Caregiver</span>
                                                <span class="menuItemDescription">Create a world where our loved ones are well-taken care of</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="dropdownGroup dropdownGroup--large">
                                        <a href="https://www.homage.com.my/jobs/nurse/">
                                            <img src="https://www.homage.com.my/wp-content/themes/homage/img/nav-physiotherapist.svg" alt="Nurse">
                                            <span class="menuItemContent">
                                                <span class="menuItemName">Therapist</span>
                                                <span class="menuItemDescription">Support families with their rehabilitation efforts</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="viewAll__container">
                                    <a href="https://www.homage.com.my/services/" class="viewAll">View All Careers</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item" id="navbarDropdown4">
                          <a class="nav-link" aria-current="page" href="#">Care Network <span class="menu-arrow"></span></a>
                          <div class="mainNav__dropdown">
                            <div class="dropdownInner">
                                <div class="dropdownGroup dropdownGroup--large partners">
                                    <a href="{{route('home')}}">
                                        <img src="https://www.homage.com.my/wp-content/themes/homage/img/nav-partners.svg" alt="Partners">
                                        <span class="menuItemContent">
                                            <span class="menuItemName">Partners</span>
                                            <span class="menuItemDescription">Get to know our network of partnerships</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        </li>
                        <li class="nav-item dropdown"  id="navbarDropdown5">
                            <a class="nav-link" aria-current="page" href="#">Health <span class="menu-arrow"></span></a>
                              <div class="mainNav__dropdown">
                                  <div class="dropdownInner">
                                      <div class="dropdownGroup">
                                          <div class="d-flex flex-column justify-content-start align-items-start text-start">
                                              <span class="icon icon-chronic-conditions"></span>
                                              <span class="mainNav__childHeading">Chronic Conditions </span>
                                          </div>
                                          <ul class="menu">
                                              <li><a href="{{route('home')}}">Dementia 101</a></li>
                                              <li><a href="#">Stroke 101</a></li>
                                              <li><a href="#">Diabetes</a></li>
                                              <li><a href="#">Cancer</a></li>
                                          </ul>
                                      </div>
                                      <div class="dropdownGroup">
                                          <div class="d-flex flex-column justify-content-start align-items-start text-start">
                                              <span class="icon icon-acute-conditions"></span>
                                              <span class="mainNav__childHeading">Acute Conditions</span>
                                          </div>
                                          <ul class="menu">
                                              <li><a href="#">Heart Care</a></li>
                                              <li><a href="#">Sports Injuries 101</a></li>
                                              <li><a href="#">Pneumonia 101</a></li>

                                          </ul>
                                      </div>
                                      <div class="dropdownGroup">
                                          <div class="d-flex flex-column justify-content-start align-items-start text-start">
                                              <span class="icon icon-symptoms"></span>
                                              <span class="mainNav__childHeading">Symptoms</span>
                                          </div>
                                          <ul class="menu">
                                              <li><a href="#">Early Signs of Stroke</a></li>
                                              <li><a href="#">Early Symptoms of Dementia</a></li>
                                          </ul>
                                      </div>
                                      <div class="dropdownGroup">
                                          <div class="d-flex flex-column justify-content-start align-items-start text-start">
                                              <span class="icon icon-post-discharge"></span>
                                              <span class="mainNav__childHeading">Procedures & Treatments</span>
                                          </div>
                                          <ul class="menu">
                                              <li><a href="#">Palliative Care</a></li>
                                              <li><a href="#">Speech Therapy 101</a></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="viewAll__container">
                                      <a href="https://www.homage.com.my/services/" class="viewAll">View All</a>
                                  </div>
                              </div>
                        </li>
                        <li class="nav-item dropdown"  id="navbarDropdown6">
                            <a class="nav-link" aria-current="page" href="#">Resources <span class="menu-arrow"></span></a>
                            <div class="mainNav__dropdown">
                                <div class="dropdownInner">
                                    <div class="dropdownGroup">
                                        <div class="d-flex flex-column justify-content-start align-items-start text-start">
                                            <span class="icon icon-costs-and-financing"></span>
                                            <span class="mainNav__childHeading">Costs & Financing</span>
                                        </div>
                                        <ul class="menu">
                                            <li><a href="#">Financial Assistance for Elderly in Malaysia</a></li>
                                            <li><a href="#">9 Ways to Maximise Income Tax Relief for Family Caregivers in 2021</a></li>
                                        </ul>
                                    </div>
                                    <div class="dropdownGroup">
                                        <div class="d-flex flex-column justify-content-start align-items-start text-start">
                                            <span class="icon icon-health-facilities"></span>
                                            <span class="mainNav__childHeading">Health Facilities</span>
                                        </div>
                                        <ul class="menu">
                                            <li><a href="#">Top Women’s Health Screening Packages in Malaysia</a></li>
                                            <li><a href="#">Breast Cancer Screening: Mammograms in Malaysia</a></li>
                                        </ul>
                                    </div>
                                    <div class="dropdownGroup">
                                        <div class="d-flex flex-column justify-content-start align-items-start text-start">
                                            <span class="icon icon-caregiving-support"></span>
                                            <span class="mainNav__childHeading">Caregiving Support</span>
                                        </div>
                                        <ul class="menu">
                                            <li><a href="#">Activities of Daily Living</a></li>
                                            <li><a href="#">Activities for Elderly</a></li>
                                            <li><a href="#">Caregiver Stress</a></li>
                                            <li><a href="#">Fall Prevention</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="viewAll__container">
                                    <a href="https://www.homage.com.my/services/" class="viewAll">View All</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"  id="navbarDropdown7">
                            <a class="nav-link" aria-current="page" href="#">COVID-19<span class="menu-arrow"></span></a>
                            <div class="mainNav__dropdown">
                                <div class="dropdownInner">
                                    <div class="dropdownGroup covid19">
                                        <div class="d-flex flex-column justify-content-start align-items-start text-start">
                                            <span class="icon icon-connect"></span>
                                            <span class="mainNav__childHeading">COVID-19</span>
                                        </div>
                                        <ul class="menu">
                                            <li><a href="{{route('home')}}">COVID-19 Swab Test (Klang Valley region)</a></li>
                                            <li><a href="#">COVID-19 Swab Test (Penang)</a></li>
                                            <li><a href="#">COVID-19 Swab Test (Johor)</a></li>
                                            <li><a href="#">Corporate Swab Test</a></li>
                                            <li><a href="#">Corporate RTK-Antigen Swab Test in Penang</a></li>
                                            <li><a href="#">Vaccination Escort</a></li>
                                            <li><a href="#">COVID-19 Advisory</a></li>
                                            <li><a href="#">COVID-19 Blog Articles</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="viewAll__container">
                                    <a href="https://www.homage.com.my/services/" class="viewAll">View All</a>
                                </div>
                            </div>
                        </li>
                      </ul>
                </div>
            </div>
          </div>
        </div>
    </div>
</nav>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div>
        Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
      </div>
      <div class="dropdown mt-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
          Dropdown button
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>
    </div>
</div>
