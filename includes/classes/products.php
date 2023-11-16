<?php 
    class Products extends Dbh {
        public function register($name, $picture, $category, $price, $link) {
            $stmt = $this->connect()->prepare("INSERT INTO products (name, picture, category, price, link) VALUES(?, ?, ?, ?, ?);");
            if(!$stmt->execute(array($name, $picture, $category, $price, $link))) {
                print_r($stmt->errorInfo());
                $stmt = null;
            }
        }

        public function displayProducts($table) {
            $stmt = $this->connect()->prepare("SELECT * FROM $table WHERE ?");
            if(!$stmt->execute(array(1))) {
                print_r($stmt->errorInfo());
                $stmt = null;
            }
            $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
            for($i = 0; $i < count($products); $i++) {
                if($table == "products") {
                    include "includes/card.php";
                } else if ($table == "bought") {
                    include "../includes/bought-card.php";
                }
                
            }    
        }

        public function displayFilters() {
            $stmt = $this->connect()->prepare("SELECT DISTINCT category FROM products WHERE ?");
            if(!$stmt->execute(array(1))) {
                print_r($stmt->errorInfo());
                $stmt = null;
            }
            $filters = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach($filters as $filter) {
                echo "<button class='selected' data-filter='".$filter["category"]."'>".$filter["category"]."</button>";
            }
        }

        public function getProduct($id) {
            $stmt = $this->connect()->prepare("SELECT * FROM products WHERE id = ?");
            if(!$stmt->execute(array($id))) {
                print_r($stmt->errorInfo());
                $stmt = null;
            }
            $product = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $product;
        }

        public function updateProduct($id, $name, $picture, $category, $price, $link) {
            $stmt = $this->connect()->prepare("UPDATE products SET name = ?, picture = ?, category = ?, price = ?, link = ? WHERE id = ?;");
            if(!$stmt->execute(array($name, $picture, $category, $price, $link, $id))) {
                print_r($stmt->errorInfo());
                $stmt = null;
            }
        }

        public function markAsBought($id) {
            $stmt = $this->connect()->prepare("SELECT * FROM products WHERE id = ?;");
            if(!$stmt->execute(array($id))) {
                print_r($stmt->errorInfo());
                $stmt = null;
            }
            $productInfos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt = $this->connect()->prepare("INSERT INTO bought (name, picture, category, price, link) VALUES(?, ?, ?, ?, ?);");
            if(!$stmt->execute(array($productInfos[0]["name"], $productInfos[0]["picture"], $productInfos[0]["category"], $productInfos[0]["price"], $productInfos[0]["link"]))) {
                print_r($stmt->errorInfo());
                $stmt = null;
            }
            $stmt = $this->connect()->prepare("DELETE FROM products WHERE id = ?;");
            if(!$stmt->execute(array($id))) {
                print_r($stmt->errorInfo());
                $stmt = null;
            }
        }

        public function unmarkBoughtItem($id) {
            $stmt = $this->connect()->prepare("SELECT * FROM bought WHERE id = ?;");
            if(!$stmt->execute(array($id))) {
                print_r($stmt->errorInfo());
                $stmt = null;
            }
            $productInfos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt = $this->connect()->prepare("INSERT INTO products (name, picture, category, price, link) VALUES(?, ?, ?, ?, ?);");
            if(!$stmt->execute(array($productInfos[0]["name"], $productInfos[0]["picture"], $productInfos[0]["category"], $productInfos[0]["price"], $productInfos[0]["link"]))) {
                print_r($stmt->errorInfo());
                $stmt = null;
            }
            $stmt = $this->connect()->prepare("DELETE FROM bought WHERE id = ?;");
            if(!$stmt->execute(array($id))) {
                print_r($stmt->errorInfo());
                $stmt = null;
            }
        }

        public function deleteProduct($id) {
            $stmt = $this->connect()->prepare("DELETE FROM products WHERE id = ?;");
            if(!$stmt->execute(array($id))) {
                print_r($stmt->errorInfo());
                $stmt = null;
            }
        }
    }

?>