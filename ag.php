<?php
/*
####################
COMPUTAÇÃO EVOLUTIVA
ALGORITMO GENÉTICO

1. [Início]
 Codificação: representação do indivíduo
 Geração de uma população aleatória de n cromossomos (soluções úteis)
2. [Fitness] Avaliação das aptidões de cada cromossomo
3. [População] Definição de uma nova população
4. [Seleção] Seleção dos melhores pais
5. [Crossover] Crossover dos pais para formar novos filhos
6. [Mutação] Com uma probabilidade de mutação
7. [Aceitação] Colocação de um novo filho em uma nova população
8. [Substituição] Utilização da nova população gerada para a próxima
rodada do algoritmo
9. [Teste] Se a condição é satisfeita, então finaliza
10.[Loop] Retorno ao passo 2

####################
*/

$caracteristicas = array
	(
	array("olho",1,1),
	array("cor da pele",1,1),
	array("orelha",1,1),
	array("cabelo",1,1),
	array("nariz",1,1)
	);
$população = array();
$pop = array();

$valor = '';

$t = 1;
while ($t <= 2) {
$t++;

	$cromossomo = '';
	$dominante = 0;
	$recessiva = 0;
	foreach ($caracteristicas as $value) {

		$sort = rand(1, 0);
		if ($sort == 1) {
			$dominante+= $value[1];
			 
		}else{$recessiva+= $value[2];}
		
		$cromossomo.= $sort;

	}

array_push($população, $cromossomo, $dominante, $recessiva);
array_push($pop, $cromossomo);
}

print_r($pop);

echo "<br>";
?>