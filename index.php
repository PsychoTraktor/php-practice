<?php
    declare(strict_types=1);
    include 'includes/class-autoload-inc.php';
?>

<!Doctype HTML>
<html>
    <head>
        <title>Database MVC</title>
    </head>
    <body>
       <?php
            $testObject = new ProductsView();
            $testObject -> showProduct('kiskacsa');

            $testObject2 = new  ProductControl();
            $testObject2 -> addProduct('first-product', '15000')
       ?>
    </body>
</html>