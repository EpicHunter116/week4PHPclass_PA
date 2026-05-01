<?php


class ProductModel {
    private $conn;

    public function __construct() {
        $host = "localhost";
        $dbname = "sdc310_wk4pa";
        $username = "ecpi_user";
        $password = "password";

        $this->conn = new mysqli($host, $username, $password, $dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getAllProducts() {
        $result = $this->conn->query("SELECT * FROM products");
        $products = [];
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
        return $products;
    }

    public function __destruct() {
        $this->conn->close();
    }
}
?>
