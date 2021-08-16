<?php

require "index.php";
$obj = new productSize($_POST);

if(isset($_POST["submit"])){
	if(!empty($_POST["id"])){
		echo $obj->update();
	}
	else{
		echo $obj->insert();
	}
}
if(!empty($_GET["id"])){
	echo $obj->delete($_GET["id"]);
}