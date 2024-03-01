<?php require 'header.php'; ?>
<div class="row px-4 pt-3 profile dash mb-4"><h2 class=" mb-2">View Category</h2></div>

<div class="shadow mx-4">
<div class="row">
<div class="col-lg-12">
<div class="row py-4 px-3">
<div class="row pb-3 px-3"><div class="col-lg-3 col-12">
<input type="text" class="search" placeholder="Enter Lead ID" name=""></div>

<div class="col-lg-3 col-12">
<input type="text" class="search" placeholder="Enter Student Name" name="">

</div><div class="col-lg-3 col-10">
<input type="text" class="search" placeholder="Enter Passport Number" name=""></div><div class="col-lg-3 col-2 pt-3"><a href="add_student.php" class="enq"><span style="float:right;"><span class="purple"><strong>+</strong></span></span></a></div></div>

<div class="table table-responsive px-3">

<table class="table table-striped  ">
  <tr class="table-light" align="center" text-align="center" >
  <th>Lead ID</th>
  <th>Student Name</th>
  <th>Mobile No</th>
  <th>Country</th>
  <th>Passport No</th>
  <th>Service Opted</th>
  <th>Status</th>
   <th>View Detail</th>
    <th>Action</th>
  </tr>
  <tr align="center" valign="middle" >
  <td><strong>12</strong></td>
  <td >Varundeep Singh</td>
  <td>9855995699</td>
  <td>India</td>
  <td>R.3893778</td>
  <td>Canada Student Visa</td>
  <td>
 <select class="form-select">
<option>Not Interested	</option>
<option>Wrong Number	</option>
<option>Not Qualified	</option>
<option>On Hold		</option>
<option>Plan Dropped	</option>
<option>Negotiation		</option>
<option>Open/Unassigned	</option>
<option>Future Prospect	</option>
<option>Dead/Junk Lead	</option>
<option>Not Answering	</option>
<option>Assigned		</option>
<option>In-Progress		</option>
<option>Qualified Lead	</option>
<option>Registered/Completed</option>
<option>Closed Lost</option>
 </select>
  
  </td>
  <td>
<div>
  <a href="view_details.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye info" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg></a>
</div>
</td>
<td align="center">
<div class="drop">
<a href="" class="d-flex align-items-center text-black text-decoration-none" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
  <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg></a><div class="dropdown pull-right">
     
      <ul class="dropdown-menu dropdown-menu-light text-small shadow" aria-labelledby="dropdownUser1">
	  <li><a class="dropdown-item" href="add_student.php">Edit Lead</a></li>
	 <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="process.php">Start Visa Process</a></li>
         <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Transfer Case</a></li>
         <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">View Timeline</a></li>
         <li><hr class="dropdown-divider"></li>
               
             </ul>
    </div>
	</div>
	</td>
  </tr><tr align="center" valign="middle" >
  <td><strong>12</strong></td>
  <td >Varundeep Singh</td>
  <td>9855995699</td>
  <td>India</td>
  <td>R.3893778</td>
  <td>Canada Student Visa</td>
  <td>
  <select class="form-select">
 <option>Not Interested	</option>
<option>Wrong Number	</option>
<option>Not Qualified	</option>
<option>On Hold		</option>
<option>Plan Dropped	</option>
<option>Negotiation		</option>
<option>Open/Unassigned	</option>
<option>Future Prospect	</option>
<option>Dead/Junk Lead	</option>
<option>Not Answering	</option>
<option>Assigned		</option>
<option>In-Progress		</option>
<option>Qualified Lead	</option>
<option>Registered/Completed</option>
<option>Closed Lost</option>
 </select>
  
  </td>
  <td><a href="view_details.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye info" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg></a></td>
<td><div class="drop">
<a href="" class="d-flex align-items-center text-black text-decoration-none" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
  <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg></a><div class="dropdown pull-right">
     
      <ul class="dropdown-menu dropdown-menu-light text-small shadow" aria-labelledby="dropdownUser1">
	  <li><a class="dropdown-item" href="add_student.php">Edit Lead</a></li>
	 <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="process.php">Start Visa Process</a></li>
         <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Transfer Case</a></li>
         <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">View Timeline</a></li>
         <li><hr class="dropdown-divider"></li>
               
             </ul>
    </div>
	</div></td>
  </tr><tr align="center" valign="middle" >
 <td><strong>12</strong></td>
  <td >Varundeep Singh</td>
  <td>9855995699</td>
  <td>India</td>
  <td>R.3893778</td>
  <td>Canada Student Visa</td>
  <td>
  <select class="form-select">
 <option>Not Interested	</option>
<option>Wrong Number	</option>
<option>Not Qualified	</option>
<option>On Hold		</option>
<option>Plan Dropped	</option>
<option>Negotiation		</option>
<option>Open/Unassigned	</option>
<option>Future Prospect	</option>
<option>Dead/Junk Lead	</option>
<option>Not Answering	</option>
<option>Assigned		</option>
<option>In-Progress		</option>
<option>Qualified Lead	</option>
<option>Registered/Completed</option>
<option>Closed Lost</option>
 </select>
  </td>
  <td><a href="view_details.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye info" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg></a></td>
<td><div class="drop">
<a href="" class="d-flex align-items-center text-black text-decoration-none" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
  <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg></a><div class="dropdown pull-right">
     
      <ul class="dropdown-menu dropdown-menu-light text-small shadow" aria-labelledby="dropdownUser1">
	  <li><a class="dropdown-item" href="add_student.php">Edit Lead</a></li>
	 <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="process.php">Start Visa Process</a></li>
         <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Transfer Case</a></li>
         <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">View Timeline</a></li>
         <li><hr class="dropdown-divider"></li>
               
             </ul>
    </div>
	</div></td>
  </tr>
  <tr align="center" valign="middle" >
  <td><strong>12</strong></td>
  <td >Varundeep Singh</td>
  <td>9855995699</td>
  <td>India</td>
  <td>R.3893778</td>
  <td>Canada Student Visa</td>
  <td>
  <select class="form-select">
 <option>Not Interested	</option>
<option>Wrong Number	</option>
<option>Not Qualified	</option>
<option>On Hold		</option>
<option>Plan Dropped	</option>
<option>Negotiation		</option>
<option>Open/Unassigned	</option>
<option>Future Prospect	</option>
<option>Dead/Junk Lead	</option>
<option>Not Answering	</option>
<option>Assigned		</option>
<option>In-Progress		</option>
<option>Qualified Lead	</option>
<option>Registered/Completed</option>
<option>Closed Lost</option>
 </select>
  </td>
  <td><a href="view_details.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye info" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg></a></td>
<td><div class="drop">
<a href="" class="d-flex align-items-center text-black text-decoration-none" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
  <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg></a><div class="dropdown pull-right">
     
     <ul class="dropdown-menu dropdown-menu-light text-small shadow" aria-labelledby="dropdownUser1">
	 <li><a class="dropdown-item" href="add_student.php">Edit Lead</a></li>
	 <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="process.php">Start Visa Process</a></li>
         <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Transfer Case</a></li>
         <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">View Timeline</a></li>
         <li><hr class="dropdown-divider"></li>
               
             </ul>
    </div>
	</div></td>
  </tr>
</table>
</div>
















<?php require 'footer.php'; ?>