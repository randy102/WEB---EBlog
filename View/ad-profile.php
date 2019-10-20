<?php
	 
	//$id varible is from View parameter.
	$author = (new DB())->From("authors")->Id($id)->get();

	$au = $author[0];
?>

<ad-header><i class="fas fa-user"></i> Profile</ad-header>
<ad-ava>
	<img src="/Public/img/avatar/<?php echo $au["avar"] ?>">
</ad-ava>
<form method="post" enctype="multipart/form-data"
action="/Submit/main.php?n=profileUpdate&id=<?php echo $id ?>">
	<input type="hidden" name="old-avar" value="<?php echo $au['avar'] ?>">

	<inp-group>
		<label>Change Avatar</label>
		<input type="file" name="avar">
	</inp-group>

	<inp-group>
		<label>Pen-name:</label>
		<input type="text" value="<?php echo $au['penname'] ?>" name="penname">
	</inp-group>

	<inp-group>
		<label>Full Name:</label>
		<input type="text" value="<?php echo $au['fullname'] ?>" name="fullname">
	</inp-group>

	<inp-group>
		<label>Email</label>
		<input type="email" value="<?php echo $au['email'] ?>"  name="email">
	</inp-group>

	<inp-group>
		<label>Password</label>
		<input type="password" value="<?php echo $au['password'] ?>"  name="password">
	</inp-group>

	<inp-group>
		<label>Birth Date:</label>
		<input type="date" value="<?php echo $au['birthdate'] ?>" name="birthdate">
	</inp-group>

	<inp-group>
		<label>Quote:</label>
		<input type="text" value="<?php echo $au['quote'] ?>" name="quote">
	</inp-group>

	<inp-group>
		<label>Facebook:</label>
		<input type="text" value="<?php echo $au['facebook'] ?>" name="facebook">
	</inp-group>

	<inp-group>
		<label>About me</label>
		<textarea name="about"><?php echo $au['about'] ?></textarea>
	</inp-group>
	
	<inp-group>
		<button type="submit">Save</button>
	</inp-group>
</form>




