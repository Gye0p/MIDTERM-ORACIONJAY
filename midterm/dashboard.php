<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
echo "<h1>Welcome, " . $_SESSION['username'] . "</h1>";
echo "<a href='products.php'>Manage Products</a> | ";
echo "<a href='suppliers.php'>Manage Suppliers</a> | ";
echo "<a href='stock.php'>Manage Stock</a> | ";
echo "<a href='sales.php'>Manage Sales</a> | ";
echo "<a href='report.php'>Reports</a> | ";
echo "<a href='logout.php'>Logout</a>";
?>