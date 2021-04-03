<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.04 - Manipulação de objetos");

/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
fullStackPHPClassSession("manipulação", __LINE__);
$arrProfile=[
    "name" => "ivan",
    "company" => "Freela",
    "email"=> "si.ivandeoliveira21@gmail.com"

]
;
echo "<pre>".var_dump($arrProfile)."</pre>";
$objProfile = (object) $arrProfile;
var_dump($objProfile);
echo "<hr><br>";


echo "{$arrProfile["name"]} trabalha como {$arrProfile["company"]} 
e seu email é {$arrProfile["email"]}";

echo "<hr><br>";

echo "{$objProfile->name} trabalha como {$objProfile->company} e seu email é {$objProfile->email}";

echo "<hr><br>";
$ceo = $objProfile;
unset($ceo->company);
var_dump($ceo);
$company= new stdClass();
$company->company="freela";
$company->ceo= $ceo;
$company->manager = new stdClass();
$company->manager->name="não há";
$company->manager->email="naoexiste@gmail.com";
echo "<hr><br>";
var_dump($company);

/**
 * [ análise ] class | objetcs | instances
 */
fullStackPHPClassSession("análise", __LINE__);

$date = new DateTime();

var_dump([

        "class"=>get_class($date),
        "methods" => get_class_methods($date),
        "var" => get_object_vars($date),
        "parent" => get_parent_class($date),
        "sub_class" => is_subclass_of($date, "DateTime")
]);
echo "<hr><br>";

$exception = new PDOException();

var_dump([

    "class"=>get_class($exception),
    "methods" => get_class_methods($exception),
    "var" => get_object_vars($exception),
    "parent" => get_parent_class($exception),
    "sub_class" => is_subclass_of($exception, "Exception")
]);