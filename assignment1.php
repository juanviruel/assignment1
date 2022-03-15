<?php
$name = "Juan Viruel";
$numberofcredits = 16;
$x = 20.42;

var_dump($name);
echo "<br>";

var_dump($numberofcredits);
echo "<br>";

var_dump($x);
echo "<br>";

echo "Welcome, my name is $name.";
echo "<br>";

if ($numberofcredits >= "12"){
    echo "FULL TIME STUDENT";
    echo "<br>";
}
else{
    echo "PART TIME STUDENT";
    echo "<br>";
}
echo "<br>";

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

?>