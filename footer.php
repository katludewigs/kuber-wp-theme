<?php wp_footer(); ?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div>
        <p><strong>Kuber Projects</strong></p>
        <p class="muted">Boutique developments designed for lifestyle, growth, and long-term value.</p>
      </div>
      <div>
        <p><strong>Address</strong><br>Suite 1, Level 2/60 Phillip St, Parramatta NSW 2150</p>
      </div>
      <div>
        <p><strong>Contact</strong><br>
        Amit Pall — Director<br>
        0431 389 413<br>
        <a href="mailto:amit@kuberprojects.com.au">amit@kuberprojects.com.au</a></p>
      </div>
      <div>
        <p><strong>Quick links</strong><br>
          <a href="<?php echo esc_url(home_url('/')); ?>">Home</a><br>
          <a href="<?php echo esc_url(home_url('/about/')); ?>">About us</a><br>
          <a href="<?php echo esc_url(home_url('/projects/')); ?>">Our projects</a><br>
          <a href="<?php echo esc_url(home_url('/news/')); ?>">News</a><br>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact us</a>
        </p>
      </div>
    </div>
    <p style="text-align:center;margin-top:16px">© <?php echo date('Y'); ?> Kuber Projects</p>
  </div>
  <?php wp_footer(); ?>
</footer>
</body>
</html>
