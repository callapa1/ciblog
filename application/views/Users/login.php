<?= form_open('users/login'); ?>
<div class="row">
    <div class="col-sm-4">
        <h1 class="text-center"><?= $title; ?></h1>
        <?= validation_errors(); ?>
        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus />
            <input type="password" name="password" class="form-control" placeholder="Enter Password" required />
            <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </div>
</div>
<?= form_close(); ?>