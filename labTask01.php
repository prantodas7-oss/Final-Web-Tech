<!DOCTYPE html>
<html>
<head>
    <title>University Cafeteria Billing</title>
</head>
<body>

<?php


$studentName = "Pranto Das";
$studentID = "23-55449-3";


$foodChoice = 1;
$quantity = 6;


switch($foodChoice)
{
    case 1:
        $foodItem = "Burger";
        $price = 5;
        break;

    case 2:
        $foodItem = "Pizza";
        $price = 8;
        break;

    case 3:
        $foodItem = "Sandwich";
        $price = 4;
        break;

    case 4:
        $foodItem = "Coffee";
        $price = 3;
        break;

    default:
        $foodItem = "Invalid";
        $price = 0;
}


$total = $price * $quantity;

// Discount
if($total >= 30)
{
    $discount = 20;
}
else if($total >= 20)
{
    $discount = 10;
}
else
{
    $discount = 0;
}


$discountAmount = ($total * $discount) / 100;
$finalBill = $total - $discountAmount;



echo "================================<br>";
echo "UNIVERSITY CAFETERIA<br>";
echo "================================<br><br>";

echo "Student Name : $studentName <br>";
echo "Student ID : $studentID <br><br>";
echo "Food Item : $foodItem <br>";
echo "Price : $$price <br>";
echo "Quantity : $quantity <br><br>";

echo "Ordered Items:<br>";

for($i=1; $i<=$quantity; $i++)
{
    echo "Item $i : $foodItem <br>";
}

echo "<br>";
echo "Subtotal : $$total <br>";
echo "Discount : $discount% <br>";
echo "Discount Amount : $$discountAmount <br>";
echo "Final Bill : $$finalBill <br><br>";

echo "Thank you for visiting!<br>";
echo "================================";

?>

</body>
</html>