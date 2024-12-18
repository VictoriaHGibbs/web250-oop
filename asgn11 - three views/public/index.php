<?php
require_once('../private/initialize.php');

// require_login();


$page_title = 'Home Menu';

include(SHARED_PATH . '/public_header.php');
?>

<ul>
  <li><a href="<?php echo url_for('/birds.php'); ?>">View Our List of WNC Birds</a></li>

  <li><a href="<?php echo url_for('/about.php'); ?>">About Us</a></li>

  <li><a href="<?php echo url_for('/active-record/login.php'); ?>">Member Login</a></li>

  <li><a href="<?php echo url_for('/active-record/signup.php'); ?>">Sign up</a></li>

</ul>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
