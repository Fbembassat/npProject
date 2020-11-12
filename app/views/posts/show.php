<?php require APPROOT . '/views/inc/header.php'; ?>
<a href="<?php echo URLROOT; ?>/posts" class="btn btn-light mt-5"><i class="fa fa-backward"></i> Back</a>
<h1 class="text-white mt-5"><?php echo $data['post']->title; ?></h1>
<div class="bg-dark p-2 mb-3 text-info">
    Written by <?php echo $data['user']->name; ?> on <?php echo $data['post']->created_at; ?>
</div>
<p class="card-text text-white"><?php echo $data['post']->body; ?></p>

<?php if ($data['post']->user_id == $_SESSION['user_id']) : ?>
    <hr>
    <a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>" class="btn btn-dark mb-5">Edit</a>

    <form class="pull-right" action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>" method="post">
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
<?php endif; ?>

<?php require APPROOT . '/views/inc/footer.php'; ?>