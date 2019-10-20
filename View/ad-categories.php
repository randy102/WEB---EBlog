<ad-header><i class="fas fa-star"></i> Categories</ad-header>
<form action="/Submit/main.php?n=categoryAdd" method="post">
	<inp-group>
		<label>Category's name</label>
		<input type="text" name="category">
	</inp-group>

	<inp-group>
		<label>Icon Class</label>
		<input type="text" name="icon">
	</inp-group>
	<inp-group>
		<button type="submit">Add</button>
	</inp-group>
</form>


<?php
	$categories = (new DB())->From("categories")->get();
?>


<table id="cate-list" class="row-border">
	<thead>
		<tr>
			<th>Category</th>
			<th>Icon</th>
			<th>Date</th>
			<th>Posts</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			foreach($categories as $cate){ 
				$numPost = (new DB())->From("posts")->Where("category_id=".$cate['id'])->count();
		?>	
		<tr>
			<td><?php echo $cate['category'] ?></td>
			<td><i class="fas fa-<?php echo $cate['icon'] ?>"></i></td>
			<td><?php echo $cate['date'] ?></td>
			<td><?php echo $numPost ?></td>
			<td><a 
				href="/admincp/Category-edit/<?php echo $cate["id"] ?>" class="list-cog"><i class="fas fa-pen"></i></a></td>

			<td><a href="/Submit/main.php?n=delete&t=categories&redir=Categories&id=<?php echo $cate['id'] ?>" class="list-cog confirm">
				<i class="fas fa-trash"></i>
			</td>
		</tr>
	<?php } ?>	

		
	</tbody>
</table>