<?php
class functions
{
    public function set_message($msg)
    {
        if (!empty($msg))
            $_SESSION['message'] = $msg;
    }

    public function display_message()
    {
        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
    }

    public function redirect($location)
    {
        header("Location: $location ");
    }

    public function query($sql)
    {
        global $connection;
        return $connection->query($sql);
    }

    public function confirm($result)
    {
        global $connection;
        if (!$result) {
            die("Query Failed " . $connection->error);
        }
    }

    public function fetch_array($result)
    {
        return $result->fetch_array();
    }

    public function escape_string($string)
    {
        global $connection;
        $string2 = $connection->real_escape_string($string);
//     $string3=htmlspecialchars($string2);
        $string3 = htmlentities($string2, ENT_COMPAT, 'UTF-8');

        return $string3;

    }

    public function list_article()
    {
        $sql = "SELECT title,short_desc,image_src FROM tbl_article";
        $result = $this->query($sql);
        $this->confirm($result);
        while ($row = $this->fetch_array($result)) {
            $list = <<<LISTARTICLE
          <tr>
          <td>{$row['title']}</td>
          <td>{$row['short_desc']}</td>
          <td><img src="img/{$row['image_src']}"width="100px"height="100px"/></td>
          <td>
          <a href="index.php?delete_article={$row['id_article']}" class="btn btn-danger">Delete</a>
          <a href="#" class="btn btn-info">Edit</a>
       
        
</td>
</tr>
LISTARTICLE;
            echo $list;

        }
    }

    public function get_article()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['Add'])) {

                if (empty($_POST['title']) || empty($_POST['short_desc']) || empty($_POST['description']) || empty($_POST['image']) || empty($_POST['status'])) {
                    echo '<p style="background-color: #ac2925;color: white ;text-align: center"> Please fill all fields </p>';
                } else {
                    $title = $this->escape_string($_POST['title']);
                    $short_desc = $this->escape_string($_POST['short_desc']);
                    $description = $this->escape_string($_POST['description']);
                    $image = $this->escape_string($_POST['image']);
                    $status = $this->escape_string($_POST['status']);
                    $sql = "INSERT INTO tbl_article(title,short_desc,description,image_src,status) VALUES ('$title','$short_desc','$description','$image','$status')";
                    $result = $this->query($sql);
                    $this->confirm($result);

                }
            }
        }
    }

    public function get_cat()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['submit'])) {
                if (empty($_POST['name_cat'])) {
                    echo '<p style="background-color: #ac2925;color: white ;text-align: center"> Please fill all fields </p>';

                } else {
                    $name_cat = $this->escape_string($_POST['name_cat']);
                    $sql = "INSERT INTO tbl_category(name_category) VALUES ('$name_cat')";
                    $result = $this->query($sql);
                    $this->confirm($result);
                }

            }
        }
    }

    public function get_video()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['Add'])) {
                if (empty($_POST['title']) || empty($_POST['price']) || empty($_POST['description'])
                    || empty($_POST['image']) || empty($_POST['video']) || empty($_POST['status'])) {
                    echo '<p style="background-color: #ac2925;color: white ;text-align: center"> Please fill all fields </p>';

                } else {
                    $cat_id = $_POST['category'];
                    $title = $this->escape_string($_POST['title']);
                    $price = $this->escape_string($_POST['price']);
                    $description = $this->escape_string($_POST['description']);
                    $image = $this->escape_string($_POST['image']);
                    $video = $this->escape_string($_POST['video']);
                    $status = $this->escape_string($_POST['status']);


                    $sql = "INSERT INTO tbl_video (title,price,description,id_category,image_prev,video,status) VALUES ('$title','$price','$description','$cat_id','$image','$video','$status')";
                    $result = $this->query($sql);
                    $this->confirm($result);
                }
            }
        }
    }
    public function login()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['submit'])) {
                if (empty($_POST['username']) || empty($_POST['password'])) {
                    echo '<p style="background-color: #ac2925;color: white ;text-align: center"> Please fill all fields </p>';

                } else {
                    $username = $this->escape_string($_POST['username']);
                    $password = $this->escape_string($_POST['password']);
                    $sql = "SELECT * FROM admin WHERE username='{$username}' AND password ='{$password}'";
                    $result = $this->query($sql);
                    $this->confirm($result);
                    if ($result->num_rows == 0) {
                        $this->set_message("Your username or password is wrong.");
                        $this->redirect("login.php");
                    } else {
                        $_SESSION['username'] = $username;

                        $this->redirect("index.php");
                    }
                }
            }
        }
    }
    public function sign_up()
    {
        if($_SERVER["REQUEST_METHOD"]== "POST")
        {
            if(isset($_POST['submit']))
            {
                if(empty($_POST['username']) ||empty($_POST['password']) || empty($_POST['rpassword'])||empty($_POST['email']))
                {
                    echo '<p style="background-color: #ac2925;color: white ;text-align: center"> Please fill all fields </p>';
                }
                else{
                    $username = $this->escape_string($_POST['username']);
//                    $password = $this->escape_string($_POST['password']);
                    $rpassword = $this->escape_string($_POST['rpassword']);
                    if ($_POST['password'] == $rpassword) {
                        $password = $this->escape_string($_POST['password']);
                    } else {
                        echo '<p style="background-color: #ac2925;color: white ;text-align: center">password wrong!! </p>';
                    }
                    $email = $this->escape_string($_POST['email']);
                    // check if e-mail address syntax is valid
                    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
                    {
                        echo '<p style="background-color: #ac2925;color: white ;text-align: center"> Invalid email format </p>';
                    }

                    $sql="INSERT INTO admin (username,password,email) VALUES ('$username','$password','$email')";
                    $result=$this->query($sql);
                    $this->confirm($result);
                }
            }
        }
    }
}