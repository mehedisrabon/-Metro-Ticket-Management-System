<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Unblock Card</title>
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/unblockCard.css">
</head>
<body>

    <div class="bg"></div>

    <!-- Header -->
    <?php require_once('header.php'); ?>

    <div class="container">
        <form action="#" method="POST">
            <h2>Unblock Card</h2>

            <div class="row">
                <label>Card ID</label>
                <input type="text" placeholder="Enter Card ID" required>
            </div>

            <div class="row">
                <label>Reason / Notes</label>
                <textarea placeholder="Enter reason for block or notes"></textarea>
            </div>

            <button type="submit">Unblock Card</button>

            <a href="passengerSupport.php" class="back-btn">← Back</a>

            <div class="note">
                Please verify card details before unblocking
            </div>
        </form>
    </div>
    <!-- Footer -->
    <?php require_once('footer.php'); ?>
</body>
</html>