<?php
session_start();

if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    unset($_SESSION['USER_ID']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template"/>
    <meta name="description" content="SEOhub - SEO, Marketing. Social Media, Multipurpose HTML5 Template"/>
    <meta name="author" content="potenzaglobalsolutions.com"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>SEOhub - SEO, Marketing. Social Media, Multipurpose HTML5 Template</title>
    <link rel="shortcut icon"
          href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/images/favicon.ico"/>
    <link rel="stylesheet" type="text/css"
          href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/css/mega-menu/mega_menu.css"/>
    <link rel="stylesheet" type="text/css"
          href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/css/themify-icons.css"/>
    <link rel="stylesheet" type="text/css"
          href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/css/owl-carousel/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css"
          href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/css/magnific-popup/magnific-popup.css"/>
    <link rel="stylesheet" type="text/css"
          href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/css/style.css"/>
    <link rel="stylesheet" type="text/css"
          href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/css/responsive.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


</head>

<body>
<header id="header" class="default">
    <div class="menu">
        <nav id="menu" class="mega-menu">
            <section class="menu-list-items">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="menu-logo">
                                <li>
                                    <a><img id="logo_img"
                                            src="../Images/LogoWeapon.png"
                                            alt="logo" width="170" height="45"> </a>
                                </li>
                            </ul>
                            <ul class="menu-links">
                                <li><a href="HomeStore.php">Shop</a></li>
                                <li><a href="../Store/WeaponTypeStore.php?TYPE=Rifle">Rifles</a></li>
                                <li><a href="../Store/WeaponTypeStore.php?TYPE=SMG">SMG</a></li>
                                <li><a href="../Store/WeaponTypeStore.php?TYPE=Pistols">Pistols</a></li>
                                <li><a href="../Store/WeaponTypeStore.php?TYPE=Heavy">Heavy</a></li>
                                <?php
                                if (isset($_SESSION['USER_ID'])) {
                                    echo "<li><a href=\"../ShoppingCart/ShoppingCart.php\"><i class='material-icons'>shopping_cart</i></a></li>";
                                    echo "<li><a href=\"HomeStore.php?action=logout\"><i class='material-icons'>power_settings_new</i></a></li>";
                                } else {
                                    echo " <li><a href=\"../Login/Login.php\">Login</a></li>
                                           <li><a href=\"../Login/Register.php\">Register</a></li>";
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </nav>
    </div>
</header>





<footer class="footer footer-topbar page-section-pt">
    <div class="container">
        <div class="col-lg-3 col-md-2">
            <img class="img-fluid"
                 src="../Images/LogoWeapon.png"
                 alt="">
        </div>

        <div class="copyright mt-6">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-inline text-left">
                            <li><a href="#">Terms & Conditions </a> &nbsp;&nbsp;&nbsp;|</li>
                            <li><a href="#">API Use Policy </a> &nbsp;&nbsp;&nbsp;|</li>
                            <li><a href="#">Privacy Policy </a> &nbsp;&nbsp;&nbsp;|</li>
                            <li><a href="#">Cookies </a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="text-right">
                            <p>Copyright © 2020 Eagle Armory. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</footer>

<script type="text/javascript"
        src="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/js/jquery.min.js"></script>
<script type="text/javascript"
        src="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/js/popper.min.js"></script>

<script type="text/javascript"
        src="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/js/bootstrap.min.js"></script>
<script type="text/javascript"
        src="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/js/mega-menu/mega_menu.js"></script>
<script type="text/javascript"
        src="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/js/custom.js"></script>


</body>

</html>
