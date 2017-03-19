<?php 

$nome = "Porto Velho";

function teste(){

	global $nome;
	echo $nome;

}

function teste2(){

	$nome = "Ciclano";
	echo $nome. " agora no teste02 ";

}

teste();

teste2();

?>
