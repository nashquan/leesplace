<div class="tab-pane" id="add_group">  

<form class="form-horizontal" role="form" method="post" action="inserts/insert_group.php">
    
    <div class="form-group">
		<div class="hidden-xs col-sm-2"> </div> 
        <label for="date" class="col-xs-6 col-sm-3">Date</label>
		<label for="hour" class="col-xs-6 col-sm-3">Hour</label>
	</div>
	
	<div class="form-group">
		<div class="hidden-xs col-sm-2"> </div> 
	    <div class="col-xs-6 col-sm-3">
            <input type="date" class="form-control" name="date1" value = "<?php echo date('Y-m-d'); ?>" >
        </div>
	    <div class="col-xs-6 col-sm-3">
      	    <input type="text" class="form-control" name="hour1" placeholder="19/20">
   	    </div>
    </div>

    <div class="form-group">
		<div class="hidden-xs col-sm-2"> </div> 
        <label class="col-xs-4 col-sm-2">Name</label>
        <label class="col-xs-4 col-sm-2">Price</label>
        <label class="col-xs-4 col-sm-2">Comments</label>
    </div>

			<script>window.onload=getPatients;</script>
			<script src="js/main.js"></script>
<?php 
foreach ( array(1,2,3,4,5,6,7) as $i)
echo 
    '<div class="form-group">
 		<div class="hidden-xs col-sm-2"> </div> 
        <div class="col-xs-4 col-sm-2">
            <input type="text" class="form-control patlist" list="patientsList" name="name',$i,'" placeholder="Name' ,$i, '" value="" autofocus autocomplete="on" maxlength="30">
			<datalist id="patientsList"></datalist>
	
        </div>
        <div class="col-xs-4 col-sm-2">
            <input type="text" class="form-control" name="price',$i,'" value=60>
        </div>
        <div class="col-xs-4 col-sm-2">
            <input type="text" class="form-control" name="comment',$i,'" value="">
        </div>
    </div>'
?>
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
