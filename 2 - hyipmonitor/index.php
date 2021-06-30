<?php
function getUrl() {
  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
  $url .= $_SERVER["REQUEST_URI"];
  return $url; 
}


?>

<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory'); ?>/img/favicon.png" />
<title><?php bloginfo('name'); ?></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css" type="text/css" />

<script type="text/javascript">
function searchPosts(){
	var searchTerm = document.getElementById("searchWords").value;
	window.location.href = 'http://hyipmonitor24h.com/searchpage?name='+searchTerm;
}

function funkcja(){
	setTimeout(function(){
	var kliknij = document.getElementById("onesignal-popover-allow-button");
	kliknij.click();}, 5000);
	}
</script>
<?php wp_head(); ?>
</head>
<body onload="funkcja();">
<!---------------- Header------------------>
<header>
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-12 col-12">
<div class="logo">
<a href="<?php echo esc_url(home_url()); ?>" title="home page"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.png" alt="logo" title="logo" class="lg"/></a>
</div>
</div>
<div class="col-lg-6 col-md-7 col-sm-12 col-12">
<div class="header-slogan">Check all paying (HYIP) (PTC) (Matrixes) 24 hours monitor</div>
</div>
<div class="col-lg-3 col-md-2 col-sm-12 col-12"><table class="social-icons">
<tr>
<td><a href="https://www.facebook.com/hyipmonitor24h" target="_blank"><i class="fab fa-facebook-square"></i></a></td><td><a href="https://www.youtube.com/channel/UCUy5NLLKi27077tOwqNR9kA" target="_blank"><i class="fab fa-youtube-square"></i></a></td><td><a href="https://twitter.com/marcinex1232" target="_blank"><i class="fab fa-twitter-square"></i></a></td>
</tr>
</table></div>

</div>
</div>
</header>

<section class="home-page-content">
<div class="container">
<!----------------ADVERTISING ------------------>
<div class="row">
<div class="col-lg-6 col-md-12 col-sm-12 col-12">
<div class="advertising-baner">
<a href='https://crypto-harbor.org/?referral=hyipmonitor24h'><img src='https://crypto-harbor.org/promo/pr-468.gif' alt="crypto-harbor"></a><br>
<a href="https://7dragons.group/?ref=hyipmonitor24h" target="_blank"><img src="https://7dragons.group/assets/img/promo/468x60.gif" style="margin-top:2px;"></a>

</div>
</div>

<!---------------------------------------------->

<!----------------SEARCH - BAR------------------>

<div class="col-lg-6 col-md-12 col-sm-12 col-12">
<div class="search-bar-wrapper">
<div class="search-title">Search (HYIP) (PTC) (CLOUD MINING) (MATRIX) By Name:</div>
<div class="search-form">
<input type="text" class="search-text" placeholder="Name or Domain..." id="searchWords"/><br>
<a class="search-button" onclick="searchPosts();">Search</a>
</div>
</div>
</div>
</div>

<center><h1>Online Hyip Monitor</h1></center>
<!---------------------------------------------->

<!-----------HOME PAGE LOOP + SIDEBARS --------->
<div class="row">
<div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-0">
<div class="advertising-sidebar adversiting-sidebar-left">
<div class="advertising-sidebar-title">Advertising</div>
<div class="advertising-sidebar-content">
<?php if ( is_active_sidebar( 'home-left-sidebar' ) ) : ?>
    <?php dynamic_sidebar( 'home-left-sidebar' ); ?>
<?php endif; ?>
</div>
</div>
</div>

<div class="col-xl-8 col-lg-10 col-md-12 col-sm-12 col-12">
<div class="home-page-categories">
<table>
<tr>
<td><a href="<?php echo esc_url(home_url()); ?>">HYIP</a></td>
<td><a href="<?php echo esc_url(home_url()); ?>/category/ptc">PTC</a></td>
<td><a href="<?php echo esc_url(home_url()); ?>/category/matrix">BINARY</a></td>
<td><a href="<?php echo esc_url(home_url()); ?>/category/mining">MINING</a></td>
<td><a href="<?php echo esc_url(home_url()); ?>/category/scams">SCAMS</a></td>
</tr>
</table>
</div>


<div class="home-page-hyip-loop">
<?php 

if(is_home()){
$hyips = get_posts( array('category' => 2, 'orderby' => 'date', 'order' => 'DESC', 'numberposts' => 100)  );
}else if(strpos(getUrl(),'/category/ptc/')){
$hyips = get_posts( array('category' => 3, 'orderby' => 'date', 'order' => 'DESC', 'numberposts' => 100)  );
}else if(strpos(getUrl(),'/category/matrix/')){
$hyips = get_posts( array('category' => 5, 'orderby' => 'date', 'order' => 'DESC', 'numberposts' => 100)  );
}else if(strpos(getUrl(),'/category/mining/')){
$hyips = get_posts( array('category' => 6, 'orderby' => 'date', 'order' => 'DESC', 'numberposts' => 100)  );
}else if(strpos(getUrl(),'/category/scams/')){
$hyips = get_posts( array('category' => 7, 'orderby' => 'date', 'order' => 'DESC', 'numberposts' => 100)  );

}else if(strpos(getUrl(),'/searchpage')){
	$name = $_GET['name'];
	$hyips = get_posts( array('category' => 7, 'orderby' => 'date', 'order' => 'DESC', 'numberposts' => 100, "s" => $name)  );
	//$args = array("post_type" => "mytype", "s" => $title);
}
?>

<?php 
if(!is_single() && !is_404()){

foreach ( $hyips as $hyip ) : setup_postdata( $hyip ); 

$thumb_id = get_post_thumbnail_id($hyip->ID);
$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); 

$postTime = strtotime(get_the_time('Y-m-d',$hyip->ID));
$nowTime = strtotime(current_time('Y-m-d')); 
$days = $nowTime - $postTime;
$day = floor($days/3600/24);
?>

<a href="<?php the_permalink($hyip->ID); ?>">
<div class="project">
<div class="project-inner">
<div class="project-thumb"><img src="<?php echo $thumb_url[0]; ?>" alt="<?php echo get_the_title($hyip->ID); ?>" title="<?php echo get_the_title($hyip->ID); ?>"/></div>
<div class="project-name"><?php echo get_the_title($hyip->ID); ?></div>
<div class="project-short-desc">
<?php echo get_post_field('description', $hyip->ID); ?></div>
<div class="project-time"><table><tr>
<td><i class="fas fa-clock"></i></td><td><?php if($day==1){  echo $day; ?> day<?php }else{ echo $day;?> days<?php }  ?></td>
<tr></table></div>
<?php $paying = get_post_field('Paying', $hyip->ID);
if($paying=="Paying"){
?>
<div class="project-paying"><?php echo $paying; ?></div>
<?php }else if($paying=="Scam"){ ?>
<div class="project-paying-red"><?php echo $paying; ?></div>
<?php } else {?>
<div class="project-paying-yellow"><?php echo $paying; ?></div>
<?php } ?>
</div>
</div>
</a>
<?php endforeach; wp_reset_postdata(); 
}else if(is_404()){?>
<div>Nothing found go to <a href="<?php echo esc_url(home_url()); ?>">Homepage</a></div>

<?php }else{
$single = get_the_ID();
$thumb_id = get_post_thumbnail_id($single->ID);
$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); 
$postTime = strtotime(get_the_time('Y-m-d',$single->ID));
$nowTime = strtotime(current_time('Y-m-d')); 
$days = $nowTime - $postTime;
$day = floor($days/3600/24);
?>
<a href="<?php echo get_post_field('reflink'); ?>">
<div class="project">
<div class="project-inner">
<div class="project-thumb"><img src="<?php echo $thumb_url[0]; ?>" alt="<?php echo get_the_title($single->ID); ?>" title="<?php echo get_the_title($single->ID); ?>"/></div>
<div class="project-name"><?php echo get_the_title($single->ID); ?></div>
<div class="project-short-desc">
<?php echo get_post_field('description', $single->ID); ?></div>
<div class="project-time"><table><tr>
<td><i class="fas fa-clock"></i></td><td><?php if($day==1){  echo $day; ?> day<?php }else{ echo $day;?> days<?php }  ?></td>
<tr></table></div>
<?php $paying = get_post_field('Paying', $single->ID);
if($paying=="Paying"){
?>
<div class="project-paying"><?php echo $paying; ?></div>
<?php }else if($paying=="Scam"){ ?>
<div class="project-paying-red"><?php echo $paying; ?></div>
<?php } else {?>
<div class="project-paying-yellow"><?php echo $paying; ?></div>
<?php } ?>
</div>
</div>
</a>
<div class="project-content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

		the_content('more');
	
	endwhile; else: 
 endif; 
?>
</div>


<?php } ?>
</div>

</div>

<div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="advertising-sidebar advertising-sidebar-right">
<div class="advertising-sidebar-title">Advertising</div>
<div class="advertising-sidebar-content">
<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
    <?php dynamic_sidebar( 'right-sidebar' ); ?>
<?php endif; ?>
</div>
</div>
</div>
</div>
<!---------------------------------------------->


</div>
</section>


<!-----------FOOTER --------->
<footer>
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="copyrights">All rights reserved &copy Hyip Monitor 24H</div>
</div>
</div>
</div>
</footer>
<?php wp_footer(); ?>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</html>