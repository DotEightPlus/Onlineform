<?php
include("../functions/init.php");

$data = $_SESSION["data"];

$sql = "DELETE FROM form_data WHERE id = " . $data . "";

$result = mysqli_query($con, $sql);

if (! $result) {
    $result = mysqli_error($con);
}
echo $result;
header("location: ./delete ");
?>
