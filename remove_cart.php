<?php
$conn = new mysqli("localhost", "root", "", "product_db");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM cart WHERE id = $id");
}

header("Location: cart1.php");
?>
