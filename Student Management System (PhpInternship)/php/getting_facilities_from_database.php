<?php
$connect= mysqli_connect('localhost','root','','php_internship');
$cmd= "SELECT facilities_id FROM students_form WHERE id=37";
//$get="SELECT facilities.id, facilities.facility_name, students_form.facilities_id FROM facilities,students_form WHERE students_form.id=37";

$res1=mysqli_query($connect,$cmd);
// $res2=mysqli_query($connect,$get);
echo '<br>';
echo '<br>';
while($view=mysqli_fetch_assoc($res1))

 {
     
$split= explode(',',$view['facilities_id']);


// echo '<pre>';
// print_r ($split);
// echo '<br>';
$size= sizeof($split);
echo 'size= '.$size;
echo '<br>';
 

for($t=0;$t<$size;$t++)
{
    
    
    $ftc="SELECT * FROM facilities WHERE id=$split[$t]";
    $qwe=mysqli_query($connect,$ftc);
    $rt=mysqli_fetch_array($qwe);
    $fac= $rt['facility_name'];
    $arr=array($fac);   
    $yt=implode(',',$arr);
    echo  $yt.',';
 
}
 }


//$view=mysqli_fetch_array($res1);
// $view1=mysqli_fetch_array($res2);


// echo $view['facilities_id'];
// echo '<br>';
//echo $view['facility_name'];
// while($view1=mysqli_fetch_array($res2))
// {
//     $str=$view1['facilities_name'];
//   // $imp=implode(',',$str);
//    echo '<br>';
//    echo '<br>';
//    echo $imp;

//    echo '<br>';
//    echo '<br>';
// print_r ($view1['facility_name']);
// echo '<br>';
//  echo '<br>';
//echo $fac;
//echo $split[1];
//echo $split[$t].'=';



 
//echo $split;
// }


 
 
 
 
 // explode(',',$view1['facilities_id']);
 //  echo '<pre>';
 //  print_r($view1['facilities_id']);
// {
// echo '<br>';
// echo $view['facilities_id'];
// echo '<br>';
// }
// $myString = "9,admin@example.com,8";
// $myArray = explode(',', $myString);
// print_r($myArray);

?>