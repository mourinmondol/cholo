<?php
require_once './admin/config/config.php';
//Get DB instance. i.e instance of MYSQLiDB Library
$db = getDbInstance();
//Get result of the query.
$transports = "SELECT * FROM transports where type='Airplane'";
$result = $db->query($transports);

include_once 'header.php';
?>
<div class="col-md-12">
    <div class="container">
        <div class="row">    
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Route</th>
                        <th>No-of-Airplanes</th>
                        <th>Owner</th>
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
                            <td><?php echo htmlspecialchars($row['no_of_transport']) ?> </td>
                            <td><?php echo htmlspecialchars($row['owner']) ?> </td>
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