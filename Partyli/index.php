<?php include("path.php");
  include 'main/db/database.php';
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
<div class="container">
    <div class="row">
        <h2 class="slider-title">Top event</h2>
    </div>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="asset/images/33.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                <h5><a href="#">First slide label</a></h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="asset/images/54.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption-hack carousel-caption  d-none d-md-block">
                <h5><a href="#">Second slide label</a></h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="asset/images/garnoyi-nedili-kartynky-i-lystivky-slide.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>
<div class="container">
    <div class="content row">
        <div class="main-content col-md-9 col-12">
            <h2>Last Event</h2>
            <div class="event row">
                <div class="img col-12 col-md-4">
                    <img src="asset/images/54.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="event_text col-12 col-md-8">
                    <h3>
                        <a href="#">Cool party</a>
                    </h3>
                    <i class="far fa-user"> Author</i>
                    <i class="far fa-calendar"> Mar 11,2023</i>
                    <p class="preview-text"> Something</p>
                </div>
            </div>
            <div class="event row">
                <div class="img col-12 col-md-4">
                    <img src="asset/images/54.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="event_text col-12 col-md-8">
                    <h3>
                        <a href="#">Cool party</a>
                    </h3>
                    <i class="far fa-user"> Author</i>
                    <i class="far fa-calendar"> Mar 11,2023</i>
                    <p class="preview-text"> Something</p>
                </div>
            </div>
            <div class="event row">
                <div class="img col-12 col-md-4">
                    <img src="asset/images/54.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="event_text col-12 col-md-8">
                    <h3>
                        <a href="#">Cool party</a>
                    </h3>
                    <i class="far fa-user"> Author</i>
                    <i class="far fa-calendar"> Mar 11,2023</i>
                    <p class="preview-text"> Something</p>
                </div>
            </div>
            <div class="event row">
                <div class="img col-12 col-md-4">
                    <img src="asset/images/54.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="event_text col-12 col-md-8">
                    <h3>
                        <a href="#">Cool party</a>
                    </h3>
                    <i class="far fa-user"> Author</i>
                    <i class="far fa-calendar"> Mar 11,2023</i>
                    <p class="preview-text"> Something</p>
                </div>
            </div>
            <div class="event row">
                <div class="img col-12 col-md-4">
                    <img src="asset/images/54.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="event_text col-12 col-md-8">
                    <h3>
                        <a href="#">Cool party</a>
                    </h3>
                    <i class="far fa-user"> Author</i>
                    <i class="far fa-calendar"> Mar 11,2023</i>
                    <p class="preview-text"> Something</p>
                </div>
            </div>
        </div>
        <div class="sidebar col-md-3 col-12">
            <div class="section search">
                <h3>Search</h3>
                <form action="index.html" method="post">
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