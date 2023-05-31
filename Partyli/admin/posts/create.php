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
            <a href="<?php echo BASE_URL . "admin/posts/create.php"?>" class="col-3 btn btn-success">Add</a>
            <a href="<?php echo BASE_URL . "admin/posts/index.php"?>" class="col-3    btn btn-warning ">Manage</a>

        </div>
            <div class="row title-table">
                <h1>Add event</h1>
            </div>
            <div class="row add-post ">
                <form action="create.php" method="post">
                        <div class="col mb-2">
                            <input type="text" class="form-control" placeholder="Title" aria-label="Name">
                        </div>
                    <div class="col">
                        <label for="editor" class="form-label">Event content</label>
                        <textarea id="editor" class="form-control" rows="6"></textarea>
                    </div>
                    <div class="input-group col mb-4 mt-4">
                        <input type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                    <select class="form-select mb-2" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <div class="col mb-2">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("../../main/include/footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>


<script src="../../asset/js/scripts.js"></script>
</body>
</html>