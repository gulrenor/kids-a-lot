//qm.js
//submit handler for quickmessage
//twh - 02-11-2014

$(document).ready(function() {

	var jsonFile = 'qm.json';
	
	qmInit();
	
	$('#postForm').submit(function(event){
		event.preventDefault();
		dataString = $('#postForm').serialize();
		
		$.ajax({
			type: 'POST',
			url: 'qm.php',
			data: dataString,
			dataType: 'json',
			success: function(data) {
				console.log('ajax success.');
				qmInit();
				$('#updateMessage').show(function() {
					$(this).fadeOut(2500);
				});			
			},
			error: function() {
				alert('error.');
			}
		});
	});
	
	function setActive() {
		$('.activityStatus').attr('id', 'active');
		$('#statusMessage').html('The message is active');
	};
	function setInactive() {
		$('.activityStatus').attr('id', 'inactive');
		$('#statusMessage').html('The message is inactive');
	};
	
	function qmInit() {
		$.getJSON(jsonFile, function(json) {
			console.log(json);
			if (json.qm != null && (json.qm).length > 0) {
				console.log(_.unescape(json.qm));
				$('#qm').val(json.qm);
				$('#qmWidget').html(json.qm);
				$('.qmWidgetWrapper').show();
				setActive();
			} else {
				setInactive();
			};
			$('.activityStatus').fadeIn();
		});

	};

	
});