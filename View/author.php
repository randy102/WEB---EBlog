<quote>
	<?php echo $auth['quote'] ?>
</quote>

<avatar>
	<img src="/Public/img/avatar/<?php echo $auth['avar'] ?>" alt="">
	<name><?php echo $auth['penname'] ?></name>
</avatar>

<au-detail>
	<item>
		<left>
			<i class="fas fa-user"></i>
			Full Name
		</left>

		<right>
			<?php echo $auth['fullname'] ?>
		</right>
	</item>

	<item>
		<left>
			<i class="fas fa-calendar-alt"></i>
			Birth Date
		</left>

		<right>
			<?php echo $auth['birthdate'] ?>
		</right>
	</item>

	<item>
		<left>
			<i class="fas fa-envelope"></i>
			Email
		</left>

		<right>
			<?php echo $auth['email'] ?>
		</right>
	</item>

	<item>
		<left>
			<i class="fab fa-facebook"></i>
			Facebook
		</left>

		<right>
			<a href="<?php echo $auth['facebook'] ?>">Link</a>
		</right>
	</item>

</au-detail>

<au-self>
	<top>
		About me
	</top>
	<bott>
		<?php echo $auth['about'] ?>
	</bott>
</au-self>