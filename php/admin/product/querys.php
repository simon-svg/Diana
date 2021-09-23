<?php

require "index.php";

$obj = new Product($_POST);

$file = $_FILES["img"];
if ($file["error"] == 0) {
	$arr = explode("/", $file["type"]);
	$x = end($arr);
	if (preg_match("/(png || jpg || jpeg)/", $x)) {
		$y = mt_rand(1000000, 99999999);
		$y .= '.' . $x;
		if (move_uploaded_file($file["tmp_name"], "../../../assets/img/product/" . $y)) {
			$obj->setImg($y);
		}
	}
}

$l = count($_FILES["imgs"]["name"]);
for ($i = 0; $i < $l; $i++) {
	if ($_FILES["imgs"]["error"][$i] == 0) {
		$arr = explode("/", $_FILES["imgs"]["type"][$i]);
		$x = end($arr);
		if (preg_match("/(png || jpg || jpeg)/", $x)) {
			$y = mt_rand(1000000, 99999999);
			$y .= '.' . $x;
			if (move_uploaded_file($_FILES["imgs"]["tmp_name"][$i], "../../../assets/img/product/" . $y)) {
				$obj->setImgs($y);
			}
		}
	}
}


if (isset($_POST["submit"])) {
	if (!empty($_POST["id"])) {
		$obj->update($_POST["id"]);
		foreach ($_POST["color"] as $col) {
			$obj->colorUpdate($_POST["id"], $col);
		}
		foreach ($_POST["category"] as $cat) {
			$obj->categoryUpdate($_POST["id"], $cat);
		}
		foreach ($_POST["size"] as $size1) {
			$obj->sizeUpdate($_POST["id"], $size1);
		}
		foreach ($_POST["type"] as $type1) {
			$obj->typeUpdate($_POST["id"], $type1);
		}
		// foreach ($obj->getImgs() as $name1) {
		// 	$obj->imgUpdate($_POST["id"], $name1);
		// }
	} else {
		$x = $obj->insert();
		foreach ($_POST["color"] as $col) {
			$obj->colorInsert($x, $col);
		}
		foreach ($_POST["category"] as $cat) {
			$obj->categoryInsert($x, $cat);
		}
		foreach ($_POST["size"] as $size1) {
			$obj->sizeInsert($x, $size1);
		}
		foreach ($_POST["type"] as $type1) {
			$obj->typeInsert($x, $type1);
		}
		foreach ($obj->getImgs() as $name1) {
			$obj->imgInsert($x, $name1);
		}
	}
}
if (!empty($_GET["id"])) {
	echo $obj->delete($_GET["id"], $_GET["img"]);
}
if (!empty($_GET["search"])) {
	echo $obj->search($_GET["search"]);
}
header("Location: ../product.php");