<?php 
  $seo = '
 <title>Immigration</title> 
  <meta name="description" content="">
  <meta name="keywords" content="edced">
  ';
  include("header.php");

 ?>
<style>
#container {
  max-width: 100%;  
}

    .step-container {
      position: relative;
      text-align: center;
      transform: translateY(-43%);
    }

    .step-circle {
      width: 30px;
      height: 30px;
      border-radius:50%;
      background-color:#fff;
      border: 2px solid #c32035;
      line-height: 30px;
      font-weight: bold;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 10px;
      cursor: pointer; /* Added cursor pointer */
    }

    .step-line {
      position: absolute;
      top: 16px;
      left: 50px;
      width: calc(100% - 100px);
      height: 2px;
      background-color: #007bff;
      z-index: -1;
    }
    
    #multi-step-form{
		overflow-x: hidden;
	}
	
.progress, .progress-stacked {
    --bs-progress-height: 1rem;
    --bs-progress-font-size: 0.75rem;
    --bs-progress-bg: var(--bs-secondary-bg);
    --bs-progress-border-radius: var(--bs-border-radius);
    --bs-progress-box-shadow: var(--bs-box-shadow-inset);
    --bs-progress-bar-color: #fff;
    --bs-progress-bar-bg: #4f4f50!Important;
    --bs-progress-bar-transition: width 0.6s ease;
    display: flex;
    height: var(--bs-progress-height);
    overflow: hidden;
    font-size: var(--bs-progress-font-size);
    background-color: var(--bs-progress-bg);
    border-radius: var(--bs-progress-border-radius);
}	
	
	
	</style>

<div class="container py-4">
<div class="row">


<div class="col-lg-12">
	<h2 class="pt-3 hh">Check Eligibility</h2>
<p><small>Don't know where you fit the best? Take these 3 steps and find out what's best for you or you can contact us and we will get back to you within 24 hours.</small></p>

<div id="container" class="container mt-5">
  <div class="progress px-1" style="height: 3px;">
    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  <div class="step-container d-flex justify-content-between">
    <div class="step-circle" onclick="displayStep(1)">1</div>
    <div class="step-circle" onclick="displayStep(2)">2</div>
    <div class="step-circle" onclick="displayStep(3)">3</div>
  </div>

  <form id="multi-step-form">
    <div class="step step-1">
      <!-- Step 1 form fields here -->
      <h3 class="mb-5 h4">Education Background</h3>
      <div class="mb-3">
        <label for="field1" class="form-label"><h4>What is your country of Education?</h4>	</label>
       
		<select class="form-select" id="field1" name="field1">
		<option>India</option>
		</select>
      </div>
	 <div class="mb-3">
        <label for="field1" class="form-label"><h4>What is your highest level of Education?</h4>	</label>
		<h6>Your Highest Qualification</h6>
		<select class="form-select" id="field1" name="field1">
		<option>1-Year Post-Secondary Degree/Certificate</option>
		</select>
      </div> 
	  <div class="mb-3">
        <label for="field1" class="form-label"><h4>What is your most recent overall grade?</h4>	</label>
		<h6>Grading Scheme</h6>
		<select class="form-select" id="field1" name="field1">
		<option>Other</option>
		</select>
      </div>
	  <div class="mb-3">
        <label for="field1" class="form-label"><h4>Grading Scale</h4>	</label>
		
		<select class="form-select" id="field1" name="field1" style="margin-bottom:0px;">
		<option>10</option>
		</select>
		<small>This grade will be converted to the school's grading system.</small>
      </div>
	  <div class="mb-3">
        <label for="field1" class="form-label"><h4>What is your most recent overall grade?</h4>	</label>
		<h6>Grading Average</h6>
		<select class="form-select" id="field1" name="field1">
		<option>6</option>
		</select>
      </div>
      <button type="button" class="more next-step">Next Preference</button>
    </div>

    <div class="step step-2">
      <!-- Step 2 form fields here -->
      <h3 class="mb-5 h4 text-center">Preference</h3>
      <div class="mb-3">
        <label for="field2" class="form-label"><h4>Which country are you interested in?</h4></label>
        <select class="form-select" id="field1" name="field1">
		<option>Australia</option>
		</select>
      </div><div class="mb-3">
        <label for="field2" class="form-label"><h4>Which level of study are you interested in?</h4></label>
        <select class="form-select" id="field1" name="field1">
		<option>Bachelor's Degree</option>
		</select>
      </div><div class="mb-3">
        <label for="field2" class="form-label"><h4>Which discipline or field of study are you interested in?</h4></label>
        <select class="form-select" id="field1" name="field1">
		<option>Computer Science & IT</option>
		</select>
      </div>
      <button type="button" class="less prev-step">Previous</button>
      <button type="button" class="more  next-step">Next</button>
    </div>

    <div class="step step-3">
      <!-- Step 3 form fields here -->
      <h3 class="mb-5 h4 text-right">Test Score</h3>
      <div class="mb-3">
        <label for="field3" class="form-label"><h4>Which English proficiency test have you taken?</h4></label>
        <select class="form-select" id="field1" name="field1">
		<option>IELTS</option>
		<option>6</option>
		</select>
		<select class="form-select" id="field1" name="field1" style="margin-bottom:0px; margin-top:20px;">
		<option>6</option>
		</select>
		<small>If not taken yet, enter predicted score</small>
      </div>
      <button type="button" class="less prev-step">Previous</button>
      <button type="submit" class="more">Submit</button>
    </div>
  </form>
</div>


</div>
</div>

</div>



  
  
<?php
include("footer.php");
?>