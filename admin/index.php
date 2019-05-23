<!DOCTYPE html>
<?php
include('../connection.php');
session_start();
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>ST. Vincent Palloti TimeTable</title>
	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
	    <link href="../fonts/font-awesome.min.css" rel="stylesheet">
	    <link href="../css/bootstrap.min.css" rel="stylesheet">
	    <link href="../css/templatemo-style.css" rel="stylesheet">
	</head>
	<body class="light-gray-bg">

		<div class="">

	    <?php if(!strlen(@$_GET['message'])=="")
	        {
	          ?>
	          <script type="text/javascript">
	            alert('<?php echo $_GET['message'] ;?>');
	          </script>
	      <?php
	    }
	    ?>

	  </div>
		
		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">
	          <div class="square"></div>
	          <h1>ST. Vincent Palloti TimeTable</h1>
	        </header>
	        <form method="post" class="templatemo-login-form">
						<?php
						extract($_POST);
						if(isset($login))
						{
							$que=mysqli_query($conn,"select * from admin where admin_name='$email' and admin_password='$pass'");
							$row=mysqli_num_rows($que);
							if($row)
								{
									$_SESSION['admin']=$email;
									header('location:admin_dashboard.php');
								}
							else
								{
									echo "<div class='alert alert-danger' role='alert'>
										Incorrect Password or Email!
									</div>";
								}
						}
						?>

	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
		              	<input name="email" type="email" class="form-control" autofocus required placeholder="js@dashboard.com">
		          	</div>
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>
		              	<input name="pass" type="password" required class="form-control" placeholder="******">
		          	</div>
	        	</div>
	          	<div class="form-group">
				    <div class="checkbox squaredTwo">
				        <input type="checkbox" id="c1" name="cc" />
						<label for="c1"><span></span>Remember me</label>
				    </div>
				</div>
				<div class="form-group">
					<button name="login" type="submit" class="templatemo-blue-button width-100">Login</button>
				</div>
	        </form>
		</div>
	</body>
</html>
