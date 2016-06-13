<?php
session_start()?>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</head>
<body>
<div style="margin-left: 30%">
	<form method="post" action="">
		<input type="text"  name="x" id="x">
		<input type="text"  name="znak" id="znak" size="4">
		<input type="text"  name="y" id="y">
		<input type="submit" value="Izracunaj">
	</form>
</div>
<?php
if((isset($_POST['x'])) && (isset($_POST['y'])) && (isset($_POST['znak']))){
function da($x, $y, $z){
switch($z){
    case '+':
        $rezultat = $x+$y;
        return $rezultat;
        break;
     case '-':
       $rezultat = $x-$y;
        return $rezultat;
        break;
    case '*':
        $rezultat = $x*$y;	
        return round($rezultat,11);
        break;
    case '/':
	if($y!=0){
        $rezultat = $x/$y;
	return round($rezultat,11);}
	else{
		break;
	}} }}
function greska($x, $y){
	if ((!is_numeric($x))|| (!is_numeric($y))){
		echo "Fatal Error ! !";}
	}
function greskaop($z){
	if (!in_array($z, array('*', '-', '+','/')))
		echo "Pogresna operacija";
}
function greskanula($y,$z){
	if (($z == '/') && ($y==0)){
		echo "Greska, nemoguce je djeliti sa nulom";
}}
?>
<div class="container">
  <form class="form-horizontal" role="form">
	<div class="form-group">
		<label class="control-label col-sm-2">Rezultat:</label>
		<div class="col-sm-10" style="background-color: F0F0F0" >
			<?php
			if((isset($_POST['x'])) && (isset($_POST['y'])) && (isset($_POST['znak']))){
				if ((is_numeric($_POST['x']))&&(is_numeric($_POST['y']))) {
					$_SESSION['rez'][]=da($_POST['x'],$_POST['y'],$_POST['znak']);
					$_SESSION['rez']=array_filter($_SESSION['rez']);
					$_SESSION['rast'][]=da($_POST['x'],$_POST['y'],$_POST['znak']);
					$_SESSION['rast']=array_filter($_SESSION['rast']);
					echo da($_POST['x'],$_POST['y'],$_POST['znak']);}
			}
			?>
		</div>
	</div>
<div class="form-group">
<label class="control-label col-sm-2">Greske:</label>
	<div class="col-sm-10" height=15px style="background-color: F0F0F0  ">
		<?php
		if((isset($_POST['x'])) && (isset($_POST['y'])) && (isset($_POST['znak']))){
			greska($_POST['x'],$_POST['y']);
		echo "<br>";
			greskaop($_POST['znak']);
		echo "<br>";
			greskanula($_POST['y'],$_POST['znak']); }
		?>
	</div>
</div>
	<div class="form-group">
	<label class="control-label col-sm-2">Istorija:</label>
		<div class="col-sm-10" style="background-color: F0F0F0  ">
			<?php
			if (isset($_SESSION['rez'])){
			foreach ($_SESSION['rez'] as $key) {
				echo $key;
			echo"<br>";	}
			}
			?>
		</div>
	</div>
<div class="form-group">
<label class="control-label col-sm-2">Rastuci redoslijed:</label>
		<div class="col-sm-10" style="background-color: F0F0F0 ">
			<?php
			if (isset($_SESSION['rast'])){
				asort($_SESSION['rast']);
			foreach ($_SESSION['rast'] as $key) {
				echo $key;
			echo"<br>";}}
				?>
		</div>
</div>
</div>
</form>
	<form style="margin-left: 40%" method="post" action="">
		<input type="text" name="nadji">
		<input type="submit" value="Pronadji broj">
	</form>
		<div style="margin-left:40%; color:green">
				<?php
				if((isset($_POST['nadji'])) ){
					if ((is_numeric($_POST['nadji'])) && (!empty($_POST['nadji']))){
						if (in_array($_POST['nadji'], $_SESSION['rez'])){
						echo "BROJ {$_POST['nadji']} SE NALAZI U REZULTATU ! ! !";}
				?> 
		</div>
<div style="margin-left:40%; color:red">
 <?php
if (!in_array($_POST['nadji'], $_SESSION['rez'])){
		echo "BROJ {$_POST['nadji']} SE NE NALAZI U REZULTATU ! ! !";
}}}
 ?>
</div>
</body>
</html> 