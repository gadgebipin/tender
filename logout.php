<?php
session_Start();
session_destroy();
header("location:index.php");
?>