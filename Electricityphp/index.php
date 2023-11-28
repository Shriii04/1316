<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f0f0;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .container h2 {
            text-align: center;
            color: #007BFF;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 3px;
        }
        .btn-primary {
            background-color: #007BFF;
            border: none;
            border-radius: 3px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h2>Electricity Bill Calculator</h2>
        <form method="post" action="calculate.php">
            <div class="form-group">
                <label for="consumer_name">Consumer Name</label>
                <input type="text" class="form-control" name="consumer_name" id="consumer_name" required>
            </div>
            <div class="form-group">
                <label for="consumer_id">Consumer ID</label>
                <input type="text" class="form-control" name="consumer_id" id="consumer_id" required>
            </div>
            <div class="form-group">
                <label for="units">Total Units Consumed</label>
                <input type="number" class="form-control" name="units" id="units" placeholder="Enter total units consumed" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary" name="calculateBtn">Calculate</button>
            </div>
        </form>
    </div>
</body>
</html>
