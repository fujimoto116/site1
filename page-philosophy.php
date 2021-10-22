<?php get_header(); ?>
<article class="margin">
  <h1 class="section-title container">
    <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
  </h1>
  <div class="text"><?php the_content(); ?></div>
</article>
<?php get_footer(); ?>