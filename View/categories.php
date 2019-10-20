<other-head>CATEGORIES</other-head>
<cate-list>
	<?php foreach($cates as $c){ ?>
	<a href="/categories/<?php echo $c['category'] ?>/<?php echo $c['id'] ?>" class="cate-item">
		<i class="fas fa-<?php echo $c['icon'] ?>"></i>
		<?php echo $c['category'] ?>
	</a>
	<?php } ?>
	
</cate-list>