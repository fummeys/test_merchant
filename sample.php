<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-content-center" style="height: 500px;">
            <div class="col text-center">
                <form method="POST" action="http://localhost:4000/payment/default">
                    <input type="hidden" name="order" id="result_order" value="#"/>
                    <input type="hidden" name="merchant" id="result_merchant" value="#"/>
                    <input type="hidden" name="merchant_id" id="result_merchant_id" value="#"/>
                    <input type="hidden" name="item_name" id="result_item_name" value="Testing payment"/>
                    <input type="hidden" name="custom" id="result_custom" value="comment"/>
                    <input type="hidden" name="amount" id="result_amount" value="10"/>
                    <button class="btn btn-primary btn-lg" type="submit">Test payment form</button>
                </form>
            </div>
        </div>
    </div>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>