<?php get_header(); ?>
<div class="recruit-title-pa">
  <div class="section-wrapper recruit-title-mt">
    <h1 class="section-title">
      <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
    </h1>
  </div>
</div>
<div class="text"><?php the_content(); ?></div>
<div class="recruit-ie">
  <a class="recruit-ie-item recruit-item1" href="<?php echo esc_url(home_url('/recruit/interview')); ?>">
    <h3 class="recruit-ie-title">インタビュー</h3>
  </a>
  <a class="recruit-ie-item recruit-item2" href="<?php echo esc_url(home_url('/recruit/environment')); ?>">">
    <h3 class="recruit-ie-title">働く環境</h3>
  </a>
</div>
<?php get_footer(); ?>