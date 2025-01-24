<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SeiyaShop</title>
    <!-- Include your CSS file -->
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
    <style>
   
    body {
            background-image: url('background.jpg');
            /* Adjust background properties as needed */
            background-size: cover;
            background-position: center;
            /* Add any other background properties you need */
        }
</style>

</head>
<body>
    <!-- Header -->
    <div class="header-container border-top">
        <div class="logo">
            <h1>Seiya Shop</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="18px" width="18px" xmlns="http://www.w3.org/2000/svg"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>หน้าหลัก</a></li>
                <li><a href="shop.php"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="18px" width="18px" xmlns="http://www.w3.org/2000/svg"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>สินค้า</a></li>
                <li><a href="/topup"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="18px" width="18px" xmlns="http://www.w3.org/2000/svg"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>เติมเงิน</a></li>
            </ul>
        </nav>
                <div class="login-register">
    <?php
    session_start();
    // Check if the user is logged in
    if (isset($_SESSION['username'])) {
        // User is logged in, display username and logout link
        $username = $_SESSION['username'];
        echo '<div style="text-align: right;">';
        echo '<span id="username">' . $username . '</span>'; // Username
        echo '<br>';
        echo '<a href="logout.php" id="logoutLink" style="display: none;">Logout</a>'; // Logout link (initially hidden)
        echo '</div>';
    } else {
        // User is not logged in, display login and register links
        echo '<a href="login.php">เข้าสู่ระบบ</a>';
        echo '<a href="register.php">สมัครสมาชิก</a>';
    }
    ?>
</div>

<script>
    // Function to toggle the visibility of the logout link when the username is clicked
    document.getElementById("username").addEventListener("click", function() {
        var logoutLink = document.getElementById("logoutLink");
        if (logoutLink.style.display === "none") {
            logoutLink.style.display = "inline"; // Show logout link
        } else {
            logoutLink.style.display = "none"; // Hide logout link
        }
    });
</script>

    </div>
</body>
</html>
