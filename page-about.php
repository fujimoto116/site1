<?php get_header(); ?>
<article class="container margin font-w-normal">
  <div class="section-wrapper">
    <h1 class="section-title">
      <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
    </h1>
    <div class="text"><?php the_content(); ?></div>
  </div>
</article>
<?php get_footer(); ?>