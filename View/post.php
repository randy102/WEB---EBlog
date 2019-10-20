
<post-wrap>

	<bread>
		<a href="/" class="bread-item">Home</a>

		<i class="fas fa-angle-right"></i>

		<a href="/categories/<?php echo $category['category'] ?>/<?php echo $category['id'] ?>" class="bread-item"><?php echo $category['category'] ?></a>

		<i class="fas fa-angle-right"></i>

		<bread-title><?php echo $post['eng_title'] ?></bread-title>
	</bread>

	<post-title>
		<vi-title id="vi-title"><?php echo $post['vi_title'] ?>
		</vi-title>
		<en-title id="en-title"><?php echo $post['eng_title'] ?></en-title>
	</post-title>
	<post-info>
		<date><i class="far fa-calendar-alt"></i> <?php echo $post['date'] ?></date>

		<social>
			<div class="fb-share-button" data-href="/post/<?php echo $post['link'] ?>/<?php echo $post['id'] ?>" data-layout="button_count">
  			</div>
  			<space></space>
  			<g:plusone size="tall"></g:plusone>
		</social>
		<author>By <a href="/author/<?php echo $author['penname'] ?>/<?php echo $author['id'] ?>"><?php echo $author['penname'] ?></a></author>

	</post-info>

	<post-head>
		<vi-head id="vi-head"><?php echo $post['vi_header'] ?></vi-head>
		<en-head id="en-head"><?php echo $post['eng_header'] ?></en-head>
	</post-head>

	<img src="/Public/img/posts/<?php echo $post['img'] ?>">

	<vi-body id="vi-body">
		<?php echo $post['vi_cont'] ?>
	</vi-body>
	<en-body id="en-body">
		<?php echo $post['eng_cont'] ?>
	</en-body>
	
	<viewer-judge>
		
		<judge-mess>If you find this article useful, give a:</judge-mess>
		<judge-button class="like-click" id="<?php echo $post['id'] ?>"><i class="fas fa-thumbs-up"></i> Like</judge-button>

		
	</viewer-judge>
	
</post-wrap>

<switch-lang>
	<vi-lang id="vi-lang" class="">Tiếng Việt</vi-lang>
	<en-lang id="en-lang" class="active">English</en-lang>
	<lang-button-wrap onclick="changeLang()">
		<lang-button id="button-lang" class="butt-en"></lang-button>
	</lang-button-wrap>
</switch-lang>