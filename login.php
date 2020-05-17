<?php
	require_once("config/config.php");
	session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$myusername = mysql_real_escape_string($db,$_POST['username']);
		$mypassword = mysql_real_escape_string($db,$_POST['password']);

		$sql = "SELECT id FROM admin WHERE username = '$myusername' and password = '$password'";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$active = $row['active'];

		$count = mysqli_num_rows($result);

		if($count == 1) {
			session_register("myusername");
			$_SESSION['login_user'] = $myusername;
			
			header("location: index.php");
		} else {
			$error = "Your name or passwor is invalid";
		}
	}

	$title = 'Log In';
	$description = 'This is the login page';

	include_once('header.php');
?>
	<div class="row h-100">
		<div class="col-12 align-self-center">
			<div class="login-page">
			  <div class="form">
			  	<form id="login" class="login-form" action="post"> 
			      <input type="text" name="username" placeholder="username"/>
			      <input type="password" name="password" placeholder="password"/>
			      <button>login</button>
			      <p class="message">Not registered? <a href="#">Create an account</a></p>
			    </form>
			    <form id="register" class="register-form" action="post">
			      <input type="text" placeholder="name"/>
			      <input type="password" placeholder="password"/>
			      <input type="text" placeholder="email address"/>
			      <button>create</button>
			      <p class="message">Already registered? <a href="#">Sign In</a></p>
			    </form>
			    
			  </div>
			</div>
		</div>
	</div>
	

<?php
	include_once('footer.php');
?>