<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.03 - Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);

var_dump('ola mundo');
echo "<p> Olá Mundo!", " ", "<span class='tag'> #BoraProgramar!</span>","</p>";

$hello = "Ola Mundo";
$code  = "<span class='tag'> #BoraProgramar!</span>";
echo "<p>$hello";
echo '<p>$hello';

$day = "dia";
echo "<p> faltam 1 $day para o evento!</p>";
echo "<p> faltam 2 {$day}s para o evento!</p>";

echo "<h3>{$hello}</h3>";
echo "<h4>{$hello} {code}</h4>";

echo '<h3>'. $hello . " " . $code . "</h3>";

/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);

print $hello;
print $code;
/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);

$array = [
    "company" => "upInside",
    "course" => "fsphp",
    "class"  => "Comendo de saida"
];

print_r($array);
echo "<pre>", print_r($array, true), "</pre>";



/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);
$article = "<article><h1>%s</h1><p>%s</p></article>";
$title = "{$hello} {$code}";
$sobtitle = "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
 dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
  book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially 
  unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and 
  more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

printf($article, $title, $sobtitle);
/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);

$company = "<article><h1>Escola %s</h1><p>Curso<b>%s</b>, aula <b>%s</b></p></article>";
vprintf($company, $array);

/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);

var_dump(
        $array,
        $hello,
        $company
);
