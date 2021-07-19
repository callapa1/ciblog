<h2><?= $post['title']; ?></h2>
<small class="post-date">Posted on <?= $post['created_at'] ?></small>
<div class="post-body">
    <?= $post['body']; ?>
</div>

<hr>
<?= form_open('/posts/delete/'.$post['id']); ?>
    <input type="submit" value="Delete" class="btn btn-danger">
    </input>
</form>