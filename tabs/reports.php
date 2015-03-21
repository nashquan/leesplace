<?php 
$date2 = date('Y-m-d') ;
$date1 = Date('Y-m-d', strtotime("-2 month")) ;
?>


<div class="tab-pane" id="reports">  
<form class="form-horizontal" role="form" method="post" action = "inserts/get_report.php">
	<div class="form-group">
	<label class="control-label col-sm-2" for="name">Name:</label>
  	<div class="col-sm-3">
		<input type="text" class="form-control" name="name" placeholder="Name"> 
  	</div>
</div>

<div class="form-group">
	<label class="control-label col-sm-2" for="pwd">Dates:</label>
	<div class="col-sm-3">          
		<input type="date" class="form-control" id="date1" value="<?php echo $date1; ?>">
	    <p class="help-block">Start date</p>
	</div>
	<div class="col-sm-3">          
		<input type="date" class="form-control" id="date2" value="<?php echo $date2; ?>">
		<p class="help-block">End date</p>
	</div>
</div>
	

	<div class="form-group">
	<div class="col-xs-2" align = "right">
		<label class="checkbox"> Show:</label>
	</div>
	<div class="col-md-1 col-sm-2 col-xs-3">
	<label class="checkbox-inline">
		<input type="checkbox" name="tipulim" checked>Groups
    </label>
	</div>
	<div class="col-md-1 col-sm-2 col-xs-3">
    <label class="checkbox-inline">
		<input type="checkbox" name="tipulim">Tipulim      
    </label>
	</div>
	<div class="col-md-1 col-sm-2 col-xs-3">
	<label class="checkbox-inline">
    <input type="checkbox" name="tipulim">Payments
    </label>
	</div>
		
	</div>
	
	 <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="gen_report" name="submit" type="submit" value="Generate" class="btn btn-primary">
        </div>
    </div>
	
	
    
</div>
</form>

	
</div>  
