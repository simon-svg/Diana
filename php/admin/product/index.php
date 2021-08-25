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
    public $category;
    public $color;
    public $type;
    public $size;
    public $imgs = [];
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
    public function setId($id)
    {
        $this->id = $id;
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
    }
    public function getCategory()
    {
        return $this->category;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function getType()
    {
        return $this->type;
    }
    public function getSize()
    {
        return $this->size;
    }
    public function getImgs()
    {
        return $this->imgs;
    }
    public function setImgs($img)
    {
        array_push($this->imgs, $img);
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

    public function colorInsert($product_id, $name)
    {
        require_once '../../connect.php';
        $conn = Config::getConnect();
        $query = 'INSERT INTO product_color(name, product_id) 
            VALUES("' . $name . '", "' . $product_id . '")';

        $conn->query($query);
    }


    public function categoryInsert($product_id, $name)
    {
        require_once '../../connect.php';
        $conn = Config::getConnect();
        $query = 'INSERT INTO product_category(name, product_id) 
            VALUES("' . $name . '", "' . $product_id . '")';

        $conn->query($query);
    }

    public function sizeInsert($product_id, $name)
    {
        require_once '../../connect.php';
        $conn = Config::getConnect();
        $query = 'INSERT INTO product_size(name, product_id) 
            VALUES("' . $name . '", "' . $product_id . '")';

        $conn->query($query);
    }

    public function typeInsert($product_id, $name)
    {
        require_once '../../connect.php';
        $conn = Config::getConnect();
        $query = 'INSERT INTO product_type(name, product_id) 
            VALUES("' . $name . '", "' . $product_id . '")';

        $conn->query($query);
    }

    public function imgInsert($product_id, $name)
    {
        require_once '../../connect.php';
        $conn = Config::getConnect();
        $query = 'INSERT INTO product_img(name, product_id) 
            VALUES("' . $name . '", "' . $product_id . '")';

        $conn->query($query);
    }


    // update ******************************************************************

    public function colorUpdate($product_id, $name)
    {
        require_once '../../connect.php';
        $conn = Config::getConnect();
        $query = "UPDATE product_color SET name = '$name' WHERE product_id = " . $product_id;

        $conn->query($query);
    }


    public function categoryUpdate($product_id, $name)
    {
        require_once '../../connect.php';
        $conn = Config::getConnect();
        $query = "UPDATE product_category SET name = '$name' WHERE product_id = " . $product_id;

        $conn->query($query);
    }

    public function sizeUpdate($product_id, $name)
    {
        require_once '../../connect.php';
        $conn = Config::getConnect();
        $query = "UPDATE product_size SET name = '$name' WHERE product_id = " . $product_id;

        $conn->query($query);
    }

    public function typeUpdate($product_id, $name)
    {
        require_once '../../connect.php';
        $conn = Config::getConnect();
        $query = "UPDATE product_type SET name = '$name' WHERE product_id = " . $product_id;

        $conn->query($query);
    }



    public function insert()
    {
        require_once '../../connect.php';
        $conn = Config::getConnect();
        $query = 'INSERT INTO product(name, price, info, sale, description, img, stock_time, tags, count) 
                    VALUES("' . $this->getName() . '", "' . $this->getPrice() . '", "' . $this->getInfo() . '", "' . $this->getSale() . '"
                    , "' . $this->getDescription() . '", "' . $this->getImg() . '", "' . $this->getStockTime() . '", "' . $this->getTags() . '"
                    , "' . $this->getCount() . '")';

        $conn->query($query);
        return $conn->insert_id;
        $lImgs = count($_FILES["imgs"]["name"]);
        for ($i = 0; $i < $lImgs; $i++) {
            $conn->query('INSERT INTO product_img(name, product_id) 
            VALUES("' . $_FILES["imgs"]["name"][$i] . '", "' . $this->getId() . '")');
        }

        if ($conn->error) {
            return $conn->error;
        }
    }

    // select ******************************************************************

    public function select($id = null, $connect = "../connect.php", $name = null, $limit = null)
    {
        require_once $connect;
        $conn = Config::getConnect();

        $stockTime = "";
        if (!empty($name)) {
            $stockTime = " WHERE $name <> ''";
        }
        $limitQuery = "";
        if (isset($limit)) {
            $limitQuery = $limit;
        }

        if ($id) {
            $query = "SELECT * FROM product WHERE id = $id";
        } else {
            $query = "SELECT * FROM product" . $stockTime . " ORDER BY date DESC " . $limitQuery;
        }
        $result = $conn->query($query);
        $arr = [];
        while ($obj = $result->fetch_object()) {
            array_push($arr, $obj);
        }
        return $arr;
    }

    // selectInCat ******************************************************************

    public function selectInCat($connect = "../connect.php", $id = null, $limit = null)
    {
        require_once $connect;
        $conn = Config::getConnect();
        $limitQuery = "";
        if (isset($limit)) {
            $limitQuery = $limit;
        }

        $query = "SELECT *, product.name FROM product JOIN product_category ON product.id = product_category.product_id AND product_category.name = '$id' ORDER BY date DESC " . $limitQuery;
        $result = $conn->query($query);
        $arr = [];
        while ($obj = $result->fetch_object()) {
            array_push($arr, $obj);
        }
        return $arr;
    }

    // selectInCat ******************************************************************

    public function selectInType($connect = "../connect.php", $id = null, $limit = null)
    {
        require_once $connect;
        $conn = Config::getConnect();
        $limitQuery = "";
        if (isset($limit)) {
            $limitQuery = $limit;
        }

        $query = "SELECT *, product.name, product.id FROM product JOIN product_type ON product.id = product_type.product_id JOIN type
        ON product_type.name = type.id AND type.name = '$id' ORDER BY date DESC " . $limitQuery;
        $result = $conn->query($query);
        $arr = [];
        while ($obj = $result->fetch_object()) {
            array_push($arr, $obj);
        }
        return $arr;
    }

    // selectInColor ******************************************************************

    public function selectInColor($connect = "../connect.php", $id = null, $limit = null)
    {
        require_once $connect;
        $conn = Config::getConnect();
        $limitQuery = "";
        if (isset($limit)) {
            $limitQuery = $limit;
        }
        $query = "SELECT *, product.name, product.id FROM product JOIN product_color ON product.id = product_color.product_id
        AND product_color.name = '#$id' ORDER BY date DESC " . $limitQuery;
        $result = $conn->query($query);
        $arr = [];
        while ($obj = $result->fetch_object()) {
            array_push($arr, $obj);
        }
        return $arr;
    }

    // selectInSize ******************************************************************

    public function selectInSize($connect = "../connect.php", $id = null, $limit = null)
    {
        require_once $connect;
        $conn = Config::getConnect();
        $limitQuery = "";
        if (isset($limit)) {
            $limitQuery = $limit;
        }
        $query = "SELECT *, product.name, product.id FROM product JOIN product_size ON product.id = product_size.product_id
        AND product_size.name = '$id' ORDER BY date DESC " . $limitQuery;
        $result = $conn->query($query);
        $arr = [];
        while ($obj = $result->fetch_object()) {
            array_push($arr, $obj);
        }
        return $arr;
    }
    
    // selectInTag ******************************************************************

    public function selectInTag($connect = "../connect.php", $id = null, $limit = null)
    {
        require_once $connect;
        $conn = Config::getConnect();
        $limitQuery = "";
        if (isset($limit)) {
            $limitQuery = $limit;
        }
        $query = "SELECT * FROM product WHERE tags LIKE '%$id%' ORDER BY date DESC " . $limitQuery;
        $result = $conn->query($query);
        $arr = [];
        while ($obj = $result->fetch_object()) {
            array_push($arr, $obj);
        }
        return $arr;
    }

    // selectImgs ******************************************************************

    public function selectImgs($connect = "../connect.php", $id = null)
    {
        require_once $connect;
        $conn = Config::getConnect();

        $query = "SELECT * FROM product_img WHERE product_img.product_id = $id";
        $result = $conn->query($query);
        $arr = [];
        while ($obj = $result->fetch_object()) {
            array_push($arr, $obj);
        }
        return $arr;
    }

    // search ******************************************************************

    public function search($like, $limit = null)
    {
        require_once "php/connect.php";
        $conn = Config::getConnect();

        $limitQuery = "";
        if (isset($limit)) {
            $limitQuery = $limit;
        }
        $query = "SELECT * FROM product WHERE product.name LIKE '%$like%' ORDER BY date DESC " . $limitQuery;
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

        $query = "UPDATE product SET name='" . $this->getName() . "', price='" . $this->getPrice() . "'
        , sale='" . $this->getSale() . "', info='" . $this->getInfo() . "', description='" . $this->getDescription() . "'
        , img='" . $this->getImg() . "', stock_time='" . $this->getStockTime() . "', tags='" . $this->getTags() . "'
        , count='" . $this->getCount() . "', WHERE id = " . $this->getId();

        $result = $conn->query($query);
        if ($result->error) {
            return $result->error;
        }
    }

    // delete ******************************************************************

    public function delete($id = null, $img)
    {
        require_once "../../connect.php";
        $conn = Config::getConnect();
        $query = "DELETE FROM product WHERE id = " . $id;
        $query1 = "DELETE FROM product_img WHERE product_id = " . $id;
        $query2 = "DELETE FROM product_type WHERE product_id = " . $id;
        $query3 = "DELETE FROM product_size WHERE product_id = " . $id;
        $query4 = "DELETE FROM product_color WHERE product_id = " . $id;
        $query5 = "DELETE FROM product_category WHERE product_id = " . $id;

        $result = $conn->query($query);
        $result1 = $conn->query($query1);
        $result2 = $conn->query($query2);
        $result3 = $conn->query($query3);
        $result4 = $conn->query($query4);
        $result5 = $conn->query($query5);
        if ($result->error || $result1->error || $result2->error || $result3->error || $result4->error || $result5->error) {
            return $result->error;
        } else {
            unlink("../../../assets/img/product/$img");
        }
    }
}
