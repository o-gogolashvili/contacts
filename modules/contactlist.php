<?php
	if(isset($_POST['searchTerm'])) {
		$searchTerm = trim($_POST['searchTerm']);
		$query = "SELECT * FROM contacts WHERE 
					user_id ='".$_SESSION['id']."' AND 
					(contact_first_name LIKE '".$searchTerm."%' OR
					contact_last_name LIKE '".$searchTerm."%' OR
					mobile_phone LIKE '".$searchTerm."%' OR
					home_phone LIKE '".$searchTerm."%' OR
					office_phone LIKE '".$searchTerm."%' OR
					CONCAT(contact_first_name, ' ', contact_last_name) LIKE '".$searchTerm."%' OR
					CONCAT(contact_last_name, ' ', contact_first_name) LIKE '".$searchTerm."%')
				order by contact_last_name, contact_first_name";
		$result = mysql_query($query);
	}
	else {
		$query = "SELECT * FROM contacts WHERE user_id ='".$_SESSION['id']."' order by contact_last_name, contact_first_name";
		$result = mysql_query($query);
	}

?>
<div class="panel-group" id="accordion">
	<?php
		while($contact = mysql_fetch_array($result)) {
	?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#<?php print("cntlistitem".$contact['contact_id']); ?>">
						<?php print($contact['contact_last_name'].' '.$contact['contact_first_name']); ?>
					</a>
		 			<a class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="Edit" href="index.php?action=editcontact&id=<?php print($contact['contact_id']); ?>">
						<span class="glyphicon glyphicon-pencil"></span>
					</a>
					<div class="pull-right">
						<a class="btn btn-default" data-toggle="tooltip" data-placement="top" data-original-title="Delete" href="index.php?action=deletecontact&id=<?php print($contact['contact_id']); ?>" onclick="return confirm('Are you sure you want to delete?');">
							<span class="glyphicon glyphicon-trash"></span>
						</a>
					</div>
				</h4>
			</div>
			<div id="<?php print("cntlistitem".$contact['contact_id']); ?>" class="panel-collapse collapse">
				<div class="panel-body">
					<?php
						if($contact['sex']==1) {
							print('Sex: Male</br>');
						}
						else {
							print('Sex: Female</br>');
						}
						print('Mobile Phone: '.$contact['mobile_phone'].'</br>');
						print('Home Phone: '.$contact['home_phone'].'</br>');
						print('Office Phone: '.$contact['office_phone'].'</br>');
						print('Birth Date: '.$contact['birth_date'].'</br>');
						print('Job: '.$contact['job'].'</br>');
						print('Facebook: <a target="_blank" href="'.$contact['facebook'].'">'.$contact['facebook'].'</a></br>');
						print('Twitter: <a target="_blank" href='.$contact['twitter'].'>'.$contact['twitter'].'</a></br>');
						/* here goes full info */
					?>
				</div>
			</div>
		</div>
	<?php
		}
		if(mysql_num_rows($result) == 0) {
			print('<div class="alert alert-danger">Your search didn\'t match any data. Please check your spelling or <a class="alert-link" href="index.php?action=addcontact">create a new contact</a>.</div>');
		}
	?>
</div>