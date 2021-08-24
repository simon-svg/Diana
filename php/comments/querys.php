<?php

require "index.php";
$obj = new Comments($_POST);

// if (!empty($_POST["id"])) {
// 	echo $obj->update();
// } 
if(isset($_POST["submit"])){
	echo $obj->insert();
}
// if (!empty($_GET["delete_id"])) {
// 	echo $obj->delete($_GET["delete_id"]);
// }

header("Location: ../../shop-single.php?id=".$obj->getProductId());