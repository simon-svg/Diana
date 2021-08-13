<?php

class ProductCategory
{
    public $id = null;
    public $name;
    public $product_id;

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
    public function getProductId()
    {
        return $this->product_id;
    }


    // insert ******************************************************************

    public function insert()
    {
        require_once '../../connect.php';
        $conn = Config::getConnect();
        $query = 'INSERT INTO product_category(name, product_id) 
		          VALUES("' . $this->getName() . '", "' . $this->getProductId() . '")';

        $conn->query($query);

        if ($conn->error) {
            return $conn->error;
        } else {
            header("Location: ../productCategory.php");
        }
    }

    // select ******************************************************************

    public function select($id = null)
    {
        require_once "../connect.php";
        $conn = Config::getConnect();
        if ($id) {
            $query = "SELECT * FROM product_category WHERE id = $id";
        } else {
            $query = "SELECT * FROM product_category";
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

        $query = "UPDATE product_category SET name='" . $this->getName() . "', product_id='" . $this->getProductId() . "' WHERE id = " . $this->getId();

        $result = $conn->query($query);
        if ($result->error) {
            return $result->error;
        } else {
            header("Location: ../productCategory.php");
        }
    }

    // delete ******************************************************************

    public function delete($id = null)
    {
        require_once "../../connect.php";
        $conn = Config::getConnect();

        $query = "DELETE FROM product_category WHERE id = " . $id;

        $result = $conn->query($query);
        if ($result->error) {
            return $result->error;
        } else {
            header("Location: ../productCategory.php");
        }
    }
}