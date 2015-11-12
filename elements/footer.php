<?php defined('C5_EXECUTE') or die("Access Denied.");?>
      <hr>

      <footer>
      <?php
      $a = new GlobalArea('Copyright');
      $a->display();
      ?>
      </footer>
    </div> <!-- /container -->

  </div>

  <?php Loader::element('footer_required'); ?>
  <script src="<?php echo $this->getThemePath(); ?>/assets/js/bootstrap.min.js"></script>
  </body>
</html>
