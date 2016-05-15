
<?php
	$searchterm = trim ( $_POST['searchterm'] );
	if (!$searchterm)
    	die ("Please input all the values");
	$searchterm = addslashes ($searchterm);
	$link = mysql_pconnect ('localhost', 'root', '');
	if ( !$link ) die ("impossible to connect MySQL");
	$db = "test1";
	mysql_select_db ( $db ) or die ("Impossible to open $db");
	$query = "SELECT * FROM books WHERE "
    	.$_POST['searchtype']." like '%".$searchterm."%'";
	$result = mysql_query ( $query );
	$n = mysql_num_rows ( $result );
	for ( $i=0; $i<$n; $i++ )
	{
   		$row = mysql_fetch_array($result);
    	echo "<p><b>".($i+1). $row['title']. "</b><br>";
    	echo "Author: ".$row['author']."<br>";
    	echo "ISBN: ".$row['ISBN']."<br>";
    	echo "Price: ".$row['price']."<br>";
    	echo "Count: ".$row['quantity']."</p>";
	}
	if ( $n == 0 ) echo "Nothing to offer :(";
		mysql_close ( $link );
?>
