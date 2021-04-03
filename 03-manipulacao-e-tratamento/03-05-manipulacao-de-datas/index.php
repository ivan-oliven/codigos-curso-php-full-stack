<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.05 - Manipulação de datas");

/*
 * [ a função date ] setup | output
 * [ date ] https://php.net/manual/pt_BR/function.date.php
 * [ timezones ] https://php.net/manual/pt_BR/timezones.php
 */
fullStackPHPClassSession("a função date", __LINE__);

var_dump(
    date_default_timezone_get(),
    date(DATE_W3C),
    date("d/m/y h:i:s")
);
define("DATE_BR","d/m/y h:i:s");
define ("TIME_ZONE", "Pacific/Apia");

date_default_timezone_set(TIME_ZONE);
var_dump([
    date_default_timezone_get(),
    date(DATE_BR),
]);

echo "<br><hr><br>";
var_dump(getdate());
echo "<br><hr><br>";
echo "<p>Hoje é ".getdate()["mday"]." Vamos Trabalhar !</p>";

var_dump([

    "strtotime NOW"=>strtotime("now"),
    "strtotime+10"=> strtotime("+ 10days"),
    "DATE_BR"=> date(DATE_BR),
    "date()+10dias" => date(DATE_BR, strtotime("+10days")),
    "date()-10dias" => date(DATE_BR, strtotime("-10days")),
    "date()+1year" => date(DATE_BR, strtotime("+1year")),
]);
/**
 * [ string to date ] strtotime | strftime
 */
fullStackPHPClassSession("string to date", __LINE__);
echo "<br><hr><br>";
$format = " %d/%m/%y %h/%m/%y";
echo strftime($format);