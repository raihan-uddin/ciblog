<h2><?= $title ?></h2>

<?php echo  validation_errors()?>
<?php echo  form_open('posts/create')?>
<div class="form-group">
	<label>Title</label>
	<input type="text" class="form-control" placeholder="Add Title" name="title">
</div>
<div class="form-group">
	<label>Body</label>
	<textarea id="editor1" class="form-control" placeholder="Add Body"  name="body"> </textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<?php echo  form_close()?>
