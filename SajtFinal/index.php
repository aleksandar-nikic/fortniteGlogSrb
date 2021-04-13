<?php
    include ("views/head.php");
    session_start();
    echo("<header>");

    #navbar-->
    include ("views/navbar.php");
    include "Code/login.php";
        
    echo("</header>");
    
    #page main

    echo("<main>");

    switch ($_GET['page']) {
        case "home": include "views/home.php";
        break;

        case "login": include "views/login.php";
        break;

        case "signup": include "views/signup.php";
        break;

        case "blog": include "views/blog.php";
    }

    echo("</main>");
    
include ("views/footer.php");
