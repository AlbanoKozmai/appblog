<?php
	$title = 'Log In';
	$description = 'This is the login page';

	include_once('header.php');
?>
	<div class="row h-100">
		<div class="col-12 align-self-center">
			<div class="login-page">
			  <div class="form">
			  	<form id="login" class="login-form" action="post">
			      <input type="text" placeholder="username"/>
			      <input type="password" placeholder="password"/>
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