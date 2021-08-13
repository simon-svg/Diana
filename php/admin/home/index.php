<?php

class Home
{
    public $id = null;
    public $title;
    public $sub_title;
    public $img;

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
    public function getTitle()
    {
        return $this->title;
    }
    public function getSub_title()
    {
        return $this->sub_title;
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
                    if (move_uploaded_file($file["tmp_name"], "../../../assets/img/home/" . $y)) {
                        $this->setImg($y);
                    }
                }
            }
        }
    }


    // insert ******************************************************************

    public function insert() 
    {
        require_once '../../connect.php';
        $conn = Config::getConnect();
        $query = 'INSERT INTO home(title, sub_title, img) 
		          VALUES("' . $this->getTitle() . '", "' . $this->getSub_title() . '", "' . $this->getImg() . '")';

        $conn->query($query);

        if ($conn->error) {
            return $conn->error;
        } else {
            header("Location: ../home.php");
        }
    }

    // select ******************************************************************

    public function select($id = null, $connect = "../connect.php")
    {
        require_once $connect;
        $conn = Config::getConnect();
        if ($id) {
            $query = "SELECT * FROM home WHERE id = $id";
        } else {
            $query = "SELECT * FROM home";
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

        $query = "UPDATE home SET title='" . $this->getTitle() . "', sub_title='" . $this->getSub_title() . "', img='" . $this->getImg() . "' WHERE id = " . $this->getId();

        $result = $conn->query($query);
        if ($result->error) {
            return $result->error;
        } else {
            header("Location: ../home.php");
        }
    }

    // delete ******************************************************************

    public function delete($id = null, $img)
    {
        require_once "../../connect.php";
        $conn = Config::getConnect();
        $query = "DELETE FROM home WHERE id = " . $id;
        unlink("../../../assets/img/home/$img");

        $result = $conn->query($query);
        if ($result->error) {
            return $result->error;
        } else {
            header("Location: ../home.php");
        }
    }
}