<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);

$arrA = array(1,2,3);

var_dump($arrA);

$arrayIndex = [
    "Brian",
    "Angus",
    "Malcolm"
];

$arrayIndex[] = "Cliff";
$arrayIndex[] = "Phil";



/**
 * [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);


$arrAssoc= [
    "vocal" =>  "Brian",
    "solo_guitar" => "Angus",
    "base_guitar" => "Malcolm",
    "bass_guitar" => "Cliff"
];
$arrAssoc["drums"] = "Phill";
$arrAssoc["dock_band"] = "AC/DC";

var_dump($arrAssoc);

/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__);

$brian =["Brian", "Mic"];
$angus = ["name" =>"Angus", "Intrument" => "Guitar" ];
$instruments = [
        $brian,
        $angus
    ];
var_dump($instruments);

var_dump([
    "brian" => $brian,
    "angus" => $angus
]);

/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);

