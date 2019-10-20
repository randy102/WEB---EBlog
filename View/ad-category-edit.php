<?php 
	$cate = (new DB())->From("categories")->Id($id)->get()[0];
?>
<ad-header><i class="fas fa-star"></i>Edit Category</ad-header>
<form action="/Submit/main.php?n=categoryEdit&id=<?php echo $cate['id'] ?>" method="post">
	<inp-group>
		<label>Category's name</label>
		<input type="text" name="category" value="<?php echo $cate['category'] ?>">
	</inp-group>

	<inp-group>
		<label>Icon Class</label>
		<input type="text" name="icon" value="<?php echo $cate['icon'] ?>">
	</inp-group>
	<inp-group>
		<button type="submit">Update</button>
	</inp-group>
</form>