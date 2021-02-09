<?php

echo '<h1> Funcão strtotime</h1>';
echo '<h3> Datas transformadas em Timestamp Unix</h3>';

echo 'strtotime("now") = ';
echo(strtotime("now") . "<br/>");

echo 'strtotime("3 October 2005") = ';
echo(strtotime("3 October 2005") . "<br/>");

echo 'strtotime("+5 hours") = ';
echo(strtotime("+5 hours") . "<br/>");

echo 'strtotime("+1 week") = ';
echo(strtotime("+1 week") . "<br/>");

echo 'strtotime("+1 week 3 days 7 hours 6 minutes 5 seconds") = ';
echo(strtotime("+1 week 3 days 7 hours 6 minutes 5 seconds") . "<br/>");

echo 'strtotime("today") = ';
echo(strtotime("today") . "<br/>");

echo 'strtotime("last Sunday") = ';
echo(strtotime("last Sunday") . "<br/>");

echo 'strtotime("14-08-2016") = ';
echo(strtotime("14-08-2016"));

echo '<h3> Calculos com datas</h3>';
// Soma 15 dias a partir da data indicada
echo 'date("d/m/Y", strtotime("+15 days", strtotime("3 October 2015"))) = ';
echo date('d/m/Y', strtotime('+15 days', strtotime('3 October 2015')));

// Resultado: 18/10/2015
echo '<br /><br/>';

// Subtrai 25 dias a partir da data indicada
echo 'date("d/m/Y", strtotime("-25 days", strtotime("14-12-2016"))) = ';
echo date('d/m/Y', strtotime('-25 days', strtotime('14-12-2016')));
// Resultado: 19/11/2016

echo '<br /><br/>';

// Soma 10 dias a partir da data de hoje
echo 'date("d/m/Y", strtotime("+10 days")) = ';
echo date('d/m/Y', strtotime('+10 days'));
// Resultado: 08/01/2017

echo '<br /><br/>';

// Subtrai 10 dias a partir da data de hoje
echo 'date("d/m/Y", strtotime("-10 days")) = ';
echo date('d/m/Y', strtotime('-10 days'));
// Resultado: 19/12/2016

//Fonte: https://www.visualdicas.com.br/programacao/php/10-como-subtrair-ou-somar-dias-de-uma-data-qualquer-php