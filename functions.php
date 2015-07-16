<?php

	require_once('authorize.php');

	// Return non-logged-in users to the homepage.

	function check_login() {
		if (!isset($_SESSION['school_id'])) {
			header('Location: index.php');
		} else {
			$query = "SELECT id, schedule_time, chaperone_id FROM rides";

		}
	}

	// Get list of rides stored in DB.

	function get_rides() {
		if (isset($_SESSION['school_id'])) {
			$query = "SELECT token FROM schools WHERE id = {$_POST['school_id']}";
			return fetch($query);
		} else {
			return "Please log in.";
		}
	}


	// Queries Google's geolocation api.  Results returned in PHP object, geolocation located at $location->results[0]->geometry->location->lat and $location->results[0]->geometry->location->lng results returned as type float.

	function get_geolocation($address) {
		$address = urlencode($address);
		$ride = curl_init();
		curl_setopt($ride, CURLOPT_URL, 'https://maps.googleapis.com/maps/api/geocode/json?address='.$address.'&key=AIzaSyD2gKLheVoWnaJyKXYrpbbsb_G6q9y7ULI');
		curl_setopt($ride, CURLOPT_HEADER, false);
		curl_setopt($ride, CURLOPT_RETURNTRANSFER, true);
		$geolocation = curl_exec($ride);
		$geolocation = json_decode($geolocation);
		return $geolocation;
	}

	// Query Uber's API to get pricing info for specific routes.  Start and end points must be gotten using get_geolocation before running this function.

	function get_prices($start, $end) {
		$start = get_geolocation($start);
		$end = get_geolocation($end);
		return use_server_token('v1', 'estimates/price', '3GN0YfArYxQgZShl2aD2NgM0znBxYEAvhiTPwDen', array('start_latitude' => $start->results[0]->geometry->location->lat, 'start_longitude' => $start->results[0]->geometry->location->lng, 'end_latitude' => $end->results[0]->geometry->location->lat, 'end_longitude' => $end->results[0]->geometry->location->lng));
	}

	function create_ride() {
		if (isset($_SESSION['school_id']) & isset($_POST['ride_name']) & isset($_POST['dropoffs'])) {
			$query = "INSERT INTO rides (";
			for ($i = 0; $i < count($_POST['dropoffs']); $i++) {
				$query .= "location".$i.", kid".$i.", ";
			}
			$query = rtrim($query, ',');
			$query .= ") VALUES (";
			foreach ($_POST['dropoffs'] as $location => $kid) {
				$query .= $location." ".$kid.", ";
			}
			$query = rtrim($query, ',');
			$query .= ")";
		}
	}


?>
