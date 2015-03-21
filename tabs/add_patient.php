
<div class="tab-pane" id="add_patient">  
<form class="form-horizontal" role="form" method="post" action="inserts/insert_patient.php">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        
		<div class="col-sm-2">
			<input type="text" class="form-control"  list="patientsList" id="new_patlist" name="name" placeholder="Name" autofocus autocomplete="on" maxlength="30">
 			<datalist id="patientsList"></datalist>
			<script>window.onload=getPatients;</script>
			<script src="js/main.js"></script>
		</div>

		<label for="year_of_birth" class="col-sm-2 control-label">Year Of Birth</label>
	<div class="col-sm-2">
      	    <input type="text" class="form-control" name="year_of_birth" placeholder="19..">
   	</div>

    </div>

    <div class="form-group">
        <label for="phone_number" class="col-sm-2 control-label">Phone Num</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="phone_number" placeholder="05..." value="">
        </div>
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-2">
            <input type="email" class="form-control" name="email" placeholder="me@you.com" value="">
        </div>

    </div>

   <div class="form-group">
        <label for="address" class="col-sm-2 control-label">Address</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="address" placeholder="city..." value="">
        </div>
	<label for="gender" class="col-sm-2 control-label">Gender</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="gender" placeholder="M/F" value="">
        </div>

    </div>


    <div class="form-group">
       <label for="comments" class="col-sm-2 control-label">Comments</label>
        <div class="col-sm-4">
            <textarea class="form-control" rows="2" name="comments"></textarea>
        </div>
    </div>

    <div class="form-group">
        <label for="how_arrived" class="col-sm-2 control-label">How did you get to me?</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="how_arrived" placeholder="">
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
