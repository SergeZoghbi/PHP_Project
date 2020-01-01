<?php
session_start();
include '../../BusinessLayer/ShoppingCartManager.php';

if (isset($_GET['action']) && isset($_GET['id_item']) && $_GET['action'] == 'removeItem') {

    deleteItemFromCart($_SESSION['USER_ID'], $_GET['id_item'], 1);
}
if (isset($_GET['action']) && $_GET['action'] == 'checkout') {

    submitShoppingCart($_SESSION['USER_ID']);
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
                                            src="../Images/LogoWeapon.png"  width="170" height="45"
                                            alt="logo"> </a>
                                </li>
                            </ul>
                            <ul class="menu-links">
                                <li><a href="../Store/HomeStore.php">Shop</a></li>
                                <li><a href="../Store/WeaponTypeStore.php?TYPE=Rifle">Rifles</a></li>
                                <li><a href="../Store/WeaponTypeStore.php?TYPE=SMG">SMG</a></li>
                                <li><a href="../Store/WeaponTypeStore.php?TYPE=Pistols">Pistols</a></li>
                                <li><a href="../Store/WeaponTypeStore.php?TYPE=Heavy">Heavy</a></li>
                                <?php
                                if (isset($_SESSION['USER_ID'])) {
                                    echo "<li><a href=\"ShoppingCart.php\"><i class='material-icons'>shopping_cart</i></a></li>";
                                    echo "<li><a href=\"../Store/HomeStore.php?action=logout\"><i class='material-icons'>power_settings_new</i></a></li>";
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


<div class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
                <div class="table-responsive">
                    <?php
                    $WeaponsInCart = getItemsFromShoppingCart($_SESSION['USER_ID']);
                    if ($WeaponsInCart != -1) {
                        echo "<table class=\"table\">
                        <thead>
                        <tr>
                            <th scope=\"col\" class=\"border-0 bg-light\">
                                <div class=\"p-2 px-3 text-uppercase\">Product</div>
                            </th>
                            <th scope=\"col\" class=\"border-0 bg-light\">
                                <div class=\"py-2 text-uppercase\">Price</div>
                            </th>
                            <th scope=\"col\" class=\"border-0 bg-light\">
                                <div class=\"py-2 text-uppercase\">Quantity</div>
                            </th>
                            <th scope=\"col\" class=\"border-0 bg-light\">
                                <div class=\"py-2 text-uppercase\">Remove</div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>";
                        foreach ($WeaponsInCart as $weapon) {
                            echo " 
                         <tr>
                            <th scope=\"row\" class=\"border-0\">
                                <div class=\"p-2\">
                                    <img src=\"$weapon[PIC_URL]\"
                                         alt=\"\" width=\"70\" class=\"img-fluid rounded shadow-sm\">
                                    <div class=\"ml-3 d-inline-block align-middle\">
                                        <h5 class=\"mb-0\"><a href=\"#\" class=\"text-dark d-inline-block align-middle\">$weapon[NAME]</a></h5><span
                                                class=\"text-muted font-weight-normal font-italic d-block\">Category: $weapon[TYPE]</span>
                                    </div>
                                </div>
                            </th>
                            <td class=\"border-0 align-middle\"><strong>$weapon[PRICE]</strong></td>
                            <td class=\"border-0 align-middle\"><strong>$weapon[QUANTITY]</strong></td>
                            <td class=\"border-0 align-middle\"><a href=\"ShoppingCart.php?action=removeItem&id_item=$weapon[ID_ITEM]\" class=\"text-dark\"><i class=\"fa fa-trash\"></i></a>
                            </td> 
                        </tr>
                        <tr>
                        <th scope=\"row\"></th> 
                        <th scope=\"row\"></th> 
                        <th scope=\"row\"></th> 
                        <th scope=\"row\"></th> 
                     </tr>";
                        }
                        echo "</tbody>
                                 </table>
                         </div>
                    </div>
                   </div>  

        <div class=\"bg-white rounded shadow-sm\">
        <div class=\"col-xs-6\">
          <div class=\"bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold\">Order summary </div>
          <div class=\"p-4\">
            <p class=\"font-italic mb-4\">Shipping and additional costs are calculated based on values you have entered.</p>
            <ul class=\"list-unstyled mb-4\">
              <li class=\"d-flex justify-content-between py-3 border-bottom\"><strong class=\"text-muted\">Order Subtotal </strong><strong>$$weapon[TOTAL_PRICE]</strong></li>
              <li class=\"d-flex justify-content-between py-3 border-bottom\"><strong class=\"text-muted\">Tax</strong><strong>11%</strong></li>
              <li class=\"d-flex justify-content-between py-3 border-bottom\"><strong class=\"text-muted\">Total</strong>";
                        $finalPrice = $weapon['TOTAL_PRICE'] + $weapon['TOTAL_PRICE'] * (11 / 100);
                        echo "
                <h5 class=\"font-weight-bold\">$$finalPrice</h5>
              </li>
            </ul><a href=\"ShoppingCart.php?action=checkout\" class=\"btn btn-light rounded-pill py-2 btn-block\">Procceed to checkout</a>
          </div>
        </div>
        
";
                    } else {

                        echo "
                           <div style='padding-bottom: 300px;'>
                               <div class=\"alert alert-info\" role=\"alert\">
                                   <h4 class=\"alert-heading\">Empty Shopping Cart</h4>
                                  <p>You have nothing in your Shopping Cart</p>
                                  </div>
                            </div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
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

