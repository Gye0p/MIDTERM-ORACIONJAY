<?php
include 'db.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $sql = "INSERT INTO Products (Name, Category, Price) VALUES ('$name', '$category', '$price')";
    $conn->query($sql);
}

$result = $conn->query("SELECT * FROM Products");
echo "<h2>Products</h2><form method='POST'><input name='name' placeholder='Name'><input name='category' placeholder='Category'><input name='price' placeholder='Price'><button>Add</button></form><ul>";
while ($row = $result->fetch_assoc()) {
    echo "<li>{$row['Name']} - {$row['Category']} - {$row['Price']}</li>";
}
echo "</ul><a href='dashboard.php'>Back</a>";
?>