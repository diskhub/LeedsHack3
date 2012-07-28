$(document).ready(function() {
	setInterval(updateDate, 1000);
});

function updateDate() {
	$.ajax({
		url: "/ajax/date/",
		success: function(data) {
			$("span.date").html(data);
		}
	});
}
