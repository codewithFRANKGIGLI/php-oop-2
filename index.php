<?php
require_once './Models/product.php';
require_once './Models/category.php';
require_once './Models/productType.php';
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

            $products[] = new Product("https://picsum.photos/200", "Cibo Umido", 9.99, new Category("Gatto", ""), new ProductType("Cibo", "Bla Bla Bla Bla Bla "));
            $products[] = new Product("https://picsum.photos/200", "CatGame", 19.99,  new Category("Gatto", ""), new ProductType("Gioco", "Bla Bla Bla Bla "));
            $products[] = new Product("https://picsum.photos/200", "CucciaDog", 29.99, new Category("Cane", ""), new ProductType("Cuccia", "Bla Bla "));

            foreach ($products as $product) {
            ?>
                <div class="col-4">
                    <div class="card p-2" style="width: 18rem;">
                        <img src="<?php echo $product->image; ?>" class="card-img-top" alt="#">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->title; ?></h5>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam in voluptas at cupiditate impedit, doloremque commodi molestias, eos eveniet maiores quas totam. Eius reprehenderit voluptas maiores commodi voluptatum rerum consequuntur!.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    </div>

    <!-------Script links:------->
    <!-- Bootstrap: -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>