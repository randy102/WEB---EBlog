<other-head>CONTACT</other-head>
<contact>
	<contact-item>
		<contact-head>
			<i class="fas fa-phone"></i>
			Phone Number
		</contact-head>
		<contact-content>
			<?php echo $contact['phone'] ?>
		</contact-content>
	</contact-item>

	<contact-item>
		<contact-head>
			<i class="fas fa-envelope"></i>
			Email
		</contact-head>
		<contact-content>
			<?php echo $contact['email'] ?>
		</contact-content>
	</contact-item>

	<contact-item>
		<contact-head>
			<i class="fab fa-facebook-square"></i>
			Facebook
		</contact-head>
		<contact-content>
			<a href="<?php echo $contact['facebook'] ?>">Etrans Blog</a>
		</contact-content>
	</contact-item>

	<contact-item>
		<contact-head>
			<i class="fab fa-youtube"></i>
			Youtube Chanel
		</contact-head>
		<contact-content>
			<a href="<?php echo $contact['youtube'] ?>">Học tiếng Anh cùng Etrans</a>
		</contact-content>
	</contact-item>
</contact>

