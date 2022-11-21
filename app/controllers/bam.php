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

$query = "SELECT COUNT(research.id) as total, course_description FROM research INNER JOIN course on research.course_id = course.id WHERE research.department_id ='1' GROUP BY research.course_id ORDER by research.course_id";
$result = $conn->query($query);
$bam = $result->fetchAll(PDO::FETCH_ASSOC);


echo json_encode($bam);
