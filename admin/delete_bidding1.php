<?php
include"dbconfig.php";
$n=iud("UPDATE `bidding` SET status=b'0' WHERE bid_id='".$_REQUEST['id']."'");
if($n==1)
{
	$p=iud("UPDATE `tender` SET allot=b'0' WHERE id='".$_REQUEST['tid']."'");
	if($p==1)
	{
	echo'<script>
	window.location="tables.php";
	</script>';	
	}
	
}
?>