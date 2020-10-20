<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection Failed" . mysqli_connect_error());
}
$titles = [];
$post = [];
$para1 = [];

$stmt = $conn->prepare("SELECT sr FROM forum");
$stmt->execute();
$array = [];
$y = 0;
foreach ($stmt->get_result() as $row) {
    $array[] = $row['sr'];

    $sr_length = count($array);
    //it works , it works, dont any questions on why it fucking works
    for ($x = $sr_length; $x > 0; $x--) {
        $result = $conn->query("SELECT * from forum where sr='$x';");
        $res = $conn->query("SELECT * from forum;");
//fetching the row
        $row = $result->fetch_assoc();
//echo "the returned data is" . $row["title"];
        $sm_title = $row["title"];
        $sm_post = $row["post"];
//        $main_title = $row["title"];
//        echo $main_title;
        $titles[$x] = $sm_title;
        $post[$x] = $sm_post;
//        echo $sm_title;
//        echo $x;
        $y++;
        $result->free_result();
    }
    error_reporting(E_ALL & ~E_NOTICE);

}
//works dont question it
$x = 1;
//echo $y;
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        /* Add a gray background color with some padding */
        body {
            color: white;
            font-family: Arial, serif;
            /*padding: 20px;*/
            background: #f1f1f1;
        }

        /* Header/Blog Title */
        .header {
            padding: 30px;
            font-size: 40px;
            text-align: center;
            background: white;
        }

        /* Create two unequal columns that floats next to each other */
        /* Left column */
        .leftcolumn {
            float: left;
            width: 75%;
        }

        /* Right column */
        .rightcolumn {
            float: left;
            width: 25%;
            padding-left: 20px;
        }

        /* Fake image */
        .fakeimg {
            color: black;
            background-color: white;
            width: 100%;
            padding: 20px;
        }

        /* Add a card effect for articles */
        .card {
            background-color: black;
            padding: 20px;
            margin-top: 20px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Footer */
        .footer {
            padding: 20px;
            text-align: center;
            background: #ddd;
            margin-top: 20px;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 800px) {
            .leftcolumn, .rightcolumn {
                width: 100%;
                padding: 0;
            }
        }

        textarea {
            width: 100%;
            padding: 20px;
            background: #0c0101;
            color: white;
        }
        a {
            text-decoration: none;
            color: white;
        }
    </style>
    <div class="top">
        <h1>Welcome to Tech HUB</h1>
        <img alt="Login" height="125px" src="images/Logo.png" width="125px">
        <a href="Login.html" id="abc">
            <img alt="Login" height="50px" src="images/Login.png" style="float: right;margin-right: 20px" width="50px">
            <button class="button" style="float: right">Login</button>
        </a>

        <div class="topnav">
            <a class="active" href="home.php">Home</a>
            <a href="Latest.php">Latest Hardware</a>
            <a href="forum.php">Forum</a>
            <a href="http://www.srijanverma.me/">About me</a>

            <div class="search-container">
                <form action="/">
                    <label>
                        <input name="search" placeholder="Search.." type="text">
                    </label>
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <link href="stylehome.css" rel="stylesheet" type="text/css">
</head>
<body style="background: #00C9FF">

<div style="background:black" class="header">
    <h2>Forum</h2>
</div>

<div class="row">
    <div class="leftcolumn">
        <!--        //works -->
        <?php for ($i = 0; $i < $y - 1; $i++) {
//            echo $y;
//            $stmt = $conn->prepare("SELECT sr FROM $titles[$x]");
//            $stmt->execute();
//            $array = [];
//            $y = 0;
//            foreach ($stmt->get_result() as $row) {
//                $array[] = $row['sr'];
//
//                $sr_length = count($array);
//                //it works , it works, dont any questions on why it fucking works
//                for ($x = $sr_length; $x > 0; $x--) {
//                    $result = $conn->query("SELECT * from forum where sr='$x';");
//                    $res = $conn->query("SELECT * from forum;");
////fetching the row
//                    $row = $result->fetch_assoc();
////echo "the returned data is" . $row["title"];
//                    $comments = $row["title"];
//                    $sm_post = $row["post"];
////        $main_title = $row["title"];
////        echo $main_title;
//                    $titles[$x] = $sm_title;
//                    $post[$x] = $sm_post;
////        echo $sm_title;
////        echo $x;
////                    $y++;
//                    $result->free_result();
//                }
//                error_reporting(E_ALL & ~E_NOTICE);
//
//            }
            echo "<div class='card'><a href='{$titles[$x]}.php'><h2>$titles[$x]</h2></a><div class='fakeimg' style='height: 200px;'>$post[$x]</div>
    <h4>Add reply
    <form><textarea >Some text..</textarea><input type='submit' name='sub'></form></p></div>";
            $x++;
        } ?>
<!---->
<!--        <div class="card">-->
<!--            <h2>--><?//= $titles[$x] ?><!--</h2>-->
<!--            <h5>Title description, Sep 2, 2017</h5>-->
<!--            <div class="fakeimg" style="height:200px;">--><?//= $post[$x] ?><!--</div>-->
<!--            <p>Some text..</p>-->
<!--            <p></p>-->
<!--        </div>-->
    </div>
    <div class="rightcolumn">
        <div class="card">
            <h2>About Me</h2>
            <div class="fakeimg" style="height:100px;">Image</div>
            <p></p>
        </div>
        <div class="card">
            <h3>Popular Post</h3>
            <div class="fakeimg">Image</div>
            <br>
            <div class="fakeimg">Image</div>
            <br>
            <div class="fakeimg">Image</div>
        </div>
        <div class="card">
            <h3>Follow Me</h3>
            <p>Some text..</p>
        </div>
    </div>
</div>

<div class="footer">
    <h2>Footer</h2>
</div>

</body>
</html>
