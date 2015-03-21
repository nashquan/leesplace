function getPatients() {
    var url, carsOption;
    url = '/tmp/patients.json';

    $.getJSON(url, function(data) {
    //populate the cars datalist
        $(data).each(function() {
            carsOption = "<option value=\"" + this.name + "\"> </option>";
            $('#patientsList').append(carsOption);
        });
    });

	var inputs = document.querySelectorAll(".patlist");
var k;
for (k =0; k < inputs.length ; k++){
inputs[k].addEventListener('blur', function() {
  	var optionFound = false,
    datalist = this.list;
	
    for (var j = 0; j < datalist.options.length; j++) {
		if (this.value === ""){
	  	optionFound = true;
		break;
	}
		if (this.value == datalist.options[j].value ) {
            optionFound = true;
            break;
        }
    }
    if (optionFound) {
      this.setCustomValidity('');
    } else {
      this.setCustomValidity('Patient not in list!');
    }
  });
}

	var input1 = document.querySelectorAll("#new_patlist");
	input1[0].addEventListener('blur', function() {
  	var optionFound = false, datalist = this.list;
	
    for (var j = 0; j < datalist.options.length; j++) {
		if (this.value == datalist.options[j].value) {
            optionFound = true;
            break;
        }
    }
    if (optionFound) {
      this.setCustomValidity('Patient already exists!');
    } else {
      this.setCustomValidity('');
    }
  });
}


