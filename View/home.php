<!--Newest Loop-->
<topic>
	<top-title><i class="fas fa-rocket"></i> Newest</top-title>
	<items-wrap>

		<?php
			
			foreach($new as $n => $post){
				//Loop posts of Category

				if($n == 0){
				//If is first item
		?>

		<a class="main-item" href="/post/<?php echo $post['link'] ?>/<?php echo $post['id'] ?>">
			<item-left>
				<img src="/Public/img/posts/<?php echo $post['img'] ?>">
			</item-left>
			<item-right>
				<div class="item-title"><?php echo $post['eng_title'] ?></div>
				<item-head><?php echo $post['eng_header'] ?></item-head>
				<date><i class="far fa-calendar-alt"></i> <?php echo $post['date'] ?></date>
			</item-right>
		</a>

		<?php } else{?>

		<a class="item" href="/post/<?php echo $post['link'] ?>/<?php echo $post['id'] ?>">
			<img src="/Public/img/posts/<?php echo $post['img'] ?>">
			<div class="item-title"><?php echo $post['eng_title'] ?></div>
			
			<date><i class="far fa-calendar-alt"></i> <?php echo $post['date'] ?></date>
		</a>

		<?php 
			}//end for If 
		} //end for loop
		?>
		
		
	</items-wrap>
</topic>
<!--/Newest Loop-->

<!--Categories Loop-->
<?php 
	foreach($cates as $cate){
	//Loop each Category
		$postsOfCate = (new DB())->From("posts")->Where("category_id=".$cate['id']." AND status=1")->count();
		if($postsOfCate == 0) continue;
?>
<topic>
	<top-title><i class="fas fa-<?php echo $cate['icon'] ?>"></i> <?php echo $cate['category'] ?></top-title>
	<items-wrap>

		<?php
			$posts = (new DB())->From("posts")->Where("category_id=".$cate['id']." AND status=1 ")->Order("id","DESC")->Lim(4)->get();
			foreach($posts as $n => $post){
				//Loop posts of Category

				if($n == 0){
				//If is first item
		?>

		<a class="main-item" href="/post/<?php echo $post['link'] ?>/<?php echo $post['id'] ?>">
			<item-left>
				<img src="/Public/img/posts/<?php echo $post['img'] ?>">
			</item-left>
			<item-right>
				<div class="item-title"><?php echo $post['eng_title'] ?></div>
				<item-head><?php echo $post['eng_header'] ?></item-head>
				<date><i class="far fa-calendar-alt"></i> <?php echo $post['date'] ?></date>
			</item-right>
		</a>

		<?php } else{?>

		<a class="item" href="/post/<?php echo $post['link'] ?>/<?php echo $post['id'] ?>">
			<img src="/Public/img/posts/<?php echo $post['img'] ?>">
			<div class="item-title"><?php echo $post['eng_title'] ?></div>
			
			<date><i class="far fa-calendar-alt"></i> <?php echo $post['date'] ?></date>
		</a>

		<?php 
			}//end for If 
		} //end for loop
		?>
		
		
	</items-wrap>
</topic>

<?php } ?>

<!--/Categories Loop-->