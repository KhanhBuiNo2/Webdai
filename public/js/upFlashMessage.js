$("div.alert").delay(3000).slideUp();
function deleteConfirm(msg){
	if(window.confirm(msg)){
		return true;
	}
	return false;
}
