<pre>
<?php

/*for ($i=200; $i > 0; $i-=5) { 
	echo "$i</br>";

}

$bam = array('bam', 'tim', 'blum');
	print_r($bam);
	sort($bam);

	print_r($bam);

	shuffle($bam);
	print_r($bam);
	
$a = 25;
if (isset($a)) {
	echo $a;
	unset($a);
} else {
	echo "tuscia";
}
	echo "</br>";
if (isset($a)) {
	echo $a;
	unset($a);
} else {
	echo "tuscia";
}
echo"</br>";

function brimbam($i, $d){
	
if (in_array($i, $d)) {
	echo "yra";
	} else {
		echo "nera";
	}
}
$b = [1,2,3,4,5,6,7,8];
	$c = 1;
brimbam($c, $b);

echo "</br>";
$t = 5;

	function r($t) {
		$e = pi() * pow($t, 2);
		return $e;
	} 
	
	echo r($t);

	echo "</br>";


	function t($a, $b, $h=4) {
		$e = ($a+$b) * $h / 2;
		return $e;
	} 
	
	echo t(10,5);*/

/*	$plotas = 5000;
	$tr = 0.3;
	$trr = 0.2;
	$k = 500;

	function kiek($plotas, $tr, $trr, $k) {
		$a = $tr * $trr;
		$b = $k * $a;
		$s = ceil($plotas / $b);
		echo $s;
	}

kiek($plotas, $tr, $trr, $k);*/

	/*$nuorodos = [['name' => 'Delfi', 'url' => 'http://delfi.lt'],['name' => '15min', 'url' => 'http://15min.lt']];
	function nuorodos($nuorodos){
		foreach ($nuorodos as $nuoroda) {
		echo '<a href='.$nuoroda['url'].'>'.$nuoroda['name'].'</a></br>';
	}
	}
	
	nuorodos($nuorodos);*/
/*	$a = "+370 64719298";

	echo str_replace("+370", "8", $a);
	echo "</br>";

	$b = explode(" ", $a);
	echo "8 " . $b[1];*/


date_default_timezone_set("Europe/Vilnius");

$d1=strtotime("2017-12-25");
$d9=date("y-m-d h:i:s");
$d7=60-date("s");
$d6=59-date("i");
$d3=12-date("h");
$d2=floor(($d1-time())/60/60/24);
echo "<h1>Iki kalėdų liko ".$d2." dienos ".$d3." valanda ".$d6." minutes ir ".$d7." sekundės.</h1>";
$j1=strtotime("2018-09-01");
$j2=date("y-m-d h:i:s");
$j3=60-date("s");
$j4=59-date("i");
$j5=12-date("h");
$j6=floor(($j1-time())/60/60/24);
echo "<h1>Iki kalėdų liko ".$j6." dienos ".$j4." valanda ".$j5." minutes ir ".$j3." sekundės.</h1>";




$test = "hello world";
$a = "test";
echo $$a;
?>
</pre>