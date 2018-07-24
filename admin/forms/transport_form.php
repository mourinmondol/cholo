<fieldset>
    <div class="form-group">
        <label for="f_name">Transport Name *</label>
          <input type="text" name="name" value="<?php echo $edit ? $transport['name'] : ''; ?>" placeholder="" class="form-control" required="required" id = "name" >
    </div> 
 
    <div class="form-group">
        <label for="l_name">Type</label>
        <input type="text" name="type" value="<?php echo $edit ? $transport['type'] : ''; ?>" placeholder="" class="form-control" required="required" id="type">
    </div> 

    
    <div class="form-group">
        <label for="l_name">No of Transport</label>
        <input type="text" name="no_of_transport" value="<?php echo $edit ? $transport['no_of_transport'] : ''; ?>" placeholder="" class="form-control" required="required" id="no_of_transport">
    </div> 

    <div class="form-group">
        <label for="address">Owner</label>
         <input type="text" name="owner" value="<?php echo $edit ? $transport['owner'] : ''; ?>" placeholder="" class="form-control" required="required" id = "owner" >
    </div> 
    <div class="form-group">
        <label for="address">Contact no</label>
          <input type="phone" name="contact" value="<?php echo $edit ? $transport['contact'] : ''; ?>" placeholder="" class="form-control" required="required" id = "contact" >
    </div> 
    <div class="form-group">
        <label for="address">Route</label>
          <input type="text" name="route" value="<?php echo $edit ? $transport['route'] : ''; ?>" placeholder="" class="form-control" required="required" id = "route" >
    </div> 
    
    <div class="form-group">
        <label for="email">Departure</label>
            <input name="departure" value="<?php echo $edit ? $transport['departure'] : ''; ?>" placeholder="" class="form-control" id="departure" id = "departure">
    </div>
    <div class="form-group">
        <label>Arrival</label>
        <input name="arrival" value="<?php echo $edit ? $transport['arrival'] : ''; ?>"  placeholder="" class="form-control"  type="text" id = "arrival">
    </div>

    <div class="form-group">
        <label for="address">Starting Station</label>
          <input type="text" name="s_station" value="<?php echo $edit ? $transport['s_station'] : ''; ?>" placeholder="" class="form-control" required="required" id = "s_station" >
    </div> 
    <div class="form-group">
        <label for="address">Ending Station</label>
          <input type="text" name="e_station" value="<?php echo $edit ? $transport['e_station'] : ''; ?>" placeholder="" class="form-control" required="required" id = "e_station" >
    </div> 
    <div class="form-group">
        <label for="address">Fare</label>
          <input type="text" name="fare" value="<?php echo $edit ? $transport['fare'] : ''; ?>" placeholder="" class="form-control" required="required" id = "fare" >
    </div> 
    <div class="form-group">
        <label for="address">Class</label>
          <input type="text" name="class" value="<?php echo $edit ? $transport['class'] : ''; ?>" placeholder="" class="form-control" required="required" id = "class" >
    </div> 
    <div class="form-group">
        <label for="address">Offday</label>
         <input type="text" name="offday" value="<?php echo $edit ? $transport['offday'] : ''; ?>" placeholder="" class="form-control" required="required" id = "offday" >
    </div> 
    
    
    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>