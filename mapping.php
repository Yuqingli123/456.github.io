<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Search Result</title>
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
                                <li><a href="index.html">Home</a> <i class="fa fa-angle-right"></i></li>
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
                    
                    <div class="portfolio-content">
                        <!-- single-portfolio start -->
                        <div class="porfolio-home">
                            <ul>
                                <li><a href="MAPPING.html" style="color:#001" ><font size:"40"><b>BACK TO SEARCH</b></font></a></li>
                            </ul>					
                        </div>
                        <?php 
                            $food = $_POST["Favorite_food"];
                            $country = $_POST["Favorite_country"];
                            $color = $_POST["Lucky_color"];
                            $possess = $_POST["Hope_to_possess"];
                            $dressing = $_POST["Dressing_preference"];
                            $month = array();
                            if ($food == "Hotpot"){
                                array_push($month,1);
                            }
                            if ($food == "Durian"){
                                array_push($month,2);
                            }
                            if ($food == "Ice cream"){
                                array_push($month,3);
                            }
                            if ($food == "Chocolate"){
                                array_push($month,4);
                            }
                            if ($food == "Biscuit"){
                                array_push($month,5);
                            }
                            if ($food == "Chips"){
                                array_push($month,6);
                            }
                            if ($food == "Salad"){
                                array_push($month,7);
                            }
                            if ($food == "Yogurt"){
                                array_push($month,8);
                            }
                            if ($food == "Hotdog"){
                                array_push($month,9);
                            }
                            if ($food == "Noodles"){
                                array_push($month,10);
                            }
                            if ($food == "Bread"){
                                array_push($month,11);
                            }
                            if ($food == "Dumpling"){
                                array_push($momth,12);
                            }
                            if ($country == "China"){
                                array_push($month,1);
                            }
                            if ($country == "Australia"){
                                array_push($month,2);
                            }
                            if ($country == "Russia"){
                                array_push($month,3);
                            }
                            if ($country == "Britain"){
                                array_push($month,4);
                            }
                            if ($country == "India"){
                                array_push($month,5);
                            }
                            if ($country == "US"){
                                array_push($month,6);
                            }
                            if ($country == "Korea"){
                                array_push($month,7);
                            }
                            if ($country == "Japan"){
                                array_push($month,8);
                            }
                            if ($country == "Spain"){
                                array_push($month,9);
                            }
                            if ($country == "Germany"){
                                array_push($month,10);
                            }
                            if ($country == "France"){
                                array_push($month,11);
                            }
                            if ($country == "Italy"){
                                array_push($month,12);
                            }
                            if ($color == "Red"){
                                array_push($month,1);
                            }
                            if ($color == "Purple"){
                                array_push($month,2);
                            }
                            if ($color == "Pink"){
                                array_push($month,3);
                            }
                            if ($color == "Earth"){
                                array_push($month,4);
                            }
                            if ($color == "Brown"){
                                array_push($month,5);
                            }
                            if ($color == "Yellow"){
                                array_push($month,6);
                            }
                            if ($color == "Orange"){
                                array_push($month,7);
                            }
                            if ($color == "Grey"){
                                array_push($month,8);
                            }
                            if ($color == "Black"){
                                array_push($month,9);
                            }
                            if ($color == "White"){
                                array_push($month,10);
                            }
                            if ($color == "Blue"){
                                array_push($month,11);
                            }
                            if ($color == "Green"){
                                array_push($month,12);
                            }
                            if ($possess == "Courage"){
                                array_push($month,1);
                            }
                            if ($possess == "Wealth"){
                                array_push($month,2);
                            }
                            if ($possess == "Freedom"){
                                array_push($month,3);
                            }
                            if ($possess == "Family"){
                                array_push($month,4);
                            }
                            if ($possess == "Self-respect"){
                                array_push($month,5);
                            }
                            if ($possess == "Listener"){
                                array_push($month,6);
                            }
                            if ($possess == "Friend"){
                                array_push($month,7);
                            }
                            if ($possess == "Intelligence"){
                                array_push($month,8);
                            }
                            if ($possess == "Fashion"){
                                array_push($month,9);
                            }
                            if ($possess == "Trust"){
                                array_push($month,10);
                            }
                            if ($possess == "Inspiration"){
                                array_push($month,11);
                            }
                            if ($possess == "Dream"){
                                array_push($month,12);
                            }
                            if ($dressing == "Sportswear"){
                                $sex = "M";
                            }
                            if ($dressing == "Skirt"){
                                $sex = "F";
                            }
                            $result = array_count_values($month);
                            //echo $result;
                            $max_value = max(array_count_values($month));
                            //echo $type;
                            //print $max_value;
                            $month_value = array_search($max_value,$result);
                            $type = gettype($month_value);
                            //echo $type;



                            if ($month_value == 1 and $sex == "F"){
                                $star_name = "周冬雨";
                                echo("<p style='font-size:24pt;color:".$title.";text-align:center'>$star_name has the highest matching degree with you<p>");
                                echo "<br><img   src=\"明星pic/周冬雨.jpg\"><br>";
                            }
                            if ($month_value == 2 and $sex == "F"){
                                $star_name = "章子怡";
                                echo("<p style='font-size:24pt;color:".$title.";text-align:center'>$star_name has the highest matching degree with you<p>");
                                echo "<br><img src=\"明星pic/章子怡.jpg\"><br>";
                            }
                            if ($month_value == 3 and $sex == "F"){
                                $star_name = "马思纯";
                                echo("<p style='font-size:24pt;color:".$title.";text-align:center'>$star_name has the highest matching degree with you<p>");
                                echo "<br><img  src=\"明星pic/马思纯.jpg\"><br>";
                            }
                            if ($month_value == 4 and $sex == "F"){
                                $star_name = "董洁";
                                echo("<p style='font-size:24pt;color:".$title.";text-align:center'>$star_name has the highest matching degree with you<p>");
                                echo "<br><img  src=\"明星pic/董洁.jpg\"><br>";
                            }
                            if ($month_value == 5 and $sex == "F"){
                                $star_name = "谢娜";
                                echo("<p style='font-size:24pt;color:".$title.";text-align:center'>$star_name has the highest matching degree with you<p>");
                                echo "<br><img   src=\"明星pic/谢娜.jpg\"><br>";
                            }
                            if ($month_value == 6 and $sex == "F"){
                                $star_name = "迪丽热巴";
                                echo("<p style='font-size:24pt;color:".$title.";text-align:center'>$star_name has the highest matching degree with you<p>");
                                echo "<br><img  src=\"明星pic/迪丽热巴.jpg\"><br>";
                            }
                            if ($month_value == 7 and $sex == "F"){
                                $star_name = "景甜";
                                echo("<p style='font-size:24pt;color:".$title.";text-align:center'>$star_name has the highest matching degree with you<p>");
                                echo "<br><img  src=\"明星pic/景甜.jpg\"><br>";
                            }
                            if ($month_value == 8 and $sex == "F"){
                                $star_name = "郑爽";
                                echo("<p style='font-size:24pt;color:".$title.";text-align:center'>$star_name has the highest matching degree with you<p>");
                                echo "<br><img  src=\"明星pic/郑爽.jpg\"><br>";
                            }
                            if ($month_value == 9 and $sex == "F"){
                                $star_name = "孙俪";
                                echo("<p style='font-size:24pt;color:".$title.";text-align:center'>$star_name has the highest matching degree with you<p>");
                                echo "<br><img  src=\"明星pic/孙俪.jpg\"><br>";
                            }
                            if ($month_value == 10 and $sex == "F"){
                                $star_name = "赵丽颖";
                                echo("<p style='font-size:24pt;color:".$title.";text-align:center'>$star_name has the highest matching degree with you<p>");
                                echo "<br><img  src=\"明星pic/赵丽颖.jpg\"><br>";
                            }
                            if ($month_value == 11 and $sex == "F"){
                                $star_name = "杨紫";
                                echo("<p style='font-size:24pt;color:".$title.";text-align:center'>$star_name has the highest matching degree with you<p>");
                                echo "<br><img  src=\"明星pic/杨紫.jpg\"><br>";
                            }
                            if ($month_value == 12 and $sex == "F"){
                                $star_name = "唐嫣";
                                echo("<p style='font-size:24pt;color:".$title.";text-align:center'>$star_name has the highest matching degree with you<p>");
                                echo "<br><img  src=\"明星pic/唐嫣.jpg\"><br>";
                            }
                            if ($month_value == 1 and $sex == "M"){
                                $star_name = "陆毅";
                            
                                echo("<p style='font-size:24pt;color:".$title.";text-align:center'><font face=Trebuchet MS >$star_name has the highest matching degree with you</font><p>");
                                echo "<br><img src=\"明星pic/陆毅.jpg\"><br>";
                                
                            }
                            if ($month_value == 2 and $sex == "M"){
                                $star_name = "张宥浩";
                                echo("<p style='font-size:24pt;color:".$title.";text-align:center'>$star_name has the highest matching degree with you<p>");
                                echo "<br><img  src=\"明星pic/张宥浩.jpg\"><br>";
                            }
                            if ($month_value == 3 and $sex == "M"){
                                $star_name = "刘烨";
                                echo("<p style='font-size:24pt;color:".$title.";text-align:center'>$star_name has the highest matching degree with you<p>");
                                echo "<br><img src=\"明星pic/刘烨.jpg\"><br>";
                            }
                            if ($month_value == 4 and $sex == "M"){
                                $star_name = "朱亚文";
                                echo("<p style='font-size:24pt;color:".$title.";text-align:center'>$star_name has the highest matching degree with you<p>");
                                echo "<br><img  src=\"明星pic/朱亚文.jpg\"><br>";
                            }
                            if ($month_value == 5 and $sex == "M"){
                                $star_name = "潘粤明";
                                echo("<p style='font-size:24pt;color:".$title.";text-align:center'>$star_name has the highest matching degree with you<p>");
                                echo "<br><img  src=\"明星pic/潘粤明.jpg\"><br>";
                            }
                            if ($month_value == 6 and $sex == "M"){
                                $star_name = "郭家铭";
                                echo("<p style='font-size:24pt;color:".$title.";text-align:center'>$star_name has the highest matching degree with you<p>");
                                echo "<br><img  src=\"明星pic/郭家铭.jpg\"><br>";
                            }
                            if ($month_value == 7 and $sex == "M"){
                                $star_name = "单明凯";
                                echo("<p style='font-size:24pt;color:".$title.";text-align:center'>$star_name has the highest matching degree with you<p>");
                                echo "<br><img src=\"明星pic/单明凯.jpg\"><br>";
                            }
                            if ($month_value == 8 and $sex == "M"){
                                $star_name = "张若昀";
                                echo("<p style='font-size:24pt;color:".$title.";text-align:center'>$star_name has the highest matching degree with you<p>");
                                echo "<br><img  src=\"明星pic/张若昀.jpg\"><br>";
                            }
                            if ($month_value == 9 and $sex == "M"){
                                $star_name = "杨洋";
                                echo("<p style='font-size:24pt;color:".$title.";text-align:center'>$star_name has the highest matching degree with you<p>");
                                echo "<br><img src=\"明星pic/杨洋.jpg\"><br>";
                            }
                            if ($month_value == 10 and $sex == "M"){
                                $star_name = "李健";
                                echo("<p style='font-size:24pt;color:".$title.";text-align:center'>$star_name has the highest matching degree with you<p>");
                                echo "<br><img  src=\"明星pic/李健.jpg\"><br>";
                            }
                            if ($month_value == 11 and $sex == "M"){
                                $star_name = "易烊千玺";
                                echo("<p style='font-size:24pt;color:".$title.";text-align:center'>$star_name has the highest matching degree with you<p>");
                                echo "<br><img  src=\"明星pic/易烊千玺.jpg\"><br>";
                            }
                            if ($month_value == 12 and $sex == "M"){
                                $star_name = "靳东";
                                echo("<p style='font-size:24pt;color:".$title.";text-align:center'>$star_name has the highest matching degree with you<p>");
                                echo "<br><img  src=\"明星pic/靳东.jpg\"><br>";
                            }
                            ?>





                        
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
