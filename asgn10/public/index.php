<?php
require_once('../private/initialize.php');

// require_login();
require_login();

$page_title = 'Member Menu';

include(SHARED_PATH . '/public_header.php');
?>

<ul>
  <li><a href="<?php echo url_for('/birds.php'); ?>">View Our List of WNC Birds</a></li>
  <li><a href="<?php echo url_for('/active-record/index.php'); ?>">Active Records list</a></li>
  <li><a href="<?php echo url_for('/members/index.php'); ?>">Members</a></li>
  <li><a href="<?php echo url_for('/about.php'); ?>">About Us</a></li>
</ul>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
