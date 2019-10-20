<login>
	<log-head>Log in</log-head>
	<form action="/Submit/main.php?n=login" 
	method="post" accept-charset="utf-8">
		<inp-group>
			<label><i class="fas fa-user"></i> Email</label>
			<input type="text" name="email">
		</inp-group>

		<inp-group>
			<label><i class="fas fa-lock"></i> Password</label>
			<input type="password" name="password">
		</inp-group>

		<inp-group><button type="submit">Login</button></inp-group>

		<error>
			<?php error(); ?>
		</error>
	</form>
	
	
</login>