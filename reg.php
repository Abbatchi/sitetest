<?php 
	if (!empty($_POST['nick']) && !empty($_POST['pwd1']) && !empty($_POST['name']) && !empty($_POST['email'])) {
		$dbh = new PDO('mysql:host=localhost;dbname=dracula', 'root', '');
		if ($dbh->query("SELECT nick FROM users WHERE users.nick = '" . $_POST['nick'] . "'")) {
			if ($_POST['pwd1'] ===  $_POST['pwd2']) {
				$pwd = sha1($_POST['pwd1']);
				$dbh = new PDO('mysql:host=localhost;dbname=dracula', 'root', '');
				$req = $dbh->prepare("INSERT INTO users SET nick = ? , name = ?, email = ?, pwd = ?");
				$req->execute([$_POST['nick'], $_POST['name'], $_POST['email'], $pwd]);
				echo '<p class="text-success">You have registered</p>';
			}
			else{
				echo "PWD1 != PWD2";
			}
		}	
		else{
			echo '<p class="text-warning">Username is exists, change username</p>';
		}
	}
	else{
		echo '<p class="text-warning">Please enter all data in form</p>';
	}
 ?>


<?php require 'header.php';?>

<form class="form-inline" action="" method="post">
	<div class="form-group">
		<label for="name">Nick:</label>
			<input type="text" name="nick" placeholder="Mr Con">
	</div>

	<div class="form-group">
		<label for="lastname">Prenom:</label>		
			<input type="text" name="name" placeholder="Alex">	
	</div>
	<div class="form-group">
		<label for="email">E-mail:</label>	
			<input type="email" name="email" placeholder="blablabla@email.fr">
	</div>
	<div class="form-group">
		<label for="pwd1">mot de passe:</label>		
			<input type="password" name="pwd1" placeholder="mypassword">
	</div>
	<div class="form-group">		
		<label for="pwd2">mot de passe 2:</label>
			<input type="password" name="pwd2" placeholder="mypassword">		
	</div>
		<div class="form-group">		
	<input type="submit" name="submit" value="SEND">		
	</div>
	</form>


<?php require 'footer.php';?>