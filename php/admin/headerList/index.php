<?php

class HeaderList
{
    public $id = null;
    public $name;
    public $link;
    public $parent_id;

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
    public function getLink()
    {
        return $this->link;
    }
    public function getParentId()
    {
        return $this->parent_id;
    }


    // insert ******************************************************************

    public function insert()
    {
        require_once '../../connect.php';
        $conn = Config::getConnect();
        $query = 'INSERT INTO header_list(name, link, parent_id) 
		          VALUES("' . $this->getName() . '", "' . $this->getLink() . '", "' . $this->getParentId() . '")';

        $conn->query($query);

        if ($conn->error) {
            return $conn->error;
        } else {
            header("Location: ../index.php");
        }
    }

    // select ******************************************************************

    public function select($id = null)
    {
        require_once "../connect.php";
        $conn = Config::getConnect();
        if ($id) {
            $query = "SELECT * FROM header_list WHERE id = $id";
        } else {
            $query = "SELECT * FROM header_list";
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

        $query = "UPDATE header_list SET name='" . $this->getName() . "', link='" . $this->getLink() . "', parent_id='" . $this->getParentId() . "' WHERE id = " . $this->getId();

        $result = $conn->query($query);
        if ($result->error) {
            return $result->error;
        } else {
            header("Location: ../index.php");
        }
    }

    // delete ******************************************************************

    public function delete($id = null)
    {
        require_once "../../connect.php";
        $conn = Config::getConnect();

        $query = "DELETE FROM header_list WHERE id = " . $id;

        $result = $conn->query($query);
        if ($result->error) {
            return $result->error;
        } else {
            header("Location: ../index.php");
        }
    }
}