<?php
?>
<html>
<head>
    <title>TechHub Forum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        .card {
            color: white;
            float: left;
            width: calc(25% - 20px);
            padding: 10px;
            border-radius: 10px;
            margin: 10px;
            height: 200px;
        }

        .card p {
            font-size: 18px;
        }

        .cardContainer:after {
            content: "";
            display: table;
            clear: both;
        }

        @media screen and (max-width: 600px) {
            .card {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<h1>Welcome to the Tech Hub forums</h1>
<h2>Select what you want to do.</h2>
<div class="cardContainer">
    <a href="insert%20forum.php">
        <div class="card" style="background-color:rgb(153, 29, 224);">
            <h2>Post a query</h2>
            <!--        <p>Some text</p>-->
        </div>
    </a>
    <a href="browse-forum.php">
        <div class="card" style="background-color:rgb(12, 126, 120);">
            <h2>Browser forum and help out other people</h2>
            <!--        <p>Some text</p>-->
        </div>
    </a>
</div>
</body>
</html>

