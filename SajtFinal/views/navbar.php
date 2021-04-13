<!--Navbar fixed na md-->
<div class="navbar-fixed scrolling-navbar navbar">
        <nav>
            <div class="nav-wrapper">
                <a href="index.php?page=home" id="brandlogo" class="brand-logo">
                    <img src="assets/img/fortnite-balkan.png" height="40" alt="">
                </a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right hide-on-med-and-down">
                    <li>
                        <a href="index.php?page=home">Home</a>
                    </li>
                    <li>
                        <a href="#">Novosti</a>
                    </li>
                    <li>
                        <a href="index.php?page=blog">Blog</a>
                    </li>

                    <?php if(isset($_SESSION['user'])):?>
                        <li>
                            <a class="waves-effect waves-light btn modal-trigger" href="index.php?page=home">Logout</a>
                        </li>
                    <?php else: ?>
                        <li>
                            <a class="waves-effect waves-light btn modal-trigger" href="index.php?page=login">Login</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-light btn modal-trigger" href="index.php?page=signup">Sign up</a>
                        </li>
                    <?php endif; ?>


                </ul>
            </div>
        </nav>
    </div>

    <!--sidenav huehue-->
    <ul class="sidenav" id="mobile-demo">
        <li>
            <a href="index.php?page=home">Home</a>
        </li>
        <li>
            <a href="#">Novosti</a>
        </li>
        <li>
            <a href="index.php?page=blog">Postovi</a>
        </li>
        <li>
            <a href="#">O nama</a>
        </li>
    </ul>