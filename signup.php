<?php 
  session_start();

  if (!isset($_SESSION['username'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up</title>
</head>
<body class="d-flex
             justify-content-center
             align-items-center
             vh-100">
	 <div class="w-400 p-5 shadow rounded">
	 	<form method="post" 
	 	      action="app/http/signup.php"
	 	      enctype="multipart/form-data">
	 		<div class="d-flex
	 		            justify-content-center
	 		            align-items-center
	 		            flex-column">

	 		
	 		<h3 class="display-4 fs-1 
	 		           text-center">
	 			       Sign Up</h3>   
	 		</div>

	 		<?php if (isset($_GET['error'])) { ?>
	 		<div class="alert alert-warning" role="alert">
			  <?php echo htmlspecialchars($_GET['error']);?>
			</div>
			<?php } 
              
              if (isset($_GET['name'])) {
              	$name = $_GET['name'];
              }else $name = '';

              if (isset($_GET['username'])) {
              	$username = $_GET['username'];
              }else $username = '';
			?>

	 	  <div class="mb-3">
		    <label class="form-label">
		           Name:</label>
		    <input type="text"
		           name="name"
		           value="<?=$name?>" 
		           class="form-control">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">
		           User Name:</label>
		    <input type="text" 
		           class="form-control"
		           value="<?=$username?>" 
		           name="username">
		  </div>


		  <div class="mb-3">
		    <label class="form-label">
		           Password:</label>
		    <input type="password" 
		           class="form-control"
		           name="password">
		  </div>

		  <h3 class="display-4 fs-1 
		  text-center">
		  <button type="submit" 
		          class="btn btn-primary">
		          Sign Up</button></h3><br>
			<h3 class="display-4 fs-1 
				  text-center">
		  <a href="login.php">Login</a></h3>
		</form>
	 </div>
</body>
</html>
<?php
  }else{
   	exit;
  }
 ?>