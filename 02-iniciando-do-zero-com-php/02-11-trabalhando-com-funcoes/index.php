<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.11 - Trabalhando com funções");

/*
 * [ functions ] https://php.net/manual/pt_BR/language.functions.php
 */
fullStackPHPClassSession("functions", __LINE__);

require __DIR__."/function.php";

var_dump( functionName("Pear jam", "AC\DF", "Altter Bridge"));
var_dump( functionName("Robson", "Kaue", "Gustavo"));

var_dump( optionArgs("Leonardo"));
var_dump( optionArgs("Leonardo", "Marco"));
var_dump( optionArgs("Leonardo", "Marco"));
var_dump( optionArgs("Leonardo", "Marco", "Dani"));

/*
 * [ global access ] global $var
 */
fullStackPHPClassSession("global access", __LINE__);

$weight = 86;
$height = 1.83;
echo calcImc();
/*
 * [ static arguments ] static $var
 */
fullStackPHPClassSession("static arguments", __LINE__);

$pay = payTotal(200);
$pay = payTotal(150);
$pay = payTotal(500);

echo $pay;


/*
 * [ dinamic arguments ] get_args | num_args
 */
fullStackPHPClassSession("dinamic arguments", __LINE__);

var_dump(myTeam("Kaue", "Gustavo", "Gah", "João"));