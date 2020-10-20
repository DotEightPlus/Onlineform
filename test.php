<?php
include("functions/init.php");
if (isset($_POST['catclass']) || isset($_POST['subject'])) {
	
$renter_add 	  = $_POST['catclass'];
$rentee_add 	  = $_POST['subject'];

$sql = "INSERT INTO `form_data` (`renter_add`, `rentee_add`) VALUES ('$rentee_add','$renter_add')";
$result = query($result);

$_SESSION['su'] = "ddw";

echo '<script>window.location.href = "./submitted</script>';
}

?>