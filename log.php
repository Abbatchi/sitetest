<?php 		
			$login = 'Login';

			if (isset($_POST['nick']) && isset($_POST['pwd'])) {


				$nick = $_POST['nick'];
				$dbh = new PDO('mysql:host=localhost;dbname=dracula', 'root', '');
				$req = $dbh->query("SELECT pwd FROM users WHERE users.nick = '" . $nick . "'");

					$pwd = $req->fetch();
	        	
	        		if($pwd['pwd'] == $_POST['pwd']){
	        			session_start();
	        			$_SESSION['auth'] = $nick;
	        			header('location: index.php');


		        	}
		        	else {
		        		echo "error";
		        	
	    		}
			}

			
 ?>


<?php require 'header.php';?>

<form class="form-inline" action="" method="post">
	<div class="form-group">
		<label for="name">Nick:</label>
			<input type="text" name="nick" placeholder="Mr Con">
	</div>
	<div class="form-group">
		<label for="pwd1">mot de passe:</label>		
			<input type="password" name="pwd" placeholder="mypassword">
	</div>
		<div class="form-group">		
	<input type="submit" name="submit" value="Login">		
	</div>
	</form>


<?php require 'footer.php';?>