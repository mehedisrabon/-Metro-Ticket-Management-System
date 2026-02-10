<?php
session_start();
if (!isset($_SESSION['reset_mobile'])) {
    header("Location: forgot_password.php");
    exit();
}
$error = $_SESSION['error'] ?? '';
unset($_SESSION['error']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/updatepass.css">
</head>
<body>

<div class="bg"></div>
    <!-- Header -->
    <?php require_once('header.php'); ?>

<form action="../../Controller/updatePassHandle.php" method="post" onsubmit="return validatePassword()">
    <h2>Reset Password</h2>

    <?php if ($error): ?>
        <p style="color:red; text-align:center; font-size:14px;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <div class="row">
        <label>New Password</label>
        <input type="password" name="new_pass" id="new_pass" placeholder="Enter new password">
    </div>

    <div class="row">
        <label>Confirm Password</label>
        <input type="password" name="confirm_pass" id="confirm_pass" placeholder="Confirm new password">
        <span id="passError" style="color:red; font-size:13px; display:block;"></span>
    </div>

    <button type="submit">Continue</button>

    <a href="login.php" class="cancel-btn">Cancel</a>
</form>
<!-- Footer -->
    <?php require_once('footer.php'); ?>
<script src="../js/updatePass.js"></script>
</body>
</html>