<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
        <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
            efficiently about what’s most interesting in this post’s contents.</p>
        <p class="lead mb-0"><a href="<?php echo URLROOT; ?>/posts/index" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
</div>

<div class="row mb-2">
    <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-dark">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-warning">The Sun</strong>
                <h3 class="mb-0 text-white">Featured post</h3>
                <div class="mb-1 text-white">Nov 12</div>
                <p class="card-text mb-auto text-white">This is a wider card with supporting text below as a natural
                    lead-in to additional content.</p>
                <a href="<?php echo URLROOT; ?>/posts/index" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <svg class="sun bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                </svg>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-dark">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-danger">Mars</strong>
                <h3 class="mb-0 text-white">Featured post</h3>
                <div class="mb-1 text-white">Nov 12</div>
                <p class="card-text mb-auto text-white">This is a wider card with supporting text below as a natural
                    lead-in to additional content.</p>
                <a href="<?php echo URLROOT; ?>/posts/index" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <svg class="mars bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                </svg>
            </div>
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-dark">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-muted">Saturn</strong>
                <h3 class="mb-0 text-white">Featured post</h3>
                <div class="mb-1 text-white">Nov 12</div>
                <p class="card-text mb-auto text-white">This is a wider card with supporting text below as a natural
                    lead-in to additional content.</p>
                <a href="<?php echo URLROOT; ?>/posts/index" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <svg class="saturn bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                </svg>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-dark">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-info">Mercury</strong>
                <h3 class="mb-0 text-white">Featured post</h3>
                <div class="mb-1 text-white">Nov 12</div>
                <p class="card-text mb-auto text-white">This is a wider card with supporting text below as a natural
                    lead-in to additional content.</p>
                <a href="<?php echo URLROOT; ?>/posts/index" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <svg class="mercury bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                </svg>
            </div>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/inc/nasapiview.php'; ?>

<?php require APPROOT . '/views/inc/footer.php'; ?>