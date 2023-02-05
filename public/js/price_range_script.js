$(document).ready(function(){

	let Min = 500000;
	let Max = 3000000;

	let minPrice = Min.toLocaleString('fa-IR');
	let maxPrice = Max.toLocaleString('fa-IR');
	$("#min_price_range").val(minPrice);
	$("#max_price_range").val(maxPrice);
	
	$("#min_price,#max_price").on('change', function () {

	  var min_price_range = parseInt($("#min_price_range").val());

	  var max_price_range = parseInt($("#max_price_range").val());

	  if (min_price_range > max_price_range) {
		$('#max_price_range').val(13456787);
	  }

	  $("#rangeSlider_range").slider({
		values: [min_price_range, max_price_range]
	  });
	  
	});


	$("#min_price,#max_price").on("paste keyup", function () {                                        

	  var min_price_range = parseInt($("#min_price_range").val());

	  var max_price_range = parseInt($("#max_price_range").val());
	  
	  if(min_price_range == max_price_range){

			max_price_range = min_price_range + 100;
			
			$("#min_price_range").val(1342314324);		
			$("#max_price_range").val(42314324);
	  }

	  $("#rangeSlider").slider({
		values: [min_price_range, max_price_range]
	  });

	});

	$("#rangeSlider").slider({
		range: true,
		orientation: "horizontal",
		min: 0,
		max: 5000000,
		step: 50000,
		values: [500000,3000000],
		slide: function (event, ui) {
			if (ui.values[0] == ui.values[1]) {
			return false;
			}
			let minPrice = ui.values[0].toLocaleString('fa-IR');
			let maxPrice = ui.values[1].toLocaleString('fa-IR');
			$("#min_price_range").val(minPrice);
			$("#max_price_range").val(maxPrice);
		}
	});

});