<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="row text-center pt-5">
        <div class="col">
        <form method="POST" action="https://izupay.com/payment/default"><input type="hidden" name="merchant" value="365E6B45EC075" /><input type="hidden" name="merchant_id" value="3" /><input type="text" name="item_name" value="sadwa" required placeholder="Item name"/><input type="hidden" name="currency_id" value="1" required /><input type="text" name="order_no" value="1212" required placeholder="order number"/><input type="number" name="amount" value="233" required placeholder="price"/><button type="submit">Pay now!</button></form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>