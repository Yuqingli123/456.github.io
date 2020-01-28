<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Design Result</title>
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
                          
                        <?php
                            $block_name = $_POST["block"];
                            $web_name = $_POST["web"];
                            $area_name= $_POST["area"];
                            $view_name = $_POST["view"];

                            $block_TY = 0;
                            $block_AY = 0;
                            $block_MY = 0;
                            $block_VY = 0;
                            $block_TM = 0;
                            $block_AM = 0;
                            $block_MM = 0;
                            $block_VM = 0;
                            $block_TI = 0;
                            $block_AI = 0;
                            $block_MI = 0;
                            $block_VQ = 0;
                            $area_china = 0;
                            $area_wes = 0;
                            $area_japan = 0;
                            $area_else = 0;
                            if ($block_name == "TV series" and $web_name == "Youku"){
                                $block_TY = 1;
                                
                            }
                            if ($block_name == "Animation" and $web_name=="Youku"){
                                $block_AY = 1;
                                
                            }
                            if ($block_name == "Movie" and $web_name == "Youku"){
                                $block_MY = 1;
                                
                            }
                            if ($block_name == "Variety show" and $web_name == "Youku"){
                                $block_VY = 1;
                            
                            }
                            if( $block_name == "TV series" and $web_name == "Mango TV"){
                                $block_TM = 1;
                            
                            }
                            if ($block_name == "Animation" and $web_name == "Mango TV"){
                                $block_AM = 1;
                                
                            }
                            if ($block_name == "Movie" and $web_name == "Mango TV"){
                                $block_MM = 1;
                            
                            }
                            if ($block_name == "Variety show" and $web_name == "Mango TV"){
                                $block_VM = 1;
                                
                            }
                            if ($block_name == "TV series" and $web_name == "Iqiyi"){
                                $block_TI = 1;
                            
                            }
                            if ($block_name == "Animation" and $web_name=="Iqiyi"){
                                $block_AI = 1;
                                
                            }
                            if ($block_name == "Movie" and $web_name == "Iqiyi"){
                                $block_MI = 1;
                            
                            }
                            if ($block_name == "Variety show" and $web_name == "Iqiyi"){
                                $block_VQ = 1;
                            
                            }
                            if ($area_name == "China"){
                                $area_china = 1;

                            }
                            if ($area_name == "Western"){
                                $area_wes = 1;
                            
                            }
                            if ($area_name == "Japan&Korea"){
                                $area_japan = 1;
                                
                            }
                            if ($area_name == "Else"){
                                $area_else = 1;

                            }
                            if ($view_name == "Below 1000000"){
                                $view_num = 1;
                                
                            }
                            if ($view_name == "1000000-10000000"){
                                $view_num = 2;
                            
                            }
                            if ($view_name == "10000000-100000000"){
                                $view_num = 3;
                            
                            }
                            if ($view_name == "More"){
                                $view_num = 4;
                            
                            }

                            $prob_1 = exp(-2.8134+0.7802*$area_else-0.2283*$area_japan+0.7197*$area_china-0.2887*$view_num-0.4089*$block_AI-2.5471*$block_MI-0.4822*$block_MM-0.9776*$block_TY-3.8841*$block_AY+2.1737*$block_MY-3.1922*$block_VY)/(1+exp(-2.8134+0.7802*$area_else-0.2283*$area_japan+0.7197*$area_china-0.2887*$view_num-0.4089*$block_AI-2.5471*$block_MI-0.4822*$block_MM-0.9776*$block_TY-3.8841*$block_AY+2.1737*$block_MY-3.1922*$block_VY));
                            $prob_2 = exp(-1.7975+0.7802*$area_else-0.2283*$area_japan+0.7197*$area_china-0.2887*$view_num-0.4089*$block_AI-2.5471*$block_MI-0.4822*$block_MM-0.9776*$block_TY-3.8841*$block_AY+2.1737*$block_MY-3.1922*$block_VY)/(1+exp(-1.7975+0.7802*$area_else-0.2283*$area_japan+0.7197*$area_china-0.2887*$view_num-0.4089*$block_AI-2.5471*$block_MI-0.4822*$block_MM-0.9776*$block_TY-3.8841*$block_AY+2.1737*$block_MY-3.1922*$block_VY))-$prob_1;
                            $prob_3 = exp(1.6323+0.7802*$area_else-0.2283*$area_japan+0.7197*$area_china-0.2887*$view_num-0.4089*$block_AI-2.5471*$block_MI-0.4822*$block_MM-0.9776*$block_TY-3.8841*$block_AY+2.1737*$block_MY-3.1922*$block_VY)/(1+exp(1.6323+0.7802*$area_else-0.2283*$area_japan+0.7197*$area_china-0.2887*$view_num-0.4089*$block_AI-2.5471*$block_MI-0.4822*$block_MM-0.9776*$block_TY-3.8841*$block_AY+2.1737*$block_MY-3.1922*$block_VY))-$prob_2-$prob_1;
                            $prob_4 = 1-$prob_3-$prob_2-$prob_1;

                            $prob_1 = floor($prob_1*100)/100;
                            //$prob_1 = $prob_1.'%';

                            $prob_2 = floor($prob_2*100)/100;
                            //$prob_2 = $prob_2.'%';

                            $prob_3 = floor($prob_3*100)/100;
                            //$prob_3 = $prob_3.'%';

                            $prob_4 = floor($prob_4*100)/100;
                            //$prob_4 = $prob_4.'%';
                            ?>




                            <!doctype html>
                            <html lang="en">

                            <head runat="server">
                                <meta charset="UTF-8">
                                <title>Score Distribution</title>
                                <script src="echarts.js" type="text/javascript"></script>
                            </head>
                                
                            <body>
                                
                                <?php
                                    $block_name = $_POST["block"];
                                    $web_name = $_POST["web"];
                                    $area_name= $_POST["area"];
                                    $view_name = $_POST["view"];

                                    $block_TY = 0;
                                    $block_AY = 0;
                                    $block_MY = 0;
                                    $block_VY = 0;
                                    $block_TM = 0;
                                    $block_AM = 0;
                                    $block_MM = 0;
                                    $block_VM = 0;
                                    $block_TI = 0;
                                    $block_AI = 0;
                                    $block_MI = 0;
                                    $block_VQ = 0;
                                    $area_china = 0;
                                    $area_wes = 0;
                                    $area_japan = 0;
                                    $area_else = 0;
                                    if ($block_name == "TV series" and $web_name == "Youku"){
                                        $block_TY = 1;
                                        
                                    }
                                    if ($block_name == "Animation" and $web_name=="Youku"){
                                        $block_AY = 1;
                                        
                                    }
                                    if ($block_name == "Movie" and $web_name == "Youku"){
                                        $block_MY = 1;
                                        
                                    }
                                    if ($block_name == "Variety show" and $web_name == "Youku"){
                                        $block_VY = 1;
                                    
                                    }
                                    if( $block_name == "TV series" and $web_name == "Mango TV"){
                                        $block_TM = 1;
                                    
                                    }
                                    if ($block_name == "Animation" and $web_name == "Mango TV"){
                                        $block_AM = 1;
                                        
                                    }
                                    if ($block_name == "Movie" and $web_name == "Mango TV"){
                                        $block_MM = 1;
                                    
                                    }
                                    if ($block_name == "Variety show" and $web_name == "Mango TV"){
                                        $block_VM = 1;
                                        
                                    }
                                    if ($block_name == "TV series" and $web_name == "Iqiyi"){
                                        $block_TI = 1;
                                    
                                    }
                                    if ($block_name == "Animation" and $web_name=="Iqiyi"){
                                        $block_AI = 1;
                                        
                                    }
                                    if ($block_name == "Movie" and $web_name == "Iqiyi"){
                                        $block_MI = 1;
                                    
                                    }
                                    if ($block_name == "Variety show" and $web_name == "Iqiyi"){
                                        $block_VQ = 1;
                                    
                                    }
                                    if ($area_name == "China"){
                                        $area_china = 1;

                                    }
                                    if ($area_name == "Western"){
                                        $area_wes = 1;
                                    
                                    }
                                    if ($area_name == "Japan&Korea"){
                                        $area_japan = 1;
                                        
                                    }
                                    if ($area_name == "Else"){
                                        $area_else = 1;

                                    }
                                    if ($view_name == "Below 1000000"){
                                        $view_num = 1;
                                        
                                    }
                                    if ($view_name == "1000000-10000000"){
                                        $view_num = 2;
                                    
                                    }
                                    if ($view_name == "10000000-100000000"){
                                        $view_num = 3;
                                    
                                    }
                                    if ($view_name == "More"){
                                        $view_num = 4;
                                    
                                    }

                                    $prob_1 = exp(-2.8134+0.7802*$area_else-0.2283*$area_japan+0.7197*$area_china-0.2887*$view_num-0.4089*$block_AI-2.5471*$block_MI-0.4822*$block_MM-0.9776*$block_TY-3.8841*$block_AY+2.1737*$block_MY-3.1922*$block_VY)/(1+exp(-2.8134+0.7802*$area_else-0.2283*$area_japan+0.7197*$area_china-0.2887*$view_num-0.4089*$block_AI-2.5471*$block_MI-0.4822*$block_MM-0.9776*$block_TY-3.8841*$block_AY+2.1737*$block_MY-3.1922*$block_VY));
                                    $prob_2 = exp(-1.7975+0.7802*$area_else-0.2283*$area_japan+0.7197*$area_china-0.2887*$view_num-0.4089*$block_AI-2.5471*$block_MI-0.4822*$block_MM-0.9776*$block_TY-3.8841*$block_AY+2.1737*$block_MY-3.1922*$block_VY)/(1+exp(-1.7975+0.7802*$area_else-0.2283*$area_japan+0.7197*$area_china-0.2887*$view_num-0.4089*$block_AI-2.5471*$block_MI-0.4822*$block_MM-0.9776*$block_TY-3.8841*$block_AY+2.1737*$block_MY-3.1922*$block_VY))-$prob_1;
                                    $prob_3 = exp(1.6323+0.7802*$area_else-0.2283*$area_japan+0.7197*$area_china-0.2887*$view_num-0.4089*$block_AI-2.5471*$block_MI-0.4822*$block_MM-0.9776*$block_TY-3.8841*$block_AY+2.1737*$block_MY-3.1922*$block_VY)/(1+exp(1.6323+0.7802*$area_else-0.2283*$area_japan+0.7197*$area_china-0.2887*$view_num-0.4089*$block_AI-2.5471*$block_MI-0.4822*$block_MM-0.9776*$block_TY-3.8841*$block_AY+2.1737*$block_MY-3.1922*$block_VY))-$prob_2-$prob_1;
                                    $prob_4 = 1-$prob_3-$prob_2-$prob_1;

                                    $prob_1 = floor($prob_1*100)/100;
                                    //$prob_1 = $prob_1.'%';

                                    $prob_2 = floor($prob_2*100)/100;
                                    //$prob_2 = $prob_2.'%';

                                    $prob_3 = floor($prob_3*100)/100;
                                    //$prob_3 = $prob_3.'%';

                                    $prob_4 = floor($prob_4*100)/100;
                                    //$prob_4 = $prob_4.'%';
                                    ?>




                                    <!doctype html>
                                    <html lang="en">

                                    <head runat="server">
                                        <meta charset="UTF-8">
                                        <title>Score Distribution</title>
                                        <script src="echarts.js" type="text/javascript"></script>
                                    </head>
                                        
                                    <body>
                                        <div class="portfolio-menu">
                                            <ul>
                                            <li><a href="DESIGN.html">BACK TO DESIGN</a></li>
                                            </ul>					
                                        </div> 
                                        <div style=" background:url(mail.jpg);background-repeat:no-repeat;background-size:cover" >
                                        <?php
                                        echo("<p style='font-size:14pt;color:".$title.";text-align:center'><b>The probability to get a bad video is (less than 6.0): </b>"); 
                                        echo ("<font style='font-size:16px;color: #FF7575'> <b>$prob_1</b></font>");
                                        echo("<p style='font-size:14pt;color:".$title.";text-align:center'><b>The probability to get an ordinary video is (6.0-7.0): </b>"); 
                                        echo ("<font style='font-size:16px;color: #FF7575'> <b>$prob_2</b></font>");
                                        echo("<p style='font-size:14pt;color:".$title.";text-align:center'><b>The probability to get a good video is (7.0-8.0): </b>"); 
                                        echo ("<font style='font-size:16px;color: #FF7575'> <b>$prob_3</b></font>");
                                        echo("<p style='font-size:14pt;color:".$title.";text-align:center'><b>The probability to get an excellent video is (more than 8.0): </b>"); 
                                        echo ("<font style='font-size:16px;color: #FF7575'> <b>$prob_4</b></font>");
                                        ?>
                                        
                                        <div id="main" style="width: 600px;height:400px;left:250px;"></div>
                                        <script type="text/javascript">// 基于准备好的dom，初始化echarts实例
                                            
                                            var myChart = echarts.init(document.getElementById('main'));
                                            var data = eval('<?php echo json_encode($prob_1);?>')
                                            var data1 = eval('<?php echo json_encode($prob_2);?>')
                                            var data2 = eval('<?php echo json_encode($prob_3);?>')
                                            var data3 = eval('<?php echo json_encode($prob_4);?>')

                                            
                                            option = {
                                                color: ['#ffa500', '#eeaeee', '#ff6347','#8470ff'],
                                                title : {
                                                    text: 'Score Distribution of Your Video',
                                                    x:'center',
                                                    top: 20,
                                                    textStyle: {
                                                        color: '#8a8a8a'
                                                    }
                                                },
                                                tooltip : {
                                                    trigger: 'item',
                                                    formatter: "{a} <br/>{b} : {c} ({d}%)"
                                                },
                                                toolbox: {
                                                    show : true,
                                                    feature : {
                                                        mark : {show: true},
                                                        dataView : {show: true, readOnly: false},
                                                        magicType : {
                                                            show: true,
                                                            type: ['pie', 'funnel']
                                                        },
                                                        restore : {show: true},
                                                        saveAsImage : {show: true}
                                                    }
                                                },
                                                calculable : true,
                                                series : [
                                                    {
                                                        name:'probability',
                                                        type:'pie',
                                                        radius : [70, 110],
                                                        center : ['50%', '50%'],
                                                        label: {
                                                            normal: {
                                                                show: true
                                                            },
                                                            emphasis: {
                                                                show: true
                                                            }
                                                        },
                                                        lableLine: {
                                                            normal: {
                                                                show: false
                                                            },
                                                            emphasis: {
                                                                show: true
                                                            }
                                                        },
                                                        data:[
                                                            {value:data, name:'<6.0'},
                                                            {value:data1, name:'6.0-7.0'},
                                                            {value:data2, name:'7.0-8.0'},
                                                            {value:data3, name:'>8.0'},
                                                        ]
                                                    }

                                                ]
                                            };

                                            // 使用刚指定的配置项和数据显示图表。
                                            myChart.setOption(option);
                                        </script>
                                    
                                    </body>
                                        
                                        
                                    </html>
                                    </body>
                                    </html>

  
  











                            </body>
                                
                                
                            </html>
                            </body>
                            </html>

  
  











                        
                        
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
