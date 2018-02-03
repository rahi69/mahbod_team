<?php include_once "../resources/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>مدیریت مقالات</title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
    <link rel="stylesheet" href="css/article.css">
    <link rel="stylesheet" href="font.css">

    <!--BOOTSTRAP-->
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>

<button class="hidden-lg" id="showListHome" onclick="showListHome()"></button>

<script>
    function showListHome() {
        var x = document.getElementById("HomeLIST");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
<div>

    <img id="imgProfile" src="img/CIRLEpROFILE.jpg" height="124" width="89"/>
</div>
<div class="container-fluid col-lg-12">
    <div  id="container" class="col-lg-8">

        <div class="row" id="ManagementArticle">
            <div id="header-Article" class="row">مدیریت مقالات</div>
            <ul  class="row"id="ulList">
                <?php $function=new functions();
                $function->manage_article();
                ?>
<!--                <li>-->
<!--                    <button class="DeleteBox btn btn-primary">حذف</button>-->
<!--                    &nbsp;&nbsp;&nbsp;<button class="EditBox btn btn-primary">ویرایش</button><span class="nameTitle">نام مقاله</span>&nbsp;&nbsp;-->
<!--                    <span>توضیحات مربوط به مقاله</span>-->
<!--                </li>-->

            </ul>
            <div id="buttonBox1" class="row">
                <form method="post" action="add_article.php">
                    <button type="submit" name="Add_article">افزودن مقاله</button><br/>
                </form>
<!--                <button>افزودن مقاله</button><br/>-->
            </div>
        </div>
    </div>
    <!--MENU LIST-->
    <div id="HomeLIST"  class="nav-side-menu col-lg-4">
        <!--BUTTON LIST-->
        <!--<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>-->

        <div ng-app="myApp" class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
                <!--PIC PROFILE-->

                <li data-toggle="collapse" data-target="#ads" class="collapsed">
                    <a class="list" href="main.html"><i class="fa fa-camera fa-lg"></i>صفحه اصلی </a>

                </li>

                <li onclick="showGallery()" data-toggle="collapse" data-target="#ads" class="collapsed">
                    <a class="list" href="Managmant-Gallery.html"><i class="fa fa-camera fa-lg"></i> مدیریت گالری </a>

                </li>


                <li onclick="showArticle()" data-toggle="collapse" data-target="#service" class="collapsed">
                    <a class="list" href="ManagmantArticle.html"><i class="glyphicon glyphicon-duplicate fa-lg"></i> مدیریت مقالات </a>
                </li>


                <li onclick="ShowEducation()" data-toggle="collapse" data-target="#new" class="collapsed">
                    <a class="list" href="Managment-Education.html"><i class="glyphicon glyphicon-briefcase fa-lg"></i> مدیریت آموزش </a>
                </li>
                <li onclick="List()" data-toggle="collapse" data-target="#ads" class="collapsed">
                    <a class="list()" href="#"><i class="fa fa-black-tie fa-lg"></i> درباره من </a>
                </li>


            </ul>

        </div>

    </div>
</div>


</body></body>
</html>