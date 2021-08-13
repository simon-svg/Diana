<?php

class Subscribe
{
    public $id = null;
    public $email;

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
    public function getEmail()
    {
        return $this->email;
    }


    // insert ******************************************************************

    public function insert()
    {
        require_once '../connect.php';
        $conn = Config::getConnect();
        $query = 'INSERT INTO subscribe(email) 
		          VALUES("' . $this->getEmail() . '")';

        $conn->query($query);
        $id = $conn->insert_id;

        if($id){
            echo true;
        }
        else{
            echo false;
        }
    }

    // select ******************************************************************

    public function select($id = null)
    {
        require_once "../connect.php";
        $conn = Config::getConnect();
        if ($id) {
            $query = "SELECT * FROM subscribe WHERE id = $id";
        } else {
            $query = "SELECT * FROM subscribe";
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
        require_once "../connect.php";
        $conn = Config::getConnect();

        $query = "UPDATE subscribe SET email='" . $this->getEmail() . "' WHERE id = " . $this->getId();

        $result = $conn->query($query);
        if ($result->error) {
            return $result->error;
        } else {
            header("Location: ../admin/subscribe.php");
        }
    }

    // delete ******************************************************************

    public function delete($id = null)
    {
        require_once "../connect.php";
        $conn = Config::getConnect();

        $query = "DELETE FROM subscribe WHERE id = " . $id;

        $result = $conn->query($query);
        if ($result->error) {
            return $result->error;
        } else {
            header("Location: ../admin/subscribe.php");
        }
    }
}