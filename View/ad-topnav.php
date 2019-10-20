<ad-topnav>
	<nav-title>Control Panel</nav-title>
	<user-set class="dropdown-btn">
		<i class="fas fa-user"></i>
		<?php ssPrt("penname") ?>
		<i class="fas fa-angle-down"></i>

		<user-select class="dropdown-cont">
			<a href="/admincp/Profile/<?php ssPrt("id") ?>">
				<i class="fas fa-edit"></i> 
				Edit Account
			</a>
			<a href="/Submit/main.php?n=logout"><i class="fas fa-sign-out-alt"></i> Log Out</a>
			<a href="/"><i class="fas fa-home"></i> Home</a>
		</user-select>
		
	</user-set>
</ad-topnav>

<ad-body>


