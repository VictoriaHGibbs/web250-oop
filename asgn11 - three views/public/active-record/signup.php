<?php

require_once('../../private/initialize.php');

if (is_post_request()) {

  // Create record using post parameters
  $args = $_POST['member'];
  $member = new Member($args);
  $result = $member->save();


  if ($result === true) {
    $new_id = $member->id;
    $session->message('Welcome! Your membership was created successfully.');
    redirect_to(url_for('/active-record/birds/index.php'));
  } else {
    // show errors
  }
} else {
  // display the form
  $member = new Member;
}

?>

<?php $page_title = 'Sign Up'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/index.php'); ?>">&laquo; Back to Menu</a>

  <div>
    <h1>Sign Up and Become a Member</h1>

    <?php echo display_errors($member->errors);
    ?>

    <form action="<?php echo url_for('/active-record/signup.php'); ?>" method="post">

      <?php include('members/form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Sign up" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
