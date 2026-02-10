<?php
session_start();
$message = $_SESSION['msg'] ?? '';
unset($_SESSION['msg']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Extend Ticket</title>
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/extendTicket.css">
</head>

<body>
    <div class="bg"></div>

    <?php require_once('header.php'); ?>

    <div class="container">
        <div class="card">
            <form method="POST" action="../../Controller/extendTicketHandle.php">
                <h2>Extend Ticket</h2>

                <?php if ($message): ?>
                    <div style="color: #F0320C; text-align: center; margin-bottom: 15px; font-weight: bold;">
                        <?php echo htmlspecialchars($message); ?>
                    </div>
                <?php endif; ?>

                <div class="row">
                    <label>Ticket ID</label>
                    <input type="text" name="ticket_id" placeholder="Enter Ticket ID" required>
                </div>

                <div class="row">
                    <label>Next Station</label>
                    <select name="next_station" required>
                        <option value="">-- Select Station --</option>
                        <option value="Uttara North">Uttara North</option>
                        <option value="Uttara Center">Uttara Center</option>
                        <option value="Uttara South">Uttara South</option>
                        <option value="Pallabi">Pallabi</option>
                        <option value="Mirpur 11">Mirpur 11</option>
                        <option value="Mirpur 10">Mirpur 10</option>
                        <option value="Kazipara">Kazipara</option>
                        <option value="Shewrapara">Shewrapara</option>
                        <option value="Agargaon">Agargaon</option>
                        <option value="Bijoy Sarani">Bijoy Sarani</option>
                        <option value="Farmgate">Farmgate</option>
                        <option value="Karwan Bazar">Karwan Bazar</option>
                        <option value="Shahbag">Shahbag</option>
                        <option value="Dhaka University">Dhaka University</option>
                        <option value="Bangladesh Secretariat">Bangladesh Secretariat</option>
                        <option value="Motijheel">Motijheel</option>
                    </select>
                </div>

                <button type="submit">Extend Ticket</button>

                 

                <div class="note">
                    Please verify ticket details before extending
                </div>
            </form>
        </div>
    </div>

    <?php require_once('footer.php'); ?>
</body>
</html>