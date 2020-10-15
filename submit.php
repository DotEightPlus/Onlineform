<?php

// $con = new mysqli("localhost","root","","online_form");
include("functions/db.php");


//declaration of variables
$renter_add 	  = $_POST['renter_add'];
$rentee_add 	  = $_POST['rentee_add'];
$occ_date 		  = $_POST['occ_date'];
$occ_length 	  = $_POST['occ_length'];
$bed_num 		  = $_POST['bed_num'];
$reason_move 	  = $_POST['reason_move'];
$secure_depo 	  = $_POST['secure_depo'];
$pet_depo 	      = $_POST['pet_depo'];
$full_name 		  = $_POST['full_name']; 
$occ_num          = $_POST['occ_num'];
$bed              = $_POST['bed'];
$smoke            = $_POST['smoke'];
$pet              = $_POST['pet'];
$add_now          = $_POST['add_now'];
$add_length       = $_POST['add_length'];
$phone            = $_POST['phone'];
$cur_rent         = $_POST['cur_rent'];
$prior_add        = $_POST['prior_add'];
$prior_length     = $_POST['prior_length'];
$landlord_name    = $_POST['landlord_name'];
$landlord_phone   = $_POST['landlord_phone'];
$rent_pay         = $_POST['rent_pay'];
$reason           = $_POST['reason'];
$income_source    = $_POST['income_source'];
$price			  = $_POST['price'];
$employer_name    = $_POST['employer_name'];
$position         = $_POST['position'];
$employ_length    = $_POST['employ_length'];
$supervisor       = $_POST['supervisor'];
$biz_phone        = $_POST['biz_phone'];
$income           = $_POST['income'];
$employer_name    = $_POST['p_employer_name'];
$position         = $_POST['p_position'];
$employ_length    = $_POST['p_employ_length'];
$supervisor       = $_POST['p_supervisor'];
$biz_phone        = $_POST['p_biz_phone'];
$income           = $_POST['income'];
$p_employer_name    = $_POST['p_employer_name'];
$p_position         = $_POST['p_position'];
$p_employ_length    = $_POST['p_employ_length'];
$p_supervisor       = $_POST['p_supervisor'];
$p_biz_phone        = $_POST['p_biz_phone'];
$p_income           = $_POST['p_income'];
$relate_name      = $_POST['relate_name'];
$relate_add       = $_POST['relate_add'];
$relate_phone     = $_POST['relate_phone'];
$relate_relation  = $_POST['relate_relation'];
$per_name_1       = $_POST['per_name_1'];
$per_add_1        = $_POST['per_add_1'];
$per_phone_1      = $_POST['per_phone_1'];
$per_relation_1   = $_POST['per_relation_1'];
$per_name_2       = $_POST['per_name_2'];
$per_add_2        = $_POST['per_add_2'];
$per_phone_2      = $_POST['per_phone_2'];
$per_relation_2   = $_POST['per_relation_2'];
$evict            = $_POST['evict'];
$evict_ex         = $_POST['evict_ex'];
$refused          = $_POST['refused'];
$refused_ex       = $_POST['refused_ex'];
$interrupt        = $_POST['interrupt'];
$interrupt_ex     = $_POST['interrupt_ex'];
$convicted        = $_POST['convicted'];
$convicted_ex     = $_POST['convicted_ex'];
$pet_name_1       = $_POST['pet_name_1'];
$pet_type_1       = $_POST['pet_type_1'];
$pet_size_1       = $_POST['pet_size_1'];
$door_1         = $_POST['indoor_1'];
$pet_name_2       = $_POST['pet_name_2'];
$pet_type_2       = $_POST['pet_type_2'];
$pet_size_2       = $_POST['pet_size_2'];
$door_2         = $_POST['indoor_2'];
$pet_name_3       = $_POST['pet_name_3'];
$pet_type_3       = $_POST['pet_type_3'];
$pet_size_3       = $_POST['pet_size_3'];
$door_3         = $_POST['indoor_3'];
$app_date        = $_POST['app_date'];
$deal             = $_POST['deal'];
$deal_name        = $_POST['deal_name'];
$tenant_name      = $_POST['tenant_name'];
$tenant_pos       = $_POST['tenant_pos'];
$tenant_wage      = $_POST['tenant_wage'];
$tenant_per       = $_POST['tenant_per'];
$tenant_dur       = $_POST['tenant_dur'];

//insert to database table 'application'

	$sql = "INSERT INTO `form_data` (`renter_add`, `rentee_add`, `occ_date`, `occ_length`, `bed_num`, `reason_move`, `secure_depo`, `pet_depo`, `full_name`, `occ_num`, `bed`, `smoke`, `pet`, `add_now`, `add_length`, `phone`, `cur_rent`, `prior_add`, `prior_length`, `landlord_name`, `landlord_phone`, `rent_pay`, `reason`, `income_source`, `price`, `employer_name`, `position`, `employ_length`, `supervisor`, `biz_phone`, `income`, `p_employer_name`, `p_position`, `p_employ_length`, `p_supervisor`, `p_biz_phone`, `p_income`, `relate_name`, `relate_add`, `relate_phone`, `relate_relation`, `per_name_1`, `per_add_1`, `per_phone_1`, `per_relation_1`, `per_name_2`, `per_add_2`, `per_phone_2`, `per_relation_2`, `evict`, `evict_ex`, `refused`, `refused_ex`, `interrupt`, `interrupt_ex`, `convicted`, `convicted_ex`, `pet_name_1`, `pet_type_1`, `pet_size_1`, `indoor_1`, `pet_name_2`, `pet_type_2`, `pet_size_2`, `indoor_2`, `pet_name_3`, `pet_type_3`, `pet_size_3`, `indoor_3`, `app_date`, `deal`, `deal_name`, `tenant_name`, `tenant_pos`, `tenant_wage`, `tenant_per`, `tenant_dur`)
		 VALUES ('$rentee_add','$renter_add','$occ_date','$occ_length','$bed_num','$reason_move','$secure_depo','$pet_depo','$full_name','$occ_num','$bed','$smoke','$pet','$add_now','$add_length','$phone','$cur_rent','$prior_add','$prior_length','$landlord_name','$landlord_phone','$rent_pay','$reason','$income_source','$price','$employer_name','$position','$employ_length','$supervisor','$biz_phone','$income','$p_employer_name','$p_position','$p_employ_length','$p_supervisor','$p_biz_phone','$p_income','$relate_name','$relate_add','$relate_phone','$relate_relation','$per_name_1','$per_add_1','$per_phone_1','$per_relation_1','$per_name_2','$per_add_2','$per_phone_2','$per_relation_2','$evict','$evict_ex','$refused','$refused_ex','$interrupt','$interrupt_ex','$convicted','$convicted_ex','$pet_name_1','$pet_type_1','$pet_size_1','$door_1','$pet_name_2','$pet_type_2','$pet_size_2','$door_2','$pet_name_3','$pet_type_3','$pet_size_3','$door_3','$app_date','$deal','$deal_name','$tenant_name','$tenant_pos','$tenant_wage','$tenant_per','$tenant_dur')";

$result = mysqli_query($con, $sql);

if (! $result) {
    $result = mysqli_error($con);
}

echo $result;

?>