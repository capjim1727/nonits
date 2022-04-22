<?php
    $con= new mysqli("localhost","root","Isr@el1208","no_nits");
    $name = $_post['search'];
    //$query = "SELECT * FROM customers
   // WHERE FirstName LIKE '%{$name}%' OR LastName LIKE '%{$name}%'";

    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

$result = mysqli_query($con, "SELECT * FROM customers
    WHERE FirstName LIKE '%{$name}%' OR LastName LIKE '%{$name}%'");

if ($result->num_rows > 0) {
    // output data of each row
while($row = $result->fetch_assoc()) {
    echo "<tr><br><td>". $row["CustomerID"]. "</td><br><td>". $row["FirstName"]. "</td><br><td>" . $row["LastName"] . "</td><br></tr>";
}
} else {
echo "0 results";
}
    mysqli_close($con);
    ?>
