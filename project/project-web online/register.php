<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
    <style>
                /* Import IBM Plex Sans Thai font */
@import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@100;300;400;500;700&display=swap');

/* Apply IBM Plex Sans Thai font to the entire website */
body {
    font-family: 'IBM Plex Sans Thai', sans-serif;
    background-color: #f8f9fa;
}

.container {
    width: 400px;
    margin: 100px auto;
    padding: 40px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 30px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    font-weight: bold;
    margin-bottom: 8px;
}

input[type="text"],
input[type="password"] {
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    transition: border-color 0.3s;
}

input[type="text"]:focus,
input[type="password"]:focus {
    outline: none;
    border-color: #007bff;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 12px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

.login-link {
    text-align: center;
    margin-top: 20px;
}

.login-link a {
    color: #007bff;
    text-decoration: none;
    transition: color 0.3s;
}

.login-link a:hover {
    color: #0056b3;
}

    </style>
</head>
<?php
$servername = "10.1.3.40";
$username = "65102010688";
$password = "65102010688";
$dbname = "65102010688";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirm_password'];
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  if ($password !== $confirmPassword) {
    echo "Password and Confirm Password do not match";
    exit();
  }

  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";
  if ($conn->query($sql) === TRUE) {
    // Registration successful, display JavaScript popup and redirect
    echo '<script>alert("Registration successful. You can now log in."); window.location.href = "login.php";</script>';
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>
<body>
    <div class="container">
        <h2>Register</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            <input type="submit" value="Register">
        </form>
        <div class="login-link">
            <p><a href="login.php">Already have an account? Log in here</a></p>
        </div>
    </div>
</body>
</html>
