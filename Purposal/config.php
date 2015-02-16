<?PHP 

// connect to db
$link = mysql_connect('localhost', 'ddavisgr_dave', 'cowboy050403!');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

if (! mysql_select_db('ddavisgr_gradschool') ) {
    die ('Can\'t use ddavisgr_gradschool : ' . mysql_error());
}


?> 
