<h2><?= $post['title']; ?></h2>
<small class="post-date">Posted on <?= $post['created_at'] ?></small>

<img src="<?= site_url(); ?>assets/images/posts/<?= $post['post_image']; ?>">
<div class="post-body">
    <?= $post['body']; ?>
</div>

<hr>
<a class="btn btn-info" href="edit/<?= $post['slug']; ?>">Edit</a>
<?= form_open('/posts/delete/'.$post['id']); ?>
    <input type="submit" value="Delete" class="btn btn-danger" />
</form>
<hr>
<h3>Comments</h3>
<?php if($comments): ?>
    <?php foreach($comments as $comment): ?>
        <h5><?= $comment['body']; ?> [by <strong><?= $comment['name']; ?></strong>]</h5>
    <?php endforeach; ?>
<?php else: ?>
    <p>No comments to display</p>
<?php endif; ?>

<hr>
<h3>Add Comment</h3>

<?= validation_errors(); ?>

<?= form_open('comments/create/'.$post['id']); ?>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" />
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" />
    </div>
    <div class="form-group">
        <label>Body</label>
        <textarea name="body" class="form-control"></textarea>
        <input type="hidden" name="slug" value="<?= $post['slug']; ?>" />
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>