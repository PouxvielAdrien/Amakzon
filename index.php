<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Amakzon</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
              rel="stylesheet"
              crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <link href="css/index.css" rel="stylesheet">
    </head>
    <body class="bg-light">

    <?php include_once('php/header.php'); ?>
    <?php
    include_once 'php/variables.php';
    include_once 'php/functions.php';
    ?>

    <div class="row lg-3 justify-content-center">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner shadow-sm rounded">
                <div class="carousel-item ">
                    <?php echo '<td><a href="php/product.php?'.http_build_query($weapons[0]).'"> 
                    <img class="d-block w-100" src="images/'.$weapons[0]['image_carousel'].'" alt="'.$weapons[0]['name'].'"/></a></td>' ?>
                </div>
                <div class="carousel-item">
                    <?php
                    echo '<td><a href="php/product.php?'.http_build_query($weapons[1]).'"> 
                                <img class="d-block w-100" src="images/'.$weapons[1]['image_carousel'].'" alt="'.$weapons[1]['name'].'"/>
                            </a></td>' ?>
                </div>
                <div class="carousel-item">
                    <?php
                    echo '<td><a href="php/product.php?'.http_build_query($weapons[5]).'"> 
                                <img class="d-block w-100" src="images/'.$weapons[5]['image_carousel'].'" alt="'.$weapons[5]['name'].'"/>
                            </a></td>' ?>
                </div>
                <div class="carousel-item active">
                    <?php
                    echo '<td><a href="php/product.php?'.http_build_query($weapons[3]).'"> 
                                <img class="d-block w-100" src="images/'.$weapons[3]['image_carousel'].'" alt="'.$weapons[3]['name'].'"/>
                            </a></td>' ?>
                    <div class="carousel-caption text-center">
                        <h1>Best Weapons You Can Find</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <?php
                    echo '<td><a href="php/product.php?'.http_build_query($weapons[2]).'"> 
                                <img class="d-block w-100" src="images/'.$weapons[2]['image_carousel'].'" alt="'.$weapons[2]['name'].'"/>
                            </a></td>' ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-black" aria-hidden="false"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-black" aria-hidden="false"></span>
                </button>

            </div>
        </div>
    </div>

    <div class="album py-5 bg-light">
        <div class="container text-center">
            <div class="row">
                <h3>Products Available</h3>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                <?php foreach($weapons as $weapon) : ?>
                    <?php if (array_key_exists('enable', $weapon) && $weapon['enable']): ?>
                        <div class="col col-lg-3 col-md-4 p-2">
                            <div class="card shadow-sm rounded">
                                <?php if ($weapon['new']): ?>
                                    <div class="ribbon ribbon-top-left"><span>New</span></div>
                                <?php endif; ?>

                                <?php echo '<td><a href="php/product.php?'.http_build_query($weapon).'">
                                    <img class="img-fluid p-4" src="images/'.$weapon['image'].'" alt="'.$weapon['name'].'"/>
                                    </a></td>'?>

                                <div class="card-body text-center rounded">
                                    <h4 class="card-title"><?php echo $weapon['name']; ?></h4>
                                    <h5><?php echo $weapon['price']. '$' ; ?></h5>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach ?>
            </div>
        </div>
    </div>


    <?php include('php/footer.php'); ?>
    </body>
</html>