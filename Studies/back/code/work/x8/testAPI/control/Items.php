<?php

class Items
{

    private $itemsTable = "items";
    public $id;
    public $name;
    public $description;
    public $price;
    public $category_id;
    public $created;
    public $modified;
    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }


    function create()
    {

        $stmt = $this->conn->prepare("
INSERT INTO " . $this->itemsTable . "(`name`, `description`, `price`, `category_id`, `created`)
VALUES(?,?,?,?,?)");

        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->price = htmlspecialchars(strip_tags($this->price));
        $this->category_id = htmlspecialchars(strip_tags($this->category_id));
        $this->created = htmlspecialchars(strip_tags($this->created));


        $stmt->bind_param("ssiis", $this->name, $this->description, $this->price, $this->category_id, $this->created);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}