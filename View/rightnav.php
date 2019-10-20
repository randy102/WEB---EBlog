</content>
<?php
	$populars = (new DB())->From("posts")->Where("status=1")->Order("views","DESC")->Lim(5)->get();
?>
<right-nav>

	<popular>
		<right-head><i class="fab fa-hotjar"></i> Popular</right-head>
		<items-wrap>
			<?php
				foreach($populars as $post){
			?>
			<a class="item rightnav-item" href="/post/<?php echo $post['link'] ?>/<?php echo $post['id'] ?>">
				<img src="/Public/img/posts/<?php echo $post['img'] ?>">
				<div class="item-title"><?php echo $post['eng_title'] ?></div>
				
				<date><i class="far fa-calendar-alt"></i> <?php echo $post['date'] ?></date>
			</a>
			<?php } ?>
		</items-wrap>
	</popular>



	<subscribe>
		<right-head>Subscribe</right-head>

			<p id="sub-cont"></p>

			<input type="email" id="sub-inp" placeholder="Nhập email vào đây...">
			<button id="sub-click">Gửi</button>

			
		</div>
	</subscribe>

	<fanpage>
	<right-head>Fanpage</right-head>
		<div class="fb-page" data-href="https://www.facebook.com/Etrans-Blog-218962742114961/?modal=admin_todo_tour" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-height="100%">
			<blockquote cite="https://www.facebook.com/Etrans-Blog-218962742114961/?modal=admin_todo_tour" class="fb-xfbml-parse-ignore">
				<a href="https://www.facebook.com/Etrans-Blog-218962742114961/?modal=admin_todo_tour">Etrans Blog</a>
			</blockquote>
		</div>
	</fanpage>
</right-nav>