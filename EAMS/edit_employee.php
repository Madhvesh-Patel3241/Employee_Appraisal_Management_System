<<<<<<< HEAD
<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM employee_list where id = ".$_GET['id'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'new_employee.php';
=======
<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM employee_list where id = ".$_GET['id'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'new_employee.php';
>>>>>>> 94bed2f (Add EAMS)
?>