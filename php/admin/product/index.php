<?php

class Product
{
    public $id = null;
    public $name;
    public $price;
    public $info;
    public $sale;
    public $description;
    public $img;
    public $stock_time;
    public $tags;
    public $count;

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
    public function getPrice()
    {
        return $this->price;
    }
    public function getInfo()
    {
        return $this->info;
    }
    public function getSale()
    {
        return $this->sale;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getImg()
    {
        return $this->img;
    }
    public function setImg($img)
    {
        $this->img = $img;
        foreach ($_FILES as $file) {
            if ($file["error"] == 0) {
                $arr = explode("/", $file["type"]);
                $x = end($arr);
                if (preg_match("/(png || jpg || jpeg)/", $x)) {
                    $y = mt_rand(1000000, 99999999);
                    $y .= '.' . $x;
                    if (move_uploaded_file($file["tmp_name"], "../../../assets/img/product/" . $y)) {
                        $this->setImg($y);
                    }
                }
            }
        }
    }
    public function getStockTime()
    {
        return $this->stock_time;
    }
    public function getTags()
    {
        return $this->tags;
    }
    public function getCount()
    {
        return $this->count;
    }


    // insert ******************************************************************

    public function insert()
    {
        require_once '../../connect.php';
        $conn = Config::getConnect();
        $query = 'INSERT INTO product(name, price, info, sale, description, img, stock_time, tags, count) 
		          VALUES("' . $this->getName() . '", "' . $this->getPrice() . '", "' . $this->getInfo() . '", "' . $this->getSale() . '", "' . $this->getDescription() . '", "' . $this->getImg() . '", "' . $this->getStockTime() . '", "' . $this->getTags() . '", "' . $this->getCount() . '")';

        $conn->query($query);

        if ($conn->error) {
            return $conn->error;
        } else {
            header("Location: ../product.php");
        }
    }

    // select ******************************************************************

    public function select($id = null, $connect = "../connect.php", $name = null)
    {
        require_once $connect;
        $conn = Config::getConnect();

        $stockTime = "";
        if(!empty($name)){
            $stockTime = " WHERE $name <> ''";
        }
        if ($id) {
            $query = "SELECT * FROM product WHERE id = $id";
        } else {
            $query = "SELECT * FROM product" . $stockTime . " ORDER BY date DESC";
        }
        $result = $conn->query($query);
        $arr = [];
        while ($obj = $result->fetch_object()) {
            array_push($arr, $obj);
        }
        return $arr;
    }

    // search ******************************************************************

    public function search($like)
    {
        require_once "php/connect.php";
        $conn = Config::getConnect();
        $query = "SELECT * FROM product WHERE name LIKE '%$like%'";
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

        $query = "UPDATE product SET name='" . $this->getName() . "', price='" . $this->getPrice() . "', info='" . $this->getInfo() . "'
        , sale='" . $this->getSale() . "', description='" . $this->getDescription() . "', img='" . $this->getImg() . "'
        , stock_time='" . $this->getStockTime() . "', tags='" . $this->getTags() . "', count='" . $this->getCount() . "'
        WHERE id = " . $this->getId();
        echo $query;
        $result = $conn->query($query);
        if ($result->error) {
            return $result->error;
        } else {
            header("Location: ../product.php");
        }
    }

    // delete ******************************************************************

    public function delete($id = null, $img)
    {
        require_once "../../connect.php";
        $conn = Config::getConnect();
        $query = "DELETE FROM product WHERE id = " . $id;

        $result = $conn->query($query);
        if ($result->error) {
            return $result->error;
        } else {
            unlink("../../../assets/img/product/$img");
            header("Location: ../product.php");
        }
    }
}
