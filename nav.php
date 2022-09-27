
<ul class="res">
	<?php
	if(isset($_SESSION['login']) && isset($_SESSION['isadmin']) && $_SESSION['isadmin']==0)
	{
		?>
		<li><a  href="index.php">Home</a></li>
			<li><a href="tender.php">Tenders</a></li>
					<li><a href="mybiddings.php">My Biddings</a></li>
					<li><a href="confirm_biddings.php">Confirm Biddings </a></li>
						<li><a href="logout.php">Logout</a></li>
					
	<?php	
	}
	else
	{
		?>
		<li><a class="active" href="index.php">Home</a></li>
		<li><a href="tender.php">Tenders</a></li>
			
					<li><a href="register.php">Register</a></li>
					<li><a href="login.php">Login</a></li>
		<?php
	}
	?>				
					</ul>