<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.03 - Funções para arrays");

$index=[
    "Nirvana",
    "AC/DC",
    "Alter Bridg"
];

$assoc=[
    "Band_1"=>"Nirvana",
    "Band_2"=>"AC/DC",
    "Band_3"=>"Alter Bridg"
];

$assoc=[
    "Band_4"=>"Michael Jackson",
    "Band_5"=> "Green Day"
]+ $assoc;
array_push($index, " ");
//$assoc=$assoc+ ["Banda_6"=>"Lady Gaga"];
array_push($assoc,"banda_6=>Lady Gaga");

$x = "<br><hr><br>";

array_unshift($index, "teste");

array_shift($index);
array_shift($assoc);
array_pop($index);
array_pop($assoc);
array_unshift($index,"");
$index= array_filter($index);
$index= array_reverse($index);
$assoc= array_reverse($assoc);
asort($index);
asort($assoc);
ksort($index);
ksort($assoc);
krsort($index);
krsort($assoc);
sort($assoc);
sort($index);
rsort($index);
rsort($index);


/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);


/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
fullStackPHPClassSession("ordenação", __LINE__);


/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);


/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);


var_dump(
    $x,
    $index,
    $x,
    $assoc
);
echo "#################################################################";
$arrayToString= implode(", ", $assoc);
echo " Eu curto {$arrayToString} e muito brega marcante";
echo "<p>$arrayToString</p>";

if(in_array("AC/DC",$assoc)){
    echo"<p>Toca Raul</p>";
}
echo $x;
var_dump([
    array_keys($index),
    $x,
    array_values($assoc)
]);

echo "<br>_________________________________________________________"."<br>";
$profile=[
    "name"=> "Ivan de Oliveira",
    "company" => "Frella",
    "email"=> "si.ivandeoliveira21@gmail.com"
];

$template= <<<TPL
    <h1>{{name}}</h1>
    <p>{{company}}</p>
    <p>{{email}}</p>
TPL;

echo $template."<br>";
//echo str_replace(array_keys($profile), array_values($profile), $template);

$replaces= "{{".implode("}}&{{", $profile)."}}";

//echo $replaces;
//$repladed = explode("&",$replaces);

$string = $replaces;
echo $string;
//$explode = explode("&",$string, 0);


echo "<hr>";
echo str_replace(
    explode("&",$string, 0),
    array_values($profile),
    $template

);
