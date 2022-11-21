<?php

use JetBrains\PhpStorm\Language;

$servername = "localhost";
$username = "root";
$password = "1234";

try {
  $conn = new PDO("mysql:host=$servername;dbname=bulsu_db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$query = "SELECT count(*) as total, department_code FROM research INNER JOIN department on research.department_id = department.id GROUP BY department_id order by research.department_id ASC";
$result = $conn->query($query);
$papers = $result->fetchAll(PDO::FETCH_ASSOC);


echo json_encode($papers);
