<?php

/*************helper functions***************/

function clean($string) {

	return htmlentities($string);
}

function redirect($location) {

	return header("Location: {$location}");
}

function set_message($message) {

	if(!empty($message)) {

		$_SESSION['message'] = $message;

		}else {

			$message = "";
		}
}



function display_message() {

	if(isset($_SESSION['message'])) {

		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
}


function validation_errors($error_message) {

$error_message = <<<DELIMITER

<div class="alert alert-danger alert-mg-b alert-success-style6 alert-st-bg3 alert-st-bg14">
    <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
		<span class="icon-sc-cl" aria-hidden="true">&times;</span>
									</button>
                 <p><strong>$error_message </strong></p>
                            </div>
DELIMITER;

   return $error_message;     

}


function validator($error_message) {

$error_message = <<<DELIMITER
<div style="background: rgba(234, 114, 140, 0.9); color: white;" class="col-md-12 alert alert-danger alert-mg-b alert-success-style6 alert-st-bg3 alert-st-bg14">
    <button type="button" style="color: white;" class="col-md-12 close sucess-op" data-dismiss="modal" aria-label="Close">
		<span class="icon-sc-cl" aria-hidden="true">&times;</span>
									</button>
                 <p style="color: white;"><strong>$error_message </strong></p>
                            </div>
DELIMITER;

   return $error_message;     

}

/**********************validate user login functions**********/

$errors = [];

 	if(isset($_POST['password'])) {

			$password   	 = clean($_POST['password']);

			
			if(!empty($errors)) {

				foreach ($errors as $error) {
			
	                echo validation_errors($error); 

				}

			} else {

				if(login_user($password)) {

					echo validator("Loading...Please wait!");												
				 echo '<script>window.location.href ="./"</script>';

				} else {

					echo validator("Wrong Username or Password");
				}
			} 

		}


/************************ user login functions**********/

function login_user($password) {

$sql = "SELECT `password` FROM `form_admin`";
$result = query($sql);
if(row_count($result) == 1) {
	$row = mysqli_fetch_array($result);

	$user_password = $row['password'];

	if($password == $user_password) {
		$_SESSION['started'] = $password;

	return true;
} else {

	return false;
}
}
}
 //end of function 
?> 