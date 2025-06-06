<?php
include 'config.php';

$main_products = [
    ["Daily Home Care", "Various Prices", "main page image/P1.avif", "Home Care"],
    ["Biscuit", "Various Prices", "main page image/top-biscuit-brands-in-India.webp", "Biscuit"],
    ["Beverage", "Various Prices", "main page image/m3.jpeg", "Beverages"],
    ["Miscellaneous Products", "Various Prices", "main page image/mp1.avif", "Miscellaneous"]
];

// Insert Data into Database
foreach ($main_products as $product) {
    $sql = "INSERT INTO main_page_products (name, price, image_path, category) VALUES ('$product[0]', '$product[1]', '$product[2]', '$product[3]')";
    if ($conn->query($sql) === TRUE) {
        echo "Main page product '{$product[0]}' added successfully!<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
