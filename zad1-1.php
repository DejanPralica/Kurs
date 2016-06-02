<html>
	<head>
	<style>
	      .right {
          float: right;}
	      .left {
	       float:left;}
		</style>
	</head>
		
	<body>
	<div class="left">
	<b>For: </b><br>
<?php 
   
			for ($x = 1; $x <= 100; $x++) { 
				echo /*$x.*/" Ja sam ".$_POST['name']." i imam ".$_POST['godina']." godina.<br>";
				};
     ?>
	 </div>
	 <div class="right">
	 <b>While: </b><br>
<?php
	$x = 1; 
		while($x <= 100) {
			echo /*$x.*/" Ja sam ".$_POST['name']." i imam ".$_POST['godina']." godina.<br>"  ;
		$x++;
} 
	?>
	</div>
	</body>
</html>