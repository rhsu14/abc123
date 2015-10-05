<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "test";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$max_users = mysqli_query($conn,"SELECT count(id) as count FROM main");
$max_users = $max_users->fetch_assoc();
$max_users = $max_users['count'];
$id1 = rand(1,$max_users); 
$query = sprintf("SELECT * FROM main WHERE id=%s", $id1);
$player1 = mysqli_query($conn, $query);

while(in_array(($id2 = rand(1,$max_users)), array($id1))); 
$query = sprintf("SELECT * FROM main WHERE id=%s", $id2);
$player2 = mysqli_query($conn, $query);

$game = array('player1' => $player1->fetch_assoc(), 'player2' => $player2->fetch_assoc());
echo json_encode($game) . "\n";

