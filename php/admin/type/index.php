<?php

class Type
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
        $query = 'INSERT INTO type(name) 
		          VALUES("' . $this->getName() . '")';

        $conn->query($query);

        if ($conn->error) {
            return $conn->error;
        } else {
            header("Location: ../type.php");
        }
    }

    // select ******************************************************************

    public function select($id = null, $conn = "../connect.php")
    {
        require_once $conn;
        $conn = Config::getConnect();
        if ($id) {
            $query = "SELECT * FROM type WHERE id = $id";
        } else {
            $query = "SELECT * FROM type";
        }
        $result = $conn->query($query);
        $arr = [];
        while ($obj = $result->fetch_object()) {
            array_push($arr, $obj);
        }
        return $arr;
    }

    // select ******************************************************************

    public function selectIdAll($conn = "../connect.php", $id = null)
    {
        require_once $conn;
        $conn = Config::getConnect();
        $query = "SELECT type.name FROM product_type INNER JOIN type WHERE product_type.name = type.id AND product_type.product_id = $id";

        $result = $conn->query($query);
        $arr = [];
        while ($obj = $result->fetch_object()) {
            array_push($arr, $obj);
        }
        return $arr;
    }
    // select categoryes group by ******************************************************************

    public function selectGroup($conn = "../connect.php")
    {
        require_once $conn;
        $conn = Config::getConnect();

        $query = "SELECT type.name, count(product_type.name) as tCount FROM type INNER JOIN product_type
        ON type.id = product_type.name GROUP BY product_type.name";
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

        $query = "UPDATE type SET name='" . $this->getName() . "' WHERE id = " . $this->getId();

        $result = $conn->query($query);
        if ($result->error) {
            return $result->error;
        } else {
            header("Location: ../type.php");
        }
    }

    // delete ******************************************************************

    public function delete($id = null)
    {
        require_once "../../connect.php";
        $conn = Config::getConnect();

        $query = "DELETE FROM type WHERE id = " . $id;

        $result = $conn->query($query);
        if ($result->error) {
            return $result->error;
        } else {
            header("Location: ../type.php");
        }
    }
}
