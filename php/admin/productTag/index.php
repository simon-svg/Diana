<?php

class ProductTag
{
    public $id = null;
    public $name;

    public function __construct($input = null)
    {
        if (is_array($input)) {
            foreach ($input as $k => $v) {
                $this->$k = $v;
            }
        }
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }


    // insert ******************************************************************

    public function insert()
    {
        require_once '../../connect.php';
        $conn = Config::getConnect();
        $query = 'INSERT INTO product_tag(name) 
		          VALUES("' . $this->getName() . '")';

        $conn->query($query);

        if ($conn->error) {
            return $conn->error;
        } else {
            header("Location: ../productTag.php");
        }
    }

    // select ******************************************************************

    public function select($id = null, $conn="../connect.php")
    {
        require_once $conn;
        $conn = Config::getConnect();
        if ($id) {
            $query = "SELECT * FROM product_tag WHERE id = $id";
        } else {
            $query = "SELECT * FROM product_tag";
        }
        $result = $conn->query($query);
        $arr = [];
        while ($obj = $result->fetch_object()) {
            array_push($arr, $obj);
        }
        return $arr;
    }

    // update ******************************************************************

    public function update()
    {
        require_once "../../connect.php";
        $conn = Config::getConnect();

        $query = "UPDATE product_tag SET name='" . $this->getName() . "' WHERE id = " . $this->getId();

        $result = $conn->query($query);
        if ($result->error) {
            return $result->error;
        } else {
            header("Location: ../productTag.php");
        }
    }

    // delete ******************************************************************

    public function delete($id = null)
    {
        require_once "../../connect.php";
        $conn = Config::getConnect();

        $query = "DELETE FROM product_tag WHERE id = " . $id;

        $result = $conn->query($query);
        if ($result->error) {
            return $result->error;
        } else {
            header("Location: ../productTag.php");
        }
    }
}