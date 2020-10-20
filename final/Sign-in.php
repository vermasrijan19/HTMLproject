<?php
echo "hi";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_creds";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn)
{
    echo "Connection Established1";
}
else{
    die("Connection Failed".mysqli_connect_error());
}
error_reporting(0);
    $user = $_POST['username'];
    $pwd = $_POST['password'];
    $query = "Select * from login_creds.creds  where Username='$user' && Password='$pwd'";
    $data = mysqli_query($conn, $query);
    $totalrows = mysqli_num_rows($data);
    if ($totalrows == 1) {
        //echo "Logged in";
        $_SESSION['username'] = $user;
        header('location:art.php');
        echo ("login success");
        return true;
    } else {
        echo "Failed to Login";
        return false;
    }
?>

