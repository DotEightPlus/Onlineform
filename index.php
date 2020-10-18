<?php 
include("functions/init.php");
$sql = "SELECT * FROM preferred  WHERE id = 1 ";

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result) ?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="House Renting">
    <meta name="author" content="House Renting">
    <meta name="keywords" content="Renting House">

    <!-- Title Page-->
    <title>Applicationrentalonlineform</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- datepicker -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
	<div class="page-content" style="background-image: url('images/wizard-v3.jpg')">
		<div class="wizard-v3-content">
			<div class="wizard-form">
				<div class="wizard-header">
					 <h2 class="title" align="center">RENTAL APPLICATION</h2>
					<p>Fill all form field to go next step</p>
				</div>
		        <form class="form-register" action="submitt.php" method="post">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
			            	<span class="step-text">Rent Info</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	   <h4 class="title">Landlord:</h4>
                    <h4 style="width: 200px"><?php  echo $row['land_add'];  ?></h4>
                    <br/><br/>
                     <h5 class="title" align="center">This Application is made to rent:</h5>
                    <h4 style="width: 200px"><?php  echo $row['rent_add'];  ?></h4>
                    <br/><br/>
                    <input type="text" value="<?php  echo $row['land_add'];  ?>" name="renter_add" hidden>
                    <input type="text" value="<?php  echo $row['rent_add'];  ?>" name="rentee_add" hidden>
                   
                   <div class="form-row">
						<div class="form-holder form-holder-2">
							<label class="form-row-inner">
								<input type="text" class="form-control" id="Desired_Length" name="occ_len" required>
								<span class="label">For a term of:</span>
					  			<span class="border"></span>
							</label>
						</div>
				    </div>
                   	<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="Desired_date" name="occ_date" required>
											<span class="label">Desired date of occupancy:</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="Desired_Length" name="occ_length" required>
											<span class="label">Desired Length of occupancy:</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
									<div class="form-row form-row-date">
									<div class="form-holder form-holder-2">
										<label for="date" class="special-label">Number of Bedrooms:</label>
										<select name="bed_num" id="Number_of_Bedrooms">
											<option disabled selected></option>
											  <option>1 Bedroom</option>
                                    <option>2 Bedrooms</option>
                                    <option>3 Bedrooms</option>
                                    <option>4 Bedrooms</option>
                                    <option>5 Bedrooms</option>
										</select>
								
										
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="moving" name="reason_move" required>
											<span class="label">Reason for moving:</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<h4 align="center"> The rent shall be $700.00 per month, payable in advance.</h4><br/>
                        <h5> The following deposits are required:</h5>
                        		<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="number" class="form-control" id="moving" name="secure_depo" value="<?php  echo $row['secure_depo'];  ?>" disabled>
											<span class="label">Security Deposit:</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="number" class="form-control" id="moving" name="pet_depo" value="<?php  echo $row['pet_depo'];  ?>" disabled>
											<span class="label">Pet Deposit:</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
                        

                    <h5>The deposit will be returned to the Applicant if the Premises are not rented to the Applicant. </h5>
                    <h5>The total amount of $______ shall be due upon signature of the lease.</h5>
                    <h5>An application deposit of $50.00 is due with this application.</h5>
                    <h5>The Applicant understands and agrees that if this Application is accepted and the Applicant fails to execute a lease before the beginning date specified above , or to pa the required deposits and the first month's rent, the application deposit will be forfeited as liquidated damages</h5>
                    <h5>It is alsounderstood that if the Appication is not accepted, or if the Premises are not ready for occupancy by the Applicant on the beginning date specified above, the deposit shall be returned to the Applicant, upon the Applicant request.</h5>
                    <h5>Applicant on the beginning date specified above, the deposit shall be returned to the Applicant, upon the Applicant's request.</h5>
                    <h5>The Applicants understands that the Landlord may perform a credit check to verify the Application's credit references and credit history in connection with the processing of this Rental Application.</h5>
			               	
			               
								
							
							</div>
			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-lock"></i></span>
			            	<span class="step-text">Personal</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>APPLICANT INFORMATION</h3>
			                	<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="first_name" name="full_name" required>
											<span class="label">Full Name</span>
					  						<span class="border"></span>
										</label>
									</div>
									
								</div>
								<div class="form-row form-row-date">
									<div class="form-holder form-holder-2">
										<label for="date" class="special-label">Population of Applicants:</label>
										<select name="adult" id="Population_adults">
											<option disabled selected>Adults</option>***************
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
										<select name="children" id="Population_children">
											<option disabled selected>Children</option>*************
										    <option>0</option>
										    <option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
											<select name="pet" id="Population_pets">
											<option disabled selected>Pets</option>************
											<option>0</option>
										    <option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
										
									</div>
								</div><br/>
									<div class="form-row">
									<div class="form-row">
									<div id="radio">
										<label>Gender:</label>*******************
										<input type="radio" name="gender" value="Male" checked class="radio-1"> Male
  										<input type="radio" name="gender" value="Female"> Female 
  										&nbsp;&nbsp;&nbsp;&nbsp;




									</div>
								</div><br/>
										<div class="form-row">
									<div id="radio">
										<label>Smoker:</label>
										<input type="radio" name="smoke" value="Yes" checked class="radio-1"> Yes
  										<input type="radio" name="smoke" value="No"> No
									</div>
								</div>
								</div><br/>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="Present_Address" name="add_now" required>
											<span class="label">Present Address:</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="time_address" name="add_length" required>
											<span class="label">How long at present address:</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
									<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="number" class="form-control" id="personal_phone" name="phone" required>
											<span class="label">Home Phone No:(+1)</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
									<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="Social" name="social" required>
											<span class="label">Social Security No:</span>**************
					  						<span class="border"></span>
										</label>
									</div>
								</div>
									<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="License" name="license" required>
											<span class="label">Driver's License No:</span>*************
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="Vehicle_model" name="model" required>
											<span class="label">Vehicle Model:</span>**************
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="Vehicle_year" name="year" required>
											<span class="label">Year:</span>*****************
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="landlord_name" name="landlord_name" required>
											<span class="label">Landlord's Name</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="landlord_phone" name="landlord_phone" required>
											<span class="label">Landlord's Phone No:(+1)</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="rent pay" name="rent_pay" required>
											<span class="label">Current Rent Payment</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div><br/>
								<div class="form-row">
									<div class="form-row">
								<div id="radio">
										<label>Do you own real estate?:</label>
										<input type="radio" name="estate" value="Yes" checked class="radio-1"> Yes
  										<input type="radio" name="estate" value="No">No
									</div>
								</div>&nbsp;&nbsp;
										<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="estate_explain" name="estate_explain" required>
											<span class="label">If yes, Please Explain:</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
										<div class="form-row">
									<div class="form-row">
								<div id="radio">
										<label>Have you ever been evicted from any rental premises?:</label>
										<input type="radio" name="evict" value="Yes" checked class="radio-1"> Yes
  										<input type="radio" name="evict" value="No">No
									</div>
								</div>&nbsp;&nbsp;
										<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="evict_ex" name="evict_explain" required>
											<span class="label">If yes, Please Explain:</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
									<div class="form-row">
									<div class="form-row">
								<div id="radio">
										<label>Have you ever willfully and intentionally refused to pay rent when due?:</label>
										<input type="radio" name="refused" value="Yes" checked class="radio-1"> Yes
  										<input type="radio" name="refused" value="No">No
									</div>
								</div>&nbsp;&nbsp;
										<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="refused" name="refuse_ex" required>
											<span class="label">If yes, Please Explain:</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-row">
								<div id="radio">
										<label>Are there any circumstances which may interrupt your income or ability to pay rent?:</label>
										<input type="radio" name="interrupt" value="yes" checked class="radio-1"> Yes
  										<input type="radio" name="interrupt" value="no">No
									</div>
								</div>&nbsp;&nbsp;
										<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="interrupt_explain" name="interrupt_ex" required>
											<span class="label">If yes, Please Explain:</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
									<div class="form-row">
									<div class="form-row">
								<div id="radio">
										<label>Have you ever been convicted of a felony?:</label>
										<input type="radio" name="convict" value="yes" checked class="radio-1"> Yes
  										<input type="radio" name="convict" value="no">No
									</div>
								</div>&nbsp;&nbsp;
										<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="convict_ex" name="felony_explain" required>
											<span class="label">If yes, Please Explain:</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<br/><br/>
                        	
                        <h5>IT IS AGAINST THE LAW TO DISCRIMINATE AGAINST PROSPECTIVE TENANTS ON THE BASIS OF RAC,RELIGION, NATIONAL ORIGIN, AGE, DISABILITY OR FAMILY STATUS. LOCAL OR STATE LAWS MAY INCLUDE ADDITIONAL CLASSES WHICH ARE PROTECTED FROM DISCRIMINATION IN HOUSES.</h5>
                        <h5>The information provided by the prospective tenant(s) may be used by David Westley will disclosed to the Applicant in writing the nature and scope of any investigation David Westley has requested, and will, if the Applicant is refused, state in writing the reason for said refusal.</h5><br/>
								
									
								
							
							</div>
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-card"></i></span>
			            	<span class="step-text">Earnings</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h5>TENANT OCCUPATION INFORMATION</h5>
			                		<div class="form-row form-row-date">
									<div class="form-holder form-holder-2">
										<label for="date" class="special-label">Sources of Income:</label>
										<select name="income_source" id="income_source">
											<option value="Day" disabled selected></option>
									<option>Wages</option>
                                    <option>Salary</option>
                                    <option>Commision</option>
                                    <option>Tips</option>
                                    <option>Gov't assistance</option>
                                    <option>Child support/Alimony</option>
                                    <option>other</option>
										</select>
								
										
									</div>
								</div>
			                	<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="company_name" name="company" required>
											<span class="label">Company Name</span>****************
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="office_address" name="office_add" required>
											<span class="label">Office Address</span>****************
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="position" name="position" required>
											<span class="label">Position Held</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
									<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="Employer's_Name" name="supervisor" required>
											<span class="label">Supervisor's Name</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
									<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="Employment_lenght" name="supervisor" required>
											<span class="label">Lenght of Employment</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
									<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="wages" name="tenant_wage" required>
											<span class="label">Wages/Salary</span>
					  						<span class="border"></span>
										</label>
									</div><br/>
									<div class="form-row form-row-date">
									<div class="form-holder form-holder-2">
										<label for="date" class="special-label">per:</label>
										<select name="tenant_per" id="per">
											<option value="Day" disabled selected></option>
											<option>Hour</option>
											<option>Day</option>
											  <option>weekly</option>
                                    <option>bi-weekly</option>
                                    <option>Monthly</option>
                                    <option>Yearly</option>
                                   
										</select>
								
										
									</div>
								</div>
								</div>
 <h5>I represent that the information provided in this Application is true and correct to the best of my Knowledge. David Westley is authorized to verify the references and employment information given in this Application and to request a credit check. I acknowlwdge receipt of a copy of this application.</h5>
								
			                	
			     
							</div>
			            </section>
			            <!-- SECTION 4 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-account"></i></span>
			            	<span class="step-text">References</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>NEAREST RELATIVE NOT LIVING WITH YOU:</h3>
			                	<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="relative's_Name" name="relate_name" required>
											<span class="label">Name</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="relative's_Address" name="relate_add" required>
											<span class="label">Address</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="relative's_Phone" name="relate_phone" required>
											<span class="label">Home Phone:(+1)</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="relative's_relationship" name="relate_relation" required>
											<span class="label">Relationship:</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<h4 align="center">others</h4>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="relative's_Name2" name="per_name_1" required>
											<span class="label">Name</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="relative's_Address2" name="per_add_1" required>
											<span class="label">Address</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="relative's_Phone2" name="per_phone_1" required>
											<span class="label">Home Phone:(+1)</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="relative's_relationship2" name="per_relation_1" required>
											<span class="label">Relationship:</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								 <h5> I have completed the above information in connection with a rental application. The addressee of this letter is authorized to verify this information and supply the above name landlord with the information requested in the following items. Your response is solely a matter of courtesy for which no responsibility is attached to your institution or any of your officers.</h5>
								 <div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="first_name" name="tenant_name" required>
											<span class="label">Applicant's Name</span>
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="date_filled" name="app_date" required>
											<span class="label">Date</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
							</div>
			            </section>
		        	</div>
		        </form>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.steps.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>