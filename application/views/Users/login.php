<?= form_open('users/login'); ?>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1 class="text-center"><?= $title; ?></h1>
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus/>
                <input type="password" name="password" class="form-control" placeholder="Enter Password" requried />
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
<?= form_close(); ?>