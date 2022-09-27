<?php
include"dbconfig.php";
$n=iud("UPDATE `bidding` SET status=b'1' WHERE bid_id='".$_REQUEST['id']."'");
if($n==1)
{
	$p=iud("UPDATE `tender` SET allot=b'1' WHERE id='".$_REQUEST['tid']."'");
	if($p==1)
	{
	echo'<script>alert("Tender Confirm");
	window.location="tables.php";
	</script>';	
	}
	
}
?>