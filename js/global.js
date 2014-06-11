$('[data-toggle="tooltip"]').tooltip(); // activates tooltips

//search ajax refresh
$('[name="searchTerm"]').on('input', function() {
	var searchTerm = $('[name="searchTerm"]').val();
	
	var xhr = new XMLHttpRequest();
	xhr.open("POST", "index.php", true);
	xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhr.send("searchTerm="+searchTerm);

	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			var div = document.getElementById("accordion");
			div.innerHTML = xhr.response;
		}
	} 
});

//search form resize
var W = $('[name="searchTerm"]').width();

$(document).on({
    click: function(){
        if ($(this).width()==W) {
            $(this).animate({width: '+=120px'},300);
        }
    },
    blur: function(){
        if($(this).val() == '' && $(this).width()>W) {
            $(this).animate({width:'-=120px'},300);
        }
    }
}, '[name="searchTerm"]');
