<html lang="en">
    <head>
        <title>ciBLOG</title>
        <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css" />
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css" />
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ciBlog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url(); ?>">Home
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>about">About</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url(); ?>posts">Posts
                    </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?= base_url(); ?>posts/create">Create Post</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">