<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>HTML-form</title>
</head>
<body>
<form action="insert_book.php"  method="post">
    <table>
        <tr><td>ISBN</td><td><input name="isbn" maxlength=13 size=13></td></tr>
        <tr><td>Author</td><td><input name="author" maxlength=30 size=30></td></tr>
        <tr><td>Name</td><td><input name="title" maxlength=60 size=30></td></tr>
        <tr><td>Price</td><td><input name="price" maxlength=7 size=7></td></tr>
        <tr><td>Count</td><td><input name="quantity" maxlength=3 size=3></td></tr>
        <tr><td colspan=2><input type="submit" value="Input"></td></tr>
    </table>
</form>
</body>
</html>