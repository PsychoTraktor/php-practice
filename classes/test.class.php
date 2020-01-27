 <?php
    class Test extends DBH {

        public function getProducts() {
            $sql = 'SELECT * FROM products';
            $stmt = $this->connect()->query($sql);

            while ($row = $stmt->fetch()){
                echo $row['id'].' '.$row['product'].' '.$row['ar'].'<br>';
            }
        }       

        public function getUserProduct($product) {
            $sql = 'SELECT * FROM products WHERE product = ?';
            $stmt = $this->connect()->prepare($sql);
            $stmt -> execute([$product]);
            $products = $stmt->fetchAll();
            
            foreach ($products as $prod) {
                echo $prod['product'].' '.$prod['ar'];
            }       
        }
        
        public function getUserPrice($ar) {
            $sql = 'SELECT * FROM products WHERE ar = ?';
            $stmt = $this->connect()->prepare($sql);
            $stmt -> execute([$ar]);
            $products = $stmt->fetchAll();
            
            foreach ($ar as $price) {
                echo $price['product'].' '.$price['ar'];
            }       
        }  

        public function addProduct($product, $price) {
            $sql = 'INSERT INTO products(product, ar) VALUES(?, ?)';
            $stmt = $this->connect()->prepare($sql);
            $stmt -> execute([$product, $price]);
        }  
    } 
?>    