<?php require 'header.php';?>

<form class="form-inline">
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