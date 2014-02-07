<?php

// Values received via ajax
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];
$backgroundColor = $_POST['backgroundColor'];

// connection to the database
try {
$bdd = new PDO('mysql:host=localhost;dbname=planningtacro', 'root', 'sccsa25g');
} catch(Exception $e) {
exit('Unable to connect to database.');
}

// insert the records
$sql = "INSERT INTO schedule (title, start, end,backgroundColor) VALUES (:title, :start, :end, :backgroundColor)";
$q = $bdd->prepare($sql);
$q->execute(array(':title'=>$title, ':start'=>$start, ':end'=>$end, ':backgroundColor'=>$backgroundColor));
?>