<?php
	session_start();
	header("Content-type: image/jpeg");
	ini_set('memory_limit', -1);
	$valtozo = 'xampp\htdocs\szabo_daniel\datum_kep\ures.jpg';
	$kep= imagecreatefromjpeg("ures.jpg");
	$feher  = imagecolorallocate($kep, 0, 0, 0);
	$honap = date("M");
	$nap = date("d");
	//$font = '/arialbd.ttf';
	//imagettftext($kep, 20,1, 100,60, $feher, 'arialbd.ttf', "NEWS");
	imagestring ( $kep, 150, 150, 150, $nap , $feher);
	imagestring ( $kep, 100, 150, 55, $honap , $feher);
	
	imagejpeg($kep);
	imagedestroy($kep);
?>