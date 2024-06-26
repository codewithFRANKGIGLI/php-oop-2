<?php
require_once './Models/product.php';
require_once './Models/category.php';
?>


<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>CatDogShop</title>
    <!-- Font Awesome: -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap 5 CDN: -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <!-- Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, 
    icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

    <div class="container py-5">
        <div class="row">
            <?php
            $products = [];

            $products[0] = new Category("Cibo Umido", 9.99, "https://picsum.photos/200", "Gatto");
            $products[1] = new Category("Cuccia MemoryFoam", 19.99, "https://picsum.photos/200", "Gatto", "Cuccia");
            $products[2] =  new Category("Osso di Cervo", 29.99, "https://picsum.photos/200", "Cane", "Gioco");
            $products[0]->setProductType("Cibo");
            $products[1]->setProductType("Cuccia");
            $products[2]->setProductType("Gioco");

            var_dump($products);

            foreach ($products as $product) {
            ?>
                <div class="col-4">
                    <div class="card p-2" style="width: 18rem;">
                        <img src="<?php echo $product->getImage(); ?>" class="card-img-top" alt="#">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->getName(); ?></h5>
                            <p class="card-text">Prodotto per: <?php echo $product->getanimal(); ?></p>
                            <p class="card-text">Tipologia: <?php echo $product->getProductType(); ?></p>
                            <p class="card-text">Prezzo: <?php echo $product->getPrice(); ?> €</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>


    <!-------Script links:------->
    <!-- Bootstrap: -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>