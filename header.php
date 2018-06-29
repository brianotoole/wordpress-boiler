<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<?php
// Custom Field Group == Site Options
// $site_logo = get_field('site_logo', 'option');
?>

<body <?php body_class(); ?>>
<div id="page">

  <header class="header">
    <div class="header__inner">
      <div class="container-fluid">
        <div class="row header__row">

          <div class="header__logo">
            <a href="<?php echo get_site_url(); ?>" class="header__logo-wrapper">
              <span>Wordpress Theme Boiler</span>
              <!--<img src=" echo get_template_directory_uri() . '/assets/img/logo.svg'; ?>" alt="logo" rel="logo" />-->
            </a><!--/.header__logo-wrapper-->
          </div><!--/.header__logo-->

          <div class="header__items">
            <div class="nav-wrapper u-visible-tablet">
              <?php
                wp_nav_menu(array(
                  //@NOTE: WP Menu must be added to "Primary" location
                  'theme_location'  => 'primary',
                  'menu_class'      => 'nav__inner',
                  'container'       => 'div',
                  'container_class' => 'nav'
                ));
              ?>
            </div><!--/.nav-wrapper-->
            <div class="nav-toggle u-hidden-tablet" id="js-nav-toggle">
              <span class="nav-toggle__line nav-toggle__line--1"></span>
              <span class="nav-toggle__line nav-toggle__line--2"></span>
              <span class="nav-toggle__line nav-toggle__line--3"></span>
            </div><!--/.nav-toggle-->
          </div><!--/.header__items-->

        </div><!--/.header__row-->
      </div><!--/.container-->
    </div><!--/.header__inner-->
  </header>

  <!-- NAV-MOBILE -->
  <div class="row nav-mobile" id="js-nav-mobile">
    <div class="col-xs-12">
      <?php
        wp_nav_menu( array(
          //@NOTE: WP Menu must be added to "Mobile" location
          'theme_location'  => 'mobile',
          'menu_class'      => 'nav-mobile__inner',
          'container'       => false,
        ) );
      ?>
    </div><!--/.col-->
  </div><!--/.nav-mobile-->
  <!--/NAV-MOBILE-->
