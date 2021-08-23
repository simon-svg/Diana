<?php

class Size
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
        $query = 'INSERT INTO size(name) 
		          VALUES("' . $this->getName() . '")';

        $conn->query($query);

        if ($conn->error) {
            return $conn->error;
        } else {
            header("Location: ../size.php");
        }
    }

    // select categoryes group by ******************************************************************

    public function selectGroup($conn = "../connect.php", $id = null)
    {
        require_once $conn;
        $conn = Config::getConnect();

        $queryWithId = "";
        if(isset($id) && !empty($id)){
            $queryWithId = " WHERE product_id = $id";
        }
        $query = "SELECT * FROM product_size" . $queryWithId . " GROUP BY name";
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

        $query = "UPDATE size SET name='" . $this->getName() . "' WHERE id = " . $this->getId();

        $result = $conn->query($query);
        if ($result->error) {
            return $result->error;
        } else {
            header("Location: ../size.php");
        }
    }

    // delete ******************************************************************

    public function delete($id = null)
    {
        require_once "../../connect.php";
        $conn = Config::getConnect();

        $query = "DELETE FROM size WHERE id = " . $id;

        $result = $conn->query($query);
        if ($result->error) {
            return $result->error;
        } else {
            header("Location: ../size.php");
        }
    }
}
