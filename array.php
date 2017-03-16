<h2> Array example </h2>
<?php
    $students = array(
        array("fname"=> 'Ann', 'lname'=>'Smith'),
        array("fname"=> 'Tim', 'lname'=>'Smith'),
        array("fname"=> 'Lisa', 'lname'=>'Jones'),
        array("fname"=> 'Tom', 'lname'=>'Daniels'),
    );

?>

<h3>Print one name from the array</h3>
<?php
    echo 'The first firstname is '.$students[0]['fname'];
?>

<h3>Print the whole array</h3>
<?php
    foreach ($students as $row) {
        echo $row['fname'].' '.$row['lname'].'<br>';
    }
?>

<h3>Names in a table</h3>
<table class="table table-striped table-hover">
    <tr>
        <th> First name </th>  <th> Last name </th> 
    </tr>
    <?php
        foreach ($students as $row) {
            echo '<tr><td>';
            echo $row['fname'];
            echo '</td><td>';
            echo $row['lname'];
            echo '</td></tr>';
        }
    ?>
</table>