<?php
	
	$query = "SELECT * FROM contacts WHERE user_id ='".$_SESSION['id']."'";
	$result = mysql_query($query);

?>
<table class="table table-hover">
	<thead>
		<tr>
			<td>Last Name</td>
			<td>First Name</td>
			<td>Mobile Phone Number</td>
		</tr>
	</thead>
	<tbody>
		<?php
			while($contact = mysql_fetch_array($result)) {
				print('<tr>');
				print('<td>'.$contact['contact_last_name'].'</td>');
				print('<td>'.$contact['contact_first_name'].'</td>');
				print('<td>'.$contact['mobile_phone'].'</td>');
				print('</tr>');
			}
		?>
	</tbody>
</table>