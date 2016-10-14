<?php
$text = "The quick brown fox jumped over the lazy dog.";
//$newtext = wordwrap($text, 20, "<br />\n");
$newtext1=wordwrap($text,8,'<br/>');
echo $newtext,$newtext1;

print vsprintf("%04d-%02d-%2d", explode('-', '1988-8-1')); // 1988-08-01`
vprintf("%04d-%02d-%02d", explode('-', '1988-8-1')); // 1988-08-01

$foo = 'hello world!';
echo $foo = ucwords($foo);             // Hello World!

$foo = 'hello world!';
echo $foo = ucfirst($foo);             // Hello world!

$foo = 'HelloWorld';
$foo = lcfirst($foo);             // helloWorld

$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtolower($str);
echo $str; // 打印 mary had a little lamb and she loved it so

$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtoupper($str);
echo $str; // 打印 MARY HAD A LITTLE LAMB AND SHE LOVED IT SO

echo implode(array(1,2,3,4));