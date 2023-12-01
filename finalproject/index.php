
<?php include 'database.php';
$customerObj = new database();
if (isset($get['deletedId']) && !empty($_GET['deleted'])) {
    $deletedId = $_GET['deleteId'];
    $customerObj->deleteRecord($deletedId);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>home page</title>
    <!-- bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- stylesheet-->
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>
    <?php require('./include/header.php')
    ?>

    <main>
        <!--- register form-->
        <section class="form-row row d-flex justify-content-center ">
            <h1>Don't have an account, Fill out form below to register!</h1>
            <div class="col-sm-12 col-md-3 col-lg-0 bg-secondary text-white .align-items-md-center">
                <form method="post" action="registerSave.php">
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name:</label>
                        <input type="text" class="form-control" id="fname">
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name:</label>
                        <input type="text" class="form-control" id="lname">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone:</label>
                        <input type="tel" class="form-control" id="phone">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <!-- sign in form-->
                <section class="signIn">
                    <div class="col align-self-center">

                        <h2>Sign in below</h2>
                        <form method="post" action="./include/validate.php">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="password" placeholder="password" required>
                            </div>

                            <button type=" submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                </section>
            </div>
        </section>

    </main>

</body>
<?php require('./include/footer.php') ?>
<?php
//msg  alert when imputed, updated, deleted

///invalid warnings for CRUD///
if (isset($_GET['msg1']) == "insert") {
    echo " <div class='alert alert-success alert-dismissible'>
    <button type= 'button' class= 'close' data-dismiss='alert'>y</button>
    h3>Successfully inserted into database<h3>
    </div>";
}
//update
if (isset($_GET['msg2']) == "update") {
    echo " <div class='alert alert-success alert-dismissible'>
    <button type= 'button' class= 'close' data-dismiss='alert'>y</button>
    h3>Successfully updated database<h3>
    </div>";
}
if (isset($_GET['msg3']) == "delete") {
    echo " <div class='alert alert-success alert-dismissible'>
    <button type= 'button' class= 'close' data-dismiss='alert'>y</button>
    h3>Successfully deleted from database<h3>
    </div>";
}
?>

</html>


































</head>