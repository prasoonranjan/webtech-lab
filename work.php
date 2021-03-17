<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Worksheet 2</title>
</head>

<body><?php
$taxcode="TC";
$price=1500;
$tax=5;
if ($taxcode=="TC")
{
    $price=$price+($price*($tax/100));
}
echo "Price is:- ", $price;
	echo "</br>"
?>
	<?php
$opCode=11;
if ($opCode==11)
{
    $A=100.5;
    $B=200.25;
    echo "Sum is:-",$A+$B;
	
}
	echo "</br>"
?>

<?php
$currentNumber=50;
if ($currentNumber%2!=0)
{
    $currentNumber=$currentNumber*3+1;
}
else
{
    $currentNumber=$currentNumber/2;
    if ($currentNumber%2!=0)
    {
        $currentNumber=$currentNumber-1;
    }
}
echo "Number is:-",$currentNumber;
echo "</br>"	
?>
<?php 
$leapYear=NULL;
$year=2016;
if ($year%4==0)
{
    $leapYear=TRUE;
}
print($leapYear);
	echo "</br>"
?>
<?php
$distance=150;
if($distance>0 and $distance<=90)
{
    $cost=5.00;
}
elseif($distance>90 and $distance<=300)
{
    $cost=8.00;
}
elseif($distance>300 and $distance<900)
{
    $cost=10.00;
}
elseif($distance>=900)
{
    $cost=12.00;
}
echo "Cost is:-",$cost;
?>



</body>
</html>