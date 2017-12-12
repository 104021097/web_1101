<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/29
 * Time: 上午 10:45
 */
function navbar($flag){
    ?>
    <ul class="nav navbar-nav">
        <a class="navbar-brand" href="index.html">Portfolio</a>
        <li <?php if ($flag==1) echo "class='active'";?> ><a href="home.html">首頁</a></li>
        <li <?php if ($flag==2) echo "class='active'";?>><a href="resume.html">簡歷</a></li>
        <li <?php if ($flag==3) echo "class='active'";?>><a href="learning.html">學術</a></li>
        <li <?php if ($flag==4) echo "class='active'";?>><a href="publication.html">著作</a></li>
        <li <?php if ($flag==5) echo "class='active'";?>><a href="class.html">課程</a></li>
        <li <?php if ($flag==6) echo "class='active'";?>><a href="links.html">常用連結</a></li>
    </ul>

<?php}