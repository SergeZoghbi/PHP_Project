<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" style="min-height: 100% !important;
    height: 100%;">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template"/>
    <meta name="description" content="SEOhub - SEO, Marketing. Social Media, Multipurpose HTML5 Template"/>
    <meta name="author" content="potenzaglobalsolutions.com"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>SEOhub - SEO, Marketing. Social Media, Multipurpose HTML5 Template</title>
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

    <!-- magnific-popup -->
    <link rel="stylesheet" type="text/css"
          href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/css/magnific-popup/magnific-popup.css"/>

    <!-- main style -->
    <link rel="stylesheet" type="text/css"
          href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/css/style.css"/>

    <!-- Responsive style -->
    <link rel="stylesheet" type="text/css"
          href="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/css/responsive.css"/>


</head>

<body>
<header id="header" class="default">
    <div class="menu">
        <nav id="menu" class="mega-menu">
            <section class="menu-list-items">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- menu logo -->
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
                                <li><a href="./Login.php">Login</a></li>
                                <li><a href="./Register.php">Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </nav>
    </div>
</header>

<!--=================================
header -->

<!--=================================
register-form  -->
<section class="login-form page-section-ptb" style="padding-bottom: 250px">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h4>Login To Your Account</h4>
                <form class="gray-form mt-2 clearfix" action="Login.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">User name* </label>
                        <input id="name" class="form-control" type="text" placeholder="User name" name="USERNAME">
                    </div>
                    <div class="form-group">
                        <label for="Password">Password* </label>
                        <input id="Password" class="form-control" type="password" placeholder="Password"
                               name="PASSWORD">
                    </div>
                    <button class="button" type="submit"> Log in</button>
                </form>
            </div>
        </div>

        <?php

        include "../../BusinessLayer/LoginManager.php";

        if (isset($_POST['USERNAME']) && isset($_POST['PASSWORD'])) {

            $result = login($_POST['USERNAME'], $_POST['PASSWORD']);
            if($result != -1){
                $_SESSION['USER_ID'] = $result;
            }
            else {
                echo " 
                      <br>
                      <br>
                       <div class=\"alert alert-danger p-3 in\">
                           <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                           <strong>Authentication Failed!</strong> Wrong Username or password !
                       </div>";
            }
        }
        ?>
    </div>
</section>

<!--=================================
register-form  -->

<!--=================================
footer -->

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

<!--=================================
footer -->

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


<!-- custom -->
<script type="text/javascript"
        src="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/js/custom.js"></script>


</body>

</html>

