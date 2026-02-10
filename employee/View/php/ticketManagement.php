<?php
session_start();
$message = $_SESSION['msg'] ?? '';
unset($_SESSION['msg']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ticket Management</title>
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/ticketManagement.css">

    <style>
        /* Make heading text white */
        .card h2 {
            color: #ffffff !important;
        }

        /* Status message banner inside the card */
        .status-msg {
            text-align: center;
            font-weight: bold;
            font-size: 15px;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 8px;
            color: #fff;
        }

        .status-confirm {
            background-color: #27d788; /* Green for confirmed */
        }

        .status-cancel {
            background-color: #F0320C; /* Red for cancelled or errors */
        }
    </style>
</head>

<body>
    <!-- Background -->
    <div class="bg"></div>

    <!-- Header -->
    <?php require_once('header.php'); ?>

    <div class="container">
        <div class="card">
            <h2>Ticket Management</h2>

            <!-- Show status message inside the card -->
            <?php if ($message): ?>
                <div class="status-msg
                    <?php 
                        if ($message === "ticket confirm") echo "status-confirm";
                        else echo "status-cancel"; 
                    ?>">
                    <?php echo htmlspecialchars($message); ?>
                </div>
            <?php endif; ?>

            <!-- Ticket Management Form -->
            <form method="POST" action="../../Controller/ticketManagementHandle.php">
                <label>Ticket ID</label>
                <input type="text" name="ticket_id" placeholder="Enter Ticket ID" required>

                <label>Action</label>
                <select name="action" required>
                    <option value="">-- Select Action --</option>
                    <option value="Confirmed">Confirm Booking</option>
                    <option value="Cancelled">Cancel Ticket</option>
                </select>

                <button type="submit">Submit</button>

                <a href="employeDashboard.php" class="back-btn">← Back</a>

                <div class="note">
                    Make sure to verify the ticket ID and action
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <?php require_once('footer.php'); ?>
</body>
</html>
