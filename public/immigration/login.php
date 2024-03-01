<?php 
  $seo = '
 <title>Immigration</title> 
  <meta name="description" content="">
  <meta name="keywords" content="edced">
  ';
  include("header.php");

 ?>






<div class="container heading py-5">
<div class="d-flex justify-content-center">

<div class="col-lg-5">
<div class="row d-flex justify-content-center">
<div class="circle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lock" viewBox="0 0 16 16">
  <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 5.996V14H3s-1 0-1-1 1-4 6-4c.564 0 1.077.038 1.544.107a4.524 4.524 0 0 0-.803.918A10.46 10.46 0 0 0 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h5ZM9 13a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z"/>
</svg></div>
</div>
<div class="row"> <div class="shadow  p-4">
<h5 class="bb">Staff <span class="red">Login</span></h5>
<form>


                 <div class="mb-3 mt-5">
                 <div class="input-group mb-2 ">
                 <select class="form-select">
                 <option>Staff Login</option>
                 <option>Candidate Login</option>
                 </select>
                 </div>
                 </div>



            <div class="mb-3 mt-5">
                <div class="input-group mb-2 ">
  <span class="input-group-text" id="basic-addon1">@</span>
  <input type="text" class="form-control" placeholder="Email" aria-label="email" aria-describedby="basic-addon1">
</div>
            </div>


            <div class="mb-3">
			<div class="input-group mb-3">
   <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
  <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
</svg></span>
   <input type="passsword" class="form-control" id="password" name="password" placeholder="Password" value="">
   <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg></span>
</div>
               <div><a href="forgot_pass.php" class="forgot">Forgot password?</a></div>
            </div>
            <div class="d-flex justify-content-center"><button type="submit" class="more mb-4">LOGIN</button></div>
			<div class="d-flex justify-content-between">
			<div>Doesnot have an account? <a href="signup.php" class="create">Create an account</a></div>


			</div>
        </form>

</div>
</div>

</div>

</div>
</div>

<?php
include("footer.php");
?>