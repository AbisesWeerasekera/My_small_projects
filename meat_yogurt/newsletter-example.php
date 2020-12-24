<?php

$hello = '<h1>hello from php land  !!</h1>';

// echo - https://www.php.net/manual/en/function.echo.php
echo $hello;

// <pre> tag adds formatting - https://www.w3schools.com/tags/tag_pre.asp
echo '<pre>';
// $_GET varable - https://www.php.net/manual/en/reserved.variables.get.php
print_r($_GET);
echo isset($_GET['name']) ? $_GET['name'] : NULL;
echo '</pre>';

echo '<pre>';
// variables - https://www.php.net/manual/en/language.variables.variable.php
// $_POST variable - https://www.php.net/manual/en/reserved.variables.post.php
// array - https://www.php.net/manual/en/language.types.array.php
// print_r - https://www.php.net/manual/en/function.print-r.php
print_r($_POST);
// isset - https://www.php.net/manual/en/function.isset.php
echo isset($_POST['phone']) ? $_POST['phone'] : 'no phone';
echo '</pre>';