<?php

class Category
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
        $query = 'INSERT INTO category(name) 
		          VALUES("' . $this->getName() . '")';

        $conn->query($query);

        if ($conn->error) {
            return $conn->error;
        } else {
            header("Location: ../category.php");
        }
    }

    // select ******************************************************************

    public function select($id = null, $conn = "../connect.php")
    {
        require_once $conn;
        $conn = Config::getConnect();

        if ($id) {
            $query = " WHERE id = $id";
        } else {
            $query = "SELECT * FROM category" . $id;
        }
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

        $query = "SELECT category.name, count(category.name) as cName FROM category INNER JOIN product_category
        ON category.name = product_category.name GROUP BY product_category.name";
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

        $query = "UPDATE category SET name='" . $this->getName() . "' WHERE id = " . $this->getId();

        $result = $conn->query($query);
        if ($result->error) {
            return $result->error;
        } else {
            header("Location: ../category.php");
        }
    }

    // delete ******************************************************************

    public function delete($id = null)
    {
        require_once "../../connect.php";
        $conn = Config::getConnect();

        $query = "DELETE FROM category WHERE id = " . $id;

        $result = $conn->query($query);
        if ($result->error) {
            return $result->error;
        } else {
            header("Location: ../category.php");
        }
    }
}
