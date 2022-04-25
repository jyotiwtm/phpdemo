<?php 
include '../connection.php';
include '../header.php';

/*
 * AVG(column_name)
 * SUM(column_name)
 * COUNT(column_name)
 * MAX(column_name)
 * MIN(column_name)
 * 
 */


$query = "SELECT SUM(amount) AS amount_sum, AVG(amount) AS amount_avg, COUNT(uid) AS count, MAX(amount) AS max_amount,MIN(amount) AS min_amount FROM transaction ";
$result = mysqli_query($connection, $query);
if(mysqli_num_rows($result) > 0 ){
//$row = mysqli_fetch_object($result);
//echo "<pre>";
//print_r($row);
//echo "</pre>";


}
$counter = 0;
?>
<table class="table table-boardered table-striped">
    <thead>
        <tr>
            <th>Sno.</th>
            <th>SUm</th>
             <th>AVG</th>
             <th>Record Count</th>
              <th>MAX Amount</th>
               <th>MIN Amount</th>

          
        </tr>
    </thead>
    <tbody>
        <?php

$row = mysqli_fetch_object($result)
    ?>
        <tr>
            <td><?= ($counter+1)?></td>
            <td><?= $row->amount_sum?></td>
            <td><?= $row->amount_avg?></td>
            <td><?= $row->count?></td>
            <td><?= $row->max_amount?></td>
            <td><?= $row->min_amount?></td>
         
        </tr>
        <?php
    $counter++;

?>
        </tbody>
    </table>
    <?php
echo "counter: $counter | ".mysqli_num_rows($result);


include '../footer.php';
 ?>