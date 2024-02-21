<?php

require_once('config.php');
include('classes/Command.php');

$command = new Command();
$command->Bind("SELECT * FROM forums WHERE title LIKE '%" . $_POST['search_name'] . "%'   ORDER BY id DESC", "forum/table/index");
?>

 