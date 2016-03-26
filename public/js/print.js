$( document ).ready(function(){
	
	var source = document.body.innerHTML;
	var data = document.getElementById('print_details').innerHTML;
	document.body.innerHTML = data;
	window.print();
	document.body.innerHTML = source;
})