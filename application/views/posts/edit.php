<h2><?= $title ?></h2>

<?php echo  validation_errors()?>
<?php echo  form_open('posts/update')?>
<input type="hidden" name="id" value="<?php echo $post['id'] ?>"
<div class="form-group">
	<label>Title</label>
	<input type="text" class="form-control" placeholder="Add Title" name="title" value="<?php echo $post['title'] ?>">
</div>
<div class="form-group">
	<label>Body</label>
	<textarea class="form-control" id="editor1" placeholder="Add Body"  name="body">value="<?php echo $post['body'] ?> </textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<?php echo  form_close()?>
