<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          crossorigin="anonymous">
    <link href="../css/index.css" rel="stylesheet">

</head>
<body>


<?php include_once('header.php'); ?>
<?php
include_once 'variables.php';
include_once 'functions.php';
?>

<?php
//echo 'Product: ' . htmlspecialchars($_GET["name"])
//    .'<br>Price: '.htmlspecialchars($_GET["price"]).'$'
//    .'<br>Category: '.htmlspecialchars($_GET["category"]);
//?>

<section class="py-5 bg-light">
    <div class="container  container-fluid px-4 px-lg-5 mt-5">
       <div class="row gx-4 gx-lg-5 align-items-center">
           <?php foreach($weapons as $weapon) : ?>
            <?php $ID = htmlspecialchars($_GET["id"]) ?>
            <?php if (array_key_exists('id', $weapon) && $weapon['id']['id'] == $ID ): ?>
               <div class="col-md-6">
                <img class="card-img-top mb-5 mb-md-0 shadow"
                     src="../images/<?php echo $weapon["image"]?>"
                     width="auto" height="auto"/>
               </div>
               <div class="col-md-6">
                   <div class="small mb-1 text-muted">
                       2-years guarantee
                   </div>
                    <h1 class="display-5 fw-bolder"><?php echo $weapon['name']?></h1>

                   <div class="fs-5 mb-4">
                       <?php if (array_key_exists('promo', $weapon)): ?>
                           <!-- TODO : Call a function to do the calcul of the promo price-->
                           <span class="card-title font-weight-bold">$<?php echo $weapon['price'] - $weapon['price'] * $weapon['promo']/100; ?></span>
                       <?php else: ?>
                           <span class="card-title font-weight-bold">$<?php echo $weapon['price']; ?></span>
                       <?php endif; ?>
                   </div>
                   <p class="text-muted">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag mb-1 me-1" viewBox="0 0 16 16">
                          <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z"/>
                          <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z"/>
                        </svg>
                        <?php echo $weapon["description"]?>
                   </p>
                    <p class="text-muted">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam mb-1 me-1" viewBox="0 0 16 16">
                          <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
                        </svg>
                        <?php echo 'Category: ' . $weapon["category"]?>
                    </p>
                   <p class="text-muted">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tools mb-1 me-1" viewBox="0 0 16 16">
                            <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z"/>
                        </svg>
                       <?php echo 'Composition: ' . $weapon["composition"]?>
                   </p>

                   <?php if (array_key_exists('enable', $weapon)&& $weapon['enable']): ?>
                    <button class="btn btn-outline-success mt-1" type="button">
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart mb-1 me-1" viewBox="0 0 16 16">
                           <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                       </svg>
                       Add to cart
                    </button>
                   <?php else: ?>
                    <button class="btn btn-danger mt-1" type="button">
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart mb-1 me-1" viewBox="0 0 16 16">
                           <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                       </svg>
                       Not Available
                    </button>
                   <?php endif; ?>
               </div>
           <?php endif; ?>
        <?php endforeach ?>
       </div>
    </div>
</section>

<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <h2 class="fw-bolder mb-4">Related products</h2>
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col mb-5">
                <a href="product.php?<?php echo http_build_query($weapons[1]['id'])?>">
                    <div class="card shadow h-100">
                        <img class="card-img-top border"
                         src="../images/<?php echo $weapons[1]["image"]?>"
                         width="auto" height="auto" alt="<?php echo $weapons[1]['name']?>"/>
                        <div class="ribbon ribbon-top-left"><span><?php echo $weapons[1]['promo'] ?>% Off </span></div>
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder"><?php echo $weapons[1]['name']?></h5>
                                <span class="text-decoration-line-through" ><?php echo $weapons[1]['price']. '$' ; ?></span>
                                <span><?php echo '$' . ($weapons[1]['price'] - $weapons[1]['price'] * $weapons[1]['promo'] / 100); ?></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col mb-5">
                <a href="product.php?<?php echo http_build_query($weapons[4]['id'])?>">
                    <div class="card shadow h-100">
                        <div class="bg-image hover-zoom">
                            <img class="card-img-top border"
                             src="../images/<?php echo $weapons[4]["image"]?>"
                             width="auto" height="auto" alt="<?php echo $weapons[4]['name']?>"/>
                         </div>
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder"><?php echo $weapons[4]['name']?></h5>
                                <span><?php echo  '$'. $weapons[4]['price']; ?></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col mb-5">
                <a href="product.php?<?php echo http_build_query($weapons[5]['id'])?>">
                    <div class="card shadow h-100">
                        <div class="bg-image hover-zoom">
                            <img class="card-img-top border"
                                 src="../images/<?php echo $weapons[5]["image"]?>"
                                 width="auto" height="auto" alt="<?php echo $weapons[5]['name']?>"/>
                        </div>
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder"><?php echo $weapons[5]['name']?></h5>
                                <span><?php echo  '$'. $weapons[5]['price']; ?></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col mb-5">
                <a href="product.php?<?php echo http_build_query($weapons[6]['id'])?>">
                    <div class="card shadow h-100">
                        <div class="bg-image hover-zoom">
                            <img class="card-img-top border"
                                 src="../images/<?php echo $weapons[6]["image"]?>"
                                 width="auto" height="auto" alt="<?php echo $weapons[6]['name']?>"/>
                        </div>
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder"><?php echo $weapons[6]['name']?></h5>
                                <span><?php echo  '$'. $weapons[6]['price']; ?></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>


<?php include_once('footer.php'); ?>

</body>
</html>
