<?php
include "../model/Database.php";

$routeID = $_GET['route_id'] ?? 0;

$sql = "SELECT Fare FROM routes WHERE RouteID = $routeID";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

echo json_encode([
    "fare" => $row['Fare'] ?? 0
]);
?>
