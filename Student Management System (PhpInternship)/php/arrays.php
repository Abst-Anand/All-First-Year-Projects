<?php
/*
session_start();
echo '<h3>Login Unsuccessful</h3>';
echo '<br>';
echo 'Please Enter correct credentials';
echo '<br>';
echo $_SESSION['firstname'];
echo '<br>';
echo $_SESSION['lastname'];
 */
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="js/js2.js" type="text/javascript"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>
    <script>
         //DataTable
         $(document).ready(function () {
            $('#example').DataTable({
                columnDefs: [{
                    targets: [0],
                    orderData: [0, 1]
                }, {
                    targets: [1],
                    orderData: [1, 0]
                }, {
                    targets: [4],
                    orderData: [4, 0]
                }]
            });
        });

    </script>
    <title> 2D Array Php</title>

</head>

<body>
    <?php

    /*
    $table_array= array(['College','Location','Courses','Fee'],['SIT','BBSR','Btech/Msc','1.45L']);
    echo '<pre>';
    print_r ($table_array);
    echo '<br>';
    */
    
    $table_array=array
    (
        array('College Name','Location','Courses Offered','Fee Per Semester','No. of Students'),

        array('SIT','Bhubaneshwar','BTech/MSc','1.45L','1000/500'),

        array('SIT','Sambalpur','BTech/MSc','1.25L','800/400'),

        array('VIT','Vellore','BTech/MTech/MSc','3.25L','1800/1200/900'),

        array('IIT','Delhi','BTech/MTech/MSc','1.20L','800/200/900'),

        array('BITS','Pilani','BTech/MTech/MSc','4.20L','1000/1000/500'),
    );
    echo '<pre>';
    print_r ($table_array);
    echo '<br>';
   // echo $table_array[0][0];
   
   //Table Using Loop
   echo '<h3 style="text-align:center;">Table Using Loop</h3>';
   echo  '<table style="border: 4px solid grey;padding:1%;margin:2% auto;word-spacing:1px;" cellspacing=40 cellpadding=4>';
    for($i=0; $i<6; $i++)
    {
        echo '<tr>';
        for($j=0; $j<5; $j++)
        {            
            echo '<td>'.$table_array[$i][$j].'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';

    //DataTable using Loop
    echo '<h3 style="text-align:center;">DataTable Using Loop</h3>';
    echo '<div style="margin: 5%;"><table id="example" class="display" style="width:100%;border: 4px solid grey;margin:0px;">';
    echo '<thead>';
    for($i=0; $i<1; $i++)
    {
        echo '<tr>';
        for($j=0; $j<5; $j++)
        {            
            echo '<th>'.$table_array[$i][$j].'</th>';
        }
        echo '</tr>';
    }
    echo '</thead>';

    for($i=1; $i<6; $i++)
    {
        echo '<tbody>';
        echo '<tr>';
        for($j=0; $j<5; $j++)
        {            
            echo '<td>'.$table_array[$i][$j].'</td>';
        }
        echo '</tr>';
        echo '</tbody>';
    }
    ?>

    
    <h3 style="text-align:center;">Table</h3> 


    <!-- HARD CODING:

    <table style="border: 4px solid grey;padding:1%;margin:1% auto;word-spacing:1px;" cellspacing=40 cellpadding=4 >
        <tr>
            <td><?php echo $table_array[0][0]?></td>
            <td><?php echo $table_array[0][1]?></td>
            <td><?php echo $table_array[0][2]?></td>
            <td><?php echo $table_array[0][3]?></td>
            <td><?php echo $table_array[0][4]?></td>
        </tr>

        <tr>
            <td><?php echo $table_array[1][0]?></td>
            <td><?php echo $table_array[1][1]?></td>
            <td><?php echo $table_array[1][2]?></td>
            <td><?php echo $table_array[1][3]?></td>
            <td><?php echo $table_array[1][4]?></td>
        </tr>

        <tr>
            <td><?php echo $table_array[2][0]?></td>
            <td><?php echo $table_array[2][1]?></td>
            <td><?php echo $table_array[2][2]?></td>
            <td><?php echo $table_array[2][3]?></td>
            <td><?php echo $table_array[2][4]?></td>
        </tr>

        <tr>
            <td><?php echo $table_array[3][0]?></td>
            <td><?php echo $table_array[3][1]?></td>
            <td><?php echo $table_array[3][2]?></td>
            <td><?php echo $table_array[3][3]?></td>
            <td><?php echo $table_array[3][4]?></td>
        </tr>
                 <tr>
                    <td><?php echo $table_array[4][0]?></td>
                    <td><?php echo $table_array[4][1]?></td>
                    <td><?php echo $table_array[4][2]?></td>
                    <td><?php echo $table_array[4][3]?></td>
                    <td><?php echo $table_array[4][4]?></td>
                 </tr>
           

           
                 <tr>
                    <td><?php echo $table_array[5][0]?></td>
                    <td><?php echo $table_array[5][1]?></td>
                    <td><?php echo $table_array[5][2]?></td>
                    <td><?php echo $table_array[5][3]?></td>
                    <td><?php echo $table_array[5][4]?></td>
                 </tr>
    </table>

    <h3 style="text-align:center;">DataTable</h3>


    <div style="margin: 5%;">
        <table id="example" class="display" style="width:100%;border: 4px solid grey;">
            <thead>
                <tr>

                   <th><?php echo $table_array[0][0]?></th>
                   <th><?php echo $table_array[0][1]?></th>
                   <th><?php echo $table_array[0][2]?></th>
                   <th><?php echo $table_array[0][3]?></th>
                   <th><?php echo $table_array[0][4]?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                   <td><?php echo $table_array[1][0]?></td>
                   <td><?php echo $table_array[1][1]?></td>
                   <td><?php echo $table_array[1][2]?></td>
                   <td><?php echo $table_array[1][3]?></td>
                   <td><?php echo $table_array[1][4]?></td>
                </tr>
             
            </tbody>
            <tbody>
                 <tr>
                    <td><?php echo $table_array[2][0]?></td>
                    <td><?php echo $table_array[2][1]?></td>
                    <td><?php echo $table_array[2][2]?></td>
                    <td><?php echo $table_array[2][3]?></td>
                    <td><?php echo $table_array[2][4]?></td>
                 </tr>
            </tbody>

            <tbody>
                 <tr>
                    <td><?php echo $table_array[3][0]?></td>
                    <td><?php echo $table_array[3][1]?></td>
                    <td><?php echo $table_array[3][2]?></td>
                    <td><?php echo $table_array[3][3]?></td>
                    <td><?php echo $table_array[3][4]?></td>
                 </tr>
            </tbody>

            <tbody>
                 <tr>
                    <td><?php echo $table_array[4][0]?></td>
                    <td><?php echo $table_array[4][1]?></td>
                    <td><?php echo $table_array[4][2]?></td>
                    <td><?php echo $table_array[4][3]?></td>
                    <td><?php echo $table_array[4][4]?></td>
                 </tr>
            </tbody>

            <tbody>
                 <tr>
                    <td><?php echo $table_array[5][0]?></td>
                    <td><?php echo $table_array[5][1]?></td>
                    <td><?php echo $table_array[5][2]?></td>
                    <td><?php echo $table_array[5][3]?></td>
                    <td><?php echo $table_array[5][4]?></td>
                 </tr>
            </tbody>
        </table>
    
    </div>
  -->
</body>
</html>