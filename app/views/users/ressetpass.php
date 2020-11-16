<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row">
  <div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5 mb-5">
      <?php flash('register_success'); ?>
      <h2>Ressetpassword</h2>
      <p>Please fill in your credentials to resset your password.</p>
      <form action="<?php echo URLROOT; ?>/users/ressetpass" method="post">

        <div class="form-group">
          <label>Email:<sup>*</sup></label>
          <input type="text" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
          <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
        </div>

        <div class="form-group">
          <label>Password:<sup>*</sup></label>
          <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
          <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
        </div>

        <div class="form-group">
          <label>Confirm Password:<sup>*</sup></label>
          <input type="password" name="confirm_password" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
          <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
        </div>

        <div class="form-row">
          <div class="col">
            <input type="submit" class="btn btn-dark btn-block" value="Reset">
          </div>

        </div>
    </div>
  </div>
  </form>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>