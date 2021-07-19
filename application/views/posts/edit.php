<h2><?= $title; ?></h2>

<?= validation_errors(); ?>

<?= form_open('posts/update'); ?>
    <input type="hidden" name="id" value="<?= $post['id']; ?>" />
    <div class="form-group">
        <label>Title</label>
        <input value="<?= $post['title']; ?>" type="text" class="form-control" name="title" placeholder="Add Title">
    </div>
    <div class="form-group">
        <label>Body</label>
        <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"><?= $post['body']; ?>
        </textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>