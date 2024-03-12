<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
echo fullStackPHPClassName("02.05 - Operadores na prática");

/**
 * [ operadores ] https://php.net/manual/pt_BR/language.operators.php
 * [ atribuição ] https://php.net/manual/pt_BR/language.operators.assignment.php
 */
fullStackPHPClassSession("atribuição", __LINE__);

$operetorA = 5;
$oprerators = [
    "a += 5" => ($operetorA += 5),
    "a -= 5" => ($operetorA -= 5),
    "a *- 5" => ($operetorA *= 5),
    "a /= 5" => ($operetorA /= 5)
];

var_dump($oprerators);

$incrementA = 5;
$incrementB = 5;
$increment = [
    "pos-incremento" => $incrementA++,
    "res-incremento" => $incrementA,
    "pré-incremento" => ++$incrementA,
    "pós-decremento" => $incrementA--,
    "res-decremento" => $incrementA,
    "pré-decremento" => --$incrementA,

    ];

var_dump($increment);

/**
 * [ comparação ] https://php.net/manual/pt_BR/language.operators.comparison.php
 */
fullStackPHPClassSession("comparação", __LINE__);

$reladA = 5;
$reladB ="5";
$reladC = 10;
$relatad = [
    "a == b " => ($reladA == $reladB),
    "a === b " => ($reladA === $reladB),
    "a != b " => ($reladA != $reladB),
    "a !== b " => ($reladA !== $reladB),
     "a < c"   => ($reladA < $reladC),
     "a >= b"   => ($reladA >= $reladB),
     "a >= c"   => ($reladA >= $reladC),
     "a <= c"   => ($reladA <= $reladC),

];
var_dump($relatad);
/**
 * [ lógicos ] https://php.net/manual/pt_BR/language.operators.logical.php
 */
fullStackPHPClassSession("lógicos", __LINE__);

$logicA = true;
$logicB = false;
$logic = [
    "a && b" => ($logicA && $logicB),
    "a || b" => ($logicA || $logicB),
    "a" => ($logicA),
    "!a" => (!$logicA),
    "!b" => (!$logicB),
];
var_dump($logic);



/**
 * [ aritiméticos ] https://php.net/manual/pt_BR/language.operators.arithmetic.php
 */
fullStackPHPClassSession("aritiméticos", __LINE__);

$calcA = 5;
$calcB = 10;
$calc =[
  "a + b" => $calcA + $calcB,
  "a - b" => $calcA + $calcB,
  "a * b" => $calcA + $calcB,
  "a / b" => $calcA + $calcB,
  "a % b" => $calcA + $calcB,

];
var_dump($calc);
