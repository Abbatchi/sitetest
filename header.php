<?php 


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>SITE TEST</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">



</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
        <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

      <a class="navbar-brand" href="index.php"><img id="logo" src="img/logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php"><---</a></li>
        <li class="active"><a href="about.php">About me</a></li>
        <li class="active"><a href="video.php">Videos</a></li>
        <?php if (isset($session) && $session == 1){echo "<li class='active'><a href='logout.php'>logout</a></li>";} else{echo "<li class='active'><a href='log.php'>login</a></li>";} ?>
        <li class="active"><a href="reg.php">Sign up</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="blablabla?">
        </div>
        <button type="submit" class="btn btn-default"><?php if (isset($session) && $session == 1){echo $nick;} else {echo "Draculito ";} ?> this!</button>
      </form>

    </div>
  </div>
</nav>
