<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        
        .container {
            width: 300px;
            margin: 200px auto;
    /* Center the container horizontally */
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<?php
// กำหนดให้ PHP แสดงข้อผิดพลาดทั้งหมด
error_reporting(E_ALL);
ini_set('display_errors', 1);

// เรียกใช้งาน session

// เชื่อมต่อกับฐานข้อมูล
$servername = "10.1.3.40"; 
$username = "65102010688"; 
$password = "65102010688"; 
$dbname = "65102010688"; 

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // กำหนดโหมดของ PDO เป็น Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// รับข้อมูลจากฝั่งผู้ใช้
$username = isset($_POST['username']) ? $_POST['username'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";

// ตรวจสอบว่ามีการกรอกข้อมูลหรือไม่
if (empty($username) || empty($password)) {
    // ถ้ามีช่องว่าง
    $error_message = "Please enter username and password";
} else {
    // ตรวจสอบการล็อกอิน
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // การล็อกอินสำเร็จ
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $user['id'];
        header("Location: index.php");
        exit();
    } else {
        // การล็อกอินไม่สำเร็จ
        $error_message = "Invalid username or password";
    }
}
?>
<body>
    <div class="container">
        <h2>เข้าสู่ระบบ</h2>
        <form action="login.php" method="post">
            <label for="username">ชื่อผู้ใช้:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">รหัสผ่าน:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="เข้าสู่ระบบ">
        </form>
        <p><a href="register.php">สมัครสมาชิก</a></p>
    </div>
</body>
