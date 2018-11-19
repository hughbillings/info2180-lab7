<?php

$query = $_GET['country'];

$host = getenv('IP');
$username = getenv('C9_USER');
$password = '';
$dbname = 'world';
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
$stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%".$query."%' ");
$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);


echo '<ul>';
foreach ($results as $row) {
  echo '<li>' . $row['name'] . ' is ruled by ' . $row['head_of_state'] . '</li>';
}
echo '</ul>';

if ($query === 'true')
{
    $stm = $conn->query("SELECT * FROM countries");
    $result = $stm -> fetchAll(PDO::FETCH_ASSOC);
    
    echo '<ul>';
foreach ($result as $row) {
  echo '<li>' . $row['name'] . ' is ruled by ' . $row['head_of_state'] . '</li>';
}
echo '</ul>';
}


