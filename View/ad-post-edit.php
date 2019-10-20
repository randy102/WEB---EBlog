<?php
	$post = (new DB())->From("posts")->Id($id)->get();
	$categories = (new DB())->From("categories")->get();
	$p = $post[0];
?>

<ad-header><i class="fas fa-plus"></i> Edit</ad-header>
<success><?php error() ?></success>

<form method="post" enctype="multipart/form-data"
action="/Submit/main.php?n=postUpdate&id=<?php echo $id ?>">
	<inp-group>
		<label>Title</label>
		<input type="text" name="eng_title" value="<?php echo $p['eng_title'] ?>">
	</inp-group>

	<inp-group>
		<label>Tiêu đề</label>
		<input type="text"  name="vi_title" value="<?php echo $p['vi_title'] ?>">
	</inp-group>

	<inp-group>
		<label>Category</label>
		<select name="category_id">

		<?php foreach($categories as $cate){ ?>

			<option 
				<?php //Show Post's category 
					if($p['category_id'] == $cate['id']) echo "selected" 
				?> 

				value="<?php echo $cate['id'] ?>">
				<?php echo $cate['category'] ?>
			</option>

		<?php } ?>

		</select>
	</inp-group>

	<inp-group>
		<label>Header</label>
		<textarea name="eng_header"><?php echo $p['eng_header'] ?></textarea>
	</inp-group>

	<inp-group>
		<label>Mở bài</label>
		<textarea name="vi_header"><?php echo $p['vi_header'] ?></textarea>
	</inp-group>

	<inp-group>
		<label>Content</label>
		<textarea name="eng_cont" class="editor" id="eng-cont"><?php echo $p['eng_cont'] ?></textarea>
	</inp-group>

	<inp-group>
		<label>Nội dung</label>
		<textarea name="vi_cont" class="editor" id="vi-cont"><?php echo $p['vi_cont'] ?></textarea>
	</inp-group>

	<inp-group>
		<label>Post Image</label>
		<img src="/Public/img/posts/<?php echo $p['img'] ?>" alt="">
	</inp-group>


	<inp-group>
		<label>Change</label>
		<input type="file" name="img">
	</inp-group>

	<input type="hidden" name="old-img" value="<?php echo $p['img'] ?>">

	<inp-group>
		<label>Keywords (SEO)</label>
		<input type="text"  name="keywords" value="<?php echo $p['keywords'] ?>">
	</inp-group>

	<inp-group>
		<label>Description (SEO)</label>
		<input type="text"  name="des" value="<?php echo $p['des'] ?>">
	</inp-group>

	<inp-group>
		<button type="submit">Update</button>
		<button><a  class="confirm" href="/Submit/main.php?n=postDelete&id=<?php echo $p["id"] ?>">
		Delete
		</a></button>
	</inp-group>
</form>