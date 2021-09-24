

<div style="color:black;border:4px double teal;text-align:center;background-color:aquamarine;">
                                         <!--rgb fails here!-->
<?php
/*
Form variables ( $_POST and $_GET)
Server variables ($_SERVER)

*/         


echo "Namaste World \u{1F600}"; 
//$linebreak=(echo '<br>');
//$linebreak;
echo '<br>';
echo '<br>';

$str1 = 'pikachu';
$str2 = 'pokemon';


if($str1 != $str2)
{
    echo 'Strings not equal';
    echo '<br>';
    echo '<br>';
    echo '<br>';
}
else
{
    echo 'Strings are equal';
    echo '<br>';
}


$num1 = 2;
$num2 = 9;
$num3 = 4;
$sum= $num1+$num2;
echo "$num2 + $num1 = $sum"; 


function mean($num1, $num2, $num3)
{
    $avg = ($num1 + $num2 + $num3)/3;
    echo "<br>";
    echo "<br>";
    echo "Mean of $num1, $num2, $num3 is: $avg" ;

}
mean($num1, $num2, $num3);


    echo "<br>";
    echo "<br>";
    
    echo 'Factorial of 5:';
    echo "<br>";
    $fact=1;

    for($i=1; $i<=5; $i++)
    {
        echo "  $fact * $i";
        echo '<br>';
        $fact = $fact * $i;
        echo '<br>';       
    }
    echo "= $fact";
    echo '<br>';  
    echo '<br>';  

   // echo "(2*4 = 8)";

   echo "Date , Time : ";
   echo date('d-m-Y, h:m');
   echo "<br>";

   echo "\u{1F607}";
?>
</div>