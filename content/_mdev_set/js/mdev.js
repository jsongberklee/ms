jQuery(document).ready(function() {
	
	var params = {};
	var x = {};
	window.location.search.substr(1).split("&").forEach(function(item){
		params[item.split("=")[0]] = item.split("=")[1];
	});

	if(params.cat1){
		var cat1select = $('select[name=dept] option[value='+params.cat1+']');
		$('select[name=dept] option[value='+params.cat1+']').attr("selected", "selected");		
		//console.log(cat1select);
		if(params.cat2){
			setTimeout(function(){
				console.log(cat1select);
				var cat2select = $('select[name=subject] option[value='+params.cat2+']');
				console.log(cat2select);
				$('select[name=subject] option[value='+params.cat2+']').attr("selected", "selected");
			}, 2000);
		}
	}
});