<?php 
include '../connection.php';
include '../header.php';


$query = "SELECT * FROM user ORDER BY recid ASC";
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
            <th>UserId</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Reg Date</th>
        </tr>
    </thead>
    <tbody>
        <?php

while ($row = mysqli_fetch_object($result)) {
    ?>
        <tr>
            <td><?= ($counter+1)?></td>
            <td><?= $row->uid?></td>
            <td><?= $row->name?></td>
            <td><?= $row->email?></td>
            <td><?= $row->mobile?></td>
            <td><?= $row->reg_date?></td>
        </tr>
        <?php
    $counter++;
}
?>
        </tbody>
    </table>
    <?php
echo "counter: $counter | ".mysqli_num_rows($result);


include '../footer.php';
 ?>