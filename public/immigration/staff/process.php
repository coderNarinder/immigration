<?php require 'header.php'; ?>

    <div class="row p-4 profile mt-5 head ms-2 ast">
        <h4 class="mt-2">
        	    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stars"
                 viewBox="0 0 16 16">
                <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
            </svg>
            <strong>Lead ID :</strong>23456
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person ms-2"
                 viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"/>
            </svg>
            Harman Singh
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone ms-2"
                 viewBox="0 0 16 16">
                <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
            </svg>
            +91- 8989898999
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                 class="bi bi-calendar ms-2" viewBox="0 0 16 16">
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
            </svg>
            13-11-2023
        </h4>

        <div class="shadow p-4">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item nn" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                            type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Student
                        Information
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link nn" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                            type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Admission
                        Application
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link nn" id="visa-tab" data-bs-toggle="tab" data-bs-target="#visa-tab-pane"
                            type="button" role="tab" aria-controls="visa-tab-pane" aria-selected="false">Visa
                        Application
                    </button>
                </li>


            </ul>
			
			
			<!--student info start-->
			
            <div class="tab-content mt-2" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                     tabindex="0">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active cc" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true"><span class="tick"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="16" height="16"
                                                                                 fill="currentColor"
                                                                                 class="bi bi-check-lg"
                                                                                 viewBox="0 0 16 16">
  <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022"/>
</svg></span>Personal Information
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link cc" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false"><span class="tick"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
  <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022"/>
</svg></span>Academic Information
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link cc" id="pills-academic-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-academic" type="button" role="tab"
                                    aria-controls="pills-academic" aria-selected="false"><span class="tick"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
  <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022"/>
</svg></span>Work Experience
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link cc" id="pills-accom-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-accom" type="button" role="tab" aria-controls="pills-accom"
                                    aria-selected="false"><span class="tick"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                  width="16" height="16"
                                                                                  fill="currentColor"
                                                                                  class="bi bi-check-lg"
                                                                                  viewBox="0 0 16 16">
  <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022"/>
</svg></span>Accompanying Information
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                             aria-labelledby="pills-home-tab" tabindex="0">

                            <div class="card-body">
                                <div class="tab d-none">
                                    <div class="row"><h5>Basic Information</h5>
                                        <div class="col-lg-4 col-12 mb-3">
                                            <div class="input-group mb-3 mt-2">
  <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
</svg></span>
                                                <input type="text" class="form-control" placeholder="First Name"
                                                       aria-label="first name" aria-describedby="basic-addon1">
                                            </div>
                                        </div>


                                        <div class="col-lg-4 col-12 mb-3">
                                            <div class="input-group mb-3 mt-2">
  <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
</svg></span>
                                                <input type="text" class="form-control" placeholder="Middle Name"
                                                       aria-label="middle name" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-12 mb-3">
                                            <div class="input-group mb-3 mt-2">
  <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
</svg></span>
                                                <input type="text" class="form-control" placeholder="Last Name"
                                                       aria-label="last name" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-12 mb-1">
                                           
                                            <input type="date" class="form-control" name="name" id="name"
                                                   placeholder="Date of Birth">
                                        </div>
                                        <div class="col-lg-4 col-12 mb-3">

                                            <select class="form-select">
                                                <option>Nationality</option>
                                                <option>India</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-12 mb-3">

                                            <select class="form-select">
                                                <option>Country</option>
                                                <option>India</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-12 mb-3">
                                            <div class="input-group mb-3 mt-2">
                                                <span class="input-group-text" id="basic-addon1">@</span>
                                                <input type="text" class="form-control" placeholder="Email"
                                                       aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-12 mb-3">

                                            <div class="input-group mb-3 mt-2">
  <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
  <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
  <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg></span>
                                                <input type="text" class="form-control" placeholder="Mobile No."
                                                       aria-label="mobile" aria-describedby="basic-addon1">
                                            </div>


                                        </div>
                                        <div class="col-lg-4 col-12 mb-3">
                                            <div class="input-group mb-3 mt-2">
  <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
  <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
  <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg></span>
                                                <input type="text" class="form-control" placeholder="Alternate No."
                                                       aria-label="alternate" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-12 mb-3">
                                            <label for="email"
                                                   class="form-label add_span"><strong>Gender</strong></label><br/>
                                            <span class="me-2 add_span">Male <input type="radio"/></span> <span
                                                    class="me-2 add_span">Female <input type="radio"/></span> <span
                                                    class="me-2 add_span">Other <input type="radio"/></span>
                                        </div>
                                        <div class="col-lg-4 col-12 mb-3">
                                            <label for="email" class="form-label add_span"><strong>Marital
                                                    Status</strong></label><br/>
                                            <span class="me-2 add_span">Single <input type="radio"/></span> <span
                                                    class="me-2 add_span">Married <input type="radio"/></span> <span
                                                    class="me-2 add_span">Divorced <input type="radio"/></span>
                                        </div>


                                    </div>
                                    <div class="row mt-4"><h5>Address Information</h5>
                                        <div class="col-lg-4 col-12 mb-4">

                                            <select class="form-select">
                                                <option>Country</option>
                                                <option>India</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-12 mb-4">

                                            <select class="form-select">
                                                <option>State</option>
                                                <option>Punjab</option>
                                            </select>
                                        </div>

                                        <div class="col-lg-4 col-12 mb-4">

                                            <select class="form-select">
                                                <option>City/Town</option>
                                                <option>Amritsar</option>
                                            </select>
                                        </div>


                                        <div class="col-lg-4 col-12 mb-3">

                                            <input type="number" class="form-control" name="number" id="number"
                                                   placeholder=" Enter Pincode">
                                        </div>
                                        <div class="col-lg-4 col-12 mb-3">

                                            <input type="text" class="form-control" name="number" id="number"
                                                   placeholder="Permanent Address">
                                        </div>
                                    </div>
                                    <div class="row"><h5>Travel Information</h5>
                                        <div class="col-lg-4 col-12 mb-3">
                                        
                                            <select class="form-select">
                                                <option>Country of Passport</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-12 ">

                                            <div class="input-group mb-3 mt-2">
  <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-passport" viewBox="0 0 16 16">
  <path d="M8 5a3 3 0 1 0 0 6 3 3 0 0 0 0-6ZM6 8a2 2 0 1 1 4 0 2 2 0 0 1-4 0Zm-.5 4a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5Z"/>
  <path d="M3.232 1.776A1.5 1.5 0 0 0 2 3.252v10.95c0 .445.191.838.49 1.11.367.422.908.688 1.51.688h8a2 2 0 0 0 2-2V4a2 2 0 0 0-1-1.732v-.47A1.5 1.5 0 0 0 11.232.321l-8 1.454ZM4 3h8a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1Z"/>
</svg></span>
                                                <input type="text" class="form-control" placeholder="Enter Passport No"
                                                       aria-label="Passport no" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-12 mb-3">
                                            <label for="email" class="form-label"></label>
                                            <input type="date" class="form-control" placeholder="Passport Expiry"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-12 mb-3">
                                            <label for="email" class="form-label"></label>
                                            <select class="form-select">
                                                <option>Preffered Visa</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-12 mb-3">
                                            <div class="input-group mb-3 mt-2">
  <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-passport" viewBox="0 0 16 16">
  <path d="M8 5a3 3 0 1 0 0 6 3 3 0 0 0 0-6ZM6 8a2 2 0 1 1 4 0 2 2 0 0 1-4 0Zm-.5 4a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5Z"/>
  <path d="M3.232 1.776A1.5 1.5 0 0 0 2 3.252v10.95c0 .445.191.838.49 1.11.367.422.908.688 1.51.688h8a2 2 0 0 0 2-2V4a2 2 0 0 0-1-1.732v-.47A1.5 1.5 0 0 0 11.232.321l-8 1.454ZM4 3h8a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1Z"/>
</svg></span>
                                                <input type="text" class="form-control"
                                                       placeholder="Visa Type You Currently Hold"
                                                       aria-label="Passport no" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-12 mb-3">
                                            
                                            <input type="date" class="form-control" placeholder="Visa Expiry Date"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
						
						
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                             aria-labelledby="pills-profile-tab" tabindex="0">

                            <div class="row">
                                <h5>Self </h5>
                                <div class="col-lg-4 col-12 mb-3">

                                    <select class="form-select" placeholder="Education">
                                        <option>1-Year Post-Secondary Degree/Certificate</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-12 mb-3">

                                    <select class="form-select" placeholder="Percentage">
                                        <option>Course</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-12 mb-3">

                                    <select class="form-select" placeholder="Grade Obtained">
                                        <option>Passing Year</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-lg-4 col-12 mb-3">

                                    <input type="text" class="form-control" placeholder="Name of the Institute"/>
                                </div>
                                <div class="col-lg-4 col-12 mb-3">

                                    <input type="text" class="form-control" placeholder="Location of the Institute"/>
                                </div>
                                <div class="col-lg-4 col-12 mb-3">

                                    <input type="text" class="form-control" placeholder="Result"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success mb-4">+ Add Qualification</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-academic" role="tabpanel"
                             aria-labelledby="pills-academic-tab" tabindex="0">
                            <div class="row">
                                <h5>Self </h5>


                                <div class="col-lg-4 col-12 mb-3">

                                    <select class="form-select" placeholder="">
                                        <option>Select Employment Type</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-12 mb-3">

                                    <input type="text" class="form-control" placeholder="Company Name"/>
                                </div>
                                <div class="col-lg-4 col-12 mb-3">

                                    <select class="form-select" placeholder="">
                                        <option>Select Designation</option>
                                    </select>
                                </div>
                            </div>


                            <div class="row">

                                <div class="col-lg-4 col-12 mb-3">
                                    <input type="date" class="form-control" placeholder="Start Date"/>

                                </div>
                                <div class="col-lg-4 col-12 mb-3">

                                    <input type="date" class="form-control" placeholder="End Date"/>
                                </div>
                                <div class="col-lg-4 col-12 mb-3">
                                    <strong class="me-2">Current Job: </strong> <input type="radio"/><span
                                            class="me-3 ">Yes</span> <input type="radio"/> No
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success mb-4">+ Add Experience</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-accom" role="tabpanel" aria-labelledby="pills-accom-tab"
                             tabindex="0">


                            <div class="row">
                                <p><input type="radio"/><span class="me-3 "> Is Spouse </span><input type="radio"/><span
                                            class="me-3 "> Other</span></p>
                                <div class="col-lg-4 col-12 mb-3">

                                    <select class="form-select" placeholder="Education">
                                        <option>1-Year Post-Secondary Degree/Certificate</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-12 mb-3">

                                    <select class="form-select" placeholder="Percentage">
                                        <option>Course</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-12 mb-3">

                                    <select class="form-select" placeholder="Grade Obtained">
                                        <option>Passing Year</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-lg-4 col-12 mb-3">

                                    <input type="text" class="form-control" placeholder="Name of the Institute"/>
                                </div>
                                <div class="col-lg-4 col-12 mb-3">

                                    <input type="text" class="form-control" placeholder="Location of the Institute"/>
                                </div>
                                <div class="col-lg-4 col-12 mb-3">

                                    <input type="text" class="form-control" placeholder="Result"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success mb-4">+ Add Qualification</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-12 mb-3">

                                    <select class="form-select" placeholder="">
                                        <option>Select Employment Type</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-12 mb-3">

                                    <input type="text" class="form-control" placeholder="Company Name"/>
                                </div>
                                <div class="col-lg-4 col-12 mb-3">

                                    <select class="form-select" placeholder="">
                                        <option>Select Designation</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-lg-4 col-12 mb-3">
                                    <input type="date" class="form-control" placeholder="Start Date"/>

                                </div>
                                <div class="col-lg-4 col-12 mb-3">

                                    <input type="date" class="form-control" placeholder="End Date"/>
                                </div>
                                <div class="col-lg-4 col-12 mb-3">
                                    <strong class="me-2">Current Job: </strong> <input type="radio"/><span
                                            class="me-3 ">Yes</span> <input type="radio"/> No
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success mb-4">+ Add Experience</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> <!--student info end-->
				
				
				
				
				
				<!--admission application start-->
				
                <div class="tab-pane fade show " id="profile-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                     tabindex="0">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active cc" id="admission-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#admission-home" type="button" role="tab" aria-controls="admission-home"
                                    aria-selected="true"><span class="tick"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="16" height="16"
                                                                                 fill="currentColor"
                                                                                 class="bi bi-check-lg"
                                                                                 viewBox="0 0 16 16">
  <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022"/>
</svg></span>
                                New Application
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link cc" id="admission-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#admission-profile" type="button" role="tab"
                                    aria-controls="admission-profile" aria-selected="false"><span class="tick"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
  <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022"/>
</svg></span>Offer	
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link cc" id="admission-academic-tab" data-bs-toggle="pill"
                                    data-bs-target="#admission-academic" type="button" role="tab"
                                    aria-controls="admission-academic" aria-selected="false"><span class="tick"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
  <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022"/>
</svg></span>Acceptance
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link cc" id="admission-accom-tab" data-bs-toggle="pill"
                                    data-bs-target="#admission-accom" type="button" role="tab" aria-controls="admission-accom"
                                    aria-selected="false"><span class="tick"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                  width="16" height="16"
                                                                                  fill="currentColor"
                                                                                  class="bi bi-check-lg"
                                                                                  viewBox="0 0 16 16">
  <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022"/>
</svg></span>Confirmation
                            </button>
                        </li>

                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade active show " id="admission-home" role="tabpanel"
                             aria-labelledby="pills-home-tab" tabindex="0">
							 
							 <div class="row pb-4">
							  <div class="col-12"><span class="purple_text">Admission Process</span></div>
							  
							  </div>
							  <div>
                            <div class="row mb-3">
<div class="col-lg-6 col-12">
<select class="form-select">
<option>Admission College / University</option>
</select></div><div class="col-lg-6 col-12">
<select class="form-select">
<option>Admission Course</option>
</select></div>
</div>
                          
<div class="row mb-3">
<div class="col-lg-6 col-12">
<select class="form-select">
<option>Admission Status</option>
</select></div><div class="col-lg-6 col-12">
<select class="form-select">
<option>Admission Course-level</option>
</select></div>
</div>
<div class="row mb-3">
<div class="col-lg-6 col-12">
<select class="form-select">
<option>Admission Campus</option>
</select></div><div class="col-lg-6 col-12">
<select class="form-select">
<option>Admission Intake</option>
</select></div>
</div>

<div class="row mb-3">
<div class="col-lg-6 col-12">
<select class="form-select">
<option>Admission Intake Year</option>
</select></div><div class="col-lg-6 col-12">
<select class="form-select">
<option>Admission Parent Agent</option>
</select></div>
</div>      
<div class="row mb-2">
<div class="col-lg-6 col-12">
<textarea class="form-control" placeholder="Admission_comments"></textarea></div>
<div class="col-lg-6 col-12">
<input type="date" class="form-control" placeholder="Admission-status-Date"/></div></div>
	
	  <div class="d-flex justify-content-end mb-2"><input type="button" value="save" class="btn btn-success me-2"/><input type="button" value="cancel" class="btn btn-primary"/></div>
	  </div>
	  
	                        <div class="row pb-4">
							  <div class="col-11"><span class="purple_text">Admission Process</span></div>
							  <div class="col-1 text-right"><a href=""><span class="black"><strong>+</strong></span></a></div>
							  </div>
                            <div class="table-responsive">
                                <table class="table table-stripped" >
								<tr class="table-light">
								<th>Admission - College / University</th>
								<th>Admission - Course</th>
								<th>Admission Status</th>
								<th>Admission - Course Level</th>
								<th>Admission - Campus</th>
								<th>Admission - Intake</th>
								<th>Admission - Intake Year</th>
								<th>Admission - Parent Agent</th>
								<th>Admission - Status Date</th>
								<th>Created by</th>
								<th>Action</th>
								</tr>
								<tr>
								<td>University of South Australia (UniSA)-00121B</td>
								<td>Associate Degree In Engineering-066197C</td>
								<td>In Progress</td>
								<td>Certificate</td>
								<td>AUS</td>
								<td>Q1 - Jan, Feb, Mar</td>
								<td>2020</td>
								<td>Not Applicable</td>
								<td>30/11/2023</td>
								<td>Sahil 22-11-2023 21:21</td>
								<td><a href="" class="enq"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil me-2" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/></svg> </a>
<a href="" class="enq"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
</svg></a></td>
								</tr>
								</table>
                            </div>





                        </div>
                        <div class="tab-pane fade" id="admission-profile" role="tabpanel"
                             aria-labelledby="pills-profile-tab" tabindex="0">

<div class="row pb-4">
							  <div class="col-12"><span class="purple_text">Offer Letter Details</span></div>
							  
							  </div>
<div>
                            <div class="row mb-3">
<div class="col-lg-6 col-12">
<select class="form-select">
<option>Offer - College / University - Course</option>
<option>University of South Australia (UniSA)-00121B Associate Degree In Engineering-066197C
</option>
</select></div><div class="col-lg-6 col-12">
<select class="form-select">
<option>Offer Letter Status</option>
<option>Conditonal</option>
</select></div>
</div>
                          

	<div class="d-flex justify-content-end mb-2"><input type="button" value="save" class="btn btn-success me-2"/><input type="button" value="cancel" class="btn btn-primary"/></div>
	  
	  </div>


                          <div class="row pb-4">
							  <div class="col-11"><span class="purple_text">Offer Letter Details</span></div>
							  <div class="col-1 text-right"><a href=""><span class="black"><strong>+</strong></span></a></div>
							  </div>
                            <div class="table-responsive">
                                <table class="table table-stripped">
								<tr class="table-light">
								<th >Offer - College/University - Course</th>
								<th>Offer - Letter Status</th>
								<th>Deferred Intake</th>
								<th>Deferred Intake Year</th>
								<th>Offer - Intake Start Date</th>
								<th>Offer - Issue Date</th>
								<th>Offer Letter File</th>
								<th>Created by</th>
								<th>Action</th>
								</tr>
								<tr>
								<td>University of South Australia (UniSA)-00121B Associate Degree In Engineering-066197C</td>
								<td>Unconditional</td>
								<td></td>
								<td></td>
								<td>02/11/2023</td>
								<td>30/11/2023</td>
								<td></td>
								<td>Sahil 22-11-2023 21:51</td>
								<td><a href="" class="enq">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil me-2" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/> </svg></a>
<a href="" class="enq"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
</svg></a></td>
								
								</tr>
								</table>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="admission-academic" role="tabpanel"
                             aria-labelledby="pills-academic-tab" tabindex="0">
							 
							 <div class="row pb-4">
							  <div class="col-12"><span class="purple_text">Acceptance</span></div>
							  
							  </div>
							 <div>
                           
<div class="row mb-3">
<div class="col-lg-6 col-12">
<select class="form-select">
<option>Acceptance College University / Course</option>
<option></option>
</select></div>
<div class="col-lg-6 col-12"><input type="date" class="form-control" placeholder="" /></div>

</div>
<div class="row mb-3">
<div class="col-lg-6 col-12"><input type="file" class="form-control" placeholder="Acceptance Letter File" /></div>
<div class="col-lg-6 col-12"><select class="form-select">
<option>Acceptance Status</option>
<option>Accepted</option>
</select></div>
</div>
                          

	<div class="d-flex justify-content-end mb-2"><input type="button" value="save" class="btn btn-success me-2"/><input type="button" value="cancel" class="btn btn-primary"/></div>
	  
	  </div>
							 
							 
							 
                         <div class="row pb-4">
							  <div class="col-11"><span class="purple_text">Acceptance</span></div>
							  <div class="col-1 text-right"><a href=""><span class="black"><strong>+</strong></span></a></div>
							  </div>
                            <div class="table-responsive">
                                <table class="table table-stripped">
								<tr class="table-light">
								<th>Acceptance - College/University - Course</th>
								<th>Acceptance Date</th>
								<th>Acceptance Letter File</th>
								<th>Acceptance - Status</th>
								<th>Created by</th>
								<th>Action</th>
								</tr>
								<tr>
								<td>University of South Australia (UniSA)-00121B Associate Degree In Engineering-066197C</td>
								<td>08/11/2023</td>
								<td></td>
								<td>Accepted</td>
								<td>Sahil 22-11-2023 21:51</td>
								<td><a href="" class="enq me-3">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg></a>
 <a href="" class="enq"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
</svg></a></td>
								
								</tr>
								</table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="admission-accom" role="tabpanel" aria-labelledby="pills-accom-tab"
                             tabindex="0">
							 <div class="row pb-4">
							  <div class="col-11"><span class="purple_text">COE Details</span></div>
							  </div>
							 
							 
							 <div>
                            <div class="row mb-3">
							<div class="col-lg-6 col-12"><input type="file" class="form-control" /></div>
<div class="col-lg-6 col-12">
<select class="form-select">
<option>COE - College / Course</option>
<option>University of South Australia (UniSA)-00121B Associate Degree In Engineering-066197C
</option>
</select></div>
</div>
<div class="row mb-3">
<div class="col-lg-6 col-12">
<input type="date" class="form-control" placeholder="COE Start Date" /></div>
<div class="col-lg-6 col-12">
<input type="date" class="form-control" placeholder="COE End Date" /></div>
</div>
<div class="row mb-3"><div class="col-6">
<input type="Date" class="form-control" placeholder="COE Issue Date" /></div><div class="col-6"><input type="text" class="form-control" placeholder="COE Student Enrollment No"  /></div></div>
                          
<div class="row mb-3">
<div class="col-lg-6 col-12">
<input type="date" class="form-control" placeholder="COE Census Date" /></div>
<div class="col-lg-6 col-12">
<input type="text" class="form-control" placeholder="COE - Initial Pre-paid Tution Fees" />
</div>
</div>
<div class="row mb-3">
<div class="col-lg-6 col-12">
<input type="text" class="form-control" placeholder="COE - Total Course Fees" /></div>
<div class="col-lg-6 col-12">
<select class="form-select">
<option>COE - Status</option>
<option>Active
</option>
</select>
</div>
</div>
<div class="row mb-3">

<div class="col-lg-6 col-12">
<select class="form-select">
<option>COE - Overseas Student Health Cover</option>
<option>Student Direct</option>
</select>
</div><div class="col-lg-6 col-12">
<input type="text" class="form-control" placeholder="COE - Comments" /></div>
</div>
<div class="row mb-3">
<div class="col-lg-6 col-12">
<input type="text" class="form-control" placeholder="Annual Tution Fee" /></div>
<div class="col-lg-6 col-12">
<select class="form-select">
<option>Course Duration</option>
<option>1 Year</option>
</select>
</div>
</div>
<div class="row mb-3">

<div class="col-lg-6 col-12">
<select class="form-select">
<option>Numbers of Terms Anually</option>
<option>1 Year</option>
</select>
</div>
</div>
	<div class="d-flex justify-content-end mb-2"><input type="button" value="save" class="btn btn-success me-2"/><input type="button" value="cancel" class="btn btn-primary"/></div>
	  
	  </div>
							 
							 
							 
							 
<div class="row pb-4">
							  <div class="col-11"><span class="purple_text">COE Details</span></div>
							  <div class="col-1 text-right"><a href=""><span class="black"><strong>+</strong></span></a></div>
							  </div>
                            <div class="table-responsive">
                                <table class="table table-stripped">
								<tr class="table-light">
								<th>COE - College/ Course</th>
								<th>COE - Start Date</th>
								<th>COE - End Date</th>
								<th>COE - Issue Date	</th>
								<th>COE - Total Course Fees</th>
								<th>COE - Status</th>
								<th>Annual Tuition Fee</th>
								<th>Course Duration</th>
								<th>Number of terms anually</th>
								<th>Created by</th>
								<th>Action</th>
								</tr>
								<tr>
								<td>University of South Australia (UniSA)-00121B Associate Degree In Engineering-066197C</td>
								<td>23/11/2023</td>
								<td>24/11/2023</td>
								<td>28/11/2023</td>
								<td>6000</td>
								<td>Active</td>
								<td>70000</td>
								<td>1 Year</td>
								<td>1</td>
								<td>Sahil 22-11-2023 21:51</td>
								<td><a href="" class="enq me-3">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg></a>
 <a href="" class="enq"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
</svg></a></td>
								
								</tr>
								</table>
                            </div>

                        </div>

                    </div>
                </div>
				
				
				
				
				
				<!--admission application end-->
				
				
				
				
				<!--visa application start-->
				
				<div class="tab-pane fade show " id="visa-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                     tabindex="0">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active cc" id="confirm-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#confirm-home" type="button" role="tab" aria-controls="confirm-home"
                                    aria-selected="true"><span class="tick"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="16" height="16"
                                                                                 fill="currentColor"
                                                                                 class="bi bi-check-lg"
                                                                                 viewBox="0 0 16 16">
  <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022"/>
</svg></span>
                               Visa Documents (Primary Applicant)
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link cc" id="confirm-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#confirm-profile" type="button" role="tab"
                                    aria-controls="confirm-profile" aria-selected="false"><span class="tick"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
  <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022"/>
</svg></span>Visa Documents (Secondary Applicant)	
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link cc" id="confirm-academic-tab" data-bs-toggle="pill"
                                    data-bs-target="#confirm-academic" type="button" role="tab"
                                    aria-controls="confirm-academic" aria-selected="false"><span class="tick"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
  <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022"/>
</svg></span>Bridging Visa Documents
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link cc" id="confirm-accom-tab" data-bs-toggle="pill"
                                    data-bs-target="#confirm-accom" type="button" role="tab" aria-controls="confirm-accom"
                                    aria-selected="false"><span class="tick"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                  width="16" height="16"
                                                                                  fill="currentColor"
                                                                                  class="bi bi-check-lg"
                                                                                  viewBox="0 0 16 16">
  <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022"/>
</svg></span>Visa Decision
                            </button>
                        </li>

                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade active show " id="confirm-home" role="tabpanel"
                             aria-labelledby="pills-home-tab" tabindex="0">
                              
                            <div class="row mb-3">
							<div class="col-lg-6 col-12">
							<div class="input-group mb-2">
  <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
</svg></span>
                                                <input type="text" class="form-control" placeholder="Primary Applicant Name"
                                                       aria-label="first name" aria-describedby="basic-addon1">
                                            </div>
							
				</div>
							<div class="col-lg-6 col-12"><select class="form-select">
							<option>Primary Applicant Visa Document-Submission Status</option>
							<option>In process</option>
							</select></div>
							</div>
 							<div class="row mb-3">
							
							<div class="col-lg-6 col-12"><select class="form-select">
							<option>Primary Applicant Visa Document-University Course</option>
							<option>University of South Australia (UniSA)-00121B Associate Degree In Engineering-066197C</option>
							</select></div><div class="col-6"><div class="input-group mb-2">
  <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-passport" viewBox="0 0 16 16">
  <path d="M8 5a3 3 0 1 0 0 6 3 3 0 0 0 0-6M6 8a2 2 0 1 1 4 0 2 2 0 0 1-4 0m-.5 4a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z"/>
  <path d="M3.232 1.776A1.5 1.5 0 0 0 2 3.252v10.95c0 .445.191.838.49 1.11.367.422.908.688 1.51.688h8a2 2 0 0 0 2-2V4a2 2 0 0 0-1-1.732v-.47A1.5 1.5 0 0 0 11.232.321l-8 1.454ZM4 3h8a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1"/>
</svg></span>
                                                <input type="text" class="form-control" placeholder="Primary Applicant Visa Document-Comments"
                                                       aria-label="first name" aria-describedby="basic-addon1">
                                            </div></div>
							</div>
                            <div class="row mb-3 mt-2">
							<div class="col-lg-6 col-12">
							<div class="input-group mb-2">
  <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-passport" viewBox="0 0 16 16">
  <path d="M8 5a3 3 0 1 0 0 6 3 3 0 0 0 0-6M6 8a2 2 0 1 1 4 0 2 2 0 0 1-4 0m-.5 4a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z"/>
  <path d="M3.232 1.776A1.5 1.5 0 0 0 2 3.252v10.95c0 .445.191.838.49 1.11.367.422.908.688 1.51.688h8a2 2 0 0 0 2-2V4a2 2 0 0 0-1-1.732v-.47A1.5 1.5 0 0 0 11.232.321l-8 1.454ZM4 3h8a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1"/>
</svg></span>
                                                <input type="text" class="form-control" placeholder="Primary Applicant Visa Document-Comments"
                                                       aria-label="first name" aria-describedby="basic-addon1">
                                            </div>
							
							
							</div>
							<div class="col-lg-6 col-12">
							<div class="input-group mb-2">
  <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-passport" viewBox="0 0 16 16">
  <path d="M8 5a3 3 0 1 0 0 6 3 3 0 0 0 0-6M6 8a2 2 0 1 1 4 0 2 2 0 0 1-4 0m-.5 4a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z"/>
  <path d="M3.232 1.776A1.5 1.5 0 0 0 2 3.252v10.95c0 .445.191.838.49 1.11.367.422.908.688 1.51.688h8a2 2 0 0 0 2-2V4a2 2 0 0 0-1-1.732v-.47A1.5 1.5 0 0 0 11.232.321l-8 1.454ZM4 3h8a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1"/>
</svg></span>
                                                <input type="text" class="form-control" placeholder="Primary Applicant Visa Document-Comments"
                                                       aria-label="first name" aria-describedby="basic-addon1">
                                            </div></div>
							</div>
							<div class="row mb-3">
							<div class="col-lg-6 col-12"><div class="input-group mb-2">
  <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-passport" viewBox="0 0 16 16">
  <path d="M8 5a3 3 0 1 0 0 6 3 3 0 0 0 0-6M6 8a2 2 0 1 1 4 0 2 2 0 0 1-4 0m-.5 4a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z"/>
  <path d="M3.232 1.776A1.5 1.5 0 0 0 2 3.252v10.95c0 .445.191.838.49 1.11.367.422.908.688 1.51.688h8a2 2 0 0 0 2-2V4a2 2 0 0 0-1-1.732v-.47A1.5 1.5 0 0 0 11.232.321l-8 1.454ZM4 3h8a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1"/>
</svg></span>
                                                <input type="text" class="form-control" placeholder="Primary Applicant Visa Document-Comments"
                                                       aria-label="first name" aria-describedby="basic-addon1">
                                            </div></div>
							<div class="col-lg-6 col-12">
							<label class="mb-1"><small>OSHC File</small></label>
							<input type="file" placeholder="Primary Applicant Visa Document-Comments" class="form-control" /></div>
							</div>
							<div class="row mb-3">
							<div class="col-lg-6 col-12">
							<label class="mb-1"><small>HAP ID File</small></label>
							<input type="file" placeholder="Primary Applicant Visa Document-Comments" class="form-control" /></div>
							<div class="col-lg-6 col-12">
							<label class="mb-1"><small>Acknowledgement File</small></label>
							<input type="file" placeholder="Primary Applicant Visa Document-Comments" class="form-control" /></div>
							</div>
							
							<div class="row mb-3">
							<div class="col-lg-6 col-12">
							<label class="mb-1"><small>Medical Date</small></label>
							<input type="date" placeholder="Primary Applicant Visa Document-Comments" class="form-control" /></div>
							<div class="col-lg-6 col-12">
							<label class="mb-1"><small>Medical Document File</small></label>
							<input type="file" placeholder="Primary Applicant Visa Document-Comments" class="form-control" />
							
							</div>
							</div>
                        </div>
                        <div class="tab-pane fade" id="confirm-profile" role="tabpanel"
                             aria-labelledby="pills-profile-tab" tabindex="0">
							
							<div class="row pb-4">
							  <div class="col-12"><span class="purple_text">Visa Documents</span></div>
							  </div>
							<div>
							<div class="row mb-3">
							<div class="col-6">
							<div class="input-group mb-2">
  <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
</svg></span>
                                                <input type="text" class="form-control" placeholder="Primary Applicant Name"
                                                       aria-label="first name" aria-describedby="basic-addon1">
                                            </div>
							</div>
							<div class="col-lg-6 col-12">
											<select class="form-select">
											<option>Secandory Application Visa Document - Submission Status</option>
											<option>Submitted</option>
											</select>
											
											</div>
							</div>
							<div class="row mb-3">
							<div class="col-lg-6 col-12"><input type="date" class="form-control" placeholder="Secandory Application Visa Document - Submission Date" /></div>
							<div class="col-lg-6 col-12">
							<label class="mb-2"><small>Secondary Applicant Visa Document - Visa Acknowledgement</small></label>
											<input type="file" class="form-control" placeholder=" Secondary Applicant Visa Document - Visa Acknowledgement" />
											
											</div>
														</div>
							
						<div class="row mb-3">
							<div class="col-lg-6 col-12">
							<label class="mb-2"><small> Secondary Applicant Visa Document - HAP ID</small></label>
											<input type="file" class="form-control" placeholder="  Secondary Applicant Visa Document - HAP ID" />
											
											</div>
							<div class="col-lg-6 col-12">
							<label class="mb-2"><small> Secondary Applicant Overseas Student Health Cover File</small></label>
											<input type="file" class="form-control" placeholder="  Secondary Applicant Overseas Student Health Cover File" />
											
											</div>
														</div>
							
							<div class="row mb-3">
							<div class="col-lg-12 col-12">
							<textarea rows="6" class="form-control" placeholder="Secondary Applicant Comments"></textarea>
							</div>
							
							</div>
							<div class="d-flex justify-content-end mb-2"><input type="button" value="save" class="btn btn-success me-2"/><input type="button" value="cancel" class="btn btn-primary"/></div>
							</div>
							
							
							<div class="row pb-4">
							  <div class="col-11"><span class="purple_text">Visa Documents</span></div>
							  <div class="col-1 text-right"><a href=""><span class="black"><strong>+</strong></span></a></div>
							  </div>
							 
							 
						
                            <div class="table-responsive">
                                <table class="table table-stripped">
								<tr class="table-light">
								<th>Secondary Applicant Name</th>
								<th>Secondary Applicant Visa Document - Submission Status</th>
								<th>Secondary Applicant Visa Document - Submission Date	</th>
								<th>Secondary Applicant Visa Document - Visa Acknowledgement	</th>
								<th>Secondary Applicant Visa Document - HAP ID</th>
								<th>Secondary Applicant Comments</th>
								<th>Action</th>
								</tr>
								<tr>
								<td>SHUB</td>
								<td>In Process</td>
								<td>30/11/2023</td>
								<td></td>
								<td></td>
								<td></td>
								<td><a href="" class="enq me-3">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg></a>
 <a href="" class="enq"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
</svg></a></td>
								
								</tr>
								</table>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="confirm-academic" role="tabpanel"
                             aria-labelledby="pills-academic-tab" tabindex="0">
                        <div class="row pb-4">
							  <div class="col-11"><span class="purple_text">Bridging Visa Documents</span></div>
							  </div>
						<div>
						<div class="row mb-3">
						<div class="col-lg-6 col-12">
						<select class="form-select">
						<option>Bridging Visa Documents-Name</option>
						</select>
						</div><div class="col-lg-6 col-12">
						<input type="file" placeholder="Bridging Visa" class="form-control" />
						</div>
						</div>
						
						<div class="row mb-3">
						<div class="col-lg-12 col-12">
						<textarea rows="3" class="form-control" placeholder="Bridging Visa Documents - Comments"></textarea>
						</div>
						</div>
						<div class="d-flex justify-content-end mb-2"><input type="button" value="save" class="btn btn-success me-2"/><input type="button" value="cancel" class="btn btn-primary"/></div>
						
						
						
						
						
						
						</div>
						
						<div class="row pb-4">
							  <div class="col-11"><span class="purple_text">Bridging Visa Documents</span></div>
							  <div class="col-1 text-right"><a href=""><span class="black"><strong>+</strong></span></a></div>
							  </div>
                            <div class="table-responsive">
                                <table class="table table-stripped" width="100%">
								<tr class="table-light">
								<th>Bridging Visa Documents - Name</th>
								<th>Bridging Visa</th>
								<th>Bridging Visa Documents - Comments	</th>
								<th>Action</th>
								</tr>
								<tr>
								<td>Harman Singh</td>
								<td></td>
								<td></td>
								<td><a href="" class="enq me-3">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg></a>
 <a href="" class="enq"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
</svg></a></td>
								
								</tr>
								</table>
                            </div>
						
						
						
						
                        </div>
                        <div class="tab-pane fade" id="confirm-accom" role="tabpanel" aria-labelledby="pills-accom-tab"
                             tabindex="0">
							 
							 
							 
							 
							  <div class="row pb-4">
							  <div class="col-11"><span class="purple_text">Visa Decision</span></div>
							  </div>
						<div>
						<div class="row mb-3">
						<div class="col-lg-6 col-12">
						<select class="form-select">
						<option>Visa Decision - Name</option>
						</select>
						</div><div class="col-lg-6 col-12">
						<input type="file" placeholder="Visa Decision - Letter" class="form-control" />
						</div>
						</div>
						
						<div class="row mb-3">
						<div class="col-lg-12 col-12">
						<select class="form-select">
						<option>Visa Decision - What is Outcome</option>
						</select>
						</div>
						</div>
						<div class="d-flex justify-content-end mb-2"><input type="button" value="save" class="btn btn-success me-2"/><input type="button" value="cancel" class="btn btn-primary"/></div>
						
						
						
						
						
						
						</div>
							 
							 
							 
							 
<div class="row pb-4">
							  <div class="col-11"><span class="purple_text">Visa Decision</span></div>
							  <div class="col-1 text-right"><a href=""><span class="black"><strong>+</strong></span></a></div>
							  </div>
                            <div class="table-responsive">
                                <table class="table table-stripped" width="100%">
								<tr class="table-light">
								<th>Visa Decision - Name</th>
								<th>Visa Decision - Letter</th>
								<th>Visa Decision - What is the Outcome	</th>
								<th>Visa Decision - Date of Outcome</th>
								<th>Created by</th>
								<th>Action</th>
								</tr>
								<tr>
								<td>Harman Singh</td>
								<td></td>
								<td>Approved</td>
								<td>22/11/2023</td>
								<td>Sahil 23-11-2023 20:05</td>
								<td><a href="" class="enq me-3">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg></a>
 <a href="" class="enq"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
</svg></a></td>
								
								</tr>
								</table>
                            </div>


                           
                        </div>

                    </div>
                </div> <!--visa application end-->
            </div>


        </div>

    </div>


    </div>

<?php require 'footer.php'; ?>