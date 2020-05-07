<?php 
	require_once('dbconfig.php');

	$db = new Database('localhost', 'tbl_person', 'root', '');

	if ($_SERVER['REQUEST_METHOD'] == "GET") {
		echo json_encode($db->query("SELECT * FROM persons"));
	} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
		echo "This is POST";
	} else {
		http_response_code(405);
	}
?>

