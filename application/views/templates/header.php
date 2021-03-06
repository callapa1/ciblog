<html lang="en">
    <head>
        <title>ciBLOG</title>
        <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css" />
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css" />
        <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
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
                    <a class="nav-link" href="<?= base_url(); ?>">Home</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>about">About</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>posts">Posts</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>categories">Categories</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="btn btn-primary"><a href="<?= base_url(); ?>posts/create">Create Post</a></li>
                    <?php if(!$this->session->userdata('logged_in')): ?>
                        <li class="btn btn-primary"><a href="<?= base_url(); ?>users/login">Login</a></li>
                        <li class="btn btn-primary"><a href="<?= base_url(); ?>users/register">Register</a></li>
                    <?php endif; ?>
                        <li class="btn btn-primary"><a href="<?= base_url(); ?>categories/create">Create Category</a></li>
                    <?php if($this->session->userdata('logged_in')): ?>
                        <li class="btn btn-primary"><a href="<?= base_url(); ?>users/logout">Logout</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <!-- Flash messages -->
        <?php if($this->session->flashdata('user_registered')): ?>
            <?= '<p class="alert alert-success">' .$this->session->flashdata('user_registered') .'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('post_created')): ?>
            <?= '<p class="alert alert-success">' .$this->session->flashdata('user_registered') .'</p>'; ?>
        <?php endif; ?>
        
        <?php if($this->session->flashdata('post_updated')): ?>
            <?= '<p class="alert alert-success">' .$this->session->flashdata('user_registered') .'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('post_deleted')): ?>
            <?= '<p class="alert alert-danger">' .$this->session->flashdata('user_registered') .'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('category_created')): ?>
            <?= '<p class="alert alert-success">' .$this->session->flashdata('user_registered') .'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('login_failed')): ?>
            <?= '<p class="alert alert-danger">' .$this->session->flashdata('login_failed') .'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedin')): ?>
            <?= '<p class="alert alert-success">' .$this->session->flashdata('user_loggedin') .'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedout')): ?>
            <?= '<p class="alert alert-info">' .$this->session->flashdata('user_loggedout') .'</p>'; ?>
        <?php endif; ?>