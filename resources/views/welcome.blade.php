<!DOCTYPE html>
<html>
    <head>
        <title>stripe DE おかいもの</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">stripe DE おかいもの</div>
                <div>¥100</div>
                <form action="./thanks" method="POST">
                    <script
                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="<?php echo getenv('STRIPE_PUBLIC_KEY') ?>"
                            data-amount="100"
                            data-name="kin29テスト"
                            data-description="Example charge"
                            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                            data-locale="auto"
                            data-currency="jpy">
                    </script>
                </form>
            </div>
        </div>
    </body>
</html>
