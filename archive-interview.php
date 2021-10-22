<?php get_header(); ?>
<main class="container margin">
  <div>
    <h1 class="section-title text-center">ニュース一覧</h1>
  </div>
  <div class="archive-wrapper">
    <ul>
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <li class="archive-list">
            <p class="archive-date"><?php echo get_the_date('Y-m-d'); ?></p>
            <a href="<?php the_permalink(); ?>" class="archive-title">
              <?php
              if (mb_strlen($post->post_title, 'UTF-8') > 20) {
                $title = mb_substr($post->post_title, 0, 20, 'UTF-8');
                echo $title . '…';
              } else {
                echo $post->post_title;
              }
              ?>
            </a>
          </li>
        <?php endwhile; ?>
        <?php
        if (function_exists("pagination")) {
          pagination($wp_query->max_num_pages);
        }
        ?>
      <?php endif; ?>
    </ul>
  </div>
</main>
<?php get_footer(); ?>