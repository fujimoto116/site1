<footer class="footer">
  <div class="container">
    <div class="footer-title"><a href="<?php echo esc_url(home_url()); ?>"><?php echo bloginfo('name'); ?></a></div>
    <div class="footer-menu flex">
      <section class="footer-menu-about">
        <h3 class="footer-menu-title"><a href="<?php echo esc_url(home_url('/about/')); ?>">about</a></h3>
        <ul class="footer-menu-list">
          <li><a href="<?php echo esc_url(home_url('/about/member/')); ?>">メンバー</a></li>
          <li><a href="<?php echo esc_url(home_url('/about/philosophy/')); ?>">経営理念</a></li>
          <li><a href="<?php echo esc_url(home_url('/about/company/')); ?>">会社概要</a></li>
          <li><a href="<?php echo esc_url(home_url('/about/greeting/')); ?>">代表挨拶</a></li>
        </ul>
      </section>
      <section class="footer-menu-service">
        <h3 class="footer-menu-title"><a href="<?php echo esc_url(home_url('/service/')); ?>">service</a></h3>
      </section>
      <section class="footer-menu-recruit">
        <h3 class="footer-menu-title"><a href="<?php echo esc_url(home_url('/recruit/')); ?>">recruit</a></h3>
        <ul class="footer-menu-list">
          <li><a href="<?php echo esc_url(home_url('/recruit/interview/')); ?>">インタビュー</a></li>
          <li><a href="<?php echo esc_url(home_url('/recruit/environment/')); ?>">働く環境</a></li>
        </ul>
      </section>
    </div>
    <div class="footer-nav flex">
      <ul class="footer-nav-list flex">
        <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">contact</a></li>
        <li><a href="<?php echo esc_url(home_url('/privacy/')); ?>">privacy</a></li>
        <li><a href="<?php echo get_post_type_archive_link('news'); ?>">news</a></li>
      </ul>
      <p class="copyright">&copy; <?php echo date('Y'); ?> estra, inc. All rights reserved</p>
    </div>
  </div>
</footer>
</body>

</html>