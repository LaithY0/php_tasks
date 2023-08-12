

<?php 

require("conn.php");

$stmt = $conn->prepare("SELECT * FROM users");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);


foreach($users as $user);
echo "<table border = 2px style=text-align: center;> ";
echo "<thead>";
echo "<tr>";
echo "<th>Id </th>";
echo "<th>Name </th>";
echo "<th>Address </th>";
echo "<th>Salary </th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
if($users['statee'] !== 1 ){
foreach ($users as $user) {
    echo "<tr>";
    echo "<td>" . $user['id'] . "</td>";
    echo "<td>" . $user['namee'] . "</td>";
    echo "<td>" . $user['addresss'] . "</td>";
    echo "<td>" . $user['salary'] . "</td>";
    echo "</tr>";
}
}

echo "</tbody>";
echo "</table>";

?>


