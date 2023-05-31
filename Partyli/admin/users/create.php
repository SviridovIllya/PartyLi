<?php session_start();
include "../../path.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PartyLi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/0cc7339edf.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../asset/css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Raleway&family=Shantell+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

</head>
<body>

<?php include("../../main/include/header-admin.php"); ?>

<div class="container">
    <?php include "../../main/include/sidebar-admin.php";?>
        <div class="posts col-9">
            <div class="button row">
                <a href="<?php echo BASE_URL . "admin/users/create.php"?>" class="col-3 btn btn-success">Add </a>
                <a href="<?php echo BASE_URL . "admin/users/index.php"?>" class="col-3    btn btn-warning ">Manage </a>

            </div>
            <div class="row title-table">
                <h1>Add user</h1>
            </div>
            <div class="row add-post ">
                <form action="create.php" method="post">
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Name</label>
                        <input type="text" name="login"  class="form-control" id="formGroupExampleInput" placeholder="">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email"  name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password-first" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="col">
                        <label for="exampleInputPassword2" class="form-label">Password again</label>
                        <input type="password" name="password-second" class="form-control" id="exampleInputPassword2">
                    </div>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>User</option>
                        <option value="1">Admin</option>
                    </select>
                    <div class="col">
                        <button class="btn btn-primary" type="submit">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("../../main/include/footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>