<?php
include 'Rating.php';

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

$player1 = $_POST['player1'];
$player2 = $_POST['player2'];
$winner = $_POST['winner'];

if ($winner == 1)
{
  $game = new \Rating\Rating($player1['score'],$player2['score'], 1, 0); 
  $new_scores = $game->getNewRatings(); 
}
elseif ($winner == 2)
{
  $game = new \Rating\Rating($player1['score'],$player2['score'], 0, 1); 
  $new_scores = $game->getNewRatings(); 
}

$player1_new_score = $new_scores['a'];
$player2_new_score = $new_scores['b'];

$query = sprintf("UPDATE main SET score=%d WHERE id=%d", $player1_new_score, $player1['id']);
mysqli_query($conn, $query); 

$query = sprintf("UPDATE main SET score=%d WHERE id=%d", $player2_new_score, $player2['id']);
mysqli_query($conn, $query); 


