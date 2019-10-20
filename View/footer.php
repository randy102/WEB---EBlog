</wrapper>
<?php
	$info = (new DB())->From("info")->get()[0];
?>
<footer>
	<wrapper>
		<foot-logo>
			<img src="/Public/img/Elogo.png">
		</foot-logo>
		<cop-mes>
			<?php echo $info["copy"] ?>
			<protect>
				<a href="//www.dmca.com/Protection/Status.aspx?ID=a08a412a-c816-4e6d-863e-b9ee0d4058bf" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="//images.dmca.com/Badges/dmca-badge-w200-5x1-07.png?ID=a08a412a-c816-4e6d-863e-b9ee0d4058bf"  alt="DMCA.com Protection Status" /></a>  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
			</protect>
		</cop-mes>
		
		<contrib>
			<cob-head>Feedback</cob-head>
			<input type="text" id="feed-name" placeholder="Your name...">
			<textarea id="feed-cont" placeholder="Content..."></textarea>
			<button id="feed-click">Send</button>
			<div id="feed-result"></div>
		</contrib>

		<copyright>Copyright &copy; 2018 Etrans. All rights reserved</copyright>
	</wrapper>
</footer>
</body>
</html>