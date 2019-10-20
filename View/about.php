<other-head>ABOUT US</other-head>

<page-intro>
	<img src="/Public/img/Elogo.png">
	<?php echo $in['about'] ?>
</page-intro>

<other-head>Authors</other-head>

<author-intro>
	<?php foreach($au as $a){ ?>

	<au-item>
		<img src="/Public/img/avatar/<?php echo $a['avar'] ?>">
		<au-name><?php echo $a['penname'] ?></au-name>	
		<au-contact><a href="/author/<?php echo $a['penname'] ?>/<?php echo $a['id'] ?>">Details</a></au-contact>
	</au-item>

	<?php } ?>
	
</author-intro>