<?php
	 
	$author = (new DB())->From("authors")->Id($id)->get();

	$au = $author[0];
?>
<ad-header>Author Edit</ad-header>

<ad-ava>
	<img src="/Public/img/avatar/<?php echo $au['avar'] ?>">
</ad-ava>

	<inp-group>
		<label>Pen-name:</label>
		<input type="text" value="<?php echo $au['penname'] ?>" disabled>
	</inp-group>

	<inp-group>
		<label>Full Name:</label>
		<input type="text" value="<?php echo $au['fullname'] ?>" disabled>
	</inp-group>

	<inp-group>
		<label>Email</label>
		<input type="email" value="<?php echo $au['email'] ?>"  disabled>
	</inp-group>

	<inp-group>
		<label>Birth Date:</label>
		<input type="date" value="<?php echo $au['birthdate'] ?>"disabled>
	</inp-group>

	<inp-group>
		<label>Quote:</label>
		<input type="text" value="<?php echo $au['quote'] ?>" disabled>
	</inp-group>

	<inp-group>
		<label>Facebook:</label>
		<input disabled type="url" value="<?php echo $au['facebook'] ?>">
	</inp-group>

	<inp-group>
		<label>About me</label>
		<textarea disabled><?php echo $au['about'] ?></textarea>
	</inp-group>

	
<inp-group>
	<button type="submit">Save</button>
	<a  class="confirm" href="/Submit/main.php?n=delete&t=authors&redir=Authors&id=<?php echo $au["id"] ?>">
		<button>Delete</button>
	</a>

	<a href="/admincp/Authors"><button>Back</button></a>
</inp-group>
