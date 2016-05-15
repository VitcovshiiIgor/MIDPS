<?php
	if (!isset($_POST['isbn']) || !isset($_POST['author']) ||
    	!isset($_POST['title']) || !isset($_POST['price']) ||
    	!isset($_POST['quantity'])){
        	die ("Please input all values");
	}

	$isbn   = trim ( $_POST['isbn'] );
	$author = trim ( $_POST['author'] );
	$title  = trim ( $_POST['title'] ) ;
	$isbn   = addslashes ( $isbn );
	$author = addslashes ( $author );
	$title  = addslashes ( $title ) ;
	$db = "test1";
	$link = mysql_connect('localhost', 'root', '');
	if ( !$link ) die ("Impossible to connect  MySQL");
	mysql_select_db ( $db ) or die ("Impossible to open $db");
	$query = "INSERT INTO books VALUES ('"
    		.$isbn."', '".$author."', '".$title."', '"
    		.floatval($_POST['price'])."', '".intval($_POST['quantity'])."')";
	$result = mysql_query ( $query );
	if ($result) echo "Book was added to the Data Base";
	mysql_close ( $link );
?>