<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.06 - Uma classe DateTime");

/*
 * [ DateTime ] http://php.net/manual/en/class.datetime.php
 */
fullStackPHPClassSession("A classe DateTime", __LINE__);
define("DATA_BR", "d/m/y");

$dateNow = new DateTime();
$dateBirthDay = new DateTime("1989-06-19");
//$dateStatic = DateTime::createFromFormat("d/m/y", "20/06/204");
var_dump([
    $dateNow,
    get_class_methods($dateNow),
    //$dateStatic
]);

echo "<br><hr>";
var_dump([
    $dateNow->format(DATA_BR),
    $dateNow->format("d")
]);

echo "<br><hr><br>";

echo "Hoje é dia {$dateNow->format("d")}, do mês {$dateNow->format("m")}. Nosso ano atual é 
{$dateNow->format("Y")}";


echo "<br><hr><br>";

$newTimeZone= new DateTimeZone("Pacific/Apia");

$newDate= new DateTime("NOW", $newTimeZone);
var_dump([
    $newTimeZone,
    $dateNow,
]);



/*
 * [ DateInterval ] http://php.net/manual/en/class.dateinterval.php
 * [ interval_spec ] http://php.net/manual/en/dateinterval.construct.php
 */
fullStackPHPClassSession("A classe DateInterval", __LINE__);

$dateInterval = new DateInterval("P10Y2MT10M");

var_dump([
    $dateInterval,
]);
$ndate = new DateTime("NOW");
$ndate->add($dateInterval);

var_dump([
    $ndate
]);

echo "<br><hr><br>";

$bday =  new DateTime(date("Y"). "-06-19");
var_dump($bday);

echo "<br><hr><br>";
$dn= new DateTime("NOW");
$dif= $dn->diff($bday);
var_dump($dif);
echo "<br><hr><br>";

if($dif->invert){
    echo "Seu aniverssário já passou {$dif->days}";
}
else{
    echo "Faltam {$dif->days} dias para o seu aniverssário";
}

echo "<br><hr><br>";
$dateResource= new DateTime("NOW");
$dateResource->sub($dateInterval::createFromDateString("10DAYS"))->format(DATA_BR);
$dateResource->add($dateInterval::createFromDateString("90DAYS"))->format(DATA_BR);

var_dump($dateResource);


/**
 * [ DatePeriod ] http://php.net/manual/pt_BR/class.dateperiod.php
 */
fullStackPHPClassSession("A classe DatePeriod", __LINE__);

$start= new DateTime("NOW");
$interval = new DateInterval("P1M");
$end = new DateTime("2022-01-01");
$period = new DatePeriod($start, $interval, $end);
echo "<pre>".print_r($start)."</pre>";
echo "<pre>".print_r($period)."</pre>";
echo "<pre>".print_r($end)."</pre>";

echo "<br><hr><br>";

echo "<h1>A sua assinatura<h1/>";
foreach ($period as $recurrencies){
    echo "<p>Próximo vencimento é {$recurrencies->format(DATA_BR)}</p>";
}