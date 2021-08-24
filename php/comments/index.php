<?php

class Comments
{
    public $id = null;
    public $message;
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
    public function getMessage()
    {
        return $this->message;
    }
    public function getProductId()
    {
        return $this->product_id;
    }


    // insert ******************************************************************

    public function insert()
    {
        require_once '../connect.php';
        $conn = Config::getConnect();
        $query = 'INSERT INTO product_comments(message, product_id) 
		          VALUES("' . $this->getMessage() . '", "' . $this->getProductId() . '")';

        // echo $query;
        $conn->query($query);
        $id = $conn->insert_id;

        if ($id) {
            echo true;
        } else {
            echo false;
        }
    }

    // select ******************************************************************

    public function select($connect = "../connect.php", $id = null)
    {
        require_once $connect;
        $conn = Config::getConnect();

        $productId = "";
        if(isset($id)){
            $productId = " WHERE product_comments.product_id = " . $id;
        }

        $query = "SELECT * FROM product_comments" . $productId;
        
        $result = $conn->query($query);
        $arr = [];
        while ($obj = $result->fetch_object()) {
            array_push($arr, $obj);
        }
        return $arr;
    }

    // // update ******************************************************************

    // public function update()
    // {
    //     require_once "../connect.php";
    //     $conn = Config::getConnect();

    //     $query = "UPDATE product_comments SET email='" . $this->getEmail() . "' WHERE id = " . $this->getId();

    //     $result = $conn->query($query);
    //     if ($result->error) {
    //         return $result->error;
    //     } else {
    //         header("Location: ../admin/subscribe.php");
    //     }
    // }

    // // delete ******************************************************************

    // public function delete($id = null)
    // {
    //     require_once "../connect.php";
    //     $conn = Config::getConnect();

    //     $query = "DELETE FROM product_comments WHERE id = " . $id;

    //     $result = $conn->query($query);
    //     if ($result->error) {
    //         return $result->error;
    //     } else {
    //         header("Location: ../admin/subscribe.php");
    //     }
    // }
}
