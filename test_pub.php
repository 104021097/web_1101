<!DOCTYPE html>
<html lang="en">
<head>
    <title>研究成果</title>
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
            <!--header-->
            <a class="navbar-brand" href="index.html"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li ><a href="home.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                <li ><a href="edu.php"><i class="fa fa-book" aria-hidden="true"></i>Education</a></li>
                <li class="active"><a href="test_pub.php"><i class="fa fa-flask" aria-hidden="true"></i>Research</a></li>
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
        <!--header-->
    </div>
</nav>

<div class="container text-center">
    <div class="row">
        <!--left-->
        <!--<div class="col-sm-3 well">-->
        <!--<div class="well">-->
        <!--<p><b>陳兆南</b></p>-->
        <!--<img src="https://i.imgur.com/P8gAwaX.jpg" class="img-circle" height="65" width="65" alt="Avatar">-->
        <!--</div>-->
        <!--<div class="well">-->
        <!--<p><a href="#">Interests</a></p>-->
        <!--<p>-->
        <!--<span class="label label-default">News</span>-->
        <!--<span class="label label-primary">W3Schools</span>-->
        <!--<span class="label label-success">Labels</span>-->
        <!--<span class="label label-info">Football</span>-->
        <!--<span class="label label-warning">Gaming</span>-->
        <!--<span class="label label-danger">Friends</span>-->
        <!--</p>-->
        <!--</div>-->
        <!--<div class="alert alert-success fade in">-->
        <!--<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>-->
        <!--<p><strong>About Me</strong></p>-->
        <!--<b>Educational Background</b>-->
        <!--<p>長庚大學電子工程-博士</p>-->
        <!--<b>Connect</b>-->
        <!--<p>Email:d9228101@gmail.com</p>-->
        <!--<p>chencn@asia.edu.tw</p>-->
        <!--</div>-->
        <!--&lt;!&ndash;<p><a href="#">Link</a></p>&ndash;&gt;-->
        <!--&lt;!&ndash;<p><a href="#">Link</a></p>&ndash;&gt;-->
        <!--&lt;!&ndash;<p><a href="#">Link</a></p>&ndash;&gt;-->
        <!--</div>-->
        <!--left-->



        <div id="home" class="tab-pane fade in active">
            <ol class='pubList'>

                        <?php

                        include("mysql_connect.inc.php");
                        $dataName = "publication_ICP_Data";
                        $sql="SELECT * FROM paper";
                        $result = mysqli_query($link,$sql);
                        while($row = @mysqli_fetch_row($result))
                        {

                            echo "<li><span lang=\"EN-US\" style=\"FONT-SIZE: 8pt; FONT-FAMILY: Wingdings\">l</span>$row[0]<br>";
                            echo "$row[1] <br>";
                            echo "$row[2] <br>";
                            echo "$row[3] </li><br>";

                        }
                        ?>
                    </ol>
                </div>


</div>
</div>

<footer class="container-fluid text-center">
    <p>Powered by Jiayuan@ ASIA University</p>
</footer>

</body>
</html>

