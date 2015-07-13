<div class="tab-pane" id="add_tipul">  

<form class="form-horizontal" role="form" method="post" action="inserts/insert_tipul.php">

    <div class="form-group">
        
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-2">
            <!-- input type="text" class="form-control" name="name" placeholder="First & Last Name" value="" -->
			<input type="text" class="form-control patlist" list="patientsList" name="name" placeholder="First & Last Name" value="" autofocus autocomplete="on" maxlength="30">
 			<datalist id="patientsList"></datalist>
			<script>window.onload=getPatients;</script>
			<script src="js/main.js"></script>
        </div>

        <label for="date1" class="col-sm-1 control-label">Date</label>
	    <div class="col-sm-2">
      	    <input type="date" class="form-control" name="date1" value = "<?php echo date('Y-m-d'); ?>" >
   	    </div>
   	    
   	    <label for="price" class="col-sm-1 control-label">Price</label>
	    <div class="col-sm-2">
      	    <input type="number" class="form-control" name="price" step = 10 value = 300 >
   	    </div>

    </div>

    <div class="form-group">
        <label for="what_we_did" class="col-sm-2 control-label">Ma Asinu?</label>
        <div class="col-sm-3">
            <textarea type="text" class="form-control" name="what_we_did" rows = 2></textarea>
        </div>
        
        <label for="main_concern" class="col-sm-2 control-label">Tluna Ikarit</label>
        <div class="col-sm-3">
            <textarea type="text" class="form-control" name="main_concern" rows = 2></textarea>
        </div>
    </div>
    
    <div class="form-group">
        <label for="home_work" class="col-sm-2 control-label">HomeWork</label>
        <div class="col-sm-3">
            <textarea type="text" class="form-control" name="home_work" rows = 2></textarea>
        </div>
        
        <label for="comments" class="col-sm-2 control-label">Comments</label>
        <div class="col-sm-3">
            <textarea type="text" class="form-control" name="comments" rows = 2></textarea>
        </div>

    </div>

    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <! Will be used to display an alert to the user>
        </div>
    </div>
</form>

</div>  
