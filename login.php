<?php

header("Access-Control-Allow-Origin: header");
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$response = array();
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
	$result = $conn->query($query)->fetch_array();

	if (isset($result)) {
		$response['value'] = 1;
		$response['message'] = "berhasil login";
		$response['username'] = $result['username'];
		$response['fullname'] = $result['fullname'];
		echo json_encode($response);
	} else {
		$response['value'] = 0;
		$response['message'] = "Gagal login";
		echo json_encode($response);
	}
}
