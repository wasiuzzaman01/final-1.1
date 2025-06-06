<?php
include 'config.php';

$beverage_products = [
    ["Stainless Steel Water Bottle", "150 to 500 Rupees/pcs", "steel_items/steel_bottle.jpeg", "Homeware"],
    ["Steel Lunch Box", "200 to 600 Rupees/pcs", "steel_items/lunch_box.jpeg", "Homeware"],
    ["Steel Container Set", "300 to 900 Rupees/set", "steel_items/container_set.jpeg", "Homeware"],
    ["Steel Plates (Set of 6)", "250 to 700 Rupees/set", "steel_items/steel_plates.jpeg", "Homeware"],
    ["Steel Bowl Set", "200 to 500 Rupees/set", "steel_items/steel_bowls.jpeg", "Homeware"],
    ["Steel Jug", "300 to 600 Rupees/pcs", "steel_items/steel_jug.jpeg", "Homeware"],
    ["Steel Serving Tray", "150 to 400 Rupees/pcs", "steel_items/serving_tray.jpeg", "Homeware"],
    ["Steel Tumbler Set", "200 to 600 Rupees/set", "steel_items/tumbler_set.jpeg", "Homeware"],
    ["Steel Strainer", "100 to 250 Rupees/pcs", "steel_items/strainer.jpeg", "Homeware"],
    ["Steel Storage Canisters", "400 to 1000 Rupees/set", "steel_items/storage_canisters.jpeg", "Homeware"],
    ["Steel Pressure Cooker", "800 to 2000 Rupees/pcs", "steel_items/pressure_cooker.jpeg", "Homeware"],
    ["Steel Kadhai", "600 to 1500 Rupees/pcs", "steel_items/kadhai.jpeg", "Homeware"],
    ["Steel Frying Pan", "400 to 1000 Rupees/pcs", "steel_items/frying_pan.jpeg", "Homeware"]
];

// Insert Data into Database
foreach ($beverage_products as $product) {
    $sql = "INSERT INTO beverage_products (name, price, image_path) VALUES ('$product[0]', '$product[1]', '$product[2]')";
    if ($conn->query($sql) === TRUE) {
        echo "Beverage product '{$product[0]}' added successfully!<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close Connection
$conn->close();
?>
