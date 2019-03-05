<h2><?= $title ?></h2>

<?php echo validation_errors() ?>
<?php echo form_open_multipart('posts/create') ?>
<div class="form-group">
	<label>Title</label>
	<input type="text" class="form-control" placeholder="Add Title" name="title">
</div>
<div class="form-group">
	<label>Body</label>
	<textarea id="editor1" class="form-control" placeholder="Add Body" name="body"> </textarea>
</div>
<div class="form-group">
	<label>Category</label>
	<select name="category_id" class="form-control">
		<?php
		var_dump($categories);
		foreach ($categories as $category):
			?>
			<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
		<?php
		endforeach;
		?>
	</select>
</div>
<div class="form-group">
	<label>Upload Image</label>
	<input type="file" name="userfile" size="20">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close() ?>
