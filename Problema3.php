<?php
/*
Problema 3 – Diferença cruzada
Dada uma matriz (quadrada) do tamanho NxN. Calcular diferença absoluta da soma das duas diagonais cruzadas.
Formato de entrada
A primeira linha de conter o tamanho da matriz, o valor de N. As próximas linhas devem conter uma lista de inteiros descrevendo a matriz.
Restrições
1≤N≤100
Formato de saída
A saída deve conter em uma única linha a diferneça absoluta das somas das diagonais cruzadas.
Exemplo de entrada
3
11 2 4
4 5 6
10 8 -12
Exemplo de saída
15
Explicação
A primeira diagonal da matriz é:
11
5
-12
A soma da primeira diagonal é = 11+5-12= 4
A segunda diagonal da matriz é:
4
5
10
A soma da segunda diagonal = 4+5+10 = 19
Diferença: |4-19| = 15
*/
$tamanho = rand(1, 10);
$matriz = array();
$contador = $tamanho;
$linha1 = 0;
$linha2 = 0;
$saida = 0;
for($i = 0; $i < $tamanho; $i++){
	for($j = 0; $j < $tamanho; $j++){
		$matriz[$i][$j] = rand(0, 100);
		if($i == $j){
			$linha1 += $matriz[$i][$j];
		}
		if($j+1 == $contador){
			$linha2 += $matriz[$i][$j];
			$contador--;
		}
		echo $matriz[$i][$j] . '	';
	}
	echo '<br>';
}
if($linha1 >= $linha2){
	$saida = $linha1 - $linha2;
}
else{
	$saida = $linha2 - $linha1;
}
echo 'Diferença: ' . $saida;
?>