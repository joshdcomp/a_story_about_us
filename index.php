<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<?php ini_set('display_errors',1); 
 error_reporting(E_ALL); ?>
 
 <?php 
    $title = 'This is a love story.';
    $descrip = 'A tale of two spartans, partners in crime, moved to the windy city (recruiting a furry friend along the way). This is their love story.';
    $authors = '@joshDcomp, @mttwbsh @GabeCooper';
    $keywords = 'marriage, proposal, love, story, engagement, animation, illustration, MTTHWBSH, joshDcomp, GabeCooper, html5, css3, tech, story, love story, michigan state university, msu, grand rapids, chicago, east lansing';
    $ogURL = '';
    $thumb = 'http://joshdcompton.com/img/fb-img.png';

?>
<head>
  <meta charset="utf-8">
  <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo $descrip; ?>">
  <meta name="keywords" content="<?php echo $keywords; ?>">
  <meta name="author" content="<?php echo $authors; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- Social Media & Google meta
  ==============================================================================-->
      <!-- FB -->
          <meta property="og:url" content="<?php echo $ogURL; ?>"/>
          <meta property="og:title" content="<?php echo $title; ?>"/>
          <meta property="og:description" content="<?php echo $descrip; ?>"/>
          <meta property="og:image" content="<?php echo $thumb; ?>"/>
      <!-- Google -->
          <meta name="thumbnail" content="<?php echo $thumb; ?>" />

  <!-- CSS
  ==============================================================================-->
  <link rel="stylesheet" href="main.css">
  <!-- Fonts
  ==============================================================================-->
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:900|Gentium+Basic:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Favicons
  ==============================================================================-->
  <link rel="shortcut icon" href="img/favicons/favicon.ico">
  <link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
</head>
<body>
  <div class="storyboard-container">
    
    <aside class="ui-elements">
      <div class="ui__left-button">&nbsp;</div>
      <div class="ui__right-button">&nbsp;</div>
      
      <div class="ui__keyboard">
        <img src="<?php echo  dirname(__FILE__); ?>/img/ui-elements/top-arrow-key.png" alt="up arrow key" class="ui__keyboard--top-key" />
        <img src="<?php echo  dirname(__FILE__); ?>/img/ui-elements/left-arrow-key.png" alt="left arrow key" class="ui__keyboard--left-key" />
        <img src="<?php echo  dirname(__FILE__); ?>/img/ui-elements/bottom-arrow-key.png" alt="down arrow key" class="ui__keyboard--botom-key" />
        <img src="<?php echo  dirname(__FILE__); ?>/img/ui-elements/right-arrow-key.png" alt="right arrow key" class="ui__keyboard--right-key" />
      </div><!-- .ui__keyboard -->
      
      <ul class="ui__nav">
        <?php for($i = 1; $i < 9; $i++){ ?>
            <li class="<?php echo 'ui__nav__slide' . $i; ?>"></li>
        <?php } ?>
            <li class="ui__nav__colophon"></li>
      </ul>
    </aside><!-- .ui-elements -->
    
    <div class="story_book">
      <?php include( dirname(__FILE__) . '/pages/_front-cover.phtml'); ?>
      <?php include( dirname(__FILE__) . '/pages/_page-factory.phtml'); ?>
      <?php include( dirname(__FILE__) . '/pages/_map.phtml');?>
      <?php include( dirname(__FILE__) . '/pages/_colophon.phtml'); ?>
      
    </div><!-- .story_book -->
    
  </div><!-- .container -->
  <!-- SCRIPTS
  ==============================================================================-->
  <script type="text/javascript" src="js/jquery.1.10.js"></script>
  <script type="text/javascript" src="js/jquery.easing.js"></script>
  <script type="text/javascript" src="js/jquery.rotate.js"></script>
  <script type="text/javascript" src="js/love-story.js"></script>
</body>
</html>