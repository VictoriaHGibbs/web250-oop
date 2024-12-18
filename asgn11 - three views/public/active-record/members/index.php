<?php require_once('../../../private/initialize.php'); ?>
<?php require_admin_login();
?>
<?php

// Find all members;
$members = Member::find_all();

?>
<?php $page_title = 'Members'; ?>
<?php include(SHARED_PATH . '/member_header.php');
?>

<div id="content">
  <div>
    <h1>Members</h1>

    <div>
      <?php if ($session->is_admin_logged_in()) { ?>
        <a href="<?php echo url_for('/active-record/members/new.php'); ?>">Add Member</a>
      <?php } ?>
    </div>

    <table class="list">
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name </th>
        <th>Email</th>
        <th>User Name ID</th>
        <th>User Level</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>


      </tr>

      <?php foreach ($members as $member) { ?>
        <tr>
          <td><?php echo h($member->id); ?></td>
          <td><?php echo h($member->first_name); ?></td>
          <td><?php echo h($member->last_name); ?></td>
          <td><?php echo h($member->email); ?></td>
          <td><?php echo h($member->username); ?></td>
          <td><?php echo h($member->user_level); ?></td>

          <td><a class="action" href="<?php echo url_for('/active-record/members/show.php?id=' . h(u($member->id))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/active-record/members/edit.php?id=' . h(u($member->id))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/active-record/members/delete.php?id=' . h(u($member->id))); ?>">Delete</a></td>
        </tr>
      <?php } ?>
    </table>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
