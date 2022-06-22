<?php

if (!empty($_GET['location'])) {

	$maps_url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . urldecode($_GET['location']);

	$maps_json = file_get_contents($maps_url);

	$maps_array = json_decode($maps_json,true);

	$lat = maps_array['results'][0]['geometry']['location']['lat'];
	$lng = maps_array['results'][0]['geometry']['location']['lng'];

	$instagram_url = 'https://api.instagram.com/v1/media/search?lat=' .$lat. '&lng=' .$lng. '&client_id=59cd273f121d4139b97a8a07a993ddf';

	$instagram_json = file_get_contents($instagram_url);

	$instagram_array = json_decode($instagram_json,true);
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Geogram</title>
	<style type="text/css">
		body{
			margin-top: 30px;
		}
	</style>
</head>
<body>
<form action="">
	<label>Location :</label>
	<input type="text" name="location"/>
	<button type="submit">Submit</button>
	<br>
	<?php
	if (!empty($instagram_array)){
		foreach ($instagram_array['data'] as $image) {
	echo '<img src= "'. $image['images']['low_resolution']['url'] .'"/>';
    }
}
?>
</form>
</body>
</html>