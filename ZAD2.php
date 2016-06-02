<html>
<head>
</head>
	<body>
	<?php
	$niz=array(2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2);
//element niza:
	$novi= array();
foreach ($niz as $red=>$element){
	array_push($novi, $red+1);
}
	echo max($novi);
	echo "<br>";
	echo "<hr>";
	$i = sizeof($niz, 1);
//element niza:
	echo count($niz, 1);
	echo "<hr>";
//element niza:
	echo "$i";
	echo "<hr>";
 //stepenovanje niza
  foreach ($niz as $red=>$element) {
	 echo $element**$red;
	echo "<br>";
  }
  echo "<hr>";
 //stepenovanje niza:
 foreach ($niz as $red=>$element){
	echo pow($element, $red);
	echo "<br>";
}
	echo "<hr>";
 //stepenovanje niza:
foreach ($niz as $red=>$element){
$res = 1;
for ($i = 0; $i < $red; $i++)
    {
    $res *= $element;
    }
echo $res;
echo "<br>";
}
?>
	</body>
</html>
