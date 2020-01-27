<?php

    class Products extends DBH {

        protected function getProduct($product) {
            $sql = 'SELECT * FROM products where product = ?';
            $stmt = $this->connect()->prepare($sql);
            $stmt -> execute([$product]);

            $results = $stmt->fetchAll();

            return $results;
        }    

        protected function setProduct($product, $price) {
            $sql = 'INSERT INTO products(product, ar) VALUES(?, ?)';
            $stmt = $this->connect()->prepare($sql);
            $stmt -> execute([$product, $price]);
        }    
    }
    
?>