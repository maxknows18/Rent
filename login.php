<?php
// Database connection
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'rental_system'; // Update this name based on your actual database name
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Start session
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    // Query landlords
    $landlord_query = "SELECT * FROM landlords WHERE email = '$email' AND password = '$password'";
    $landlord_result = $conn->query($landlord_query);

    // Query tenants
    $tenant_query = "SELECT * FROM tenants WHERE email = '$email' AND password = '$password'";
    $tenant_result = $conn->query($tenant_query);

    if ($landlord_result && $landlord_result->num_rows > 0) {
        // Landlord login
        $landlord = $landlord_result->fetch_assoc();
        $_SESSION['user_id'] = $landlord['id'];
        $_SESSION['user_role'] = 'landlord';
        $_SESSION['user_name'] = $landlord['name'];
        header("Location: landlord_dashboard.php"); // Redirect to landlord dashboard
        exit();
    } elseif ($tenant_result && $tenant_result->num_rows > 0) {
        // Tenant login
        $tenant = $tenant_result->fetch_assoc();
        $_SESSION['user_id'] = $tenant['id'];
        $_SESSION['user_role'] = 'tenant';
        $_SESSION['user_name'] = $tenant['name'];
        header("Location: tenant_dashboard.php"); // Redirect to tenant dashboard
        exit();
    } else {
        $error_message = "Invalid email or password. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('background.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            text-align: center;
        }

        h1 {
            margin-top: 50px;
        }

        form {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            text-align: left;
        }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #218838;
        }

        p {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($error_message)) : ?>
        <p> <?php echo $error_message; ?> </p>
    <?php endif; ?>
    <form method="POST" action="">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
    </form>
</body>
</html>
