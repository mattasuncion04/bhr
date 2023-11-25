<?php
	session_start(); 
	if(isset($_SESSION['username'])){
		header('Location: dashboard.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'templates/header.php' ?>
	<title>Login -  Barangay Health Repository System</title>

<body class="login">
<?php include 'connection.php' ?>	
<?php include 'templates/loading_screen.php' ?>
	<div class="wrapper wrapper-login">
        
		<div class="container container-login animated fadeIn">
            <?php if(isset($_SESSION['message'])): ?>
                <div class="alert alert-<?= $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert">
                    <?= $_SESSION['message']; ?>
                </div>
            <?php unset($_SESSION['message']); ?>
            <?php endif ?>
			<h3 class="text-center">Login Here</h3>
			<div class="login-form">
                <form method="POST" action="clientlogin.php">
				<div class="form-group form-floating-label">
					<input name="email" type="text" class="form-control input-border-bottom" required>
					<label class="placeholder">Email</label>
				</div>
				<div class="form-group form-floating-label">
					<input name="password" type="password" class="form-control input-border-bottom" required>
					<label class="placeholder">Password</label>
					<span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
				</div>
				<div class="form-action mb-3">
                    <button type="submit" class="btn btn-primary">Login</button>
				</div>
				<button type="button" class="btn btn-link" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Register Account</button>
				</div>
                </form>
			</div>
		</div>
	</div>

	<form action="signup.php" method="POST">

		<body>
				<div id="id01" class="modal">
  				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  				<form class="modal-content" action="/action_page.php">
   				 <div class="container">
      			<h1>Register</h1>
      	<p>Please fill this form to create account.</p>
      	<table>
      		<tr>
      		<td><label for="Namel"><b>Name</b></label></td>
      		<td><input type="Name" placeholder="Enter Name" name="name" required></td>
      	</tr>
      
      	<tr>
      		<td><label for="email1"><b>Email</b></label></td>
      		<td><input type="text" placeholder="Enter Email" name="Email" required> <br></td>
      	</tr>
      	<tr>
      		<td><label for="username1"><b>Username</b></label></td>
      		<td><input type="text" placeholder="Enter Username" name="username" required=""></td>
      	</tr>
      	<tr>
      		<td><label for="psw1"><b>Password</b></label></td>
      		<td><input type="password" placeholder="Enter Password" name="password" required></td>
      	</tr>
      	<tr>
      		<td><button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button></td>
      		<td><button type="submit" class="signupbtn">Register</button></td>
      	</tr>
      	</table>
		</div>
    </form>
			</div>
		</div>
	</div>
	<?php include 'templates/footer.php' ?>
</body>
</html>