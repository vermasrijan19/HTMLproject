<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn) {
    echo "Connection Established1 ";
} else {
    die("Connection Failed" . mysqli_connect_error());
}
if($_POST['submit']) {
    $title = $_POST['title'];
    $para1 = $_POST['text'];
    $para2 = $_POST['text1'];
    $para3 = $_POST['text2'];
    $image=$_POST['img'];
    echo $title. $para1;
    if ($title != "" && $para1 != "") {
        $InsertQuery = "INSERT INTO `articles` (`sr`, `para1`, `para2`, `para3`, `title`,`images`)VALUES (NULL, '$para1', '$para2', '$para3', '$title','$image'); ";
        $InsertData = mysqli_query($conn, $InsertQuery);

        if ($InsertData) {
            echo "Data Inserted";
        }
        else{
            echo "not inserted";
        }
    }

    $myfile = fopen("{$title}.html", "w") ;
    $txt = "{$para1}\n";
    fwrite($myfile, $txt);
    $txt = "{$para2}\n";
    fwrite($myfile, $txt);
    $txt = "{$para3}\n";
    fwrite($myfile, $txt);
    fclose($myfile);

}