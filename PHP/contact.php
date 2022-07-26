<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          crossorigin="anonymous">

</head>
<body>

<?php include_once('header.php'); ?>

<div class="container p-2">


    <h1>Contactez nous</h1>
    <form>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Your message</label>
            <textarea class="form-control" id="message" name="textarea"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
    <br />
</div>

<?php include_once('footer.php'); ?>
</body>
</html>
