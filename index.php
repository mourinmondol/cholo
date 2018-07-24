<?php
include_once 'header.php';
?>
<div class="col-md-12">
  <div class="jumbotron">
    <form action="out.php" method="post" role="form" class="form-inline" class="container center_div" style="align-items: center">
      <div class="form-group">
        <label for="sel1">Select Starting Stop:</label>
        <select name="select1" class="form-control" id="sel1">
          <option value="Muhammadpur">Muhammadpur</option>
          <option value="value2">Shahbag</option>
          <option value="value3">Hularhat</option>
          <option value="value4">Sadarghat</option>
        </select>
      </div>
      <div class="form-group">
        <label for="sel1">Select Destination:</label>
        <select name="select2" class="form-control" id="sel2">
          <option value="value1">Shahbag</option>
					<option value="Arambagh">Arambagh</option>
					<option value="value2">Sukrabad</option>
					<option value="value3">Sadarghat</option>
				</select>
			</div>
			<div class="form-group">
		      <label for="sel1">Type:</label>
		      <select name="select3" value="select3" class="form-control" id="sel1">
		        <option value="Bus">Bus</option>
		        <option value="Tarin">Tarin</option>
		        <option value="Airplane">Airplane</option>
		        <option value="Launch">Launch</option>
		      </select>
		    </div>
			<input type="submit" name="search" value="search" class="btn btn-primary"></input>
		</form>
	</div>
	<div class="row">
		<div class="col-md-3">
			<h2>Buses</h2>
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="buses.php">View details »</a>
			</p>
		</div>
		<div class="col-md-3">
			<h2>Trains</h2>
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="trains.php">View details »</a>
			</p>
		</div>
		<div class="col-md-3">
			<h2>Launches</h2>
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="launches.php">View details »</a>
			</p>
		</div>
		<div class="col-md-3">
			<h2>Airplanes</h2>
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="airplanes.php">View details »</a>
			</p>
		</div>
	</div>
</div>
<?php
include_once 'footer.php';
?>