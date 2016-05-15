<!DOCTYPE html>
<html>
<head>
    <title>HTML-форма поиска книг</title>
    <meta charset="UTF-8">
</head>
<body>
<form action="search_book.php"  method="post">

    Searching by:<br>
    <select name="searchtype" size=3>
        <option value="author" selected>Author
        <option value="title">Title
        <option value="isbn">ISBN
    </select> <br>
    What we are searching:<br> <input name="searchterm"> <br>
    <input type=submit value="Search">
</form>
</body>
</html>