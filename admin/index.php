<?php
session_start();
require_once './config/config.php';
require_once 'includes/auth_validate.php';

//Get Input data from query string
$search_string = filter_input(INPUT_GET, 'search_string');
$filter_col = filter_input(INPUT_GET, 'filter_col');

//Get current page.
$page = filter_input(INPUT_GET, 'page');

//Per page limit for pagination.
$pagelimit = 20;

if (!$page) {
    $page = 1;
}

//Get DB instance. i.e instance of MYSQLiDB Library
$db = getDbInstance();
$select = array('t_id', 'name', 'type', 'route', 'no_of_transport','owner','contact','s_station','e_station','departure','arrival','fare','class','offday');

//Start building query according to input parameters.
// If search string
if ($search_string) 
{
    $db->where('name', '%' . $search_string . '%', 'like');
}

//Set pagination limit
$db->pageLimit = $pagelimit;

//Get result of the query.
$transports = $db->arraybuilder()->paginate("transports", $page, $select);
$total_pages = $db->totalPages;

// get columns for order filter
foreach ($transports as $value) {
    foreach ($value as $col_name => $col_value) {
        $filter_options[$col_name] = $col_name;
    }
    //execute only once
    break;
}
include_once 'includes/header.php';
?>

<!--Main container start-->
<div id="page-wrapper">
    <div class="row">

        <div class="col-lg-6">
            <h1 class="page-header">Transports</h1>
            <!--    Begin filter section-->
        <form class="form form-inline" action="">
            <label for="input_search">Search</label>
            <input type="text" class="form-control" id="input_search" name="search_string" value="<?php echo $search_string; ?>">
            <input type="submit" value="Go" class="btn btn-primary">

        </form>
<!--   Filter section end-->
        </div>
        <div class="col-lg-6" style="">
            <div class="page-action-links text-right">
	            <a href="add_transport.php?operation=create">
	            	<button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Add new </button>
	            </a>
            </div>
        </div>
    </div>
        <?php include('./includes/flash_messages.php') ?>
    <hr>


    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th class="header">#</th>
                <th>Name</th>
                <th>Type</th>
                <th>Route</th>
                <th>No of Transports</th>
                <th>Owner</th>
                <th>Contact No</th>
                <th>Starting Station</th>
                <th>Ending Station</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Fare</th>
                <th>Class</th>
                <th>Offday</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transports as $row) : ?>
                <tr>
	                <td><?php echo $row['t_id'] ?></td>
	                <td><?php echo htmlspecialchars($row['name']); ?></td>
	                <td><?php echo htmlspecialchars($row['type']) ?></td>
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
	                <td>
					<a href="edit_transport.php?transport_id=<?php echo $row['t_id'] ?>&operation=edit" class="btn btn-primary" style="margin-right: 8px;"><span class="glyphicon glyphicon-edit"></span>

					<a href=""  class="btn btn-danger delete_btn" data-toggle="modal" data-target="#confirm-delete-<?php echo $row['t_id'] ?>" style="margin-right: 8px;"><span class="glyphicon glyphicon-trash"></span></td>
				</tr>

						<!-- Delete Confirmation Modal-->
					 <div class="modal fade" id="confirm-delete-<?php echo $row['t_id'] ?>" role="dialog">
					    <div class="modal-dialog">
					      <form action="delete_transport.php" method="POST">
					      <!-- Modal content-->
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title">Confirm</h4>
						        </div>
						        <div class="modal-body">
						      
						        		<input type="hidden" name="del_id" id = "del_id" value="<?php echo $row['t_id'] ?>">
						        	
						          <p>Are you sure you want to delete this Transport?</p>
						        </div>
						        <div class="modal-footer">
						        	<button type="submit" class="btn btn-default pull-left">Yes</button>
						         	<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
						        </div>
						      </div>
					      </form>
					      
					    </div>
  					</div>
            <?php endforeach; ?>      
        </tbody>
    </table>


   
<!--    Pagination links-->
    <div class="text-center">

        <?php
        if (!empty($_GET)) {
            //we must unset $_GET[page] if previously built by http_build_query function
            unset($_GET['page']);
            //to keep the query sting parameters intact while navigating to next/prev page,
            $http_query = "?" . http_build_query($_GET);
        } else {
            $http_query = "?";
        }
        //Show pagination links
        if ($total_pages > 1) {
            echo '<ul class="pagination text-center">';
            for ($i = 1; $i <= $total_pages; $i++) {
                ($page == $i) ? $li_class = ' class="active"' : $li_class = "";
                echo '<li' . $li_class . '><a href="customers.php' . $http_query . '&page=' . $i . '">' . $i . '</a></li>';
            }
            echo '</ul></div>';
        }
        ?>
    </div>
    <!--    Pagination links end-->

</div>
<!--Main container end-->


<?php include_once './includes/footer.php'; ?>

