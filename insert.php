<?php
header('Content-Type: text/html; charset=utf-8');
?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="form.css">
<title> Insert גגג</title>
</head>
<body>

liad

<form action="add.php" method="post" class="basic-grey">
Name: <input type="text" name="name"><br>
Name from a list: <input type= "text" name="name2" list = "metupals"><br>
Price: <input type="text" name="price"><br>
Comments: <input type="text" name="comment"><br>
Date: <input type="text" name="date"><br>
<input type="submit">

</form>
<datalist id="metupals">
<option value ="liad1">
<option value = "liee">

</datalist>

</body>
</html>
