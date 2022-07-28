<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          crossorigin="anonymous">

</head>
<body class="bg-light">


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

<div class='container-fluid'>
    <div class="card mx-auto col-md-3 col-10 m-5 shadow ">
        <?php foreach($weapons as $weapon) : ?>
            <?php $ID = htmlspecialchars($_GET["id"]) ?>
            <?php if (array_key_exists('id', $weapon) && $weapon['id']['id'] == $ID ): ?>
                <?php echo '<td><img class="mx-auto img-thumbnail"
                     src="../images/'.$weapon["image"].'"
                     width="auto" height="auto"/></td>'?>
                <div class="card-body text-center mx-auto">
                    <div class='cvp'>
                        <?php echo '<td><h3 class="card-title font-weight-bold">'.$weapon['name'] .'</h3></td>'?>
                        <?php if (array_key_exists('promo', $weapon)): ?>

<!--                        TODO : Call a function to do the calcul of the promo price-->
                            <h5 class="card-title font-weight-bold">$<?php echo $weapon['price'] - $weapon['price'] * $weapon['promo']/100; ?></h5>
                        <?php else: ?>
                        <h5 class="card-title font-weight-bold">$<?php echo $weapon['price']; ?></h5>
                        <?php endif; ?>
                        <?php echo '<td><p class="card-title font-weight-bold">Category '.$weapon["category"] .'</p></td>'?>
                        <?php if (array_key_exists('enable', $weapon)&& $weapon['enable']){
                            echo '<td><a href="#" class="btn btn-outline-dark">Buy Now</a></td>';
                        }
                        else {
                            echo '<td> <a href="#" class="btn btn-danger">Not Available</a></td>';
                        }
                        ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach ?>
    </div>
</div>
<!---->
<!--Product Display with Query Params-->
<!--<div class='container-fluid'>-->
<!--    <div class="card mx-auto col-md-3 col-10 m-5 shadow ">-->
<!--        --><?php //echo '<td><img class="mx-auto img-thumbnail"
//             src="../images/'.htmlspecialchars($_GET["image"]).'"
//             width="auto" height="auto"/></td>'?>
<!--        <div class="card-body text-center mx-auto">-->
<!--            <div class='cvp'>-->
<!--                --><?php //echo '<td><h3 class="card-title font-weight-bold">'.htmlspecialchars($_GET["name"]) .'</h3></td>'?>
<!--                --><?php //if ((isset($_GET["promo"]))): ?>
<!--                    <h5 class="card-title font-weight-bold">$--><?php //echo $_GET['price'] - $_GET['price'] * $_GET['promo']/100; ?><!--</h5>-->
<!--                --><?php //else: ?>
<!--                    <h5 class="card-title font-weight-bold">$--><?php //echo $_GET['price']; ?><!--</h5>-->
<!--                --><?php //endif; ?>
<!--                --><?php //echo '<td><p class="card-title font-weight-bold">Category '.htmlspecialchars($_GET["category"]) .'</p></td>'?>
<!--                --><?php //if (htmlspecialchars($_GET["enable"])){
//                    echo '<td><a href="#" class="btn btn-outline-dark">Buy Now</a></td>';
//                }
//                else {
//                   echo '<td> <a href="#" class="btn btn-danger">Not Available</a></td>';
//                }
//                ?>
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<?php include_once('footer.php'); ?>

</body>
</html>
