<?php
/*
####################
COMPUTAÇÃO EVOLUTIVA
ALGORITMO GENÉTICO
####################
*/

$mochila = array
	(
	array("biologia",5,3),
	array("matemática",2,4),
	array("português",1,6),
	array("sociologia",3,2),
	array("física",4,2)
	);
$população = array();

$peso = 0;
$qualidade = 0;
$valor = '';

$t = 1;
while ($t <= 2) {
$t++;
	$cromossomo = '';
	
	foreach ($mochila as $value) {

		$sort = rand(1, 0);
		if ($sort == 1) {
			$peso+= $value[2];
			$qualidade+= $value[1]; 
		}

		if ($peso < 9 AND $qualidade > 3) {
			$valor = 'BOM';
		}else {
			$valor = 'RUIM';
		}

		$cromossomo.= $sort;

	}

array_push($população, $cromossomo, $peso, $qualidade, $valor);
}

print_r($população);

echo "<br>";
?>