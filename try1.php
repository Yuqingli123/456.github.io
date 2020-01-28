<?php
	$MYSQL_IP="140.138.150.147";
	$User="student";
	$Pass="student";

	$link=mysqli_connect($MYSQL_IP,$User,$Pass);
	mysqli_select_db($link,"Group18");

	$query = "select * from video";
	$result = mysqli_query($link,$query);
	while ($data = mysqli_fetch_row($result))
	{
			echo "name=".$data[0]."<br>\n";
	}
	mysqli_close($link);
?>
