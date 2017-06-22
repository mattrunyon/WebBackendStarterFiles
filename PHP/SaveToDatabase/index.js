$(document).ready(function() { // Waits for the DOM to be loaded before running this function.
	var testInput = document.getElementById('testData');
	testInput.onkeypress = function(event) { // Makes pressing enter submit since there isn't a form element.
		if (event.keyCode == 13) { // Keycode for Enter key
			document.getElementById('submitButton').click();
		}
	}

	var submitButton = document.getElementById('submitButton');
	submitButton.onclick = function() {
		// http://api.jquery.com/jquery.ajax/ for more info
		$.ajax({ // Data must be a valid queryString for http requests
			data: 'testData=' + document.getElementById('testData').value,
			url: 'saveToDatabase.php',
			method: 'POST',
			success: function(msg) {
				console.log("Success:", msg);
			},
			error: function(msg) {
				console.log("Error:", msg);
			}
		});
	}
});
