﻿<?php include_once "../resources/config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Menu Page</title>
    <!--BOOTSTRAP-->
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>



    <div id="header"></div>
    <div>

        <img id="imgProfile" src="img/CIRLEpROFILE.jpg" height="124" width="89"/>
    </div>
    <!--<button onclick="openList1" type="button" class="btn btn-default btn-sm" id="ListButton">-->
        <!--<span class="glyphicon glyphicon-tasks"></span></button>-->

    <!--<script>-->
        <!--function openList1() {-->
            <!--var list = document.getElementById("headerList");-->

            <!--if (list.style.display == "none") {-->
                <!--list.style.display = "block";-->
            <!--} else {-->
                <!--list.style.display = "none";-->
            <!--}-->
        <!--}-->
    <!--</script>-->
    <br/>

    <div class="container-fluid col-lg-12">

        <div  id="container" class="col-lg-8">


        </div>
        <div id="headerList"  class="nav-side-menu col-lg-4">

            <?php include TEMPLATE_FRONT . 'nav_right.php'; ?>

        </div>


    </div>
    <br/>
    <?php
    if(isset($_GET['delete_article']))
    {
        include '../admin_panel/delete_article.php';
    }
    if(isset($_GET['edit_article']))
    {
        include '../admin_panel/edit_article.php';
    }
    if(isset($_GET['delete_video']))
    {
        include '../admin_panel/delete_video.php';
    }
    ?>
    <!--<div id="footer" class="row">فوتر صفحه</div>-->

</body>
</html>


<script src="Scripts/main.js"></script>

<!--angular js-->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-rc.4/angular.min.js"></script>




