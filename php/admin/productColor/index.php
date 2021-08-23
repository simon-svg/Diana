<?php

class ProductColor
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

    // select ******************************************************************

    public function select($conn = "../connect.php")
    {
        require_once $conn;
        $conn = Config::getConnect();

        $query = "SELECT * FROM product_color GROUP BY name";
        $result = $conn->query($query);
        $arr = [];
        while ($obj = $result->fetch_object()) {
            array_push($arr, $obj);
        }
        return $arr;
    }
    
    // select color group by ******************************************************************

    public function selectGroup($conn = "../connect.php", $id)
    {
        require_once $conn;
        $conn = Config::getConnect();

        $query = "SELECT * FROM product_color WHERE product_id = $id";
        $result = $conn->query($query);
        $arr = [];
        while ($obj = $result->fetch_object()) {
            array_push($arr, $obj);
        }
        return $arr;
    }
}