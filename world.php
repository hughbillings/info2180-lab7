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


foreach($results as $row)
{
    print "Code: ".$row['code']."<br>"."Name: ".$row['name']."<br>"."Continent: ".$row['continent']."<br>"."Surface Area: ".$row['surface_area']."<br>"."Independence: ".$row['independence_year']."<br>"."Population ".$row['population']."<br>"."Life Expect: ".$row['life_expectancy']."<br>"."Gnp: ".$row['gnp']."<br>"."GNP OLD: ".$row['gnp_old']."<br>"."Local Name: ".$row['local_name']."<br>"."Government Form: ".$row['government_form']."<br>"."Head of State: ".$row['head_of_state']."<br>"."Capital: ".$row['capital']."<br>"."Code2: ".$row['code2'];
}

if ($query === 'true')
{
    $stm = $conn->query("SELECT * FROM countries");
    $result = $stm -> fetchAll(PDO::FETCH_ASSOC);
    
    foreach($result as $row)
    {
         print "Code: ".$row['code']."<br>"."Name: ".$row['name']."<br>"."Continent: ".$row['continent']."<br>"."Surface Area: ".$row['surface_area']."<br>"."Independence: ".$row['independence_year']."<br>"."Population ".$row['population']."<br>"."Life Expect: ".$row['life_expectancy']."<br>"."Gnp: ".$row['gnp']."<br>"."GNP OLD: ".$row['gnp_old']."<br>"."Local Name: ".$row['local_name']."<br>"."Government Form: ".$row['government_form']."<br>"."Head of State: ".$row['head_of_state']."<br>"."Capital: ".$row['capital']."<br>"."Code2: ".$row['code2']."<br>"."<br>";
    }
}


