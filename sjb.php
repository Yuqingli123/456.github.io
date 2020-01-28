<!DOCTYPE html>
<html lang="en">
<?php
$mysqli_IP = "140.138.150.147";
$User = "student";
$Pass = "student";
$link = mysqli_connect($mysqli_IP,$User,$Pass) or die("error connecting") ;
mysqli_select_db($link,Group18);

mysqli_query($link,"set names 'utf8'"); 

if($_POST["star_name"]==''){
    echo "This is an empty input.";
    $test = 0;
    mysqli_close($link);
}
else{
  $whether_exist = mysqli_query($link,"select star_name from star_info where star_name = '".$_POST["star_name"]."' ;");
  $row = mysqli_fetch_row($whether_exist);
  if ($whether_exist==[] || $row==[]){
    echo "No relevant data in our database";
    $test = 1;
    mysqli_close($link);
      
  }
  else{
   echo $job;
   echo "hhh";
    $test = 2;
    $name_que = "select star_name from star_info where star_name='".$_POST["star_name"]."';";
    $birth_que = "select birth from star_info where star_name='".$_POST["star_name"]."';";
    $gen_que = "select gender from star_info where star_name='".$_POST["star_name"]."';";
    $birpl_que = "select bir_place from star_info where star_name='".$_POST["star_name"]."';";
    $job_que = "select job from star_info where star_name='".$_POST["star_name"]."';";
    $fan_que = "select weibo_fans from star_info where star_name='".$_POST["star_name"]."';";
    $name = mysqli_query($link,$name_que);
    $birth = mysqli_query($link,$birth_que);
    $gender = mysqli_query($link,$gen_que);
    $place = mysqli_query($link,$birpl_que);
    $job = mysqli_query($link,$job_que);
    $fan = mysqli_query($link,$fan_que);
    while($data = mysqli_fetch_row($job))  
        echo $data[0];
    echo "hhh";
    mysqli_close($link);
  }
} 
if ($test == 0){
    header('content-type:text/html;charset=utf-8');
    $url='empty1.html';
    echo "<script>window.location.href='$url';</script>";
  }
elseif ($test == 1){    
    header('content-type:text/html;charset=utf-8');
    $url='empty2.html';
    echo "<script>window.location.href='$url';</script>";
  }

?>

</html>