<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>video</title>
   
<style>
   
    /*web background*/
    .container{
        display:table;
        height:100%;
    }
    .row{
        display: table-cell;
        vertical-align: middle;
    }
    
    /* centered columns styles */
    .row-centered {
        text-align:center;
    }
    .col-centered {
        display:inline-block;
        float:none;
        text-align:left;
        margin-right:-4px;
    }
</style>

</head>

<body>

<?php
echo '<meta http-equiv="Content-Type" content="text/hmtl; charset=utf-8" />';
$MYSQL_IP="140.138.150.147";
	$User="student";
	$Pass="student";

	$link=mysqli_connect($MYSQL_IP,$User,$Pass);
  mysqli_select_db($link,"Group18");
  $query3 = "select * from video";
  $result3 = mysql_query($query3);
  $name3= array();
  $value3= array();
  while($data3 =mysql_fetch_array($result3,MYSQL_ASSOC)){
      $name3[]=$data3['star_name'];
      $value3[]=$data3['block_id'];}

	$query = "select * from video";
	$result = mysqli_query($link,$query);
	while ($data = mysqli_fetch_row($result))
	{
		echo '<meta http-equiv="Content-Type" content="text/hmtl; charset=utf-8" />';
		header("content-type:text/html;charset=gb2312");
		echo iconv("GB2312","UTF-8",'涓枃');
		echo "video_id=".$data[0]." video_name=".$data[1]. " video_grade=".$data[2]. " video_url=".$data[3]. " vip_require=".$data[4]. " video_view=".$data[5]. " episode_num=".$data[6]. " star_name=".$data[7]. " web_name=".$data[8]. " video_cover=".$data[9]. " video_area=".$data[10]. " video_rank=".$data[11]. " block_id=".$data[12]. " <br>\n";
	}
	mysqli_close($link);
//$flag = -1;

//if (isset($_POST["star_name"]))
//{
   
//     // 输入空值
//     if($_POST["star_name"]==''){
//       $flag = 0;
//   }
//   else{

//     $if_exist = mysql_query("select star_name from star_info where star_name = ".$_POST["star_name"]." ;");
//     $tmp_row = mysql_fetch_row($if_exist,MYSQL_ASSOC);
//     if ($if_exist==[] || $tmp_row==[]){
//       echo "No relevant data in our database";
//         $flag = 1;
//         mysql_close($link);
//     }
   

// else{
//     $flag = 2;
//     $query3 = "select *";
//       $result3 = mysql_query($query3);
//       $name3= array();
//       $value3= array();
//       while($data3 =mysql_fetch_array($result3,MYSQL_ASSOC)){
//           $name3[]=$data3['star_name'];
//           $value3[]=$data3['block_id'];}
//   //   $name_que = "select star_name from star_info where =".$_POST["star_name"].";";
//   //   $birth_que = "select birth from star_info where =".$_POST["star_name"].";";
//   //   $gen_que = "select gender from star_info where =".$_POST["star_name"].";";
//   //   $birpl_que = "select bir_place from star_info where =".$_POST["star_name"].";";
//   //   $job_que = "select job from star_info where =".$_POST["star_name"].";";
//   //   $fan_que = "select weibo_fans from star_info where =".$_POST["star_name"].";";
//   //   $name = mysql_query($name_que);
//   //   $birth = mysql_query($birth_que);
//   //   $gender = mysql_query($gen_que);
//   //   $place = mysql_query($birpl_que);
//   //   $job = mysql_query($job_que);
//   //   $fan = mysql_query($fan_que);
//   //   $name3 = array();
//   // }
// //} 
// if ($flag == 0 || $flag == 1){
//     header('content-type:text/html;charset=utf-8');
//     $url='empty.html';
//     echo "<script>window.location.href='$url';</script>";
//   }
// 
?>


// <div class="container">
// <div class="row row-centered">
// <div class="well col-md-6 col-centered" style="background: rgba(255,255,255,0.8)">

// <div class="panel-group" id="accordion">
// 	<div class="panel panel-default">
// 		<div class="panel-heading">
// 			<h4 class="panel-title">
// 				<a data-toggle="collapse" data-parent="#accordion" 
// 				   href="#collapseOne">
// 					Star Name <?php echo $_POST["star_name"]; ?> !
// 				</a>
// 			</h4>
// 		</div>
// 		<div id="collapseOne" class="panel-collapse collapse in">
// 			<div class="panel-body">

//         INFOMATION<?php echo $name;?> <?php echo $name3;?>
				
// 			</div>
// 		</div>
//   </div>



// <a class='btn btn-primary' href='index.html'>back</a>

// </div>
// </div>
// </div>


// <script type="text/javascript">
// 	$(function () { $('#collapseOne').collapse('show')});
// 	$(function () { $('#collapseTwo').collapse('hide')});
// 	$(function () { $('#collapseThree').collapse('hide')});
//   $(function () { $('#collapseFour').collapse('hide')});
// </script> 

</body>
</html>