<?php $kabala = 168 ; ?>

<div class="tab-pane" id="add_payment">  

<form class="form-horizontal" role="form" method="post" action="inserts/insert_payment.php">

   <div class="form-group">
        
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="name" placeholder="First & Last Name" value="">
        </div>

        <label for="date1" class="col-sm-1 control-label">Date</label>
	    <div class="col-sm-2">
      	    <input type="date" class="form-control" name="date1" value = "<?php echo date('Y-m-d'); ?>" >
   	    </div>
   	    
   	    <label for="amount" class="col-sm-1 control-label">Price</label>
	    <div class="col-sm-2">
      	    <input type="number" class="form-control" name="amount" step = 5 value = 600 >
   	    </div>
    </div>
    
    <div class="form-group">
        
        <label for="payment_type" class="col-sm-2 control-label">Payment Type</label>
        <div class="col-sm-2">
            <input list="payment_types" class="form-control" name="payment_type" placeholder="Select..." value="Cheque">
        </div>

        <label for="mispar_kabala" class="col-sm-1 control-label">Mispar Kabala</label>
	    <div class="col-sm-2">
      	    <input type="numbeR" class="form-control" name="mispar_kabala" value = "<?php echo $kabala; ?>" >
   	    </div>
   	    
		<label for="comments" class="col-sm-1 control-label">Comments</label>
	    <div class="col-sm-2">
      	    <input type="text" class="form-control" name="comments">
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


<datalist id="payment_types">
  <option value="Cheque">
  <option value="Cash">
  <option value="Transfer">
  <option value="Other">
</datalist> 

