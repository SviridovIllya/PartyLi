<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1><a href="<?php echo BASE_URL ?>">Partyli</a></h1>
            </div>
            <nav class="col-8">
                <ul>
                    <li><a href="<?php echo BASE_URL ?>">Main</a></li>
                    <li><a href="<?php echo BASE_URL . 'about.php'?>">About us</a></li>
                    <li><a href="#">List</a></li>
                    <li>
                        <?php if (isset($_SESSION['id'])):?>
                            <a href="#">
                                <i class="fa-solid fa-user"></i>
                                <?php echo $_SESSION['login']; ?>
                            </a>
                            <ul>
                                <?php if ($_SESSION['admin']):?>
                                <li><a href="login.php">Admin</a></li>
                                <?php endif;?>
                                <li><a href="#">Exit</a></li>
                            </ul>
                        <?php else: ?>
                            <a href="<?php echo BASE_URL . "login.php";?>">
                                <i class="fa-solid fa-user"></i>
                               Login
                            </a>
                        <ul>
                            <li><a href="<?php echo BASE_URL . "registration.php";?>">Registration</a></li>
                        </ul>
                        <?php endif;?>

                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>