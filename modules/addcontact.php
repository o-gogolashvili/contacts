<div class="container">
	<div class="jumbotron">
		<form class="form-signup" action="" method="post" role="form">
			<input class="form-control" name="firstName" type="text" placeholder="First Name" />
			<input class="form-control" name="lastName" type="text" placeholder="Last Name" />
			<input class="form-control" name="mobilePhone" type="number" placeholder="Mobile Phone" />
			<input class="form-control" name="homePhone" type="number" placeholder="Home Phone" />
			<input class="form-control" name="officePhone" type="number" placeholder="Office Phone" />
			<input class="form-control" name="birthDate" type="date" placeholder="Birth Date" />
			<label class="radio-inline">
				<input class="form-control" type="radio" name="sex" value="1" /> Male
			</label>
			<label class="radio-inline">
				<input class="form-control" type="radio" name="sex" value="0" /> Female
			</label>
			<input class="form-control" name="job" type="text" placeholder="Job" />
			<input class="form-control" name="facebook" type="text" placeholder="Facebook" />
			<input class="form-control" name="twitter" type="text" placeholder="Twitter" />
			<input class="btn btn-success" name="addContact" type="submit" value="Add Contact"/>
		</form>
	</div>
</div>

<?php
	
	if(isset($_POST['addContact'])) {
		$contact = new contact();
		
		$contact->setInformation();
		$contact->addContact();
	}

?>