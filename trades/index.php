<HTML>
<head>
	
	<title>Omar Guzman's Website</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Keywords" content="Omar,Omar Guzman,finance,software engineer,computer science,day trade">
	<meta name="Description" content="Personal Website that displays my trades I make throughout the year.">
	<meta name="author" content ="Omar Guzman">
	<link rel="stylesheet" href="stylesheet.css">
</head>

<?php require 'inc.php'; ?>

<body>
	<nav>
		<ul>
			<li><a href="https://www.omarguzman.org">Home</a></li>
			<li><a href="https://resume.omarguzman.org">Resume</a></li>
			<li><a href="https://downloads.omarguzman.org">Downloads</a></li>
			<li><a class="active" href="https://trades.omarguzman.org">Trades</a></li>
			<li><a href="https://blog.omarguzman.org">Blog</a></li>
		</ul>
	</nav>
	<div class ="space"></div>
	<div class = "imgContainer">
		<img id="banner" src="bannner.jpg" alt="Banner Image"/>
		<div class="centered">Trades</div>
	</div>
	
	<div class ="space"></div>
	<?php
		$sql="SELECT * FROM Ticker_Record ORDER BY ID DESC";

		if ($result=mysqli_query($link,$sql))
		  {
		  // Fetch one and one row
		  while ($row=mysqli_fetch_row($result))
		    {
		    	echo "<section><header>$";
		    	echo "$row[1]</header>";
		    	echo "$row[2] Shares\t$$row[4] Used";
				echo "<br>$$row[3] Profit";
		    	echo "<article>$row[6]</article></section>";

		    	//echo $row[5];
		    	//echo $row[6];
		    	//echo $row[7];
		    	//echo $row[8];	
		    }
		  // Free result set
		  mysqli_free_result($result);
		}
		mysqli_close($link);

	?>
	
	<footer>
			<div class = "info">
				<div class = "siteMap">
					<br><h2>Site Map</h2>
					<a href="https://OmarGuzman.org">About Me</a> |
					<a href="https://resume.OmarGuzman.org">Resume</a> <br>
					<a href="https://downloads.OmarGuzman.org">Downloads</a> | 
					<a href="https://blog.OmarGuzman.org">Blog</a> |
					<a href="https://mobile.OmarGuzman.org">Mobile Version</a>
						<br><br>Created by Omar Guzman
				</div>
			</div>
	</footer>
	
</body>
</HTML>