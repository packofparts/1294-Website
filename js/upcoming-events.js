var calDiv = $('#upcoming-events');

var calURL = "https://www.googleapis.com/calendar/v3/calendars/frc1294%40gmail.com/events?key=AIzaSyDfxQCRwk1MkTHpmNAjL3xFl8CncA_MvD4";

var cache = true, cacheFilePath = "/cache/calendar.json", cacheHelperFilePath = "/cache/cal_data_helper.php";

if(/*cacheFile.createSeconds < 43200*/true){
	getDataFromCacheFile();
}else{
	getDataFromInternet();
}

function putDataInCacheFile(data){
	if(cache){
		$.ajax({
			url: cacheHelperFilePath,
			type: 'PUT',
			dataType: 'application/json',
			data: JSON.stringify(data)
		});
	}
}

function getDataFromCacheFile(){
	$.ajax({
		url: cacheFilePath,
		type: 'GET',
		dataType: 'json'
	})
	.done(function(response) {
		parseData(response);
	})
	.fail(function() {
		parseData(getDataFromInternet());
	});
}
function getDataFromInternet(){
	$.ajax({
		url: calURL,
		crossDomain: true,
		type: 'GET',
		dataType: 'json'
	})
	.done(function(response){
		putDataInCacheFile(response);
		parseData(response);
	})
	.fail(function(){
		calDiv.append('<p style="color: red">Sorry, the events could not be loaded. Please click the "View Calendar" button to look at our full calendar.');
	});
}

function parseData(data){
	console.log(data);
}