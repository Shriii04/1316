<!DOCTYPE html>
<html>
<head>
  <title>Currency Converter - Result</title>
</head>
<body>

  <h2>Currency Conversion Result</h2>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST['amount'];
    $currency = $_POST['currency'];

    if ($currency === "USD") {
      $converted_amount = $amount * 75.5; // Assuming 1 USD = 75.5 INR (You can adjust this value)
      echo "<p>$amount US Dollar(s) is equal to ₹ $converted_amount Indian Rupees</p>";
    } elseif ($currency === "INR") {
      $converted_amount = $amount / 75.5; // Assuming 1 USD = 75.5 INR (You can adjust this value)
      echo "<p>₹ $amount Indian Rupee(s) is equal to $converted_amount US Dollars</p>";
    }
  }
  ?>

</body>
</html>
