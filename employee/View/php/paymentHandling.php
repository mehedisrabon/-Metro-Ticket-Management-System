<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Handling - Metro Service</title>
    
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/paymentHandling.css">
</head>
<body>

    <div class="bg"></div>
    <!-- Header -->
    <?php require_once('header.php'); ?>

    <div class="logo">
        <img src="../images/DMTCL.png" alt="Metro Logo">
        <h1>Metro <span>Services</span></h1>
    </div>

    <header>Payment Handling</header>

    <div class="container">

        <div class="card">
            <h3>Verify Payment Status</h3>
            <form action="" method="POST" style="width: 100%; padding: 0; background: transparent; box-shadow: none; backdrop-filter: none;">
                <div class="input-group">
                    <input type="text" name="ticket_id" placeholder="Enter Ticket ID" required>
                    <button type="submit">Verify</button>
                </div>
            </form>
        </div>

        <div class="card">
            <h3>Transaction History</h3>
            <div style="overflow-x: auto;">
                <table>
                    <thead>
                        <tr>
                            <th>Transaction ID</th>
                            <th>Ticket ID</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TX001</td>
                            <td>T123</td>
                            <td>50 BDT</td>
                            <td class="status-paid">Paid</td>
                        </tr>
                        <tr>
                            <td>TX002</td>
                            <td>T124</td>
                            <td>60 BDT</td>
                            <td class="status-pending">Pending</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- Footer -->
    <?php require_once('footer.php'); ?>
</body>
</html>