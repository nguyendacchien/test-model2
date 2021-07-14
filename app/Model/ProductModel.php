<?php


namespace App\Model;

use PDO;
class ProductModel
{
    private $dbConnect;
    public function __construct()
    {
        $this->dbConnect =new DBConnect();
    }

    public function getAll()
    {
        try {
            $sql = "SELECT * FROM `products`";
            $stmt = $this->dbConnect->connect()->query($sql);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $this->convertToObject($data);
        } catch (\PDOException $exception) {
            die($exception->getMessage());
        }
    }

    public function convertToObject($data)
    {
        $products = [];
        foreach ($data as $item) {
            $product = new Product($item->name, $item->category, $item->price, $item->quantity ,$item->date_dreate, $item->detail);
            $product->setId($item->id);
            array_push($products, $product);
        }
        return $products;
    }


    public function getById($id)
    {
        $sql = 'SELECT * FROM `products` where id=?';
        $stmt = $this->dbConnect->connect()->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $products = [];
        foreach ($result as $item) {
            $product = new Product($item['name'],$item['category'],$item['price'],$item['quantity'],$item['date_create'],$item['detail']);
            $product->setId($id);
            $products[] = $product;
        }
        return $products;
        
    }

    public function create($product)
    {
        $sql = "INSERT INTO products (name, category, price, quantity,date_create, detail) VALUES (?, ?, ?, ?,?,?)";
        $stmt = $this->dbConnect->connect()->prepare($sql);
        $stmt->bindParam(1, $product->getName());
        $stmt->bindParam(2, $product->getCategory());
        $stmt->bindParam(3, $product->getPrice());
        $stmt->bindParam(4, $product->getQuantity());
        $stmt->bindParam(5, $product->getDate());
        $stmt->bindParam(6, $product->getDetail());
        $stmt->execute();
    }


    public function update($id,$product)
    {
        $sql = "UPDATE `products` SET name = ?, category = ?, price = ?, quantity = ?, date_create=?,detail=? WHERE id = ?";
        $stmt = $this->dbConnect->connect()->prepare($sql);
        $stmt->bindParam(1, $product->name);
        $stmt->bindParam(2, $product->category);
        $stmt->bindParam(3, $product->price);
        $stmt->bindParam(4, $product->quantity);
        $stmt->bindParam(5, $product->date);
        $stmt->bindParam(6, $product->detail);
        $stmt->bindParam(7, $id);
        return $stmt->execute();
    }

    public function erase($id)
    {
        $sql = "DELETE FROM `products` WHERE id =" . $id;
        $stmt = $this->dbConnect->connect()->query($sql);
        return $stmt->execute();
        
    }
    public function search($search)
    {
        $sql = "SELECT * FROM `products` WHERE `name` LIKE '$search'";
        $stmt = $this->dbConnect->connect()->query($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $this->convertToObject($data);
    }
}