<?php

require "index.php";
$obj = new Product($_POST);
$obj->setImg($obj->getImg());

if(isset($_POST["submit"])){
	echo (!empty($_POST["id"]))? $obj->update() : $obj->insert();
}
if(!empty($_GET["id"])){
	echo $obj->delete($_GET["id"], $_GET["img"]);
}
if(!empty($_GET["search"])){
	echo $obj->search($_GET["search"]);
}
