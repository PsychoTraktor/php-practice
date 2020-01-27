<?php

    class ProductsView extends Products {

        public function showProduct($product) {
            $results = $this->getProduct($product);

            echo "<b>Termék: </b> ".  $results[0]['product']." "."<b>Ar: </b>".$results[0]['ar'] ."<br>";
        }
    }
?>