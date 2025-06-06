<?php
session_start();

// connection to the database
$conn = mysqli_connect("localhost", "root", "", "ss-plastic");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle login form submission
if (isset($_POST['login'])) {
    $email = $_POST['login-email'];
    $password = $_POST['login-password'];

    // Query to validate the email/password from the database
    $query = "SELECT * FROM singup WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if ($password == $user['password']) { // Check if the password matches
            $_SESSION['user'] = $email;
            header("Location: index2.php"); // Redirect to the dashboard page after login
            exit();
        } else {
            $login_error = "Invalid password.";
        }
    } else {
        $login_error = "Invalid email or user does not exist.";
    }
}

// Handle signup form submission
if (isset($_POST['signup'])) {
    $name = $_POST['signup-name'];
    $email = $_POST['signup-email'];
    $password = $_POST['signup-password'];

    // Check if the email already exists
    $select_query = "SELECT * FROM singup WHERE email = '$email'";
    $result = mysqli_query($conn, $select_query);

    if (mysqli_num_rows($result) > 0) {
        // If user already exists
        $msg = "User already exists.";
    } else {
        // Insert new user into the database
        $insert_query = "INSERT INTO singup (name, email, password) VALUES ('$name', '$email', '$password')";
        if (mysqli_query($conn, $insert_query)) {
            $_SESSION['user'] = $email; // Store email in session
            header("Location: login.php"); // Redirect to the dashboard page after signup
            exit();
        } else {
            $signup_error = "Error during signup: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login or Signup</title>
    <link rel="stylesheet" href="login.css">
   
</head>
<body>

    <div class="container">
        <div class="form-container">
            <h2>Welcome! Please login or sign up</h2>

            <!-- Login Form -->
            <form id="login-form" class="form" method="POST" action="">
                <h3>Login</h3>
                <input type="email" name="login-email" placeholder="Email" required>
                <input type="password" name="login-password" placeholder="Password" required>
                <?php if (isset($login_error)): ?>
                    <p style="color: red;"><?php echo $login_error; ?></p>
                <?php endif; ?>
                <button type="submit" name="login">Login</button>
                <p class="switch-form" onclick="toggleForm()">Don't have an account? Sign up</p>
            </form>

            <!-- Signup Form -->
            <form id="signup-form" class="form" method="POST" action="" style="display:none;">
                <h3>Sign Up</h3>
                <input type="text" name="signup-name" placeholder="Full Name" required>
                <input type="email" name="signup-email" placeholder="Email" required>
                <input type="password" name="signup-password" placeholder="Password" required>
                <?php if (isset($signup_error)): ?>
                    <p style="color: red;"><?php echo $signup_error; ?></p>
                <?php endif; ?>
                <button type="submit" name="signup">Sign Up</button>
                <p class="switch-form" onclick="toggleForm()">Already have an account? Login</p>
            </form>
        </div>
    </div>

    <script src="scripts.js"></script>
</body>
</html>
