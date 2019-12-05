<head>
<title>PHP: Get Values of Multiple Checked Checkboxes</title>
<link rel="stylesheet" href="css/php_checkbox.css" />
</head>
<body>
<div class="container">
<div class="main">
<h2>PHP: Get Values of Multiple Checked Checkboxes</h2>


<form action="test_db.php" method="post">
<label class="heading">Select Your Technical Exposure:</label><br><br>
<input type="checkbox" name="check_list[]" value="Java"><label> Java</label>
<input type="checkbox" name="check_list[]" value="PHP"><label> PHP</label>
<input type="checkbox" name="check_list[]" value="HTML/CSS"><label> HTML/CSS</label><br><br>
<input type="submit" name="submit" Value="Submit"/>


</form>
</div>
</div>
</body>
</html>