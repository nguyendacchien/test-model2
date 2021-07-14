<?php


namespace App\Controller;


use App\Model\Product;
use App\Model\ProductModel;

class ProductController
{
    protected $productModel;
    public function __construct()
    {
        $this->productModel =new ProductModel();
    }

    public function showAll()
    {
        $products = $this->productModel->getAll();
        include_once "app/View/list.php";
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'app/View/create.php';
        } else {
            // Validate dữ liệu
            $errors = [];
            $fields = ['name', 'category', 'price', 'date' , 'quantity','detail'];

            foreach ($fields as $field) {
                if (empty($_POST[$field])) {
                    $errors[$field] = 'Không được để trống';
                }
            }
            if (empty($errors)) {
                $name = $_REQUEST['name'];
                $category = $_REQUEST['category'];
                $price = $_REQUEST['price'];
                $quantity = $_REQUEST['quantity'];
                $date = $_REQUEST['date'];
                $detail = $_REQUEST['detail'];
                $products = new Product($name,$category,$price,$quantity,$date,$detail);
                $this->productModel->create($products);
                header('Location: index.php');
            } else {
                include 'app/View/create.php';
            }
        }
        
    }

    public function edit()
    {
        $id = $_REQUEST['id'];
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $products = $this->productModel->getById($id);
            include 'app/View/update.php';
        } else {

            // Validate dữ liệu
            $errors = [];
            $fields = ['name', 'category', 'price', 'date', 'detail','quantity'];

            foreach ($fields as $field) {
                if (empty($_POST[$field])) {
                    $errors[$field] = 'Không được để trống';
                }
            }
            if (empty($errors)) {
                $product = new Product($_POST['name'], $_POST['category'], $_POST['price'], $_POST['quantity'],$_POST['date'], $_POST['detail']);
                $product->setId($id);
                $this->productModel->update($id,$product);
                header('Location: index.php');
            } else {
                $products = $this->productModel->getById($id);
                include 'app/View/update.php';
            }
        }

    }

    public function delete()
    {
        $id = $_REQUEST['id'];
        $this->productModel->erase($id);
        header('location: index.php');
    }
    public function search()
    {
        $search = $_REQUEST['tim-kiem'].'%';
        $products = $this->productModel->search($search);
        include_once "app/View/list.php";
    }
}