<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Passenger Support</title>
     <!-- CSS File Link -->
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/passengerSupport.css">
    
</head>

<body>

    <!-- Background -->
    <div class="bg"></div>
    <!-- Header -->
    <?php require_once('header.php'); ?>

    <!-- Passenger Support -->
    <div class="support-box">
        <h2>Passenger Support</h2>

        <!-- UPDATED LINKS -->
        <a href="extendTicket.php" class="option">
            🚆 Extend Ticket
        </a>

        <a href="resolveBlockCard.php" class="option">
            💳 Resolve Blocked Card
        </a>
          <!-- Back button -->
        <a href="employeDashboard.php" class="back-btn">← Back</a>
        
        <div class="note">
            Choose an option to get assistance
        </div>
    </div>
    <!-- Footer -->
    <?php require_once('footer.php'); ?>
</body>
</html>
