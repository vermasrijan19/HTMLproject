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
if ($_POST['submit']) {
    $title = $_POST['title'];
    $para1 = $_POST['text'];
    echo $title . $para1;
    if ($title != "" && $para1 != "") {
        $InsertQuery = "INSERT INTO `forum` (`sr`, `title`, `post`)VALUES (NULL, '$title', '$para1'); ";
        $InsertData = mysqli_query($conn, $InsertQuery);

        if ($InsertData) {
            echo "Data Inserted";
//            $myfile = fopen("{$title}.html", "w");
//            $txt = "{$para1}\n";
//            fwrite($myfile, $txt);
//            fwrite($myfile, $title);
//            fclose($myfile);
        } else {
            echo "not inserted";
        }
        $createQuery = "CREATE TABLE $title (
        sr INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        replies VARCHAR(65535) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
        $InsertData = mysqli_query($conn, $createQuery);
    }

}
?>