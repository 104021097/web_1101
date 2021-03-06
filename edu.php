<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>教育學習</title>
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
                <li><a href="home.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                <li class="active"><a href="edu.php"><i class="fa fa-book" aria-hidden="true"></i>Education</a></li>
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
<!--                <p><a href="#">Interests</a></p>-->
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
                            <h3 align="center"><b>106學年度上學期教授課程</b></h3>
                            <table align="center" border="1px solid">
                                <tr align="center" style="background-color: #F2B82A;height: 3em">
                                    <td width="20%"><b>系所年級</b></td>
                                    <td width="15%"><b>課號</b></td>
                                    <td width="20%"><b>課名</b></td>
                                    <td width="5%"><b>修別</b></td>
                                    <td width="5%"><b>學分</b></td>
                                    <td width="10%"><b>選修人數</b></td>
                                    <td width="15%"><b>上課時間</b></td>
                                    <td width="10%"><b>學程</b></td>


                                </tr>
                                <tr align="center" style="height: 3em">
                                    <td>資工系碩士班1年級</td>
                                    <td>EE200167A</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S6.asp?mCos_id=EE200167&mCos_Class=A&mSmtr=1061&cos_data=">3D物體成像</a></td>
                                    <td>選</td>
                                    <td>3</td>
                                    <td>24</td>
                                    <td>(四)234 I627</td>
                                    <td>所定選修</td>
                                </tr>
                                <tr align="center" style="height: 3em">
                                    <td>資工系碩士班1年級</td>
                                    <td>EE200214A</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S6.asp?mCos_id=EE200214&mCos_Class=A&mSmtr=1061&cos_data=">使用者導向智慧終端整合設計與前瞻應用專題</a></td>
                                    <td>選</td>
                                    <td>3</td>
                                    <td>6</td>
                                    <td>(四)789 I533</td>
                                    <td></td>
                                </tr>
                                <tr align="center" style="height: 3em">
                                    <td>資工系1年級</td>
                                    <td>EE300037D</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_guidan.asp?mCos_id=EE300037&mCos_Class=D&mSmtr=1061">學輔時間(一)</a></td>
                                    <td>必</td>
                                    <td>0</td>
                                    <td>19</td>
                                    <td>(三)8 I426</td>
                                    <td></td>
                                </tr>
                                <tr align="center" style="height: 3em">
                                    <td>資工系(數位組)2年級</td>
                                    <td>EE320047A</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S6.asp?mCos_id=EE320047&mCos_Class=A&mSmtr=1061&cos_data=">多媒體導論</a></td>
                                    <td>選</td>
                                    <td>3</td>
                                    <td>47</td>
                                    <td>(一)9 H103(二)78 H103</td>
                                    <td>系定專業選修學程(數位內容服務平台學程)</td>
                                </tr>
                                <tr align="center" style="height: 3em">
                                    <td>資工系(數位組)4年級</td>
                                    <td>EE320676A</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S6.asp?mCos_id=EE320676&mCos_Class=A&mSmtr=1061&cos_data=">行動遊戲設計</a></td>
                                    <td>選</td>
                                    <td>3</td>
                                    <td>40</td>
                                    <td>(三)567 I627</td>
                                    <td>系定專業選修學程(數位內容技術與設計學程)</td>
                                </tr>
                                <tr align="center" style="height: 3em">
                                    <td>資工系碩專班1年級</td>
                                    <td>EE400119A</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S6.asp?mCos_id=EE400119&mCos_Class=A&mSmtr=1061&cos_data=">互動式多媒體設計理論與實務</a></td>
                                    <td>選</td>
                                    <td>3</td>
                                    <td>9</td>
                                    <td>(一)BCD I533</td>
                                    <td>所定選修</td>
                                </tr>
                                <tr align="center" style="height: 3em">
                                    <td>資工系碩專班1年級</td>
                                    <td>EE400120A</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S6.asp?mCos_id=EE400120&mCos_Class=A&mSmtr=1061&cos_data=">數位教學設計與實作</a></td>
                                    <td>選</td>
                                    <td>3</td>
                                    <td>14</td>
                                    <td>(二)BCD I627</td>
                                    <td>所定選修</td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer class="container-fluid text-center">
        <p>Powered by Jiayuan@ ASIA University</p>
    </footer>

</div>
</body>
</html>
