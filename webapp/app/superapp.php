<?php
/**
 * Dummy app web for testing the Docker infrastructure 
 * @author Toréa TESSIER <torea.tessier2@gmail.com>
 **/

echo "PHP OK <br /><br />";  // PHP test 
echo "La connexion à la DB peut prendre jusqu'a 30s, veuillez rafraichir SVP<br /><br />";

$servername = "database"; // Resolving database with hostname
$username = "app";
$password = "app";

/* Create connection */
$conn = new mysqli($servername, $username, $password);

/* Check connection */
if ($conn->connect_error) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully to DB"; // DB test
?>