<?php
include_once 'header.php';
require_once './admin/config/config.php';
//Get DB instance. i.e instance of MYSQLiDB Library
$db = getDbInstance();
//Get result of the query.
if(isset($_POST['search'])){
    $select1 = $_POST['select1'];
    $select2 = $_POST['select2'];
    $select3 = $_POST['select3'];
    $query = "select * from transports where s_station = '$select1' AND e_station='$select2' AND type='$select3'";
    $result = $db->query($query);
}
?>
<div class="col-md-12">
    <div class="container">
        <div class="row">
        <h2>All <?php echo htmlspecialchars($select3);?> From <?php echo htmlspecialchars($select1);?> To <?php echo htmlspecialchars($select2); ?></h2>    
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Route</th>
                        <th>Phone</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Departure</th>
                        <th>Arrival</th>
                        <th>Fare</th>
                        <th>Class</th>
                        <th>Offday</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $row) : ?>
                        <tr>
                            <td><?php echo $row['t_id'] ?></td>
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td><?php echo htmlspecialchars($row['route']) ?> </td>
                            <td><?php echo htmlspecialchars($row['contact']) ?> </td>
                            <td><?php echo htmlspecialchars($row['s_station']) ?> </td>
                            <td><?php echo htmlspecialchars($row['e_station']) ?></td>
                            <td><?php echo htmlspecialchars($row['departure']) ?> </td>
                            <td><?php echo htmlspecialchars($row['arrival']) ?> </td>
                            <td><?php echo htmlspecialchars($row['fare']) ?> </td>
                            <td><?php echo htmlspecialchars($row['class']) ?> </td>
                            <td><?php echo htmlspecialchars($row['offday']) ?> </td>
                        </tr>
                    <?php endforeach; ?>  
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
?>