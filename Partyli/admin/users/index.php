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
                <h1>Management</h1>
                <div class="id col-1">ID</div>
                <div class="title col-5">Login</div>
                <div class="author col-2">Role</div>
                <div class="red col-2">Edit</div>
                <div class="dell col-2">Delete</div>
            </div>
            <div class="row post ">
                <div class="id col-1">1</div>
                <div class="title col-5">Andrey</div>
                <div class="author col-2">Admin</div>
                <div class="red col-2"><a href="">Edit</a></div>
                <div class="dell col-2"><a href="">Delete</a></div>
            </div>
            <div class="row post ">
                <div class="id col-1">15</div>
                <div class="title col-5">Andrey115</div>
                <div class="author col-2">User</div>
                <div class="red col-2"><a href="">Edit</a></div>
                <div class="dell col-2"><a href="">Delete</a></div>
            </div>
        </div>
    </div>
</div>

<?php include("../../main/include/footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>