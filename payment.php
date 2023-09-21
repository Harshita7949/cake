<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
</head>

<body>

    <?php
    include 'header_nav.php';
    ?>

    <div class="container mt-5 px-5">
        <div class="mb-4">
            <h2>Confirm order and pay</h2>
            <span>please make the payment, after that you can enjoy all the features and benefits.</span>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card p-3 bg-secondary border border-dark border-2">
                    <h6 class="text-uppercase">Payment details</h6>
                    <div class="inputbox mt-3">
                        <input type="text" name="name" class="form-control border border-dark border-2" required="required">
                        <span>Name on card</span>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="inputbox mt-3 mr-2">
                                <input type="text" name="name" class="form-control border border-dark border-2" required="required">
                                <i class="fa fa-credit-card"></i>
                                <span>Card Number</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex flex-row">
                                <div class="inputbox mt-3 mr-2">
                                    <input type="text" name="name" class="form-control border border-dark border-2" required="required">
                                    <span>Expiry</span>
                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="inputbox mt-3 mr-2">
                                    <input type="text" name="name" class="form-control border border-dark border-2" required="required">
                                    <span>CVV</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="mt-1 mb-2">
                        <h6 class="text-uppercase">Billing Address</h6>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="inputbox mt-3 mr-2">
                                    <input type="text" name="name" class="form-control border border-dark border-2" required="required">
                                    <span>Street Address</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputbox mt-3 mr-2">
                                    <input type="text" name="name" class="form-control border border-dark border-2" required="required">
                                    <span>City</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="inputbox mt-3 mr-2">
                                    <input type="text" name="name" class="form-control border border-dark border-2" required="required">
                                    <span>State/Province</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputbox mt-3 mr-2">
                                    <input type="text" name="name" class="form-control border border-dark border-2" required="required">
                                    <span>Zip code</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mb-4 d-flex justify-content-between">
                    <a href="newCart.php" class="btn btn-primary px-4 border border-dark border-2">Edit Cart</a>
                    <button class="btn btn-primary px-4 border border-dark border-2">Pay $840</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-blue p-3 text-dark mb-3 bg-secondary border border-dark border-2">
                    <span>You have to pay</span>
                    <div class="d-flex flex-row align-items-end mb-3">
                        <h1 class="mb-0 yellow">$549</h1> <span>.99</span>
                    </div>
                    <span>Enjoy all the features and perk after you complete the payment</span>
                    <a href="#" class="yellow decoration">Know all the features</a>
                    <div class="hightlight">
                        <span>100% Guaranteed support and update for the next 5 years.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>

</html>