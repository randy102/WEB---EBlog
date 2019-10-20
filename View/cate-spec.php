<other-head><i class="fas fa-<?php echo $category['icon'] ?>"></i> <?php echo $category['category'] ?></other-head>
<topic>
	<items-wrap>
		<?php foreach($posts as $post){ ?>
		<a class="item" href="/post/<?php echo $post['link'] ?>/<?php echo $post['id'] ?>">
			<img src="/Public/img/posts/<?php echo $post['img'] ?>">
			<div class="item-title"><?php echo $post['eng_title'] ?></div>
			<date><i class="far fa-calendar-alt"></i> <?php echo $post['date'] ?></date>
		</a>

		<?php } ?>
	</items-wrap>
</topic>
