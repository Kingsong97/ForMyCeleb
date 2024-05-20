<header id="header" role="banner">
    <h1 id="header__title">COMMUNITY</h1>
    <?php if (isset($_SESSION['memberID'])) { ?>
    <button class="unbutton button-menu" aria-label="Logout">
        <span><a href="signup/signOut.php" id="logoutButton">Logout</a></span>
    </button>
<?php } else { ?>
    <button class="unbutton button-menu" aria-label="Open the menu">
        <span><a href="#" id="loginButton">Login</a></span>
    </button>
<?php } ?>
<div id="login_modal" class="login_modal">
                    <div class="modal_content">
                        <?php include '../signup/login.php';?>
                    </div>
                  </div>
</header>