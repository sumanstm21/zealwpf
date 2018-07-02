<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/icon" href="img/wpf-favicon.png" />
<!--     <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'> -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,800" rel="stylesheet">
      <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"></a>
  <!-- END SCROLL TOP BUTTON -->
  
<header id="header">
    <!-- BEGIN MENU -->
    <div class="menu_area">
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
              aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <!-- IMG BASED LOGO  -->
            <a class="navbar-brand" href="<?= Yii::$app->homeUrl; ?>">
              <img src="<?= Yii::$app->request->baseUrl . '/img/logo.png' ?>" alt="logo">
            </a>
          </div>

          <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
              <li class="active">
                <a href="<?= Yii::$app->homeUrl; ?>">Home</a>
              </li>
              <li>
                <a href="<?php echo Url::to(['site/about']);?>">About Us</a>
              </li>
              <li>
                <a href="<?php echo Url::to(['site/admission']);?>">Admission info</a>
              </li>
              <li>
                <a href="<?php echo Url::to(['site/notices']);?>">News & Events</a>
              </li>
              <li>
                <a href="<?php echo Url::to(['site/gallery']);?>">Gallery</a>
              </li>
              <li>
                <a href="<?php echo Url::to(['site/contact']);?>">Contact</a>
              </li>
            </ul>
          </div>
          <!--/.nav-collapse -->
        </div>
      </nav>
    </div>
    <!-- END MENU -->
  </header>
  <div class="clearfix"></div>
        <?= $content ?>
<!--=========== BEGIN FOOTER SECTION ================-->
  <footer id="footer">
    <!-- Start footer top area -->
    <div class="footer_top">
      <div class="container">
        <div class="row">

          <div class="col-md-3">
            <div class="single_footer_widget">
              <h3>Quick links</h3>
              <ul class="footer_widget_nav">
                <li>
                  <a href="admission.html">Admission info</a>
                </li>
                <li>
                  <a href="gallery.html">Gallery</a>
                </li>
                <li>
                  <a href="about.html">About Us</a>
                </li>
                <li>
                  <a href="news.html">News & events</a>
                </li>

              </ul>
            </div>
          </div>
          <div class="col-md-5 address-footer">
            <h3>Contact</h3>
            <div class="address_group">
              <h4>
                <b>School Name higher Secondary School</b>
              </h4>
              <p>200 Lincoln Ave, Salinas, CA 93901</p>
              <p>Phone: 662-807-9585</p>
              <p>Email:contact@wpfdegree.com</p>
            </div>


          </div>
          <div class="col-md-4">
            <div class="single_footer_widget">
              <h3>Find us on</h3>
              <ul class="footer_social">
                <li>
                  <a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="#">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li>
                  <a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip" href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>

                <li>
                  <a data-toggle="tooltip" data-placement="top" title="Linkedin" class="soc_tooltip" href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
                <li>
                  <a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip" href="#">
                    <i class="fa fa-youtube"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End footer top area -->

    <!-- Start footer bottom area -->
    <div class="footer_bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="footer_bootomLeft">
              <p> Copyright &copy; All Rights Reserved - Onlinezeal</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="footer_bootomRight">
              <p>Designed by
                <a href="http://onlinezeal.com/" rel="nofollow">Onlinezeal.com</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End footer bottom area -->
  </footer>
  <!--=========== END FOOTER SECTION ================-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
