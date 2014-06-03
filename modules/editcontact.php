<?php
	$query = 'select * from contacts where contact_id ='.$_GET['id'];
	$info = mysql_query($query);
	$info= mysql_fetch_array($info);
	if ($_SESSION['id'] == $info['user_id']) {
?>

<div class="container">
	<div class="jumbotron">
		<form class="form-signup" action="" method="post" role="form" enctype="multipart/form-data">
			<label for="file">Photo:</label>
			<input type="file" name="file" id="file"><br>
			<input class="form-control" name="firstName" type="text" placeholder="First Name" value = "<?php print $info['contact_first_name']; ?>"/>
			<input class="form-control" name="lastName" type="text" placeholder="Last Name" value = "<?php print $info['contact_last_name']; ?>"/>
			<input class="form-control" name="mobilePhone" type="number" placeholder="Mobile Phone" value = "<?php print $info['mobile_phone']; ?>"/>
			<input class="form-control" name="homePhone" type="number" placeholder="Home Phone" value = "<?php print $info['home_phone']; ?>"/>
			<input class="form-control" name="officePhone" type="number" placeholder="Office Phone" value = "<?php print $info['office_phone']; ?>"/>
			<input class="form-control" name="birthDate" type="date" value="2014-05-28" placeholder="Birth Date" value = "<?php print $info['birth_date']; ?>"/>
			<label class="radio-inline">
				<input class="form-control" type="radio" name="sex" value="1" /> Male
			</label>
			<label class="radio-inline">
				<input class="form-control" type="radio" name="sex" value="0" /> Female
			</label>
			<input class="form-control" name="job" type="text" placeholder="Job" value = "<?php print $info['job']; ?>"/>
			<input class="form-control" name="facebook" type="text" placeholder="Facebook" value = "<?php print $info['facebook']; ?>"/>
			<input class="form-control" name="twitter" type="text" placeholder="Twitter" value = "<?php print $info['twitter']; ?>"/>
			<input class="btn btn-success" name="editContact" type="submit" value="Save"/>
		</form>
	</div>
</div>

<?php 
	}

	if(isset($_POST['editContact'])) {
		$contact = new contact();
		require('upload_photo.php');

		$contact->setInformation();
		$contact->editContact();
		header ("location: index.php");
	}
?>

