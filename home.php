<?php session_start(); ?>
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("mysql_connect.inc.php");?>
    <!--上方語法為啟用session，此語法要放在網頁最前方-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!DOCTYPE html>
<html lang="en">
<head>
    <title>大頭南的家</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
<!--            <a class="navbar-brand" href="index.html"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>-->
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="home.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                <li><a href="edu.php"><i class="fa fa-book" aria-hidden="true"></i>Education</a></li>
                <li><a href="test_pub.php"><i class="fa fa-flask" aria-hidden="true"></i>Research</a></li>
<!--                <li><a href="h.php"><i class="fa fa-trophy" aria-hidden="true"></i>Honor</a></li>-->
                <li><a href="aca.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Academic Exchange</a></li>
                <li><a href="member.php"><i class="fa fa-user" aria-hidden="true"></i>Member Center</a></li>
            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group input-group">
                    <input type="text" class="form-control" placeholder="Search..">
                    <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container text-center">
    <div class="row">
        <div class="col-sm-3 well">
            <div class="well">
                <p><b>陳兆南</b></p>
                <img src="https://i.imgur.com/P8gAwaX.jpg" class="img-circle" height="100" width="100" alt="Avatar">
            </div>
            <div class="well">
                <!--<p><a href="#">Interests</a></p>-->
                <p>
                <p>專長領域</p>
                <span class="label label-default">影像顯示科技</span>
                <span class="label label-primary">媒體與互動設計</span>
                <span class="label label-success">數位學習內容</span>
                <span class="label label-info">3D遊戲設計</span>
                <span class="label label-warning">VLSI技術</span>
                </p>
            </div>
            <div class="alert alert-success fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <p><strong>關於我</strong></p>
                <b>學歷</b>
                <p>長庚大學電子工程-博士</p>
                <b>聯絡方式</b>
                <p>Email:d9228101@gmail.com</p>
                <p>chencn@asia.edu.tw</p>
                <p><strong>經歷</strong></p>
                <p>南開大學 兼任助理教授</p>
                <p>中華映管股份有限公司 研發設計工程師</p>
                <p>工業技術研究院顯示中心 研發工程師</p>
            </div>
        </div>
        <div class="col-sm-7">

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default text-left">
                        <!--<div class="panel-body">-->
                        <!--<p contenteditable="true">Status: Feeling Blue</p>-->
                        <!--<button type="button" class="btn btn-default btn-sm">-->
                        <!--<span class="glyphicon glyphicon-thumbs-up"></span> Like-->
                        <!--</button>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
            <h3 align="left"><b>最新消息</b></h3>

<!--            <div class="row">-->
                <!--<div class="col-sm-3">-->
                <!--<div class="well">-->
                <!--<p>2017年11月01日(三)第8節於本班學輔課程地點I426教室進行『數位科技使用的自我探索測驗』課程，請班上同學出席參與。</p>-->
                <!--<img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">-->
                <!--</div>-->
                <!--</div>-->
                <div class="col-sm-16">
                    <div class="well">
                        <p>1.2017年11月01日(三)第8節於本班學輔課程地點I426教室進行『數位科技使用的自我探索測驗』課程，請班上同學出席參與。</p>
                    </div>
                </div>
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-sm-3">-->
<!--                    <div class="well">-->
<!--                        <p>Bo</p>-->
<!--                        <img src="bandmember.jpg" class="img-circle" height="55" width="55" alt="Avatar">-->
<!--                    </div>-->
<!--                </div>-->
                <div class="col-sm-16">
                    <div class="well">

<!--                        <p>2.2016/11/12</p>-->
                        <p>2.2016-11-12本實驗室研究團隊參與 TACT 2016 台灣鍍膜科技年會以"利用液相沉積法製備二氧化鈦緻密層應用於氧化鋅奈米柱染料敏化太陽電池"
                            榮獲 C組 光電及半導體薄膜組 "海報競賽論文獎 佳作獎"</p>
                        <img src="https://i.imgur.com/U6lUpTb.jpg" style="width: 30em;height: auto" ">
                    </div>
                </div>
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-sm-3">-->
<!--                    <div class="well">-->
<!--                        <p>Jane</p>-->
<!--                        <img src="bandmember.jpg" class="img-circle" height="55" width="55" alt="Avatar">-->
<!--                    </div>-->
<!--                </div>-->
                <div class="col-sm-16">
                    <div class="well">
                        <p>3.2016-11-12本實驗室研究團隊參與 TACT 2016 台灣鍍膜科技年會以"以超音波噴塗法
                            製備親水性二氧化矽薄膜材料研究"榮獲 F組 鍍膜技術 "海報競賽論文獎 佳作獎"</p>
                        <img src="https://i.imgur.com/NWr22mq.jpg"style="width: 30em;height: auto">
                    </div>
                </div>
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-sm-3">-->
<!--                    <div class="well">-->
<!--                        <p>Anja</p>-->
<!--                        <img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-sm-9">-->
<!--                    <div class="well">-->
<!--                        <p></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
<!--        <div class="col-sm-2 well">-->
<!--            <div class="thumbnail">-->
<!--                <p>Upcoming Events:</p>-->
<!--                <img src="paris.jpg" alt="Paris" width="400" height="300">-->
<!--                <p><strong>Paris</strong></p>-->
<!--                <p>Fri. 27 November 2015</p>-->
<!--                <button class="btn btn-primary">Info</button>-->
<!--            </div>-->
<!--            <div class="well">-->
<!--                <p>ADS</p>-->
<!--            </div>-->
<!--            <div class="well">-->
<!--                <p>ADS</p>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</div>
<footer class="container-fluid text-center">
    <p>Powered by Jiayuan@ ASIA University</p>
</footer>

</body>
</html>



