<?php 
	if(!isBoss()) redirAd("Dashboard");
	$i = (new DB())->From("info")->get()[0];
?>
<ad-header><i class="fas fa-clipboard-list"></i> Website Information</ad-header>

<success>
<?php error(); ?>     
</success>

<form method="post" action="/Submit/main.php?n=infoUpdate&id=0">
	<inp-group>
		<label><i class="fas fa-phone"></i> Phone</label>
		<input type="tel" name="phone" value="<?php echo $i['phone'] ?>">
	</inp-group>

	<inp-group>
		<label><i class="fas fa-envelope"></i> Email</label>
		<input type="email" name="email" value="<?php echo $i['email'] ?>">
	</inp-group>

	<inp-group>
		<label><i class="fab fa-facebook-square"></i> Facebook</label>
		<input type="text" name="facebook" value="<?php echo $i['facebook'] ?>">
	</inp-group>

	<inp-group>
		<label><i class="fab fa-youtube"></i> Youtube</label>
		<input type="text" name="youtube" value="<?php echo $i['youtube'] ?>">
	</inp-group>

	<inp-group>
		<label><i class="fab fa-google-plus-g"></i> Google+</label>
		<input type="text" name="google" value="<?php echo $i['google'] ?>">
	</inp-group>

	<inp-group>
		<label><i class="fab fa-twitter"></i> Twitter</label>
		<input type="text" name="twitter" value="<?php echo $i['twitter'] ?>">
	</inp-group>

	<inp-group>
		<label>Site's Birth Date</label>
		<input type="date" value="<?php echo $i['site_birth'] ?>" name="site_birth">
	</inp-group>

	<inp-group>
		<label>About Us</label>
		<textarea name="about"><?php echo $i['about'] ?></textarea>
	</inp-group>

	

	<inp-group>
		<label>Copyright</label>
		<textarea name="copy"><?php echo $i['copy'] ?></textarea>
	</inp-group>

	<inp-group>
		<button>Save</button>
	</inp-group>
</form>