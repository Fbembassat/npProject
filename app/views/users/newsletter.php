<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row">
    <div class="col-md-6 mx-auto mb-5">
        <div class="card card-body bg-light mt-5 mb-5">
            <h2>Newsletter</h2>
            <p>Enter your email to suscribe to the Newsletter</p>
            <form action="<?php echo URLROOT; ?>/users/newsletter" method="post">

                <div class="form-group">
                    <label for="email">Email: <sup>*</sup></label>
                    <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['email']; ?>">
                    <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                </div>

                <div class="row">
                    <div class="col">
                        <input type="submit" value="Submit" class="btn btn-dark btn-block">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>