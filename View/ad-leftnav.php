</ad-body>

<ad-leftnav>
	<a href="/admincp/Dashboard" class="main-item">
		<i class="fas fa-tachometer-alt"></i>
		Dashboard
	</a>

	<a href="/admincp/Profile/<?php ssPrt("id") ?>" class="main-item">
		<i class="fas fa-user"></i>
		Profile
	</a>

	<div class="dropdown-btn">
		<div class="main-item">
			<i class="fas fa-pen"></i>
			Blog
		</div>

		<child-item class="dropdown-cont">
			<a href="/admincp/New">
				<i class="fas fa-plus"></i>
				New
			</a>

			<a href="/admincp/List">
				<i class="fas fa-list"></i>
				List
			</a>

			<a href="/admincp/Categories">
				<i class="fas fa-star"></i>
				Categories
			</a>
		</child-item>
		</a>
	</div>

	<a href="/admincp/Subscribers" class="main-item">
		<i class="fas fa-users"></i>
		Subscribers
	</a>

	<a href="/admincp/Feedback" class="main-item">
		<i class="fas fa-comments"></i>
		Feedback
	</a>

	<a href="/admincp/Information" class="main-item <?php if(fillBoss())?>">
		<i class="fas fa-clipboard-list"></i>
		Information
	</a>
	<div class=" dropdown-btn">
		<div 
		href="/admincp/Manage" class="main-item <?php if(fillBoss())?>">
			<i class="fas fa-cog"></i>
			Manage
		</div>

		<child-item class="dropdown-cont">
			<a href="/admincp/Authors">
				<i class="fas fa-pen-nib"></i>
				Authors
			</a>

			<a href="/admincp/Censorship">
				<i class="fas fa-gavel"></i>
				Censorship
			</a>
		</child-item>
	</div>
</ad-leftnav>
