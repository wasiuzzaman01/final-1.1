<?php
include 'config.php';

// Fetch Data from Database
$sql = "SELECT * FROM main_page_products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page Products</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f5f5f5;
            flex-direction: column;
        }
        .heading {
            text-align: center;
            font-size: 2em;
            font-weight: bold;
            color: #333;
            background-color: wheat;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(255, 0, 0, 0.5);
            width: 80%;
            max-width: 1000px;
            margin-bottom: 20px;
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2em;
            padding: 20px;
            width: 90%;
            max-width: 1000px;
        }
        .product {
            padding: 15px;
            background-color: wheat;
            border-radius: 15px;
            border: 2px solid rgb(193, 193, 194);
            box-shadow: 0 4px 10px rgba(255, 0, 0, 0.5);
            text-align: center;
        }
        .product img {
            width: 100%;
            border-radius: 5px;
            box-shadow: 0 4px 10px rgba(219, 26, 26, 0.5);
        }
        .product:hover {
            background-color: blanchedalmond;
            cursor: pointer;
            transform: scale(1.1);
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <div class="heading">Explore Our Store Categories</div>
    <div class="product-grid">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product'>";
                echo "<img src='" . $row['image_path'] . "' alt='" . $row['name'] . "'>";
                echo "<p>" . $row['name'] . "</p>";
                echo "<p>Category: " . $row['category'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No products available.</p>";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>


<?php
include 'config.php';

// Fetch Data from Database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soap Products</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f5f5f5;
            flex-direction: column;
        }
        .heading {
            text-align: center;
            font-size: 2em;
            font-weight: bold;
            color: #333;
            background-color: wheat;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(255, 0, 0, 0.5);
            width: 80%;
            max-width: 1000px;
            margin-bottom: 20px;
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2em;
            padding: 20px;
            width: 90%;
            max-width: 1000px;
        }
        .product {
            padding: 15px;
            background-color: wheat;
            border-radius: 15px;
            border: 2px solid rgb(193, 193, 194);
            box-shadow: 0 4px 10px rgba(255, 0, 0, 0.5);
            text-align: center;
        }
        .product img {
            width: 100%;
            border-radius: 5px;
            box-shadow: 0 4px 10px rgba(219, 26, 26, 0.5);
        }
        .product:hover {
            background-color: blanchedalmond;
            cursor: pointer;
            transform: scale(1.1);
            font-size: 1.2rem;
        }
        button{
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="heading">Explore Our Best Soap Products</div>
    <div class="product-grid">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product'>";
                echo "<img src='" . $row['image_path'] . "' alt='" . $row['name'] . "'>";
                echo "<p>" . $row['name'] . "</p>";
                echo "<p>Price: " . $row['price'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No products available.</p>";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>

<hr>
<?php
include 'config.php';

// Fetch Data from Database
$sql = "SELECT * FROM miscellaneous_products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miscellaneous Products</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f5f5f5;
            flex-direction: column;
        }
        .heading {
            text-align: center;
            font-size: 2em;
            font-weight: bold;
            color: #333;
            background-color: wheat;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(255, 0, 0, 0.5);
            width: 80%;
            max-width: 1000px;
            margin-bottom: 20px;
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2em;
            padding: 20px;
            width: 90%;
            max-width: 1000px;
        }
        .product {
            padding: 15px;
            background-color: wheat;
            border-radius: 15px;
            border: 2px solid rgb(193, 193, 194);
            box-shadow: 0 4px 10px rgba(255, 0, 0, 0.5);
            text-align: center;
        }
        .product img {
            width: 100%;
            border-radius: 5px;
            box-shadow: 0 4px 10px rgba(219, 26, 26, 0.5);
        }
        .product:hover {
            background-color: blanchedalmond;
            cursor: pointer;
            transform: scale(1.1);
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <div class="heading">Explore Our Miscellaneous Products</div>
    <div class="product-grid">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product'>";
                echo "<img src='" . $row['image_path'] . "' alt='" . $row['name'] . "'>";
                echo "<p>" . $row['name'] . "</p>";
                echo "<p>Price: " . $row['price'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No products available.</p>";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>

<hr>
<?php
include 'config.php';

// Fetch Data from Database
$sql = "SELECT * FROM biscuit_products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biscuit Products</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f5f5f5;
            flex-direction: column;
        }
        .heading {
            text-align: center;
            font-size: 2em;
            font-weight: bold;
            color: #333;
            background-color: wheat;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(255, 0, 0, 0.5);
            width: 80%;
            max-width: 1000px;
            margin-bottom: 20px;
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2em;
            padding: 20px;
            width: 90%;
            max-width: 1000px;
        }
        .product {
            padding: 15px;
            background-color: wheat;
            border-radius: 15px;
            border: 2px solid rgb(193, 193, 194);
            box-shadow: 0 4px 10px rgba(255, 0, 0, 0.5);
            text-align: center;
        }
        .product img {
            width: 100%;
            border-radius: 5px;
            box-shadow: 0 4px 10px rgba(219, 26, 26, 0.5);
        }
        .product:hover {
            background-color: blanchedalmond;
            cursor: pointer;
            transform: scale(1.1);
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <div class="heading">Explore Our Best Biscuit Products</div>
    <div class="product-grid">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product'>";
                echo "<img src='" . $row['image_path'] . "' alt='" . $row['name'] . "'>";
                echo "<p>" . $row['name'] . "</p>";
                echo "<p>Price: " . $row['price'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No products available.</p>";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>

<hr>
<?php
include 'config.php';

// Fetch Data from Database
$sql = "SELECT * FROM beverage_products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beverage Products</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f5f5f5;
            flex-direction: column;
        }
        .heading {
            text-align: center;
            font-size: 2em;
            font-weight: bold;
            color: #333;
            background-color: wheat;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(255, 0, 0, 0.5);
            width: 80%;
            max-width: 1000px;
            margin-bottom: 20px;
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2em;
            padding: 20px;
            width: 90%;
            max-width: 1000px;
        }
        .product {
            padding: 15px;
            background-color: wheat;
            border-radius: 15px;
            border: 2px solid rgb(193, 193, 194);
            box-shadow: 0 4px 10px rgba(255, 0, 0, 0.5);
            text-align: center;
        }
        .product img {
            width: 100%;
            border-radius: 5px;
            box-shadow: 0 4px 10px rgba(219, 26, 26, 0.5);
        }
        .product:hover {
            background-color: blanchedalmond;
            cursor: pointer;
            transform: scale(1.1);
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <div class="heading">Explore Our Best Beverage Products</div>
    <div class="product-grid">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product'>";
                echo "<img src='" . $row['image_path'] . "' alt='" . $row['name'] . "'>";
                echo "<p>" . $row['name'] . "</p>";
                echo "<p>Price: " . $row['price'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No products available.</p>";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>