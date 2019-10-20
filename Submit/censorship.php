<?php
	$id = $_GET['id'];
	$d['status'] = $_GET['s'];

	(new DB())->Update("posts",$d,$id)->run();

	//$post = (new DB())->From("posts")->Id($id)->get()[0];

	//$title = "[Etrans Blog] New Post!";
	//$content = "<b>".$post['eng_title']."</b><br> See more: <a href='etransblog.tk/post/".$post['link']."/".$post['id']."'>Click here</a>"; 

	//$subs = (new DB())->From("subscribers")->get();

	//foreach($subs as $sub){
	//	sendMail($sub['email'],$title,$content);
	//}

	goBack("Success!");
	
?>