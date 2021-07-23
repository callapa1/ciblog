<h2><?= $title; ?></h2>
<?= validation_errors(); ?>

<?= form_open('users/register'); ?>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" placeholder="Name" class="form-control" />
    </div>
    <div class="form-group">
        <label>ZIP code</label>
        <input type="text" name="zipcode" placeholder="Zipcode" class="form-control" />
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" placeholder="Email" class="form-control" />
    </div>
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" placeholder="Username" class="form-control" />
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="Password" class="form-control" />
    </div>
    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" name="password2" placeholder="Confirm Password" class="form-control" />
    </div>

    <button type="submit" class="btn btn-info">Submit</button>
<?= form_close(); ?>