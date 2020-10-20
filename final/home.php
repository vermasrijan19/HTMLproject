<?php
if (true) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "data";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn) {
        die("Connection Failed" . mysqli_connect_error());
    }
}
$titles = [];$img = [];$para1 = [];

    $stmt = $conn->prepare("SELECT sr FROM articles");
    $stmt->execute();
    $array = [];
    foreach ($stmt->get_result() as $row) {
        $array[] = $row['sr'];

//    print_r(count($array));

    $sr_length = count($array);
    //it works , it works, dont any questions on why it fucking works
    for ($x = $sr_length; $x >0; $x--) {
        $result = $conn->query("SELECT * from articles where sr='$x';");
        $res = $conn->query("SELECT * from articles;");
//fetching the row
        $row = $result->fetch_assoc();
//echo "the returned data is" . $row["title"];
        $sm_img = $row["images"];
        $sm_para1 = $row["para1"];
        $main_title = $row["title"];
//        echo $main_title;
        $titles[$x] = $main_title;
        $img[$x] = $sm_img;
        $para1[$x] = $sm_para1;
//        echo $x;
//        echo $titles[$x];
//        echo $img[$x];

        $result->free_result();
    }
    error_reporting(E_ALL & ~E_NOTICE);
}
?>
    <!DOCTYPE html>
    <!--suppress ALL -->
    <html lang="eng">
    <head>
        <title>Welcome to Tech Hub</title>
        <meta charset="utf-8" content="width=device-width, initial-scale=1" name="viewport">
        <link href="stylehome.css" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
              rel="stylesheet">

    </head>
    <body style="
color: white;
  font-family: 'Nunito', sans-serif;">

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
    <div style="background: wheat">
        <hr id="hr" style="  height: 2px; width: 100%;  border: 2px solid black ;">

        <marquee style="background: wheat" behavior="slide" direction="right">Site will be ready soon.</marquee>
        <hr style="height: 2px; width: 100%;  border: 2px solid black ;">
    </div>
    <?php
    $x = 1;
    ?>

    <a href="Latest.html">
        <div id="main" style="background-image: url(<?= $img[$x]; ?>)">
            <h2 style="color: #0c0101"><?php
                echo $titles[$x];
                $x++;
                ?></h2>
            <!--    <img src="" width="848px" height="480px" alt="">-->
        </div>
    </a>
    <ul style="list-style-type:none;">
        <a href="<?= "$titles[$x].html"; ?>">
        <li class="cont" style="background-image: url(<?= $img[$x]; ?>)">
            <div>
                <div id="text1"><h3><?php

                        if($titles[$x]) {
                            echo $titles[$x];
                            $x++;
                        }
                        ?></h3>
                    <br>
                    <p>

                    </p></div>
            </div>
        </a>
        </li>
        <a href="<?= "$titles[$x].html"; ?>">
        <li class="cont" style="background-image: url(<?= $img[$x]; ?>)">
            <div>
                <div id="text1"><h3><?php
                        echo $titles[$x];
                        $x++;
                        ?></h3>
                    <br>
                    <p>

                    </p></div>
            </div></li>
        </a>
        <a href="<?= "$titles[$x].html"; ?>">
        <li class="cont" style="background-image: url(<?= $img[$x]; ?>)">
            <div>
                <div id="text1"><h3><?php
                        echo $titles[$x];
                        $x++;
                        ?></h3>
                    <br>
                    <p>

                    </p></div>
            </div></li>

        </a>
        <a href="<?= "$titles[$x].html"; ?>">
        <li class="cont" style="background-image: url(<?= $img[$x]; ?>)">
            <div>
                <div id="text1"><h3><?php
                        echo $titles[$x];
                        $x++;
                        ?></h3>
                    <br>
                    <p>

                    </p></div>
            </div></li>

        </a>
        <a href="<?= "$titles[$x].html"; ?>">
        <li class="cont" style="background-image: url(<?= $img[$x]; ?>)">
            <div>
                <div id="text1"><h3><?php
                        echo $titles[$x];
                        $x++;
                        ?></h3>
                    <br>
                    <p>

                    </p></div>
            </div></li>

        </a>
        <a href="<?= "$titles[$x].html"; ?>">
        <li class="cont" style="background-image: url(<?= $img[$x]; ?>)">
            <div>
                <div id="text1"><h3><?php
                        echo $titles[$x];
                        $x++;
                        ?></h3>
                    <br>
                    <p>

                    </p></div>
            </div></li>

        </a>
        <a href="<?= "$titles[$x].html"; ?>">
        <li class="cont" style="background-image: url(<?= $img[$x]; ?>)">
            <div>
                <div id="text1"><h3><?php
                        echo $titles[$x];
                        $x++;
                        ?></h3>
                    <br>
                    <p>

                    </p></div>
            </div></li>

        </a>
        <a href="<?= "$titles[$x].html"; ?>">
        <li class="cont" style="background-image: url(<?= $img[$x]; ?>)">
            <div>
                <div id="text1"><h3><?php
                        echo $titles[$x];
                        $x++;
                        ?></h3>
                    <br>
                    <p>

                    </p></div>
            </div></li>

        </a>
        <a href="<?= "$titles[$x].html"; ?>">
        <li class="cont" style="background-image: url(<?= $img[$x]; ?>)">
            <div>
                <div id="text1"><h3><?php
                        echo $titles[$x];
                        $x++;
                        ?></h3>
                    <br>
                    <p>

                    </p></div>
            </div></li>
            <a>
    </ul>

    <div style="color: black">
        <div class="category">
            <button class="collapsible" type="button"></button>
            <div class="content">
                <p>here is some sample text for u.</p>
            </div>
            <button class="collapsible" type="button">Open Section 2</button>
            <div class="content">
                <p>here is some sample text for u.</p>
            </div>
            <button class="collapsible" type="button">Open Section 3</button>
            <div class="content">
                <p>here is more sample text for u.</p>
            </div>
        </div>
    </div>
    <div class="footer">
        <br>
        <hr>
        <h5>By: Srijan Verma</h5>
        <h5>Email: verma.srijan19@gmail.com</h5>
    </div>
    <script src="Home.js" type="text/javascript"></script>
    </body>
    </html>