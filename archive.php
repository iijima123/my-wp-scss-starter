<?php get_header(); ?>
<main><h1><?php the_archive_title(); ?></h1><?php if (have_posts()) : ?><ul><?php while (have_posts()) : the_post(); ?><li><a href="<?php the_permalink(); ?>"><div><?php echo get_the_date('Y.m.d'); ?></div><div><?php the_title(); ?></div></a></li><?php endwhile; ?></ul><?php endif; ?></main>
<?php get_footer(); ?>