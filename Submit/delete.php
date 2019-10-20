<?php
	$tab = $_GET["t"];
	$id = $_GET["id"];
	$redir = $_GET["redir"];
	(new DB())->Delete($tab,$id)->run();

	redirAd($redir);
?>