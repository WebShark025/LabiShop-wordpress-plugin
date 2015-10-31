<?php
//CREATE DB :

$servername = "localhost";
$username = "labishop_dbb";
$password = "Passwd";
$dbname = "labishop_dbb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE Orders (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
itemname VARCHAR(150) NOT NULL,
fullname VARCHAR(150) NOT NULL,
price VARCHAR (85) NOT NULL,
isdone VARCHAR(150) NOT NULL,
get_id VARCHAR(150) NOT NULL,
address VARCHAR(300) NOT NULL,
phone VARCHAR(17) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Orders created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
