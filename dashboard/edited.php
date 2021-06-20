<?php
include("../functions/init.php");

$land_add 			=  $_POST['land_add'];
$rent_add 			=  $_POST['rent_add'];
$secure_depo		=  $_POST['secure_depo'];
$pet_depo      	=  $_POST['pet_depo'];
$rent_payable       = $_POST['rent_payable'];


$sql = "UPDATE `preferred` SET `land_add` = '$land_add', `rent_add` = '$rent_add', `secure_depo` = '$secure_depo', `pet_depo` = '$pet_depo', `rent_payable` = '$rent_payable' WHERE `id` = 1";

$result = mysqli_query($con, $sql);

if (! $result) {
    $result = mysqli_error($con);
}
echo $result;
header("location: edit.php ");
?>
