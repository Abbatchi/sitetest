<?php require 'header.php';?>

	<img src="img/drac.jpg" class="superbg" />

	<?php
	  if ($_SESSION) {
	  	echo "<h1>FIBONACCI IT!</h1>";
			$a = array();
			$a[1] = '1';
			$a[2] = '1';
				for ($i = 3; $i < 200; $i++) {
				  $a[$i] = bcadd($a[$i-1], $a[$i-2]);
				  }

				for ($i = 1; $i < 200; $i++) {
				  $res = explode( '.', $a[$i]);
				  echo $i."\t - ". $res[0] ."<br/>\n";
				  }
			
			}

	?>


<?php require 'footer.php';?>