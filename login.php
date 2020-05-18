<?php
	require_once("config/config.php");

	if(isset($_POST['submit_login'])) {
		$myusername = mysqli_real_escape_string($db,$_POST['username']);
		$mypassword = mysqli_real_escape_string($db,$_POST['password']);
		
		if ($myusername != "" && $mypassword != "") {
			$sql_query = "select count(*) as cntUser from users where username='".$myusername."' and password='".$mypassword."'";
			$result = mysqli_query($db,$sql_query);
			$row = mysqli_fetch_array($result);

			$count = $row['cntUser'];

			if($count > 0) {
				$_SESSION['myusername'] = $myusername;
				
				header("location: index.php");
			} else {
				$error = "Your name or passwor is invalid";
			}
		}
	}

	// if(isset($_POST['username'])){
		//     $myusername = $_POST['username'];
		//     $myusername = stripcslashes($myusername);		
		// 	$myusername = mysql_real_escape_string($myusername);
		// }
		// if(isset($_POST['password'])){
		//     $mypassword  = $_POST['usernamepassword'];
		//     $mypassword = stripcslashes($mypassword);
		//     $mypassword = mysql_real_escape_string($mypassword);
		// }

		
		

		// mysql_connect("localhost", "root", "");
		// mysql_select_db("blogapp");

		// $result = mysql_query("select * from users where username = '$myusername' and password = '$mypassword'") or die("Failed to query database ".mysql_error());
		// $row = mysql_fetch_array($result);

		// if ($row['username'] == $myusername && $row['password'] == $mypassword ) {
		// 	header("location: index.php");
		// }else {
		// 	echo "Filet to login";
		// }



	$title = 'Log In';
	$description = 'This is the login page';

	include_once('header.php');
?>
	<div class="row h-100">
		<div class="col-12 align-self-center">
			<div class="login-page">
			  <div class="form">
			  	<form id="login" class="login-form" method="post" > 
			      <input type="text" name="username" placeholder="username"/>
			      <input type="password" name="password" placeholder="password"/>
			      <button type="submit" name="submit_login">login</button>
			      <p class="message">Not registered? <a href="#">Create an account</a></p>
			    </form>
			    <!-- <form id="register" class="register-form" action="post">
			      <input type="text" placeholder="name"/>
			      <input type="password" placeholder="password"/>
			      <input type="text" placeholder="email address"/>
			      <button>create</button>
			      <p class="message">Already registered? <a href="#">Sign In</a></p>
			    </form>
			     -->
			  </div>
			</div>
		</div>
	</div>
	

<?php
	require_once('footer.php');
?>