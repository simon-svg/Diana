<?php

require "index.php";
$obj = new Home($_POST);
$obj->setImg($obj->getImg());

if(isset($_POST["submit"])){
	if(!empty($_POST["id"])){
		echo $obj->update();
	}
	else{
		echo $obj->insert();
	}
}
if(!empty($_GET["id"])){
	echo $obj->delete($_GET["id"], $_GET["img"]);
}