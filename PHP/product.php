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
//echo 'Product: ' . htmlspecialchars($_GET["name"])
//    .'<br>Price: '.htmlspecialchars($_GET["price"]).'$'
//    .'<br>Category: '.htmlspecialchars($_GET["category"]);
//?>

<div class='container-fluid'>
    <div class="card mx-auto col-md-3 col-10 m-5 shadow ">
        <?php echo '<td><img class="mx-auto img-thumbnail"
             src="../images/'.htmlspecialchars($_GET["image"]).'"
             width="auto" height="auto"/></td>'?>
        <div class="card-body text-center mx-auto">
            <div class='cvp'>
                <?php echo '<td><h3 class="card-title font-weight-bold">'.htmlspecialchars($_GET["name"]) .'</h3></td>'?>
                <?php echo '<td><h5 class="card-title font-weight-bold">$'.htmlspecialchars($_GET["price"]) .'</h5></td>'?>

                <?php echo '<td><p class="card-title font-weight-bold">Category '.htmlspecialchars($_GET["category"]) .'</p></td>'?>
                <?php if (htmlspecialchars($_GET["enable"])){
                    echo '<td><a href="#" class="btn btn-outline-dark">Buy Now</a></td>';
                }
                else {
                   echo '<td> <a href="#" class="btn btn-danger">Not Available</a></td>';
                }
                ?>

            </div>
        </div>
    </div>

</div>

<?php include_once('footer.php'); ?>
</body>
</html>
