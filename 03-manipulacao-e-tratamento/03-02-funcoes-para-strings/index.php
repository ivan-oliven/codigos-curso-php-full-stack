<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.02 - Funções para strings");

/*
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
fullStackPHPClassSession("strings e multibyte", __LINE__);

$string =" O último show do AC/DC foi incrível";

var_dump([
    "$string" => $string,
    "strlen" => strlen($string),
    "mb_strlen" => mb_strlen($string),
    "substrn"=> substr($string,"9"),
    "mb_substrn"=> mb_substr($string,"9"),
    "strtoupper"=> strtoupper($string),
    "mb_strtoupper"=> mb_strtoupper($string)
]);
/**
 * [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php
 */
fullStackPHPClassSession("conversão de caixa", __LINE__);

$mbstring= $string;

var_dump([
    "strtoupper" => mb_strtoupper($string),
    "strtolower" => mb_strtolower($string),
    "mb_covertcase UPPER" => mb_convert_case($string, MB_CASE_UPPER),
    "mb_covertcase LOWER" => mb_convert_case($string, MB_CASE_LOWER),
    "mb_covertcase TITLE" => mb_convert_case($string, MB_CASE_TITLE),

]);

/**
 * [ substituição ] multibyte and replace
 */
fullStackPHPClassSession("substituição", __LINE__);

$mbReplace= $string.". Fui, e iria novamente, e foi épico.";
var_dump([
    "mb_strlen" => mb_strlen($mbReplace),
    //Pega a primeira ocorrência
    "mb_strpos" => mb_strpos($mbReplace, ", "),
    //Pega a última posição
    "mb_strrpos" => mb_strrpos($mbReplace, ", " ),
    //o primeiro argumento delimita o início do corte, o segundo delimita o final
    //do corte
    "mb_substrg"=> mb_substr($mbReplace,"10", "15"),
    // com o parâmetro true, ele pega todos os caracteres a esquerda
    "mb_strstr"=> mb_strstr($mbReplace, ", ", true),
    //também traz a última ocorrência
    "mb_strrcht" => mb_strrchr($mbReplace,", ")

]);
echo "<br>";

$mbReplace=$string;

echo "<p>{$string}</p>";
//$_mbReplace= str_replace("AC/CD", "Nirvana", $mbReplace);

print(str_replace("AC/DC", "Nirvana", $mbReplace));
echo"<br>";
//print(str_replace(["AC/DC", "foi incrível"], ["Lady Gaga", "foi boca de tracajá viaduh"], $mbReplace));
echo "<br>";
$article=<<<POP
    <h3>event</h3>
    <p>desc</p>
POP;
$LadyGaga=[
    "event" => " O show da mother monster, dona do meu cooh vulgo Lady Gaga",
    "desc" => "Teve uma fila cheia de gay caricata. Estamos até hoje devastados pelo rock in rio #BrazilImDevasted"
];

print(str_replace(array_keys($LadyGaga), array_values($LadyGaga), $article));

/**
 * [ parse string ] parse_str | mb_parse_str
 */
fullStackPHPClassSession("parse string", __LINE__);

$endpoint="name=Ivan&email=si.ivandeoliveira@gmail.com";
mb_parse_str($endpoint, $parseEndPoint);

var_dump(
    $endpoint,
    $parseEndPoint,
    (object) $parseEndPoint
);