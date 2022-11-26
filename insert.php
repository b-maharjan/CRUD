<?php
session_start();
include 'dbconn.php';
if(isset($_POST['submit']))
{
	$data=[
'username' => $_POST['username'],
'password' => $_POST['password'],
'phone' => $_POST['contactno'],
'email' => $_POST['email'],
'role' => $_POST['role'],

];
$db->saveRecords('employee', $data);
print_r($db->getAllUsers());
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
	<title>Add employee</title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<style>
		body {
			color: #fff;
			background: #63738a;
			font-family: 'Roboto', sans-serif;
		}

		.form-control {
			height: 40px;
			box-shadow: none;
			color: #969fa4;
		}

		.form-control:focus {
			border-color: #5cb85c;
		}

		.form-control,
		.btn {
			/* border-radius: 3px; */
			height: 40px;
			box-shadow: none;
			color: #969fa4;
		}

		.signup-form {
			margin: 0 auto;
			padding: 30px 0;
			font-size: 15px;
		}

		.signup-form h2 {
			color: #636363;
			margin: 0 0 15px;
			position: relative;
			text-align: center;
		}

		.signup-form h2:before,
		.signup-form h2:after {
			content: "";
			height: 2px;
			width: 40%;
			background: #d4d4d4;
			position: absolute;
			top: 50%;
			z-index: 2;
		}

		.signup-form h2:before {
			left: 0;
		}

		.signup-form h2:after {
			right: 0;
		}

		.signup-form .hint-text {
			color: #999;
			margin-bottom: 30px;
			text-align: center;
		}

		.signup-form form {
			color: #999;
			border-radius: 3px;
			margin-bottom: 15px;
			background: #f2f3f7;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			padding: 30px;
		}

		.signup-form .form-group {
			margin-bottom: 20px;
			display: inline;
		}

		.signup-form input[type="checkbox"] {
			margin-top: 3px;
		}

		.signup-form .btn {
			font-size: 16px;
			font-weight: bold;
			min-width: 140px;
			outline: none !important;
		}

		.signup-form .row div:first-child {
			padding-right: 10px;
		}

		.signup-form .row div:last-child {
			padding-left: 10px;
		}

		.signup-form a {
			color: #fff;
			text-decoration: underline;
		}

		.signup-form a:hover {
			text-decoration: none;
		}

		.signup-form form a {
			color: #5cb85c;
			text-decoration: none;
		}

		.signup-form form a:hover {
			text-decoration: underline;
		}
	</style>
</head>

<body>
	<div class="signup-form">
		<form method="POST">
			<h2>Add employee</h2>
			<p class="hint-text"></p>
			<div class="form-group">
				<input type="text" class="form-control" name="username" placeholder="Username" required="true">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="password" placeholder="Password" required="true">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="contactno" placeholder="Enter your Mobile Number"
					required="true" maxlength="10" pattern="[0-9]+">
			</div>
			<div class="form-group">
				<input type="email" class="form-control" name="email" placeholder="Enter your Email id" required="true">
			</div>
			<div class="form-group">
				<input class="form-control" name="role" placeholder="Role" required="true">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
			</div>
		</form>
		<?php
	$users = $db->getAllUsers();
	if (count($users) >0)
	{
		?>
		<table>

		
		<?php 
foreach($users as $user) {
print_r($user);
	echo '<tr>';
	echo '<td>' . $user['Username']. '</td>';
	echo '<td>' . $user['Password']. '</td>';
	echo '</tr>';
} ?>
		</table>		
		<?php 
		}
	 else
	{
		echo "No record found";
	}
	?>
	</div>
</body>

</html>