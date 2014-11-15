<?php

if($_POST==null)
	exit(0);

var $data = json_decode($_POST);

if($data == null)
	exit(0);

exec("git pull",$output);


?>
