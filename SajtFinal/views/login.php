<div id="loginMod" class="col s12 container">
    <?php
        if(isset($_SESSION['user'])):
            var_dump($_SESSION['user']);

    ?>

    <h3>Username korisnika: <?= $_SESSION['user']->korisnicko_ime; ?></h3>
    <h3>Email korisnika: <?= $_SESSION['user']->email; ?></h3>

    <?php else: ?>
    <!--loginic-->
    <form class="col s12 loginForm" method="post" action="Code/login.php" >
        <div class="row">
            <div class="input-field col s12">
                <input id="email" type="email" class="validate" name="lgnMail">
                <label for="email">EMAIL</label>
            </div>
            <div class="input-field col s12">
                <input id="password" type="password" class="validate" name="lgnPass">
                <label for="password">PASSWORD</label>
            </div>

            <button class="btn waves-effect waves-green" type="submit" name="btnLogin">Submit
                <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
    <?php endif; ?>
    <?php if(isset($_SESSION['greske'])):
        var_dump($_SESSION['greske']);
        unset($_SESSION['greske']);
    ?>
    <?php endif; var_dump($_POST);  ?>
</div>