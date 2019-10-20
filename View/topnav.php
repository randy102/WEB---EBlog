<social>
	<?php
		$info = (new DB())->From("info")->get()[0];
	?>
	<a rel="nofollow" target="_blank" href="<?php echo $info['facebook'] ?>">
		<i class="fab fa-facebook-f"></i>
	</a>

	<a rel="nofollow" target="_blank"  href="<?php echo $info['google'] ?>">
		<i class="fab fa-google-plus-g"></i>
	</a>

	<a rel="nofollow" target="_blank"  href="<?php echo $info['twitter'] ?>">
		<i class="fab fa-twitter"></i>
	</a>

	<a rel="nofollow" target="_blank"  href="<?php echo $info['youtube'] ?>">
		<i class="fab fa-youtube"></i>
	</a>

	<a id="top-login" href="/adlogin">
		<?php if(!isAdmin()){ ?>
		<i class="fas fa-user"></i> Login
		<?php }else echo "Hi ".ssGet("penname");  ?>
	</a>
</social>

<nav>
	
	<menu-wrap>
		<logo>
			<logo-wrap>
				<img src="/Public/img/Elogo.png" alt="">
				<logo-text>trans <blog-text>Blog</block-text></logo-text>
			</logo-wrap>
		</logo>
		<a href="/about">About</a>
		<a href="/contact">Contact</a>
		<a href="/categories">Category</a>
		<a href="/home">Home</a>
	</menu-wrap>
	<nav-quote>
		"Life is a story,<br> make yours the best seller."
	</nav-quote>

	<blur></blur>
</nav>

<wrapper>	
		<content>
