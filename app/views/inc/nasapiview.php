<?php require APPROOT . '/views/inc/nasapi.php'; ?>

<div class="container-fluid">

    <h2 class="text-white text-center mt-3 mb-3"><?php echo $data['title']; ?></h2>

    <p class="text-white text-center"><?php echo $data['date']; ?> New image everyday !</p>

    <div class="text-center">
        <img src="<?php echo $data['url']; ?>" alt="One image from the universe per day">
    </div>

    <p class="text-white text-center mt-5 mb-5"><?php echo $data['explanation']; ?></p>

</div>