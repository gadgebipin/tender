<?php
include"dbconfig.php";
$n=iud("DELETE FROM `tender` WHERE id='".$_REQUEST['id']."'");
if($n==1)
{
	$n=iud("DELETE FROM `bidding` WHERE tenderid='".$_REQUEST['id']."'");
	echo'<script>alert("Tender closed");
	window.location="tables.php";
	</script>';
}
?>
