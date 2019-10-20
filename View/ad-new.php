<?php
	$categories = (new DB())->From("categories")->get();
?>

<ad-header><i class="fas fa-plus"></i> New</ad-header>
<form method="post" enctype="multipart/form-data"
action="/Submit/main.php?n=postAdd">
	<inp-group>
		<label>Title</label>
		<input type="text"  name="eng_title">
	</inp-group>

	<inp-group>
		<label>Tiêu đề</label>
		<input type="text"  name="vi_title">
	</inp-group>

	<inp-group>
		<label>Category</label>
		<select name="category_id">

		<?php foreach($categories as $cate){ ?>

			<option value="<?php echo $cate['id'] ?>">
				<?php echo $cate['category'] ?>
			</option>

		<?php } ?>

		</select>
	</inp-group>

	<inp-group>
		<label>Header</label>
		<textarea name="eng_header"></textarea>
	</inp-group>

	<inp-group>
		<label>Mở bài</label>
		<textarea name="vi_header"></textarea>
	</inp-group>

	<inp-group>
		<label>Content</label>
		
		<textarea name="eng_cont" class="editor" id="eng-cont"></textarea>
	</inp-group>

	<inp-group>
		<label>Nội dung</label>
		<textarea name="vi_cont" class="editor" id="vi-cont"></textarea>
	</inp-group>

	<inp-group>
		<label>Post Image</label>
		<input type="file" name="img">
	</inp-group>

	<inp-group>
		<label>Keywords (SEO)</label>
		<input type="text"  name="keywords">
	</inp-group>

	<inp-group>
		<label>Description (SEO)</label>
		<input type="text"  name="des">
	</inp-group>

	<inp-group>
		<button type="submit">Submit</button>
	</inp-group>
</form>