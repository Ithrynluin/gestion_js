<?php

// Require our Event class and datetime utilities
require dirname(__FILE__) . '/utils.php';

// Short-circuit if the client did not give us a date range.
/*if (!isset($_GET['start']) || !isset($_GET['end'])) {
	die("Please provide a date range.");
}*/

// Parse the start/end parameters.
// These are assumed to be ISO8601 strings with no time nor timezone, like "2013-12-29".
// Since no timezone will be present, they will parsed as UTC.
$range_start = parseDateTime($_POST['start']);
$range_end = parseDateTime($_POST['end']);

// Parse the timezone parameter if it is present.
$timezone = null;
if (isset($_GET['timezone'])) {
	$timezone = new DateTimeZone($_GET['timezone']);
}

// Read and parse our events JSON file into an array of event data arrays.
$json = file_get_contents(dirname(__FILE__) . '/../json/events.json');
$input_arrays = json_decode($json, true);

// Accumulate an output array of event data arrays.
$output_arrays = array();
foreach ($input_arrays as $array) {

	// Convert the input array into a useful Event object
	$event = new Event($array, $timezone);
	$output_arrays[] = $event->toArray();

}

$event = new Event(array(
	"title"	:	$_POST['title'],
	"start"	:	$_POST['start'],
	"end"	:	$_POST['end']
), $timezone)
$output_arrays[] = $event->toArray();

$jsonArray = json_encode($output_arrays);
file_put_contents('./json/events.json', $jsonArray);

// Send JSON to the client.
// echo json_encode($output_arrays);