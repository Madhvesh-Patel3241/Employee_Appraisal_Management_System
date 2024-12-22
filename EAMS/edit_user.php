<<<<<<< HEAD
<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM users where id = ".$_GET['id'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'new_user.php';
=======
<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM users where id = ".$_GET['id'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'new_user.php';
>>>>>>> 94bed2f (Add EAMS)
?>