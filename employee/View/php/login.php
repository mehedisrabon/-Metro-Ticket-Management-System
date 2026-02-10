<?php
session_start();

/*
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: userDashboard.php");
    exit();
}
*/

$userIdError   = $_SESSION['userIdError'] ?? '';
$passwordError = $_SESSION['passwordError'] ?? '';
$userIdValue   = $_SESSION['userIdValue'] ?? '';

unset($_SESSION['userIdError'], $_SESSION['passwordError'], $_SESSION['userIdValue']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- CSS -->
   
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>


<div ></div>



<form method="post" action="../../Controller/loginHandle.php" onsubmit="return validateForm()">
    <h2>Login</h2>

    <div class="row">
        <label>Mobile Number</label>
        <input
            type="text"
            id="phone"
            name="userid"
            placeholder="01xxxxxxxxx"
            value="<?php echo htmlspecialchars($userIdValue); ?>"
        >
        <span id="phoneError" style="color:#ff4d4d; font-size:13px;">
            <?php echo $userIdError; ?>
        </span>
    </div>

    <div class="row">
        <label>Password</label>
        <input
            type="password"
            id="password"
            name="password"
            placeholder="Enter password"
        >
        <span id="passwordError" style="color:#ff4d4d; font-size:13px;">
            <?php echo $passwordError; ?>
        </span>
    </div>

    <button type="submit">Login</button>

<div style="text-align:center; margin-top:10px;">
    <a href="forgot_password.php" class="forgot-link">Forgot Password?</a>
</div>

</form>


<?php
// Footer include
require_once __DIR__ . '/footer.php';
?>
<!-- JS -->
<script src="../js/loginHandle.js"></script>

</body>
</html>

