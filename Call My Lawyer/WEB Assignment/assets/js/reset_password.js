function check_password(form){
	var password_text_1 = form.n_password.value;
	var password_text_2 = form.c_n_password.value;
	
	if(password_text_1 != password_text_2){
		alert("Entered passwords do not match, Please re-enter");
		return false;
	}
	else{
		return true;
	}
}
