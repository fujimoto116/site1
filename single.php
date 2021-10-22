<?php get_header(); ?>
<main>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="container margin">
      <div class="section-wrapper">
        <h1 class="section-title text-center single-title">
          <?php the_title() ?>
        </h1>
        <div class="text"><?php the_content(); ?></div>
      </div>
    </article>
    <?php endwhile; ?>
  <?php endif; ?>
</main>
<?php get_footer(); ?>