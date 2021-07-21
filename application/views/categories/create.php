<h2><?= $title; ?></h2>

<?= validation_errors(); ?>

<?= form_open_multipart('categories/create'); ?>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" placeholder="Enter name" class="form-control">
        <button type="submit" class="btn btn-info">Submit</button>
    </div>
</form>