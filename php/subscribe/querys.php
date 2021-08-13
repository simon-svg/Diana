<?php

require "index.php";
$obj = new Subscribe($_POST);

if (!empty($_POST["id"])) {
	echo $obj->update();
} 
if(!empty($_GET["q"])){
	echo $obj->insert();
}
if (!empty($_GET["delete_id"])) {
	echo $obj->delete($_GET["delete_id"]);
}