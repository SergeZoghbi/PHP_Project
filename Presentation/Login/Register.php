<?php
session_start();
include "../../BusinessLayer/RegisterManager.php";
if (isset($_POST['USERNAME']) && isset($_POST['PASSWORD']) && isset($_POST['RE_PASSWORD']) && isset($_POST['EMAIL']) && isset($_POST['PHONE'])) {

    $resultRegister = register($_POST['USERNAME'], $_POST['PASSWORD'], $_POST['EMAIL'], $_POST['PHONE']);
    if ($resultRegister != -1) {
        $_SESSION['USER_ID'] = $resultRegister;
        header('location:../Store/HomeStore.php');
    }
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

<section class="login-form page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="mb-3">Register An Account</h4>
                <form class="gray-form" action="Register.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="name">User Name* </label>
                            <input class="form-control" type="text" placeholder="Choose your user name" name="USERNAME">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Password">Password* </label>
                            <input class="form-control" type="password" placeholder="Password" name="PASSWORD" id="pass">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Password">Re-enter Password*</label>
                            <input class="form-control" type="password" placeholder="Password" name="RE_PASSWORD" id="repass">
                            <div  id="wrongRetypePass" class="invalid-feedback">
                                Please Re-type your password.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email *</label>
                            <input class="form-control" type="text" placeholder="Enter your email" name="EMAIL" id="emailInput">
                            <div  id="wrongEmail" class="invalid-feedback">
                                Please type valid Email.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Mobile phone *</label>
                            <input id="phone" class="form-control" placeholder="Enter your mobile no"
                                   name="PHONE">
                            <div  id="wrongPhone" class="invalid-feedback">
                                Please type valid Number.
                            </div>
                        </div>
                    </div>
                    <button class="button" type="submit" id="signup"> Sign Up</button>
                </form>
            </div>
        </div>
        <?php

      if(isset($resultRegister)) {
          $str_arr = explode (",", $resultRegister);
          echo "
                     <br>
                      <br>
                       <div class=\"alert alert-danger p-3 in\">
                           <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                           <strong>Authentication Failed!</strong> This $str_arr[1] already exist
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
</footer><!--=================================
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

<!-- select -->
<script type="text/javascript"
        src="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/js/select/jquery-select.js"></script>

<!-- custom -->
<script type="text/javascript"
        src="../../seohub%20seo%20marketing%20social%20media%20multipurpose%20html5/Template/js/custom.js"></script>


</body>

</html>
<script>
    $('#wrongEmail').hide();
    $('#wrongRetypePass').hide();
    $('#wrongPhone').hide();
    $('#signup').prop("disabled", true);

    let flagPhone = false;
    let flagEmail = false;
    let flagPass = false;



    $(document).ready(function () {
        function isEmail(email) {
            let regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }

        function validatePhone(txtPhone) {
            let filter = /^[0-9]*$/;
            return filter.test(txtPhone);
        }

        function buttonDisable() {
            console.log(flagPass,flagEmail,flagPhone);
         if(flagPass && flagEmail && flagPhone){
             $('#signup').attr("disabled", false);
         }else
         {
             $('#signup').attr("disabled", true);
         }
        }

        $("#emailInput").keyup(function () {
            if(!isEmail($("#emailInput").val())){
                $('#wrongEmail').show();
                flagEmail = false;
            }else {
                $('#wrongEmail').hide();
                flagEmail = true;
            }
            buttonDisable();
        });

        $('#repass').on('keyup', function () {
            if ($('#pass').val() == $('#repass').val()) {
                $('#wrongRetypePass').hide();
                flagPass = true;
            } else
            {$('#wrongRetypePass').show();
                flagPass = false;
            }
            buttonDisable();
        });

        $("#phone").keyup(function () {
            if (!validatePhone($("#phone").val())) {
                $('#wrongPhone').show();
                flagPhone = false;
            } else
            {$('#wrongPhone').hide();
                flagPhone = true;
            }
            buttonDisable();
        });


    });
</script>