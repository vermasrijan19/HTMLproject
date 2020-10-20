<?php
?>
<html>
<head>
    <link href="art.css" rel="stylesheet" type="text/css">
</head>
<body style="background:black; color: wheat">
<h1 >Welcome to the Tech Hub forums article editor</h1>
<hr>
<form method="post" action="forum%20inserter.php">
    <br><label>Enter the subject of the post:</label>
    <input style="width: 500px;" name="title" id="title" value="" type="text">
    <br><br><label></label><br><br>
    <textarea name="text" id="text" placeholder="This will be para 1 of the article"> </textarea>
    <input type="submit" name="submit">
</form>
</body>
</html>

