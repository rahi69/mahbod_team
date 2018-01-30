<?php include_once "../resources/config.php";?>
<?php
//if(!isset($_SESSION['username']))
//{
//    $function = new functions();
//   $function->redirect("../login.php");
//}
?>
<?php require_once TEMPLATE_FRONT . DS . 'header.php'; ?>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <?php require_once TEMPLATE_FRONT . DS . 'nav.php'; ?>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
            <!--            --><?php //require_once TEMPLATE_FRONT . DS . 'slider.php'; ?>
            <div class="row">


            </div>


        </div>
 <?php
//        if(isset($_GET['id']))
//        {
//            include '../panel_user/news_details.php';
//        }
 if(isset($_GET['delete_article']))
 {
     include '../public/delete_article.php';
 }
//        if(isset($_GET['edit_user']))
//        {
//            include  '../public/edit_user.php';
//        }
//
//        if(isset($_GET['delete_user']))
//        {
//            include  '../public/delete_user.php';
//        }
//
//        if(isset($_GET['edit_news']))
//        {
//            include  '../public/edit_news.php';
//        }
//        if(isset($_GET['delete_news']))
//        {
//            include  '../public/delete_news.php';
//        }
//        //            if(isset($_GET['news_detale']))
//        //            {
//        //                include '../public/news_detale.php';
//        //            }
//        if(isset($_GET['delete_cat']))
//        {
//            include  '../public/delete_cat.php';
//        }
//        if(isset($_GET['edit_cat']))
//        {
//            include '../public/edit_cat.php';
//        }
        //        if(isset($_GET['search_user']))
        //        {
        //            include '../panel_user/search_user.php';
        //        }
        ?>
        <!--            </div>-->
        <!-- /.row -->
    </div>
    <!-- /.col-lg-9 -->
</div>
<!-- /.row -->

</div>
<!-- /.container -->
<?php //require_once TEMPLATE_FRONT . DS . 'footer.php'; ?>
