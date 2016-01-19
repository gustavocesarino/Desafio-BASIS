<?php
/*
Problema 4 - Conversão de hora
Dado uma hora no formato americano AM/PM. Converta para o formato brasileiro de 24 horas.
Nota: Meia noite é 12:00:00AM ou 00:00:00 e 12:00:00PM é meio-dia.
Formato de entrada
As entradas são no seguinte formato. Exemplo: hh:mm:ssAM ou hh:mm:ssPM
onde
01≤hh≤12
00≤mm≤59
00≤ss≤59
Formato de saída
24 horas é o format de saída. Exemplo: hh:mm:ss
onde
00≤hh≤23
00≤mm≤59
00≤ss≤59
Exemplo de entrada
07:05:45PM
Exemplo de saída
19:05:45
*/
$hora = rand(1, 12);
$hora = str_pad($hora, 2, "0", STR_PAD_LEFT);
$minuto = rand(0, 59);
$minuto = str_pad($minuto, 2, "0", STR_PAD_LEFT);
$segundo = rand(0, 59);
$segundo = str_pad($segundo, 2, "0", STR_PAD_LEFT);
$turno = (rand(0,1)) ? 'AM' : 'PM';
echo 'Exemplo de entrada : '.$hora.':'.$minuto.':'.$segundo.$turno;
if($turno == 'PM'){
	if($hora == 12){
		$hora = '00';
	}
	else{
		$hora += 12;
	}
}
echo 'Exemplo de saída : '.$hora.':'.$minuto.':'.$segundo;
?>