<?php require_once '../resources/config.php'; ?>
<?php //require_once TEMPLATE_FRONT . DS . 'header.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Add Category</title>
</head>
<body style="margin-top: 10px;margin-left: 20px">
<nav class="navbar navbar-inverse">

    <div class="container-fluid">

        <div class="navbar-header">

            <a class="navbar-brand" href="index.php" style="color: red">Home</a>

        </div>
    </div>
</nav>
<form method="post" action="">


    <label for="name_cat">Name category:</label>
    <input value="" type="text" name="name_cat"><br><br>
    <button type="submit" name="submit"  class="btn btn-info" >Delete</button>

</form>

</body>
</html>