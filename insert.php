<?php
include 'config.php';

$products = [
    ['Dinner Plate Set', '1000 to 3000 Rupees/set', 'crockery_images/plate_set.jpg'],
    ['Tea Cup & Saucer', '500 to 2000 Rupees/set', 'crockery_images/tea_set.jpg'],
    ['Serving Bowl', '300 to 1500 Rupees/piece', 'crockery_images/bowl.jpg'],
    ['Soup Spoon Set', '200 to 800 Rupees/set', 'crockery_images/spoon_set.jpg'],
    ['Glass Jug', '250 to 1000 Rupees/piece', 'crockery_images/jug.jpg'],
    ['Salad Plate', '150 to 700 Rupees/piece', 'crockery_images/salad_plate.jpg'],
    ['Mug Set (6 pcs)', '400 to 1200 Rupees/set', 'crockery_images/mug_set.jpg'],
    ['Serving Tray', '300 to 1000 Rupees/piece', 'crockery_images/tray.jpg'],
    ['Cutlery Set', '500 to 2000 Rupees/set', 'crockery_images/cutlery.jpg'],
    ['Pitcher Set', '600 to 1500 Rupees/set', 'crockery_images/pitcher.jpg'],
    ['Rice Plate', '200 to 800 Rupees/piece', 'crockery_images/rice_plate.jpg'],
    ['Gravy Bowl', '250 to 900 Rupees/piece', 'crockery_images/gravy_bowl.jpg'],
    ['Coffee Mug', '100 to 600 Rupees/piece', 'crockery_images/coffee_mug.jpg'],
    ['Dessert Plate', '150 to 700 Rupees/piece', 'crockery_images/dessert_plate.jpg'],
    ['Water Glass Set', '300 to 1000 Rupees/set', 'crockery_images/glass_set.jpg'],
    ['Butter Dish', '200 to 500 Rupees/piece', 'crockery_images/butter_dish.jpg'],
    ['Salt & Pepper Shakers', '150 to 450 Rupees/set', 'crockery_images/shakers.jpg'],
    ['Serving Platter', '500 to 1800 Rupees/piece', 'crockery_images/platter.jpg'],
    ['Soup Bowl', '250 to 1000 Rupees/piece', 'crockery_images/soup_bowl.jpg'],
    ['Condiment Set', '300 to 900 Rupees/set', 'crockery_images/condiment_set.jpg'],
    ['Fruit Bowl', '350 to 1200 Rupees/piece', 'crockery_images/fruit_bowl.jpg'],
    ['Milk Jug', '200 to 700 Rupees/piece', 'crockery_images/milk_jug.jpg'],
];

foreach ($products as $product) {
    $sql = "INSERT INTO products (name, price, image_path) VALUES ('$product[0]', '$product[1]', '$product[2]')";
    if ($conn->query($sql) === TRUE) {
        echo "Product '$product[0]' added successfully!<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>


