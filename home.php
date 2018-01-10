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
                <a class="navbar-brand" href="index.html"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="home.html"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                    <li><a href="edu.html"><i class="fa fa-book" aria-hidden="true"></i>Education</a></li>
                    <li><a href="pub.html"><i class="fa fa-flask" aria-hidden="true"></i>Research</a></li>
                    <li><a href="h.html"><i class="fa fa-trophy" aria-hidden="true"></i>Honor</a></li>
                    <li><a href="aca.html"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Academic Exchange</a></li>
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
                    <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container text-center">
        <div class="row">
            <div class="col-sm-3 well">
                <div class="well">
                    <p><b>陳兆南</b></p>
                    <img src="https://i.imgur.com/P8gAwaX.jpg" class="img-circle" height="65" width="65" alt="Avatar">
                </div>
                <div class="well">
                    <p><a href="#">Interests</a></p>
                    <p>
                        <p>專長領域</p>
                        <span class="label label-default">影像顯示科技</span>
                        <span class="label label-primary">媒體與互動設計</span>
                        <span class="label label-success">數位學習內容</span>
                        <span class="label label-info">3D遊戲設計</span>
                        <span class="label label-warning">VLSI技術</span>
<!--                        <span class="label label-danger">Friends</span>-->
                    </p>
                </div>
                <div class="alert alert-success fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p><strong>About Me</strong></p>
                    <b>Educational Background</b>
                    <p>長庚大學電子工程-博士</p>
                    <b>Connect</b>
                    <p>Email:d9228101@gmail.com</p>
                    <p>chencn@asia.edu.tw</p>
                </div>
                <!--<p><a href="#">Link</a></p>-->
                <!--<p><a href="#">Link</a></p>-->
                <!--<p><a href="#">Link</a></p>-->
            </div>
            <div class="col-sm-7">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default text-left">
                            <div class="panel-body">
                                <p contenteditable="true">Status: Feeling Blue</p>
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-thumbs-up"></span> Like
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <div class="well">
                            <p>John</p>
                            <img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="well">
                            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="well">
                            <p>Bo</p>
                            <img src="bandmember.jpg" class="img-circle" height="55" width="55" alt="Avatar">
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="well">
                            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="well">
                            <p>Jane</p>
                            <img src="bandmember.jpg" class="img-circle" height="55" width="55" alt="Avatar">
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="well">
                            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="well">
                            <p>Anja</p>
                            <img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="well">
                            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 well">
                <div class="thumbnail">
                    <p>Upcoming Events:</p>
                    <img src="paris.jpg" alt="Paris" width="400" height="300">
                    <p><strong>Paris</strong></p>
                    <p>Fri. 27 November 2015</p>
                    <button class="btn btn-primary">Info</button>
                </div>
                <div class="well">
                    <p>ADS</p>
                </div>
                <div class="well">
                    <p>ADS</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="container-fluid text-center">
        <p>Powered by Jiayuan@ ASIA University</p>
    </footer>

    </body>
    </html>



