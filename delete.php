<?php
mysql_connect("localhost", "root", "");
mysql_select_db("layar");

if (isset($_GET['id'])){
	$id=$_GET['id'];
}

$x=mysql_query("delete from tlayar where id='$id'");	

		if ($x){
			header ("location:input.php");
		} else {
			echo "Gagal";
		}
?>