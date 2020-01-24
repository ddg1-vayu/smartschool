

function check_sex()
{
	var sex = document.frm.sex.value;
	if (sex !== "Male" || sex !== "male" || sex !== "MALE" || sex !== "Female" || sex !== "female" || sex !== "FEMALE")
		alert ("Please enter whether male or female.");
}

function check_phone()
{
	var phone = document.frm.phone.value;
	if (document.frm.phone.value.length != 10)
		alert("Phone number should be exactly 10 numbers long.");
}

/*function check_country()
	{
		var country = document.frm.country.value;
		if (country !== "India" || country !== "india" || country !== "INDIA")
			alert ("You are Not Eligible to Register.");
	}*/