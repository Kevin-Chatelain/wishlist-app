<?php 
    class Products extends Dbh {
        public function register($name, $picture, $category, $price, $link) {
            $stmt = $this->connect()->prepare("INSERT INTO products (name, picture, category, price, link) VALUES(?, ?, ?, ?, ?);");
            if(!$stmt->execute(array($name, $picture, $category, $price, $link))) {
                print_r($stmt->errorInfo());
                $stmt = null;
                exit();
            }
        }

        public function displayProducts() {
            $stmt = $this->connect()->prepare("SELECT * FROM products WHERE ?");
            if(!$stmt->execute(array(1))) {
                print_r($stmt->errorInfo());
                $stmt = null;
                exit();
            }
            else {
                $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
                for($i = 0; $i < count($products); $i++) {
                    include "includes/card.php";
                }
             }
        }
    }

?>