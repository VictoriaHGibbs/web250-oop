<?php
if (!isset($page_title)) {
  $page_title = 'Member Area';
}
?>

<!doctype html>

<html lang="en">

<head>
  <title>WNC Birds - <?php echo h($page_title); ?></title>
  <meta charset="utf-8">
  <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css'); ?>" />
</head>

<body>

  <?php if ($session->is_admin_logged_in()) { ?>
    <header>
      <h1>WNC Birds Admin Area</h1>
    </header>
  <?php } else { ?>
    <header>
      <h1>WNC Birds Members Area</h1>
    </header>
  <?php } ?>
  <navigation>
    <ul>
      <?php if ($session->is_logged_in()) { ?>
        <li>User: <?php echo $session->username; ?></li>
        <li><a href="<?php echo url_for('/active-record/index.php'); ?>">Menu</a></li>
        <li><a href="<?php echo url_for('/active-record/logout.php'); ?>">Logout</a>, <?php echo $session->username; ?></li>
      <?php } ?>
    </ul>
  </navigation>

  <?php echo display_session_message(); ?>
