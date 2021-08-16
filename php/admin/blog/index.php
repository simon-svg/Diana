<?php

class Blog
{
    public $id = null;
    public $title;
    public $text;
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
    public function getText()
    {
        return $this->text;
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
                    if (move_uploaded_file($file["tmp_name"], "../../../assets/img/blogs/" . $y)) {
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
        $query = 'INSERT INTO blog(title, text, img) 
		          VALUES("' . $this->getTitle() . '", "' . $this->getText() . '", "' . $this->getImg() . '")';

        $conn->query($query);

        if ($conn->error) {
            return $conn->error;
        } else {
            header("Location: ../blog.php");
        }
    }

    // select ******************************************************************

    public function select($id = null, $connect = "../connect.php", $num = null)
    {
        require_once $connect;
        $conn = Config::getConnect();
        if ($id) {
            $query = "SELECT * FROM blog WHERE id = $id";
        } else {
            $query = "SELECT * FROM blog" . ($num ? " limit $num" : null);
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
        require_once "../../connect.php";
        $conn = Config::getConnect();
        $query = "SELECT * FROM blog WHERE title LIKE '%$like%'";
        $result = $conn->query($query);
        $arr = [];
        while ($obj = $result->fetch_object()) {
            array_push($arr, $obj);
        }
        var_dump($arr);
    }

    // update ******************************************************************

    public function update()
    {
        require_once "../../connect.php";
        $conn = Config::getConnect();

        $query = "UPDATE blog SET title='" . $this->getTitle() . "', text='" . $this->getText() . "', img='" . $this->getImg() . "' WHERE id = " . $this->getId();
        $result = $conn->query($query);
        if ($result->error) {
            return $result->error;
        } else {
            header("Location: ../blog.php");
        }
    }

    // delete ******************************************************************

    public function delete($id = null, $img)
    {
        require_once "../../connect.php";
        $conn = Config::getConnect();
        $query = "DELETE FROM blog WHERE id = " . $id;
        unlink("../../../assets/img/blogs/$img");

        $result = $conn->query($query);
        if ($result->error) {
            return $result->error;
        } else {
            header("Location: ../blog.php");
        }
    }
}
