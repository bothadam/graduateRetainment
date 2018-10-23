<?php
$name = $_GET["name"];
$surname = $_GET["surname"];
$dob = $_GET["dobDay"]."#".$_GET["dobMonth"]."#".$_GET["dobYear"];
$classOf = $_GET["classOf"];

echo $name.$surname.$dob.$classOf;

?>