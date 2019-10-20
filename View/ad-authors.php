<?php 
	$authors = (new DB())->From("authors")->get();
?>

<ad-header><i class="fas fa-pen-nib"></i> Authors</ad-header>

<success><?php error() ?></success>

<table id="author-list" class="row-border">
	<thead>
		<tr>
			<th>Email</th>
			<th>Full Name</th>
			<th>Pen-name</th>
			<th>Posts</th>
			<th>Likes</th>
			<th>Views</th>
			<th>Date</th>
			<th>Position</th>
			<th>Edit</th>
		</tr>
	</thead>
	<tbody>
	<?php
		foreach($authors as $author){

			//Check Position
			$position = $author["position"] ? "Admin" : "Author";

			$post = (new DB())->From("posts")->Where("author_id=".$author['id']);

			$numPost = $post->count();

			$posts = $post->get();

			$numLikes = 0;
			$numViews = 0;

			foreach ($posts as $p) {
				$numLikes += $p['likes'];
				$numViews += $p['views'];
			}
	?>	
		<tr>
			<td><?php echo $author["email"] ?></td>
			<td><?php echo $author["fullname"] ?></td>
			<td><?php echo $author["penname"] ?></td>
			<td><?php echo $numPost ?></td>
			<td><?php echo $numLikes ?></td>
			<td><?php echo $numViews ?></td>
			<td><?php echo $author["date"] ?></td>
			<th>
				<select position id="<?php echo $author['id'] ?>">
					<option <?php if(!$author['position']) echo "selected"?> value=0>Author</option>
					<option <?php if($author['position']) echo "selected"?> value=1>Admin</option>
				</select>
			</th>
			<td><a 
				href="/admincp/Author-edit/<?php echo $author["id"] ?>" 
				class="list-cog"><i class="fas fa-pen"></i></a></td>
		</tr>
	<?php } ?>
	</tbody>
</table>

<ad-header>Add</ad-header>
<form method="post" action="/Submit/main.php?n=authorAdd">
	<inp-group>
		<label>Email</label>
		<input type="email" name="email">
	</inp-group>

	<inp-group>
		<label>Position</label>
		<select name="position">
			<option value=0>Author</option>
			<option value=1>Admin</option>
		</select>
	</inp-group>

	<inp-group>
		<button>Submit</button>
	</inp-group>
</form>