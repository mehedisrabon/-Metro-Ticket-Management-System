<?php
session_start();
$error = $_SESSION['error'] ?? '';
unset($_SESSION['error']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../css/common.css">
</head>
<body>

<div class="bg"></div>
    <!-- Header -->
    <?php require_once('header.php'); ?>

<form method="post"
      action="../../Controller/forgotHandle.php"
      onsubmit="return validateForgot()">

    <h2>Forgot Password</h2>

    <?php if ($error): ?>
        <p style="color:red;text-align:center;font-size:14px;">
            <?= htmlspecialchars($error) ?>
        </p>
    <?php endif; ?>

    <div class="row">
        <label>Phone Number</label>
        <input type="text" id="phone" name="phone" placeholder="01XXXXXXXXX">
        <span id="phoneError" style="color:red;font-size:13px;"></span>
    </div>

    <button type="submit">Reset</button>

    <div style="text-align:center;margin-top:10px;">
        <a href="login.php">← Back to Login</a>
    </div>
</form>
<!-- Footer -->
    <?php require_once('footer.php'); ?>
<script src="../js/forgot.js"></script>
</body>
</html>

