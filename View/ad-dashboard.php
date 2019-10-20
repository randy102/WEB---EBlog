<?php

//View  and like count
$views = 0;
$likes = 0;
$posts = (new DB())->From("posts")->get();

foreach ($posts as $post) {
	$views += $post['views'];
	$likes += $post['likes'];
}



//Subs
$subs = (new DB())->From("subscribers")->count();

//Posts
$numPost = (new DB())->From("posts")->count();

//Auths
$auths = (new DB())->From("authors")->count();

//Age
$birth = (new DB())->From("info")->get()[0]["site_birth"];

$datetime1 = date_create($birth);
$datetime2 = date_create(date("Y-m-d"));
$age = date_diff($datetime1, $datetime2);
?>

<ad-header><i class="fas fa-tachometer-alt"></i> Dashboard</ad-header>
<stat>
	<stat-item>
		<sym-wrap><i class="fas fa-eye"></i></sym-wrap>
		<number-wrap>
			<stat-name>Views</stat-name>
			<stat-result><?php echo $views ?></stat-result>
		</number-wrap>
	</stat-item>

	<stat-item>
		<sym-wrap><i class="fas fa-users"></i></sym-wrap>
		<number-wrap>
			<stat-name>Subscribers</stat-name>
			<stat-result><?php echo $subs ?></stat-result>
		</number-wrap>
	</stat-item>

	<stat-item>
		<sym-wrap><i class="fas fa-newspaper"></i></sym-wrap>
		<number-wrap>
			<stat-name>Posts</stat-name>
			<stat-result><?php echo $numPost ?></stat-result>
		</number-wrap>
	</stat-item>

	<stat-item>
		<sym-wrap><i class="fas fa-pen"></i></sym-wrap>
		<number-wrap>
			<stat-name>Authors</stat-name>
			<stat-result><?php echo $auths ?></stat-result>
		</number-wrap>
	</stat-item>

	<stat-item>
		<sym-wrap><i class="fas fa-thumbs-up"></i></sym-wrap>
		<number-wrap>
			<stat-name>Likes</stat-name>
			<stat-result><?php echo $likes ?></stat-result>
		</number-wrap>
	</stat-item>

	<stat-item>
		<sym-wrap><i class="fas fa-calendar-alt"></i></sym-wrap>
		<number-wrap>
			<stat-name>Site's age (days)</stat-name>
			<stat-result><?php echo $age->days ?></stat-result>
		</number-wrap>
	</stat-item>
</stat>


<?php
	$mostv = (new DB())->From("posts")->Order("views","DESC")->Lim(5)->get();

	$mostl = (new DB())->From("posts")->Order("likes","DESC")->Lim(5)->get();

	$authorAch = (new DB())->From("authors")->get();

?>

<ad-header><i class="fas fa-trophy"></i> Most Viewed</ad-header>
<table class="ranking">
	<thead>
		<tr>
			<th>Views</th>
			<th>Post</th>
			<th>Author</th>
		</tr>
	</thead>

	<tbody>
		<?php
			foreach($mostv as $mv){
				$author = (new DB())->From("authors")->Id($mv['author_id'])->get()[0]["penname"];
		?>
		<tr>
			<td><?php echo $mv['views'] ?></td>
			<td><?php echo $mv['eng_title'] ?></td>
			<td><?php echo $author ?></td>
		</tr>
		<?php } ?>
	</tbody>

	
</table>

<ad-header><i class="fas fa-trophy"></i> Most Liked</ad-header>
<table class="ranking">
	<thead>
		<tr>
			<th>Likes</th>
			<th>Post</th>
			<th>Author</th>
		</tr>
	</thead>

	<tbody>
		<?php
			foreach($mostl as $ml){
				$author = (new DB())->From("authors")->Id($mv['author_id'])->get()[0]["penname"];
		?>
		<tr>
			<td><?php echo $ml['likes'] ?></td>
			<td><?php echo $ml['eng_title'] ?></td>
			<td><?php echo $author ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>

<ad-header><i class="fas fa-trophy"></i> Author's Achievement</ad-header>
<table class="ranking" id="author-rank">
	<thead>
		<tr>
			<th>Author</th>
			<th>Views</th>
			<th>Likes</th>
			<th>Posts</th>
		</tr>
	</thead>

	<tbody>
		<?php
			foreach ($authorAch as $au) {
				$auPosts = (new DB())->From("posts")->Where("author_id=".$au['id'])->get();
				$auViews = 0;
				$auLikes = 0;
				foreach ($auPosts as $p) {
					$auViews += $p['views'];
					$auLikes += $p['likes'];
				}

				$auPostCount = (new DB())->From("posts")->Where("author_id=".$au['id'])->count();
		?>
		<tr>
			<td><?php echo $au['penname'] ?></td>
			<td><?php echo $auViews ?></td>
			<td><?php echo $auLikes ?></td>
			<td><?php echo $auPostCount ?></td>
		</tr>

		<?php } ?>
	</tbody>
</table>