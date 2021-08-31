<?php

class Contact
{
    public $id = null;
    public $name;
    public $email;
    public $phone;
    public $subject;
    public $message;

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
    public function getEmail()
    {
        return $this->email;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function getSubject()
    {
        return $this->subject;
    }
    public function getMessage()
    {
        return $this->message;
    }


    // insert ******************************************************************

    public function insert()
    {
        require_once '../../connect.php';
        $conn = Config::getConnect();
        $query = 'INSERT INTO contact(name, email, phone, subject, message) 
		          VALUES("' . $this->getName() . '", "' . $this->getEmail() . '", "' . $this->getPhone() . '", "' . $this->getSubject() . '", "' . $this->getMessage() . '")';

        $conn->query($query);
        if ($conn->error) {
            return $conn->error;
        } else {
            header("Location: ../../../contact.php");
        }
    }

    // select ******************************************************************

    public function select($id = null, $conn = "../connect.php")
    {
        require_once $conn;
        $conn = Config::getConnect();
        if ($id) {
            $query = "SELECT * FROM contact WHERE id = $id";
        } else {
            $query = "SELECT * FROM contact";
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

        $query = "UPDATE contact SET name='" . $this->getName() . "', email='" . $this->getEmail() . "', phone='" . $this->getPhone() . "', subject='" . $this->getSubject() . "' , message='" . $this->getMessage() . "' WHERE id = " . $this->getId();

        $result = $conn->query($query);
        if ($result->error) {
            return $result->error;
        } else {
            header("Location: ../contact.php");
        }
    }

    // delete ******************************************************************

    public function delete($id = null)
    {
        require_once "../../connect.php";
        $conn = Config::getConnect();

        $query = "DELETE FROM contact WHERE id = " . $id;

        $result = $conn->query($query);
        if ($result->error) {
            return $result->error;
        } else {
            header("Location: ../contact.php");
        }
    }
}