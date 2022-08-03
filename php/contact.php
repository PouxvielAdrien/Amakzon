<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Contact Page</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
              rel="stylesheet"
              crossorigin="anonymous">

    </head>

    <?php include_once('header.php');?>
    <body class="bg-light">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-6 mx-auto">
                    <div class="card h-100 justify-content-center m-3">
                            <div class="card border shadow p-3 m-3">
                                <h1>Contact Us</h1>
                                <form>
                                    <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message" class="form-label">Your message</label>
                                        <textarea class="form-control" id="message" name="textarea"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </form>
                                <br/>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <!-- Todo: Delete this -->
    <p class="mb-4"><br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></p>

    <?php include_once('footer.php'); ?>

</html>
