<html>
<head>
    <link href="art.css" rel="stylesheet" type="text/css">
</head>
<body style="background:black">
<h1 >Welcome to the article editor</h1>
<hr>
<form method="post" action="insertvalues.php">
    <br><label>Enter the title pls:</label>
    <input name="title" id="title" value="" type="text">
    <br>
    <br>
    <br>
    <br><label>Enter the url to the image:</label>
    <input name="img" id="img" value="" type="url" width="500px">
    <br>
    <br><label>Enter paragraph 1:</label>
    <br>
    <textarea name="text" id="text" placeholder="This will be para 1 of the article"> </textarea>
    <br><br><label>Enter paragraph 2:</label><br><br>
    <textarea name="text1" id="text1" placeholder="This will be para 1 of the article"> </textarea>
    <br><br><label>Enter paragraph 3:</label><br><br>
    <textarea name="text2" id="text2" placeholder="This will be para 1 of the article"> </textarea>
    <input type="submit" name="submit" value="Submit Form">
</form>
</body>
</html>
