<?php include '../resources/config.php' ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Article</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <nav class="navbar navbar-inverse">

        <div class="container-fluid">

            <div class="navbar-header">

                <a class="navbar-brand" href="index.php" style="color: red">Home</a>

            </div>
        </div>
    </nav>
</head>
<body>
<h1 class="page-header">
    Edit Article
    <small>Edwin</small>
</h1>

<div class="col-md-6 user_image_box">

    <a href="#" data-toggle="modal" data-target="#photo-library"><img class="img-responsive" src="" alt=""></a>

</div>

<?php
$function=new functions();
$ResponseUpdate =$function->UpdateArticleById();
if ($ResponseUpdate == true){
    echo "<script> alert('Success');</script>";
}
$result = $function->edit_article();

?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="col-md-6">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo $result['title']; ?>">
        </div>

        <div class="form-group">
            <label for="short_desc">Short description</label>
            <input type="text" name="short_desc" class="form-control"
                   value="<?php echo $result['short_desc']; ?>">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control"><?php echo $result['description']; ?></textarea>
        </div>


        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" value="<?php echo $result['image_src']; ?>">
        </div>

        <div class="form-group">
            <label for="status">status</label>
            <input type="checkbox"  name="status" value="<?php echo $result['status']; ?>">
        </div>


        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary pull-right">Update</button>
        </div>


    </div>


</form>

</body>
</html>
