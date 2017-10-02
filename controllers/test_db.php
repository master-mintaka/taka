<?php
use core\DbFunctions;

require '../core/dbFunctions.php';
$table = "test_table";

$db = new DbFunctions($table);

$con = $db->con_obj();

require_once '../views/vista1.php';



?>