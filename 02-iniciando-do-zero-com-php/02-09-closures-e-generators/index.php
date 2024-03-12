<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);

$myAge = function ($year){
    $age = date("Y") - $year;
    return "<p> Você tem {$age} anos</p>";
};

$priceRrl = function ($price){
    return number_format($price, 2, ",", ".");
};

echo $myAge(1981);

echo "<p>O Pojeto custa R$ {$priceRrl(3600)}. vamos fachar</p>";

$myCart = [];
$myCart["totalPrice"] = 0;
$cardAdd = function ($item, $qtd, $price ) use (&$myCart){
    $myCart[$item] = $qtd * $price;
    $myCart["totalPrice"] += $myCart[$item];
};

$cardAdd("HTML5", 1, 497);
$cardAdd("jquery", 2, 497);

 var_dump($myCart);


/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);



$iterator = 400;

function generatorDate($days)
{
    for ($day = 1; $day < $days; $day++){
        yield date("d/m/Y", strtotime("+{$day}days"));
    }
}

echo"<div style='text-align:center'>";
foreach (generatorDate($iterator) as $date) {
    echo "<small class='tag'>{$date}</small>" . PHP_EOL;
}












