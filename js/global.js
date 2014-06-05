$('[data-toggle="tooltip"]').tooltip(); // activates tooltips

$('[name="searchTerm"]').on('input', function() {

	var searchTerm = $('[name="searchTerm"]').val();
	alert(searchTerm);
	

	/*

	$POST();

	$.ajax({
		type: "POST",
		url: "modules/contactlist.php",
		data: $('[name="searchTerm"]').val(),
		success: success,
	}); */
});