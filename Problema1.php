<?php
/*
Problema 1 - String balanceada
Escreva um método recursivo para verificar o balanceamento dos parêntesis em uma string de entrada. Por exemplo, o método deve retornar true para as seguintes strings:
“((1+1)*2) + (10+2) + (((2-1)-1)*1)”
“O Fulano (aquele que fez aniversário hoje) perguntou por você.”
E retornar false para as seguintes:
&:)
#:)
*/
$texto1 = '((1+1)*2) + (10+2) + (((2-1)-1)*1)';
$texto2 = 'O Fulano (aquele que fez aniversário hoje) perguntou por você.';
$texto3 = '&:)';
$texto4 = '#:)';
function stringBalanceada($frase){
	$abreparenteses = strpos($frase,'(');
	$fechaparenteses = strpos($frase,')');
	if($abreparenteses === false || $fechaparenteses == false || $abreparenteses > $fechaparenteses){
		return false;
	}
	$abreparenteses = strrpos($frase,'(');
	$fechaparenteses = strrpos($frase,')');
	if($abreparenteses > $fechaparenteses){
		return false;
	}
	$arrayabreparenteses = explode('(',$frase);
	$arrayfechaparenteses = explode(')',$frase);
	if(count($arrayabreparenteses) !=  count($arrayfechaparenteses)){
		return false;
	}
	return true;
}
echo stringBalanceada($texto1);
var_dump(stringBalanceada($texto2));
var_dump(stringBalanceada($texto3));
var_dump(stringBalanceada($texto4));
?>