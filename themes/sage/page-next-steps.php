<?php while (have_posts()) : the_post(); ?>
<pre>page-next-steps</pre>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>