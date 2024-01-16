<!doctype html>

<!-- Web page "Hello World Autos"       -->
<!-- Created by Harrison Kong           -->
<!-- Copyright (C) Coursera 2021        -->

<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv=“Pragma” content=”no-cache”>
<meta http-equiv=“Expires” content=”-1″>
<meta http-equiv=“CACHE-CONTROL” content=”NO-CACHE”>
<!-- CSS Stylesheets -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="css/index.css">

<title>Hello World Autos</title>   

</head>

<body>
<?php include "objects.php"; ?>


<div class='outer-div'>
<h1><?php echo "Hello World Autos" ?></h1>
<p class="slogan">Where everyone can afford to buy a vehicle!</p>

<table class="vehicle-table" id="vehicle-table">
    <colgroup>
        <col width="20%"><col width="80%">
    </colgroup>
    <tbody>
        <!-- rows of vehicles -->
        <?php foreach($vehicles as $vehicle) {

            $price = number_format($vehicle->price, 2);

            echo <<<FOREACHVEHICLE
            <tr>
                <td class="top-aligned">
                    <img class="thumbnail" src="images/$vehicle->image" alt="vehicle picture">
                </td>
                <td>
                    <p class="vehicle-make">$vehicle->make</p>
                    <p class="vehicle-model">$vehicle->model</p>
                    <hr class="vehicle-hr">
                    <p class="right-aligned"><span class="data-label">Year: </span><span class="vehicle-year">$vehicle->year</span>
                    &nbsp;&nbsp;<span class="data-label">Mileage: </span><span class="vehicle-mileage">$vehicle->mileage</span></p>
                    <p class="vehicle-price right-aligned">$$price</p>

                    <!-- form for payment calculation -->

                    <form action="payment-plan.php" method="post">
                        <input type="hidden" name="make" value="$vehicle->make">
                        <input type="hidden" name="model" value="$vehicle->model">
                        <input type="hidden" name="price" value="$vehicle->price">
                        <input type="hidden" name="image" value="$vehicle->image">
                        <p>Choose your repayment duration: 
                            <select id="repayment-duration" name="repayment-duration">
                                <option value="24">24</option>
                                <option value="36">36</option>
                                <option value="48">48</option>
                                <option value="60">60</option>
                            </select>
                            months
                        </p>
                        <p>Choose your credit health:
                            <select id="interest-rate" name="interest-rate">
                                <option value="2.99">Excellent credit 2.99% APR</option>
                                <option value="7.99">Average credit 7.99% APR</option>
                                <option value="13.99">In a financial crunch 13.99% APR</option>
                            </select>
                            <br /><br />
                        <p class="right-aligned"><button type="submit">See your personalised payment plan &gt;&gt;&gt;</button></p>
                    </form>

                    <hr />
                </td>
            </tr>
            FOREACHVEHICLE;
        }
        ?>
    </tbody>

</table>
</div>

</body>

<footer>
    <?php include "footer.php" ?>
</footer>

</html>