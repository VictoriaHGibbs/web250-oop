<?php
require_once('../../private/initialize.php');

require_login();

$page_title = 'Member Menu';

include(SHARED_PATH . '/member_header.php');
?>

<h2>Main Menu</h2>
<ul>

  <?php if ($session->is_admin_logged_in()) { ?>
    <li><a href="<?php echo url_for('/active-record/members/index.php'); ?>">Members</a></li>
  <?php } ?>

  <li><a href="<?php echo url_for('/active-record/birds/index.php'); ?>">Active Bird Records list</a></li>


</ul>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
