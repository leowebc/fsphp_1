<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.07 - Estruturas de controle");

/*
 * [ if ] https://php.net/manual/pt_BR/control-structures.if.php
 * [ elseif ] https://php.net/manual/pt_BR/control-structures.elseif.php
 * [ else ] https://php.net/manual/pt_BR/control-structures.else.php
 */
fullStackPHPClassSession("if, elseif, else", __LINE__);

$test =true;

if ($test){
    var_dump(true);
}else{
    var_dump(false);
}

$age=32;

if($age < 20) {
    var_dump("bandas Coloridas");
}elseif ($age > 20 && $age < 50){
    var_dump("Ótimas Bandas");
}else{
    var_dump("Rock And Roll Raiz");
}

$hour = 3;

if($hour >= 5 && $hour < 23){
    if($hour < 7){
        var_dump("Bob Marley");
    }else{
        var_dump("After Bridge");
    }

}else {
    var_dump("ZZZzzzzzzzz");
}


/*
 * [ isset ] https://php.net/manual/pt_BR/function.isset.php
 * [ empty] https://php.net/manual/pt_BR/function.empty.php
 */
fullStackPHPClassSession("isset, empty, !", __LINE__);

$rock = "";

if (isset($rock)){
    var_dump("Rock And Roll!");
} else {
    var_dump("Die");
}

$rockAndRoll = "AC/DC";
if(empty($rockAndRoll)){
    var_dump("Rock exixte e toca {$rockAndRoll}");
} else {
    var_dump("não esiste ou não esá tocando!");
}




/*
 * [ switch ] https://secure.php.net/manual/pt_BR/control-structures.switch.php
 */
fullStackPHPClassSession("switch", __LINE__);

$payment = "canceled";

switch ($payment){
    case "Billet_printed":
        var_dump("Boleto Impresso");
        break;
    case "canceled":
        var_dump("Pagamento Cancelado");
        break;
    case 'past_due':
    case 'pending':
        var_dump("aguardando pagamento");
        break;
    case 'approved':
    case 'completed':
        var_dump("Pagamento Aprovado");
        break;
    default:
        var_dump("erro ao processar o pagamento!");
        break;


}


