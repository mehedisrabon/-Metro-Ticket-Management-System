<?php
session_start();
include "../model/PaymentModel.php";
include "header.php";

// Get user and route info
$userID = $_SESSION['UserID'] ?? 0;
if (!isset($_GET['route_id'])) {
    die("Route not selected");
}

$routeID = (int) $_GET['route_id'];

// Get wallet balance and route fare
$balance = getWalletBalance($userID);
$fare    = getRouteFare($routeID);
?>

<link rel="stylesheet" href="payment.css">

<div class="payment-box">
    <div class="payment-form">
        <h2>Payment Page</h2>

        
        <p class="balance">
           Available Balance: <span id="balanceSpan"><?php echo $balance; ?> BDT</span>
        </p>

         
        <p>
            Fare: <span class="fare-amount"><?php echo $fare; ?> BDT</span>
        </p>

         
        <form id="paymentForm" method="POST" action="../controller/PaymentController.php">
            <input type="hidden" name="route_id" value="<?php echo $routeID; ?>">
            <input type="hidden" name="amount" id="amount" value="<?php echo $fare; ?>">

            <label>Payment Method</label>
            <select name="payment_method" id="payment_method">
                <option value="">Select Payment Method</option>
                <option value="Rocket">Rocket</option>
                <option value="Bkash">Bkash</option>
                <option value="Card">Card</option>
            </select>

            <p class="disclaimer">
                Service charge & SMS charge are non-refundable.<br>
                By clicking Process Payment you agree to Metro Rail Terms & Conditions.
            </p>

            <button type="submit" name="submit">Process Payment</button>
            <button type="reset">Reset</button>
        </form>
    </div>
</div>


<script src="payment.js"></script>

<?php include "footer.php"; ?>
