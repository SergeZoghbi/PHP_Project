<?php
session_start();
include "../../BusinessLayer/HomeStoreManager.php";
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
    <style>
        .containerr {
            min-width: 300px;
            height: 200px;
        }

        /* resize images */
        .containerr img {
            width: 100%;
            height: auto;
        }
    </style>

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

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../Images/santaM16.jpg" class="d-block w-100"  WIDTH="900" HEIGHT="800">
        </div>
        <div class="carousel-item">
            <img src="../Images/maxresdefault.jpg" class="d-block w-100" WIDTH="900" HEIGHT="800">
        </div>
        <div class="carousel-item">
            <img src="../Images/happy-xmas-from-jag-1.jpg" class="d-block w-100" WIDTH="900" HEIGHT="800">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<section class="case-studies popup-gallery page-section-ptb">
    <div class="container">
        <div class="row">

<?php



$randomWeapon = getRandomWeapons();

foreach ($randomWeapon as $weapon) {
    echo "      
        <div class=\"col-md-4\">
                <div class=\"studies-entry mt-3\">
                    <div class=\"entry-image clearfix\" style='border:1px solid #e0dddd;'>
                      <div class='containerr' >
                        <img class=\"img-fluid containerr\" src=\"$weapon[PIC_URL]\" alt=\"$weapon[NAME]\" >
                      </div>  
                      <div class=\"entry-overlay\" >
                            <a class=\"popup-img\" href=\"$weapon[PIC_URL]\" > <span class=\"ti-zoom-in\"></span></a>
                       </div>
                    </div>
                    <div class=\"entry-detail\">
                        <div class=\"entry-content mb-1\">
                            <a>$weapon[NAME]</a>
                        </div>
                        <div class=\"entry-bottom mt-1 clearfix\">
                            <ul class=\"entry-tag list-style-none\">
                                <li>$weapon[PRICE]</li>
                            </ul>
                            <div class=\"entry-like float-right\">
                                <a href=\"./SingleStore.php?id=$weapon[ID_ITEM]\"> <i class=\"material-icons\">more_horiz</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>";
}

?>

        </div>
</section>


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
