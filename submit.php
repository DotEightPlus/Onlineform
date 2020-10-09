<?php
//include database connection
include("functions/db.php");

//declare 90 variables
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
$sec_num          = $_POST['sec_num'];
$drive_num        = $_POST['drive_num'];
$vec_mod          = $_POST['vec_mod'];
$vec_year         = $_POST['vec_year'];
$income_source    = $_POST['income_source'];
$employer_name    = $_POST['employer_name'];
$position         = $_POST['position'];
$employ_length    = $_POST['employ_length'];
$supervisor       = $_POST['supervisor'];
$biz_phone        = $_POST['biz_phone'];
$income           = $_POST['income'];
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
$bank_name_1      = $_POST['bank_name_1'];
$bank_branch_1    = $_POST['bank_branch_1'];
$acc_num_1        = $_POST['acc_num_1'];
$bank_name_2      = $_POST['bank_name_2'];
$bank_branch_2    = $_POST['bank_branch_2'];
$bank_branch_2    = $_POST['bank_branch_2'];
$acc_num_2        = $_POST['acc_num_2'];
$card_name_1      = $_POST['card_name_1'];
$iss_bank_1       = $_POST['iss_bank_1'];
$acc_num          = $_POST['acc_num'];
$lim              = $_POST['lim'];
$owe              = $_POST['owe'];
$month_pay        = $_POST['month_pay'];
$ex_date          = $_POST['ex_date'];
$iss_year         = $_POST['iss_year'];
$oth_card_name    = $_POST['oth_card_name'];
$oth_iss_bank     = $_POST['oth_iss_bank'];
$oth_acc_num      = $_POST['oth_acc_num'];
$oth_lim          = $_POST['oth_lim'];
$oth_bal          = $_POST['oth_bal'];
$oth_month_pay    = $_POST['oth_month_pay'];
$oth_ex_date      = $_POST['oth_ex_date'];
$oth_iss          = $_POST['oth_iss'];
$estate           = $_POST['estate'];
$est_ex           = $_POST['est_ex'];
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
$indoor_1         = $_POST['indoor_1'];
$pet_name_2       = $_POST['pet_name_2'];
$pet_type_2       = $_POST['pet_type_2'];
$pet_size_2       = $_POST['pet_size_2'];
$indoor_2         = $_POST['indoor_2'];
$pet_name_3       = $_POST['pet_name_3'];
$pet_type_3       = $_POST['pet_type_3'];
$pet_size_3       = $_POST['pet_size_3'];
$indoor_3         = $_POST['indoor_3'];
$deal             = $_POST['deal'];
$deal_name        = $_POST['deal_name'];
$tenant_name      = $_POST['tenant_name'];
$tenant_pos       = $_POST['tenant_pos'];
$tenant_wage      = $_POST['tenant_wage'];
$tenant_per       = $_POST['tenant_per'];
$tenant_dur       = $_POST['tenant_dur'];

//insert to database table 'application'

$sql = "INSERT INTO comment(full_name,occ_num,comment_sender,email,post_id,commentedon) VALUES ('" . $commentId . "','" . $comment . "','" . $commentSenderName . "','" . $email . "','" . $postid . "','" . $date . "')";

$result = mysqli_query($con, $sql);

if (! $result) {
    $result = mysqli_error($con);
}
echo $result;

?>