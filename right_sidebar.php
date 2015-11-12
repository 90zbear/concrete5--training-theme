<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php');
?>

  <div id="main" class="container">
    <div class="row">
      <div class="col-sm-9">
        <?php
        $a = new Area('Main');
        $a->display($c);
        ?>
      </div>
      <div class="col-sm-3">
        <?php
        $a = new Area('side_bar');
        $a->display($c);
        ?>
      </div>
    </div>
</div>
<?php $this->inc('elements/footer.php'); ?>
