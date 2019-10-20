<ad-header><i class="fas fa-users"></i> Subcribers</ad-header>

<table id="sub-list" class="row-border">
	<thead>
		<tr>
			<th>Email</th>
			<th>Date</th>
			<th>Delete</th>
			
		</tr>
	</thead>
	<tbody>
		<?php 
			$subs = (new DB())->From("subscribers")->get();
			foreach($subs as $s){
		 ?>
		<tr>
			<td><?php echo $s['email'] ?></td>
			<td><?php echo $s['date'] ?></td>
			<td><a class="list-cog confirm" href="/Submit/main.php?n=delete&t=subscribers&redir=Subscribers&id=<?php echo $s['id'] ?>"><i class="fas fa-trash"></i></a></td>
		</tr>

		<?php } ?>
	</tbody>
</table>