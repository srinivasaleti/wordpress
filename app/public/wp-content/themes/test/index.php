<?php get_header() ?>
<?php
while (have_posts()) {
  the_post(); ?>
  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  <hr />
<?php
}
?>
<h1>Hello World</h1>
<?php get_footer() ?>