<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Recommendation Result</title>
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
                                        $star = $_POST["input"];
                                        $MYSQL_IP="140.138.150.147";
                                        $User="student";
                                        $Pass="student";

                                        $link=mysqli_connect($MYSQL_IP,$User,$Pass);
                                        mysqli_select_db($link,"Group18");
                                        mysqli_query($link,"set names 'utf8'");
                                        $cluster_1 = array("赵丽颖","景甜","谭松韵","陈乔恩","谢娜","霍思燕","李沁","唐艺昕","李菲儿","章子怡","白百何","杨颖","徐璐","杨幂","唐嫣","郑爽","孙俪","杨紫","马思纯","周冬雨","迪丽热巴","胡杏儿","秦岚","鞠婧祎","娄艺潇","关晓彤","佘诗曼","闫妮","刘涛","黄圣依","郭碧婷","张歆艺","韩雪","佟丽娅","张馨予","蒋欣");
                                        $cluster_2 = array("杨洋","易烊千玺","杜海涛","胡一天","刘烨","小沈阳","何炅","魏大勋","张艺兴","张若昀","杜江","李易峰","刘昊然", "马天宇","黄晓明","林更新","姜文","甄子丹" ,"吴京","黄渤" ,"陈思诚","古天乐","陈赫","井柏然","王宝强","郭富城","郑恺","邓超","陈翔","韩庚","成龙","陆毅","孙红雷","蒋劲夫","朱一龙","靳东","徐海乔","朱亚文","吴亦凡","郭德纲","罗晋","陈伟霆","张一山","李晨","张亮","张翰","胡歌","明道","苏有朋","陈坤","邓伦","吴磊","熊梓淇","陈学冬","贾乃亮","鹿晗");
                                        $cluster_3 = array("彭昱畅" ,   "赵英博" ,       "徐峥"     ,     "沈腾"   ,    "张译"      ,    "岳松"  ,        "赵文卓",        "斯蒂芬·马布里", "大鹏"     ,   "刘飞"    ,      "白客"      ,    "郑伊健"       , "梁朝伟"    ,    "张涵予"    ,    "黄秋生"     ,   "黄轩"     ,"金世佳"   ,     "李健"     ,     "杨烁"       ,   "郭家铭"       ,"潘粤明"     ,   "吴秀波"     ,   "汪铎"        ,  "高瀚宇"       ,"庞瀚辰"      ,  "聂远"     ,     "张宥浩"    ,    "刘屹宸"       , "吴昊泽"    ,    "张艺谋"   ,     "霍政谚"     ,   "陈昊"         , "葛优"   ,       "刘小光"   ,     "释小龙"     ,   "李连杰"       ,"陈龙"    ,      "高云翔"    ,    "张国立"   ,     "李光洁"       ,"宋威龙"    ,    "张云龙"   ,     "乔振宇" );
                                        $cluster_4 = array("罗志祥", "陈小春", "钟汉良", "张智霖" ,"陈柏霖", "李治廷" ,"汪东城","郑元畅", "黄宗泽", "彭于晏");
                                        $cluster_5 = array("南笙"   ,"徐冬冬”, “张子枫", "林允"  , "蒋勤勤", "杨子姗", "董洁"  ,"金晨" ,  "莫小奇" ,"巩俐”,”张佳宁", "李兰迪", "蒋雯丽" ,"杜若溪","阚清子" ,"李溪芮" ,"颖儿" ,  "张予曦");
                                        $cluster_6 = array("李孟羲", "郎月婷", "李若彤" ,"郝蕾" ,  "张墨锡" ,"马丽" ,  "杨安琪","张柏芝", "江涛" ,  "柴碧云");
                                        $cluster_7 = array("洪金宝"  ,    "吴孟达"    ,  "彭禺厶"    ,  "林正英"  ,"周星驰"   ,   "尊龙"     ,   "李炳渊" ,     "韩志硕"  ,"刘煜"      ,  "钱小豪"  ,    "谢苗"     ,   "张浩" ,"唐国强"  ,    "赵东昊"     , "丹尼斯·奎德", "刘家辉"   ,"午马"     ,   "刘锡明"  ,    "张杰"      ,  "齐奎"   ,"陈创"    ,    "董勇"      ,  "张嘉译"  ,    "陈道明", "宋宁峰"  ,    "项秋良"    ,  "任德勇"   ,   "史磊"  , "郑拓疆"  ,    "郝荣光"   ,   "大力"      ,  "释彦能"    ,"王九胜"  ,    "杨骏"    ,    "黄健中"    ,  "关尔"    , "徐俊"   ,     "单明凯"    ,  "颜敬杰" ,     "柳云龙"     , "王鹤棣"     );
                                        $cluster_8 = array("克里斯·海姆斯沃斯" ,"道恩·强森"  ,      "小罗伯特·唐尼"    ,"吴彦祖"  );        
                                        $cluster_9 = array("金秀贤");
                                        $cluster_10 = array("森田成一"    ,  "杉田智和"    ,  "古川慎"  ,      "丰永利行"     , "山下大辉"   ,   "畠中祐"  ,"子安武人"  ,    "平川大辅"    , "兴津和幸"    ,  "村濑步"     ,   "满岛真之介" ,   "河西健吾"  , "小日向文世"   , "岛崎信长"  ,    "入野自由"  ,    "小野贤章"   ,"福岛润"     ,   "特克斯·艾弗里");
                                        $cluster_11 = array("川上伦子" ,  "小林沙苗" ,  "五十岚裕美", "泽城美雪" ,  "种崎敦美" , "堀江由衣" ,  "原纱友里" ,  "悠木碧"   ,  "平田广明");
                                        $cluster_12 = array("周渝民"  , "苗侨伟" ,  "谢天华"   ,"张卫健"   ,"林保怡"   ,"陈浩民" ,"郭晋安",   "任达华","欧阳震华", "王晶"  );
                                        $cluster_13 = array("王浩信" ,"黄智贤" ,"黄日华”, “马德钟", "黎耀祥", "刘松仁" ,"吕颂贤","陶大宇" ,"吴启华", "潘志文", "岳华" ,  "江华"  , "萧正楠", "黄一山","袁和平", "刘伟强", "郑昌和" ,"林超贤","张家辉", "柯受良", "徐克" );
                                        $cluster_14 = array("郭可盈", "邵美琪", "万绮雯", "毛舜筠", "周海媚");
                                        $cluster_15 = array("朱茵" ,  "米雪"  , "邓萃雯" ,"关咏荷" ,"钟嘉欣");
                                        $cluster_16 = array("Mike");
                                        $cluster_18 = array("凉生，我们可不可以不忧伤 TV版", "三生三世十里桃花", "区小队"    ,  "凉生我们可不可以不忧伤"  , "黄土高天"         , "惊蛰"    ,      "战地枪王"     , "何以笙箫默"  );
                                        $cluster_19 = array("我们的四十年" ,  "正阳门下小女人" ,"我们的四十年"  , "创业时代"   ,    "悍城"  ,"你迟到的许多年", "欢乐颂2"  );
                                        $cluster_20 = array("惊蛰"  ,  "黄土高天",  "人民的名义 TV版"   ,"锦绣未央"   , "战地枪王" , "急诊科医生"    ,"决战燕子门"   , "我的！体育老师 TV版");
                                        $cluster_21 = array("好先生", "知否知否应是绿肥红瘦"   , "绝密任务"    , "我和僵尸有个约会 第一部"       , "我和僵尸有个约会 第三部 永恒国度"    , "雪山飞狐"  ,"大侠霍元甲"  ,"八仙过海"   , "小宝与康熙"  ,"大头绿衣斗僵尸"    , "古灵精探","洪熙官","扫黄先锋"  , "杨贵妃" , "小当家"  ,"施公奇案Ⅱ"    ,"歌手 2018"  , "德云社岳云鹏相声专场宁波站 2018" , "德云社张云雷杨九郎相声专场天津省亲 2018", "香肠派对"   , "0号宿舍" ,"峡谷重案组"  ,"下田去", "小米酒大陆游历记"    , "神兽金刚4 邦宝历险记"  ,  "多宝萌萌创意课堂"   , "记忆U盘"   , "猛兽战警"   , "天谕 第2季 苍古之绊" ,"封神降魔"  , "奇门遁甲"   , "捉妖记2"  , "前任3：再见前任"  , "最美的时候遇见你"   , "我是女王"  , "笑功震武林" , "反贪风暴2" ,"陪安东尼度过漫长岁月" , "追凶者也" );
                                        $cluster_22 = array("楚汉传奇",    "谁家灶头无烟","十万个冷笑话 第三季" ,   "妖神记"  ,"画江湖之侠岚"      ,"巴啦啦小魔仙之梦幻旋律" , "火线传奇 第一季"    ,     "一人之下 第二季","王者歪传 第一季" , "火线传奇 第三季"  , "火线传奇 第二季"    ,     "茶啊二中 第一季"   ,"十万个冷笑话 第二季" ,    "我的逆天神器"   ,"转战之超旋斗士"    ,      "画江湖之不良人 第2季" , "天才玩偶 日语版"     ,    "百鬼幼儿园"    , "赛尔号 第9季 霹雳九重天", "天才玩偶"  ,"请吃红小豆吧！"         ,"Gon的旱獭"    , "Gon的旱獭 第2季"      ,   "暮光幻影 第1季"  , "暮光幻影 第1季 日语版" );
                                        $cluster_23 = array("我的保姆手册");
                                        $cluster_24 = array("原来你还在这里");
                                        $cluster_25 = array("回到明朝当王爷之杨凌传", "幸福一家人");
                                        $cluster_26 = array("幸福一家人"  ,     "蚀日风暴"     ,    "你和我的倾城时光");
                                        $cluster_27 = array("镇魂"      ,               "兄弟"      , "是咁的，法官阁下"  ,       "延禧攻略"      ,"追捕者"    ,               "唐砖"   , "医妃难囚"        ,         "生活对我下手了"      ,"芸汐传"          ,         "娘道"  , "为了你我愿意热爱整个世界", "小妖的金色城堡"   ,"因为爱你"      ,           "橙红年代"   , "鬼谷门"  ,                 "爱情公寓4"   ,"玄门大师"      ,           "琅琊榜之风起长林" , "失宠王妃之结缘"   ,        "你好，旧时光"    ,      "火王之破晓之战"    ,       "走火"    , "钟馗捉妖记"          ,     "风筝"  , "金婚" );
                                        $cluster_28 = array("微微一笑很倾城" ,      "甄嬛传", "虎啸龙吟"        ,   "火王之破晓之战 TV版","春风十里不如你"  ,  "媚者无疆"   , "古剑奇谭2"      ,      "烈火如歌"  ,"飞虎之潜行极战"   ,    "神雕侠侣"   , "鹿鼎记","香蜜沉沉烬如霜"      );
                                        $cluster_29 = array("恋爱先生"    , "热血长安"     ,   "萌妃驾到"  , "寻秦记"     ,     "小丈夫"   ,       "跳跃生命线"    , "寻秦记"    ,      "法证先锋Ⅲ"    ,   "法证先锋II"    , "狐狸之声"    ,    "狐狸之声 日文版");
                                        $cluster_30 = array("S.C.I.谜案集"     ,    "镇魂街 第一季"      , "天龙八部"   ,          "刑事侦缉档案 IV"     , "使徒行者"        ,     "大时代"  ,"射雕英雄传之华山论剑" ,"射雕英雄传之东邪西毒","射雕英雄传之铁血丹心" ,"金枝欲孽"   , "我不是药神"   ,   "红海行动"   ,"战狼2"         ,       "战狼" , "唐人街探案2"     ,     "夏洛特烦恼"          , "黄金兄弟 粤语版");
                                        $cluster_31 = array("合伙人"           ,      "龙珠传奇"      ,"反黑"             ,      "法证先锋 I"   , "大帅哥"                 ,"溏心风暴之家好月圆"    ,"小花仙 第4季 守护天使2", "霹雳惊涛 下 普通话"   ,"霹雳惊涛 上 普通话"  ,   "四大名捕之入梦妖灵" );
                                        $cluster_32 = array( "美丽见习生"    ,"一千零一夜TV版" ,"神话"    ,"名媛望族"    , "笑傲江湖"    ,"潜行狙击"  ,"刑事侦缉档案 II"    , "射雕英雄传","刑事侦缉档案 III"   , "珠光宝气"  ,"读心神探" ,"洗冤录 II"  , "霹雳惊涛 下 闽南语"   ,"四海鲸骑","霹雳惊涛 上 闽南语"  , "兔兔之神奇蘑菇"    ,"斗罗大陆2绝世唐门"   , "灵域 追忆篇"     ,"霹雳天命之战祸邪神II破邪传 下 普通话" ,"霹雳天命之战祸邪神II破邪传 下 闽南语版", "霹雳天命之战祸邪神II破邪传 中 普通话" , "霹雳天命之战祸邪神II破邪传 中 闽南语版","霹雳天命之战祸邪神II破邪传 上 普通话", "霹雳天命之战祸邪神II破邪传 上 闽南语版","血色苍穹 第1季"  , "霹雳天命之战祸邪神 闽南语版"   , "霹雳天命之战祸邪神 普通话" , "邪不压正"   , "西虹市首富","西游记女儿国" , "快把我哥带走" , "悲伤逆流成河"  ,"张艺谋和他的“影”"  ,"一出好戏"   , "明明是TA先喜欢我的"      );
                                        $cluster_33 = array("封神榜"    , "同事三分亲"  ,"点金胜手" ,   "谈判专家"   ,"搜神传"   ,   "鹿鼎记"  ,"绝地苍狼" ,  "900重案追凶"  , "怒火街头" ,   "洪武三十二"   ,"欢乐喜剧人 第一季" ,"侍灵演武:将星乱" , "调味公寓"  ,   "铠甲勇士猎铠之神脑危机","蛋计划 大电影"  , "王牌美女特工"  ,"驴得水"     ,"鬼打鬼"    );
                                        $cluster_34 = array("我和僵尸有个约会 第二部","倚天屠龙记" , "九阴真经"  , "毕打自己人" ,"食神"  , "完美的餐厅 第一季"   , "时光的味道 2018"  , "王子的移动城堡 第一季"   ,"创意中国 第二季"  , "老徐吃鸡秘籍 全军出击篇 第一季" , "这！就是灌篮 第一季"  , "一站到底 2018" , "蒙面唱将猜猜猜 第二季" ,"欢乐喜剧人 第三季" , "德云社郭麒麟相声专场杭州站 2018"  , "想想办法吧！爸爸 第一季"   , "相声有新人 第一季"  , "欢乐喜剧人Plus 第一季"  ,"金牌调解 2018" , "锋味2018"  ,"欢乐喜剧人 第二季"  , "德云社戊戌年纲丝节庆典 2018"    ,"一起来跳舞 2018"   , "时空小涵我的世界 第一季"   , "金牌调解 2018"  , "晓说 第二季"   , "新相亲时代 第一季"   , "极限挑战 第二季"  , "喜剧总动员 第二季"        ,"金星秀 2017"   , "喜剧总动员 第一季"  , "火星情报局 第二季"     , "跨界喜剧王 第三季" ,"火星情报局 第一季"     , "故事王 第二季" ,"爸爸去哪儿 第五季" , "德云社师徒父子相声大典北京站 2018","非你莫属 2018" , "梦想改造家 第五季"   ,"穿越吧厨房 2016"     ,"德云社成立20周年开幕庆典 2016"  , "周六夜现场 第一季" , "极限挑战 第三季"   , "晓说 第一季"   ,"最美的时光 第一季"    ,"没想到吧 第一季" , "我的世界幸运方块 第一季"     , "极限挑战 第四季"  ,"王牌对王牌 第二季"  ,"德云社丁酉年封箱庆典 2018"  , "德云社丙申年封箱庆典 2017"   ,"我们的挑战 第一季"  , "真相吧！花花万物 第一季"    , "跨界歌王 第二季"    , "辽宁卫视春节联欢晚会 2018","非常完美 贵州卫视 2018" , "金曲捞之挑战主打歌 第二季", "新舞林大会 2018"  , "笑声传奇 第一季" , "奔跑吧兄弟  第二季"     , "奔跑吧兄弟  第二季"     , "奔跑吧兄弟  第二季", "Running Man 2016"    ,"侣行 第二季" , "奔跑吧兄弟 第一季"  ,"爱情保卫战 2017" , "极限挑战 第一季"   ,"锋味"  , "岳野支路 第一季 非去不可风行非洲" , "王牌对王牌 第一季"   , "侣行 第三季", "高能少年团 第,”举杯呵呵喝 第二季"      , "爸爸去哪儿 第四季"   , "峡谷重案组" ,"叫我僵小鱼 日常篇"    , "天行九歌", "超神学院"  , "幻界王"  , "x-龙时代"   , "霹雳勇士之元气勇者"  , "摩登大自然 第1季" ,"了不起的我们"    ,"画江湖之侠岚"  ,"别惹流氓兔马修" ,"幻界王" , "蛋计划之龙王彩蛋" , "纳米学院"     , "国学道德经"  , "国学三字经" ,"先婚后宠小娇妻 第1季"   ,"无问西东" , "精武英雄"  ,"追龙"  ,"湄公河行动"  ,"美人鱼"   );
                                        $cluster_35 = array("傲骨雄心"  ,"小破孩贺卡系列" ,"奇门遁甲"   ,"澳门风云3"   ,   "超级快递"   ,    "捉妖记2"    );
                                        $cluster_36 = array("荒原 第一季"  ,      "荒原 第二季"  ,      "荒原 第三季（上）" , "良医"    ,    "全境通告"           ,"摩登家庭 第八季"   ,"异人族"      ,      "庭审专家",           "X档案 第11季","声名狼藉",    "根"           ,      "我要做老板"    , "明日之星"      ,     "主男计划（第一季）");
                                        $cluster_37 = array( "逆转奇兵 第二季" , "辣手藏家 第2季"  , "奔腾年代 第二季"   ,"博人传 火影忍者新时代", "复仇者联盟：秘密战争 第4季"   , "蜘蛛侠 第1季" , "轻羽飞扬"       ,"女神异闻录5 动画版" , "摇曳庄有位幽奈小姐"     ,"红莲之王"    , "木村良平的木村主义"  , "京都寺町三条商店街的福尔摩斯" , "妖怪旅馆营业中"     , "行星与共"  ,"游戏3人娘" , "遥的接球"   ,"异界少女召唤术"  ,"重神机潘多拉 普通话"  , "重神机潘多拉"    ,"航海王 TV特别篇 空岛之章" ,"装刀凯"  , "刀剑神域外传 Gun Gale Online"   , "最后的休止符"  , "DEVILSLINE 恶魔战线","失忆融合WIXOSS" , "在地下城寻求邂逅是否搞错了什么"  ,"梵蒂冈奇迹调查官"  , "爆肝工程师的异世界狂想曲"  ,"偶活学园（偶像活动）Stars! 第2季", "伊藤润二惊选集" , "谷山纪章的轻松散步。in 山口" ,"泥鲸之子们在沙地上歌唱"  , "蚁人2：黄蜂女现身"    , "超人总动员2"  , "新灰姑娘"  , "复仇者联盟3：无限战争"    , "侏罗纪世界2" );
                                        $cluster_38 = array("我们这一天"      ,   "食戟之灵 第3季" ,    "擅长捉弄的高木同学", "学园奶爸"     ,      "魔法使的新娘"    ,   "摇曳露营△"  );
                                        $cluster_39 = array( "你"       ,         "黑名单 第四季"   ,  "超越"      , "亿万-财富之战"   ,  "秘密与谎言 第一季");
                                        $cluster_40 = array("蒙面唱将猜猜猜 第三季", "火星情报局 第四季"  , "晓说"  ,       "欢乐喜剧人 第四季" , "挑战吧！太空 第一季" ,  "非诚勿扰 2018" , "爱情保卫战 2018"     );
                                        $cluster_41 = array("BLEACH 境·界"  , "银魂"   ,"一拳超人" ,"冰上的尤里" ,"棋魂","我的英雄学院 第三季", "潮与虎" , "JOJO的奇妙冒险 星尘斗士", "JOJO的奇妙冒险 星尘斗士 埃及篇"  ,"JOJO的奇妙冒险", "驱魔少年"    ,"排球少年 第三季"     , "BEATLESS-没有心跳的少女"     ,"只有我不存在的城市"   ,"机动战士高达铁血的奥尔芬斯"    , "犬屋敷"     , "排球少年"   , "排球少年 第二季", "歌之王子殿下 真爱Legend Star 第四季", "魔法使的新娘"     , "少年女仆"     ,"光速蒙面侠21号", "水果篮子"    , "ReLife" ,"飙速宅男 第一季"   ,"为美好的世界献上祝福!"  ,"为美好的世界献上祝福! 第二季"    ,"QUALIDEA CODE" , "谭雅战记" , "恋如雨止" ,"我的英雄学院 第3季"   );
                                        $cluster_42 = array( "猫和老鼠"  , "猫和老鼠<50周年纪念版>", "超级英雄少女 OVA"  ,  "猫和老鼠传奇"  );
                                        $cluster_43 = array("超级英雄少女 第一季" ,  "疯狂的兔子 第二季" ,"加菲猫"   ,"终极蜘蛛侠 第一季"   , "蜘蛛侠"  ,  "忍者龟 第三季" ,"超级蜘蛛侠"   ,   "忍者龟 第一季" ,"探险活宝 第四季"    , "变形金刚:领袖之证 第三季" , "探险活宝 第三季"   ,    "变形金刚:领袖之证 第一季"  ,"神奇蜘蛛侠"                  ,"变形金刚:领袖之证 第二季"  ,"疯狂的兔子 第一季"  ,    "加菲猫 第五季"  ,"少年骇客1"                   ,"忍者龟 第二季"    ,"欢乐十六岁之大战僵尸"    ,"憨豆先生动画版 第2季 普通话","憨豆先生动画版 第2季"       );
                                        $cluster_44 = array("植物大战僵尸2 动画版"  , "阿甘妙世界2"   , "探险活宝 第一季"  ,   "探险活宝 第二季" , "阿甘妙世界1",  "终极蜘蛛侠 第2季"   , "海绵宝宝 第10季 普通话");
                                        $cluster_45 = array( "猫和老鼠 猫鼠大战", "猫和老鼠 逍遥猫" );
                                        $cluster_46 = array("甜甜私房猫 第4季 普通话”, “高分少女","天狼 Sirius the Jaeger" , "精英部队2：大敌当前"    );
                                        $cluster_47 = array("霸穹 封神演义"  ,"罪人与龙共舞" ,  "新蔷薇少女"  ,"深夜！天才傻鹏" ,"温泉屋小女管家" ,"敦君与女朋友"  );
                                        $cluster_48 = array( "龙收藏"   ,"激战奥雷卡" ,"天才宝贝熊","海绵宝宝"  , "超人赛文 赛文奥特曼 普通话"       ,"X的天使" ,"男神执事团之Butlers~千年百年物语~中文版OVA", "索尼克X" , "四牌士"    , "三三爬爬秀 普通话" , "疯狂四剑客 第2季 普通话"  ,"疯狂四剑客 普通话" , "三三爬爬秀 第2季 普通话"    ,"甜甜私房猫 第4季"  , "忍者少女千鸟 第3季"  );
                                        $cluster_49 = array("凌晨四点的重庆"  ,  "男导演的阴谋","心花路放" ,   "功守道"   ,"使徒行者"                    ,"旋风小子3:无敌反斗星"    ,"美人鱼"    ,   "叶问3"   ,"新家法"                      ,"夏洛特烦恼"   , "杀手之王"      ,    "黑夜怪客"  ,"赌侠"   ,    "英雄本色3"                  , "人在囧途"      ,    "铁血飞虎"     , "忘忧镇"     ,         "龙之谷：破晓奇兵"    , "青春失乐园"  ,                "忘忧酒馆 第二季"  , "麻烦家族"      ,      "左右"    , "女人公敌"         ,     "倔强的萝卜"   ,"重来"      ,  "宫锁沉香"   , "茉莉之恋"    ,  "正・青春" , "夜孔雀"     ,    "一路狂奔" , "鬼吹灯之九层妖塔"   , "赛尔号大电影2：雷伊与迈尔斯", "叶问3"   , "大笑江湖"  , "迷城"   ,                     "新娘大作战"   , "白雪公主之矮人力量" ,   "因为爱情"  , "从天儿降"    ,    "2017最美表演"  ,"永乐恩仇"  ,   "财神客栈"    , "大鱼海棠"    ,   "奇葩朵朵"   ,"一念天堂"   ,"河东狮吼2"    ,  "江山美人"  , "毕业作品"   ,  "英雄本色 2018"  , "我的播音系女友"   ,"追龙"  , "羞羞的铁拳"    ,   "看不见的TA2"   ,"老夫子之小水虎传奇"   ,       "拳霸2"  ,"同桌的你"  ,   "逃出生天"   , "红河激浪"   ,   "见龙卸甲");
                                        $cluster_50 = array("幕后女王"  ,  "张艺谋和他的“影", "一出好戏"    ,    "红海行动","战狼2"      ,    "邪不压正", "悲伤逆流成河"   ,   "我不是药神"  , "西虹市首富"   , "大师兄"   , "一出好戏"   ,          "特殊身份"    , "爱情公寓"    ,         "反贪风暴3"   ,"我是马布里"      ,     "后来的我们"  , "胜者为王"    ,   "黄金兄弟"   ,"第一次"   , "异变尸村"   ,  "道士出山"   , "我的校花妹妹2"  , "欧洲攻略"  , "龙的厨房"  ,  "动物世界", "法医秦明之车尾游魂"  , "红海行动"   ,"唐人街探案2"      ,"神奇马戏团之动物饼干", "天方异谈"        );
                                        $cluster_51 = array("破梦游戏"   , "有5个姐姐的我就注定要单身了啊！！", "破魔剑"   , "嘻哈英熊"   ,"青春逆袭路"    ,"刑凶手札" , "春申君后传"  , "S4侠降魔记","狄仁杰之夺命天眼" );
                                        $cluster_52 = array("狄仁杰之无头神将" ,"悲伤逆流成河"  ,   "大蛇"   , "二龙湖疯狂代驾" ,  "反贪风暴3"        ,"黄金兄弟"     , "中国刀锋战士"   );
                                        $cluster_53 = array("告密者");
                                        $cluster_54 = array("山海伏魔·追月"  ,    "大唐妖物志杀人凤凰" ,"不良神探"   ,"蠢贼两三只"     ,    "巨齿鲨"    );
                                        $cluster_55 = array( "上位风播"     ,         "致青春:原来你还在这里", "残梦"    );
                                        $cluster_56 = array("巨蟒大战恐鳄" ,            "光的棍"  , "街头之王"    ,      "黑夜怪客"  ,"绝地逃亡"                 ,"爱爱囧事"     , "裸山"            ,         "大侠"    ,"西游记之孙悟空三打白骨精", "窥视情" , "兄弟"    ,"司法雇佣兵"   , "相声大电影之我要幸福"  ,   "新大头儿子小头爸爸" );
                                        $cluster_59 = array("噬人鲨大战食人鳄", "龙之战" ,  "新木乃伊" );
                                        $cluster_60 = array("复仇者联盟3：无限战争", "阿尔法：狼伴归途","虎胆追凶" ,  "憨豆特工2"   , "无敌破坏王" , "蜘蛛侠：英雄归来"  , "生化危机:终章",         "鲨滩"  , "新灰姑娘"   ,    "传奇的诞生"     );
                                        $cluster_61 = array( "杀手情人"   ,   "科幻5分钟"    ,"九品芝麻官之白面包青天" ,"无问西东"  ,"超级保镖"               ,"被偷走的那五年"    ,"一路顺疯" ,"黄飞鸿之南北英雄" , "扫毒"   ,  "遇见你真好"   ,"全民目击"   , "从你的全世界路过"   , "江湖论剑实录"  ,    "一念天堂" , "非凡任务"    ,  "一号目标"  , "机器之血"  , "寻找最爱你的人" , "茉等花开"   , "爱，回家"  , "二十二"  ,   "大闹天宫"  , "有那么一天"  ,   "前任3：再见前任"  , "机器之血",  "绣春刀Ⅱ：修罗战场" ,"门徒"                   ,"导火线"      , "太阳照常升起"        ,   "明月几时有"   ,"独角戏"     ,    "蓝色情人节","激战"    ,      "无问西东"     , "保持通话"     );
                                        $cluster_62 = array( "雷神3：诸神黄昏"       , "蚁人"    ,"速度与激情8"      ,    "雷神3：诸神黄昏","无敌破坏王"        ,    "憨豆特工"     , "神奇动物在哪里"      ,      "传奇的诞生" , "精英部队2：大敌当前"   ,    "嗝嗝老师"  , "情挑六月花"    ,   "蚁人2：黄蜂女现身"   , "死侍"   ,   "隐秘而伟大" ,"摩天营救"  , "阿尔法：狼伴归途"     , "复仇者联盟3：无限战争"   ,   "第九区"   , "巨齿鲨"  ,  "肖申克的救赎"   , "2012"  ,     "寻梦环游记"   , "变形金刚5：最后的骑士" ,  "后天"  , "X特遣队"   ,  "不忠"   ,"侏罗纪世界2"   ,   "哈利·波特1：哈利·波特与魔法石", "极限特工3：终极回归"    );
                                        $cluster_63 = array("逃学威龙2" ,   "少林足球","金三角大营救"  , "玩命" ,   "新僵尸先生2"  ,"浮城谜事" , "大梦西游4伏妖记",   "江湖学院"       ,   "女主时代"    ,"乱世王者",   "小时代4：灵魂尽头");
                                        $cluster_64 = array("妖狐苏妲己"  ,  "新七侠五义之屠龙案" ,"恶战" ,"新乌龙院之笑闹江湖" ,"喊·山"              ,"僵尸先生"       , "逃学威龙"         ,  "大嫂"           ,    "快把我哥带走" ,"一眉道人"        ,   "末代皇帝（上）"    , "战狼传说"    ,"偷芯攻略"   ,        "逃学威龙2"        ,  "大明平妖传"  ,"建国大业"  ,         "守墓人之龙棺海昏侯" ,"少林僵尸"   , "僵尸叔叔"    ,       "无间罪：僵尸重生"  );
                                        $cluster_65 = array("热舞吧!青春"   ,    "解忧杂货店"    ,    "解忧杂货店 粤语版");
                                        $cluster_66 = array("寻找爱情的下落"   ,  "星际特工：千星之城" ,"你的名字。");
                                        ?>

                                        


                                        <!doctype html>
                                            <html lang="en">

                                            <head runat="server">
                                                <meta charset="UTF-8">
                                                <title>Score Distribution</title>
                                                <script src="echarts.js" type="text/javascript"></script>
                                                <style>
                                                    .box2{padding-top:50px; width:500px;height:400px;}
                                                </style>
                                            </head>
                                                
                                            <body>
                                                <div class="portfolio-menu">
                                                    <ul>
                                                    <li><a href="RECOMMENDATION"><b>BACK TO DESIGN</b></a ></li>
                                                    </ul>     
                                                </div> 
                                                <div style=" background:url(史努比2.jpg);background-repeat:repeat;background-size:contain" >
                                               

                                        <?php
                                        if (in_array($star,$cluster_1)){
                                        
                                            foreach ($cluster_1 as $value){
                                                
                                                $query_video = "select * from video where star_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                        
                                                echo "<b><font style='color:#FF7575'>star_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>video_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[1]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";
                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_2)){
                                            foreach ($cluster_2 as $value){
                                                $query_video = "select * from video where star_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>star_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>video_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[1]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_3)){
                                            foreach ($cluster_3 as $value){
                                                $query_video = "select * from video where star_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                echo "<b><font style='color:#FF7575'>star_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>video_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[1]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_4)){
                                            foreach ($cluster_4 as $value){
                                                $query_video = "select * from video where star_name='".$value."';";
                                                $video = mysqli_query($link,$query_video);
                                                echo "<b><font style='color:#FF7575'>star_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>video_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[1]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";
                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_5)){
                                            foreach ($cluster_5 as $value){
                                                $query_video = "select * from video where star_name='".$value."';";
                                                $video = mysqli_query($link,$query_video);
                                                echo "<b><font style='color:#FF7575'>star_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>video_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[1]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";
                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_6)){
                                            foreach ($cluster_6 as $value){
                                                $query_video = "select * from video where star_name='".$value."';";
                                                $video = mysqli_query($link,$query_video);
                                                echo "<b><font style='color:#FF7575'>star_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>video_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[1]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";
                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_7)){
                                            foreach ($cluster_7 as $value){
                                                $query_video = "select * from video where star_name='".$value."';";
                                                $video = mysqli_query($link,$query_video);
                                                echo "<b><font style='color:#FF7575'>star_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>video_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[1]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";
                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_8)){
                                            foreach ($cluster_8 as $value){
                                                $query_video = "select * from video where star_name='".$value."';";
                                                $video = mysqli_query($link,$query_video);
                                                echo "<b><font style='color:#FF7575'>star_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>video_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[1]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";
                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_9)){
                                            $query_video = "select * from video where star_name='".$star."';";
                                            $video = mysqli_query($link,$query_video);
                                            echo "<b><font style='color:#FF7575'>star_name: ".$star."</font></b><br><br>";
                                                
                                            echo "<table border=0>";
                                            echo "<tr><td>video_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                            while ($data = mysqli_fetch_row($video))
                                            {
                                                echo "<tr><td width=200px><b>".$data[1]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                            }
                                            echo "</table><br>";
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_10)){
                                            foreach ($cluster_10 as $value){
                                                $query_video = "select * from video where star_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>star_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>video_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[1]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_11)){
                                            foreach ($cluster_11 as $value){
                                                $query_video = "select * from video where star_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>star_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>video_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[1]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_12)){
                                            foreach ($cluster_12 as $value){
                                                $query_video = "select * from video where star_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>star_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>video_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[1]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_13)){
                                            foreach ($cluster_13 as $value){
                                                $query_video = "select * from video where star_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>star_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>video_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[1]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_14)){
                                            foreach ($cluster_14 as $value){
                                                $query_video = "select * from video where star_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>star_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>video_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[1]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_15)){
                                            foreach ($cluster_15 as $value){
                                                $query_video = "select * from video where star_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                echo "<b><font style='color:#FF7575'>star_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>video_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[1]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_16)){
                                            $query_video = "select * from video where star_name='".$star."';";
                                            $video = mysqli_query($link,$query_video);
                                            echo "<b><font style='color:#FF7575'>star_name:  ".$value."</font></b><br><br>";
                                                
                                            echo "<table border=0>";
                                            echo "<tr><td>video_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                            while ($data = mysqli_fetch_row($video))
                                            {
                                                echo "<tr><td width=200px><b>".$data[1]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                            }
                                            echo "</table><br>";
                                            mysqli_close($link);
                                        }



                                        elseif (in_array($star,$cluster_18)){
                                            foreach ($cluster_18 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$star."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_19)){
                                            foreach ($cluster_19 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_20)){
                                            foreach ($cluster_20 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_21)){
                                            foreach ($cluster_21 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_22)){
                                            foreach ($cluster_22 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_23)){
                                            $query_video = "select * from video where video_name='".$star."';";
                                            $video = mysqli_query($link,$query_video);
                                            echo "<b><font style='color:#FF7575'>video_name:  ".$star."</font></b><br><br>";
                                                
                                            echo "<table border=0>";
                                            echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                            while ($data = mysqli_fetch_row($video))
                                            {
                                                echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                            }
                                            echo "</table><br>";
                                            mysqli_close($link);
                                        }

                                        elseif (in_array($star,$cluster_24)){
                                            $query_video = "select * from video where video_name='".$star."';";
                                            $video = mysqli_query($link,$query_video);
                                            echo "<b><font style='color:#FF7575'>video_name:  ".$star."</font></b><br><br>";
                                                
                                            echo "<table border=0>";
                                            echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                            while ($data = mysqli_fetch_row($video))
                                            {
                                                echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                            }
                                            echo "</table><br>";
                                            mysqli_close($link);
                                        }

                                        elseif (in_array($star,$cluster_25)){
                                            foreach ($cluster_25 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_26)){
                                            foreach ($cluster_26 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_27)){
                                            foreach ($cluster_27 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_28)){
                                            foreach ($cluster_28 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_29)){
                                            foreach ($cluster_29 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_30)){
                                            foreach ($cluster_30 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_31)){
                                            foreach ($cluster_31 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_32)){
                                            foreach ($cluster_32 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_33)){
                                            foreach ($cluster_33 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_34)){
                                            foreach ($cluster_34 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_35)){
                                            foreach ($cluster_35 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_36)){
                                            foreach ($cluster_36 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_37)){
                                            foreach ($cluster_37 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_38)){
                                            foreach ($cluster_38 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_39)){
                                            foreach ($cluster_39 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_40)){
                                            foreach ($cluster_40 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_41)){
                                            foreach ($cluster_41 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_42)){
                                            foreach ($cluster_42 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_43)){
                                            foreach ($cluster_43 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_44)){
                                            foreach ($cluster_44 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_45)){
                                            foreach ($cluster_45 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_46)){
                                            foreach ($cluster_46 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_47)){
                                            foreach ($cluster_47 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_48)){
                                            foreach ($cluster_48 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_49)){
                                            foreach ($cluster_49 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_50)){
                                            foreach ($cluster_50 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_51)){
                                            foreach ($cluster_51 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_52)){
                                            foreach ($cluster_52 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_53)){
                                            $query_video = "select * from video where video_name='".$star."';";
                                            $video = mysqli_query($link,$query_video);
                                            echo "<b><font style='color:#FF7575'>video_name:  ".$star."</font></b><br><br>";
                                                
                                            echo "<table border=0>";
                                            echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                            while ($data = mysqli_fetch_row($video))
                                            {
                                                echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                            }
                                            echo "</table><br>";
                                            mysqli_close($link);
                                        }

                                        elseif (in_array($star,$cluster_54)){
                                            foreach ($cluster_54 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_55)){
                                            foreach ($cluster_55 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_56)){
                                            foreach ($cluster_56 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }



                                        elseif (in_array($star,$cluster_59)){
                                            foreach ($cluster_59 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_60)){
                                            foreach ($cluster_60 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_61)){
                                            foreach ($cluster_61 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";
                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_62)){
                                            foreach ($cluster_62 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_63)){
                                            foreach ($cluster_63 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_64)){
                                            foreach ($cluster_64 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_65)){
                                            foreach ($cluster_65 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        elseif (in_array($star,$cluster_66)){
                                            foreach ($cluster_66 as $value){
                                                $query_video = "select * from video where video_name='".$value."';";
                                                
                                                $video = mysqli_query($link,$query_video);
                                                
                                                
                                                echo "<b><font style='color:#FF7575'>video_name:  ".$value."</font></b><br><br>";
                                                
                                                echo "<table border=0>";
                                                echo "<tr><td>star_name</td><td>video_grade</td><td>video_url</td><td>web_name</td><td>area</td></tr>";
                                                while ($data = mysqli_fetch_row($video))
                                                {
                                                    echo "<tr><td width=200px><b>".$data[7]."</b></td><td width=100px><b>".$data[2]."</b></td> <td width=100px><b><a href=".$data[3].">".'click here'."</a></b></td> <td width=100px><b>".$data[8]."</b></td><td><b>".$data[10]."</b></td></tr>";
                                                }
                                                echo "</table><br>";

                                            }
                                            mysqli_close($link);
                                        }
                                        else{
                                            echo "<b><font style ='font-size:14pt;color:#FF6A6A'>Sorry, the one you choose is not similar to anything in our database.</font></b>";
                                        }
                                        ?>
                                         <div class="box2">
                                            </div>
                                            <div class="box2">
                                            </div>
                                            <div>
                                            </div>
                                            
                                </body>
                            </html>
 
                            </div>
                        
                            
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
