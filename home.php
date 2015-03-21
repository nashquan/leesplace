<!DOCTYPE HTML>
<html>
<head>
  <title>Lee's place</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="icon" type="image/png"  href="http://www.photosnewhd.com/media/images/picture.jpg">
<script src="js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
<div class="jumbotron">
    <h1>One day...</h1>      
    <p></p>      
</div>

<ul class="nav nav-pills">
<!--     <li><a class = "col-xs-2" href="#add_patient" data-toggle="tab">Add Patient</a></li> -->
	<li><a href="#add_patient" data-toggle="tab">Add Patient</a></li>
    <li><a href="#add_tipul" data-toggle="tab">Add Tipul (+payment)</a></li>
    <li><a href="#add_group" data-toggle="tab">Add Group</a></li>
    <li><a href="#add_payment" data-toggle="tab">Payment</a></li>
    <li><a href="#edit" data-toggle="tab">Edit</a></li>
    <li><a href="#reports" data-toggle="tab">View Summaries</a></li>
	<li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Summaries <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#">Patients</a></li>
                <li><a href="#">Groups</a></li>
                <li><a href="#">Tipulim</a></li>
				<li><a href="#">Payments</a></li>
                <li class="divider"></li>
                <li><a href="#">Balance</a></li>
            </ul>
	</li>

</ul>
</div>

    
<div class="tab-content" style="padding-bottom: 20px; padding-top: 20px; border-bottom: 1px solid #ddd;">
<?php include 'tabs/add_tipul.php'?>  
<?php include 'tabs/add_patient.php'?>  
<?php include 'tabs/add_group.php'?>  
<?php include 'tabs/add_payment.php'?>  
<?php include 'tabs/edit.php'?>  
<?php include 'tabs/reports.php'?>  
</div>


</div>




<!--<script>-->
<!--form = document.getElementById("someForm");-->
<!--function askForSave() {-->
<!--        form.action="save_for_later.php";-->
<!--        form.action="http://box.sianware.com/echopost.php";-->
<!--        form.submit();-->
<!--}-->
<!--function askForSubmit() {-->
<!--        form.action="submit_for_approval.php";-->
<!--        form.submit();-->
<!--}-->
 
<!--</script>-->

</body>

</html>

