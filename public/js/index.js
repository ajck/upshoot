// Save button pressed under Owners tab, save new owner data over AJAX then update table:
$('#ownersave').click(function(e)
{
$(this).html('<i class="fa fa-spinner fa-spin"></i>'); // Turn on spinner to show the user something's happening

// Submit form data back to server by AJAX:
$.ajax({
	headers: { 'X-CSRF-TOKEN': $('#owners > form > input[name="_token"]').val() }, // Submit CSRF token
	type: 'POST',
	url: 'addowner',
	// Data payload is owner name, motorbike ID and location:
	data: { name: $('#name').val(), motorbike_id: $('#motorbike_id').val(), location: $('#location').val() },
	dataType: 'json',
	success: function(data)
		{
		// Add HTML for newly added owner to bottom of table (IDs will be in order so table will be ordered by ID):
		$('#owners_table').append('<tr><td>' + data.id + '</td><td>' + data.name + '</td><td>' + data.motorbike_id + '</td><td>' + data.location + '</td></tr>');
		
		// Show a green tick mark in the Save button for 3 seconds to indicate success to the user, then revert to 'Save' text:
		$('#ownersave').toggleClass('btn-primary btn-success').html('<i class="fa fa-lg fa-check"></i>');
		setTimeout(function(){ $('#ownersave').toggleClass('btn-success btn-primary').text('Save')}, 3000);
		},
	statusCode: {
		// Handle input validation error from Laravel:
		422: function() {
		  // Parse Laravel JSON response and display input error to user
		},
	error: function (data)
		{
		$('#ownersave').text('Save'); // Revert text
		alert("Sorry, there's been an error:", data.responseText); // Display error
		}
	});
});

// Save button pressed under Motorbike tab, save new owner data over AJAX then update table:
$('#motorbikesave').click(function(e)
{
$(this).html('<i class="fa fa-spinner fa-spin"></i>'); // Turn on spinner to show the user something's happening

// Submit form data back to server by AJAX:
$.ajax({
	headers: { 'X-CSRF-TOKEN': $('#owners > form > input[name="_token"]').val() }, // Submit CSRF token
	type: 'POST',
	url: 'addmotorbike',
	// Data payload is motorbike brand, colour and model year:
	data: { name: $('#brand').val(), motorbike_id: $('#colour').val(), location: $('#model_year').val() },
	dataType: 'json',
	success: function(data)
		{
		// Add HTML for newly added owner to bottom of table (IDs will be in order so table will be ordered by ID):
		$('#motorbikes_table').append('<tr><td>' + data.id + '</td><td>' + data.brand + '</td><td>' + data.colour + '</td><td>' + data.model_year + '</td></tr>');
		
		// Show a green tick mark in the Save button for 3 seconds to indicate success to the user, then revert to 'Save' text:
		$('#motorbikesave').toggleClass('btn-primary btn-success').html('<i class="fa fa-lg fa-check"></i>');
		setTimeout(function(){ $('#motorbikesave').toggleClass('btn-success btn-primary').text('Save')}, 3000);
		},
	statusCode: {
		// Handle input validation error from Laravel:
		422: function() {
		  // Parse Laravel JSON response and display input error to user
		},
	error: function (data)
		{
		$('#motorbikesave').text('Save'); // Revert text
		alert("Sorry, there's been an error:", data.responseText); // Display error
		}
	});
});

// Find closest owner button pressed under Closest Owner tab, get closest owner from back end:
$('#closestbtn').click(function(e)
{
$(this).html('<i class="fa fa-spinner fa-spin"></i>'); // Turn on spinner to show the user something's happening

// Submit form data back to server by AJAX:
$.ajax({
	type: 'GET',
	url: 'closestowner',
	dataType: 'json',
	success: function(data)
		{
		// Add HTML for newly added owner to bottom of table (IDs will be in order so table will be ordered by ID):
		$('#closest_table').append('<tr><td>' + data.id + '</td><td>' + data.name + '</td><td>' + data.motorbike_id + '</td><td>' + data.location + '</td></tr>');
		
		// Show a green tick mark in the Save button for 3 seconds to indicate success to the user, then revert to 'Save' text:
		$('#closestbtn').toggleClass('btn-primary btn-success').html('<i class="fa fa-lg fa-check"></i>');
		setTimeout(function(){ $('#closestbtn').toggleClass('btn-success btn-primary').text('Save')}, 3000);
		},
	error: function (data)
		{
		$('#closestbtn').text('Save'); // Revert text
		alert("Sorry, there's been an error:", data.responseText); // Display error
		}
	});
});


