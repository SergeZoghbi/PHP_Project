<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="SEOhub - SEO, Marketing. Social Media, Multipurpose HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>SEOhub - SEO, Marketing. Social Media, Multipurpose HTML5 Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/images/favicon.ico" />

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/css/bootstrap.min.css" />

    <!-- mega menu -->
    <link rel="stylesheet" type="text/css" href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/css/mega-menu/mega_menu.css" />

    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/css/font-awesome.min.css" />

    <!-- Themify icons -->
    <link rel="stylesheet" type="text/css" href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/css/themify-icons.css" />

    <!-- magnific-popup -->
    <link rel="stylesheet" type="text/css" href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/css/magnific-popup/magnific-popup.css" />

    <!-- main style -->
    <link rel="stylesheet" type="text/css" href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/css/style.css" />

    <!-- Responsive style -->
    <link rel="stylesheet" type="text/css" href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/css/responsive.css" />




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
                                            src="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/images/logo-dark.png"
                                            alt="logo"> </a>
                                </li>
                            </ul>
                            <ul class="menu-links">
                                <li><a href="javascript:void(0)">Shop</a></li>
                                <li><a href="../Store/WeaponTypeStore.php?TYPE=Rifle">Rifles</a></li>
                                <li><a href="../Store/WeaponTypeStore.php?TYPE=SMG">SMG</a></li>
                                <li><a href="../Store/WeaponTypeStore.php?TYPE=Pistols">Pistols</a></li>
                                <li><a href="../Store/WeaponTypeStore.php?TYPE=Heavy">Heavy</a></li>
                                <li><a href="../Login/Login.php">Login</a></li>
                                <li><a href="../Login/Register.php">Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </nav>
    </div>
</header>


<section class="case-studies popup-gallery page-section-ptb">
    <div class="container">
        <div class="row">

            <?php
            include "../../BusinessLayer/WeaponsManager.php";

            echo returnWeaponsFromLogic($_GET['TYPE']);

            echo returnWeaponsFromLogicByID(1);


            ?>
            <div class="col-md-4">
                <div class="studies-entry mt-3">
                    <div class="entry-image clearfix">
                        <img class="img-fluid" src="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/images/case-studies/01.jpg" alt="">
                        <div class="entry-overlay">
                            <a class="popup-img" href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/images/case-studies/01.jpg"> <span class="ti-zoom-in"></span></a>
                        </div>
                    </div>
                    <div class="entry-detail">
                        <div class="entry-content mb-1">
                            <a href="#">Weapon Name</a>
                        </div>
                        <div class="entry-bottom mt-1 clearfix">
                            <ul class="entry-tag list-style-none">
                                <li>$2500</li>
                            </ul>
                            <div class="entry-like float-right">
                                <a onclick="window.location = './SingleStore.php?id=4';"> <span class="ti-more"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>


<footer class="footer footer-topbar page-section-pt">
    <div class="container">
        <div class="col-lg-3 col-md-2">
            <img class="img-fluid"
                 src="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/images/logo-footer.png"
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
                            <p>Copyright © 2020 SEO Solution. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</footer>


<!-- jquery  -->
<script type="text/javascript" src="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/js/jquery.min.js"></script>
<script type="text/javascript" src="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/js/popper.min.js"></script>

<!-- bootstrap -->
<script type="text/javascript" src="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/js/bootstrap.min.js"></script>

<!-- bootstrap -->
<script type="text/javascript" src="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/js/mega-menu/mega_menu.js"></script>

<!-- owl-carousel -->
<script type="text/javascript" src="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/js/owl-carousel/owl.carousel.min.js"></script>

<!-- magnific -->
<script type="text/javascript" src="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/js/magnific-popup/jquery.magnific-popup.min.js"></script>


<!-- custom -->
<script type="text/javascript" src="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/js/custom.js"></script>



</body>

</html>
