<?php get_header(); ?>
<article class="container margin">
  <div class="section-wrapper">
    <h1 class="section-title text-center">
      <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
    </h1>
    <div class="archive-wrapper">
      <ul>
        <?php
          $paged = get_query_var('paged') ?: 1;
          $args = array(
            'paged' => $paged, //ページネーションを使いたいなら指定
            'posts_per_page' => 3, //３記事のみ出力
            'post_status' => 'publish', //公開の記事だけ
            'post_type' => 'interview', //カスタム投稿slag
            'orderby' => 'date', //日付を出力する基準
            'order' => 'DESC' //表示する順番（逆はASC）
          );

          $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
        ?>
        <?php
          while ($the_query->have_posts()) : $the_query->the_post();

            //-------- ここから繰り返し----------
        ?>
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
          <?php //-------- 繰り返しここまで-----------
          endwhile; ?>
          <?php
          if (function_exists('pagination')) :
            pagination($the_query->max_num_pages, $paged);
          endif;
          ?>

        <?php //-------- WP_query終了-----------
          wp_reset_postdata();
        endif; ?>
      </ul>
    </div>
  </div>
  </div>
</article>
<?php get_footer(); ?>