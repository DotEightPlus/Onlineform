<?php

// $con = new mysqli("localhost","root","","online_form");
include("functions/init.php");

if(isset($_POST['renter_add']) || isset($_POST['rentee_add']) || isset($_POST['occ_len']) || isset($_POST['occ_date']) || isset($_POST['occ_length']) || isset($_POST['bed_num']) || isset($_POST['reason_move']) || isset($_POST['secure_depo']) || isset($_POST['pet_depo']) || isset($_POST['full_name']) || isset($_POST['adult']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || isset($_POST['']) || ) {


//declaration of variables
$renter_add 	  = $_POST['renter_add'];
$rentee_add 	  = $_POST['rentee_add'];
$occ_len      	  = $_POST['occ_len'];*****
$occ_date 		  = $_POST['occ_date'];
$occ_length 	  = $_POST['occ_length'];
$bed_num 		  = $_POST['bed_num'];
$reason_move 	  = $_POST['reason_move'];
$secure_depo 	  = $_POST['secure_depo'];
$pet_depo 	      = $_POST['pet_depo'];
$full_name 		  = $_POST['full_name'];
$adult       	  = $_POST['adult'];*******
$children    	  = $_POST['children'];*******
$pet              = $_POST['pet'];******* 
$gender           = $_POST['gender'];**********
$smoke            = $_POST['smoke'];
$add_now          = $_POST['add_now'];
$add_length       = $_POST['add_length'];
$phone            = $_POST['phone'];
$social           = $_POST['social'];******
$license          = $_POST['license'];**********
$model            = $_POST['model'];**********
$year             = $_POST['year'];**********
$landlord_name    = $_POST['landlord_name'];
$landlord_phone   = $_POST['landlord_phone'];
$cur_rent         = $_POST['cur_rent'];
$estate           = $_POST['estate'];***********
$estate_ex        = $_POST['estate_ex'];*********
$evict            = $_POST['evict'];
$evict_ex         = $_POST['evict_ex'];
$refused          = $_POST['refused'];
$refused_ex       = $_POST['refused_ex'];
$interrupt        = $_POST['interrupt'];
$interrupt_ex     = $_POST['interrupt_ex'];
$convicted        = $_POST['convicted'];
$convicted_ex     = $_POST['convicted_ex'];
$income_source    = $_POST['income_source'];
$company          = $_POST['company'];*********
$office_add       = $_POST['office_add'];********
$position         = $_POST['position'];
$supervisor       = $_POST['supervisor'];
$employ_length    = $_POST['employ_length'];
$tenant_wage 	  = $_POST['tenant_per'];
$tenant_per       = $_POST['tenant_per'];
$relate_name      = $_POST['relate_name'];
$relate_add       = $_POST['relate_add'];
$relate_phone     = $_POST['relate_phone'];
$relate_relation  = $_POST['relate_relation'];
$per_name_1       = $_POST['per_name_1'];
$per_add_1        = $_POST['per_add_1'];
$per_phone_1      = $_POST['per_phone_1'];
$per_relation_1   = $_POST['per_relation_1'];
$tenant_name      = $_POST['tenant_name'];
$app_date        = $_POST['app_date'];


//insert to database table 'application'

	$sql = "INSERT INTO `form_data` (`renter_add`, `rentee_add`, `occ_date`, `occ_length`, `bed_num`, `reason_move`, `secure_depo`, `pet_depo`, `full_name`, `smoke`, `pet`, `add_now`, `add_length`, `phone`, `cur_rent`, `landlord_name`, `landlord_phone`, `income_source`, `employer_name`, `position`, `employ_length`, `supervisor`, `income`, `relate_name`, `relate_add`, `relate_phone`, `relate_relation`, `per_name_1`, `per_add_1`, `per_phone_1`, `per_relation_1`, `evict`, `evict_ex`, `refused`, `refused_ex`, `interrupt`, `interrupt_ex`, `convicted`, `convicted_ex`, `app_date`, `tenant_name`, `tenant_wage`, `tenant_per`, `occ_len`, `adult`, `children`, `gender`, `social`, `license`, `model`, `year`, `estate`, `estate_ex`, `company`, `office_add`)
		 VALUES ('$rentee_add','$renter_add','$occ_date','$occ_length','$bed_num','$reason_move','$secure_depo','$pet_depo','$full_name','$smoke','$pet','$add_now','$add_length','$phone','$cur_rent','$landlord_name','$landlord_phone','$income_source','$employer_name','$position','$employ_length','$supervisor','$income','$relate_name','$relate_add','$relate_phone','$relate_relation','$per_name_1','$per_add_1','$per_phone_1','$per_relation_1','$evict','$evict_ex','$refused','$refused_ex','$interrupt','$interrupt_ex','$convicted','$convicted_ex','$app_date','$tenant_name','$tenant_wage','$tenant_per','$occ_len','$adult','$children','$gender','$social','$license','$model','$year','$estate','$estate_ex','$company','$office_add')";

$result = mysqli_query($con, $sql);
$_SESSION['su'] = "Your form";
header("location: ./submitted");
} else {

header("location: ./error");

}


?>