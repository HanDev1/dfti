<html>
<head>
<title>PHP test</title>
</head>
<body>
    
    
<?php

//<form method="get" action="database.php">


$a = $_GET["artist"];
$s = $_GET["song"];
$m = $_GET["month"];
$y = $_GET["year"];
$c = $_GET["chart"];





$conn = new PDO ("mysql:host=localhost;dbname=ephp057;", "ephp057", "eil7eeBu");


$results = $conn->query("select * from hits where artist LIKE '%$a%'");
$row=$results->fetch();

if ($row == "") // if $a equals a blank string, i.e. no name was entered
{
    echo "Please enter an artist! <br />";
}
elseif ($row == false) 
{ 
    echo "No results found <br />"; 
}
else
{
    while($row)
{
    echo "<p>";
    echo " song title $row[song]  <br/> ";
    echo " artist $row[artist] <br/> " ; 
    echo " year $row[year] <br/>" ; 
	echo " genre $row[genre] <br/>" ; 
    echo "</p>";
	
	//we now need to fetch the next row
	$row=$results->fetch();
}
}


?>    
    
    
    
    
    
    
    
    
</body>
</html>

