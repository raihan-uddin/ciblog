<h2><?php echo $post['title']; ?></h2>
<img class="post-thumb img-thumbnail"
	 src="<?php echo base_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">

<small class="img-fluid">Posted on: <?php echo $post['created_at']; ?></small><br>

<div class="post-body">
	<?php echo $post['body'] ?>
</div>

<hr>

<a class="btn btn-secondary pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>

<?php echo form_open('/posts/delete/' . $post['id']); ?>
<input type="submit" class="btn btn-danger" value="Delete">
<?php echo form_close() ?>
