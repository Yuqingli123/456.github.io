<?php
	echo '<meta http-equiv="Content-Type" content="text/hmtl; charset=utf-8" />';

	$MYSQL_IP="140.138.150.147";
	$User="student";
	$Pass="student";

	$link=mysqli_connect($MYSQL_IP,$User,$Pass);
	mysqli_select_db($link,"Group18");

	$query = "select * from video";
	$result = mysqli_query($link,$query);
	while ($data = mysqli_fetch_row($result))
	{
		echo '<meta http-equiv="Content-Type" content="text/hmtl; charset=utf-8" />';
		header("content-type:text/html;charset=gb2312");
		echo iconv("GB2312","UTF-8",'中文');
		echo "video_id=".$data[0]." video_name=".$data[1]. " video_grade=".$data[2]. " video_url=".$data[3]. " vip_require=".$data[4]. " video_view=".$data[5]. " episode_num=".$data[6]. " star_name=".$data[7]. " web_name=".$data[8]. " video_cover=".$data[9]. " video_area=".$data[10]. " video_rank=".$data[11]. " block_id=".$data[12]. " <br>\n";
	}
	mysqli_close($link);
?>

