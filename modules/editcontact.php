<?php
	$info = mysql_query("select * from contacts where contact_id =".$_GET['id'].);
	if ($_SESSION['id'] == $info['user_id']) {
?>

<div class="container">
	<div class="jumbotron">
		<form class="form-signup" action="" method="post" role="form" enctype="multipart/form-data">
			<label for="file">Upload Photo:</label>
			<input type="file" name="file" id="file"><br>
			<input class="form-control" name="firstName" type="text" placeholder="First Name" value = "<?php $info['contact_first_name'] ?>"/>
			<input class="form-control" name="lastName" type="text" placeholder="Last Name" value = "<?php $info['contact_last_name'] ?>"/>
			<input class="form-control" name="mobilePhone" type="number" placeholder="Mobile Phone" value = "<?php $info['mobile_phone'] ?>"/>
			<input class="form-control" name="homePhone" type="number" placeholder="Home Phone" value = "<?php $info['home_phone'] ?>"/>
			<input class="form-control" name="officePhone" type="number" placeholder="Office Phone" value = "<?php $info['office_phone'] ?>"/>
			<input class="form-control" name="birthDate" type="date" value="2014-05-28" placeholder="Birth Date" value = "<?php $info['birth_date'] ?>"/>
			<label class="radio-inline">
				<input class="form-control" type="radio" name="sex" value="1" /> Male
			</label>
			<label class="radio-inline">
				<input class="form-control" type="radio" name="sex" value="0" /> Female
			</label>
			<input class="form-control" name="job" type="text" placeholder="Job" value = "<?php $info['job'] ?>"/>
			<input class="form-control" name="facebook" type="text" placeholder="Facebook" value = "<?php $infp['facebook'] ?>"/>
			<input class="form-control" name="twitter" type="text" placeholder="Twitter" value = "<?php $info['twitter'] ?>"/>
			<input class="btn btn-success" name="editContact" type="submit" value="Save"/>
		</form>
	</div>
</div>

<?php 
	} 
?>

<?php