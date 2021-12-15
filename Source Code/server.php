<?php 
	include("include/connect.php");

	// variable declaration
	$name = "";
	$email = "";
	$phone = "";
    $address = "";
    $country = "";
    $pin = "";
    $state = "";
    $gst = "";
    $password_1 = "";
    $password_2 = "";
    $password = "";
    $errors = array(); 
	$_SESSION['success'] = "";


	// REGISTER USER
	// if (isset($_POST['reg_user'])) {
	// 	// receive all input values from the form
	// 	$name = mysqli_real_escape_string($conn, $_POST['name']);
	// 	$email = mysqli_real_escape_string($conn, $_POST['email']);
    //     $phone = mysqli_real_escape_string($conn, $_POST['phone']);
	// 	$address = mysqli_real_escape_string($conn, $_POST['address']);
    //     $country = mysqli_real_escape_string($conn, $_POST['country']);
    //     $pin = mysqli_real_escape_string($conn, $_POST['pin']);
    //     $state = mysqli_real_escape_string($conn, $_POST['state']);
    //     $gst = mysqli_real_escape_string($conn, $_POST['gst']);

    //     $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
	// 	$password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

	// 	// form validation: ensure that the form is correctly filled
	// 	// if (empty($name)) { array_push($errors, "Name is required"); }
	// 	if (empty($email)) { array_push($errors, "Email is required"); }
	// 	if (empty($password_1)) { array_push($errors, "Password is required"); }
		
	// 	//username exist 
	// 	// $query = "SELECT * FROM users WHERE username='$username'";
	//     // $results = mysqli_query($db, $query);
	//     // if (mysqli_num_rows($results) > 0) {
	//     //     $errors['username'] = "Username already taken";
	//     // }

	//     //email exist 
	// 	$query = "SELECT * FROM users WHERE email='$email'";
	//     $results = mysqli_query($conn, $query);
	//     if (mysqli_num_rows($results) > 0) {
	//         $errors['email'] = "Email already exists";
	//     }

	// 	if ($password_1 != $password_2) {
	// 		array_push($errors, "The two passwords do not match");
	// 	}

	// 	// register user if there are no errors in the form
	// 	if (count($errors) == 0) {
	// 		// $password = md5($password_1);//encrypt the password before saving in the database
	// 		$password = $password_1;
	// 		$query = "INSERT INTO users (name, email, phone, address, country, pin, state, gst, password) 
	// 				  VALUES('$name', '$email', '$phone', '$address', '$country', '$pin', '$state', '$gst','$password')";
	// 		mysqli_query($db, $query);

	// 		$_SESSION['email'] = $email;
	// 		$_SESSION['success'] = "You are now logged in";
	// 		header('location: admin.php');
	// 	}

	// }
	

	// // LOGIN USER
	// if (isset($_POST['login_user'])) {
	// 	$email = mysqli_real_escape_string($conn, $_POST['email']);
	// 	$password = mysqli_real_escape_string(conn, $_POST['password']);

	// 	if (empty($email)) {
	// 		array_push($errors, "Email is required");
	// 	}
	// 	if (empty($password)) {
	// 		array_push($errors, "Password is required");
	// 	}

	// 	if (count($errors) == 0) {
	// 		// $password = md5($password);
	// 		$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	// 		$results = mysqli_query($conn, $query);

	// 		if (mysqli_num_rows($results) == 1) {
	// 			$_SESSION['email'] = $email;
	// 			$_SESSION["login"] = "OK";
	// 			$_SESSION['success'] = "You are now logged in";
	// 			header('location: user.php');
	// 		}else {
	// 			array_push($errors, "Wrong email and password");
	// 		}
	// 	}
	// }


	// //Admin Login
	// if (isset($_POST['login_admin'])) {
	// 	$username = mysqli_real_escape_string($conn, $_POST['username']);
	// 	$password = mysqli_real_escape_string($conn, $_POST['password']);

	// 	if (empty($username)) {
	// 		array_push($errors, "Username is required");
	// 	}
	// 	if (empty($password)) {
	// 		array_push($errors, "Password is required");
	// 	}

	// 	if (count($errors) == 0) {
	// 		$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
	// 		$results = mysqli_query($conn, $query);

	// 		if (mysqli_num_rows($results) == 1) {
	// 			$_SESSION['username'] = $username;
	// 			$_SESSION["login"] = "OK";
	// 			$_SESSION['success'] = "You are now logged in";
	// 			header('location: Admin.php');
	// 		}else {
	// 			array_push($errors, "Wrong username and password");
	// 		}
	// 	}
	// }

	//Add user Admin
	if (isset($_POST['add_user'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
		$address = mysqli_real_escape_string($conn, $_POST['address']);
        $country = mysqli_real_escape_string($conn, $_POST['country']);
        $pin = mysqli_real_escape_string($conn, $_POST['pin']);
        $state = mysqli_real_escape_string($conn, $_POST['state']);
        $gst = mysqli_real_escape_string($conn, $_POST['gst']);

        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);

		// form validation: ensure that the form is correctly filled
		// if (empty($name)) { array_push($errors, "Name is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		
	    //email exist 
		$query = "SELECT * FROM users WHERE email='$email'";
	    $results = mysqli_query($conn, $query);
	    if (mysqli_num_rows($results) > 0) {
	        $errors['email'] = "Email already exists";
	    }

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			// $password = md5($password_1);//encrypt the password before saving in the database
			$password = $password_1;
			$query = "INSERT INTO users (name, email, phone, address, country, pin, state, gst, password) 
					  VALUES('$name', '$email', '$phone', '$address', '$country', '$pin', '$state', '$gst','$password')";
			mysqli_query($conn, $query);

			// $_SESSION['email'] = $email;
			// $_SESSION['success'] = "You are now logged in";
			
			header('location: admin.php');
		}
	}


	//Update user
	
	
?>