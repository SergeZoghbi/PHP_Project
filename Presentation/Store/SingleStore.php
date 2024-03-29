<?php
session_start();
include '../../BusinessLayer/ShoppingCartManager.php';
include "../../BusinessLayer/WeaponsManager.php";

if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    unset($_SESSION['USER_ID']);
}

if (isset($_POST['addToCart']) && isset($_POST['qty']) && isset($_POST['idItem']) && isset($_SESSION['USER_ID'])) {
    insertItemIntoCart($_SESSION['USER_ID'], $_POST['idItem'], $_POST['qty']);
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
    <title>SEOhub - SEO, Marketing, Social Media, Multipurpose HTML5 Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon"
          href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/images/favicon.ico"/>

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css"
          href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/css/bootstrap.min.css"/>

    <!-- mega menu -->
    <link rel="stylesheet" type="text/css"
          href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/css/mega-menu/mega_menu.css"/>

    <!-- font awesome -->
    <link rel="stylesheet" type="text/css"
          href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/css/font-awesome.min.css"/>

    <!-- Themify icons -->
    <link rel="stylesheet" type="text/css"
          href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/css/themify-icons.css"/>

    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css"
          href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/css/owl-carousel/owl.carousel.css"/>

    <!-- revolution -->
    <link rel="stylesheet" type="text/css"
          href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/revolution/css/settings.css"/>

    <!-- slick css -->
    <link rel="stylesheet" type="text/css"
          href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/css/slick/slick.css"/>
    <link rel="stylesheet" type="text/css"
          href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/css/slick/slick-theme.css"/>

    <!-- main style -->
    <link rel="stylesheet" type="text/css"
          href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/css/style.css"/>

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css"
          href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/css/responsive.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


</head>

<body>

<!--=================================
   header -->

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
                                            src="../Images/LogoWeapon.png"  width="170" height="45"
                                            alt="logo"> </a>
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
                                    echo "<li><a href=\"SingleStore.php?id=$_GET[id]&action=logout\"><i class='material-icons'>power_settings_new</i></a></li>";
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

<section class="shop-single page-section-ptb" style="padding-bottom: 300px;">
    <div class="container">
        <?php

        $weapon = returnWeaponsFromLogicByID($_GET["id"]);

        echo "<div class=\"row\">
    <div class=\"col-md-9\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"slider-slick\">
                    <div class=\"slider slider-for detail-big-car-gallery\">
                        <img class=\"img-fluid\" src=\"$weapon[PIC_URL]\">
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"product-detail clearfix\">
                    <div class=\"product-detail-title mb-2\">
                        <h4 class=\"mb-1\"> $weapon[NAME]</h4>
                    </div>
                    <div class=\"clearfix mb-3\">
                        <div class=\"product-detail-price\">
                            <ins>$weapon[PRICE]</ins>
                        </div>
                    </div>
                    <div class=\"product-detail-quantity clearfix mb-3\">
                        <form action='SingleStore.php?id=$_GET[id]' method='post' enctype='multipart/form-data'>
                            <div class=\"input-group\">
                     <span class=\"input-group-btn\">
                          <button type=\"button\" class=\"btn btn-default btn-number\" data-type=\"minus\"
                                  data-field=\"quant[1]\" id='minus_button'>
                              <span class=\"ti-minus\"></span>
                         </button>
                      </span>
                                <input name=\"qty\" class=\"form-control input-number\" value=\"1\" id='qtyVal'>
                                <span class=\"input-group-btn\">
                         <button type=\"button\" class=\"btn btn-default btn-number\" data-type=\"plus\" data-field=\"quant[1]\"
                                 id='plus_button' style=\"display: inline;\">
                             <span class=\"ti-plus\"></span>
                </button>
                      </span>
                            </div>
                            <div class=\"product-detail add-to-cart\">
                                <input value='$_GET[id]' hidden name='idItem'>
                                <button class=\"button\" name='addToCart' value='addTCart' type='submit'
                                        style=\"display: inline;\">Add to cart
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class=\"product-detail-des mb-2\">
                        <ul class=\"list-style-none disc\">
                            <li>Country Origin : $weapon[ORIGIN]</li>
                            <li>Calibre : $weapon[CALIBRE]</li>
                            <li>Magazine Capacity : $weapon[MAGAZINE_CAPACITY]</li>
                            <li>Reload Time : $weapon[RELOAD_TIME]</li>
                            <li>Accurate Range : $weapon[ACCURATE_RANGE]</li>
                            <li>Rate of Fire : $weapon[RATE_OF_FIRE]</li>
                        </ul>
                    </div>
                    <div class=\"product-detail-meta\">
                        <span>SKU: " . rand(5000, 9000) . " </span>
                        <span>Type: <a>$weapon[TYPE]</a>  </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";


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
<!--=================================
shop -->


<!-- jquery  -->
<script type="text/javascript"
        src="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/js/jquery.min.js"></script>
<script type="text/javascript"
        src="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/js/popper.min.js"></script>

<!-- bootstrap -->
<script type="text/javascript"
        src="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/js/bootstrap.min.js"></script>

<!-- mega-menu -->
<script type="text/javascript"
        src="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/js/mega-menu/mega_menu.js"></script>

<!-- owl-carousel -->
<script type="text/javascript"
        src="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/js/owl-carousel/owl.carousel.min.js"></script>

<!-- slick -->
<script type="text/javascript"
        src="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/js/slick/slick.min.js"></script>

<!-- magnific-popup -->
<script type="text/javascript"
        src="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/js/magnific-popup/jquery.magnific-popup.min.js"></script>


<!-- custom -->
<script type="text/javascript"
        src="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/js/custom.js"></script>

</body>

</html>

<script>

    $(document).ready(function () {

        let qtyInput = $("#qtyVal");

        $("#minus_button").click(function () {

            if (parseInt(qtyInput.val()) > 1) {
                let newQty = parseInt(qtyInput.val()) - 1;
                qtyInput.val(newQty);
            }
        });
        $("#plus_button").click(function () {
            let newQty = parseInt(qtyInput.val()) + 1;
            qtyInput.val(newQty);
        });

    });

</script>