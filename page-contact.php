<?php get_header(); ?>
<article class="container margin">
  <div class="section-wrapper">
    <h1 class="section-title text-center">
      <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
    </h1>
    <div class="text">
      <?php the_content(); ?>
      <?php echo do_shortcode('[contact-form-7 id="62" title="お問い合わせフォーム"]'); ?>
    </div>
  </div>
</article>
<?php get_footer(); ?>