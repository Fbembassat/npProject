<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row">

  <div class="col-md-6 mx-auto">

    <div class="card card-body bg-light mt-5 mb-5">

      <h2>Lost Password</h2>
      <p>Please fill in .</p>
      <form action="<?php echo URLROOT; ?>/users/request" method="post">

        <div class="form-group">
          <label>Email:<sup>*</sup></label>
          <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
          <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
        </div>

        <div class="row">
          <div class="col">
            <input type="submit" value="Submit" class="btn btn-dark btn-block">
          </div>
          <div class="col">
            <a href="<?php echo URLROOT; ?>/users/signup" class="btn btn-light btn-block">No account ? Signup</a>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <a href="<?php echo URLROOT; ?>/users/request" class="btn btn-light btn-block">Password forgot ?</a>
          </div>

      </form>
    </div>
  </div>
</div>

</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>