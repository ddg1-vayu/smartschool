function check_password()
	{
		var password, confirm_psw;
		
		password = document.frm.new.value;
		confirm_psw = document.frm.new1.value;

		if (password != confirm_psw)
			alert ("Your Passwords do not match.");
	}