<?php
if (isset($_POST['calculateBtn'])) {
    $consumer_name = $_POST['consumer_name'];
    $consumer_id = $_POST['consumer_id'];
    $units = $_POST['units'];
    $totalBill = 0;

    if ($units <= 50) {
        $totalBill = $units * 3.50;
    } elseif ($units <= 150) {
        $totalBill = 50 * 3.50 + ($units - 50) * 4.00;
    } elseif ($units <= 250) {
        $totalBill = 50 * 3.50 + 100 * 4.00 + ($units - 150) * 5.20;
    } else {
        $totalBill = 50 * 3.50 + 100 * 4.00 + 100 * 5.20 + ($units - 250) * 6.50;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .bill-container {
            background-color: #fff;
            border: 2px solid #000;
            padding: 20px;
            max-width: 500px;
            margin: 0 auto;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            font-family: Arial, sans-serif;
        }
        .bill-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .bill-details {
            padding: 10px 0;
            border-bottom: 1px solid #ccc;
        }
        .bill-details:last-child {
            border-bottom: none;
        }
        .bill-details strong {
            color: #007BFF;
        }
        .btn-container {
            text-align: center;
            margin-top: 20px;
        }
        .btn-primary {
            background-color: #007BFF;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="bill-container">
            <div class="bill-header">
                <h2 style="color: #007BFF;">Electricity Bill</h2>
            </div>
            <?php if (isset($_POST['calculateBtn'])): ?>
                <div class="bill-details">
                    <p><strong>Consumer Name:</strong> <?php echo $consumer_name; ?></p>
                    <p><strong>Consumer ID:</strong> <?php echo $consumer_id; ?></p>
                    <p><strong>Total Units Consumed:</strong> <?php echo $units; ?></p>
                </div>
                <div class="bill-details">
                    <p><strong>Electricity Charges:</strong> Rs. <?php echo number_format($totalBill, 2); ?></p>
                </div>
                <div class="bill-details">
                    <p><strong>Total Amount Payable:</strong> Rs. <?php echo number_format($totalBill, 2); ?></p>
                </div>
                <div class="btn-container">
                    <a href="index.php" class="btn btn-primary">Calculate Another Bill</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
