function validateInput(){

	var rv = true;

	if(document.getElementById('clientID').value == -1 ){
		document.getElementById("friend").style.border="solid red";
		document.getElementById("friend").style.borderWidth="1px";
		rv = false;
	} else {
		document.getElementById("friend").style.border="";
		document.getElementById("friend").style.borderWidth="1px"
	}

	var trasactionEvent = document.getElementById('transactionEvent').value;
	if(trasactionEvent == null || trasactionEvent.length < 1){
		document.getElementById('transactionEvent').style.border="solid red";
		document.getElementById("transactionEvent").style.borderWidth="";
		rv = false;
	} else {
		document.getElementById('transactionEvent').style.border="";
		document.getElementById("transactionEvent").style.borderWidth="";
	}

	var amount = document.getElementById('amount').value;
	if(isNaN(amount) || amount == ""){
		document.getElementById('amount').style.border="solid red";
		document.getElementById("amount").style.borderWidth="1px";
		rv = false;
	} else {
		document.getElementById('amount').style.border="";
		document.getElementById("amount").style.borderWidth="";
	}	
	return rv;
};