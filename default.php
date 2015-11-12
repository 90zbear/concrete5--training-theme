<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- hoge -->
    <?php Loader::element('header_required'); ?>
    <link rel="stylesheet" type="text/css" href="<?=$view->getStylesheet('bootstrap.less')?>">
    <!-- hoge -->

<style>
#main{
  padding-top:48px;
}
</style>

<?php
$u = new User();
// ログイン中のみ有効
if ($u->isRegistered()) { ?>
<style>
nav.navbar{
    margin-top:48px;
}
</style>
<?php } ?>

  </head>

  <body>

  <div id="wrap" class="<?php echo $c->getPageWrapperClass()?> c5wrap">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                <?php
                $a = new GlobalArea('Header Site Title');
                $a->display();
                ?>
          <!-- <a class="navbar-brand" href="#">Project name</a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
                <?php
                $a = new GlobalArea('Header Navigation');
                $a->display();
                ?>
        </div>
<!--           <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div> --><!--/.navbar-collapse -->
      </div>
    </nav>

  <div id="main" class="container">
<?php
$a = new Area('Main');
$a->display($c);
?>
</div>
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
