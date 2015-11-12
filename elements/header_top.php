<?php
defined('C5_EXECUTE') or die("Access Denied.");
?>
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
