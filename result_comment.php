<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>comments</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <head runat="server">
                <meta charset="UTF-8">
                <title>明天不上课</title>
                <script src="echarts.js" type="text/javascript"></script>

		<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		
		<!-- Google Fonts
		============================================ -->
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,200,300,500,600,700,100' rel='stylesheet' type='text/css'>  
        
        <!-- Bootstrap CSS
		============================================ -->		
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
		<!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        
		<!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        
        <!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="lib/css/nivo-slider.css" type="text/css" />
		<link rel="stylesheet" href="lib/css/preview.css" type="text/css" media="screen" />
        
        <!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="css/animate.css">
        
        <!-- meanmenu.min CSS
		============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        
        <!-- jQuery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="css/jQuery-ui.css">
        
		<!-- normalize CSS
		============================================ -->
        <link rel="stylesheet" href="css/normalize.css">
        
		<!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="css/main.css">
        
		<!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="style.css">
        
		<!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        
		<!-- modernizr JS
		============================================ -->		
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

           <!--header-area start-->
    <div class="header-area home1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="classic-logo">
                            <a href="index.html">
                                    <img src="img/NEWLOGO.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="hidden-xs hidden-sm col-md-6 col-lg-6">
                        <div class="header-menu">
                            <ul id="nav">
                                <li><a href="index.html">HOME</a></li>
                                <li><a href="About-us.html">SUMMARY</a>
                                    <div class="sub-menu">
                                        <ul>
                                            <li><a href="VIDEONUMBER.html">VIDEO NUMBERS</a></li>
                                            <li><a href="VIP.html">VIP CONDITION</a></li>
                                            <li><a href="RANKINGS.html">RANKINGS</a></li>
                                            <li><a href="STARS.html">STARS</a></li>
                                            <li><a href="WEBSITE.html">WEBSITE INFO</a></li>
                                        </ul>
                                </li>
                                   
                                <li><a href="SEARCH.html">SEARCH</a></li>
                                <li><a href="INTERACTION.html">INTERACTION</a></li>
                              
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
       
        </div>
        
        <!--header-area start-->
      
      
        
        </div>
        <!--header-area start-->
        <!--portfolio area start-->
        <div class="porfolio-home">
            <div class="container">
                <div class="row">
                    <div class="col-md-16">
                        <div class="protfolio-menu">
                            <ul>
                                <li><a href="">Home</a> <i class="fa fa-angle-right"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- portfolio-area start -->
        <div class="portfolio-area column-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-16 col-sm-16 col-xs-16">
                    </div>
                    <div style=" background:url(img/mini.jpg);background-repeat:no-repeat;background-size:cover" >

                    <div class="portfolio-content">
                        <!-- single-portfolio start -->
                        
                        <?php
                            $mysqli_IP = "140.138.150.147";
                            $User = "student";
                            $Pass = "student";
                            $link = mysqli_connect($mysqli_IP,$User,$Pass) or die("error connecting") ;
                            mysqli_select_db($link,Group18);
                            mysqli_query($link,"set names 'utf8'"); 
                            if($_POST["video_name"]==''){
                                $test = 0;
                                mysqli_close($link);
                            }
                            else{
                            $whether_exist = mysqli_query($link,"select * from video natural join blocks where video_name = '".$_POST["video_name"]."' ;");
                            $row = mysqli_fetch_row($whether_exist);
                            if ($whether_exist==[] || $row==[]){
                                $test = 1;
                                mysqli_close($link);
                                
                            }
                            else{
                                $test = 2;
                                $video_que = "select * from video natural join blocks where video_name = '".$_POST["video_name"]."' ;";
                                $result_que =  "select comments.content from (video natural join comments) where video.video_name = '".$_POST["video_name"]."' ;";
                                $result = mysqli_query($link,$result_que);
                                $video = mysqli_query($link,$video_que);
                                while($data= mysqli_fetch_row($video))
                                echo '<a hred=><img src ='.$data[10].'></a><br><br><b>Name: </b>'.$data[3]."<br><b>Video Grade: </b>".$data[4]."<br><b>Video URL: </b><a href =".$data[5].">".$data[5]."</a><br><b>VIP Requirement: </b>".$data[6]."<br><b>Video View: </b>".$data[7]."<br><b>Episode Number: </b>".$data[8]."<br><b>Main Star Name: </b>".$data[9]."<br><b>Website: </b>".$data[0]."<br><b>Area: </b>".$data[11]."<br><b>Video Rank in their website: </b>".$data[12]."<br><b>Block: </b>".$data[13]."<br><br>";
                                echo "<b>Comment: </b><br>";
                                while($data= mysqli_fetch_row($result))
                                echo "<br><font style='color:#66CD00'><b>".$data[0]."</b></font><br>";              
                                
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
                        <br><br><br>
                        <div class="portfolio-menu">
                            <ul>
                                <li><a href="SEARCH.html">BACK TO SEARCH</a></li>
                            </ul>					
                        </div>
                        <br><br><br><br><br><br><br><br><br><br>
                                                                    <!-- single-portfolio end -->
                                                            
                                                                </div>
                                                            </div>
                                                        
                                                        </div>
                                                    </div>
                                                    <!-- portfolio-area end -->

                                      
        
        
        
        <!-- jquery
		============================================ -->		
        <script src="js/vendor/jquery-1.11.3.min.js"></script>
        
        <!-- price-slider JS
		============================================ -->		
        <script src="js/jquery-price-slider.js"></script>
        
		<!-- bootstrap JS
		============================================ -->		
        <script src="js/bootstrap.min.js"></script>
		<!-- wow JS
		============================================ -->		
        <script src="js/wow.min.js"></script>
		
        <!-- Nivo slider js
		============================================ --> 		
		<script src="lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
		<script src="lib/home.js" type="text/javascript"></script>	
        	
		<!-- meanmenu JS
		============================================ -->		
        <script src="js/jquery.meanmenu.js"></script>
        
		<!-- owl.carousel JS
		============================================ -->		
        <script src="js/owl.carousel.min.js"></script>
        
		<!-- mixitup js -->
        <script src="js/jquery.mixitup.min.js"></script>
        
        <!-- jquery.collapse js -->
        <script src="js/jquery.collapse.js"></script>
        
        <!-- scrollUp JS
		============================================ -->		
        <script src="js/jquery.scrollUp.min.js"></script>
        
		<!-- plugins JS
		============================================ -->		
        <script src="js/plugins.js"></script>
        
		<!-- main JS
		============================================ -->		
        <script src="js/main.js"></script>
    </body>
</html>
