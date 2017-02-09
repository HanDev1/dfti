<html>
<head>

</head>
<body>
    
    
<?php
$u = $_POST["username"];
$pw = $_POST["password"];
$fn = $_POST["fname"];
$ln = $_POST["lname"];
$n = $_POST["fname"].' '.$_POST["lname"];
$dayB = $_POST["dayB"];
$monthB = $_POST["monthB"];
$yearB = $_POST["yearB"];


try {
$conn = new PDO ("mysql:host=localhost;dbname=ephp057;", "ephp057", "eil7eeBu");

$sql = "INSERT INTO ht_users (username, password, name, dayofbirth, monthofbirth, yearofbirth)
VALUES ('$u', '$pw', '$n', $dayB, $monthB, $yearB)";
// set the PDO error mode to exception
   // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   //echo $sql; //to error check
// use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

if ($dob > 2000)
{
    echo "You have to be 16 or over to sign up!";
}
else
{
    echo "<p>You have signed up with:<br /> Name: $fn <br /> username: $u<br /> Date of birth: $dayB  $monthB $yearB </p>";
}
?>    
    