<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div><?php get_header(); ?></div>
	<div>Test >><?= do_shortcode('[hello_world]');?></div>
	<div><?php  if ( have_posts() ) : while( have_posts()  ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail( 'full' ); ?>
    </a>
    <p><?php the_excerpt(); ?></p>
<?php endwhile; endif; ?> </div>
				
<div>	<?php get_footer();?></div>

</body>
</html>