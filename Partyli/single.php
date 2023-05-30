<?php include("path.php"); ?>

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
<div class="container">
  <div class="row">
    <h2 class="slider-title">Event</h2>
  </div>
</div>
<div class="container">
  <div class="content row">
    <div class="main-content col-md-9 col-12">
      <h2>Event</h2>
      <div class="single_event row">
        <div class="img col-12">
          <img src="asset/images/54.jpg" alt="" class="img-thumbnail">
        </div>
        <div class="info">
          <i class="far fa-user"> Author</i>
          <i class="far fa-calendar"> Mar 11,2023</i>
        </div>
        <div class="single_event_text col-12 ">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium arch</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium arch</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium arch</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium arch</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium arch</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium arch</p>
        </div>
      </div>
    </div>
    <div class="sidebar col-md-3 col-12">
      <div class="section search">
        <h3>Search</h3>
        <form action="index.php" method="post">
          <input type="text" name="search-term" class="text-input" placeholder="Search...">
        </form>
      </div>

      <div class="section topics">
        <h3>Сategories</h3>
        <ul>

          <li><a href="#">Poems</a></li>
          <li><a href="#">Concert</a></li>
          <li><a href="#">Rave</a></li>
          <li><a href="#">Life lessons</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php include("main/include/footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>