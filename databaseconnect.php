<?php
$myServer = "localhost";
$myUser = "Admin";
$myPass = "cnuashahjd";
$myDB = "Products";

// $dbhandle = mssql_connect($myServer, $myUser, $myPass)
//   or die("Couldn't connect to SQL Server on $myServer"); 

  $sql = "SELECT id, itemname, price FROM Products";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["itemname"]. " " . $row["price"]. "<br>";
    }
} else {
    echo "No result";
}

mysqli_close($conn);
?>
