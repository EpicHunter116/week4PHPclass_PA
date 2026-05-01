<?php


require_once '../model/ProductModel.php';

class ProductController {
    private $model;

    public function __construct() {
        $this->model = new ProductModel();
    }

    public function displayProducts() {
        $products = $this->model->getAllProducts();
        require_once '../view/display_products.php';
    }
}

$controller = new ProductController();
$controller->displayProducts();
?>
