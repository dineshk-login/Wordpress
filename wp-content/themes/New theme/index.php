<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div><?php get_header(); ?></div>
	<div><?// do_shortcode('[hello_world]');?></div>
	<div><? do_shortcode('[user_contactform]');?></div>
	<div>

<?php   if ( have_posts() ) : while( have_posts()  ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
<?php endwhile; endif; ?> </div>
				
<div>	<?php get_footer();?></div>
 <?php //Add_filter ("widget_text", "do_shortcode");?>

</body>
</html>