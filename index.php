<?php get_header(); ?>
<main>
  <div class="fv mb">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/img1.jpeg" alt="">
    <div class="fv-copy container">
      <p class="main-copy">Commit to the growth<br>for everyone</p>
      <p class="sub-copy">全ての人の成長にコミットする </p>
    </div>
    <div class="firstview-news">
      <div class="news-inner">
        <span>NEWS</span>
          <?php
          $args = array(
            'posts_per_page'   => 1,
            'post_type'   => 'news',
          );
          $posts = get_posts($args);
          if ($posts) :
          foreach ($posts as $post) :
            setup_postdata($post);
          ?>
            <a href="<?php the_permalink(); ?>">
              <?php
              if (mb_strlen($post->post_title, 'UTF-8') > 25) {
                $title = mb_substr($post->post_title, 0, 25, 'UTF-8');
                echo $title . '…';
              } else {
                echo $post->post_title;
              }
              ?>
            </a>
          <?php
          endforeach;
          wp_reset_postdata();
          ?>
        <?php else : ?>
          <p>投稿がありません。</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <section class="container mb">
    <h2 class="section-title">about</h2>
    <div class="section-wrapper">
      <p class="content-title">Technology × Coaching</p>
      <p class="content-text">株式会社estraはデジタル化が遅れている教育業界に最新のテクノロジーをすることによって教育のDXを実現します。独自のオペレーションとコーチングを融合した新しい教育の仕組より、一人ひとりに合わせた最適な教育を提供します。</p>
      <a href="<?php echo esc_url(home_url('/about/')); ?>" class="readmore">readmore</a>
    </div>
  </section>
  <section class="container mb">
    <h2 class="section-title">service</h2>
    <div class="section-wrapper flex flex-column">
      <div class="item">
        <p>フリーランス特化型プログラミングスクール</p>
        <p class="item-title">coachtech</p>
        <p>COACHTECH(コーチテック)はフリーランス特化型のオンラインコーチングプログラミングスクーす。
          プログラミング未経験の方でも、「独自の学習ノウハウ」でフリーランスエンジニアを目指すことがです。</p>
      </div>
      <div class="item">
        <p>教育機関向け業務効率化支援ツール</p>
        <p class="item-title">stageee</p>
        <p>Stageee(ステージー)はコーチングに特化した業務効率化支援ツールです。
          Web会議、面談予約、チャット、学習計画作成、学習状況の把握、教材管理、指導報告書作成といったチングにおいて必要な機能が1つにまとまった業務効率化を支えるSaaS</p>
      </div>
    </div>
    <a href="<?php echo esc_url(home_url('/service/')); ?>" class="readmore">readmore</a>
  </section>
  <section class="container mb">
    <h2 class="section-title">recruit</h2>
    <div class="section-wrapper">
      <p class="content-title">日本の教育を変革する最前線で活躍する人材に</p>
      <p class="content-text">全員がリスクを恐れずにチャレンジし、社員一人一人が活躍できる環境をみで作り上げる</p>
      <div class="image-wrapper">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/img2.jpeg" alt="">
      </div>
      <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="readmore">readmore</a>
    </div>
  </section>
</main>
<?php get_footer(); ?>