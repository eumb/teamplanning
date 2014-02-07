<?php

/* Values received via ajax */
$id = $_POST['id'];

// connection to the database
try {
 $bdd = new PDO('mysql:host=localhost;dbname=planningtacro', 'root', 'sccsa25g');
 } catch(Exception $e) {
exit('Unable to connect to database.');
}
 // delete the records
$sql = "DELETE from schedule WHERE id=".$id;
$q = $bdd->prepare($sql);
$q->execute();

?>