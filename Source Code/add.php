<?php include('server.php') ?>
<!DOCTYPE html>
<head>
	<title>Add User</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div class="header">
		<h2>Add user</h2>
	</div>
	
	<form method="post" action="add.php">

		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $name; ?>" required>
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>" required>
		</div>
        <div class="input-group">
			<label>Phone Number</label>
			<input type="number" name="phone" value="<?php echo $phone; ?>" required>
		</div>
        <div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="<?php echo $address; ?>" required>
		</div>
        <div class="input-group">
			<label>Country</label>
			<input type="text" name="country" value="<?php echo $country; ?>" required>
		</div>
        <div class="input-group">
			<label>Pin Code</label>
			<input type="number" name="pin" value="<?php echo $pin; ?>" required>
		</div>
        <div class="input-group">
			<label>State</label>
			<input type="text" name="state" value="<?php echo $state; ?>" required>
		</div>
        <div class="input-group">
			<label>Gst Number(If not Applicable type NA)</label>
			<input type="text" name="gst" value="<?php echo $gst; ?>" required>
		</div>

		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1" required>
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="add_user">Add</button>
		</div>
		<p>
		<a href="admin.php">Back to Admin Console</a>
		</p>
	</form>
</body>
</html>