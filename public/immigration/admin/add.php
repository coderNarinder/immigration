<?php require 'header.php'; ?>
<div class="row px-3 pt-4  mt-5 profile">
<div class="col-11"><h2 class="">Add Category</h2></div>
<div class="col-1 text-center"> 
<a href="view.php" class="btn btn-success" style="float:right;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye " viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
<title>View Category</title>
</svg></a></div>
</div>
<div class="row p-4">
<div class="shadow">
<div class="row p-4">
<div class="card-body">
        <div class="tab d-none">
          <div class="row"><h5>Basic Information</h5>
		  <div class="col-lg-4 col-12 mb-3">
          <div class="input-group mb-3 mt-2">
  <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
</svg></span>
  <input type="text" class="form-control" placeholder="First Name" aria-label="first name" aria-describedby="basic-addon1">
</div>
          </div>
		  
		  
          <div class="col-lg-4 col-12 mb-3">
           <div class="input-group mb-3 mt-2">
  <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
</svg></span>
  <input type="text" class="form-control" placeholder="Middle Name" aria-label="middle name" aria-describedby="basic-addon1">
</div>
          </div>
          <div class="col-lg-4 col-12 mb-3">
           <div class="input-group mb-3 mt-2">
  <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
</svg></span>
  <input type="text" class="form-control" placeholder="Last Name" aria-label="last name" aria-describedby="basic-addon1">
</div>
          </div></div>
		  <div class="row">
		  <div class="col-lg-4 col-12 mb-3">
            <label for="name" class="form-label"></label>
            <input type="date" class="form-control" name="name" id="name" placeholder="Date of Birth" title="Enter Date of Birth">
          </div>
          <div class="col-lg-4 col-12 mb-3">
            
            <select class="form-select">
			<option>Nationality</option>
			<option>India</option>
			</select>
          </div>
          <div class="col-lg-4 col-12 mb-3">
            
            <select class="form-select">
			<option>Select Enquiry Source</option>
			<option>Advertisements</option>
<option>Email</option>
<option>Employee Referral</option>
<option>External Referral</option>
<option>Facebook</option>
<option>Google AdWord</option>
<option>Instagram</option>
<option>Justdial</option>
<option>Lead Referral</option>
<option>Linkedin</option>
<option>Seminar/Expo</option>
<option>Shiksha</option>
<option>Sub-Agent Referral</option>
<option>Sulekha</option>
<option>Telephonic/Cold Call</option>
<option>Walk-in				</option>
<option>Webinar (Virtual Event)</option>
<option>Website</option>
<option>Website Chat</option>
<option>Website Form</option>
<option>YouTube</option>
			</select>
          </div></div>
		  <div class="row">
		  <div class="col-lg-4 col-12 mb-3">
            <div class="input-group mb-3 mt-2">
  <span class="input-group-text" id="basic-addon1">@</span>
  <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
</div>
          </div>
          <div class="col-lg-4 col-12 mb-3">
		  
		  <div class="input-group mb-3 mt-2">
  <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
  <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
  <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg></span>
  <input type="text" class="form-control" placeholder="Mobile No." aria-label="mobile" aria-describedby="basic-addon1">
</div>
		  
            
          </div>
          <div class="col-lg-4 col-12 mb-3">
           <div class="input-group mb-3 mt-2">
  <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
  <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
  <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg></span>
  <input type="text" class="form-control" placeholder="Alternate No." aria-label="alternate" aria-describedby="basic-addon1">
</div>
          </div></div>
		  <div class="row">
		  <div class="col-lg-4 col-12 mb-3">
            <label for="email" class="form-label add_span"><strong>Gender</strong></label><br />
            <span class="me-2 add_span">Male <input type="radio"/></span> <span class="me-2 add_span">Female <input type="radio"/></span> <span class="me-2 add_span">Other <input type="radio"/></span>
          </div>
          <div class="col-lg-4 col-12 mb-3">
            <label for="email" class="form-label add_span"><strong>Marital Status</strong></label><br />
            <span class="me-2 add_span">Single <input type="radio"/></span> <span class="me-2 add_span">Married <input type="radio"/></span>  <span class="me-2 add_span">Divorced <input type="radio"/></span> 
          </div>

           

          </div>
		  <div class="row mt-4"><h5>Address Information</h5>
		  <div class="col-lg-4 col-12 mb-3">
           
            <select class="form-select">
			<option>Country</option>
			<option>India</option>
			</select>
          </div>
          <div class="col-lg-4 col-12 mb-3">
            
           <select class="form-select">
		   <option>State</option>
			<option>Punjab </option>
			</select>
          </div>

           <div class="col-lg-4 col-12 mb-3">
            
            <select class="form-select">
      <option>City/Town</option>
      <option>Amritsar</option>
      </select>
          </div>


          <div class="col-lg-4 col-12 mb-3">
            
            <input type="number" class="form-control" name="number" id="number" placeholder=" Enter Pincode">
          </div>
 <div class="col-lg-6 col-12 mb-3">
           
           <input type="text" class="form-control" name="number" id="number" placeholder="Permanent Address">
          </div>
        </div>
		 
		  <div class="row">
		  <div class="col-12 mb-3">
		  
           
		   <textarea class="form-control" rows="6" placeholder="Enter Remarks (optional)"></textarea>
          </div>
          
          </div>
        </div>
        </div>
<div class="card-footer text-end">
        <div class="d-flex">
          <button type="button" class="btn btn-primary ms-auto">SUBMIT</button>
        </div>
      </div></div>

<?php require 'footer.php'; ?>