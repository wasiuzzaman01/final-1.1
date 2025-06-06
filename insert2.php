<?php
include 'config.php';

$misc_products =  [
   ["Laundry Basket", "100 to 300 Rupees/pcs", "plastic_items/laundry_basket.jpeg", "Laundry"],
    ["Detergent Bottle", "50 to 200 Rupees/pcs", "plastic_items/detergent_bottle.jpeg", "Laundry"],
    ["Cloth Hangers (Set)", "50 to 150 Rupees/set", "plastic_items/hangers.jpeg", "Laundry"],
    ["Cloth Pegs (Pack of 12)", "20 to 100 Rupees/pack", "plastic_items/cloth_pegs.jpeg", "Laundry"],
    ["Plastic Mop Bucket", "300 to 800 Rupees/pcs", "plastic_items/mop_bucket.jpeg", "Homeware"],
    ["Plastic Dustpan", "20 to 100 Rupees/pcs", "plastic_items/dustpan.jpeg", "Homeware"],
    ["Plastic Spray Bottle", "50 to 150 Rupees/pcs", "plastic_items/spray_bottle.jpeg", "Homeware"],
    ["Plastic Storage Bin", "150 to 500 Rupees/pcs", "plastic_items/storage_bin.jpeg", "Homeware"],
    ["Plastic Clothes Hamper", "200 to 600 Rupees/pcs", "plastic_items/hamper.jpeg", "Laundry"],
    ["Plastic Stool", "150 to 400 Rupees/pcs", "plastic_items/plastic_stool.jpeg", "Homeware"],
    ["Plastic Bucket", "100 to 300 Rupees/pcs", "plastic_items/plastic_bucket.jpeg", "Homeware"],
    ["Measuring Scoop", "10 to 30 Rupees/pcs", "plastic_items/measuring_scoop.jpeg", "Laundry"],
    ["Drawer Organizer Tray", "100 to 250 Rupees/pcs", "plastic_items/drawer_organizer.jpeg", "Homeware"],
    ["Liquid Soap Dispenser", "100 to 200 Rupees/pcs", "plastic_items/soap_dispenser.jpeg", "Homeware"],
    ["Plastic Water Jug", "80 to 250 Rupees/pcs", "plastic_items/water_jug.jpeg", "Homeware"],
    ["Plastic Bowl Set", "100 to 300 Rupees/set", "plastic_items/plastic_bowls.jpeg", "Homeware"],
    ["Plastic Shoe Rack", "400 to 1200 Rupees/pcs", "plastic_items/shoe_rack.jpeg", "Homeware"],
    ["Plastic Basin", "60 to 200 Rupees/pcs", "plastic_items/plastic_basin.jpeg", "Laundry/Home"],
    ["Multi-purpose Basket", "50 to 200 Rupees/pcs", "plastic_items/multipurpose_basket.jpeg", "Homeware"],
    ["Plastic Container Set", "150 to 500 Rupees/set", "plastic_items/container_set.jpeg", "Homeware"]

];

foreach ($misc_products as $product) {
    $sql = "INSERT INTO miscellaneous_products (name, price, image_path) VALUES ('$product[0]', '$product[1]', '$product[2]')";
    if ($conn->query($sql) === TRUE) {
        echo "Miscellaneous product '$product[0]' added successfully!<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
