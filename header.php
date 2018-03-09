<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cr12_Andrzej_Kusznir_traveler
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cr12_Andrzej_Kusznir_traveler' ); ?></a>

	<header id="masthead" class="site-header">

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
      <a class="navbar-brand" href="#">About Us</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Travel Tips<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Life Style</a></li>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="https://news.google.com/news/?ned=us&gl=SY&hl=en">NEWS</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="https://www.ted.com/talks?language=ar">TED</a></li>
            <li><a href="https://www.sport.com">Sport</a></li>
            <li><a href="https://www.FaceBook.com">FaceBook</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="https://www.youtube.com">You Tube</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<img src="https://www.kandooadventures.com/assets/Uploads/NEPAL-CLIMB-Copy.jpg" alt="img" style="width: 100%; height: 15%;">

	<div id="status" style="margin-top: 75px;"></div>
		<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12">
				<img src="https://media.timeout.com/images/103444978/image.jpg" width="250" style="margin-left: 50px;">
				<h4 class="text-center" style="margin-top: 30px;">Travel with us to USA at the cheapest prices</h4>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<img src="https://iwkidz.files.wordpress.com/2011/09/a4.jpg" width="250" style="margin-left: 50px;">
				<h4 class="text-center" style="margin-top: 10px;">In Damascus you can find a lot of nice people from different cultures .... come now with us</h4>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<img src="https://2016.export.gov/japan/build/groups/public/@eg_jp/documents/webcontent/~export/eg_jp_062762~280~DCT_Center_Content/333591-2.jpg" width="250" style="margin-top: 1px;margin-left: 50px;">
				<h4 class="text-center" style="margin-top: 10px;">the people here are very friendly and they have a special traditions and interesting life.... try now to go there</h4>
			</div>
		</div>
	</div>
	
</header>

	<div id="content" class="site-content">

