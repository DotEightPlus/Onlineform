<?php

/****register user*****/
function register_user($fname, $lname, $tel, $email, $address, $gender, $usrname, $pword, $cpword) {

	$fname 				= escape($fname);
	$lname 				= escape($lname);
	$tel 				= escape($tel);
	$email   			= escape($email);
	$address 			= escape($address);
	$gender				= escape($gender);
	$usrname   			= escape($usrname);
	$pword 				= md5($pword);

	$datereg = date("Y-m-d h:i:sa");


$sql = "INSERT INTO ichange_signup(`sn`, `First Name`, `Last Name`, `Telephone`, `Email`, `Address`, `Gender`, `Username`, `Password`, `Datereg`, `Active`)";
$sql.= " VALUES('1', '$fname', '$lname', '$tel', '$email', '$address', '$gender', '$usrname', '$pword', '$datereg', '0')";
$result = query($sql);
confirm($result);
	 }


?>