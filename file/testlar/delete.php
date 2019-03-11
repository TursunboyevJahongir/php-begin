<?php
include 'db_user.php';
$id = $_GET['id'];
if(empty($id)) {
    echo 'ID YOQ'; exit();
}
else
{
    $query = $connection->query('DELETE FROM user WHERE id = '.$id);
    header('Location: index.php');
}