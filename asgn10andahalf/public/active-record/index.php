<?php
require_once('../private/initialize.php');

require_login();

$page_title = 'Member Menu';

include(SHARED_PATH . '/member_header.php');
?>

<h2>Main Menu</h2>
<ul>
  <li><a href="<?php echo url_for('/active-record/birds/index.php'); ?>">Active Records list</a></li>

  <li><a href="<?php echo url_for('/active-record/members/index.php'); ?>">Members</a></li>

</ul>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
