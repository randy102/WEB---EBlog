<ad-header><i class="fas fa-comments"></i> Feedbacks</ad-header>
<table id="sub-list" class="row-border">
	<thead>
		<tr>
			<th>Name</th>
			<th>Content</th>
			<th>Date</th>
			
		</tr>
	</thead>
	<tbody>
		<?php 
			$fb = (new DB())->From("feedback")->get();
			foreach($fb as $f){
		?>
		<tr>
			<td><?php echo $f['user'] ?></td>
			<td><?php echo $f['cont'] ?></td>
			<td><?php echo $f['date'] ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>