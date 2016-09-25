<?php
include_once('clientobjects.php');

if (isset($_POST['homeFeedback'])) {
    $name = $_POST['name'];
    $email = $POST['email'];
    $comment = $_POST['comment'];
    $subject = 'Website Feedback';

    $msg = "<table width='100%' border='0'><tr><td>Name</td><td>" . $name . "</td><td>Email</td><td>" . $email . "</td><td>Comment</td><td>" . $comment . "</td></tr></table>";
    if (sendEmail(SITE_EMAIL, $subject, $comment, $email, $email)) {
        $email_sent = true;
    } else {
        $email_error = true;
    }
}
?>

<!--
  _      _    _    ____________	  _______     _______   ___ _____   ___     __  __________    ________
 | |    | |  | |  |_|___  ___|_| | |   | |   | |   | |  | |     \ \ \ \    / / |_|__  __|_| | |______|
 | |    | |  | |        | |      | |___| |   | |___| |  | | ____| |  \ \_ / /      | |      | |
 | |    | |  | |        | |      | |___| |   | |___| |  | | ____| |   \ __ /       | |      | |______
 | |    | |  | |        | |      | |   \ \   | |   | |  | |     | |     | |        | |      | |
 | |____| |  |_|_____   | |      | |    \ \  | |   | |  | |_____| |     | |        | |      | |______
 |_|____|_|  |_|_____|  |_|      |_|     \_\ |_|   |_|  |_|_____/ /     |_|        |_|      |_|______|

 
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
                <title><?php echo $pagePageTitle; ?></title>
                <base href="http://<?php echo BASELOCATION; ?>" />
                <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
                <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
                <link href='https://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet' type='text/css'>
                    <link rel="stylesheet" href="assets/css/style.css" />
                    <link rel="stylesheet" href="assets/css/responsive.css" />
                    <link rel="stylesheet" href="assets/css/flexslider.css" />
                    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" />
                    </head>
                    <body>
                        <div class="amr-section-1">
                            <div class="container">
                                <div class="row">
                                    <?php
                                    if ($email_sent) {
                                        ?>
                                        <div style="position: absolute;
                                             right: 0;
                                             z-index: 9;
                                             width: 260px;
                                             top: 56px;
                                             " class="alert alert-success" class="close" data-dismiss="alert" aria-label="Close">Email Sent Successfully.<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?php
                                    } elseif ($email_error) {
                                        ?>
                                        <div style="position: absolute;
                                             right: 0;
                                             z-index: 9;
                                             width: 260px;
                                             top: 56px;
                                             " class="alert alert-danger" class="close" data-dismiss="alert" aria-label="Close">Email Not sent.<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <?php } ?>
                                </div><!--row-->
                            </div>
                        </div><!--amr-section-1-->


                        <div class="amr-section-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="top-bar">
                                            <ul class="details"> 
                                                <li>
                                                    <i class="fa fa-globe"> </i> 
                                                    <?php
                                                    $id = $constant->getId(50);
                                                    $result = $groups->getById($id);
                                                    $row = $conn->fetchObject($result);
                                                    echo $row->shortcontents;
                                                    ?>
                                                </li>
                                                <li>
                                                    <i class="fa fa-phone"> </i> 
                                                    <?php
                                                    $id = $constant->getId(51);
                                                    $result = $groups->getById($id);
                                                    $row = $conn->fetchObject($result);
                                                    echo $row->shortcontents;
                                                    ?>
                                                </li> 
                                                <li>
                                                    <i class="fa fa-envelope"> </i> 
                                                    <?php
                                                    $id = $constant->getId(52);
                                                    $result = $groups->getById($id);
                                                    $row = $conn->fetchObject($result);
                                                    ?>
                                                    <a href="mail:<?php echo $row->shortcontents; ?>"><?php echo $row->shortcontents; ?></a>
                                                </li> 
                                            </ul>
                                        </div>
                                    </div><!--col-6-->
                                    <div class="col-md-6">
                                        <ul class="social">
                                            <?php
                                            $id = $constant->getId(69);
                                            $result = $groups->getById($id);
                                            $row = $conn->fetchObject($result);
                                            ?>
                                            <li>
                                                <a target="_blank" href="http://<?php echo $row->shortcontents; ?>" class="s8">Pintrest</a>
                                            </li>

                                            <?php
                                            $id = $constant->getId(66);
                                            $result = $groups->getById($id);
                                            $row = $conn->fetchObject($result);
                                            ?>
                                            <li>
                                                <a target="_blank" href="http://<?php echo $row->shortcontents; ?>" class="s7">Youtube</a>
                                            </li> 

                                            <?php
                                            $id = $constant->getId(67);
                                            $result = $groups->getById($id);
                                            $row = $conn->fetchObject($result);
                                            ?>
                                            <li>
                                                <a target="_blank" href="http://<?php echo $row->shortcontents; ?>" class="s6">Vimeo</a>
                                            </li> 

                                            <?php
                                            $id = $constant->getId(70);
                                            $result = $groups->getById($id);
                                            $row = $conn->fetchObject($result);
                                            ?>
                                            <li>
                                                <a target="_blank" href="http://<?php echo $row->shortcontents; ?>" class="s5">Twitter</a>
                                            </li> 

                                            <?php
                                            $id = $constant->getId(68);
                                            $result = $groups->getById($id);
                                            $row = $conn->fetchObject($result);
                                            ?>
                                            <li>
                                                <a target="_blank" href="http://<?php echo $row->shortcontents; ?>" class="s3">Flicker</a>
                                            </li> 

                                            <?php
                                            $id = $constant->getId(65);
                                            $result = $groups->getById($id);
                                            $row = $conn->fetchObject($result);
                                            ?>
                                            <li>
                                                <a target="_blank" href="http://<?php echo $row->shortcontents; ?>" class="s1">Facebook</a>
                                            </li> 

                                        </ul>
                                    </div><!--col-6-->


                                </div>
                            </div>
                        </div><!--amr-section-5-->

                        <div class="amr-section-2">

                            <nav class="navbar navbar-default">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="#">
                                            <?php
                                            $id = $constant->getId(56);
                                            $result = $groups->getById($id);
                                            $row = $conn->fetchObject($result);
                                            if (file_exists(CMS_GROUPS_DIR . $row->image) && !empty($row->image)):
                                                ?>
                                                <img src="<?php echo CMS_GROUPS_DIR . $row->image; ?>" alt="" />
                                            <?php endif; ?>
                                        </a>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul id="sdmtNav" class="nav navbar-nav">
                                            <?php
                                            $result = $groups->getVisibleByParentIdAndType(0, "Menu");
                                            $i = 0;
                                            if (!empty($pageUrlName)):
                                                $parentUrlName = $groups->getParentUrlName($pageId);
                                            endif;

                                            while ($row = $conn->fetchObject($result)) {
                                                ?>
                                                <li class="<?php echo (empty($pageUrlName) && 0 == $i) || ($pageUrlName == $row->urlname) || ($row->urlname == $parentUrlName) ? "active" : ""; ?>">
                                                    <a href="<?php echo $row->urlname; ?>"><?php
                                                        echo $row->name;
                                                        if ($groups->haveChild($row->id)):
                                                            echo "<span class=\"caret\"></span>";
                                                        endif;
                                                        ?></a>
                                                    <?php
                                                    $i++;
                                                    $innerResult = $groups->getByParentId($row->id);
                                                    if ($conn->numRows($innerResult) > 0):
                                                        echo "<ul>";
                                                    endif;
                                                    while ($innerRow = $conn->fetchObject($innerResult)):
                                                        ?>
                                                        <li><a href="<?php echo $innerRow->urlname; ?>"><?php echo $innerRow->name; ?></a></li>
                                                        <?php
                                                    endwhile;
                                                    if ($conn->numRows($innerResult) > 0):
                                                        echo "</ul>";
                                                    endif;
                                                    ?>
                                                </li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                        <!--                                        <ul class="nav navbar-nav">
                                                                                    <li class="active">
                                                                                        <a href="index.php">Home <span class="sr-only">(current)</span></a>
                                                                                    </li>
                                                                                    <li class="dropdown">
                                                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <span class="caret"></span></a>
                                                                                        <ul class="dropdown-menu">
                                                                                            <li><a href="information.php">Information</a></li>
                                                                                            <li><a href="mission.php">Mission</a></li>
                                                                                            <li><a href="objective.php">objective</a></li>
                                                                                            <li><a href="board-member.php">Board Member</a></li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="dropdown">
                                                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects <span class="caret"></span></a>
                                                                                        <ul class="dropdown-menu">
                                                                                            <li><a href="past-project.php">Past</a></li>
                                                                                            <li><a href="present-project.php">Present</a></li>
                                                                                            <li><a href="future-project.php">Future</a></li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="dropdown">
                                                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Donate <span class="caret"></span></a>
                                                                                        <ul class="dropdown-menu">
                                                                                            <li><a href="health-sector.php">Health Sectors</a></li>
                                                                                            <li><a href="education-sector.php">Education Sectors</a></li>
                                                                                            <li><a href="natural-disaster.php">natural disasters</a></li>
                                                                                            <li><a href="poverty.php">poverty</a></li>
                                                                                            <li><a href="environment.php">environment</a></li>
                                                                                            <li><a href="social-welfare.php">social welfare</a></li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="contact.php">Contact Us</a>
                                                                                    </li>
                                                                                </ul>-->

                                    </div><!-- /.navbar-collapse -->
                                </div><!-- /.container-fluid -->
                            </nav>

                        </div><!--amr-section-2-->

                        <?php
                        if (isset($_GET['action'])) {
                            $action = $_GET['action'];
                            if (file_exists('includes/' . $action . '.php')) {
                                echo "<br>";
                                include('includes/' . $action . '.php');
                                echo "<br>";
                            }
                        } elseif (isset($pageLinkType)) {
                            include('includes/cmspage.php');
                        } else
                            include('includes/default.php');
                        ?>

                        <div class="amr-section-3">
                            <!-- Donation Wrap -->
                            <div class="donation-wrap" data-stellar-background-ratio="0.10">
                                <div class="container">
                                    <div class="col-md-12">
                                        <div id="donation-slider" class="flexslider">
                                            <ul class="slides">
                                                <?php
                                                $id = $constant->getId(60);
                                                $result = $groups->getByParentId($id);
                                                while ($row = $conn->fetchObject($result)):
                                                    ?>
                                                    <li>
                                                        <h3><?php echo $row->name; ?></h3>
                                                        <div class="d-price"><?php echo $row->shortcontents; ?></div>
                                                        <div class="d-progress"><span style="width:70%"></span></div>
                                                        <p><?php echo $row->contents; ?></p>
                                                        <a class="d-btn" href="#">Donate now</a>
                                                    </li>
                                                <?php endwhile; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Donation Wrap -->
                        </div><!--amr-section-3-->


                        <div class="amr-section-18">
                            <div class="footer">  
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="footer-point">
                                                <?php
                                                $id = $constant->getId(61);
                                                $result = $groups->getById($id);
                                                $row = $conn->fetchObject($result);
                                                ?>
                                                <h1 class="footerbrand"><?php echo $row->name; ?></h1>
                                                <?php echo $row->shortcontents; ?>

                                                <div class="paymentMethodImg"> 
                                                    <img height="30" src="assets/images/sm/master_card.png" alt="img"/>
                                                    <img height="30" src="assets/images/sm/visa_card.png" alt="img"/>
                                                    <img height="30" src="assets/images/sm/paypal.png" alt="img"/> 
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="footer-point">
                                                <h1 class="title"><span class="colortext">F</span>ind <span class="font100">Us</span></h1>
                                                <div class="footermap">
                                                    <?php
                                                    $id = $constant->getId(62);
                                                    $result = $groups->getById($id);
                                                    $row = $conn->fetchObject($result);
                                                    echo $row->shortcontents;
                                                    ?>
                                                    <ul class="social-icons list-soc">
                                                        <?php
                                                        $id = $constant->getId(65);
                                                        $result = $groups->getById($id);
                                                        $row = $conn->fetchObject($result);
                                                        ?>
                                                        <li><a target="_blank" href="<?php echo $row->shortcontents; ?>"><i class="fa fa-facebook"></i></a></li>
                                                        <?php
                                                        $id = $constant->getId(70);
                                                        $result = $groups->getById($id);
                                                        $row = $conn->fetchObject($result);
                                                        ?>
                                                        <li><a target="_blank" href="<?php echo $row->shortcontents; ?>"><i class="fa fa-twitter"></i></a></li>
                                                        <?php
                                                        $id = $constant->getId(71);
                                                        $result = $groups->getById($id);
                                                        $row = $conn->fetchObject($result);
                                                        ?>
                                                        <li><a target="_blank" href="<?php echo $row->shortcontents; ?>"><i class="fa fa-linkedin"></i></a></li>
                                                        <?php
                                                        $id = $constant->getId(72);
                                                        $result = $groups->getById($id);
                                                        $row = $conn->fetchObject($result);
                                                        ?>
                                                        <li><a target="_blank" href="<?php echo $row->shortcontents; ?>"><i class="fa fa-google-plus"></i></a></li>
                                                        <?php
                                                        $id = $constant->getId(73);
                                                        $result = $groups->getById($id);
                                                        $row = $conn->fetchObject($result);
                                                        ?>
                                                        <li><a target="_blank" href="<?php echo $row->shortcontents; ?>"><i class="fa fa-skype"></i></a></li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="footer-point">
                                                <h1 class="title"><span class="colortext">Q</span>uick <span class="font100">Message</span></h1>
                                                <div class="done">
                                                    <div class="alert alert-success">
                                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                                        Your message has been sent. Thank you!
                                                    </div>
                                                </div>
                                                <form method="post" action="" id="contactform">
                                                    <div class="form">
                                                        <input class="col-md-6" type="text" name="name" placeholder="Name">
                                                            <input class="col-md-6" type="text" name="email" placeholder="E-mail" />
                                                            <textarea class="col-md-12" name="comment" rows="4" placeholder="Message"></textarea>
                                                            <input type="submit" name="homeFeedback" id="submit" class="btn" value="Send" />
                                                    </div>
                                                </form>

                                            </div>
                                        </div>

                                    </div><!--row-->
                                </div><!--container-->
                            </div><!--footer-->
                        </div><!--amr-section-18-->

                        <div class="amr-section-17">
                            <div class="copyright">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p class="pull-left">
                                                © Copyright 2004 SDMT Nepal
                                            </p>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="powred-by">
                                                Powered by:<a href="http://www.ultrabyte.com.np" target="_blank"><img src="assets/images/sm/ultrabyte-logo.png" alt="ultrabyte"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--amr-section-17-->



                        <script type="text/javascript" src="assets/js/jquery.js"></script> 
                        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
                        <script type="text/javascript" src="assets/js/jquery.flexslider.js"></script>
                        <script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
                        <script type="text/javascript" src="assets/js/back-to-top.js"></script> 
                        <script type="text/javascript">
                            $(document).ready(function () {
                                //   $('.fancybox').fancybox();
                                var nav = "#sdmtNav";
                                $(nav).on('click', 'a', function (e) {
                                    if ($(this).next("ul").length > 0)
                                        e.preventDefault();

                                    $(nav + " li").removeClass("open");
                                    $(nav + " li").removeClass("open");

                                    if ($(this).hasClass("menu-shown")) {
                                        $(nav + " a").next('ul').stop().slideUp(350);
                                        $(nav + " a").removeClass("menu-shown");
                                    }
                                    else {
                                        $(nav + " a").next('ul').stop().hide();
                                        $(this).next('ul').slideDown(500);
                                        $(this).addClass("menu-shown");
                                        $(this).parent().addClass("open");
                                    }
                                });
                                $(nav).on('mouseleave', 'li', function () {
                                });
                            });
                        </script>

                        <script type="text/javascript">
                            $(window).load(function () {
                                $('.flexslider').flexslider({
                                    animation: "slide"
                                });
                            });
                        </script>



                    </body>
                    </html>


