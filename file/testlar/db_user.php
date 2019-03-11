
<?php

$dsn = 'mysql:host=localhost;dbname=project_contact';
$db_user = 'root';
$db_password = '';
$connection = new PDO($dsn, $db_user, $db_password);


//$query = $connection->query(
//    'INSERT INTO user (first_name, last_name, phone) VALUES ("John", "Doe", "+87987989987")'
//);
// $query = $connection->prepare(
//    'INSERT INTO user (first_name, last_name, phone) VALUES (?, ?, ?)'
// );
// for ($index = 6; $index <=50; $index++)
//    $query->execute(['john '. $index, 'Doe'. $index, '+97979797797']);