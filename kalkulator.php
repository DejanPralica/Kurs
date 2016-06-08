
<head>
<style>
div {
    background-color: lightgrey;
    width: 300px;
    padding: 10px;
    border: 1px;
    margin: 25px;
	text-align:center;
}
</style>
</head>
<body>
<form method="post" action="">
<input type="text"  name="x1" id="x1">
<input type="text"  name="znak" id="znak">
<input type="text"  name="y2" id="y2">

<input type="submit" value="Izracunaj">
</form>

<?php
$x = $_POST['x1'];
$y= $_POST['y2'];
function da($x, $y){
if($_POST['znak'] == '+') {
	echo "$x+$y=";
	echo "$x"+"$y";}
else if($_POST['znak'] == '-') {
	echo "$x-$y=";
	echo "$x"-"$y";}
else if($_POST['znak'] == '*') {
	echo "$x*$y=";
	echo "$x"*"$y";}
else if($_POST['znak'] == '/') {
	if(!empty($_POST['y2'])){
	echo "$x/$y=";
	echo "$x"/"$y";}
} }
?>
<div>
<?php
if (is_numeric($_POST['x1'])) {
	if (is_numeric($_POST['y2'])){
        da($_POST['x1'],$_POST['y2']);
}}
?>
</div>
<div>
<?php
if($_POST['znak'] == '/') {
	if(empty($_POST['y2'])){
	echo "Greska";}}
if (!is_numeric($_POST['x1'])) {
	echo "Prva vrijednost nije broj";}
?>
<p>
<?php
if (!is_numeric($_POST['y2'])){
	echo "Druga vrijednost nije broj";
}
?>
</div>

</body>
</html>