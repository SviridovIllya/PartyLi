<?php
include("path.php");
include("main/Controllers/users.php");
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PartyLi</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <script src="https://kit.fontawesome.com/0cc7339edf.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="asset/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Raleway&family=Shantell+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

</head>
<body>
<?php include("main/include/header.php"); ?>
<div class="container reg_form">

<form class="row justify-content-center" method="post" action="registration.php">
    <div class="mb-3 col-12 col-md-4 err">
        <p><?=$erorMessage?></p>
    </div>
  <h2 class="col-12">Form registration</h2>

  <div class="mb-3 col-12 col-md-4">
    <label for="formGroupExampleInput" class="form-label">Name</label>
    <input type="text" name="login" value="<?=$login?>" class="form-control" id="formGroupExampleInput" placeholder="">
  </div>
  <div class="w-100"></div>
  <div class="mb-3 col-12 col-md-4">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" value="<?=$email?>" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="w-100"></div>
  <div class="mb-3 col-12 col-md-4">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password-first" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="w-100"></div>
  <div class="mb-3 col-12 col-md-4">
    <label for="exampleInputPassword2" class="form-label">Password again</label>
    <input type="password" name="password-second" class="form-control" id="exampleInputPassword2">
  </div>
  <div class="w-100"></div>
  <div class="mb-3 col-12 col-md-4">
    <button type="submit" class="btn btn-secondary" name="button-reg">Register</button>
    <a href="authorization.html">Login</a>
  </div>
</form>

</div>
<?php include("main/include/footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>
