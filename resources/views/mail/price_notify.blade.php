<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Price notification</title>
</head>
<body>
    <h2>Closing Price Notification.</h2>
    <h3>Date: {{ date('Y-m-d') }}</h3>
    <p>Closing price of Company : <strong>{{ ucfirst($dailytransaction->company) }}</strong>  is Rs {{ $dailytransaction->cl_price }}.</p>
    <h4>Thank You !!</h4> <span>Hamro Share Bazaar Team</span>
</body>
</html>
